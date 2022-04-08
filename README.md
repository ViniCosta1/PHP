# PHP
Esse repositório é para estudo e armazenamento de arquivos PHP.
Aqui estará guardado arquivos que são provenientes do estudo da linguagem.

Desde o básico ao avançado.


## Principais Comandos GIT
Esse espaço é para eu ir adicionando comandos GIT que eu acho importante.<br>
Conforme vou estudando mais afundo, irei adicionando aqui comandos importantes. <br>
<br>
Quando estiver com muitos comandos, irei **criar** um repositório apenas para <br>
esses comandos.
<hr>
<strong>➡️ Comando de configuração de conexão entre o GitHub e o VS Code</strong><br>
<li>git config --global user.email "email do seu GitHub"</li>
<li>git config --global user.name "nome do seu GitHub"</li>
<br>
<strong>➡️ Deletar uma branch remota (do GitHub) e local</strong><br>
<li>git push origin --delete NomeDaBranchRemota</li>
<li>git branch -d NomeDaBranchLocal</li>
<br>
<br>
➡️ Após deletar as branches, recomenda-se <strong>sincroniza-las</strong>, com o comando:<br>
<li>git fetch -p</li>
<br>
➡️ Quando você vai começar a trabalhar com um repositório remoto ja existente, você <br>
tem que fazer a <strong>clonagem</strong> desse repositório na máquina local. Para <br>
isso tem o comando:<br>
<li>git clone "https://usuario@enderecoRemoto.com/repositorio.git"</li>
<br>
No lugar desse endereço, você pode apenas colocar o link do site onde se encontra o<br>
repositório que deseja clonar.
<br>
Você também pode apenas clonar diretamente pelo icone do Git, que fica na barra lateral esquerda <br>
(LEMBRANDO: Isso deve ser após ligar a conta com o Github).
<br>
<br>
➡️ <strong>Push e Pull</strong><br>
<strong>Push</strong> - Quando você fez suas alterações localmente, você precisa enviar para o GitHub<br>
para que as outras pessoas tenham acesso. Sendo assim, esse comando tem essa função:<br>
<li>git push origin nome-da-branch</li>
<br>
<strong>Pull</strong> - é meio que o oposto. Quando foi feita alterações no GitHub e você quer passar<br>
para o local, você usa esse comando:<br>
<li>git pull</li>
<br>
➡️ <strong>Enviar um projeto existente na máquina local para o GitHub </strong>:<br>
Primeiramente, você deve <strong>inicializar o git</strong> na pasta em que você está trabalhando. <br>
Para fazer isso, (no caso do VS Code), abra o terminal e digite:<br>
<li>git init</li>
<br>
Isso fará com que sua pasta fique "apropriada" para os próximos comandos. O próximo passo é você<br>
<strong>adicionar/preparar</strong> os arquivos que serão enviados para o repositório. Para isso, você pode<br>
ou fazer manualmente, através do "Controle do Código-Fonte" do VS Code (Fica na lateral com o<br> 
simbolo do git), ou através desse código:<br>
<li>git add . </li>
<br>
Esse código fará com que seja preparada <strong>TODOS</strong> os arquivos. Depois disso, podemos enviar<br>
os arquivos preparados através desse código:<br>
<li>git commit -m 'Meu comentário bonito'</li>
<br>
Mas calma que ele ainda não foi para o GitHub. Depois de enviar, devemos criar um repositório manualmente no GitHub.<br>
Depois de criado o repositório, basta vincular o repositório com o projeto local. O comando é:<br>
<li>git remote add origin 'https://github.com/usuario/nomedomeurepositorio.git'</li>
<br>
Esse link é o link do repositório que aparece logo quando criamos. Podemos usar tanto ele, quanto o da URL. <br>
Após tudo isso, temos apenas que realizar o <strong>push</strong>, com esse comando:<br>
<li>git push origin master</li>
<br>
Ele será <strong>"master"</strong> pois quando criamos uma branch direto pelo git, o nome padrão da branch default<br>
fica como "master". Dessa forma, estamos empurrando os arquivos para a branch "master" no GitHub
