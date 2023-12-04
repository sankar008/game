@extends('layouts.admin.master')
@section('title', 'Dashboard')
@section('breadcrumbs')
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
@endsection

@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Dashboard</h2>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="report-box zoom-in">
                <div class="box p-5">
                    <div class="flex">
                        <i class="fa fa-credit-card text-primary fn-30" aria-hidden="true"></i>
                        <div class="ml-auto">
                           
                        </div>
                    </div>
                    <div class="text-3xl font-medium leading-8 mt-6">{{ $total_market }}</div>
                    <div class="text-base text-slate-500 mt-3">Total Active Market</div>                    
                </div>
            </div>
        </div>
        @if(Auth::user()->role_id == 1)
        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="report-box zoom-in">
                <div class="box p-5">
                    <div class="flex">
                        <i class="fa fa-credit-card text-warning fn-30" aria-hidden="true"></i>
                        <div class="ml-auto">
                          
                        </div>
                    </div>
                    <div class="text-3xl font-medium leading-8 mt-6">{{ $total_user }}</div>
                    <div class="text-base text-slate-500 mt-3">Total Active User</div>
                </div>
            </div>
        </div>  
        @endif     
    </div>

@endsection
