<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index(){
        return "Bienvenido al inventario";
    }
    public function create(){
        return "En esta pagina puedes añadir nuevos productos";
    }
    public function show($categoria){
        return "Bienvenido a la categoria $categoria";
    }
}
