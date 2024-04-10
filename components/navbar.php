<header>
    <nav class="navbar navbar-dark bg-primary navbar-expand-lg fixed-top">
    
        <div class="container">
        <!-- logo -->
       <a class="navbar-brand me-3" href="./home">Bounty</a>
        <!-- menu sanduíche (to smartphone) -->
       <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu-links">
           <span class="navbar-toggler-icon"></span>
       </button>
       
       <!-- menu of links -->
       <div class="collapse navbar-collapse" id="menu-links">
       <!-- logo and link alinhados à esquerda -->
       <ul class="navbar-nav me-auto">
            <li class="nav-item"><a href="<?=$link['home']?>" class="nav-link">Home</a></li>
            <!-- Link desabled -->
            <li class="nav-item"><a href="<?=$link['dashboard']?>" class="nav-link">Dashboard</a></li>
            <li class="nav-item"><a href="<?=$link['denunciar']?>" class="nav-link">Denunciar</a></li>
        </ul>

       <div class="d-flex">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a href="<?=$link['conta']?>" class="nav-link text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        <span>Conta</span>
                    </a>
                </li>
            </ul>
       </div>

       </div>

       </div>

    </nav>
</header>        