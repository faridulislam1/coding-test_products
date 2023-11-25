<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product;
    //Protected $fillable =['name','quantity','price'];

    public static function saveProduct($request){
        $validatedData = $request->validate([
            'name' => 'required|string|min:5|max:30',
            'quantity' => 'required|integer|min:3',
            'price' => 'required|numeric|min:5',
        ]);

        self::$product = new Product();
        self::$product->name = $validatedData['name'];
        self::$product->quantity = $validatedData['quantity'];
        self::$product->price = $validatedData['price'];
        self::$product->save();
    }

      public static function deleteProduct($id){
        self::$product=Product::find($id);
        self::$product->delete();

    }
      public static  function productUpdate($request){
        self::$product=Product::find($request->id);

             $request->validate([
            'name' => 'required|string|min:5|max:30',
            'quantity' => 'required|integer|min:3',
            'price' => 'required|numeric|min:5',
        ]);

        self::$product->name = $request->name;
        self::$product->quantity = $request->quantity;
        self::$product->price = $request->price;
        self::$product->save();



    }
}
