@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.leftbar')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">

                <!--begin::Row-->
                <div class="row g-5 g-xl-10 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::List widget 12-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Visits by Source</span>
                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">29.4k visitors</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button
                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <i class="ki-outline ki-dots-square fs-1 text-gray-400 me-n1"></i>
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
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
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex align-items-end">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-outline ki-rocket fs-3 text-gray-600"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Container-->
                                        <div
                                            class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Direct
                                                    Source</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span
                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                    link clicks</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">1,067</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <!--begin::label-->
                                                <span class="badge badge-light-success fs-base">
                                                    <i
                                                        class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.6%</span>
                                                <!--end::label-->
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-outline ki-tiktok fs-3 text-gray-600"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Container-->
                                        <div
                                            class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Social
                                                    Networks</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">All
                                                    Social Channels</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">24,588</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <!--begin::label-->
                                                <span class="badge badge-light-success fs-base">
                                                    <i
                                                        class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>4.1%</span>
                                                <!--end::label-->
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-outline ki-sms fs-3 text-gray-600"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Container-->
                                        <div
                                            class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Email
                                                    Newsletter</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span
                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Mailchimp
                                                    Campaigns</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <!--begin::label-->
                                                <span class="badge badge-light-success fs-base">
                                                    <i
                                                        class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>0.2%</span>
                                                <!--end::label-->
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-outline ki-icon fs-3 text-gray-600"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Container-->
                                        <div
                                            class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Referrals</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span
                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Impact
                                                    Radius visits</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">6,578</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <!--begin::label-->
                                                <span class="badge badge-light-danger fs-base">
                                                    <i
                                                        class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.4%</span>
                                                <!--end::label-->
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-outline ki-abstract-25 fs-3 text-gray-600"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Container-->
                                        <div
                                            class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Other</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span
                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Many
                                                    Sources</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">79,458</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <!--begin::label-->
                                                <span class="badge badge-light-success fs-base">
                                                    <i
                                                        class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>8.3%</span>
                                                <!--end::label-->
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Link-->
                                    <div class="text-center pt-8 d-1">
                                        <a href="../../demo39/dist/apps/ecommerce/sales/details.html"
                                            class="text-primary opacity-75-hover fs-6 fw-bold">View Store Analytics
                                            <i class="ki-outline ki-arrow-right fs-3 text-primary"></i></a>
                                    </div>
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List widget 12-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-8">
                        <!--begin::Chart widget 15-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Author Sales</span>
                                    <span class="text-gray-400 pt-2 fw-semibold fs-6">Statistics by Countries</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button
                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <i class="ki-outline ki-dots-square fs-1 text-gray-400 me-n1"></i>
                                    </button>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-100px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Remove</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Mute</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Chart container-->
                                <div id="kt_charts_widget_15_chart" class="min-h-auto ps-4 pe-6 mb-3 h-350px"></div>
                                <!--end::Chart container-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Chart widget 15-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>

@include('dashboard.layout.rightbar')
@include('dashboard.layout.modal.chat')>
@include('dashboard.layout.modal.view')
@include('dashboard.layout.modal.search')
@include('dashboard.layout.modal.invite')
@include('dashboard.layout.footer')
