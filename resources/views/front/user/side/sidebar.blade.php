<!-- Sidebar -->
<ul class="sidebar navbar-nav p-0 m-0 bg-admin" id="menuul">

    <li class="nav-item active ">

        <a href="{{route('user-panel-basket')}}" class="nav-link btmenuitem text-right bg-admin text-white bold">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>سبد خرید</span></a>
    </li>

    <li class="nav-item">
        <a href="{{route('listorder')}}" class="nav-link btmenuitem text-right bg-admin text-white bold">
            <i class="fas fa-bars"></i>
            <span>لیست سفارشات</span></a>
    </li>

    <li class="nav-item">
        <a href="{{route('edit-user',Auth()->user()->id)}}" class="nav-link btmenuitem text-right bg-admin text-white bold">
            <i class="fas fa-handshake"></i>
            <span>پروفایل</span>
        </a>
    </li>


</ul>
<!-- Sidebar -->
