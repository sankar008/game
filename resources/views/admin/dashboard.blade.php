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
                            <div class="report-box__indicator bg-success tooltip cursor-pointer">
                                33% <i class="fa fa-chevron-up dash-icons"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-3xl font-medium leading-8 mt-6">1250</div>
                    <div class="text-base text-slate-500 mt-3">Number of PDC/NACH to bo submitted</div>
                    <div class="mt-3"><a class="btn btn-dsh btn-primary shadow-md mr-2" href="#">Details By
                            Clicking</a></div>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="report-box zoom-in">
                <div class="box p-5">
                    <div class="flex">
                        <i class="fa fa-credit-card text-warning fn-30" aria-hidden="true"></i>
                        <div class="ml-auto">
                            <div class="report-box__indicator bg-danger tooltip cursor-pointer">
                                2% <i class="fa fa-chevron-down dash-icons"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-3xl font-medium leading-8 mt-6">325</div>
                    <div class="text-base text-slate-500 mt-3">Number of PDC/NACH not cleared</div>
                    <div class="mt-3"><a class="btn btn-dsh btn-primary shadow-md mr-2" href="#">Details By
                            Clicking</a></div>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="report-box zoom-in">
                <div class="box p-5">
                    <div class="flex">
                        <i class="fa fa-credit-card text-info fn-30" aria-hidden="true"></i>
                        <div class="ml-auto">
                            <div class="report-box__indicator bg-success tooltip cursor-pointer">
                                12% <i class="fa fa-chevron-up dash-icons"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-3xl font-medium leading-8 mt-6">354</div>
                    <div class="text-base text-slate-500 mt-3">Number of Cases defaulting EMI</div>
                    <div class="mt-3"><a class="btn btn-dsh btn-primary shadow-md mr-2" href="#">Details By
                            Clicking</a></div>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="report-box zoom-in">
                <div class="box p-5">
                    <div class="flex">
                        <i class="fa fa-credit-card text-success fn-30" aria-hidden="true"></i>
                        <div class="ml-auto">
                            <div class="report-box__indicator bg-success tooltip cursor-pointer">
                                22% <i class="fa fa-chevron-up dash-icons"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-3xl font-medium leading-8 mt-6">885</div>
                    <div class="text-base text-slate-500 mt-3">Number of Pending Applications</div>
                    <div class="mt-3"><a class="btn btn-dsh btn-primary shadow-md mr-2" href="#">Details By
                            Clicking</a></div>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="report-box zoom-in">
                <div class="box p-5">
                    <div class="flex">
                        <i class="fa fa-credit-card text-primary fn-30" aria-hidden="true"></i>
                        <div class="ml-auto">
                            <div class="report-box__indicator bg-success tooltip cursor-pointer">
                                33% <i class="fa fa-chevron-up dash-icons"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-3xl font-medium leading-8 mt-6">1250</div>
                    <div class="text-base text-slate-500 mt-3">Number of Pending Verifications</div>
                    <div class="mt-3"><a class="btn btn-dsh btn-primary shadow-md mr-2" href="#">Details By
                            Clicking</a></div>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="report-box zoom-in">
                <div class="box p-5">
                    <div class="flex">
                        <i class="fa fa-credit-card text-warning fn-30" aria-hidden="true"></i>
                        <div class="ml-auto">
                            <div class="report-box__indicator bg-danger tooltip cursor-pointer">
                                2% <i class="fa fa-chevron-down dash-icons"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-3xl font-medium leading-8 mt-6">255</div>
                    <div class="text-base text-slate-500 mt-3">Number of Cases Pending Approval</div>
                    <div class="mt-3"><a class="btn btn-dsh btn-primary shadow-md mr-2" href="#">Details By
                            Clicking</a></div>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
            <div class="report-box zoom-in">
                <div class="box p-5">
                    <div class="flex">
                        <i class="fa fa-credit-card text-success fn-30" aria-hidden="true"></i>
                        <div class="ml-auto">
                            <div class="report-box__indicator bg-success tooltip cursor-pointer">
                                12% <i class="fa fa-chevron-up dash-icons"></i>
                            </div>
                        </div>
                    </div>
                    <div class="text-3xl font-medium leading-8 mt-6">2547</div>
                    <div class="text-base text-slate-500 mt-3">Number of Vehicles Repossessed</div>
                    <div class="mt-3"><a class="btn btn-dsh btn-primary shadow-md mr-2" href="#">Details By
                            Clicking</a></div>
                </div>
            </div>
        </div>

        <kishore></kishore>
    </div>

    <div class="intro-y box p-5 mt-12 sm:mt-5">
        <p class="text-base text-slate-500 mt-3 text-center">Total Dues Vis-À-Vis Collection (Monthly)
        </p>
        <div class="flex flex-col md:flex-row md:items-center">
            <div class="flex">
                <div>
                    <div class="text-primary dark:text-slate-300 text-lg xl:text-xl font-medium">₹15,000</div>
                    <div class="mt-0.5 text-slate-500">This Month</div>
                </div>
                <div
                    class="w-px h-12 border border-r border-dashed border-slate-200 dark:border-darkmode-300 mx-4 xl:mx-5">
                </div>
                <div>
                    <div class="text-slate-500 text-lg xl:text-xl font-medium">₹10,000</div>
                    <div class="mt-0.5 text-slate-500">Last Month</div>
                </div>
            </div>
        </div>
        <div class="report-chart">
            <div class="h-[275px]">
                <canvas id="report-line-chart" class="mt-6 -mb-6" width="410" height="275"
                    style="display: block; box-sizing: border-box; height: 275px; width: 410px;"></canvas>
            </div>
        </div>
        <p class="mt-5"><a class="btn btn-dsh btn-primary shadow-md mr-2" href="#">Details By Clicking</a></p>
    </div>

@endsection
