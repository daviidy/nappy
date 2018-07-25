<?php

namespace App\Http\Controllers;

use App\Miss;
use Image;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MissController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $misses = Miss::orderBy('numero','asc')->paginate(30);
        return view('misses.index', ['misses' => $misses]);

    }

    /**
     * Mets le nombre de votes pour une candidate d'une unité
     *
     * @param  \App\Miss  $miss
     * @return \Illuminate\Http\Response
     */



     public function classement()
     {
       $misses = Miss::orderBy('nombre_de_votes','desc')->paginate(30);
       return view('misses.classement', ['misses' => $misses]);
     }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('misses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $miss=Miss::create($request->all());
      $miss->nombre_de_votes = $miss->votes->count();
      $miss->save();


      if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('/img/photos/' . $filename));
        $miss->image = $filename;
        $miss->save();
    }

      return back()->with('status', 'Miss créée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Miss  $miss
     * @return \Illuminate\Http\Response
     */
    public function show(Miss $miss)
    {
      function postData($params, $url)
          {
           try {
           $curl = curl_init();
           $postfield = '';
           foreach ($params as $index => $value) {
           $postfield .= $index . '=' . $value . "&";
           }
           $postfield = substr($postfield, 0, -1);
           curl_setopt_array($curl, array(
           CURLOPT_URL => $url,
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING => "",
           CURLOPT_MAXREDIRS => 10,
           CURLOPT_TIMEOUT => 45,
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST => "POST",
           CURLOPT_POSTFIELDS => $postfield,
           CURLOPT_HTTPHEADER => array(
           "cache-control: no-cache",
           "content-type: application/x-www-form-urlencoded",
           ),
           ));
           $response = curl_exec($curl);
           $err = curl_error($curl);
           curl_close($curl);
           if ($err) {
           throw new Exception("cURL Error #:" . $err);
           return $err;
           } else {
           return $response;
           }
           } catch (Exception $e) {
           throw new Exception($e);
           }
          }
          $time = Carbon::now();
        $params = array('cpm_amount' => '100',
                        'cpm_currency' => 'CFA',
                        'cpm_site_id' => '535040',
                        'cpm_trans_id' => '1',
                        'cpm_trans_date' => $time,
                        'cpm_payment_config' => 'SINGLE',
                        'cpm_page_action' => 'PAYMENT',
                        'cpm_version' => 'V1',
                        'cpm_language' => 'fr',
                        'cpm_designation' => 'Vote',
                        'apikey' => '134714631658c289ed716950.86091611',
                        );
        $url = "https://api.cinetpay.com/v1/?method=getSignatureByPost";
        //Appel de fonction postData()
        $resultat = postData($params, $url) ;
        $signature = json_decode($resultat, true);

        return view('misses.show',['miss' => $miss, 'signature' => $signature]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Miss  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Miss $miss)
    {
        return view('misses.edit',['miss'=> $miss]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Miss  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Miss $miss)
    {

       $miss->update($request->all());

       if($request->hasFile('image')){

         $image = $request->file('image');
         $filename = time() . '.' . $image->getClientOriginalExtension();
         Image::make($image)->save(public_path('/img/photos/' . $filename));
         $miss->image = $filename;
         $miss->save();

       }

      return back()->with('status', 'Modifications enregistrées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Miss  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miss $miss)
    {
        $miss->delete();
        return redirect('misses')->with('status', 'Miss supprimée avec succès');;
    }




}
