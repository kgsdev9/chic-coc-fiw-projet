<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('welcome');
    }


    public function detail_articles($id) {
        $detail = Article::find($id);
        return view('usersview.detailblog', compact('detail'));
    }

    public function viewarticles() {
        $articles  = Article::all();
        return  view('usersview.blog', compact('articles'));
    }

    public function indexAjax(){
        $categories=Category::get('name');

        dd($categories);
        $data= [];
        foreach($categories as $item){
          $data[] = $item['name'];
        }
        return $data;
    }


    public function shearchcate(Request $request){
        $input = $request->input();
        if($input['searchproduct']==null){
            return redirect()->back();
        }else{
            $category = Category::where('name',"LIKE",$request->input('searchcategory'))->first();

            if($category!=null){
              return redirect()->route('category.product',$category->id);
            }else{
              Alert::toast('Catégorie  introuvable ! ','info');
              return redirect()->back();
            }
        }

    }

}
