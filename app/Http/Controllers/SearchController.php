<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function  search(Request $request)  {

   if($request->search)  {

        $searchProduct=  Product::where('name', 'LIKE', '%'.$request->search. '%')->latest()->paginate(15);
        return view('search', compact('searchProduct'));
   }




}
}
