<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function produtos() {
        echo "<h1>Produtos</h1>
            <ol>
            <li>Notebook</li>
            <li>Impressora</li>
            <li>Mouse</li>
            </ol>";
    }

    public function getNome() {
        return "José da Silva";
    }

    public function getIdade() {
        return "30";
    }

    public function multiplicar($n1,$n2){
        if(isset($n2)) {
            return ($n1*$n2);
        }else{
            return "digite o n2";
        }
        
    }
}
