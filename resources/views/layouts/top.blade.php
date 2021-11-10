<div class="app-header-left">
    <!--<div class="search-wrapper">
        <div class="input-holder">
            <input type="text" class="search-input" placeholder="Type to search">
            <button class="search-icon"><span></span></button>
        </div>
        <button class="close"></button>
    </div>
    <ul class="header-menu nav">
        <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link">
                <i class="nav-link-icon fa fa-database"> </i>
                Statistics
            </a>
        </li>
        <li class="btn-group nav-item">
            <a href="javascript:void(0);" class="nav-link">
                <i class="nav-link-icon fa fa-edit"></i>
                Projects
            </a>
        </li>
        <li class="dropdown nav-item">
            <a href="javascript:void(0);" class="nav-link">
                <i class="nav-link-icon fa fa-cog"></i>
                Settings
            </a>
        </li>
    </ul>-->
</div>
<div class="app-header-right">
    <div class="header-btn-lg pr-0">
        <div class="widget-content p-0">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="btn-group">
                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                            <img width="42" class="rounded-circle" src="images/avatars/2.jpg" alt="">
                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Sair') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <div class="widget-content-left  ml-3 header-user-info">
                    <div class="widget-heading">
                        {{ Auth::user()->name }}
                    </div>
                    <div class="widget-subheading">
                        Usuário Administrador
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
