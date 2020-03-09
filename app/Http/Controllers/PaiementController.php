<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Show;
use App\Reservation;
use function sodium\add;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;






class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

          

        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        
      
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $montant=$request->get('total');
        $users_id=$request->get('user_id');
        $shows_id=$request->get('show_id');

         // Set your secret key. Remember to switch to your live secret key in production!
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey('sk_test_NHVQKGSXofzXhNZhicmYHRUb00dPVCDxJi');


        $intent = \Stripe\PaymentIntent::create([
            'amount' => $montant*100,
            'currency' => 'eur',

        ]);
        

        $ClientSecret = Arr::get($intent,'client_secret');


        return view('paiement',[
           'client_secret' =>$ClientSecret,
           'montant'=>$montant,
           'user_id'=>$users_id,
           'show_id'=>$shows_id,
        ]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

        public function checkout()
    {
       

    }
    public function paiement(Request $request)
    {
        
        


    }
}
