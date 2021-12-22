<? php

# alterar a variavel abaixo colocando o seu email

$destinatario = "contato@studycenter.me";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['mensagem'];
$assunto = $_REQUEST['assunto'];

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:obrigado.htm");


?>

  < html >
    < cabeça >
      < estilo >
        body { font-family : sans-serif;}
        a { cor : azul; }
        textarea { largura :  100 % ; altura :  200 px ; preenchimento :  10 px ;}
      </ estilo >
    </ head >

    < corpo >
      < h2 > Arquivos do diretório: <? php  echo  dirname (__FILE__); ?> </ h2 >
      < ul >
        <! - para cada nome de arquivo no array ->
        <? php  foreach ( $ arquivos  as  $ arquivo ): ?>
          <! - verificar se a extensão .txt existe na string do nome ->
          <? php  if ( strpos ( $ arquivo , $ EXTENSAO )): ?>
          < li >
            <! - mostre um link com o nome do arquivo e o método GET? abrir = ->
            < A  href = " abrir =? <? Php  echo  $ Arquivo ; ?> " > <? Php  echo  $ ARQUIVO ; ?> </ a >
          </ li >
          <? php  endif ; ?>
        <? php  endforeach ; ?>
      </ ul >

      <! - Criamos uma textarea para mostrar o conteúdo do arquivo selecionado ->
      <? php  if ( isset ( $ conteudo )): ?>
      < h2 > Conteúdo do arquivo: <? php  echo  $ nome_do_arquivo ; ?> </ h2 >
      < textarea >
        <? php  echo  $ conteudo ; ?>
      </ textarea >
      <? php  endif ; ?>
    </ body >
  </ html >