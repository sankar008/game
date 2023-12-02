@extends('layouts.admin.master')
@section('title', 'Market Result')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="#">Dashboard</a> </li>
    <li class="breadcrumb-item active" aria-current="page">Market Result</li>
@endsection
@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Market Result</h2>
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
         var UPDATE_URL = "{{ route('api.market.result.update') }}";
         var LIST_URL  = "{{ route('api.market.result.list') }}"
    </script>   
    <script src="{{ asset('page_assets/users/search_result.js') }}?v={{ time() }}" type="module"></script>
    <script src="{{ asset('page_assets/users/result_list.js') }}?v={{ time() }}" type="module"></script>
@endsection
