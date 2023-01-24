<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="sheep.php" title="Sheep Framework PHP - Por: MAYKONSILVEIRA.COM.BR "> <img alt="image" src="<?= SHEEP_LOGO ?>" class="header-logo" style="margin-top:5px; width:70%; height: auto;"/> <span
                class="logo-name"></span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Sheep PHP</li>
            <li class="dropdown active">
              <a href="sheep.php" class="nav-link"><i data-feather="monitor"></i><span>Painel</span></a>
            </li>

            <li class="menu-header">Personalizações</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="cpu"></i><span>Configurações</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?=FILTROS?>sheep-dados/index">Configurações site</a></li>
                <li><a class="nav-link" href="<?=HOME?>/limpar-cache">Limpar Cache</a></li>
              </ul>
            </li>
           
            <li class="menu-header">Clientes e Usuários</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="user-check"></i><span>Usuarios</span></a>
              <ul class="dropdown-menu">
                 <li><a href="<?=FILTROS?>sheep-usuarios/sheep-listar">Listar</a></li>
                <li><a href="<?=FILTROS?>sheep-usuarios/sheep-criar">Inserir</a></li>
                
              </ul>
            </li>
            
          </ul>
        </aside>
      </div>