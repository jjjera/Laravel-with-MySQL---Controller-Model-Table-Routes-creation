<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $productss = Product::all();
        return response()->json($productss);
        // print_r($productss);
    }

    public function store(Request $request)
    {
        $addArticle = new Product([
          'title' => $request->get('title'),
          'body' => $request->get('body')
        ]);
        $addArticle->save();


        return response()->json('Product Added Successfully.');
        print_r($addArticle);
    }


    public function edit(Request $request)
    {
        $input = $request->json()->all();
        // print_r($input);
        $id = $input['id'];
        $data = [
            'title' => $input['title'],
            'body' => $input['body'] 
        ];
        $result = Product::where('id', $id)->update($data);


        return response()->json('Product Updated Successfully.');
    }

    public function destroy(Request $request, $itemId)
    {
        // print_r($itemId);
      $product = Product::find($itemId);
      $product->delete();


      return response()->json('Product Deleted Successfully.');
    }
}
