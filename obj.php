<?php
class Calculadora{
    public function soma($Numero1, $Numero2) {
        return $Numero1 + $Numero2;
    }
    public function subtracao($Numero1, $Numero2){
        return $Numero1 - $Numero2;
    }
    public function multiplicacao($Numero1, $Numero2){
        return $Numero1 * $Numero2;
    }
    public function divisao($Numero1, $Numero2){
        if($Numero1 != 0 && $Numero2 != 0){
        return $Numero1 / $Numero2;
        } else {
            echo "sou uma calculadora que não fez calculo 2 na faculdade para dividir por 0";
            exit;
        }
    }
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1 = $_POST["num1"] ?? null;
    $num2 = $_POST["num2"] ?? null;
    $operacao = $_POST["operacao"] ?? null;
    $calculo = new Calculadora();
    switch ($operacao){
        case "soma":
        $resultado = $calculo->soma($num1, $num2);
        break;
        case "subtracao":
        $resultado = $calculo->subtracao($num1, $num2);
        break;
        case "multiplicacao":
        $resultado = $calculo->multiplicacao($num1, $num2);
        break;
        case "divisao":
        $resultado = $calculo->divisao($num1, $num2);
        break;
        default:
        echo "ué";
        exit;
    }
    echo "O resultado é ". $resultado;
}
?>