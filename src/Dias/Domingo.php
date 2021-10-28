<?php
namespace ProjetoMova\Dias;

use ProjetoMova\DiaEspecial\ExemploFeriado;
use ProjetoMova\DiaEspecial\exibeData;
use ProjetoMova\DiaEspecial\exibeDataEspecial;
use ProjetoMova\DiaEspecial\DataEspecial;


class Domingo implements Mensagem
{
    public $feriado;
    public function __construct($feriado){
        $this->feriado=$feriado;
    }
    public function exibeMensagem():void
    {
        echo "<p>Vamos ser plenamente felizes, do raiar ao pôr do sol. Feliz domingo</p>";
    }

    public function imagem(): void
    {
        echo "<img src='src/Imagens/domingo.png' class='img'/>";
    }

    public function diaEspecial():void
    {
        if($this->feriado){
            $dia = new exibeDataEspecial();
            echo $dia->exibe(new ExemploFeriado());
        }
    }
}