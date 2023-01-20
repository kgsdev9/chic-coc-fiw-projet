<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class Welcome extends Component
{

    public $category ;
    public $pouletchaire ;
    public $pondeuse ;
    public $plaquetteoeuf;
    public $poussin ;
    public $product ;
    public $productpoussin ;
    public $productplaquetteoeuf;
    public $productdemiplatquette;
    public $productpondeuse ;
    public $demioeuf ;
    public $randomProduct;


 
    public function mount() {

        $this->category = Category::all();
        $this->pouletchaire = Category::where('name', 'POULET DE CHAIR')->first();
        $this->pondeuse = Category::where('name', 'PONDEUSE')->first();
        $this->plaquetteoeuf = Category::where('name', 'PLAQUETTES D\'OEUFS')->first();
        $this->demioeuf =  Category::where('name', 'DEMI PLAQUETTE D\'OEUF')->first();
        $this->poussin = Category::where('name', 'POUSSIN')->first();

        $this->product = Product::where('category_id', $this->pouletchaire->id)->get();
        $this->randomProduct =  Product::inRandomOrder('name')->take(10)->get();
        $this->productpoussin =  Product::where('category_id', $this->pondeuse->id)->get();
        $this->productpondeuse = Product::where('category_id', $this->poussin->id)->get();
        $this->productplaquetteoeuf= Product::where('category_id',  $this->plaquetteoeuf->id)->get();
        $this->productdemiplatquette = Product::where('category_id', $this->demioeuf->id)->get();

    }

    public function add($id) {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "img_one" => $product->img_one,
                "statut"  => $product->statut,
                "product_id"  =>$product->id,
            ];
        }
        session()->put('cart', $cart);
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Produit Ajouté à votre commande"
        ]);

        $this->emit('updateCartCount');

    }


    public function render()
    {

        return view('livewire.welcome',  [
        ])->extends('layout.app')->section('content');
    }


}
