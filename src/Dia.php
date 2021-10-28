<?php
namespace ProjetoMova;
use ProjetoMova\DiaEspecial\ExemploFeriado;
use ProjetoMova\Acoes\exibeDataEspecial;
use ProjetoMova\Dias\Sabado;
use ProjetoMova\Mensagem;
use ProjetoMova\Dias\Domingo;
use ProjetoMova\Acoes\atribuiDia;


class Dia{
    private $indiceDia;
    public function __construct(string $indiceDia)
    {
        $this->indiceDia = $indiceDia;
    }

    public function diaSemana()
    {
        $diaDaSemana = array('Domingo', 'Segunda-Feira', 'Terça-Feira', 'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira', 'Sábado');
        $diaNumero = $this->indiceDia;
        return $diaDaSemana[$diaNumero];
    }

    public function getIndice(){
        return $this->indiceDia;
    }

    public function getDia()
    {
        $objeto = new atribuiDia();
        $objeto->atribuirDia($this->indiceDia);
    }

    public function diaEspecial(bool $diaespecial)
    {
        if($diaespecial){
            $dia = new exibeDataEspecial();
            echo $dia->exibe(new ExemploFeriado());
        }else{
            echo '';
        }
    }
}