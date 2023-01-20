<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class PaymentDelivry extends Component
{

    public $fullname ;
    public $phone ;
    public $addresse ;
    public $codeOrder ;
    public $commune ;




    public function mount() {

        $this->codeOrder ="ECOMMERCE".rand(0,432154798);

    }

    public function saveOrder() {
        $sesion = session('cart');
        $sum_quantity = 0 ;
        $total_cart=0;
        foreach( (array) $sesion as $s){
           $sum_quantity = $sum_quantity +$s['quantity'];
        };
        foreach( (array)$sesion as $s){
            $total_cart = $total_cart + $s['price']*$s['quantity'];
         };


         $validatedData = $this->validate([
            'fullname' => 'required',
            'phone' => 'required||max:10',
            'commune'   => 'required',
            'addresse'     => 'required',
        ]);


         $order =Order::create([
            'fullname'=> $this->fullname,
            'adresse_delivry'=> $this->addresse,
            'quantity'=> $sum_quantity,
            'user_id'=>Auth::user()->id,
            'phone'=> $this->phone,
            'code'=> $this->codeOrder,
            'commune' => $this->commune,
        ]);



        foreach($sesion as $s){
            $order->products()->attach( $s['product_id'],
               [
                'quantity'=>$s['quantity'],
                'amount'=>$s['price']*$s['quantity']
               ]);
         };
    return redirect()->route('success.orders');

    }



    public function render()
    {


        $sesion = session('cart');
        $sum_quantity = 0 ;
        $total_cart=0;
        foreach( (array) $sesion as $s){
           $sum_quantity = $sum_quantity +$s['quantity'];
        };
        foreach( (array)$sesion as $s){
            $total_cart = $total_cart + $s['price']*$s['quantity'];
         };

        return view('livewire.payment-delivry', compact('total_cart'))->extends('layout.app')->section('content');;



    }
}
