<?php

namespace ProjetoMova\Dias;

use ProjetoMova\DiaEspecial\ExemploFeriado;
use ProjetoMova\DiaEspecial\exibeData;
use ProjetoMova\DiaEspecial\exibeDataEspecial;
use ProjetoMova\Dias\Mensagem;


class Quinta implements Mensagem
{
    public $feriado;

    public function __construct($feriado){
        $this->feriado=$feriado;
    }

    public function exibeMensagem():void{
    echo "<p>Chegou a quinta-feira, esse dia tão esperado, ansiado e festejado, e durante o
          qual muitos apenas esperam que acabe para assim ficarmos mais perto do final de semana.</p>";

    }
    public function imagem(): void
    {
        echo "<img src='src/Imagens/quinta.png' class='img'/>";
    }

    public function diaEspecial():void
    {
        if($this->feriado){
            $class = new exibeDataEspecial();
            $class->exibe(new ExemploFeriado());
        }
    }
}