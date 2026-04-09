<?php

namespace App\Http\Controllers;

use App\Models\Produtos;

class WebsiteController extends Controller
{
    public function home()
    {
        $produtos = [
        ["nome"=>"Fantasia de Dinossauro","preco"=>370.99,"categoria"=>"Roupa"],
        ["nome"=>"Bizarro","preco"=>10010.00,"categoria"=>"Outros"],
        ["nome"=>"Declaração de Independencia da Jamaica","preco"=>2000030.00,"categoria"=>"Outros"],
        ["nome"=>"Felca Africano","preco"=>5000.00,"categoria"=>"Acessorio"],
        ["nome"=>"Mano Escrito","preco"=>1000.00,"categoria"=>"Acessorio"],
        ["nome"=>"Google Creme","preco"=>32.00,"categoria"=>"Outros"],
        ["nome"=>"MacDonold","preco"=>25.00,"categoria"=>"Outros"],
        ["nome"=>"Cruzeiro","preco"=>1300.00,"categoria"=>"Outros"]
        ];

        $sql = "SELECT * FROM produtos";
        $produtos = Produtos::get();
        return view("home",compact("produtos"));
    }

    public function produtos()
    {
        $produtos = array("Fantasia de Dinossauro","Bizarro","Declaração de Independencia da Jamaica","Felca Africano","Mano Escrito","Google Creme","MacDonold","Cruzeiro");

        return view("produtos",compact("produtos"));
    }

    public function catalogo()
    {
        $produtos = [
        produtos = [
        ["nome"=>"Fantasia de Dinossauro","preco"=>370.99,"categoria"=>"Roupa"],
        ["nome"=>"Papel de Parede do Naruto","preco"=>110.00,"categoria"=>"Outros"],
        ["nome"=>"Declaração de Independencia da Jamaica","preco"=>2000030.00,"categoria"=>"Outros"],
        ["nome"=>"Felca Africano","preco"=>5000.00,"categoria"=>"Acessorio"],
        ["nome"=>"Mano Escrito","preco"=>1000.00,"categoria"=>"Acessorio"],
        ["nome"=>"Google Creme","preco"=>32.00,"categoria"=>"Outros"],
        ["nome"=>"MacDonold","preco"=>25.00,"categoria"=>"Outros"],
        ["nome"=>"Cruzeiro","preco"=>1300.00,"categoria"=>"Outros"]
        ];

        return view("catalogo",compact("produtos"));
    }
}