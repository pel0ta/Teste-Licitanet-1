<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class EventController extends Controller
{
    public function index(){
       $products=Product::all();

        return view('welcome',['products'=>$products]);
    } 
    public function Criarproduto(){
        return view('CriarProduto');
    }
    public function Mostarcidades(){
        return view('ListarCidades');
    }
    public function store(Request $request){
        $product=new Product;
        $product->nome= $request->nome;  
        $product->valor= $request->valor; 
        $product->estoque= $request->estoque; 
        $product->cidade= $request->cidade;
        
        $product->save();
        return redirect('/');
    }
}

