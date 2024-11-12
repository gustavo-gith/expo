<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Captura as notas do formulário
    $vnumero1 = (int)$_POST['nota1'];
    $vnumero2 = (int)$_POST['nota2'];
    $vnumero3 = (int)$_POST['nota3'];

    // Calcula a média das notas
    $media = ($vnumero1 + $vnumero2 + $vnumero3) / 3;

    // Exibe o resultado de aprovação
    echo "Para ser APROVADO, a média deverá ser > 7<br>";
    echo "Nota 1 = $vnumero1<br>";
    echo "Nota 2 = $vnumero2<br>";
    echo "Nota 3 = $vnumero3<br>";
    echo "A Média é: " . number_format($media, 2) . "<br>";

    // Verifica se a média é maior que 7 para determinar se é aprovado ou reprovado
    if ($media > 7) {
        echo "APROVADO";
    } else {
        echo "REPROVADO";
    }
} else {
    echo "Por favor, insira as notas através do formulário.";
}
?>