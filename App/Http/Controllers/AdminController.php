<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /* Create a new AuthController instance.
        *
        * @return void
    */
   public function __construct()
   {
       $this->middleware('web');
   }

   public function index()
   {
       $usuarios = User::all();
       return view('usuario.index', compact('usuarios'));
   }

   public function associate()
   {
       $usuarios = User::all();
       return view('usuario.solicitacoes', compact('usuarios'));
   }
}
