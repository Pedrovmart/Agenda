<?php
require_once("sheep_checa.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= SHEEP_TITULO_PAINEL ?></title>
  <!-- Sheep CSS -->
  <?php require_once('sheep_css.php')?>
  <!-- Sheep CSS -->
  <link rel='shortcut icon' type='image/x-icon' href='<?=SHEEP_ICONE?>' />
</head>
<body>

  <!--<div class="loader"></div>-->
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Buscar..." aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
              <span class="badge headerBadge1">
                6 </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Tickets
                <div class="float-right">
                  <a href="#">Ler todas</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
											text-white"> <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Nataly
                      Silveira</span>
                    <span class="time messege-text">Cursos online maykonsilveira.com.br</span>
                    <span class="time">1 minutos</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Naty
                      Silveira</span> <span class="time messege-text">Quero um curso da ead MaykonSilveira.com.br</span>
                    <span class="time">5 minutos</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Maria
                      Silva</span> <span class="time messege-text">Pode me ajudar?</span> <span class="time">12 minutos</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-4.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Maykon 
                      Silveira</span> <span class="time messege-text">Olá to de volta</span> <span class="time">30 minutos</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-3.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Oliver
                      Silveira</span> <span class="time messege-text">Me ajuder por gentileza
                      maykonsilveira.com.br</span> <span class="time">1 dia</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Amanda
                  Me ajuder por gentileza
                      maykonsilveira.com.br</span> <span class="time">1
                      3 dias</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">Ver todos <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notificações
                <div class="float-right">
                  <a href="#">Ler todos</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
												fa-code"></i>
                  </span> <span class="dropdown-item-desc"> Ead MaykonSilveira.com.br
                     <span class="time">1 Minuto
                      Outubro</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
												fa-user"></i>
                  </span> <span class="dropdown-item-desc"> <b>Ead MaykonSilveira.com.br</b> e <b>Ead MaykonSilveira.com.br</b> Maykon Silveira <span class="time">10 horas
                      Outubro</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                      class="fas
												fa-check"></i>
                  </span> <span class="dropdown-item-desc"> <b>Ead MaykonSilveira.com.br</b> e <b>Ead MaykonSilveira.com.br</b> Maykon Silveira <span class="time">10 horas
                      Outubro</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                      class="fas fa-exclamation-triangle"></i>
                  </span> <span class="dropdown-item-desc"> <b>Ead MaykonSilveira.com.br</b> e <b>Ead MaykonSilveira.com.br</b> Maykon Silveira <span class="time">10 horas
                      Outubro</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
												fa-bell"></i>
                  </span> <span class="dropdown-item-desc"> <b>Ead MaykonSilveira.com.br</b> e <b>Ead MaykonSilveira.com.br</b> Maykon Silveira <span class="time">10 horas
                      Outubro</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">Veja mais<i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> 

            <img alt="image" src="assets/img/logo/maykon.png" class="user-img-radious-style">

             <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title"> Maykon Silveira</div>
              <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Perfil
              </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Atividades
              </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Configurações
              </a>
              <div class="dropdown-divider"></div>
              <a href="sair.php?sair=true" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Sair
              </a>
            </div>
          </li>
        </ul>
      </nav>
      
      
      
      
       <!--MENU LATERAL WEBTECPR.COM.BR MAYKON SILVEIRA--->
      <?php include_once('sheep_menu.php');?>
      <!--FIM MENU LATERAL WEBTECPR.COM.BR MAYKON SILVEIRA--->