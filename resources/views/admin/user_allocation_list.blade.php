@extends('layouts.admin.master')
@section('title', 'User Allocation List')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="#">Dashboard</a> </li>
    <li class="breadcrumb-item active" aria-current="page">User Allocation List</li>
@endsection
@section('content')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">User Allocation List</h2>
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
         var LIST_URL = "{{ route('api.user.list.allocation') }}";
         var ADD_URL = "{{ route('api.add.user.allocation') }}";
         var UPDATE_URL = "{{ route('api.update.user.allocation') }}";
         var Market = {!! $market !!};
         var User = {!! $user !!};
         console.log(User);
    </script>   
    <script src="{{ asset('page_assets/users/search_allocation.js') }}?v={{ time() }}" type="module"></script>
    <script src="{{ asset('page_assets/users/allocation_list.js') }}?v={{ time() }}" type="module"></script>
@endsection
