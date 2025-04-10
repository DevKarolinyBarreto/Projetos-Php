<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Desconto 9% </title>
</head>
<body>
<form method="POST">
            <h1> Calculando valor com desconto de 9%... </h1>

            <br>

            <label for="n"> Insira um número: </label>
            <input type="number" id='n' name="n" required>

            <br>

            <button type="submit" name='Calcular' value="n"> Calcular </button>
</form> 

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor = $_POST["n"];
            $desconto = 9;

            $valor_com_desconto = $valor - ($valor * ($desconto / 100));

            echo "<br> Valor com desconto: R$ " . number_format($valor_com_desconto, 2, ',', '.');
        }


    ?>


</body>
</html>