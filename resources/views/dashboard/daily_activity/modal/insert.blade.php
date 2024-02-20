<div class="modal fade" id="insertModal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="{{ route('dailyactivity.insert') }}" method="POST">
                @csrf
                <!--begin::Modal header-->
                <div class="modal-header" id="insertModal_header">
                    <!--begin::Modal title-->
                    <h2>Add Daily Activity</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="insertModal_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#insertModal_header" data-kt-scroll-wrappers="#insertModal_scroll" data-kt-scroll-offset="300px">
                        <!--begin::Notice-->
                        <!--begin::Notice-->
                        {{-- <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                            <!--begin::Icon-->
                            <i class="ki-outline ki-information fs-2tx text-warning me-4"></i>
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                                <!--begin::Content-->
                                <div class="fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Warning</h4>
                                    <div class="fs-6 text-gray-700">Updating address may affter to your
                                    <a href="#">Tax Location</a></div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div> --}}
                        <!--end::Notice-->
                        <!--end::Notice-->
                        <!--begin::Input group-->
                        {{-- <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">First name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="first-name" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Last name</label>
                                <!--end::Label-->
                                <!--end::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="last-name" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div> --}}
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="">Unit</span>
                                {{-- <span class="ms-1" data-bs-toggle="tooltip" title="Your payment statements may very based on selected country">
                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span> --}}
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select name="unit_id" data-control="select2" data-dropdown-parent="#insertModal" data-placeholder="Select a Unit..." class="form-select form-select-solid">
                                <option value="">Select a Unit...</option>
                                @foreach ($unit as $units)
                                    <option value="{{ $units->id }}">{{ $units->nama }}</option>
                                @endforeach

                            </select>
                            <!--end::Select-->
                        </div>
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="">Code</span>
                                {{-- <span class="ms-1" data-bs-toggle="tooltip" title="Your payment statements may very based on selected country">
                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span> --}}
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select name="code_id" data-control="select2" data-dropdown-parent="#insertModal" data-placeholder="Select a code..." class="form-select form-select-solid">
                                <option value="">Select a code...</option>
                                @foreach ($code as $codes)
                                    <option value="{{ $codes->id }}">{{ $codes->nama }}</option>
                                @endforeach

                            </select>
                            <!--end::Select-->
                        </div>
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="">Location</span>
                                {{-- <span class="ms-1" data-bs-toggle="tooltip" title="Your payment statements may very based on selected country">
                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span> --}}
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select name="location_id" data-control="select2" data-dropdown-parent="#insertModal" data-placeholder="Select a location..." class="form-select form-select-solid">
                                <option value="">Select a location...</option>
                                @foreach ($location as $locations)
                                    <option value="{{ $locations->id }}">{{ $locations->nama }}</option>
                                @endforeach

                            </select>
                            <!--end::Select-->
                        </div>
                         <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Time</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" id="time" name="time" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Report</label>
                                <!--end::Label-->
                                <!--end::Input-->
                                <select name="report_id" data-control="select2" data-dropdown-parent="#insertModal" data-placeholder="Select a report..." class="form-select form-select-solid">
                                    <option value="">Select a report...</option>
                                    @foreach ($report as $reports)
                                        <option value="{{ $reports->id }}">{{ $reports->nama }}</option>
                                    @endforeach

                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="fs-5 fw-semibold mb-2">Date Action</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-solid" placeholder="" id="date" name="date_action" />
                            <!--end::Input-->
                        </div>
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="">Device</span>
                                {{-- <span class="ms-1" data-bs-toggle="tooltip" title="Your payment statements may very based on selected country">
                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span> --}}
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select name="device_id" data-control="select2" data-dropdown-parent="#insertModal" data-placeholder="Select a device..." class="form-select form-select-solid">
                                <option value="">Select a device...</option>
                                @foreach ($device as $devices)
                                    <option value="{{ $devices->id }}">{{ $devices->nama }}</option>
                                @endforeach

                            </select>
                            <!--end::Select-->
                        </div>
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="">Activity</span>
                                {{-- <span class="ms-1" data-bs-toggle="tooltip" title="Your payment statements may very based on selected country">
                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span> --}}
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select name="activity_id" data-control="select2" data-dropdown-parent="#insertModal" data-placeholder="Select a activity..." class="form-select form-select-solid">
                                <option value="">Select a activity...</option>
                                @foreach ($activity as $activitys)
                                    <option value="{{ $activitys->id }}">{{ $activitys->nama }}</option>
                                @endforeach

                            </select>
                            <!--end::Select-->
                        </div>
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="">Item</span>
                                {{-- <span class="ms-1" data-bs-toggle="tooltip" title="Your payment statements may very based on selected country">
                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span> --}}
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select name="item_id" data-control="select2" data-dropdown-parent="#insertModal" data-placeholder="Select a item..." class="form-select form-select-solid">
                                <option value="">Select a item...</option>
                                @foreach ($item as $items)
                                    <option value="{{ $items->id }}">{{ $items->nama }}</option>
                                @endforeach

                            </select>
                            <!--end::Select-->
                        </div>
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="">Actual Problem</span>
                                {{-- <span class="ms-1" data-bs-toggle="tooltip" title="Your payment statements may very based on selected country">
                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span> --}}
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select name="actual_problem_id" data-control="select2" data-dropdown-parent="#insertModal" data-placeholder="Select a actual_problem..." class="form-select form-select-solid">
                                <option value="">Select a actual problem...</option>
                                @foreach ($actual_problem as $actual_problems)
                                    <option value="{{ $actual_problems->id }}">{{ $actual_problems->nama }}</option>
                                @endforeach

                            </select>
                            <!--end::Select-->
                        </div>
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="">Action Problem</span>
                                {{-- <span class="ms-1" data-bs-toggle="tooltip" title="Your payment statements may very based on selected country">
                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span> --}}
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select name="action_problem_id" data-control="select2" data-dropdown-parent="#insertModal" data-placeholder="Select a action problem..." class="form-select form-select-solid">
                                <option value="">Select a action problem...</option>
                                @foreach ($action_problem as $action_problems)
                                    <option value="{{ $action_problems->id }}">{{ $action_problems->nama }}</option>
                                @endforeach

                            </select>
                            <!--end::Select-->
                        </div>
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="">Activity by Contract</span>
                                {{-- <span class="ms-1" data-bs-toggle="tooltip" title="Your payment statements may very based on selected country">
                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span> --}}
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select name="activity_by_contract_id" data-control="select2" data-dropdown-parent="#insertModal" data-placeholder="Select a activity by contract..." class="form-select form-select-solid">
                                <option value="">Select a Activity by Contract...</option>
                                @foreach ($activity_by_contract as $activity_by_contracts)
                                    <option value="{{ $activity_by_contracts->id }}">{{ $activity_by_contracts->nama }}</option>
                                @endforeach

                            </select>
                            <!--end::Select-->
                        </div>
                        <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-4 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Arrived</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" id="time" name="arrived" />
                                <!--end::Input-->
                            </div>
                        </div>
                        <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-semibold mb-2">Check and Repair</label>
                            </div>
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Start</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" id="time" name="start" />
                                <!--end::Input-->
                            </div>
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Finish</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" id="time" name="finish" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->

                            <!--end::Col-->
                        </div>
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="">Status</span>
                                {{-- <span class="ms-1" data-bs-toggle="tooltip" title="Your payment statements may very based on selected country">
                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span> --}}
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select name="status_id" data-control="select2" data-dropdown-parent="#insertModal" data-placeholder="Select a Status..." class="form-select form-select-solid">
                                <option value="">Select a Status...</option>
                                @foreach ($status as $statuss)
                                    <option value="{{ $statuss->id }}">{{ $statuss->nama }}</option>
                                @endforeach

                            </select>
                            <!--end::Select-->
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="">Action by</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify a target priorty">
                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <input class="form-control form-control-solid" name="action_by" />
                        </div>
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="">No Reg</span>
                                {{-- <span class="ms-1" data-bs-toggle="tooltip" title="Your payment statements may very based on selected country">
                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span> --}}
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select name="noregistrasi_id" data-control="select2" data-dropdown-parent="#insertModal" data-placeholder="Select a noreg..." class="form-select form-select-solid">
                                <option value="">Select a noreg...</option>
                                @foreach ($noregistrasi as $noregistrasis)
                                    <option value="{{ $noregistrasis->id }}">{{ $noregistrasis->nama }}</option>
                                @endforeach

                            </select>
                            <!--end::Select-->
                        </div>
                        <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Delay 1</label>
                                <!--end::Label-->
                                <!--end::Input-->
                            </div>
                            <div class="col-md-2 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Start</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" id="time" name="start_delay1" />
                                <!--end::Input-->
                            </div>
                            <div class="col-md-2 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Stop</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" id="time" name="stop_delay1" />
                                <!--end::Input-->
                            </div>
                            <div class="col-md-8 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Reason</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="reason_delay1_id" data-control="select2" data-dropdown-parent="#insertModal" data-placeholder="Select a reason..." class="form-select form-select-solid">
                                    <option value="">Select a reason...</option>
                                    @foreach ($reason as $reasons)
                                        <option value="{{ $reasons->id }}">{{ $reasons->nama }}</option>
                                    @endforeach

                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->

                            <!--end::Col-->
                        </div>
                        <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Delay 2</label>
                                <!--end::Label-->
                                <!--end::Input-->
                            </div>
                            <div class="col-md-2 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Start</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" id="time" name="start_delay2" />
                                <!--end::Input-->
                            </div>
                            <div class="col-md-2 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Stop</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" id="time" name="stop_delay2" />
                                <!--end::Input-->
                            </div>
                            <div class="col-md-8 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Reason</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="reason_delay2_id" data-control="select2" data-dropdown-parent="#insertModal" data-placeholder="Select a reason..." class="form-select form-select-solid">
                                    <option value="">Select a reason...</option>
                                    @foreach ($reason as $reasons)
                                        <option value="{{ $reasons->id }}">{{ $reasons->nama }}</option>
                                    @endforeach

                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->

                            <!--end::Col-->
                        </div>
                        <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Delay 3</label>
                                <!--end::Label-->
                                <!--end::Input-->
                            </div>
                            <div class="col-md-2 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Start</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" id="time" name="start_delay3" />
                                <!--end::Input-->
                            </div>
                            <div class="col-md-2 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Stop</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" id="time" name="stop_delay3" />
                                <!--end::Input-->
                            </div>
                            <div class="col-md-8 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Reason</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="reason_delay3_id" data-control="select2" data-dropdown-parent="#insertModal" data-placeholder="Select a reason..." class="form-select form-select-solid">
                                    <option value="">Select a reason...</option>
                                    @foreach ($reason as $reasons)
                                        <option value="{{ $reasons->id }}">{{ $reasons->nama }}</option>
                                    @endforeach

                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->

                            <!--end::Col-->
                        </div>
                        <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Delay 4</label>
                                <!--end::Label-->
                                <!--end::Input-->
                            </div>
                            <div class="col-md-2 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Start</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" id="time" name="start_delay4" />
                                <!--end::Input-->
                            </div>
                            <div class="col-md-2 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Stop</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" id="time" name="stop_delay4" />
                                <!--end::Input-->
                            </div>
                            <div class="col-md-8 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Reason</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="reason_delay4_id" data-control="select2" data-dropdown-parent="#insertModal" data-placeholder="Select a reason..." class="form-select form-select-solid">
                                    <option value="">Select a reason...</option>
                                    @foreach ($reason as $reasons)
                                        <option value="{{ $reasons->id }}">{{ $reasons->nama }}</option>
                                    @endforeach

                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->

                            <!--end::Col-->
                        </div>
                        <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Delay 5</label>
                                <!--end::Label-->
                                <!--end::Input-->
                            </div>
                            <div class="col-md-2 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Start</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" id="time" name="start_delay5" />
                                <!--end::Input-->
                            </div>
                            <div class="col-md-2 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Stop</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" id="time" name="stop_delay5" />
                                <!--end::Input-->
                            </div>
                            <div class="col-md-8 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-semibold mb-2">Reason</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="reason_delay5_id" data-control="select2" data-dropdown-parent="#insertModal" data-placeholder="Select a reason..." class="form-select form-select-solid">
                                    <option value="">Select a reason...</option>
                                    @foreach ($reason as $reasons)
                                        <option value="{{ $reasons->id }}">{{ $reasons->nama }}</option>
                                    @endforeach

                                </select>
                                <!--end::Input-->
                            </div>
                            <div class="d-flex flex-column mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-semibold mb-2">Used Parts</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" name="used_parts" />
                                <!--end::Input-->
                            </div>
                            <div class="d-flex flex-column mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-semibold mb-2">Used Consumable</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" name="used_consumable" />
                                <!--end::Input-->
                            </div>
                            <div class="d-flex flex-column mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-semibold mb-2">Remarks</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" name="remarks" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->

                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->

                        <!--end::Input group-->
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="reset" id="insertModal_cancel" class="btn btn-light me-3">Discard</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">Submit</span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>


