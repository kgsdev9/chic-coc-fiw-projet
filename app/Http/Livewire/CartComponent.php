<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartComponent extends Component
{

    public $mycart;

    public function mount(){


        $title="Salut Madame,monsieur du Site poulet de pouletstore.com J'aimerais commander  les produits suivants :  ";

        $commande ="";
        foreach((array)session('cart') as  $id => $details){

            $commande = $commande.' '."Nom produit : ".$details['name']. " %20 Quantité : ".$details['quantity'].
            " : Montant : ".$details['price'] * $details['quantity']. "  FCFA  "."%20"."%20";


        }

        $this->mycart = $title.' '.$commande;
        //dd($commande);
    }








    public function increment($id) {
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;

        }

        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Quantitté mise à jour"
        ]);
        session()->put('cart', $cart);
    }

    public function delete($id) {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        $this->emit('updateCartCount');
    }

    public function decrement($id) {
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            if($cart[$id]['quantity'] >1 ) {
                $cart[$id]['quantity']--;
                session()->put('cart', $cart);
                $this->dispatchBrowserEvent('alert',[
                    'type'=>'success',
                    'message'=>"Quantité mise à jour"
                ]);
            } else {
                //messsage
            }

        }

    }




    public function render()
    {
        return view('livewire.cart-component')->extends('layout.app')->section('content');;
    }
}
