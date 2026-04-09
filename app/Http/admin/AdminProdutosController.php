<?php
namespace App\Http\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminProdutosController extends Controller
{
    public function produtos()
    {
        return view('admin.produtos');
    }

    public function salvar(Request $produto)
    {
        // Lógica para salvar um novo produto
    }

    public function excluir(Request $produto)
    {
        // Lógica para excluir um produto
    }

}
