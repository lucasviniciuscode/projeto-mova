<?php

namespace ProjetoMova\DiaEspecial;

class ExemploFeriado implements DataEspecial
{

    public function diaEspecial(): void
    {
        echo '<h1>Feriado da Independencia!</h1>';
    }
}