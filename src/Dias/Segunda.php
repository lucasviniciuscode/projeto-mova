<?php

namespace ProjetoMova\Dias;

use ProjetoMova\DiaEspecial\ExemploFeriado;
use ProjetoMova\DiaEspecial\exibeData;
use ProjetoMova\DiaEspecial\exibeDataEspecial;
use ProjetoMova\Dias\Mensagem;

class Segunda implements Mensagem
{
    public $feriado;
    public function __construct($feriado){
        $this->feriado=$feriado;
    }
    public function exibeMensagem():void{
    echo "<p>É segunda-feira! Dia de tirar a disposição do armário e começar tudo de novo.</p>";

}
    public function imagem(): void
    {
        echo "<img src='src/Imagens/segunda.png' class='img'/>";
    }

    public function diaEspecial():void
    {

        if($this->feriado){
            $class = new exibeDataEspecial();
            $class->exibe(new ExemploFeriado());
        }
    }
}