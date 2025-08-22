<?php
/*
o que são operadores ?
- símbolos que realizam operações em valores (operandos)

* ARITMÉTICOS:
+ (adição), - (subtração), * (multiplicação),
/ (divisão), % (módulo - resto da divisão), ** (potenciação)
*/

// Operadores aritméticos:
$num1 = 10;
$num2 = 5;

$soma = $num1 + $num2;
$subtracao = $num1 - $num2;
$multiplicacao = $num1 * $num2;
$divisao = $num1 / $num2;
$modulo = $num1 % $num2;
$potencia = $num1 ** $num2;

echo "Soma: " . $soma . "<br>";
echo "Subtração: " . $subtracao . "<br>";
echo "Multiplicação: " . $multiplicacao . "<br>";
echo "Divisão: " . $divisao . "<br>";
echo "Módulo (resto): " . $modulo . "<br>";
echo "Potência: " . $potencia . "<br>";

echo "<hr>";

// Operadores de atribuição:
$x = 10;
$y = 20;

$x += 5; // 15
$y -= 3; // 17
$x *= 2; // 30
$y /= 4; // 4.25
$x %= 3; // 0

echo "Valor de X = " . $x . "<br>";
echo "Valor de Y = " . $y . "<br>";

echo "<hr>";

// Operadores de comparação:
$a = 8;
$b = "8";
$c = 12;

var_dump($a == $b);
echo "<br>";

var_dump($a === $b);
echo "<br>";

var_dump($a != $c);
echo "<br>";

var_dump($a !== $b);
echo "<br>";

var_dump($a > $c);
echo "<br>";

var_dump($a < $c);
echo "<br>";

var_dump($c >= 12);
echo "<br>";

var_dump($a <= 5);
echo "<br>";

echo "<hr>";

// Operadores lógicos:
$idade = 18;
$temcarteira = true;

if ($idade >= 18 && $temcarteira) {
    echo "Pode dirigir!";
} elseif ($temcarteira) {
    echo "Tem carteira!";
} else {
    echo "NÃO pode dirigir!";
}

echo "<br>";

$temdesconto = false;
$eclientenovo = false;

if ($temdesconto || $eclientenovo) {
    echo "tem direito ao desconto";
} else {
    echo "Não tem direito ao desconto";
}


echo"<br>";

$estachovendo = false;

if (!$estachovendo ) {
    echo "o dia está ensolarado";
} else { 
    echo "está chovendo";
}

echo"<hr>";

//--> operador de incremento/decremento: usadospara aumentar ou diminuir o valor de variavel numerica em 1.

$contador = 0;

echo $contador++; // pós-incremento: exibe 0, depois incrementa para 1
echo "<br>";

echo $contador;   // agora o contador vale 1
echo "<br>";

echo ++$contador; // pré-incremento: incrementa (de 1 para 2), depois exibe 2

echo"<hr>";

echo $contador--; // pós-incremento: exibe 0, depois incrementa para 1
echo "<br>";

echo $contador;   // agora o contador vale 1
echo "<br>";

echo --$contador; // pré-incremento: incrementa (de 1 para 2), depois exibe 2


echo"<hr>";

//--> OPERADOR DE CONTATENAÇÃO DE STRIING: USADO PARA JUNTAR STRING 

$nome = "ÉVERTON";
$sobrenome = "PETTER PIAZZA ";
$nomecompleto = $nome." ".$sobrenome;

echo $nomecompleto;

$mensagem = "óla, ";
$mensagem .= $nome; // equivalente a $mensagem = $mensagem . $nome;
echo "<br>" . $mensagem 
// saida : olá, evetrton



?>
