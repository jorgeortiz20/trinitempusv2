<?php

namespace App\Http\Controllers;

use \App\Models;
use App\Models\Oferta;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OfertasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertas = Oferta::all();
        return View('ofertas', [
            'oferta' => $ofertas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $oferta = new Oferta();
        return View('nueva-oferta', [
            'oferta' => $oferta
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $oferta = new Oferta();
        $oferta->nombreOferta = $request->nombreOferta;
        $oferta->categoria_id = $request->categoria_id;
        $oferta->tiempoDiarioOfrece = $request->tiempoDiarioOfrece;
        $oferta->fechaPuedeIniciar = $request->fechaPuedeIniciar;
        $oferta->fechaDebeAcabar = $request->fechaDebeAcabar;
        $oferta->fotoOferta = $request->fotoOferta;
        //aqui iria tema foto que no se como funciona
        // $oferta->user_id = User::user_id;
        $oferta->user_id = \Illuminate\Support\Facades\Auth::user()->id;

        $oferta->save();
        return Redirect::to('mis-ofertas')->with('notice', 'Se ha creado la oferta correctamente.');
    }

    /**
     * Subir fotografía de la Oferta
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function subirFotoOferta(Request $request)
    {
        $file = $request->file('archivo');
        $nombre = $file->getClientOriginalName();
        //$file->storeAs('public',$nombre);
        $file->move(public_path() . '/img/ofertas/', $nombre);
        return Redirect::to('mis-ofertas');
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $oferta = Oferta::find($id);
        return View('ofertas', [
            'oferta' => $oferta
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oferta = Oferta::find($id);
        return View('nueva-oferta', [
            'oferta' => $oferta
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $oferta = Oferta::find($id);
        $oferta->nombreOferta = $request->nombreOferta;
        $oferta->categoria_id = $request->categoria_id;
        $oferta->tiempoDiarioOfrece = $request->tiempoDiarioOfrece;
        $oferta->fechaPuedeInicar = $request->fechaPuedeInicar;
        $oferta->fechaDebeAcabar = $request->fechaDebeAcabar;
        $oferta->fotoOferta = $request->fotoOferta;
        //aqui iria tema foto que no se como funciona
        $oferta->user_id = $request->user_id;
        $oferta->save();
        return Redirect::to('ofertas')->with('notice', 'Se ha modificado la oferta correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oferta = Oferta::find($id);
        $oferta->delete();
        return Redirect::to('ofertas')->with('notice', 'La oferta ha sido eliminada correctamente.');
    }
}
