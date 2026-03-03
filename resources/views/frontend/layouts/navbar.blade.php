    <div class="navbar_custome">
        <div class="container-fluid border-bottom">
            <div class="container">
                <header class="py-3">
                 <nav class="navbar navbar-expand-lg">
                        <!-- LOGO / BRAND -->
                        <a href="index.html" class="navbar-brand d-flex align-items-center">
                            <svg class="bi" width="40" height="32" aria-hidden="true">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                            <span class="fs-4 h2">POLASH MOLLAH</span>
                        </a>

                        <!-- TOGGLER BUTTON (Mobile) -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- MENU -->
                        <div class="collapse navbar-collapse justify-content-end" id="mainMenu">
                            <ul class="navbar-nav nav-pills gap-2 mt-3 mt-lg-0">
                                <li class="nav-item">
                                    <a href="{{ route('index') }}" class="nav-link nav_custome me-5">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about') }}" class="nav-link nav_custome me-5">About</a>
                                </li>
                                <li class="nav-item me-5">
                                    <a href="{{ route('book') }}" class="nav-link nav_custome">Books</a>
                                </li>
                                <li class="nav-item me-5">
                                    <a href="{{ route('blog') }}" class="nav-link nav_custome">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contact') }}" class="nav-link nav_custome">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
            </div>
        </div>
    </div>