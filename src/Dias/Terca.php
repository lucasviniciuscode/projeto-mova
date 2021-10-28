<?php

namespace ProjetoMova\Dias;

use ProjetoMova\DiaEspecial\ExemploFeriado;
use ProjetoMova\DiaEspecial\exibeData;
use ProjetoMova\DiaEspecial\exibeDataEspecial;
use ProjetoMova\Dias\Mensagem;

class Terca implements Mensagem
{
    public $feriado;

    public function __construct($feriado){
        $this->feriado=$feriado;
    }

    public function exibeMensagem():void{
        echo "<p>Um novo dia traz novos sonhos, esperanças redobradas e uma força renovada 
        para lutarmos por aquilo em que acreditamos.</p>";
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