<?php

namespace ProjetoMova\Acoes;

use ProjetoMova\Dias\Domingo;
use ProjetoMova\Dias\Quarta;
use ProjetoMova\Dias\Quinta;
use ProjetoMova\Dias\Sabado;
use ProjetoMova\Dias\Segunda;
use ProjetoMova\Dias\Sexta;
use ProjetoMova\Dias\Terca;

class atribuiDia
{
    public function atribuirDia(int $dia)
    {
        switch ($dia){
            case 0:
                $class = new exibeMensagem();
                $class->exibe(new Domingo(false));
                break;
            case 1:
                $class = new exibeMensagem();
                $class->exibe(new Segunda(false));
                break;
            case 2:
                $class = new exibeMensagem();
                $class->exibe(new Terca(false));
                break;
            case 3:
                $class = new exibeMensagem();
                $class->exibe(new Quarta(false));
                break;
            case 4:
                $class = new exibeMensagem();
                $class->exibe(new Quinta(false));
                break;
            case 5:
                $class = new exibeMensagem();
                $class->exibe(new Sexta(false));
                break;
            case 6:
                $class = new exibeMensagem();
                $class->exibe(new Sabado(false));
                break;
        }
    }
}