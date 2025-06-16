<nav class="sidebar sidebar-offcanvas fixed" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
        <a class="sidebar-brand brand-logo" href="{{Route('dashboard')}}"><img src="{{asset('images/logo-mini.svg')}}" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="{{Route('dashboard')}}"></a>
    </div>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{Route('dashboard')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Tableau de bord</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-parameter" aria-expanded="false" aria-controls="ui-parameter">
              <i class="mdi mdi-settings menu-icon"></i>
              <span class="menu-title">PARAMETRES</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-parameter">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="#">Paramètres généraux</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contenu des mails</a>
                </li>
              </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">UTILISATEURS</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="#">Liste des utilisateurs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Droits d'accès</a>
                </li>
              </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-demande" aria-expanded="false" aria-controls="ui-demande">
              <i class="mdi mdi-apps menu-icon"></i>
              <span class="menu-title">TRAITEMENT DES DEMANDES</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-demande">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="#">Demande de matériel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Demande de carburant</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Demande de véhicule</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Demande de salle</a>
                </li>
              </ul>
            </div>
        </li>
    </ul>
</nav>
