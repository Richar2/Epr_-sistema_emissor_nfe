<?php

namespace App\Http\Controllers\Cadastros;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class clienteController extends Controller
{
   public function index(){
      return view('componets.cliente');
   }
}
