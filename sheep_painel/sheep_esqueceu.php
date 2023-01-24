<!DOCTYPE html>
<html lang="pt-br">
    <?php 
    
    session_start(); 
    require_once('../sheep_core/config.php');
    if(isset($_SESSION['userlogin'])){
        echo 'Você está logado';
        header('Location: '.HOME.'/wtpainel/webtec-technologies.php');
    }else{
        null;
    }
    
 // VALIDAÇÃO DOS FORMULÁRIOS WEBTECPR.COM.BR E MAYKON SILVEIRA
//$_SESSION['_token'] = (!isset($_SESSION['_token']) ) ? hash('sha512', rand(100, 5000)) : $_SESSION['_token'];

// VALIDAÇÃO DAS PÁGINAS WEBTECPR.COM.BR E MAYKON SILVEIRA
//$_SESSION['timeWT'] = (!isset($_SESSION['timeWT']) ) ? time()  : $_SESSION['timeWT'];

 $tokenWebtec = filter_input(INPUT_GET, 'token', FILTER_VALIDATE_INT);

if(!$tokenWebtec):
    WSErro("Seu token de sessão expirou!", WS_ERROR);
    die;
    
  elseif(strlen($tokenWebtec)  < 10 ):
      
      WSErro("Seu token de sessão é inválido!", WS_ERROR);
    die;
    
  elseif($tokenWebtec > time() - 1 ):
      
      WSErro("O que está tentando fazer? Dê um clique por vez!", WS_ERROR);
    die;
    
endif;

    ?>

<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>PAINEL DE CONTROLE - WEBTEC TECHNOLOGIES</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
                
              <div class="card-header">
                  <center>
                      <img src="assets/img/logo/logo-webtec-technologies.png" alt="Webtec Technologies" class="img-fluid" style="width:90%; height: auto;">
                  </center>
                  
              </div>
                <?php
                 // VERIFICA SENHA INCORRETA E MANDA MENSAGEM
                 $naoExsteEmail = filter_input(INPUT_GET, 'webtec_email_nao_existe', FILTER_VALIDATE_BOOLEAN);
                 if($naoExsteEmail){
                     
                 
               ?>
                
                <div class="alert alert-danger alert-has-icon" style="margin:3px auto;">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <div class="alert-title">Olá Cliente!</div>
                        Este e-mail não existe no sistema!
                      </div>
                    </div>
                    
                <?php
                }else{
                     null;
                 }
                ?>
                
                  <?php
                 // VERIFICA SE SAIU DO SISTEMA
                 $webtecSaiu = filter_input(INPUT_GET, 'webtec_saiu', FILTER_VALIDATE_BOOLEAN);
                 if($webtecSaiu){
                     
                 
               ?>
                
                <div class="alert alert-success alert-has-icon" style="margin:3px auto;">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <div class="alert-title">Prezado Cliente</div>
                        Você saiu do sistema, Volte sempre :)!
                      </div>
                    </div>
                    
                <?php
                }else{
                     null;
                 }
                ?>
                
                <?php
                 // VERIFICA SE SAIU DO SISTEMA
                 $webtecSaiu = filter_input(INPUT_GET, 'webtec_sua_sessao_expirou', FILTER_VALIDATE_BOOLEAN);
                 if($webtecSaiu){
                     
                 
               ?>
                
                <div class="alert alert-danger alert-has-icon" style="margin:3px auto;">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <div class="alert-title">Prezado Cliente</div>
                        Deve gerar uma nova senha, pois sua sessão expirou :(!
                      </div>
                    </div>
                    
                <?php
                }else{
                     null;
                 }
                ?>
                
                <?php
                 // CAMPOS EM BRANCO
                 $webtecCampos = filter_input(INPUT_GET, 'webtec_campos_vazios', FILTER_VALIDATE_BOOLEAN);
                 if($webtecCampos){
                     
                 
               ?>
                
                <div class="alert alert-warning alert-has-icon" style="margin:3px auto;">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <div class="alert-title">Prezado Cliente</div>
                        Por gentileza, preencha todos os campos!
                      </div>
                    </div>
                    
                <?php
                }else{
                     null;
                 }
                ?>
                
                <?php
                 // VERIFICA CONTA CANCELADA
                 $webtecCancelado = filter_input(INPUT_GET, 'webtec_conta_inativa', FILTER_VALIDATE_BOOLEAN);
                 if($webtecCancelado){
                     
                 
               ?>
                
                <div class="alert alert-danger alert-has-icon" style="margin:3px auto;">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <div class="alert-title">Prezado Cliente</div>
                        Sua conta foi cancelada, por gentileza entrar em contato com o suporte!
                      </div>
                    </div>
                    
                <?php
                }else{
                     null;
                 }
                ?>
                
              <div class="card-body">
                <form method="post" action="webtec-filtros/webtec_recuperar_senha.php?token=<?= $_SESSION['timeWT'] ?>" class="needs-validation" novalidate="">
                  <div class="form-group">
                      <label for="email">E-mail de Cadastro no site</label>
                      <div class="float-right">
                          <a href="index.php" class="text-small">
                          Entrar
                        </a>
                      </div>
                    <input id="email" type="email" class="form-control" name="webtec_email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Seu e-mail
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      
                      <label class="custom-control-label" for="remember-me">O link para recurerar a sua senha, chegará em seu e-mail de cadastro.</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Recuperar Senha
                    </button>
                  </div>
                </form>
                
                  
                  <!-- login sociail maykon silveira
                  
                  <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Login With Social</div>
                </div>
                <div class="row sm-gutters">
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-facebook">
                      <span class="fab fa-facebook"></span> Facebook
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-twitter">
                      <span class="fab fa-twitter"></span> Twitter
                    </a>
                  </div>
                </div>
                  -->
                  
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Todos os direitos reservados a Webtec Technologies no mercado desde 2010 <a href="https://webtecpr.com.br/">Acessar o site</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>