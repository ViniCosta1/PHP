<html>
    <body>

        <?php
        
        if (isset($_POST['enviar-forms'])): // * Esse if é meio que "quando eu enviar o forms..."
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];

            $soma = $n1+$n2;
            echo "Soma dos valores = $soma <br>";

            if ($soma > 20):
                $soma = $soma + 8;
                echo "Valor maior que 20: <br>
                Novo valor = $soma";
            elseif ($soma <= 20):
                $soma = $soma - 5;
                echo "Valor menor que ou igual a 20: <br>
                Novo valor = $soma";
            endif;
        endif;
        ?>

        <form action="Exercicio_1.php" method="POST">
            Valor 1 <input type="text" name="n1" id=""> <br>
            Valor 2 <input type="text" name="n2" id=""> <br>
            <input type="submit" value="Somar" name = "enviar-forms">
        </form>
    </body>
</html>