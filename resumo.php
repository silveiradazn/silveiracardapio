<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total do Pedido</title>
</head>
<body>
    <div class="container">
        <h1>Total do Pedido</h1>

        <?php
            $preco_xburger = 8.30;
            $preco_misto = 7.00;
            $preco_coca = 6.00;
            $preco_fanta = 5.00;
            $preco_batata = 10.00;
            $preco_chocolate = 3.00;

            $total = 0;

            if (isset($_POST['qtd_xburger']) && $_POST['qtd_xburger'] > 0) {
                $total += $_POST['qtd_xburger'] * $preco_xburger;
                echo "<p><strong>Lanche Selecionado:</strong> X-Burguer - Quantidade: {$_POST['qtd_xburger']} - Subtotal: R$ " . number_format($_POST['qtd_xburger'] * $preco_xburger, 2, ',', '.') . "</p>";
            }

            if (isset($_POST['qtd_misto_quente']) && $_POST['qtd_misto_quente'] > 0) {
                $total += $_POST['qtd_misto_quente'] * $preco_misto;
                echo "<p><strong>Lanche Selecionado:</strong> Misto Quente - Quantidade: {$_POST['qtd_misto_quente']} - Subtotal: R$ " . number_format($_POST['qtd_misto_quente'] * $preco_misto, 2, ',', '.') . "</p>";
            }

            if (isset($_POST['qtd_coca']) && $_POST['qtd_coca'] > 0) {
                $total += $_POST['qtd_coca'] * $preco_coca;
                echo "<p><strong>Bebida Selecionada:</strong> Coca-Cola - Quantidade: {$_POST['qtd_coca']} - Subtotal: R$ " . number_format($_POST['qtd_coca'] * $preco_coca, 2, ',', '.') . "</p>";
            }

            if (isset($_POST['qtd_fanta']) && $_POST['qtd_fanta'] > 0) {
                $total += $_POST['qtd_fanta'] * $preco_fanta;
                echo "<p><strong>Bebida Selecionada:</strong> Fanta - Quantidade: {$_POST['qtd_fanta']} - Subtotal: R$ " . number_format($_POST['qtd_fanta'] * $preco_fanta, 2, ',', '.') . "</p>";
            }

            if (isset($_POST['qtd_batata']) && $_POST['qtd_batata'] > 0) {
                $total += $_POST['qtd_batata'] * $preco_batata;
                echo "<p><strong>Porção Selecionada:</strong> Batata Frita - Quantidade: {$_POST['qtd_batata']} - Subtotal: R$ " . number_format($_POST['qtd_batata'] * $preco_batata, 2, ',', '.') . "</p>";
            }

            if (isset($_POST['qtd_chocolate']) && $_POST['qtd_chocolate'] > 0) {
                $total += $_POST['qtd_chocolate'] * $preco_chocolate;
                echo "<p><strong>Doce Selecionado:</strong> Chocolate - Quantidade: {$_POST['qtd_chocolate']} - Subtotal: R$ " . number_format($_POST['qtd_chocolate'] * $preco_chocolate, 2, ',', '.') . "</p>";
            }

            echo "<h3>Total: R$ " . number_format($total, 2, ',', '.') . "</h3>";
        ?>

        <a href="index.html">Voltar ao Cardápio</a>
    </div>
</body>
</html>
