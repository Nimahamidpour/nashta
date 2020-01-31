<!-- Sidebar -->
<ul class="sidebar navbar-nav p-0 m-0 bg-admin" id="menuul">

    <li class="nav-item active ">

        <a href="{{route('admin.dashboard')}}" class="nav-link btmenuitem text-right bg-admin text-white bold">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>داشبورد</span></a>
    </li>
    <li class="nav-item">

        <a class="nav-link dropdown-toggle text-right bg-admin" href="#" id="pagesDropdown" role="button"
           data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-utensils text-white"></i>
            <span class="bold text-white">مدیریت منو </span>
        </a>

        <div class="dropdown-menu p-0 m-0" aria-labelledby="pagesDropdown">

            <a href="{{route('admin-food-list')}}" class="nav-link text-right text-dark">
                <i class="fas fa-list"></i>
                <span class="bold">لیست منو</span>
            </a>
            <a href="" class="nav-link text-right text-dark">
                <i class="fas fa-hamburger"></i>
                <span class="bold">ثبت صبحانه جدید</span>
            </a>
        </div>

    </li>
    <li class="nav-item">

        <a class="nav-link dropdown-toggle text-right bg-admin" href="#" id="pagesDropdown" role="button"
           data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-store text-white"></i>
            <span class="bold text-white">مدیریت سفارشات </span>
        </a>

        <div class="dropdown-menu p-0 m-0" aria-labelledby="pagesDropdown">

            <a href="{{route('admin-order-list')}}" class="nav-link text-right text-dark">
                <i class="fas fa-list"></i>
                <span class="bold">لیست سفارشات</span>
            </a>
            <a href="{{route('admin-order-list-day')}}" class="nav-link text-right text-dark">
                <i class="fas fa-list-alt"></i>
                <span class="bold">سفارشات امروز</span>
            </a>
        </div>

    </li>
    <li class="nav-item active ">

        <a href="{{route('admin-customer-list')}}" class="nav-link btmenuitem text-right bg-admin text-white bold">
            <i class="fas fa-user"></i>
            <span>لیست مشتریان ما</span></a>
    </li>

</ul>
<!-- Sidebar -->
