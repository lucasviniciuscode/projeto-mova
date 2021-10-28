<?php

require 'vendor/autoload.php';
use ProjetoMova\Dia;
use ProjetoMova\Domingo;
require_once 'Index.php';

$diaSelecionado =$_GET['dia'];

if (($diaSelecionado) == 8 || $diaSelecionado == NULL) {
    echo '<div>';
    echo "<span>Nenhum dia foi informado, exibindo dia atual!</span></div>" . PHP_EOL;
    $data = date('Y-m-d');
    $diaNumero = date('w', strtotime($data));
    $dia = new Dia($diaNumero);
} else {
    $dia = new Dia($diaSelecionado);
}
$mensagem = new ProjetoMova\Acoes\exibeMensagem();
echo '<div class="caixa">';
echo '<h2>' . $dia->diaSemana() . '</h2>';
echo '<div class="img">' . $dia->getDia() . '</div>';
echo '</div>';

