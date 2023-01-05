<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\book;
use App\Http\Requests\StoreCategorysRequest;
use App\Http\Requests\UpdateCategorysRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class CategorysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            return view('categorys/index', [
                'pagetitle' => 'Categorys',
                'maintitle' => 'Writers in My Library',
                'categorys' => Category::where('name', 'like', '%'.$request->search.'%')->orWhere('id', 'like', '%'.$request->search.'%')->paginate(),
              
                'products' => Product::whereRelation('product', 'name', 'like', '%'.$request->search.'%')->get()
            ]);
        }else{
            return view('categorys/index', [
                'pagetitle' => 'Writers',
                'maintitle' => 'Writers in My Library',
                'categorys' => Category::all(),
                'products' => Product::all()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Membuat buku
    public function create()
    {
        return view('admin/createcategory',[
            'pagetitle' => "create Category",
            // 'writers'=> writer::all()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorysRequest $request)
    {
        Category::create([
            'name' => $request->name,
            'image' => $request->file('categoryphoto')->store('categoryphotos', 'public'),
        ]);

        return redirect('/admin_category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $category->load('product');

        return view('category_details', [
            'pagetitle' => 'Writer',
            'maintitle' => 'The writer',
            'category' => $category
        ]);        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view("categorys/partials/update-categorys-form", [
            "category"=>Category::findOrFail($id),
            "pagetitle"=>"Update Category"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductsRequest  $request
     * @param  \App\Models\Category  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategorysRequest $request, $id)
    {
        $category = Category::findOrFail($id);

        if ($request->file('categoryphoto')) {
            unlink('storage/'.$category->image);
            $category->update([
                "name" => $request->name,
                'image' => $request->file('categoryphoto')->store('categoryphotos', 'public'),
            
            ]);
        } else {
            $category->update([
                "name" => $request->name,
            ]);
        }

        return redirect("/admin_category");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect("/admin_category");
    }
}
