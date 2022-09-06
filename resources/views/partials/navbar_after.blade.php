<nav id="navbar" class="navbar nav-menu">
    <ul>
        <li><a href="/home" class="nav-link scrollto {{ $title === 'home' ? 'active' : '' }} "><i class="bx bx-home"></i>
                <span>Home</span></a></li>
        <li><a href="/newsletter" class="nav-link scrollto {{ $title === 'newsletter' ? 'active' : '' }} "><i
                    class="bx bx-list-plus"></i>
                <span>Form</span></a></li>
        <li><a href="/storage" class="nav-link scrollto {{ $title === 'storage' ? 'active' : '' }} "><i
                    class="bx bx-hdd"></i> <span>Storage</span></a></li>
        <li><a href="/logout" class="nav-link scrollto {{ $title === 'about' ? 'active' : '' }} "><i
                    class='bx bx-exit'></i><span>Logout</span></a>
        </li>
    </ul>
</nav><!-- .nav-menu -->
