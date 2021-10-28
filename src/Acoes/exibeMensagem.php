<?php

namespace ProjetoMova\Acoes;

use ProjetoMova\Dias\Mensagem;

class exibeMensagem
{
    public function exibe(Mensagem $mensagem):void
    {
        echo $mensagem->exibeMensagem();
        echo $mensagem->imagem();
        echo $mensagem->diaEspecial();
    }
}