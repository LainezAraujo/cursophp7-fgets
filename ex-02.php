<?php 
//base 64 converte binário em string (RENDERIZAÇÃO)

$filename = "logo.png";
//lê conteúdo inteiro ...contents
$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);
//digo tipo de arquivo png jpg ...
$mimetype = $fileinfo->file($filename);
//Padrão de execução
$base64encode = "data:".$mimetype.";base64,".$base64;

 ?>

<!-- ?= seria a abertura do php, link para não utilizar aquele texto-->
 <a href="<?=$base64encode?>" target= "_blank">Link Para Imagem</a>
 <img src="<?=$base64encode?>">