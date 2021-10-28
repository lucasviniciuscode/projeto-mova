<?php

namespace ProjetoMova\Dias;

interface Mensagem
{
    public function exibeMensagem(): void;
    public function imagem():void;
    public function diaEspecial():void;
}