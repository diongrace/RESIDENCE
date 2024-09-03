<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#gestionReservations" aria-expanded="false" aria-controls="gestionReservations">
                    <div class="sb-nav-link-icon"><i class="fas fa-tasks"></i></div>
                    Gestion Réservations
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-chevron-down"></i></div>
                </a>
                <div class="collapse" id="gestionReservations" aria-labelledby="headingReservations" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/gestions/reservation">Réservation</a>
                        <a class="nav-link" href="/gestions/reservationlist">Liste des Réservations</a>
                    </nav>
                </div>
                

                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#menuUtilisateurs" aria-expanded="false" aria-controls="menuUtilisateurs">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Gestion Utilisateur
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-chevron-down"></i></div>
                </a>
                <div class="collapse" id="menuUtilisateurs" aria-labelledby="headingUtilisateurs" data-bs-parent="#sidebarAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/utilisateur/forms">Ajouter un Utilisateur</a>
                        <a class="nav-link" href="/">Liste des Utilisateurs</a>
                    </nav>
                </div>
                
                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#menuPaiements" aria-expanded="false" aria-controls="menuPaiements">
                    <div class="sb-nav-link-icon"><i class="fas fa-money-bill-wave"></i></div>
                    Gestion Paiements
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-chevron-down"></i></div>
                </a>
                <div class="collapse" id="menuPaiements" aria-labelledby="headingPaiements" data-bs-parent="#sidebarAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/payment/index">Liste des Paiements</a>
                        <a class="nav-link" href="/payment/process">Nouveau Paiement</a>
                    </nav>
                </div>

                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#menuLogements" aria-expanded="false" aria-controls="menuLogements">
                    <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                    Gestion Logements
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-chevron-down"></i></div>
                </a>
                <div class="collapse" id="menuLogements" aria-labelledby="headingLogements" data-bs-parent="#sidebarAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/logement">Ajouter un Logement</a>
                        <a class="nav-link" href="/">Liste des Logements</a>
                        <a class="nav-link" href="/logements/calendrier">Calendrier</a>
                    </nav>
                </div>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Login</a>
                                <a class="nav-link" href="register.html">Register</a>
                                <a class="nav-link" href="password.html">Forgot Password</a>
                            </nav>
                        </div>
                        
        </div>
    </nav>
</div>
