<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datos;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Pagination\CursorPaginator;
use Nette\Utils\Paginator as UtilsPaginator;
use PhpParser\Node\Stmt\Return_;

class productsController extends Controller
{
    const paginate=5;
    public function index(Request $request){
        
        $products= datos::paginate(5);
        $buzcar=$request->get('buzcar');

        $products=datos::where('name','like','%'.$buzcar.'%')->orWhere('lastname','like','%'.$buzcar.'%')->paginate(5);
        return view('layouts/datos/index', compact('products','buzcar'));
        
    }

    public function create(){
         $products= datos::paginate(5);
        return view('layouts/datos/create');
    }


    public function store(Request $request){

       $products = new datos();
       $products->name=$request->name;
       $products->lastname=$request->lastname;
       $products->save();
       
       $products= datos::all();
       return redirect('/datos');
    }

    public function destroy($id){
        
        $products= datos::findOrFail($id);
        $products->delete();
        $products= datos::all();
        return redirect('/datos');
    }
    public function update(Request $request, $id){
       
        $products= datos::find($id);
        $products->update($request->all());
        return redirect('/datos');
    }

    public function edit($id){
        return view('layouts/datos/edit',[
            'row'=>datos::find($id)
        ]);
    }
};

