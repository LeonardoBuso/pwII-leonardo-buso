<html>
    <body>
        <form method = "post">
            Valor do produto
            <input type="text" name = "valor">
            <input type="submit">
            <input type="reset">
        </form>

        <?php
            $valor = $_POST ["valor"];
            $valorTotal = $valor * 0.16;
            $valorParcela = $valorTotal / 10;

            echo "O valor total é de: $valorTotal ";
            echo "O valor de cada parcela é de: $valorParcela";
        ?>
    </body>
</html>