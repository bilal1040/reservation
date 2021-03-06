<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Show;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
    {
        $a=array();

        if(null!==Auth::user()){
            //$res contient les réservationsId d'un user
            $res = DB::table('reservation')->where('users_id',Auth::user()->id)->get();

            //On récupère le show
            foreach ($res as $key) {
                $shows = DB::table('shows')->where('id',$key->shows_id)->get();
                array_push($a,$shows);
            }
                return view('listeReservation',[
            'res'=>$res,
            'shows'=>$a
            ]);
        }
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
        $m=$request->get('montant');
        $u=$request->get('user_id');
        $s=$request->get('show_id');

        Reservation::create([
            'users_id'=>$u,
            'montant'=>$m,
            'shows_id'=>$s
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
}
