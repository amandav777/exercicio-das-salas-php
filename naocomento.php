<?php

function valorComputadores($quantidadePcs, $totalAlunos) {
    $custoComputador = 3000;
    $valorComputadores = $custoComputador * $totalAlunos; 
    return $valorComputadores;}

function valorMesas($alunos, $custoMesa) {
    $quantidadeMesas = ceil($alunos / 2); 
    $valorMesas = $quantidadeMesas * $custoMesa;
    return $valorMesas; 
}


function valorTotal($precoMesas, $precoPcs) {
    $total = $precoMesas + $precoPcs; 
    return $total;
}

$custoComputador = 3000;
$custoMesa = 500;

$totalAlunos = 90;
$alunosPorSala = 50;

$valorComputadores = valorComputadores($totalAlunos, $custoComputador);
$valorMesas = valorMesas($totalAlunos, $custoMesa);
$valorTotal = valorTotal($valorMesas, $valorComputadores);


$numeroSalas = floor($totalAlunos / $alunosPorSala);

$relatorioFinal = array(
    "custoTotal" => $valorTotal,
    "salas" => $numeroSalas,
    "turmas" => array(
        "alunos" => $alunos,
        "computadores" => $alunos, 
        "mesas" => $quantidadeMesas,
    )
    );

print_r($relatorioFinal);

?>