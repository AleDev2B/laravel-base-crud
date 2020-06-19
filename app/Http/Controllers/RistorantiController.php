<?php

namespace App\Http\Controllers;

use App\Ristorante;
use Illuminate\Http\Request;

class RistorantiController extends Controller
{
    public function index() {

      $ristoranti = Ristorante::all();

      return view('home', compact('ristoranti'));
    }

    public function show($id) {

      $ristorante = Ristorante::findOrFail($id);

      return view('showRistorante', compact('ristorante'));
    }
}
