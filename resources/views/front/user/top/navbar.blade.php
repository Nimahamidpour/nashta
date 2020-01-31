<nav class="navbar navbar-expand navbar-dark bg-admin static-top direction-rtl">

    <a class="navbar-brand mr-1 bold text-white " href="#"> پنل کاربری ناشتا </a>&nbsp;&nbsp;

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar -->
    <ul class="navbar-nav mr-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1 d-none">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="alertsDropdown">
                <a class="dropdown-item text-center" href="#">اعلانات</a>

            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1 d-none">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="messagesDropdown">
                <a class="dropdown-item text-center" href="#">پیام ها</a>


            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="userDropdown">

                <a class="dropdown-item text-center" href="#" data-toggle="modal" data-target="#logoutModal">خروج</a>
            </div>
        </li>
    </ul>

</nav>
