<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listProduct = Product::all();
        // foreach ($listProduct as $value) {
        //     echo $value->name. "<br>";
        // }

        // $product = Product::where("price", ">", 40000)
        //             ->orderBy("rate", "ASC")
        //             ->get();

        //$product = Product::find(1);

        //$product = Product::where("name", "Áo Sweater Nữ Dáng Rộng sdfg")->first();

        $product = Product::find(1);
        dd($product);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view("products.update", ["product" => $product]);
    }

    /**
     * Display a form create.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("products.create");

    }

    /**
     * Store data to database.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //B1 lay du lieu input tu phia client day len sever
        $data = $request->all();

        //B2 khoi tao model
        $productModel = new Product;

        //B3 gan gia tri cho model
        $productModel->name = $data["name"];
        $productModel->price = $data["price"];
        $productModel->image = $data["main-image"];
        $productModel->description = $data["description"];
        $productModel->rate = $data["rate"];
        $productModel->created_by = 1;
        $productModel->updated_by = 1;

        //B4 luu model vao database
        if ($productModel->save()) {
            return view("products.success", ["id" => $productModel->id]);
        }

    }

    public function update(Request $request)
    {
        $data = $request->all();

        //B1 lay gia tri id
        $id = $data["id"];

        //B2 tim kiem record theo id
        $product = Product::find($id);

        //B3 gan gia tri
        $product->name = $data["name"];
        $product->price = $data["price"];
        $product->image = $data["main-image"];
        $product->description = $data["description"];
        $product->rate = $data["rate"];
        $product->created_by = 1;
        $product->updated_by = 1;

        //B4 update model vao database
        if ($product->save()) {
            return view("products.update-success", ["id" => $product->id]);
        }
    }

}
