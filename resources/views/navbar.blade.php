<nav class="main-nav">
    <ul class="nav-list">
        <li class="nav-item">
            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
        </li>
        <li class="nav-item">
            <a href="/about" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
        </li>
        <li class="nav-item">
            <a href="/siswa" class="nav-link {{ request()->is('siswa*') ? 'active' : '' }}">Data Siswa</a>
        </li>
        <li class="nav-item">
            <a href="/blog" class="nav-link {{ request()->is('blog*') ? 'active' : '' }}">Blog</a>
        </li>
        <li class="nav-item">
            <a href="/contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
        </li>
    </ul>
</nav>
