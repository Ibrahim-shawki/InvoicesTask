<header class="navbar">
    <div class="container-fluid">
        <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
       
        <ul class="nav navbar-nav hidden-md-down">
            <li class="nav-item">
                <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
            </li>
        </ul>
        <ul class="nav navbar-nav pull-left hidden-md-down">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="hidden-md-down">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                    class="bx bx-log-out"></i>تسجيل خروج</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                </div>
            </li>
            <li class="nav-item">
                {{-- <a class="nav-link navbar-toggler aside-toggle" href="#">&#9776;</a> --}}
            </li>

        </ul>
    </div>
</header>