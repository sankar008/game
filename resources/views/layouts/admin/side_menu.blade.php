<nav class="side-nav">
    <a href="{{ route('dashboard') }}" class="intro-x flex items-center pl-5 pt-4">
        <img alt="{{ config('app.name', 'Kishore') }}" class="w-6" src="{{ asset('dist/images/TodiLogowhite.png') }}"
            width="100%">
        <span class="hidden xl:block text-white text-lg ml-3"> Admin </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="{{ route('dashboard') }}" class="side-menu {{ Request::is('dashboard') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i class="fa fa-home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>

        @if(Auth::user()->role_id == 1)
        <li>
            <a href="{{ route('user.list') }}" class="side-menu {{ Request::is('dashboard') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i class="fa fa-home"></i> </div>
                <div class="side-menu__title"> User </div>
            </a>
        </li>

        <li>
            <a href="{{ route('user.allocation') }}" class="side-menu {{ Request::is('dashboard') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i class="fa fa-home"></i> </div>
                <div class="side-menu__title"> Allocation </div>
            </a>
        </li>

        <li>
            <a href="{{ route('market.list') }}" class="side-menu {{ Request::is('dashboard') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i class="fa fa-home"></i> </div>
                <div class="side-menu__title"> Market </div>
            </a>
        </li>

        <li>
            <a href="{{ route('market.serial') }}" class="side-menu {{ Request::is('dashboard') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i class="fa fa-home"></i> </div>
                <div class="side-menu__title"> Market List </div>
            </a>
        </li>

        @endif

        <li>
            <a href="{{ route('market.result') }}" class="side-menu {{ Request::is('result') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i class="fa fa-home"></i> </div>
                <div class="side-menu__title"> Market Result</div>
            </a>
        </li>

       
       
        <li>
            <a class="side-menu" href="javascript:void(0);"
                onclick="if (confirm('Do you want to Logout?')){  document.getElementById('logout-form').submit();return true;}else{event.stopPropagation(); event.preventDefault();};">
                <div class="side-menu__icon"> <i class="fa fa-power-off"></i> </div>
                <div class="side-menu__title">Logout</div>
            </a>
        </li>

    </ul>
</nav>
