@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.leftbar')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar pt-6 pb-2">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
                <!--begin::Toolbar wrapper-->
                <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">Daily Activity</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('dashboard.index') }}" class="text-muted text-hover-primary">Dashboard</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Sheets</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Daily Activity</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    @include('dashboard.daily_activity.modal.insert')
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#insertModal">Add</a>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Daily Activity</span>
                            <span class="text-muted mt-1 fw-semibold fs-7">Daftar</span>
                        </h3>
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-outline ki-category fs-6"></i>
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                <!--begin::Menu item-->

                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table id="kt_datatable_responsive" class="table table-striped border rounded gy-5 gs-7">
                                <thead>
                                    <tr class="fw-semibold fs-12 text-gray-700">
                                        <th class="min-w-150px" rowspan="2">No</th>
                                        <th class="min-w-150px" rowspan="2">Unit</th>
                                        <th class="min-w-150px" rowspan="2">Code</th>
                                        <th class="min-w-150px" rowspan="2">Location</th>
                                        <th class="min-w-150px" colspan="2">Problem</th>
                                        <th class="min-w-150px" rowspan="2">Date Action</th>
                                        <th class="min-w-150px" rowspan="2">Device</th>
                                        <th class="min-w-150px" rowspan="2">Activity</th>
                                        <th class="min-w-150px" rowspan="2">Item</th>
                                        <th class="min-w-150px" rowspan="2">Actual Problem</th>
                                        <th class="min-w-150px" rowspan="2">Action Problem</th>
                                        <th class="min-w-150px" rowspan="2">Activity by contract</th>
                                        <th class="min-w-150px" rowspan="2">Arrived</th>
                                        <th class="min-w-150px" rowspan="2">Delay</th>
                                        <th class="min-w-150px" rowspan="2">Response</th>
                                        <th class="min-w-150px" colspan="2">Check & Repair</th>
                                        <th class="min-w-150px" rowspan="2">Duration</th>
                                        <th class="min-w-150px" rowspan="2">Total (Process Time)</th>
                                        <th class="min-w-150px" rowspan="2">Batas Waktu Pengerjaan</th>
                                        <th class="min-w-150px" rowspan="2">SLA</th>
                                        <th class="min-w-150px" rowspan="2">Status</th>
                                        <th class="min-w-150px" rowspan="2">Action By</th>
                                        <th class="min-w-150px" rowspan="2">No Reg</th>
                                        <th class="min-w-150px" colspan="4">Delay 1</th>
                                        <th class="min-w-150px" colspan="4">Delay 2</th>
                                        <th class="min-w-150px" colspan="4">Delay 3</th>
                                        <th class="min-w-150px" colspan="4">Delay 4</th>
                                        <th class="min-w-150px" colspan="4">Delay 5</th>
                                        <th class="min-w-150px" rowspan="2">Total Delay</th>
                                        <th class="min-w-150px" rowspan="2">Used Parts</th>
                                        <th class="min-w-150px" rowspan="2">Used Consumable</th>
                                        <th class="min-w-150px" rowspan="2">Remarks</th>
                                    </tr>
                                    <tr>
                                        <th class="min-w-150px">Time</th>
                                        <th class="min-w-150px">Report</th>
                                        <th class="min-w-150px">Start</th>
                                        <th class="min-w-150px">Finish</th>
                                        <th class="min-w-150px">Start</th>
                                        <th class="min-w-150px">Stop</th>
                                        <th class="min-w-150px">Duration</th>
                                        <th class="min-w-150px">Reason</th>
                                        <th class="min-w-150px">Start</th>
                                        <th class="min-w-150px">Stop</th>
                                        <th class="min-w-150px">Duration</th>
                                        <th class="min-w-150px">Reason</th>
                                        <th class="min-w-150px">Start</th>
                                        <th class="min-w-150px">Stop</th>
                                        <th class="min-w-150px">Duration</th>
                                        <th class="min-w-150px">Reason</th>
                                        <th class="min-w-150px">Start</th>
                                        <th class="min-w-150px">Stop</th>
                                        <th class="min-w-150px">Duration</th>
                                        <th class="min-w-150px">Reason</th>
                                        <th class="min-w-150px">Start</th>
                                        <th class="min-w-150px">Stop</th>
                                        <th class="min-w-150px">Duration</th>
                                        <th class="min-w-150px">Reason</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($daily as $dl)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $dl->nama_unit }}</td>
                                        <td>{{ $dl->nama_code }}</td>
                                        <td>{{ $dl->nama_location }}</td>

                                        <td>{{ \Carbon\Carbon::parse($dl->time)->format('H:i') }}</td>
                                        <td>{{ $dl->nama_report }}</td>
                                        <td>{{ $dl->date_action }}</td>
                                        <td>{{ $dl->nama_device }}</td>
                                        <td>{{ $dl->nama_activity }}</td>
                                        <td>{{ $dl->nama_item }}</td>
                                        <td>{{ $dl->nama_actual_problem }}</td>
                                        <td>{{ $dl->nama_action_problem }}</td>
                                        <td>{{ $dl->nama_activity_by_contract }}</td>
                                        <td>{{ \Carbon\Carbon::parse($dl->arrived)->format('H:i') }}</td>
                                        <td>Delay</td>
                                        <td>Response</td>
                                        <td>{{ \Carbon\Carbon::parse($dl->start)->format('H:i') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($dl->finish)->format('H:i') }}</td>
                                        <td>Duration</td>
                                        <td>Total</td>
                                        <td>Batas Waktu Pengerjaan</td>
                                        <td>SLA</td>
                                        <td>{{ $dl->nama_status }}</td>
                                        <td>{{ $dl->action_by }}</td>
                                        <td>{{ $dl->nama_no_registrasi }}</td>
                                        <td>{{ \Carbon\Carbon::parse($dl->start_delay1)->format('H:i') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($dl->stop_delay1)->format('H:i') }}</td>
                                        <td>Duration</td>
                                        <td>{{ $dl->reason1 }}</td>
                                        <td>{{ \Carbon\Carbon::parse($dl->start_delay2)->format('H:i') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($dl->stop_delay2)->format('H:i') }}</td>
                                        <td>Duration</td>
                                        <td>{{ $dl->reason2 }}</td>
                                        <td>{{ \Carbon\Carbon::parse($dl->start_delay3)->format('H:i') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($dl->stop_delay3)->format('H:i') }}</td>
                                        <td>Duration</td>
                                        <td>{{ $dl->reason3 }}</td>
                                        <td>{{ \Carbon\Carbon::parse($dl->start_delay4)->format('H:i') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($dl->stop_delay4)->format('H:i') }}</td>
                                        <td>Duration</td>
                                        <td>{{ $dl->reason4 }}</td>
                                        <td>{{ \Carbon\Carbon::parse($dl->start_delay5)->format('H:i') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($dl->stop_delay5)->format('H:i') }}</td>
                                        <td>Duration</td>
                                        <td>{{ $dl->reason5 }}</td>
                                        <td>Total Delay</td>
                                        <td>{{ $dl->used_parts }}</td>
                                        <td>{{ $dl->used_consumable }}</td>
                                        <td>{{ $dl->remarks }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <!--begin::Footer-->


@include('dashboard.layout.rightbar')
@include('dashboard.layout.modal.chat')>
@include('dashboard.layout.modal.view')
@include('dashboard.layout.modal.search')
@include('dashboard.layout.modal.invite')
@include('dashboard.layout.footer')
