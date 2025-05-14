<html>
    <body>
        <form method = "post">
        Distancia
            <input type="text" name="Km"><br>
        Combustivel
            <input type="text" name="Litros"><br>
            <input type="submit">
            <input type="reset">
        </form> 

        <?php 
            $quilometrosRodados = $_POST ["Km"]; // o post é usado antes para chamar os dados que o fomrs perguntou e armazenou
            $combustívelGasto = $_POST ["Litros"];
            $consumoMedio = $quilometrosRodados / $combustívelGasto;
            echo "O consumo médio é de: $consumoMedio km/l";
        ?>  
    </body>
</html>