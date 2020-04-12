<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prijava;
use PDF;
use Mail;
class PrijavaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('prijavas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       var_dump ( $request->all());


        //
        $request->validate([
            'ime_ucenika'=>'required',
            'prezime_ucenika'=>'required',
            'jmbg'=>'required'
        ]);



        $prijava = new Prijava([
            'ime_ucenika' => $request->get('ime_ucenika'),
            'prezime_ucenika' => $request->get('prezime_ucenika'),
            'pol' => $request->get('pol'),
            'datum_rodjenja' => $request->get('datum_rodjenja'),
            'mesto_rodjenja' => $request->get('mesto_rodjenja'),
            'jmbg' => $request->get('jmbg'),
            'adresa' => $request->get('adresa'),
            'ime_majke' => $request->get('ime_majke'),
            'jmbg_majke' => $request->get('jmbg_majke'),
            'ime_oca' => $request->get('ime_oca'),
            'jmbg_oca' => $request->get('jmbg_oca'),
            'kontakt_osoba' => $request->get('kontakt_osoba'),
            'tel_fiksni' => $request->get('tel_fiksni'),
            'tel_mobilni' => $request->get('tel_mobilni'),
            'email' => $request->get('email'),
            'skola' => $request->get('skola'),
            'razred' => $request->get('razred'),
            'skolovanje_1' => $request->get('skolovanje_1'),
            'instrument_1' => $request->get('instrument_1'),
            'skolovanje_2' => $request->get('skolovanje_2'),
            'instrument_2' => $request->get('instrument_2')
        ]);
           // echo $prijava;
        $prijava->save();
        //dd($prijava->jmbg);
        //return redirect ('/prijavas')->with('succes', 'Prijava uspešno poslata'); 

   
        $pdf = PDF::loadView('prijavas.pdf',$prijava);
  
        return $pdf->stream();
    }
    public function myDemoMail()
    {
    	$myEmail = 'nikolapavicevic95@gmail.com';
    	Mail::to($myEmail)->send(new Mail_pdf());

    	
    	dd("Mail Send Successfully");
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
    public function generatePDF()
    {
        $pdf = PDF::loadView('myPDF', $prijava);
        //pdfa
        return $pdf->download('itsolutionstuff.pdf');
    }
}
