<nav>
    <div class="nav-icons">
        <a href="{{ route('dashboard') }}" class="link-size"><span class="material-symbols-outlined" data-tooltip="Home"><img src="imgs/black/home.svg" alt="Home icon" class="theme-icon"></span></a>
        <a href="{{ route('feed') }}" class="link-size"><span class="material-symbols-outlined" data-tooltip="Profile"><img src="imgs/black/feed.svg" alt="Person icon" class="theme-icon"></span></a>
        <a href="{{ route('profile') }}" class="link-size"><span class="material-symbols-outlined" data-tooltip="Profile"><img src="imgs/black/person.svg" alt="Person icon" class="theme-icon"></span></a>
        <span class="material-symbols-outlined" data-tooltip="Dark Mode" onclick="toggleTheme()">
            <img src="imgs/black/theme.svg" alt="Theme Toggle" class="theme-icon">
        </span>
        @guest
            <a href="{{ route('login') }}" class="link-size"><span class="material-symbols-outlined" data-tooltip="Login"><img src="imgs/black/login.svg" alt="Login icon" class="theme-icon"></span></a>
            <a href="{{ route('register') }}" class="link-size"><span class="material-symbols-outlined" data-tooltip="Register"><img src="imgs/black/register.svg" alt="Register icon" class="theme-icon"></span></a>
        @endguest
        @auth
            <a href="{{ route('logout') }}" class="link-size"><span class="material-symbols-outlined" data-tooltip="Logout" class="link-size"><img src="imgs/black/logout.svg" alt="Logout icon" class="theme-icon"></span></a>
        @endauth
    </div>
</nav>