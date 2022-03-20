<html>
    <body>
        
        <?php
        
        if(isset($_POST['enviar-forms'])):
            $nome = $_POST['nome'];
            $sexo = $_POST['sexo'];
            $idade = $_POST['idade'];

            if (strtoupper($sexo) == "F" && $idade < 25):
                echo "$nome. ACEITA.";
            else:
                echo "$nome NÃO ACEITA.";
            endif;

        endif;
        
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            Nome <input type="text" name="nome" id=""> <br>
            Sexo (F/M) <input type="text" name="sexo" id=""> <br>
            Idade <input type="text" name="idade" id=""> <br>
            <input type="submit" value="Somar" name = "enviar-forms">
        </form>
    </body>
</html>