# COMO UTILIZAR O COMPOSER EM PROJETOS

## Passo a passo

### Inicializando o Composer no projeto:

<p>
- Abrir o terminal 
- Digitar "composer init" 
- Configurar o composer (nome do vendor, nome do pacote, descrição e nome do autor) 
- Na hora de colocar o nome, precisa colocar entre os sinais <> seu endereço de email
- No tipo de pacote, geralmente será utilizado biblioteca, mas depende o tipo de projeto a ser trabalhado
</p>

<p>Definindo dependencias: 
- Não é necessário definir nenhuma dependencia (por enquanto) 
- Neste projeto de exemplo, podemos apenas apertar Enter até ele sair dessa etapa 
- Depois disso, apenas confirme digitando "yes" no último input 
</p>

<p>Ao final de toda a configuração, é necessário que apareça duas pastas ("vendor" e "src") e um arquivo chamado "composer.json"</p>
<p>Na pasta "vendor" tem que ter uma outra pasta chamada "composer" e um arquivo chamado "autoload.php"</p>
<p>Caso você não lembre das configurações feitas, no arquivo "composer.json" há todas as informações necessárias para o composer</p>

### Instalando pacotes

<p>Um site recomendado para pegar qualquer tipo de pacote é o **Packagist**</p>
<p>MANEIRA **AUTOMÁTICA**</p>
<p>
- Abrir o site Packagist (ou outro)
- Selecionar o pacote que deseja ser instalado
- Copiar o comando de instalação do pacote
- Abrir o terminal
- Colar o comando de instalação e pressionar Enter
- Após a instalação, será criado um arquivo chamado "composer.lock"
- E para confirmar que foi instalado corretamente, dentro do arquivo "composer.json", na parte de "requires" (as dependências), estará o nome do pacote instalado e sua versão
</p>

<p>MANEIRA **MANUAL**</p>
<p>
- Abrir o site Packagist (ou outro)
- Selecionar o pacote que deseja ser instalado
- Copiar o nome do pacote escolhido
- Abrir o arquivo "composer.json"
- Na parte de "requires", colocar o pacote seguindo essa estrutura: <br>
> "require": {
>   "[nome-do-pacote]": "^[versão-desejada]"
> }
- Após isso, abrir o terminal e digitar um desses comandos: **composer install** (verifica e instala pacotes não instalados) || **composer update** (verifica e atualiza todos os pacotes). Caso um dos comandos não funcione, tente o outro e verifica que o nome do pacote e sua versão foram digitados corretamente.

</p>