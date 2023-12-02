<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="{{ config('app.name', 'Kishore') }}" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-lucide="bar-chart-2"
                class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-white/[0.08] py-5 hidden">
        <li>
            <a href="#" class="menu">
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
                <div class="menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="box"></i> </div>
                <div class="menu__title"> Menu Layout <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Side Menu </div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu__devider my-6"></li>
    </ul>
</div>
