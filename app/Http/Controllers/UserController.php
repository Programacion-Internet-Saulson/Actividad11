<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    public function index () {
        return 'Usuario';
    }

    public function show($id) {
        return "Mostrando detalle del usuario: {$id}";
    }

    public function create() {
        return 'Crear usuario nuevo';
    }
}
