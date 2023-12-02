<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', '') }} - @yield('title')</title>
    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="{{ config('app.name', '') }}">

    <link href="{{ asset('dist/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dist/css/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/dx/css/dx.light.css') }}">

    @stack('styles')
    @yield('styles')
</head>

<body class="py-5">
    @include('layouts.admin.mobile_menu')
    <div class="flex">
        @include('layouts.admin.side_menu')
        <div class="content" id="app">
            <div class="top-bar">
                <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        @yield('breadcrumbs')
                    </ol>
                </nav>

                <div class="intro-x dropdown mr-auto sm:mr-6">
                    <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button"
                        aria-expanded="false" data-tw-toggle="dropdown">
                        <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i>
                    </div>
                    <div class="notification-content pt-2 dropdown-menu">
                        <div class="notification-content__box dropdown-content">
                            <div class="notification-content__title">Notifications
                                <span class="text-xs text-white px-1 rounded-full bg-danger ml-3">1
                            </div>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in"
                        role="button" aria-expanded="false" data-tw-toggle="dropdown">
                        {{-- <img alt="{{ config('app.name', 'Kishore') }}" src="{{ (!empty(auth()->user()->image)) ? asset(auth()->user()->image) : asset('dist/images/profile-5.jpg') }}"> --}}
                    </div>

                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-primary text-white">
                            <li class="p-2">
                                <div class="font-medium">Admin</div>
                                <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">
                                    Admin
                                </div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="#" class="dropdown-item hover:bg-white/5"> <i data-lucide="user"
                                        class="w-4 h-4 mr-2"></i> Profile </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock"
                                        class="w-4 h-4 mr-2"></i> Reset Password </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                    onclick="if (confirm('Do you want to Logout?')){  document.getElementById('logout-form').submit();return true;}else{event.stopPropagation(); event.preventDefault();};"
                                    class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right"
                                        class="w-4 h-4 mr-2"></i> Logout </a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
            @yield('content')
        </div>
    </div>





    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
    <script src="{{ asset('dist/js/app.js') }}"></script>
    <script src="{{ asset('dist/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery-migrate-1.4.1.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.lazyload.js') }}"></script>
    <script src="{{ asset('dist/js/moment.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('dist/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('dist/js/toastr.min.js') }}"></script>
    <script src="{{ asset('dist/inputmask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('dist/js/custom.js') }}"></script>
    <script src="{{ asset('assets/plugins/dx/js/dx.all.js') }}"></script>
    <script src="{{ asset('assets/plugins/dx/js/dx.aspnet.data.js') }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            const modalPreviewMD = tailwind.Modal.getOrCreateInstance(document.querySelector(
            "#modalDataPreviewMD"));
            const modalPreviewLG = tailwind.Modal.getOrCreateInstance(document.querySelector(
            "#modalDataPreviewLG"));
            const modalPreviewXL = tailwind.Modal.getOrCreateInstance(document.querySelector(
            "#modalDataPreviewXL"));
            const slideOverPreview = tailwind.Modal.getOrCreateInstance(document.querySelector(
                "#modalSlideOverPreview"));
            $(document).on('click', '.li-modal', function(e) {
                e.preventDefault();
                modalPreviewMD.toggle();
                $(document).find('.modal-data-preview-content').load($(this).attr('href'));
            });

            $(document).on('click', '.li-modal-lg', function(e) {
                e.preventDefault();
                modalPreviewLG.toggle();
                $(document).find('.modal-data-preview-content').load($(this).attr('href'));
            });

            $(document).on('click', '.li-modal-xl', function(e) {
                e.preventDefault();
                modalPreviewXL.toggle();
                $(document).find('.modal-data-preview-content').load($(this).attr('href'));
            });

            $(document).on('click', '.li-modal-slideover', function(e) {
                e.preventDefault();
                slideOverPreview.toggle();
                $(document).find('.modal-data-preview-content').load($(this).attr('href'));
            });

        });

        @if ($message = Session::get('success'))
            toastr.success('Success!', '{{ ucwords(trimValues($message, true)) }}');
        @endif

        @if ($error = Session::get('error'))
            toastr.error('Opss!', '{{ ucwords(trimValues($error, true)) }}');
        @endif

        @if (isset($errors) && count($errors) > 0)
            @foreach ($errors->all() as $err)
                toastr.warning('Opss!', '{{ ucwords(trimValues($err, true)) }}');
            @endforeach
        @endif
    </script>
    @stack('scripts')
    @yield('scripts')
</body>

</html>
