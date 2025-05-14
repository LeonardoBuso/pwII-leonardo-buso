<html>
    <body>
        <form method = "post">
            Base maior
            <input type="text" name = "B"> <br>
            Base menor
            <input type="text" name = "b"> <br>
            Altura
            <input type="text" name = "h"> <br>
            <input type="submit">
            <input type="reset">
        </form>

        <?php
            $baseMaior = $_POST ["B"];
            $baseMenor = $_POST ["b"];
            $altura = $_POST ["h"];
            $area = ($baseMaior + $baseMenor) * $altura / 2;
            echo "A área do trapézio é:  $area"
        ?>
    </body>
</html>