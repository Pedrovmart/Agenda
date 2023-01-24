<?php


ob_start();
require('./sheep_core/config.php');


?>
<!DOCTYPE html>
<html lang="pt-br" >
<head >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <?php
        $SheepUrl = new SheepUrl();
        $SheepUrl->getTags();
        ?>
        <!-- INICIO DO CSS SHEEP FRAMEWORK PHP - MAYKONSILVEIRA.COM.BR -->
        <? require_once __DIR__ . SOLICITAR_TEMAS . '/assets/' . estilos.php ?>
         
        <!-- FIM DO CSS  SHEEP FRAMEWORK PHP - MAYKONSILVEIRA.COM.BR -->
</head>
<body>
<?php
if (!require($SheepUrl->getPatch())):
   echo 'Erro ao incluir arquivo de navegação! ';
  endif;
?>
  <!-- INICIO JAVASCRIPT SHEEP FRAMEWORK PHP - MAYKONSILVEIRA.COM.BR -->
   <? require_once __DIR__ . SOLICITAR_TEMAS . '/assets/' . javascript.php ?>
  <!-- FIM JAVASCRIPT SHEEP FRAMEWORK PHP - MAYKONSILVEIRA.COM.BR -->
    </body>

</html>

<?php
ob_end_flush();
?>