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
- git config --global user.email "email do seu GitHub"<br>
- git config --global user.name "nome do seu GitHub"
<br>
<br>
<strong>➡️ Deletar uma branch remota (do GitHub) e local</strong><br>
- git push origin --delete NomeDaBranchRemota <br>
- git branch -d NomeDaBranchLocal
<br>
<br>
➡️ Após deletar as branches, recomenda-se <strong>sincroniza-las</strong>, com o comando:<br>
- git fetch -p
<br>
<br>
➡️ Quando você vai começar a trabalhar com um repositório remoto ja existente, você <br>
tem que fazer a <strong>clonagem</strong> desse repositório na máquina local. Para <br>
isso tem o comando:<br>
- git clone "https://usuario@enderecoRemoto.com/repositorio.git​"
<br>
No lugar desse endereço, você pode apenas colocar o link do site onde se encontra o<br>
repositório que deseja clonar.
<br>
<br>
➡️ <strong>Pull e Push</strong><br>
Pull - Quando você fez suas alterações localmente, você precisa enviar para o GitHub<br>
para que as outras pessoas tenham acesso. Sendo assim, esse comando tem essa função:<br>
- git pull
<br>
Push - é meio que o oposto. Quando foi feita alterações no GitHub e você quer passar<br>
para o local, você usa esse comando:<br>
- git push origin nome-da-branch