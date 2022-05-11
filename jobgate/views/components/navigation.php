<header>
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Job Gate</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if($page==='jobs'){echo 'active';} ?>" href="#">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page==='companies'){echo 'active';} ?>" href="#">Companies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page==='learn how'){echo 'active';} ?>" href="#">Learn How</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page==='about us'){echo 'active';} ?>" href="#">About Us</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <li class="nav-item">
                        <a class="nav-link login-btn" href="#">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sign-btn" href="#">Sign Up</a>
                    </li>
                </div>
            </div>
        </div>
    </nav>
</header>
