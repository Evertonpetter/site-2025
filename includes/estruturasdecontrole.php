<?php
/*
O que são estruturas de controle?
- Mecanismos para controlar o fluxo de execução do código,
  permitindo que diferentes blocos de código
  sejam executados sob certas condições ou repetidamente.

* Estruturas Condicionais:
- if: executa um bloco de código se a condição for verdadeira.
- if..else: executa um bloco de código se a condição for verdadeira e 
  outro bloco se for falsa.
- if...elseif...else: permite verificar múltiplas condições sequencialmente.
- switch: seleciona um bloco de código para executar com base no valor de uma expressão.

* Estruturas de repetição (loops):
- while: executa um bloco de código enquanto uma condição for verdadeira.
- do..while: executa o bloco pelo menos uma vez, depois verifica a condição.
- for: executa um bloco de código um número específico de vezes.
- foreach: para percorrer arrays e objetos.
*/

// --> estrutura condicional if, else, elseif:

$nota = 5.30;

if ($nota < 5) {
    echo "Reprovado";
} elseif ($nota < 6) {
    echo "Recuperação";
} elseif ($nota < 7) {
    echo "Aprovado";
} else {
    echo "Aprovado com Mérito";
}

echo "<hr>";

$idade = 17;

if ($idade >= 18) {
    echo "Maior que 18";
} else {
    echo "Menor que 18";
}

echo "<hr>";

// --> estrutura condicional switch: uma alternativa para múltiplos elseif quando você precisa comparar uma variável com diferentes valores

$diasemana = 2;

switch ($diasemana) {
    case 1:
        echo "Domingo";
        break; // importante para sair do switch após a condição ser atendida
    case 2:
        echo "Segunda-feira";
        break;
    case 3:
        echo "Terça-feira";
        break;
    case 4:
        echo "Quarta-feira";
        break;
    case 5:
        echo "Quinta-feira";
        break;
    case 6:
        echo "Sexta-feira";
        break;
    case 7:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}

echo "<hr>";

$cor = "azul";

switch ($cor) {
    case "vermelho":
        echo "A cor é vermelha";
        break;

    case "azul":
        echo "A cor é azul";
        break;

    case "verde":
        echo "A cor é verde";
        break;

    default:
        echo "Cor desconhecida";
        break;
}

echo "<hr>";

// --> estrutura de repetição while: executa um bloco de código repetidamente enquanto a condição for verdadeira

$contador = 0;

while ($contador < 5) {
    echo "O contador é: " . $contador . "<br>";
    $contador++;
}

/* Saída:
    O contador é: 0
    O contador é: 1
    O contador é: 2
    O contador é: 3
    O contador é: 4
*/

echo "<hr>";

// --> estrutura de repetição do..while: similar ao while, mas garante que o bloco de código seja executado ao menos uma vez

$tentativas = 0;
$senhadigitada = "errada";
$senhacorreta = "secreto";

do {
    echo "Tentativa de login número: " . ($tentativas + 1) . "<br>";

    // Simula o usuário digitando a senha correta na terceira tentativa
    if ($tentativas == 6) {
        $senhadigitada = "secreto";
    }

    $tentativas++;

} while ($senhadigitada != $senhacorreta && $tentativas < 5);

if ($senhadigitada == $senhacorreta) {
    echo "Login bem-sucedido!";
} else {
    echo "Número de tentativas excedido.";
}

echo "<hr>";


// --> Estrutura de repetição for:
// Útil quando você sabe quantas vezes precisa que um bloco de código seja executado.

for ($i = 1; $i <= 5; $i++) {
    echo " O VALOR DE 'I' É = ". $i ."<br>";
}  

/*

O valor de 'i' = 2
O valor de 'i' = 3
O valor de 'i' = 4
O valor de 'i' = 5
*/

echo "<br>";

$nomes = ["carlos", "mariana", "lucas", "everton","BRUNO","MATEUS"];

for ($i = 0; $i < count($nomes); $i++) {
    echo "nome na posição ".$i.": ".$nomes[$i]."<br>";
}
    /*
    saida
    nome na posição 0: carlos
    nome na posição 1: mariana
    nome na posição 2: lucas
    */

echo "<hr>";

// --> estrutura de repetição foreach:projetada especificamente para iterrar sobre arrys e objetos


$cores = ["azul", "vermelho", "verde","preto"];

foreach ($cores as  $cor) {
    echo " A cor é: ". $cor."<br>";
}

echo "<br>";

$pessoa = ["Nome" => "Éverton", "Idade" => 17, "Cidade" => "Rodeio bonito"];

foreach ($pessoa as $p => $vlr) {
    echo $p.": ".$vlr."<br>";
}










?>  