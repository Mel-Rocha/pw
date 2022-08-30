<?php

if (isset($_POST['nome']) and isset($_POST['email'])) {

  $nome = $_POST['nome'];
  $email = $_POST['email'];

  $conteudo = "$nome,$email\r\n";

  $arquivo = fopen('isset_post.txt', 'a+');
  fwrite($arquivo, $conteudo);
  fclose($arquivo);

  echo "Nome: $nome E-mail: $email";

  var_dump($_POST);

  

  
}

