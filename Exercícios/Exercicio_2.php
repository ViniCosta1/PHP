<html>
    <body>

        <?php
        
        if (isset($_POST['enviar-forms'])):
            $n1 = $_POST['n1'];
            $valores = array(10, 5, 2);
            
            foreach($valores as $numero):
                if (($n1 % $numero) == 0):
                    echo "Este número é divisivel por $numero <br>";
                else:
                    echo "Este número não é divisivel por $numero <br>";
                endif;
            endforeach;
        endif;
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            Valor 1 <input type="text" name="n1" id=""> <br>
            <input type="submit" value="Somar" name = "enviar-forms">
        </form>
    </body>
</html>