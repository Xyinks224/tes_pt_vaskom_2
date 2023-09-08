<style type="text/css">
        html,
        body {
            background-color: #F8F8F8;
            height: 100%;
        }
        .active a{
            background-color: #41A0E4;
        }
</style>
<ul class="nav flex-column nav-pills col-2 bg-white shadow-sm mt-2 {{ (request()->is('')) ? 'd-none' : '' }}" style="padding-right: 0">
    <li class="nav-item">
        <a class="nav-link {{ (request()->is(['superadmin/dashboard*']) ? 'active' : '') }}" href="{{ route('superadmin.dashboard') }}">
            <i class="fas fa-fw fa-house"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (request()->is(['superadmin/user*']) ? 'active' : '') }}" href="{{ route('superadmin.user.index') }}">
            <i class="fas fa-fw fa-regular fa-user"></i>
            <span>Manajemen User</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (request()->is(['superadmin/product*']) ? 'active' : '') }}" href="{{ route('superadmin.product.index') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Manajemen Produk</span>
        </a>
    </li>
</ul>
