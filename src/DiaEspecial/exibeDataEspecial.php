<?php

namespace ProjetoMova\DiaEspecial;

use ProjetoMova\DiaEspecial\DataEspecial;

class exibeDataEspecial
{
    public function exibe(DataEspecial $dataEspecial):void
    {
        echo $dataEspecial->diaEspecial();
    }
}

