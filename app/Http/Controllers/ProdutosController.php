<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{

    public function index(){

        $produtos = [
            [
                'nome' => 'banana',
                'preco' => 5.99,
                'categoria' => 'alimento',

            ],
            
            [
                'nome' => 'garrafa de água',
                'preco' => 1.99,
                'categoria' => 'bebida',

            ]

        ];

        return view('produtos') ->with ('produtos', $produtos);

    }
}
