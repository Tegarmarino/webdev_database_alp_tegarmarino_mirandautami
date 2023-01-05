<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            return view('catalogue', [
                'pagetitle' => 'Categorys',
                'maintitle' => 'Writers in My Library',
                'categorys' => Category::where('name', 'like', '%'.$request->search.'%')->orWhere('id', 'like', '%'.$request->search.'%')->paginate(),

                'products' => Product::where('name', 'like', '%'.$request->search.'%')->orWhere('id', 'like', '%'.$request->search.'%')->paginate(),
            ]);
        }else{
            return view('catalogue', [
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
    public function create(Product $product)
    {
        $product->load('category');

        return view('products/index',[
            'pagetitle' => "create Product",
            'categorys'=> Category::all(),
            'products' => Product::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'image_title' => $request->file('photo-title')->store('productphotos', 'public'),
            'image_1' => $request->file('photo-1')->store('productphotos', 'public'),
            'image_2' => $request->file('photo-2')->store('productphotos', 'public'),
            'image_3' => $request->file('photo-3')->store('productphotos', 'public'),
            'image_4' => $request->file('photo-4')->store('productphotos', 'public'),
            'image_5' => $request->file('photo-5')->store('productphotos', 'public'),
            'image_6' => $request->file('photo-6')->store('productphotos', 'public'),
            'image_7' => $request->file('photo-7')->store('productphotos', 'public'),
            'image_8' => $request->file('photo-8')->store('productphotos', 'public'),
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        return redirect('/admin_product/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product->load('review');
        return view('product_details', [
            'pagetitle' => 'Writer',
            'maintitle' => 'The writer',
            'product' => $product,
            'users' => User::all(),
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
        return view("products/partials/update-products-form", [
            "product"=>Product::findOrFail($id),
            "pagetitle"=>"Update book"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductsRequest  $request
     * @param  \App\Models\Products  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request, $id)
    {
        $product = Product::findOrFail($id);

        
        if ($request->file('photo-title')) {
            unlink('storage/'.$product->image_title);
            $product->update([
                "name" => $request->name,
                "price" => $request->price,
                "description" => $request->description,
                'image_title' => $request->file('photo-title')->store('productphotos', 'public'),
                'image_1' => $request->file('photo-1')->store('productphotos', 'public'),
                'image_2' => $request->file('photo-2')->store('productphotos', 'public'),
                'image_3' => $request->file('photo-3')->store('productphotos', 'public'),
                'image_4' => $request->file('photo-4')->store('productphotos', 'public'),
                'image_5' => $request->file('photo-5')->store('productphotos', 'public'),
                'image_6' => $request->file('photo-6')->store('productphotos', 'public'),
                'image_7' => $request->file('photo-7')->store('productphotos', 'public'),
                'image_8' => $request->file('photo-8')->store('productphotos', 'public'),
            ]);
        } else {
            $product->update([
                "name" => $request->name,
                "price" => $request->price,
                "description" => $request->description,
            ]);
        }

        return redirect("/admin_product/create");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect("/admin_product/create");
    }

    public function category(){
        $categorys = Category::all();
        
        return redirect("/admin_product/create", ['category' => $categorys]);
    }

}
