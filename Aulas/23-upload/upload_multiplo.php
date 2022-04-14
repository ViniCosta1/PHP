<html>
    <body>

    <?php
    if (isset($_POST['enviar-formulario'])):
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");

        /* 
            TODO: Como será upload de vários arquivos, temos que fazer uma array para armazenar cara arquivo.
            TODO: Sendo assim, temos que fazer um loop de repetição e passar por cara informação da superglobal de cada arquivo.

            * Se estiver em dúvida das informações da superglobal, comente todo o código e faça em vardump em $_FILES['arquivo'].
        */
        
        $quantidadeArquivos = count($_FILES['arquivo']['name']);
        $contador = 0;

        while($contador < $quantidadeArquivos):

            $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION); // * Função para pegar a extensão de um arquivo

            if (in_array($extensao, $formatosPermitidos)):
                $pasta = "C:\Users\\vinic\OneDrive\\nada\Desktop\Programação\PHP\PHP\\23-upload\arquivos\\"; // * Caminho para onde o arquivo seria upado
                $temporario = $_FILES['arquivo']['tmp_name'][$contador]; // * Nome que o arquivo recebe na array da superglobal $_FILES
                $novoNome = uniqid().".$extensao"; // * Nome gerado aleatóriamente + a extensão

                if (move_uploaded_file($temporario, $pasta.$novoNome)): // * O move_uploaded_files retorna um booleano. É ele que faz o arquivo ser upado ou não
                    echo "Upload feito com sucesso para $pasta$novoNome<br>";
                else:
                    echo "Erro ao fazer o upload do arquivo $temporario";
                endif;
            else:
                echo "$extensao não é permitida<br>";
            endif;
            $contador++;
        endwhile;
    endif;
    ?>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"
        enctype="multipart/form-data">

            <input type="file" name="arquivo[]" id="" multiple><br>
            <input type="submit" value="Enviar" name="enviar-formulario">
        </form>
    </body>
</html>