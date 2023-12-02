<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Kishore') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('dist/css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('dist/css/toastr.css') }}">
	<script src="{{asset('dist/js/jquery-3.2.1.min.js')}}"></script>
</head>
<body class="login">
    <div class="container sm:px-10">
		@yield('content')
    </div>
    <script src="{{ asset('dist/js/app.js') }}" defer></script>
	<script src="{{ asset('dist/js/toastr.min.js') }}"></script>
	<script type="text/javascript">
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$(document).ready(function () {
			toastr.options.escapeHtml = true;
			toastr.options.closeButton = true;
			toastr.options.closeHtml = '<button><i class="icon-off"></i></button>';
			toastr.options.closeMethod = 'fadeOut';
			toastr.options.closeDuration = 300;
			toastr.options.closeEasing = 'swing';
		});

		@if ($message = Session::get('success'))
			toastr.success('Success!', '{{ ucwords($message) }}');
		@endif

		@if ($error = Session::get('error'))
			toastr.error('Opss!', '{{ ucwords($error) }}');
		@endif

		@if((isset($errors)) && (count($errors) > 0))
			@foreach($errors->all() as $err)
				toastr.warning('Opss!', '{{ ucwords($err) }}');
			@endforeach
		@endif
	</script>
</body>
</html>
