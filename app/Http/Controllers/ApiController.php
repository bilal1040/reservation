<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $apiRequest = '/api/spectacles/all/search'; // Requête (OBJET = identifiant unique) 

        $start = '0'; // Debut de l'offset 

        $end = '5'; // Fin de l'offset 

        $apiKey = '2208389d4c7bcbc49af23b6c6867e348bde7e8d1'; // Clé API 

        $entryPoint = 'https://www.theatre-contemporain.net'; // Point d'entrée 
                 
        // initialiser CURL et définir les options
        $apiCall = $entryPoint.$apiRequest.'?k='.$apiKey;
        
        
         
        // récupèrer les résultats
        $result =  json_decode(file_get_contents($apiCall));

        $cont=0;

        
        // faire un print des résultats
        return view('api',[

            'result'=>$result,
            'cont'=>$cont
            
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
