<?php

namespace ProjetoMova\Dias;

use ProjetoMova\DiaEspecial\ExemploFeriado;
use ProjetoMova\DiaEspecial\exibeDataEspecial;
use ProjetoMova\Dias\Mensagem;

class Sabado implements Mensagem
{
    public $feriado;
    public function __construct($feriado){
        $this->feriado=$feriado;
    }
    public function exibeMensagem():void
    {
        echo "<p>Para quem tira prazer em tudo que faz, todos os dias são como sábado.</p>";
    }
    public function imagem(): void
    {
        echo "<img src='src/Imagens/sabado.png' class='img'/>";
    }

    public function diaEspecial():void
    {
        if($this->feriado){
            $class = new exibeDataEspecial();
            $class->exibe(new ExemploFeriado());
        }
    }
}