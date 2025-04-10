<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pagamento </title>
</head>

<body>
    <form method="POST">
        <label for="valor-total"> Valor total do salário </label>
        <input type="text" id="valor" name="valor">

        <select id="forma-pagamento" name="forma-pagamento">
            <option value="dinheiro"> Dinheiro </option>
            <option value="cartao-debito"> Cartão de débito </option>
            <option value="cartao-credito"> Cartão de crédito </option>
            <option value="parcelado"> Parcelado </option>
        </select>

        <button type="submit" name="calcular"> Calcular </button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $valor = floatval($_POST["valor"]);
        $forma_de_pagamento = $_POST["forma-pagamento"];

        $valor_final = match (true) {
            $forma_de_pagamento == "dinheiro" => $valor * 0.9,
            $forma_de_pagamento == "cartao-debito" => $valor * 0.95,
            $forma_de_pagamento == "cartao-credito" => $valor,
            $forma_de_pagamento == "parcelado" => $valor * 1.1,
        };

        echo "O valor inicial é: $valor, a forma de pagamento é: $forma_de_pagamento, o valor final é: $valor_final";
    }
    ?>
</body>

</html>