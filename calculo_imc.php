<?php

$nome = $_POST['nome'] ?? "";
$idade = $_POST['idade'] ?? "";
$altura = $_POST['altura'] ?? "";
$peso = $_POST['peso'] ?? "";

    $imc = $peso / ($altura * $altura);
    echo "$nome, seu peso é $peso, sua altura é $altura e idade é $idade, portanto seu imc é = $imc";

    if ($imc >= 30 && $imc < 34.9) {
        echo "$nome, voce possui obesidade classe 1";
    } elseif ($imc >= 35 && $imc < 39.9) {
        echo "$nome, voce possui obesidade classe 2";
    } elseif ($imc >= 40) {
        echo "$nome, voce possui obesidade classe 3";
    } elseif ($imc >= 25 && $imc < 29.9) {
        echo "$nome, voce possui excesso de peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        echo "$nome, voce possui peso normal";
    } else if ($imc < 18.5) {
        echo "$nome, voce esta abaixo do peso";
    }


