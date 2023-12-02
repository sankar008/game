@extends('layouts.admin.master')
@section('title', 'Market Serial')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="#">Dashboard</a> </li>
    <li class="breadcrumb-item active" aria-current="page">Market Serial</li>
@endsection
@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Market Serial</h2>
    </div>
    <div class="intro-y box p-5 mt-5 dx-viewport">
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start" id="basicInformationSearchForm">
        </div>
        <div class="overflow-x-auto scrollbar-hidden mt-5">
            <div id="gridContainer"></div>
            <div id="formPopup"></div>
            <div class="mt-5 text-center">
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var ADD_URL = "{{ route('add.market.serial') }}";
        var LIST_URL = "{{ route('market.serial.list') }}";
        var SERIAL_NO = "{{ $serial_no }}";
    </script>
    <script src="{{ asset('page_assets/users/market_serial.js') }}?v={{ time() }}" type="module"></script>
    <script src="{{ asset('page_assets/users/jodi_number_list.js') }}?v={{ time() }}" type="module"></script>
@endsection
