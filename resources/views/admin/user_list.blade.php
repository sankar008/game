@extends('layouts.admin.master')
@section('title', 'User List')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="#">Dashboard</a> </li>
    <li class="breadcrumb-item active" aria-current="page">User List</li>
@endsection
@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">User List</h2>
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
         var LIST_URL = "{{ route('api.user.list') }}";
         var ADD_URL = "{{ route('api.add.user') }}";
         var UPDATE_URL = "{{ route('api.update.user') }}";
    </script>   
    <script src="{{ asset('page_assets/users/search_user.js') }}?v={{ time() }}" type="module"></script>
    <script src="{{ asset('page_assets/users/user_lists.js') }}?v={{ time() }}" type="module"></script>
@endsection
