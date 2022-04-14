<html>
    <body>

    <?php
    if (isset($_POST['enviar-formulario'])):
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");

            $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION); // * Função para pegar a extensão de um arquivo

            if (in_array($extensao, $formatosPermitidos)):
                $pasta = "C:\Users\\vinic\OneDrive\\nada\Desktop\Programação\PHP\PHP\\23-upload\arquivos\\"; // * Caminho para onde o arquivo seria upado
                $temporario = $_FILES['arquivo']['tmp_name']; // * Nome que o arquivo recebe na array da superglobal $_FILES
                $novoNome = uniqid().".$extensao"; // * Nome gerado aleatóriamente + a extensão

                if (move_uploaded_file($temporario, $pasta.$novoNome)): // * O move_uploaded_files retorna um booleano. É ele que faz o arquivo ser upado ou não
                    echo "Upload feito com sucesso para $pasta$novoNome<br>";
                else:
                    echo "Erro ao fazer o upload do arquivo $temporario";
                endif;
            else:
                echo "$extensao não é permitida<br>";
            endif;
    endif;
    ?>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"
        enctype="multipart/form-data">

            <input type="file" name="arquivo" id=""><br>
            <input type="submit" value="Enviar" name="enviar-formulario">
        </form>
    </body>
</html>