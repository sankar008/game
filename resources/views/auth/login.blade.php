@extends('layouts.admin.app')
@section('content')
<style type="text/css">
	.login:after {
		background-color: #003981!important;
	}
</style>
	<form method="POST" action="{{ route('login') }}">
    @csrf
        <div class="block xl:grid grid-cols-2 gap-4">

            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="{{ url('/') }}" class="-intro-x flex items-center pt-5">
                    <span class="text-white text-lg ml-3" style="font-size: 24px;"> Admin </span>
                </a>
                <div class="my-auto">
                    <img alt="{{ config('app.name', 'Todi Group') }}" class="-intro-x w-1/2 -mt-16" src="{{ asset('dist/images/todi.png') }}" width="100%">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        A few more clicks to <br> sign in to your account.
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all your accounts in one place</div>
                </div>
            </div>

            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                	<div style="margin-left: 37%;">
	                    <img alt="Todi Logo" src="{{ asset('dist/images/TodiLogo.png') }}" width="40%">
                	</div>
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        {{ __('Login') }}
                    </h2>
                    <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">
						A few more clicks to sign in to your account. Manage all your accounts in one place
					</div>
                    <div class="intro-x mt-8">

                        <input
							class="intro-x login__input form-control py-3 px-4 block @error('email') is-invalid @enderror"
							placeholder="{{ __('Email or Username or Mobile') }}"
							id="email"
							type="text"
							name="email"
							value="{{ old('email') }}"
							required
							autocomplete="email"
							autofocus
						/>

						<input
							id="password"
							type="password"
							class="form-control @error('password') is-invalid @enderror intro-x login__input form-control py-3 px-4 block mt-4"
							placeholder="Password"
							name="password"
							required
							autocomplete="current-password"
						/>
                    </div>

                    <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                        <div class="flex items-center mr-auto">
                            <input id="remember-me" type="checkbox" class="form-check-input border mr-2" name="remember" {{ old('remember') ? 'checked' : '' }} />
                            <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                        </div>

						@if (Route::has('password.request'))
                            <a  href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                        @endif
                    </div>

                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top" style="background-color: #003981;">{{ __('Login') }}</button>

						@if (Route::has('register'))
							<!-- <a class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top"href="{{ route('register') }}">{{ __('Register') }}</a> -->
						@endif
                    </div>

                    <div class="intro-x xl:mt-24 text-slate-600 dark:text-slate-500 login-footer" style="display:flex; justify-content: space-between;">
						<div>
							Owned by Admin Panet
						</div>
						<div>
							Developed by <a href="#" target="_blank">Admin Panel</a>
						</div>
					</div>

                </div>
            </div>
        </div>
	</form>
@endsection
