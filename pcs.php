<?php

# o código está comentado pq me facilita estudar e entender, mas jaja eu vou ter dominio e nao vou mais precisar comentar, fica mt feio xD

#essa funcao vai pegar o valor dos pcs de acordo com o numero de alunos da sala e calcular o total gasto em pcs
function valorComputadores($quantidadePcs, $totalAlunos) {
    $custoComputador = 3000;
    $valorComputadores = $custoComputador * $totalAlunos; 
    return $valorComputadores;}

#funcao que vai calcular o total de mesas considerando que em uma, cabe 2 alunos. para arrendondar pra cima, achei a função ceil(), pra baixo é floor igual em py e round() segue a logica igual matematica. a funcao vai calcular o valor das mesas, arrendondando pra cima
 
function valorMesas($alunos, $custoMesa) {
    $quantidadeMesas = ceil($alunos / 2); 
    $valorMesas = $quantidadeMesas * $custoMesa;
    return $valorMesas; 
}

// essa função serve para calcular o valor total de mesa e PC, utilizando o resultado das outras funções atreladas que fiz em cima  

function valorTotal($precoMesas, $precoPcs) {
    $total = $precoMesas + $precoPcs; 
    return $total;
}

$custoComputador = 3000;
$custoMesa = 500;


$totalAlunos = 90;
$alunosPorSala = 50;


#passou de parametro o tanto de alunos * o preco dos pc
$valorComputadores = valorComputadores($totalAlunos, $custoComputador);
#mesma coisa que o de cima
$valorMesas = valorMesas($totalAlunos, $custoMesa);
#vai somar tudo, mesa e pc
$valorTotal = valorTotal($valorMesas, $valorComputadores);


// calcula o numer de salas arredondando pra baixo, pra encher somente salas de 50 pessoas
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