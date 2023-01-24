    <?php  
     ob_start();
    require_once('../sheep_core/config.php');
  
    $sair = filter_input(INPUT_GET, 'sair', FILTER_VALIDATE_BOOLEAN);
    if($sair){
        unset($_SESSION['sheep_user']);

        unset($_SESSION['sheep_user']);
        header('Location: '.URL_CAMINHO_PAINEL.'index.php?sheep_saiu=true');
        session_destroy();
        
    }else{
        header('Location: '.URL_CAMINHO_PAINEL.'index.php');
    }
    ?>
