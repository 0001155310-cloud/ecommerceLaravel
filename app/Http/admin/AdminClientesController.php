<?php

namespace App\Http\Admin\AdminClientesController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminClientesController extends Controller
{
    public function clientes()
    {
        return view('admin.clientes.clientes');
    }
}
