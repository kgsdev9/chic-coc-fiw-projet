<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Coeur;
use App\Models\Order;
use App\Models\Article;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index() {
        $orders = Order::where('user_id', Auth::user()->id)->paginate(10);
        if(Auth::user()->role->name =="utilisateur") {
            return view('dashboarduser.index', compact('orders'));
        } else{
         $articles = Article::all();
        $users = User::all();
        $articles = Article::all();
        $orders = Order::all();
        $coeur = Coeur::where('user_id', Auth::user()->id)->count();
        $ordersUsers = Order::where('user_id', Auth::user()->id)->count();
        $products = Product::all();
            return view('dashboard.index', compact('articles', 'users', 'products', 'orders', 'ordersUsers', 'coeur'));

        }

    }
}
