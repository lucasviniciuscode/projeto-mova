<?php

namespace ProjetoMova\Dias;

use ProjetoMova\DiaEspecial\ExemploFeriado;
use ProjetoMova\DiaEspecial\exibeData;
use ProjetoMova\Dias\Mensagem;

class Sexta implements Mensagem
{
    public $feriado;

    public function __construct($feriado){
        $this->feriado=$feriado;
    }

    public function exibeMensagem():void{
        echo "<p>É sexta-feira! O dia tão desejado chegou, assim como os sorrisos e a boa disposição geral.</p>";
    }
    public function imagem(): void
    {
        echo "<img src='src/Imagens/sexta.png' class='img'/>";
    }

    public function diaEspecial():void
    {
        if($this->feriado){
            $class = new exibeData();
            $class->exibe(new ExemploFeriado());
        }
    }
}