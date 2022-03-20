<html>
    <body>
        <?php
        if(isset($_POST['enviar-forms'])):
            $order = array();
            $numbers = $_POST['numbers'];

            $numbers = explode(" ", $numbers);

            foreach($numbers as $number):
                if (in_array($number, $numbers)):
                    $order[] = $number;
                endif;
            endforeach;

            arsort($order);
            echo "Ordem decrescente: ";
            foreach($order as $number):
                echo "$number ";
            endforeach;
        endif;

        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            Números <input type="text" name="numbers" id=""> <br>
            <input type="submit" value="Ordem Decrescente" name="enviar-forms">
        </form>
    </body>
</html>