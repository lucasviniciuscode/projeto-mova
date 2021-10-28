<?php

namespace ProjetoMova\Dias;

use ProjetoMova\DiaEspecial\ExemploFeriado;
use ProjetoMova\DiaEspecial\exibeData;
use ProjetoMova\DiaEspecial\exibeDataEspecial;
use ProjetoMova\Dias\Mensagem;

class Quarta implements Mensagem
{
    public $feriado;

    public function __construct($feriado){
        $this->feriado=$feriado;
    }

    public function exibeMensagem():void {
        echo "<p>Essa quarta-feira será incrível do amanhecer ao anoitecer. Pode anotar!</p>";
    }

    public function imagem(): void
    {
        echo "<img src='src/Imagens/quarta.png' class='img'/>";
    }

    public function diaEspecial():void
    {
        if($this->feriado){
            $class = new exibeDataEspecial();
            $class->exibe(new ExemploFeriado());
        }
    }
}