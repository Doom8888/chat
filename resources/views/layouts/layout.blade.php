
<!DOCTYPE html>
<html lang="en" >
<!--begin::Head-->
<head>
    <title>Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Template by KeenThemes</title>
    <meta charset="utf-8"/>
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals. Multi-demo, Dark Mode, RTL support. Grab your copy now and get life-time updates for free."/>
    <meta name="keywords" content="keen, bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Template by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/keen"/>
    <meta property="og:site_name" content="Keen by Keenthemes" />
    <link rel="canonical" href="https://preview.keenthemes.com/keen/demo8/apps/projects/users.html"/>
    <link rel="shortcut icon" href="/keen/demo8/assets/media/logos/favicon.ico"/>

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->

    <!--begin::Google tag-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-37564768-1');
    </script>
    <!--end::Google tag-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->

<!--begin::Body-->
<body  id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true"  class="app-default" >
<!--begin::Theme mode setup on page load-->
<script>
    var defaultThemeMode = "light";
    var themeMode;

    if ( document.documentElement ) {
        if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if ( localStorage.getItem("data-bs-theme") !== null ) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }

        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }

        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
</script>
<!--end::Theme mode setup on page load-->

<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid" id="kt_app_page">

        <!--begin::Header-->
        <div id="kt_app_header" class="app-header container d-flex">

            <!--begin::Header container-->
            <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between " id="kt_app_header_container">

                <!--begin::Page title-->
                <div  data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_container'}"  class="page-title d-flex flex-column justify-content-center me-3 mb-6 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center me-3 my-0">
                        Project Users
                    </h1>
                    <!--end::Title-->

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="/keen/demo8/index.html" class="text-muted text-hover-primary">
                                Home
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Apps</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Projects</li>
                        <!--end::Item-->

                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->

                <!--begin::Navbar-->
                <div class="app-navbar flex-stack flex-shrink-0 mt-lg-3 " id="kt_app_aside_navbar">
                    <!--begin:Author-->
                    <div class="d-flex align-items-center me-2">
                        <!--begin::User menu-->
                        <div class="app-navbar-item me-1 me-lg-5" id="kt_header_user_menu_toggle">
                            <!--begin::Menu wrapper-->
                            <div class="cursor-pointer symbol symbol-40px"
                                 data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-attach="parent"
                                 data-kt-menu-placement="bottom-end">
                                <img src="{{ asset('storage/users-avatar/'.Auth::user()->avatar) }}" alt="user"/>
                            </div>

                            <!--begin::User account menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img alt="Logo" src="{{ asset('storage/users-avatar/'.Auth::user()->avatar) }}"/>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Username-->
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold d-flex align-items-center fs-5">
                                                Ja Morant<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                            </div>

                                            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                                morant@kt.com
                                            </a>
                                        </div>
                                        <!--end::Username-->
                                    </div>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="/keen/demo8/account/overview.html" class="menu-link px-5">
                                        My Profile
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="/keen/demo8/apps/projects/list.html" class="menu-link px-5">
                                        <span class="menu-text">My Projects</span>
                                        <span class="menu-badge">
                                            <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                                        </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-title">My Subscription</span>
                                        <span class="menu-arrow"></span>
                                    </a>

                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/keen/demo8/account/referrals.html" class="menu-link px-5">
                                                Referrals
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/keen/demo8/account/billing.html" class="menu-link px-5">
                                                Billing
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/keen/demo8/account/statements.html" class="menu-link px-5">
                                                Payments
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/keen/demo8/account/statements.html" class="menu-link d-flex flex-stack px-5">
                                                Statements

                                                <span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
                                                    <i class="ki-outline ki-information-5 fs-5"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications"/>
                                                    <span class="form-check-label text-muted fs-7">
                                                        Notifications
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="/keen/demo8/account/statements.html" class="menu-link px-5">
                                        My Statements
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-title position-relative">
                                            Mode

                                            <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                                <i class="ki-outline ki-night-day theme-light-show fs-2"></i>
                                                <i class="ki-outline ki-moon theme-dark-show fs-2"></i>
                                            </span>
                                        </span>
                                    </a>

                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-outline ki-night-day fs-2"></i>
                                                </span>
                                                <span class="menu-title">
                                                    Light
                                                </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-outline ki-moon fs-2"></i>            </span>
                                                <span class="menu-title">
                Dark
            </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-outline ki-screen fs-2"></i>            </span>
                                                <span class="menu-title">
                System
            </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->

                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
            <span class="menu-title position-relative">
                Language

                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                    English <img class="w-15px h-15px rounded-1 ms-2" src="/keen/demo8/assets/media/flags/united-states.svg" alt=""/>
                </span>
            </span>
                                    </a>

                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/keen/demo8/account/settings.html" class="menu-link d-flex px-5 active">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="/keen/demo8/assets/media/flags/united-states.svg" alt=""/>
                    </span>
                                                English
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/keen/demo8/account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="/keen/demo8/assets/media/flags/spain.svg" alt=""/>
                    </span>
                                                Spanish
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/keen/demo8/account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="/keen/demo8/assets/media/flags/germany.svg" alt=""/>
                    </span>
                                                German
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/keen/demo8/account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="/keen/demo8/assets/media/flags/japan.svg" alt=""/>
                    </span>
                                                Japanese
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/keen/demo8/account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="/keen/demo8/assets/media/flags/france.svg" alt=""/>
                    </span>
                                                French
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5 my-1">
                                    <a href="/keen/demo8/account/settings.html" class="menu-link px-5">
                                        Account Settings
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="/keen/demo8/authentication/layouts/corporate/sign-in.html" class="menu-link px-5">
                                        Sign Out
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::User account menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::User menu-->

                        <!--begin:Info-->
                        <div class="d-none d-lg-block m-0">
                            <a href="/keen/demo8/pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Ja Morant</a>

                            <span class="text-gray-500 fw-semibold d-block">UI/UX Design Lean</span>
                        </div>
                        <!--end:Info-->
                    </div>
                    <!--end:Author-->

                    <!--begin::Quick links-->
                    <div class="app-navbar-item">
                        <!--begin::Menu wrapper-->
                        <div class="btn btn-icon btn-custom btn-light-info btn-active-light-info w-40px h-40px"
                             data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                             data-kt-menu-attach="parent"
                             data-kt-menu-placement="bottom-end">

                            <i class="ki-outline ki-element-11 fs-1"></i>
                        </div>

                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10" style="background-image:url('/keen/demo8/assets/media/misc/menu-header-bg.jpg')">
                                <!--begin::Title-->
                                <h3 class="text-white fw-semibold mb-3">
                                    Quick Links
                                </h3>
                                <!--end::Title-->

                                <!--begin::Status-->
                                <span class="badge bg-primary text-inverse-primary py-2 px-3">25 pending tasks</span>
                                <!--end::Status-->
                            </div>
                            <!--end::Heading-->

                            <!--begin:Nav-->
                            <div class="row g-0">
                                <!--begin:Item-->
                                <div class="col-6">
                                    <a href="/keen/demo8/apps/projects/budget.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                        <i class="ki-outline ki-dollar fs-3x text-primary mb-2"></i>                <span class="fs-5 fw-semibold text-gray-800 mb-0">Accounting</span>
                                        <span class="fs-7 text-gray-500">eCommerce</span>
                                    </a>
                                </div>
                                <!--end:Item-->

                                <!--begin:Item-->
                                <div class="col-6">
                                    <a href="/keen/demo8/apps/projects/settings.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
                                        <i class="ki-outline ki-sms fs-3x text-primary mb-2"></i>                <span class="fs-5 fw-semibold text-gray-800 mb-0">Administration</span>
                                        <span class="fs-7 text-gray-500">Console</span>
                                    </a>
                                </div>
                                <!--end:Item-->

                                <!--begin:Item-->
                                <div class="col-6">
                                    <a href="/keen/demo8/apps/projects/list.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
                                        <i class="ki-outline ki-abstract-41 fs-3x text-primary mb-2"></i>                <span class="fs-5 fw-semibold text-gray-800 mb-0">Projects</span>
                                        <span class="fs-7 text-gray-500">Pending Tasks</span>
                                    </a>
                                </div>
                                <!--end:Item-->

                                <!--begin:Item-->
                                <div class="col-6">
                                    <a href="/keen/demo8/apps/projects/users.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
                                        <i class="ki-outline ki-briefcase fs-3x text-primary mb-2"></i>                <span class="fs-5 fw-semibold text-gray-800 mb-0">Customers</span>
                                        <span class="fs-7 text-gray-500">Latest cases</span>
                                    </a>
                                </div>
                                <!--end:Item-->
                            </div>
                            <!--end:Nav-->

                            <!--begin::View more-->
                            <div class="py-2 text-center border-top">
                                <a href="/keen/demo8/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">
                                    View All
                                    <i class="ki-outline ki-arrow-right fs-5"></i>        </a>
                            </div>
                            <!--end::View more-->
                        </div>
                        <!--end::Menu-->
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::Quick links-->
                </div>
                <!--end::Navbar-->
            </div>
            <!--end::Header container-->
        </div>
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper container flex-column flex-row-fluid " id="kt_app_wrapper">


            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">

                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content  flex-column-fluid " >

                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container  container-fluid ">

                            <!--begin::Navbar-->
                            <div class="card card-flush mb-9" id="kt_user_profile_panel">
                                        <!--begin::Hero nav-->
                                        <div class="card-header rounded-top bgi-size-cover h-325px" style="background-position: 100% 50%; background-image:url('{{ asset('assets/media/misc/profile-head-bg.jpg') }}')">
                                        </div>
                                        <!--end::Hero nav-->

                                        <!--begin::Body-->
                                        <div class="card-body mt-n19">
                                            <!--begin::Details-->
                                            <div class="m-0">
                                                <!--begin: Pic-->
                                                <div class="d-flex flex-stack align-items-end pb-4 mt-n19">
                                                    <div class="symbol symbol-125px symbol-lg-150px symbol-fixed position-relative mt-n3">
                                                        <img src="{{ asset('storage/users-avatar/'.Auth::user()->avatar) }}" alt="image" class="border border-white border-4" style="border-radius: 20px">
                                                        <div class="position-absolute translate-middle bottom-0 start-100 ms-n1 mb-9 bg-success rounded-circle h-15px w-15px"></div>
                                                    </div>

                                                    <!--begin::Toolbar-->
                                                    <div class="me-0">
                                                        <button class="btn btn-icon btn-sm btn-active-color-primary  justify-content-end pt-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                            <i class="fonticon-settings fs-2"></i>
                                                        </button>

                                                        <!--begin::Menu 3-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                            <!--begin::Heading-->
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                                    Payments
                                                                </div>
                                                            </div>
                                                            <!--end::Heading-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Create Invoice
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link flex-stack px-3">
                                                                    Create Payment

                                                                    <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
                <i class="ki-outline ki-information fs-6"></i>            </span>
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Generate Bill
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                                <a href="#" class="menu-link px-3">
                                                                    <span class="menu-title">Subscription</span>
                                                                    <span class="menu-arrow"></span>
                                                                </a>

                                                                <!--begin::Menu sub-->
                                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">
                                                                            Plans
                                                                        </a>
                                                                    </div>
                                                                    <!--end::Menu item-->

                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">
                                                                            Billing
                                                                        </a>
                                                                    </div>
                                                                    <!--end::Menu item-->

                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">
                                                                            Statements
                                                                        </a>
                                                                    </div>
                                                                    <!--end::Menu item-->

                                                                    <!--begin::Menu separator-->
                                                                    <div class="separator my-2"></div>
                                                                    <!--end::Menu separator-->

                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content px-3">
                                                                            <!--begin::Switch-->
                                                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                <!--begin::Input-->
                                                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                                                <!--end::Input-->

                                                                                <!--end::Label-->
                                                                                <span class="form-check-label text-muted fs-6">
                            Recuring
                        </span>
                                                                                <!--end::Label-->
                                                                            </label>
                                                                            <!--end::Switch-->
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                </div>
                                                                <!--end::Menu sub-->
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3 my-1">
                                                                <a href="#" class="menu-link px-3">
                                                                    Settings
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu 3-->
                                                    </div>
                                                    <!--end::Toolbar-->
                                                </div>
                                                <!--end::Pic-->

                                                <!--begin::Info-->
                                                <div class="d-flex flex-stack flex-wrap align-items-end">
                                                    <!--begin::User-->
                                                    <div class="d-flex flex-column">
                                                        <!--begin::Name-->
                                                        <div class="d-flex align-items-center mb-2">
                                                            <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-1">Bessie Cooper</a>
                                                            <a href="#" class="" data-bs-toggle="tooltip" data-bs-placement="right" title="Account is verified">
                                                                <i class="ki-outline ki-verify fs-1 text-primary"></i>
                                                            </a>
                                                        </div>
                                                        <!--end::Name-->

                                                        <!--begin::Text-->
                                                        <span class="fw-bold text-gray-600 fs-6 mb-2 d-block">
                        Design is like a fart. If you have to force it, it’s probably shit.
                    </span>
                                                        <!--end::Text-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex align-items-center flex-wrap fw-semibold fs-7 pe-2">
                                                            <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary">
                                                                UI/UX Design
                                                            </a>
                                                            <span class="bullet bullet-dot h-5px w-5px bg-gray-500 mx-3"></span>
                                                            <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary">
                                                                Austin, TX
                                                            </a>
                                                            <span class="bullet bullet-dot h-5px w-5px bg-gray-500 mx-3"></span>
                                                            <a href="#" class="text-gray-500 text-hover-primary">
                                                                3,450 Followers
                                                            </a>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->

                                                    <!--begin::Actions-->
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-sm btn-light me-3" id="kt_drawer_chat_toggle">Send Message</a>

                                                        <button class="btn btn-sm btn-primary" id="kt_user_follow_button">
                                                            <i class="ki-outline ki-check fs-2 d-none"></i>
                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Follow</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->                    </button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                    </div>
                            <!--end::Navbar-->

                            <!--begin::Toolbar-->
                            <div class="d-flex flex-wrap flex-stack pb-7">
                                <!--begin::Title-->
                                <div class="d-flex flex-wrap align-items-center my-1">
                                    <h3 class="fw-bold me-5 my-1">Users (38)</h3>

                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <i class="ki-outline ki-magnifier fs-3 position-absolute ms-3"></i>
                                        <input type="text" id="kt_filter_search" class="form-control form-control-sm border-body bg-body w-150px ps-10" placeholder="Search"/>
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--end::Title-->

                                <!--begin::Controls-->
                                <div class="d-flex flex-wrap my-1">
                                    <!--begin::Tab nav-->
                                    <ul class="nav nav-pills me-6 mb-2 mb-sm-0">
                                        <li class="nav-item m-0">
                                            <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active" data-bs-toggle="tab"  href="#kt_project_users_card_pane">
                                                <i class="ki-outline ki-element-plus fs-2"></i>                </a>
                                        </li>

                                        <li class="nav-item m-0">
                                            <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary" data-bs-toggle="tab" href="#kt_project_users_table_pane">
                                                <i class="ki-outline ki-row-horizontal fs-2"></i>                </a>
                                        </li>
                                    </ul>
                                    <!--end::Tab nav-->

                                    <!--begin::Actions-->
                                    <div class="d-flex my-0">
                                        <!--begin::Select-->
                                        <select name="status" data-control="select2" data-hide-search="true" data-placeholder="Filter"  class="form-select form-select-sm border-body bg-body w-150px me-5">
                                            <option value="1">Recently Updated</option>
                                            <option value="2">Last Month</option>
                                            <option value="3">Last Quarter</option>
                                            <option value="4">Last Year</option>
                                        </select>
                                        <!--end::Select-->

                                        <!--begin::Select-->
                                        <select name="status" data-control="select2" data-hide-search="true" data-placeholder="Export"  class="form-select form-select-sm border-body bg-body w-100px">
                                            <option value="1">Excel</option>
                                            <option value="1">PDF</option>
                                            <option value="2">Print</option>
                                        </select>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Controls-->
                            </div>
                            <!--end::Toolbar-->

                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Tab pane-->
                                <div id="kt_project_users_card_pane" class="tab-pane fade show active">
                                    <div class="flex-lg-row-fluid mx-lg-13">
                                        <!--begin::Mobile toolbar-->
                                        <div class="d-flex d-lg-none align-items-center justify-content-end mb-10">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_social_start_sidebar_toggle">
                                                    <i class="ki-outline ki-profile-circle fs-1"></i>        </div>

                                                <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_social_end_sidebar_toggle">
                                                    <i class="ki-outline ki-scroll fs-1"></i>        </div>
                                            </div>
                                        </div>
                                        <!--end::Mobile toolbar-->


                                        <!--begin::Row-->
                                        <div class="row g-6 mb-6 g-xl-9 mb-xl-9">
                                            <!--begin::Followers-->

                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                                <!--begin::Card-->
                                                <div class="card ">
                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                                            <img src="/keen/demo8/assets/media//avatars/300-11.jpg" alt="image">
                                                            <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>                    </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric Watson</a>
                                                        <!--end::Name-->

                                                        <!--begin::Position-->
                                                        <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                                                        <!--end::Position-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-center flex-wrap mb-5">
                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                                                <div class="fw-semibold text-gray-500">Earnings</div>
                                                            </div>
                                                            <!--end::Stats-->

                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                                                <div class="fw-semibold text-gray-500">Sales</div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Follow-->
                                                        <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                                                            <i class="ki-outline ki-check following fs-3"></i>
                                                            <i class="ki-outline ki-plus follow fs-3 d-none"></i>

                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Following</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->                    </button>
                                                        <!--end::Follow-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                </div>
                                                <!--begin::Card-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                                <!--begin::Card-->
                                                <div class="card ">
                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                                            <img src="/keen/demo8/assets/media//avatars/300-6.jpg" alt="image">
                                                        </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Larson</a>
                                                        <!--end::Name-->

                                                        <!--begin::Position-->
                                                        <div class="fw-semibold text-gray-500 mb-6">Art Director at Seal Inc.</div>
                                                        <!--end::Position-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-center flex-wrap mb-5">
                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                                                <div class="fw-semibold text-gray-500">Earnings</div>
                                                            </div>
                                                            <!--end::Stats-->

                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                                                <div class="fw-semibold text-gray-500">Sales</div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Follow-->
                                                        <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                                                            <i class="ki-outline ki-plus follow fs-3"></i>
                                                            <i class="ki-outline ki-check following fs-3 d-none"></i>

                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Follow</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->
                                                        </button>
                                                        <!--end::Follow-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                </div>
                                                <!--begin::Card-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                                <!--begin::Card-->
                                                <div class="card ">
                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                                            <span class="symbol-label fs-2x fw-semibold text-warning bg-light-warning">A</span>
                                                            <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>                    </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Adam Williams</a>
                                                        <!--end::Name-->

                                                        <!--begin::Position-->
                                                        <div class="fw-semibold text-gray-500 mb-6">System Arcitect at Wolto Co.</div>
                                                        <!--end::Position-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-center flex-wrap mb-5">
                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                                                <div class="fw-semibold text-gray-500">Earnings</div>
                                                            </div>
                                                            <!--end::Stats-->

                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                                                <div class="fw-semibold text-gray-500">Sales</div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Follow-->
                                                        <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                                                            <i class="ki-outline ki-check following fs-3"></i>
                                                            <i class="ki-outline ki-plus follow fs-3 d-none"></i>

                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Following</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->                    </button>
                                                        <!--end::Follow-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                </div>
                                                <!--begin::Card-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                                <!--begin::Card-->
                                                <div class="card ">
                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                                            <span class="symbol-label fs-2x fw-semibold text-info bg-light-info">P</span>
                                                            <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>                    </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Paul Marcus</a>
                                                        <!--end::Name-->

                                                        <!--begin::Position-->
                                                        <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                                                        <!--end::Position-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-center flex-wrap mb-5">
                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                                                <div class="fw-semibold text-gray-500">Earnings</div>
                                                            </div>
                                                            <!--end::Stats-->

                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                                                <div class="fw-semibold text-gray-500">Sales</div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Follow-->
                                                        <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                                                            <i class="ki-outline ki-check following fs-3"></i>
                                                            <i class="ki-outline ki-plus follow fs-3 d-none"></i>

                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Following</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->                    </button>
                                                        <!--end::Follow-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                </div>
                                                <!--begin::Card-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                                <!--begin::Card-->
                                                <div class="card ">
                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                                            <span class="symbol-label fs-2x fw-semibold text-success bg-light-success">N</span>
                                                        </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Neil Owen</a>
                                                        <!--end::Name-->

                                                        <!--begin::Position-->
                                                        <div class="fw-semibold text-gray-500 mb-6">Accountant at Numbers Co.</div>
                                                        <!--end::Position-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-center flex-wrap mb-5">
                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                                                <div class="fw-semibold text-gray-500">Earnings</div>
                                                            </div>
                                                            <!--end::Stats-->

                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                                                <div class="fw-semibold text-gray-500">Sales</div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Follow-->
                                                        <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                                                            <i class="ki-outline ki-plus follow fs-3"></i>
                                                            <i class="ki-outline ki-check following fs-3 d-none"></i>

                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Follow</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->
                                                        </button>
                                                        <!--end::Follow-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                </div>
                                                <!--begin::Card-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                                <!--begin::Card-->
                                                <div class="card ">
                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                                            <span class="symbol-label fs-2x fw-semibold text-primary bg-light-primary">S</span>
                                                            <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>                    </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Sean Paul</a>
                                                        <!--end::Name-->

                                                        <!--begin::Position-->
                                                        <div class="fw-semibold text-gray-500 mb-6">Developer at Loop Inc</div>
                                                        <!--end::Position-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-center flex-wrap mb-5">
                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                                                <div class="fw-semibold text-gray-500">Earnings</div>
                                                            </div>
                                                            <!--end::Stats-->

                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                                                <div class="fw-semibold text-gray-500">Sales</div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Follow-->
                                                        <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                                                            <i class="ki-outline ki-plus follow fs-3"></i>
                                                            <i class="ki-outline ki-check following fs-3 d-none"></i>

                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Follow</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->
                                                        </button>
                                                        <!--end::Follow-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                </div>
                                                <!--begin::Card-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                                <!--begin::Card-->
                                                <div class="card ">
                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                                            <img src="/keen/demo8/assets/media//avatars/300-1.jpg" alt="image">
                                                        </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Kitona Johnson</a>
                                                        <!--end::Name-->

                                                        <!--begin::Position-->
                                                        <div class="fw-semibold text-gray-500 mb-6">Web Designer at Nextop Ltd.</div>
                                                        <!--end::Position-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-center flex-wrap mb-5">
                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                                                <div class="fw-semibold text-gray-500">Earnings</div>
                                                            </div>
                                                            <!--end::Stats-->

                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                                                <div class="fw-semibold text-gray-500">Sales</div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Follow-->
                                                        <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                                                            <i class="ki-outline ki-check following fs-3"></i>
                                                            <i class="ki-outline ki-plus follow fs-3 d-none"></i>

                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Following</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->                    </button>
                                                        <!--end::Follow-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                </div>
                                                <!--begin::Card-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                                <!--begin::Card-->
                                                <div class="card ">
                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                                            <img src="/keen/demo8/assets/media//avatars/300-14.jpg" alt="image">
                                                        </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Robert Doe</a>
                                                        <!--end::Name-->

                                                        <!--begin::Position-->
                                                        <div class="fw-semibold text-gray-500 mb-6">Marketing Analytic at Avito Ltd.</div>
                                                        <!--end::Position-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-center flex-wrap mb-5">
                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                                                <div class="fw-semibold text-gray-500">Earnings</div>
                                                            </div>
                                                            <!--end::Stats-->

                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                                                <div class="fw-semibold text-gray-500">Sales</div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Follow-->
                                                        <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                                                            <i class="ki-outline ki-plus follow fs-3"></i>
                                                            <i class="ki-outline ki-check following fs-3 d-none"></i>

                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Follow</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->
                                                        </button>
                                                        <!--end::Follow-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                </div>
                                                <!--begin::Card-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                                <!--begin::Card-->
                                                <div class="card ">
                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                                            <img src="/keen/demo8/assets/media//avatars/300-12.jpg" alt="image">
                                                        </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Soul Jacob</a>
                                                        <!--end::Name-->

                                                        <!--begin::Position-->
                                                        <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                                                        <!--end::Position-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-center flex-wrap mb-5">
                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                                                <div class="fw-semibold text-gray-500">Earnings</div>
                                                            </div>
                                                            <!--end::Stats-->

                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                                                <div class="fw-semibold text-gray-500">Sales</div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Follow-->
                                                        <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                                                            <i class="ki-outline ki-plus follow fs-3"></i>
                                                            <i class="ki-outline ki-check following fs-3 d-none"></i>

                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Follow</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->
                                                        </button>
                                                        <!--end::Follow-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                </div>
                                                <!--begin::Card-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                                <!--begin::Card-->
                                                <div class="card ">
                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                                            <img src="/keen/demo8/assets/media//avatars/300-7.jpg" alt="image">
                                                            <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>                    </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Nina Strong</a>
                                                        <!--end::Name-->

                                                        <!--begin::Position-->
                                                        <div class="fw-semibold text-gray-500 mb-6">CTO at Kilp Ltd.</div>
                                                        <!--end::Position-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-center flex-wrap mb-5">
                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                                                <div class="fw-semibold text-gray-500">Earnings</div>
                                                            </div>
                                                            <!--end::Stats-->

                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                                                <div class="fw-semibold text-gray-500">Sales</div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Follow-->
                                                        <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                                                            <i class="ki-outline ki-check following fs-3"></i>
                                                            <i class="ki-outline ki-plus follow fs-3 d-none"></i>

                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Following</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->                    </button>
                                                        <!--end::Follow-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                </div>
                                                <!--begin::Card-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                                <!--begin::Card-->
                                                <div class="card ">
                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                                            <img src="/keen/demo8/assets/media//avatars/300-11.jpg" alt="image">
                                                            <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>                    </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric Watson</a>
                                                        <!--end::Name-->

                                                        <!--begin::Position-->
                                                        <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                                                        <!--end::Position-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-center flex-wrap mb-5">
                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                                                <div class="fw-semibold text-gray-500">Earnings</div>
                                                            </div>
                                                            <!--end::Stats-->

                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                                                <div class="fw-semibold text-gray-500">Sales</div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Follow-->
                                                        <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                                                            <i class="ki-outline ki-check following fs-3"></i>
                                                            <i class="ki-outline ki-plus follow fs-3 d-none"></i>

                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Following</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->                    </button>
                                                        <!--end::Follow-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                </div>
                                                <!--begin::Card-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                                <!--begin::Card-->
                                                <div class="card ">
                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                                            <img src="/keen/demo8/assets/media//avatars/300-6.jpg" alt="image">
                                                        </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Larson</a>
                                                        <!--end::Name-->

                                                        <!--begin::Position-->
                                                        <div class="fw-semibold text-gray-500 mb-6">Art Director at Seal Inc.</div>
                                                        <!--end::Position-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-center flex-wrap mb-5">
                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                                                <div class="fw-semibold text-gray-500">Earnings</div>
                                                            </div>
                                                            <!--end::Stats-->

                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                                                <div class="fw-semibold text-gray-500">Sales</div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Follow-->
                                                        <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                                                            <i class="ki-outline ki-plus follow fs-3"></i>
                                                            <i class="ki-outline ki-check following fs-3 d-none"></i>

                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Follow</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->
                                                        </button>
                                                        <!--end::Follow-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                </div>
                                                <!--begin::Card-->
                                            </div>
                                            <!--end::Col-->

                                            <!--end::Followers-->
                                        </div>
                                        <!--end::Row-->

                                        <!--begin::Row(for show more)-->
                                        <div class="row g-6 mb-6 g-xl-9 mb-xl-9 d-none" id="kt_followers_show_more_cards">
                                            <!--begin::Followers-->

                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                                <!--begin::Card-->
                                                <div class="card ">
                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                                            <img src="/keen/demo8/assets/media//avatars/300-11.jpg" alt="image">
                                                            <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>                    </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric Watson</a>
                                                        <!--end::Name-->

                                                        <!--begin::Position-->
                                                        <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                                                        <!--end::Position-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-center flex-wrap mb-5">
                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                                                <div class="fw-semibold text-gray-500">Earnings</div>
                                                            </div>
                                                            <!--end::Stats-->

                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                                                <div class="fw-semibold text-gray-500">Sales</div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Follow-->
                                                        <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                                                            <i class="ki-outline ki-check following fs-3"></i>
                                                            <i class="ki-outline ki-plus follow fs-3 d-none"></i>

                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Following</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->                    </button>
                                                        <!--end::Follow-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                </div>
                                                <!--begin::Card-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                                <!--begin::Card-->
                                                <div class="card ">
                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                                            <img src="/keen/demo8/assets/media//avatars/300-6.jpg" alt="image">
                                                        </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Larson</a>
                                                        <!--end::Name-->

                                                        <!--begin::Position-->
                                                        <div class="fw-semibold text-gray-500 mb-6">Art Director at Seal Inc.</div>
                                                        <!--end::Position-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-center flex-wrap mb-5">
                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                                                <div class="fw-semibold text-gray-500">Earnings</div>
                                                            </div>
                                                            <!--end::Stats-->

                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                                                <div class="fw-semibold text-gray-500">Sales</div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Follow-->
                                                        <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                                                            <i class="ki-outline ki-plus follow fs-3"></i>
                                                            <i class="ki-outline ki-check following fs-3 d-none"></i>

                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Follow</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->
                                                        </button>
                                                        <!--end::Follow-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                </div>
                                                <!--begin::Card-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                                <!--begin::Card-->
                                                <div class="card ">
                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                                            <span class="symbol-label fs-2x fw-semibold text-warning bg-light-warning">A</span>
                                                            <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>                    </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Adam Williams</a>
                                                        <!--end::Name-->

                                                        <!--begin::Position-->
                                                        <div class="fw-semibold text-gray-500 mb-6">System Arcitect at Wolto Co.</div>
                                                        <!--end::Position-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-center flex-wrap mb-5">
                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                                                <div class="fw-semibold text-gray-500">Earnings</div>
                                                            </div>
                                                            <!--end::Stats-->

                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                                                <div class="fw-semibold text-gray-500">Sales</div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Follow-->
                                                        <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                                                            <i class="ki-outline ki-check following fs-3"></i>
                                                            <i class="ki-outline ki-plus follow fs-3 d-none"></i>

                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Following</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->                    </button>
                                                        <!--end::Follow-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                </div>
                                                <!--begin::Card-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                                <!--begin::Card-->
                                                <div class="card ">
                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                                            <span class="symbol-label fs-2x fw-semibold text-info bg-light-info">P</span>
                                                            <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>                    </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Paul Marcus</a>
                                                        <!--end::Name-->

                                                        <!--begin::Position-->
                                                        <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                                                        <!--end::Position-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-center flex-wrap mb-5">
                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                                                <div class="fw-semibold text-gray-500">Earnings</div>
                                                            </div>
                                                            <!--end::Stats-->

                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                                                <div class="fw-semibold text-gray-500">Sales</div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Follow-->
                                                        <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                                                            <i class="ki-outline ki-check following fs-3"></i>
                                                            <i class="ki-outline ki-plus follow fs-3 d-none"></i>

                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Following</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->                    </button>
                                                        <!--end::Follow-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                </div>
                                                <!--begin::Card-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                                <!--begin::Card-->
                                                <div class="card ">
                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                                            <span class="symbol-label fs-2x fw-semibold text-success bg-light-success">N</span>
                                                        </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Neil Owen</a>
                                                        <!--end::Name-->

                                                        <!--begin::Position-->
                                                        <div class="fw-semibold text-gray-500 mb-6">Accountant at Numbers Co.</div>
                                                        <!--end::Position-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-center flex-wrap mb-5">
                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                                                <div class="fw-semibold text-gray-500">Earnings</div>
                                                            </div>
                                                            <!--end::Stats-->

                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                                                <div class="fw-semibold text-gray-500">Sales</div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Follow-->
                                                        <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                                                            <i class="ki-outline ki-plus follow fs-3"></i>
                                                            <i class="ki-outline ki-check following fs-3 d-none"></i>

                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Follow</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->
                                                        </button>
                                                        <!--end::Follow-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                </div>
                                                <!--begin::Card-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                                <!--begin::Card-->
                                                <div class="card ">
                                                    <!--begin::Card body-->
                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                                            <span class="symbol-label fs-2x fw-semibold text-primary bg-light-primary">S</span>
                                                            <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>                    </div>
                                                        <!--end::Avatar-->

                                                        <!--begin::Name-->
                                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Sean Paul</a>
                                                        <!--end::Name-->

                                                        <!--begin::Position-->
                                                        <div class="fw-semibold text-gray-500 mb-6">Developer at Loop Inc</div>
                                                        <!--end::Position-->

                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-center flex-wrap mb-5">
                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                                                <div class="fw-semibold text-gray-500">Earnings</div>
                                                            </div>
                                                            <!--end::Stats-->

                                                            <!--begin::Stats-->
                                                            <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                                                <div class="fw-semibold text-gray-500">Sales</div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Info-->

                                                        <!--begin::Follow-->
                                                        <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                                                            <i class="ki-outline ki-plus follow fs-3"></i>
                                                            <i class="ki-outline ki-check following fs-3 d-none"></i>

                                                            <!--begin::Indicator label-->
                                                            <span class="indicator-label">
    Follow</span>
                                                            <!--end::Indicator label-->

                                                            <!--begin::Indicator progress-->
                                                            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                            <!--end::Indicator progress-->
                                                        </button>
                                                        <!--end::Follow-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                </div>
                                                <!--begin::Card-->
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Followers-->
                                        </div>
                                        <!--end::Row-->

                                        <!--begin::Show more-->
                                        <div class="d-flex flex-center">
                                            <button class="btn btn-primary" id="kt_followers_show_more_button">

                                                <!--begin::Indicator label-->
                                                <span class="indicator-label">
    Show more</span>
                                                <!--end::Indicator label-->

                                                <!--begin::Indicator progress-->
                                                <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                                                <!--end::Indicator progress-->    </button>
                                        </div>
                                        <!--end::Show more-->
                                    </div>

                                    <!--begin::Pagination
                                    <div class="d-flex flex-stack flex-wrap pt-10">
                                        <div class="fs-6 fw-semibold text-gray-700">
                                            Showing 1 to 10 of 50 entries
                                        </div>

                                        <ul class="pagination">
                                            <li class="page-item previous">
                                                <a href="#" class="page-link"><i class="previous"></i></a>
                                            </li>

                                            <li class="page-item active">
                                                <a href="#" class="page-link">1</a>
                                            </li>

                                            <li class="page-item">
                                                <a href="#" class="page-link">2</a>
                                            </li>

                                            <li class="page-item">
                                                <a href="#" class="page-link">3</a>
                                            </li>

                                            <li class="page-item">
                                                <a href="#" class="page-link">4</a>
                                            </li>

                                            <li class="page-item">
                                                <a href="#" class="page-link">5</a>
                                            </li>

                                            <li class="page-item">
                                                <a href="#" class="page-link">6</a>
                                            </li>

                                            <li class="page-item next">
                                                <a href="#" class="page-link"><i class="next"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    end::Pagination-->
                                </div>
                                <!--end::Tab pane-->

                                <!--begin::Tab pane-->
                                <div id="kt_project_users_table_pane" class="tab-pane fade">
                                    <!--begin::Card-->
                                    <div class="card card-flush ">
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                                                    <thead class="fs-7 text-gray-500 text-uppercase">
                                                    <tr>
                                                        <th class="min-w-250px">Manager</th>
                                                        <th class="min-w-150px">Date</th>
                                                        <th class="min-w-90px">Amount</th>
                                                        <th class="min-w-90px">Status</th>
                                                        <th class="min-w-50px text-end">Details</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="fs-6">

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-6.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Emma Smith</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">smith@kpmg.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Sep 22, 2024</td>
                                                        <td>$569.00</td>
                                                        <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">
                                    Approved                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    M                                                </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Online-->
                                                                    <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                                    <!--end::Online-->
                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Melody Macy</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">melody@altbox.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Sep 22, 2024</td>
                                                        <td>$527.00</td>
                                                        <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">
                                    Pending                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-1.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Max Smith</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">max@kt.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Jun 24, 2024</td>
                                                        <td>$695.00</td>
                                                        <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">
                                    Rejected                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-5.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Sean Bean</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">sean@dellito.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Apr 15, 2024</td>
                                                        <td>$961.00</td>
                                                        <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">
                                    Rejected                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-25.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Brian Cox</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">brian@exchange.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Nov 10, 2024</td>
                                                        <td>$914.00</td>
                                                        <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">
                                    Approved                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                                            <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                    C                                                </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Online-->
                                                                    <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                                    <!--end::Online-->
                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Mikaela Collins</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">mik@pex.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Apr 15, 2024</td>
                                                        <td>$708.00</td>
                                                        <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">
                                    Rejected                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-9.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Francis Mitcham</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">f.mit@kpmg.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Jun 24, 2024</td>
                                                        <td>$892.00</td>
                                                        <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">
                                    In progress                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    O                                                </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Online-->
                                                                    <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                                    <!--end::Online-->
                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Olivia Wild</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">olivia@corpmail.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Jun 20, 2024</td>
                                                        <td>$939.00</td>
                                                        <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">
                                    In progress                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                                            <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                    N                                                </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Online-->
                                                                    <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                                    <!--end::Online-->
                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Neil Owen</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">owen.neil@gmail.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Jun 20, 2024</td>
                                                        <td>$506.00</td>
                                                        <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">
                                    Pending                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-23.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Dan Wilson</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">dam@consilting.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Mar 10, 2024</td>
                                                        <td>$618.00</td>
                                                        <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">
                                    Pending                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    E                                                </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Online-->
                                                                    <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                                    <!--end::Online-->
                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Emma Bold</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">emma@intenso.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Dec 20, 2024</td>
                                                        <td>$781.00</td>
                                                        <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">
                                    In progress                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-12.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Ana Crown</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">ana.cf@limtel.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Dec 20, 2024</td>
                                                        <td>$635.00</td>
                                                        <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">
                                    In progress                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                                            <span class="symbol-label bg-light-info text-info fw-semibold">
                                                    A                                                </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Online-->
                                                                    <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                                    <!--end::Online-->
                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Robert Doe</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">robert@benko.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Apr 15, 2024</td>
                                                        <td>$403.00</td>
                                                        <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">
                                    Pending                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-13.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">John Miller</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">miller@mapple.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Oct 25, 2024</td>
                                                        <td>$644.00</td>
                                                        <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">
                                    In progress                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                                            <span class="symbol-label bg-light-success text-success fw-semibold">
                                                    L                                                </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Online-->
                                                                    <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                                    <!--end::Online-->
                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Lucy Kunic</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">lucy.m@fentech.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Aug 19, 2024</td>
                                                        <td>$450.00</td>
                                                        <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">
                                    In progress                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-21.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Online-->
                                                                    <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                                    <!--end::Online-->
                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Ethan Wilder</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">ethan@loop.com.au</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Aug 19, 2024</td>
                                                        <td>$803.00</td>
                                                        <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">
                                    Rejected                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-25.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Brian Cox</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">brian@exchange.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Mar 10, 2024</td>
                                                        <td>$933.00</td>
                                                        <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">
                                    Rejected                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                                            <span class="symbol-label bg-light-success text-success fw-semibold">
                                                    L                                                </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Online-->
                                                                    <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                                    <!--end::Online-->
                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Lucy Kunic</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">lucy.m@fentech.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Feb 21, 2024</td>
                                                        <td>$650.00</td>
                                                        <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">
                                    In progress                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-5.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Sean Bean</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">sean@dellito.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Sep 22, 2024</td>
                                                        <td>$786.00</td>
                                                        <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">
                                    Pending                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-1.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Max Smith</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">max@kt.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>May 05, 2024</td>
                                                        <td>$796.00</td>
                                                        <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">
                                    Approved                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                                            <span class="symbol-label bg-light-info text-info fw-semibold">
                                                    A                                                </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Online-->
                                                                    <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                                    <!--end::Online-->
                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Robert Doe</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">robert@benko.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Aug 19, 2024</td>
                                                        <td>$504.00</td>
                                                        <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">
                                    Rejected                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-5.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Sean Bean</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">sean@dellito.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>May 05, 2024</td>
                                                        <td>$544.00</td>
                                                        <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">
                                    In progress                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-25.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Brian Cox</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">brian@exchange.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>May 05, 2024</td>
                                                        <td>$532.00</td>
                                                        <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">
                                    Approved                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    E                                                </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Online-->
                                                                    <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                                    <!--end::Online-->
                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Emma Bold</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">emma@intenso.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Aug 19, 2024</td>
                                                        <td>$696.00</td>
                                                        <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">
                                    In progress                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                                            <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                    N                                                </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Online-->
                                                                    <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                                    <!--end::Online-->
                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Neil Owen</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">owen.neil@gmail.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Mar 10, 2024</td>
                                                        <td>$489.00</td>
                                                        <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">
                                    In progress                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                                            <span class="symbol-label bg-light-info text-info fw-semibold">
                                                    A                                                </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Online-->
                                                                    <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                                    <!--end::Online-->
                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Robert Doe</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">robert@benko.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Jun 24, 2024</td>
                                                        <td>$824.00</td>
                                                        <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">
                                    In progress                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-6.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Emma Smith</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">smith@kpmg.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Feb 21, 2024</td>
                                                        <td>$883.00</td>
                                                        <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">
                                    Pending                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-6.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Emma Smith</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">smith@kpmg.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Feb 21, 2024</td>
                                                        <td>$524.00</td>
                                                        <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">
                                    In progress                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-25.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Brian Cox</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">brian@exchange.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>Dec 20, 2024</td>
                                                        <td>$465.00</td>
                                                        <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">
                                    Approved                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                                            <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                    N                                                </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Online-->
                                                                    <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                                    <!--end::Online-->
                                                                </div>
                                                                <!--end::Wrapper-->

                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">Neil Owen</a>

                                                                    <div class="fw-semibold fs-6 text-gray-500">owen.neil@gmail.com</div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>May 05, 2024</td>
                                                        <td>$483.00</td>
                                                        <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">
                                    Pending                                </span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-light btn-sm">View</a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->    </div>
                                <!--end::Tab pane-->
                            </div>
                            <!--end::Tab Content-->

                            <!--begin::Modals-->

                            <!--begin::Modal - View Users-->
                            <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header pb-0 border-0 justify-content-end">
                                            <!--begin::Close-->
                                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                <i class="ki-outline ki-cross fs-1"></i>                </div>
                                            <!--end::Close-->
                                        </div>
                                        <!--begin::Modal header-->

                                        <!--begin::Modal body-->
                                        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                            <!--begin::Heading-->
                                            <div class="text-center mb-13">
                                                <!--begin::Title-->
                                                <h1 class="mb-3">Browse Users</h1>
                                                <!--end::Title-->

                                                <!--begin::Description-->
                                                <div class="text-muted fw-semibold fs-5">
                                                    If you need more info, please check out our
                                                    <a href="#" class="link-primary fw-bold">Users Directory</a>.
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Users-->
                                            <div class="mb-15">
                                                <!--begin::List-->
                                                <div class="mh-375px scroll-y me-n7 pe-7">
                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-6.jpg"/>
                                                            </div>
                                                            <!--end::Avatar-->

                                                            <!--begin::Details-->
                                                            <div class="ms-6">
                                                                <!--begin::Name-->
                                                                <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                                                    Emma Smith

                                                                    <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Art Director                                            </span>
                                                                </a>
                                                                <!--end::Name-->

                                                                <!--begin::Email-->
                                                                <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                                                <!--end::Email-->
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Stats-->
                                                        <div class="d-flex">
                                                            <!--begin::Sales-->
                                                            <div class="text-end">
                                                                <div class="fs-5 fw-bold text-gray-900">$23,000</div>

                                                                <div class="fs-7 text-muted">Sales</div>
                                                            </div>
                                                            <!--end::Sales-->
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                M                                            </span>
                                                            </div>
                                                            <!--end::Avatar-->

                                                            <!--begin::Details-->
                                                            <div class="ms-6">
                                                                <!--begin::Name-->
                                                                <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                                                    Melody Macy

                                                                    <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Marketing Analytic                                            </span>
                                                                </a>
                                                                <!--end::Name-->

                                                                <!--begin::Email-->
                                                                <div class="fw-semibold text-muted">melody@altbox.com</div>
                                                                <!--end::Email-->
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Stats-->
                                                        <div class="d-flex">
                                                            <!--begin::Sales-->
                                                            <div class="text-end">
                                                                <div class="fs-5 fw-bold text-gray-900">$50,500</div>

                                                                <div class="fs-7 text-muted">Sales</div>
                                                            </div>
                                                            <!--end::Sales-->
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-1.jpg"/>
                                                            </div>
                                                            <!--end::Avatar-->

                                                            <!--begin::Details-->
                                                            <div class="ms-6">
                                                                <!--begin::Name-->
                                                                <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                                                    Max Smith

                                                                    <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Software Enginer                                            </span>
                                                                </a>
                                                                <!--end::Name-->

                                                                <!--begin::Email-->
                                                                <div class="fw-semibold text-muted">max@kt.com</div>
                                                                <!--end::Email-->
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Stats-->
                                                        <div class="d-flex">
                                                            <!--begin::Sales-->
                                                            <div class="text-end">
                                                                <div class="fs-5 fw-bold text-gray-900">$75,900</div>

                                                                <div class="fs-7 text-muted">Sales</div>
                                                            </div>
                                                            <!--end::Sales-->
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-5.jpg"/>
                                                            </div>
                                                            <!--end::Avatar-->

                                                            <!--begin::Details-->
                                                            <div class="ms-6">
                                                                <!--begin::Name-->
                                                                <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                                                    Sean Bean

                                                                    <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Web Developer                                            </span>
                                                                </a>
                                                                <!--end::Name-->

                                                                <!--begin::Email-->
                                                                <div class="fw-semibold text-muted">sean@dellito.com</div>
                                                                <!--end::Email-->
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Stats-->
                                                        <div class="d-flex">
                                                            <!--begin::Sales-->
                                                            <div class="text-end">
                                                                <div class="fs-5 fw-bold text-gray-900">$10,500</div>

                                                                <div class="fs-7 text-muted">Sales</div>
                                                            </div>
                                                            <!--end::Sales-->
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-25.jpg"/>
                                                            </div>
                                                            <!--end::Avatar-->

                                                            <!--begin::Details-->
                                                            <div class="ms-6">
                                                                <!--begin::Name-->
                                                                <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                                                    Brian Cox

                                                                    <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                UI/UX Designer                                            </span>
                                                                </a>
                                                                <!--end::Name-->

                                                                <!--begin::Email-->
                                                                <div class="fw-semibold text-muted">brian@exchange.com</div>
                                                                <!--end::Email-->
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Stats-->
                                                        <div class="d-flex">
                                                            <!--begin::Sales-->
                                                            <div class="text-end">
                                                                <div class="fs-5 fw-bold text-gray-900">$20,000</div>

                                                                <div class="fs-7 text-muted">Sales</div>
                                                            </div>
                                                            <!--end::Sales-->
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                C                                            </span>
                                                            </div>
                                                            <!--end::Avatar-->

                                                            <!--begin::Details-->
                                                            <div class="ms-6">
                                                                <!--begin::Name-->
                                                                <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                                                    Mikaela Collins

                                                                    <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Head Of Marketing                                            </span>
                                                                </a>
                                                                <!--end::Name-->

                                                                <!--begin::Email-->
                                                                <div class="fw-semibold text-muted">mik@pex.com</div>
                                                                <!--end::Email-->
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Stats-->
                                                        <div class="d-flex">
                                                            <!--begin::Sales-->
                                                            <div class="text-end">
                                                                <div class="fs-5 fw-bold text-gray-900">$9,300</div>

                                                                <div class="fs-7 text-muted">Sales</div>
                                                            </div>
                                                            <!--end::Sales-->
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-9.jpg"/>
                                                            </div>
                                                            <!--end::Avatar-->

                                                            <!--begin::Details-->
                                                            <div class="ms-6">
                                                                <!--begin::Name-->
                                                                <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                                                    Francis Mitcham

                                                                    <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Software Arcitect                                            </span>
                                                                </a>
                                                                <!--end::Name-->

                                                                <!--begin::Email-->
                                                                <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                                                <!--end::Email-->
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Stats-->
                                                        <div class="d-flex">
                                                            <!--begin::Sales-->
                                                            <div class="text-end">
                                                                <div class="fs-5 fw-bold text-gray-900">$15,000</div>

                                                                <div class="fs-7 text-muted">Sales</div>
                                                            </div>
                                                            <!--end::Sales-->
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                O                                            </span>
                                                            </div>
                                                            <!--end::Avatar-->

                                                            <!--begin::Details-->
                                                            <div class="ms-6">
                                                                <!--begin::Name-->
                                                                <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                                                    Olivia Wild

                                                                    <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                System Admin                                            </span>
                                                                </a>
                                                                <!--end::Name-->

                                                                <!--begin::Email-->
                                                                <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                                                <!--end::Email-->
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Stats-->
                                                        <div class="d-flex">
                                                            <!--begin::Sales-->
                                                            <div class="text-end">
                                                                <div class="fs-5 fw-bold text-gray-900">$23,000</div>

                                                                <div class="fs-7 text-muted">Sales</div>
                                                            </div>
                                                            <!--end::Sales-->
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                N                                            </span>
                                                            </div>
                                                            <!--end::Avatar-->

                                                            <!--begin::Details-->
                                                            <div class="ms-6">
                                                                <!--begin::Name-->
                                                                <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                                                    Neil Owen

                                                                    <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Account Manager                                            </span>
                                                                </a>
                                                                <!--end::Name-->

                                                                <!--begin::Email-->
                                                                <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                                                <!--end::Email-->
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Stats-->
                                                        <div class="d-flex">
                                                            <!--begin::Sales-->
                                                            <div class="text-end">
                                                                <div class="fs-5 fw-bold text-gray-900">$45,800</div>

                                                                <div class="fs-7 text-muted">Sales</div>
                                                            </div>
                                                            <!--end::Sales-->
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-23.jpg"/>
                                                            </div>
                                                            <!--end::Avatar-->

                                                            <!--begin::Details-->
                                                            <div class="ms-6">
                                                                <!--begin::Name-->
                                                                <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                                                    Dan Wilson

                                                                    <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Web Desinger                                            </span>
                                                                </a>
                                                                <!--end::Name-->

                                                                <!--begin::Email-->
                                                                <div class="fw-semibold text-muted">dam@consilting.com</div>
                                                                <!--end::Email-->
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Stats-->
                                                        <div class="d-flex">
                                                            <!--begin::Sales-->
                                                            <div class="text-end">
                                                                <div class="fs-5 fw-bold text-gray-900">$90,500</div>

                                                                <div class="fs-7 text-muted">Sales</div>
                                                            </div>
                                                            <!--end::Sales-->
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                E                                            </span>
                                                            </div>
                                                            <!--end::Avatar-->

                                                            <!--begin::Details-->
                                                            <div class="ms-6">
                                                                <!--begin::Name-->
                                                                <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                                                    Emma Bold

                                                                    <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Corporate Finance                                            </span>
                                                                </a>
                                                                <!--end::Name-->

                                                                <!--begin::Email-->
                                                                <div class="fw-semibold text-muted">emma@intenso.com</div>
                                                                <!--end::Email-->
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Stats-->
                                                        <div class="d-flex">
                                                            <!--begin::Sales-->
                                                            <div class="text-end">
                                                                <div class="fs-5 fw-bold text-gray-900">$5,000</div>

                                                                <div class="fs-7 text-muted">Sales</div>
                                                            </div>
                                                            <!--end::Sales-->
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-12.jpg"/>
                                                            </div>
                                                            <!--end::Avatar-->

                                                            <!--begin::Details-->
                                                            <div class="ms-6">
                                                                <!--begin::Name-->
                                                                <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                                                    Ana Crown

                                                                    <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Customer Relationship                                            </span>
                                                                </a>
                                                                <!--end::Name-->

                                                                <!--begin::Email-->
                                                                <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                                                <!--end::Email-->
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Stats-->
                                                        <div class="d-flex">
                                                            <!--begin::Sales-->
                                                            <div class="text-end">
                                                                <div class="fs-5 fw-bold text-gray-900">$70,000</div>

                                                                <div class="fs-7 text-muted">Sales</div>
                                                            </div>
                                                            <!--end::Sales-->
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-5 ">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-info text-info fw-semibold">
                                                A                                            </span>
                                                            </div>
                                                            <!--end::Avatar-->

                                                            <!--begin::Details-->
                                                            <div class="ms-6">
                                                                <!--begin::Name-->
                                                                <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                                                    Robert Doe

                                                                    <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Marketing Executive                                            </span>
                                                                </a>
                                                                <!--end::Name-->

                                                                <!--begin::Email-->
                                                                <div class="fw-semibold text-muted">robert@benko.com</div>
                                                                <!--end::Email-->
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Stats-->
                                                        <div class="d-flex">
                                                            <!--begin::Sales-->
                                                            <div class="text-end">
                                                                <div class="fs-5 fw-bold text-gray-900">$45,500</div>

                                                                <div class="fs-7 text-muted">Sales</div>
                                                            </div>
                                                            <!--end::Sales-->
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::List-->
                                            </div>
                                            <!--end::Users-->

                                            <!--begin::Notice-->
                                            <div class="d-flex justify-content-between">
                                                <!--begin::Label-->
                                                <div class="fw-semibold">
                                                    <label class="fs-6">Adding Users by Team Members</label>

                                                    <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                                                </div>
                                                <!--end::Label-->

                                                <!--begin::Switch-->
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""checked="checked"/>

                                                    <span class="form-check-label fw-semibold text-muted">
                            Allowed
                        </span>
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                            <!--end::Notice-->
                                        </div>
                                        <!--end::Modal body-->
                                    </div>
                                    <!--end::Modal content-->
                                </div>
                                <!--end::Modal dialog-->
                            </div>
                            <!--end::Modal - View Users--><!--begin::Modal - Users Search-->
                            <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header pb-0 border-0 justify-content-end">
                                            <!--begin::Close-->
                                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                <i class="ki-outline ki-cross fs-1"></i>                </div>
                                            <!--end::Close-->
                                        </div>
                                        <!--begin::Modal header-->

                                        <!--begin::Modal body-->
                                        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                            <!--begin::Content-->
                                            <div class="text-center mb-13">
                                                <h1 class="mb-3">Search Users</h1>

                                                <div class="text-muted fw-semibold fs-5">
                                                    Invite Collaborators To Your Project
                                                </div>
                                            </div>
                                            <!--end::Content-->

                                            <!--begin::Search-->
                                            <div
                                                id="kt_modal_users_search_handler"

                                                data-kt-search-keypress="true"
                                                data-kt-search-min-length="2"
                                                data-kt-search-enter="enter"
                                                data-kt-search-layout="inline">

                                                <!--begin::Form-->
                                                <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                                                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                                                    <input type="hidden"/>
                                                    <!--end::Hidden input-->

                                                    <!--begin::Icon-->
                                                    <i class="ki-outline ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"></i>                        <!--end::Icon-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input"/>
                                                    <!--end::Input-->

                                                    <!--begin::Spinner-->
                                                    <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                            <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                        </span>
                                                    <!--end::Spinner-->

                                                    <!--begin::Reset-->
                                                    <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                            <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>                        </span>
                                                    <!--end::Reset-->
                                                </form>
                                                <!--end::Form-->

                                                <!--begin::Wrapper-->
                                                <div class="py-5">
                                                    <!--begin::Suggestions-->
                                                    <div data-kt-search-element="suggestions">
                                                        <!--begin::Heading-->
                                                        <h3 class="fw-semibold mb-5">Recently searched:</h3>
                                                        <!--end::Heading-->

                                                        <!--begin::Users-->
                                                        <div class="mh-375px scroll-y me-n7 pe-7">
                                                            <!--begin::User-->
                                                            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                                    <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-6.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->

                                                                <!--begin::Info-->
                                                                <div class="fw-semibold">
                                                                    <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                                                    <span class="badge badge-light">Art Director</span>
                                                                </div>
                                                                <!--end::Info-->
                                                            </a>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle me-5">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                            M                        </span>
                                                                </div>
                                                                <!--end::Avatar-->

                                                                <!--begin::Info-->
                                                                <div class="fw-semibold">
                                                                    <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                                                    <span class="badge badge-light">Marketing Analytic</span>
                                                                </div>
                                                                <!--end::Info-->
                                                            </a>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                                    <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-1.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->

                                                                <!--begin::Info-->
                                                                <div class="fw-semibold">
                                                                    <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                                                    <span class="badge badge-light">Software Enginer</span>
                                                                </div>
                                                                <!--end::Info-->
                                                            </a>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                                    <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-5.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->

                                                                <!--begin::Info-->
                                                                <div class="fw-semibold">
                                                                    <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                                                    <span class="badge badge-light">Web Developer</span>
                                                                </div>
                                                                <!--end::Info-->
                                                            </a>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                                    <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-25.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->

                                                                <!--begin::Info-->
                                                                <div class="fw-semibold">
                                                                    <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                                                    <span class="badge badge-light">UI/UX Designer</span>
                                                                </div>
                                                                <!--end::Info-->
                                                            </a>
                                                            <!--end::User-->
                                                        </div>
                                                        <!--end::Users-->
                                                    </div>
                                                    <!--end::Suggestions-->

                                                    <!--begin::Results(add d-none to below element to hide the users list by default)-->
                                                    <div data-kt-search-element="results" class="d-none">
                                                        <!--begin::Users-->
                                                        <div class="mh-375px scroll-y me-n7 pe-7">
                                                            <!--begin::User-->
                                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0"/>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-6.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Details-->
                                                                    <div class="ms-5">
                                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                                                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Access menu-->
                                                                <div class="ms-2 w-100px">
                                                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                        <option value="1" >Guest</option>
                                                                        <option value="2" selected>Owner</option>
                                                                        <option value="3" >Can Edit</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Access menu-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Separator-->
                                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                            <!--end::Separator-->

                                                            <!--begin::User-->
                                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1"/>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                M                            </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Details-->
                                                                    <div class="ms-5">
                                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>

                                                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Access menu-->
                                                                <div class="ms-2 w-100px">
                                                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                        <option value="1" selected>Guest</option>
                                                                        <option value="2" >Owner</option>
                                                                        <option value="3" >Can Edit</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Access menu-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Separator-->
                                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                            <!--end::Separator-->

                                                            <!--begin::User-->
                                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2"/>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-1.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Details-->
                                                                    <div class="ms-5">
                                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                                                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Access menu-->
                                                                <div class="ms-2 w-100px">
                                                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                        <option value="1" >Guest</option>
                                                                        <option value="2" >Owner</option>
                                                                        <option value="3" selected>Can Edit</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Access menu-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Separator-->
                                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                            <!--end::Separator-->

                                                            <!--begin::User-->
                                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3"/>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-5.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Details-->
                                                                    <div class="ms-5">
                                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                                                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Access menu-->
                                                                <div class="ms-2 w-100px">
                                                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                        <option value="1" >Guest</option>
                                                                        <option value="2" selected>Owner</option>
                                                                        <option value="3" >Can Edit</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Access menu-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Separator-->
                                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                            <!--end::Separator-->

                                                            <!--begin::User-->
                                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4"/>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-25.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Details-->
                                                                    <div class="ms-5">
                                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>

                                                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Access menu-->
                                                                <div class="ms-2 w-100px">
                                                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                        <option value="1" >Guest</option>
                                                                        <option value="2" >Owner</option>
                                                                        <option value="3" selected>Can Edit</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Access menu-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Separator-->
                                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                            <!--end::Separator-->

                                                            <!--begin::User-->
                                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5"/>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                C                            </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Details-->
                                                                    <div class="ms-5">
                                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>

                                                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Access menu-->
                                                                <div class="ms-2 w-100px">
                                                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                        <option value="1" >Guest</option>
                                                                        <option value="2" selected>Owner</option>
                                                                        <option value="3" >Can Edit</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Access menu-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Separator-->
                                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                            <!--end::Separator-->

                                                            <!--begin::User-->
                                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6"/>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-9.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Details-->
                                                                    <div class="ms-5">
                                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>

                                                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Access menu-->
                                                                <div class="ms-2 w-100px">
                                                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                        <option value="1" >Guest</option>
                                                                        <option value="2" >Owner</option>
                                                                        <option value="3" selected>Can Edit</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Access menu-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Separator-->
                                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                            <!--end::Separator-->

                                                            <!--begin::User-->
                                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7"/>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                O                            </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Details-->
                                                                    <div class="ms-5">
                                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>

                                                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Access menu-->
                                                                <div class="ms-2 w-100px">
                                                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                        <option value="1" >Guest</option>
                                                                        <option value="2" selected>Owner</option>
                                                                        <option value="3" >Can Edit</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Access menu-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Separator-->
                                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                            <!--end::Separator-->

                                                            <!--begin::User-->
                                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8"/>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                N                            </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Details-->
                                                                    <div class="ms-5">
                                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                                                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Access menu-->
                                                                <div class="ms-2 w-100px">
                                                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                        <option value="1" selected>Guest</option>
                                                                        <option value="2" >Owner</option>
                                                                        <option value="3" >Can Edit</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Access menu-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Separator-->
                                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                            <!--end::Separator-->

                                                            <!--begin::User-->
                                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9"/>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-23.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Details-->
                                                                    <div class="ms-5">
                                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                                                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Access menu-->
                                                                <div class="ms-2 w-100px">
                                                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                        <option value="1" >Guest</option>
                                                                        <option value="2" >Owner</option>
                                                                        <option value="3" selected>Can Edit</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Access menu-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Separator-->
                                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                            <!--end::Separator-->

                                                            <!--begin::User-->
                                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10"/>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                E                            </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Details-->
                                                                    <div class="ms-5">
                                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                                                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Access menu-->
                                                                <div class="ms-2 w-100px">
                                                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                        <option value="1" >Guest</option>
                                                                        <option value="2" selected>Owner</option>
                                                                        <option value="3" >Can Edit</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Access menu-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Separator-->
                                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                            <!--end::Separator-->

                                                            <!--begin::User-->
                                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11"/>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-12.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Details-->
                                                                    <div class="ms-5">
                                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                                                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Access menu-->
                                                                <div class="ms-2 w-100px">
                                                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                        <option value="1" selected>Guest</option>
                                                                        <option value="2" >Owner</option>
                                                                        <option value="3" >Can Edit</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Access menu-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Separator-->
                                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                            <!--end::Separator-->

                                                            <!--begin::User-->
                                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12"/>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-info text-info fw-semibold">
                                A                            </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Details-->
                                                                    <div class="ms-5">
                                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                                                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Access menu-->
                                                                <div class="ms-2 w-100px">
                                                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                        <option value="1" >Guest</option>
                                                                        <option value="2" >Owner</option>
                                                                        <option value="3" selected>Can Edit</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Access menu-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Separator-->
                                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                            <!--end::Separator-->

                                                            <!--begin::User-->
                                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13"/>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-13.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Details-->
                                                                    <div class="ms-5">
                                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>

                                                                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Access menu-->
                                                                <div class="ms-2 w-100px">
                                                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                        <option value="1" >Guest</option>
                                                                        <option value="2" >Owner</option>
                                                                        <option value="3" selected>Can Edit</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Access menu-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Separator-->
                                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                            <!--end::Separator-->

                                                            <!--begin::User-->
                                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14"/>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-success text-success fw-semibold">
                                L                            </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Details-->
                                                                    <div class="ms-5">
                                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                                                                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Access menu-->
                                                                <div class="ms-2 w-100px">
                                                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                        <option value="1" >Guest</option>
                                                                        <option value="2" selected>Owner</option>
                                                                        <option value="3" >Can Edit</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Access menu-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Separator-->
                                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                            <!--end::Separator-->

                                                            <!--begin::User-->
                                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15"/>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-21.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Details-->
                                                                    <div class="ms-5">
                                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>

                                                                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Access menu-->
                                                                <div class="ms-2 w-100px">
                                                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                        <option value="1" selected>Guest</option>
                                                                        <option value="2" >Owner</option>
                                                                        <option value="3" >Can Edit</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Access menu-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Separator-->
                                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                            <!--end::Separator-->

                                                            <!--begin::User-->
                                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16"/>
                                                                    </label>
                                                                    <!--end::Checkbox-->

                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                N                            </span>
                                                                    </div>
                                                                    <!--end::Avatar-->

                                                                    <!--begin::Details-->
                                                                    <div class="ms-5">
                                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                                                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Access menu-->
                                                                <div class="ms-2 w-100px">
                                                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                        <option value="1" >Guest</option>
                                                                        <option value="2" >Owner</option>
                                                                        <option value="3" selected>Can Edit</option>
                                                                    </select>
                                                                </div>
                                                                <!--end::Access menu-->
                                                            </div>
                                                            <!--end::User-->


                                                        </div>
                                                        <!--end::Users-->

                                                        <!--begin::Actions-->
                                                        <div class="d-flex flex-center mt-15">
                                                            <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">
                                                                Cancel
                                                            </button>

                                                            <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">
                                                                Add Selected Users
                                                            </button>
                                                        </div>
                                                        <!--end::Actions-->
                                                    </div>
                                                    <!--end::Results-->
                                                    <!--begin::Empty-->
                                                    <div data-kt-search-element="empty" class="text-center d-none">
                                                        <!--begin::Message-->
                                                        <div class="fw-semibold py-10">
                                                            <div class="text-gray-600 fs-3 mb-2">No users found</div>

                                                            <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                                                        </div>
                                                        <!--end::Message-->

                                                        <!--begin::Illustration-->
                                                        <div class="text-center px-5">
                                                            <img src="/keen/demo8/assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px"/>
                                                        </div>
                                                        <!--end::Illustration-->
                                                    </div>
                                                    <!--end::Empty-->                    </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                        <!--end::Modal body-->
                                    </div>
                                    <!--end::Modal content-->
                                </div>
                                <!--end::Modal dialog-->
                            </div>
                            <!--end::Modal - Users Search--><!--end::Modals-->        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->

                </div>
                <!--end::Content wrapper-->


                <!--begin::Footer-->
                <div id="kt_app_footer" class="app-footer " >
                    <!--begin::Footer container-->
                    <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
                        <!--begin::Copyright-->
                        <div class="text-gray-900 order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2024&copy;</span>
                            <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                        </div>
                        <!--end::Copyright-->

                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item"><a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a></li>

                            <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a></li>

                            <li class="menu-item"><a href="https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/" target="_blank" class="menu-link px-2">Purchase</a></li>
                        </ul>
                        <!--end::Menu-->        </div>
                    <!--end::Footer container-->
                </div>
                <!--end::Footer-->                            </div>
            <!--end:::Main-->


        </div>
        <!--end::Wrapper-->


    </div>
    <!--end::Page-->
</div>
<!--end::App-->


<!--begin::App layout builder-->
<div
    id="kt_app_layout_builder"
    class="bg-body"

    data-kt-drawer="true"
    data-kt-drawer-name="app-settings"
    data-kt-drawer-activate="true"
    data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'300px', 'lg': '380px'}"
    data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#kt_app_layout_builder_toggle"
    data-kt-drawer-close="#kt_app_layout_builder_close">

    <!--begin::Card-->
    <div class="card border-0 shadow-none rounded-0 w-100">
        <!--begin::Card header-->
        <div
            class="card-header bgi-position-y-bottom bgi-position-x-end bgi-size-cover bgi-no-repeat rounded-0 border-0 py-4"
            id="kt_app_layout_builder_header"
            style="background-image:url('/keen/demo8/assets/media/misc/layout/customizer-header-bg.jpg')">

            <!--begin::Card title-->
            <h3 class="card-title fs-3 fw-bold text-white flex-column m-0">
                Keen Builder

                <small class="text-white opacity-50 fs-7 fw-semibold pt-1">
                    Get your product deeply customized
                </small>
            </h3>
            <!--end::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <button
                    type="button"
                    class="btn btn-sm btn-icon btn-color-white p-0 w-20px h-20px rounded-1"
                    id="kt_app_layout_builder_close"
                >
                    <i class="ki-outline ki-cross-square fs-2"></i>        </button>
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body position-relative" id="kt_app_layout_builder_body">
            <!--begin::Content-->
            <div id="kt_app_settings_content"
                 class="position-relative scroll-y me-n5 pe-5"

                 data-kt-scroll="true"
                 data-kt-scroll-height="auto"
                 data-kt-scroll-wrappers="#kt_app_layout_builder_body"
                 data-kt-scroll-dependencies="#kt_app_layout_builder_header, #kt_app_layout_builder_footer"
                 data-kt-scroll-offset="5px">

                <!--begin::Form-->
                <form class="form" method="POST" id="kt_app_layout_builder_form" action="/keen/demo8/index.php">
                    <input type="hidden" id="kt_app_layout_builder_action" name="layout-builder[action]"/>

                    <!--begin::Card body-->
                    <div class="card-body p-0">

                        <!--begin::Form group-->
                        <div class="form-group">
                            <!--begin::Heading-->
                            <div class="mb-6">
                                <h4 class="fw-bold text-gray-900">Theme Mode</h4>
                                <div class="fw-semibold text-muted fs-7 d-block lh-1">
                                    Enjoy Dark & Light modes.

                                    <a class="fw-semibold" href="https://preview.keenthemes.com/html/keen/docs/getting-started/dark-mode" target="_blank">See docs</a>
                                </div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Options-->
                            <div class="row " data-kt-buttons="true" data-kt-buttons-target=".form-check-image,.form-check-input">
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Option-->
                                    <label class="form-check-image form-check-success">
                                        <!--begin::Image-->
                                        <div class="form-check-wrapper border-gray-200 border-2">
                                            <img src="/keen/demo8/assets/media/preview/demos/demo8/light-ltr.png" class="form-check-rounded mw-100" alt=""/>
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                            <input class="form-check-input" type="radio" value="light" name="theme_mode" id="kt_layout_builder_theme_mode_light"/>

                                            <!--begin::Label-->
                                            <div class="form-check-label text-gray-700">
                                                Light						</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Option-->
                                    <label class="form-check-image form-check-success">
                                        <!--begin::Image-->
                                        <div class="form-check-wrapper border-gray-200 border-2">
                                            <img src="/keen/demo8/assets/media/preview/demos/demo8/dark-ltr.png" class="form-check-rounded mw-100" alt=""/>
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                            <input class="form-check-input" type="radio" value="dark" name="theme_mode" id="kt_layout_builder_theme_mode_dark"/>

                                            <!--begin::Label-->
                                            <div class="form-check-label text-gray-700">
                                                Dark						</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Col-->

                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Form group-->
                        <div class="separator separator-dashed my-5"></div>

                        <!--begin::Form group-->
                        <div class="form-group d-flex flex-stack">
                            <!--begin::Heading-->
                            <div class="d-flex flex-column">
                                <h4 class="fw-bold text-gray-900">RTL Mode</h4>
                                <div class="fs-7 fw-semibold text-muted">
                                    Change Language Direction.

                                    <a class="fw-semibold" href="https://preview.keenthemes.com/html/keen/docs/getting-started/rtl" target="_blank">See docs</a>
                                </div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Option-->
                            <div class="d-flex justify-content-end">
                                <!--begin::Check-->
                                <div class="form-check form-check-custom form-check-solid form-check-success form-switch">
                                    <input type="hidden" value="false" name="layout-builder[layout][app][general][rtl]"/>

                                    <input
                                        class="form-check-input w-45px h-30px"
                                        type="checkbox"
                                        value="true"
                                        name="layout-builder[layout][app][general][rtl]"
                                    />
                                </div>
                                <!--end::Check-->
                            </div>
                            <!--end::Option-->
                        </div>
                        <!--end::Form group-->
                        <div class="separator separator-dashed my-5"></div>


                        <!--begin::Form group-->
                        <div class="form-group ">
                            <!--begin::Heading-->
                            <div class="d-flex flex-column mb-4">
                                <h4 class="fw-bold text-gray-900">Width Mode</h4>
                                <div class="fs-7 fw-semibold text-muted">Page width options</div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Options-->
                            <div class="d-flex gap-7">
                                <!--begin::Check-->
                                <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm" >
                                    <input
                                        class="form-check-input" type="radio"
                                        checked

                                        value="default"
                                        id="kt_layout_builder_page_width_default"
                                        name="layout-builder[layout][app][general][page-width]"
                                    />

                                    <!--begin::Label-->
                                    <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_default">
                                        Default				</label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Check-->
                                <!--begin::Check-->
                                <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm" >
                                    <input
                                        class="form-check-input" type="radio"


                                        value="fluid"
                                        id="kt_layout_builder_page_width_fluid"
                                        name="layout-builder[layout][app][general][page-width]"
                                    />

                                    <!--begin::Label-->
                                    <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_fluid">
                                        Fluid				</label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Check-->
                                <!--begin::Check-->
                                <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm" >
                                    <input
                                        class="form-check-input" type="radio"


                                        value="fixed"
                                        id="kt_layout_builder_page_width_fixed"
                                        name="layout-builder[layout][app][general][page-width]"
                                    />

                                    <!--begin::Label-->
                                    <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_fixed">
                                        Fixed				</label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Check-->
                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Form group-->
                        <div class="separator separator-dashed my-5"></div>


                        <!--begin::Form group-->
                        <div class="form-group ">
                            <!--begin::Heading-->
                            <div class="d-flex flex-column mb-4">
                                <h4 class="fw-bold text-gray-900">KeenIcons Style</h4>

                                <div>
                                    <span class="fs-7 fw-semibold text-muted">Select global UI icons style.</span>
                                    <a class="fw-semibold" href="https://preview.keenthemes.com/html/keen/docs/icons/keenicons" target="_blank">Learn more</a>
                                </div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Options-->
                            <div class="d-flex flex-stack gap-3 " data-kt-buttons="true" data-kt-buttons-target=".form-check-image,.form-check-input">

                                <!--begin::Option-->
                                <label class="form-check-image form-check-success w-100 parent-active parent-hover ">
                                    <!--begin::Image-->
                                    <div class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
                                        <i class="ki-duotone ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"><span class="path1"></span><span class="path2"></span></i>
                                        <span class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Duotone</span>
                                    </div>
                                    <!--end::Image-->

                                    <!--begin::Check-->
                                    <div style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            value="duotone"

                                            name="layout-builder[layout][app][general][icons]"/>
                                    </div>
                                    <!--end::Check-->
                                </label>
                                <!--end::Option-->

                                <!--begin::Option-->
                                <label class="form-check-image form-check-success w-100 parent-active parent-hover active">
                                    <!--begin::Image-->
                                    <div class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
                                        <i class="ki-outline ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>
                                        <span class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Outline</span>
                                    </div>
                                    <!--end::Image-->

                                    <!--begin::Check-->
                                    <div style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            value="outline"
                                            checked
                                            name="layout-builder[layout][app][general][icons]"/>
                                    </div>
                                    <!--end::Check-->
                                </label>
                                <!--end::Option-->

                                <!--begin::Option-->
                                <label class="form-check-image form-check-success w-100 parent-active parent-hover ">
                                    <!--begin::Image-->
                                    <div class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
                                        <i class="ki-solid ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>
                                        <span class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Solid</span>
                                    </div>
                                    <!--end::Image-->

                                    <!--begin::Check-->
                                    <div style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            value="solid"

                                            name="layout-builder[layout][app][general][icons]"/>
                                    </div>
                                    <!--end::Check-->
                                </label>
                                <!--end::Option-->

                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Form group-->
                        <div class="separator separator-dashed my-5"></div>


                        <!--begin::Form group-->
                        <div class="form-group d-flex flex-stack">
                            <!--begin::Heading-->
                            <div class="d-flex flex-column">
                                <h4 class="fw-bold text-gray-900">Aside</h4>
                                <div class="fs-7 fw-semibold text-muted">
                                    Display aside penel.

                                    <a href="/keen/demo8/layout-builder.html" class="fw-semibold">
                                        More layout options.
                                    </a>
                                </div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Option-->
                            <div class="d-flex justify-content-end">
                                <!--begin::Check-->
                                <div class="form-check form-check-solid form-check-custom form-check-success form-switch">
                                    <input type="hidden" value="false" name="layout-builder[layout][app][aside][default][fixed][desktop]"/>
                                    <input class="form-check-input w-45px h-30px" type="checkbox" checked value="true" name="layout-builder[layout][app][aside][default][fixed][desktop]" id="kt_builder_aside"/>

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_builder_aside"></label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Check-->
                            </div>
                            <!--end::Option-->
                        </div>
                        <!--end::Form group-->

                    </div>
                    <!--end::Card body-->				</form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Card body-->

        <!--begin::Card footer-->
        <div class="card-footer border-0 d-flex gap-3 pb-9 pt-0" id="kt_app_layout_builder_footer">
            <button type="button" id="kt_app_layout_builder_preview" class="btn btn-primary flex-grow-1 fw-semibold">

                <!--begin::Indicator label-->
                <span class="indicator-label">
    Preview</span>
                <!--end::Indicator label-->

                <!--begin::Indicator progress-->
                <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                <!--end::Indicator progress-->    </button>

            <button type="button" id="kt_app_layout_builder_reset"  class="btn btn-light flex-grow-1 fw-semibold">

                <!--begin::Indicator label-->
                <span class="indicator-label">
    Reset</span>
                <!--end::Indicator label-->

                <!--begin::Indicator progress-->
                <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
                <!--end::Indicator progress-->    </button>
        </div>
        <!--end::Card footer-->	</div>
    <!--end::Card-->
</div>
<!--end::App layout builder-->

<!--begin::App settings toggle-->
<button
    id="kt_app_layout_builder_toggle"
    class="btn btn-dark app-layout-builder-toggle lh-1 py-4 "
    title="Keen Builder"
    data-bs-custom-class="tooltip-inverse"
    data-bs-toggle="tooltip"
    data-bs-placement="left"
    data-bs-dismiss="click"
    data-bs-trigger="hover"
>
    <i class="ki-outline ki-setting-4 fs-4 me-1"></i> Customize
</button>
<!--end::App settings toggle-->
<!--begin::Drawers-->
<!--begin::Activities drawer-->
<div
    id="kt_activities"
    class="bg-body"

    data-kt-drawer="true"
    data-kt-drawer-name="activities"
    data-kt-drawer-activate="true"
    data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'300px', 'lg': '900px'}"
    data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#kt_activities_toggle"
    data-kt-drawer-close="#kt_activities_close">

    <div class="card shadow-none border-0 rounded-0">
        <!--begin::Header-->
        <div class="card-header" id="kt_activities_header">
            <h3 class="card-title fw-bold text-gray-900">Activity Logs</h3>

            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
                    <i class="ki-outline ki-cross fs-1"></i>				</button>
            </div>
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body position-relative" id="kt_activities_body">
            <!--begin::Content-->
            <div id="kt_activities_scroll"
                 class="position-relative scroll-y me-n5 pe-5"

                 data-kt-scroll="true"
                 data-kt-scroll-height="auto"
                 data-kt-scroll-wrappers="#kt_activities_body"
                 data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
                 data-kt-scroll-offset="5px">

                <!--begin::Timeline items-->
                <div class="timeline timeline-border-dashed">
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon">
                            <i class="ki-outline ki-message-text-2 fs-2 text-gray-500"></i>    </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                    <!--end::Info-->

                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                        <img src="/keen/demo8/assets/media/avatars/300-14.jpg" alt="img"/>
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->

                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">
                                <!--begin::Record-->
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                    <!--begin::Title-->
                                    <a href="/keen/demo8/apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
                                    <!--end::Title-->

                                    <!--begin::Label-->
                                    <div class="min-w-175px pe-2">
                                        <span class="badge badge-light text-muted">Application Design</span>
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Users-->
                                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="/keen/demo8/assets/media/avatars/300-2.jpg" alt="img"/>
                                        </div>
                                        <!--end::User-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="/keen/demo8/assets/media/avatars/300-14.jpg" alt="img"/>
                                        </div>
                                        <!--end::User-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Users-->

                                    <!--begin::Progress-->
                                    <div class="min-w-125px pe-2">
                                        <span class="badge badge-light-primary">In Progress</span>
                                    </div>
                                    <!--end::Progress-->

                                    <!--begin::Action-->
                                    <a href="/keen/demo8/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Record-->

                                <!--begin::Record-->
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                    <!--begin::Title-->
                                    <a href="/keen/demo8/apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
                                    <!--end::Title-->

                                    <!--begin::Label-->
                                    <div class="min-w-175px">
                                        <span class="badge badge-light text-muted">CRM System Development</span>
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Users-->
                                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="/keen/demo8/assets/media/avatars/300-20.jpg" alt="img"/>
                                        </div>
                                        <!--end::User-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Users-->

                                    <!--begin::Progress-->
                                    <div class="min-w-125px">
                                        <span class="badge badge-light-success">Completed</span>
                                    </div>
                                    <!--end::Progress-->

                                    <!--begin::Action-->
                                    <a href="/keen/demo8/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Record-->
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon me-4">
                            <i class="ki-outline ki-flag fs-2 text-gray-500"></i>    </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n2">
                            <!--begin::Timeline heading-->
                            <div class="overflow-auto pe-3">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                    <!--end::Info-->

                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                        <img src="/keen/demo8/assets/media/avatars/300-1.jpg" alt="img"/>
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon">
                            <i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>    </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="mb-5 pe-3">
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                    <!--end::Info-->

                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                        <img src="/keen/demo8/assets/media/avatars/300-23.jpg" alt="img"/>
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->

                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                        <!--begin::Icon-->
                                        <img alt="" class="w-30px me-3" src="/keen/demo8/assets/media/svg/files/pdf.svg"/>
                                        <!--end::Icon-->

                                        <!--begin::Info-->
                                        <div class="ms-1 fw-semibold">
                                            <!--begin::Desc-->
                                            <a href="/keen/demo8/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                            <!--end::Desc-->

                                            <!--begin::Number-->
                                            <div class="text-gray-500">1.9mb</div>
                                            <!--end::Number-->
                                        </div>
                                        <!--begin::Info-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                        <!--begin::Icon-->
                                        <img alt="/keen/demo8/apps/projects/project.html" class="w-30px me-3" src="/keen/demo8/assets/media/svg/files/doc.svg"/>
                                        <!--end::Icon-->

                                        <!--begin::Info-->
                                        <div class="ms-1 fw-semibold">
                                            <!--begin::Desc-->
                                            <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                            <!--end::Desc-->

                                            <!--begin::Number-->
                                            <div class="text-gray-500">18kb</div>
                                            <!--end::Number-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="d-flex flex-aligns-center">
                                        <!--begin::Icon-->
                                        <img alt="/keen/demo8/apps/projects/project.html" class="w-30px me-3" src="/keen/demo8/assets/media/svg/files/css.svg"/>
                                        <!--end::Icon-->

                                        <!--begin::Info-->
                                        <div class="ms-1 fw-semibold">
                                            <!--begin::Desc-->
                                            <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                            <!--end::Desc-->

                                            <!--begin::Number-->
                                            <div class="text-gray-500">20mb</div>
                                            <!--end::Number-->
                                        </div>
                                        <!--end::Icon-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon">
                            <i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>    </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">
                                    Task <a href="#" class="text-primary fw-bold me-1">#45890</a>
                                    merged with <a href="#" class="text-primary fw-bold me-1">#45890</a>  in “Ads Pro Admin Dashboard project:
                                </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                    <!--end::Info-->

                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                        <img src="/keen/demo8/assets/media/avatars/300-14.jpg" alt="img"/>
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon">
                            <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>    </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                    <!--end::Info-->

                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                        <img src="/keen/demo8/assets/media/avatars/300-2.jpg" alt="img"/>
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->

                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                    <!--begin::Item-->
                                    <div class="overlay me-10">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-150px" src="/keen/demo8/assets/media/stock/600x400/img-29.jpg"/>
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="overlay me-10">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-150px" src="/keen/demo8/assets/media/stock/600x400/img-31.jpg"/>
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="overlay">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-150px" src="/keen/demo8/assets/media/stock/600x400/img-40.jpg"/>
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon">
                            <i class="ki-outline ki-sms fs-2 text-gray-500"></i>    </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">
                                    New case <a href="#" class="text-primary fw-bold me-1">#67890</a>
                                    is assigned to you in Multi-platform Database Design project
                                </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon">
                            <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>    </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                    <!--end::Info-->

                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                        <img src="/keen/demo8/assets/media/avatars/300-4.jpg" alt="img"/>
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->

                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">

                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                    <!--begin::Icon-->
                                    <i class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i>        <!--end::Icon-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                        <!--begin::Content-->
                                        <div class="mb-3 mb-md-0 fw-semibold">
                                            <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>

                                            <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
                                        </div>
                                        <!--end::Content-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap"  >
                                            Proceed            </a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->

                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon">
                            <i class="ki-outline ki-basket fs-2 text-gray-500"></i>    </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">
                                    New order <a href="#" class="text-primary fw-bold me-1">#67890</a>
                                    is placed for Workshow Planning & Budget Estimation
                                </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                    <!--end::Info-->

                                    <!--begin::User-->
                                    <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item--> 				</div>
                <!--end::Timeline items-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->

        <!--begin::Footer-->
        <div class="card-footer py-5 text-center" id="kt_activities_footer">
            <a href="/keen/demo8/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">
                View All Activities <i class="ki-outline ki-arrow-right fs-3 text-primary"></i>			</a>
        </div>
        <!--end::Footer-->
    </div>
</div>
<!--end::Activities drawer-->

<!--begin::Chat drawer-->
<div
    id="kt_drawer_chat"

    class="bg-body"
    data-kt-drawer="true"
    data-kt-drawer-name="chat"
    data-kt-drawer-activate="true"
    data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'300px', 'md': '500px'}"
    data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#kt_drawer_chat_toggle"
    data-kt-drawer-close="#kt_drawer_chat_close">

    <!--begin::Messenger-->
    <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>

                    <!--begin::Info-->
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-semibold text-muted">Active</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->
            </div>
            <!--end::Title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <div class="me-0">
                    <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-outline ki-dots-square fs-2"></i>                    </button>

                    <!--begin::Menu 3-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                Contacts
                            </div>
                        </div>
                        <!--end::Heading-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3"  data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">
                                Add Contact
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3"  data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                Invite Contacts

                                <span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
                <i class="ki-outline ki-information fs-7"></i>            </span>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Groups</span>
                                <span class="menu-arrow"></span>
                            </a>

                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                        Create Group
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                        Invite Members
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                        Settings
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                Settings
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                </div>
                <!--end::Menu-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                    <i class="ki-outline ki-cross-square fs-2"></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!--begin::Messages-->
            <div
                class="scroll-y me-n5 pe-5"

                data-kt-element="messages"

                data-kt-scroll="true"
                data-kt-scroll-activate="true"
                data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body"
                data-kt-scroll-offset="0px">



                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10 " >
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/keen/demo8/assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">2 mins</span>
                            </div>
                            <!--end::Details-->

                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                            How likely are you to recommend our company to your friends and family ?            </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->

                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10 " >
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">5 mins</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->

                            <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/keen/demo8/assets/media/avatars/300-1.jpg"/></div><!--end::Avatar-->
                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                            Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.            </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->

                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10 " >
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/keen/demo8/assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">1 Hour</span>
                            </div>
                            <!--end::Details-->

                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                            Ok, Understood!            </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->

                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10 " >
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">2 Hours</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->

                            <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/keen/demo8/assets/media/avatars/300-1.jpg"/></div><!--end::Avatar-->
                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                            You’ll receive notifications for all issues, pull requests!            </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->

                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10 " >
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/keen/demo8/assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">3 Hours</span>
                            </div>
                            <!--end::Details-->

                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                            You can unwatch this repository immediately by clicking here: <a href="https://keenthemes.com">Keenthemes.com</a>            </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->

                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10 " >
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">4 Hours</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->

                            <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/keen/demo8/assets/media/avatars/300-1.jpg"/></div><!--end::Avatar-->
                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                            Most purchased Business courses during this sale!            </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->

                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10 " >
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/keen/demo8/assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">5 Hours</span>
                            </div>
                            <!--end::Details-->

                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                            Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided            </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->

                <!--begin::Message(template for out)-->
                <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">Just now</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->

                            <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/keen/demo8/assets/media/avatars/300-1.jpg"/></div><!--end::Avatar-->
                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(template for out)-->

                <!--begin::Message(template for in)-->
                <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/keen/demo8/assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">Just now</span>
                            </div>
                            <!--end::Details-->

                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                            Right before vacation season we have the next Big Deal for you.            </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(template for in)-->
            </div>
            <!--end::Messages-->
        </div>
        <!--end::Card body-->

        <!--begin::Card footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
            <!--begin::Input-->
            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message">

            </textarea>
            <!--end::Input-->

            <!--begin:Toolbar-->
            <div class="d-flex flex-stack">
                <!--begin::Actions-->
                <div class="d-flex align-items-center me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-outline ki-paper-clip fs-3"></i>                    </button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-outline ki-cloud-add fs-3"></i>                    </button>
                </div>
                <!--end::Actions-->

                <!--begin::Send-->
                <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                <!--end::Send-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer-->

<!--begin::Chat drawer-->
<div
    id="kt_shopping_cart"

    class="bg-body"
    data-kt-drawer="true"
    data-kt-drawer-name="cart"
    data-kt-drawer-activate="true"
    data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'300px', 'md': '500px'}"
    data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle"
    data-kt-drawer-close="#kt_drawer_shopping_cart_close">

    <!--begin::Messenger-->
    <div class="card card-flush w-100 rounded-0">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Title-->
            <h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
            <!--end::Title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
                    <i class="ki-outline ki-cross fs-2"></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body hover-scroll-overlay-y h-400px pt-5">

            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="/keen/demo8/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>

                        <span class="text-gray-500 fw-semibold d-block">The best kitchen gadget in 2022</span>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                        <span class="text-muted mx-2">for</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">5</span>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-outline ki-minus fs-4"></i>                            </a>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-outline ki-plus fs-4"></i>                            </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="/keen/demo8/assets/media/stock/600x400/img-1.jpg" alt=""/>
                </div>
                <!--end::Pic-->
            </div>
            <!--end::Item-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->


            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="/keen/demo8/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>

                        <span class="text-gray-500 fw-semibold d-block">Smart tool for cooking</span>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                        <span class="text-muted mx-2">for</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">4</span>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-outline ki-minus fs-4"></i>                            </a>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-outline ki-plus fs-4"></i>                            </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="/keen/demo8/assets/media/stock/600x400/img-3.jpg" alt=""/>
                </div>
                <!--end::Pic-->
            </div>
            <!--end::Item-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->


            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="/keen/demo8/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>

                        <span class="text-gray-500 fw-semibold d-block">Professional camera for edge</span>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                        <span class="text-muted mx-2">for</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">3</span>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-outline ki-minus fs-4"></i>                            </a>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-outline ki-plus fs-4"></i>                            </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="/keen/demo8/assets/media/stock/600x400/img-8.jpg" alt=""/>
                </div>
                <!--end::Pic-->
            </div>
            <!--end::Item-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->


            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="/keen/demo8/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                        <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                        <span class="text-muted mx-2">for</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-outline ki-minus fs-4"></i>                            </a>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-outline ki-plus fs-4"></i>                            </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="/keen/demo8/assets/media/stock/600x400/img-26.jpg" alt=""/>
                </div>
                <!--end::Pic-->
            </div>
            <!--end::Item-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->


            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="/keen/demo8/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>

                        <span class="text-gray-500 fw-semibold d-block">Perfect animation tool</span>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                        <span class="text-muted mx-2">for</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-outline ki-minus fs-4"></i>                            </a>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-outline ki-plus fs-4"></i>                            </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="/keen/demo8/assets/media/stock/600x400/img-21.jpg" alt=""/>
                </div>
                <!--end::Pic-->
            </div>
            <!--end::Item-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->


            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="/keen/demo8/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>

                        <span class="text-gray-500 fw-semibold d-block">Profile info,Timeline etc</span>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                        <span class="text-muted mx-2">for</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">6</span>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-outline ki-minus fs-4"></i>                            </a>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-outline ki-plus fs-4"></i>                            </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="/keen/demo8/assets/media/stock/600x400/img-34.jpg" alt=""/>
                </div>
                <!--end::Pic-->
            </div>
            <!--end::Item-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->


            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="/keen/demo8/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                        <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                        <span class="text-muted mx-2">for</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">8</span>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-outline ki-minus fs-4"></i>                            </a>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-outline ki-plus fs-4"></i>                            </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="/keen/demo8/assets/media/stock/600x400/img-27.jpg" alt=""/>
                </div>
                <!--end::Pic-->
            </div>
            <!--end::Item-->



        </div>
        <!--end::Card body-->

        <!--begin::Card footer-->
        <div class="card-footer">
            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <span class="fw-bold text-gray-600">Total</span>
                <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <span class="fw-bold text-gray-600">Sub total</span>
                <span class="text-primary fw-bolder fs-5">$ 246.35</span>
            </div>
            <!--end::Item-->

            <!--end::Action-->
            <div class="d-flex justify-content-end mt-9">
                <a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
            </div>
            <!--end::Action-->
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--end::Drawers-->	<!--begin::Engage drawers-->
<!--begin::Demos drawer-->
<div
    id="kt_engage_demos"
    class="bg-body"
    data-kt-drawer="true"
    data-kt-drawer-name="explore"
    data-kt-drawer-activate="true"
    data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'350px', 'lg': '475px'}"
    data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#kt_engage_demos_toggle"
    data-kt-drawer-close="#kt_engage_demos_close">

    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold text-gray-700">
                Demos
            </h3>

            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6" id="kt_engage_demos_close">
                    <i class="ki-outline ki-cross fs-2"></i>				</button>
            </div>
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body" id="kt_engage_demos_body">
            <!--begin::Content-->
            <div
                id="kt_explore_scroll"
                class="scroll-y me-n5 pe-5"
                data-kt-scroll="true"
                data-kt-scroll-height="auto"
                data-kt-scroll-wrappers="#kt_engage_demos_body"
                data-kt-scroll-dependencies="#kt_engage_demos_header"
                data-kt-scroll-offset="5px">

                <!--begin::Wrapper-->
                <div class="mb-0">
                    <!--begin::Heading-->
                    <div class="mb-7">
                        <div class="d-flex flex-stack">
                            <h3 class="mb-0">Keen Licenses</h3>

                            <a href="https://themes.getbootstrap.com/licenses/" class="fw-semibold" target="_blank">
                                License FAQs
                            </a>
                        </div>
                    </div>
                    <!--end::Heading-->

                    <!--begin::License-->
                    <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                        <div class="d-flex flex-stack">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-1">
                                    <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Standard License</div>

                                    <i class="text-gray-500 fas fa-exclamation-circle ms-1 fs-7"
                                       data-bs-toggle="popover"
                                       data-bs-custom-class="popover-inverse"
                                       data-bs-trigger="hover"
                                       data-bs-placement="top"
                                       data-bs-content="Use, by you or one client in a single site which end users are not charged for">
                                    </i>
                                </div>
                                <div class="fs-7 text-muted">For single site used by you or one client</div>
                            </div>

                            <div class="text-nowrap">
                                <span class="text-muted fs-7 fw-semibold me-n1">$</span>
                                <span class="text-gray-900 fs-1 fw-bold">49</span>
                            </div>
                        </div>
                    </div>
                    <!--end::License-->
                    <!--begin::License-->
                    <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                        <div class="d-flex flex-stack">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-1">
                                    <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Multisite License</div>

                                    <i class="text-gray-500 fas fa-exclamation-circle ms-1 fs-7"
                                       data-bs-toggle="popover"
                                       data-bs-custom-class="popover-inverse"
                                       data-bs-trigger="hover"
                                       data-bs-placement="top"
                                       data-bs-content="Use, by you or one client, in a single site which end users can be charged for.">
                                    </i>
                                </div>
                                <div class="fs-7 text-muted">For unlimited sites used by you or one client</div>
                            </div>

                            <div class="text-nowrap">
                                <span class="text-muted fs-7 fw-semibold me-n1">$</span>
                                <span class="text-gray-900 fs-1 fw-bold">129</span>
                            </div>
                        </div>
                    </div>
                    <!--end::License-->
                    <!--begin::License-->
                    <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                        <div class="d-flex flex-stack">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-1">
                                    <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Extended License</div>

                                    <i class="text-gray-500 fas fa-exclamation-circle ms-1 fs-7"
                                       data-bs-toggle="popover"
                                       data-bs-custom-class="popover-inverse"
                                       data-bs-trigger="hover"
                                       data-bs-placement="top"
                                       data-bs-content="Use, by you or one client, in a single site which end users can be charged for.">
                                    </i>
                                </div>
                                <div class="fs-7 text-muted">For single SaaS app with paying users</div>
                            </div>

                            <div class="text-nowrap">
                                <span class="text-muted fs-7 fw-semibold me-n1">$</span>
                                <span class="text-gray-900 fs-1 fw-bold">429</span>
                            </div>
                        </div>
                    </div>
                    <!--end::License-->

                    <!--begin::License-->
                    <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                        <div class="d-flex flex-stack">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-1">
                                    <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Custom License</div>
                                </div>
                                <div class="fs-7 text-muted">Reach us for custom license offers.</div>
                            </div>

                            <div class="text-nowrap">
                                <a href="https://keenthemes.com/contact" class="btn btn-sm btn-success" target="_blank">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <!--end::License-->

                    <!--begin::Purchase-->
                    <a href="https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/" class="btn btn-primary fw-bold mb-15 w-100">
                        Buy Now
                    </a>
                    <!--end::Purchase-->

                    <!--begin::Demos-->
                    <div class="mb-0">
                        <h3 class="fw-bold text-center mb-6">
                            9
                            Keen
                            Demos
                        </h3>

                        <!--begin::Row-->
                        <div class="row g-5">
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="/keen/demo8/assets/media/preview/demos/demo1/light-ltr.png" alt="demo" class="w-100"/>
                                    </div>

                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/keen/demo1/index.html" class="btn btn-sm btn-success shadow">
                                            Demo 1												</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="/keen/demo8/assets/media/preview/demos/demo2/light-ltr.png" alt="demo" class="w-100"/>
                                    </div>

                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/keen/demo2/index.html" class="btn btn-sm btn-success shadow">
                                            Demo 2												</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="/keen/demo8/assets/media/preview/demos/demo3/light-ltr.png" alt="demo" class="w-100"/>
                                    </div>

                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/keen/demo3/index.html" class="btn btn-sm btn-success shadow">
                                            Demo 3												</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="/keen/demo8/assets/media/preview/demos/demo4/light-ltr.png" alt="demo" class="w-100"/>
                                    </div>

                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/keen/demo4/index.html" class="btn btn-sm btn-success shadow">
                                            Demo 4												</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="/keen/demo8/assets/media/preview/demos/demo5/light-ltr.png" alt="demo" class="w-100"/>
                                    </div>

                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/keen/demo5/index.html" class="btn btn-sm btn-success shadow">
                                            Demo 5												</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="/keen/demo8/assets/media/preview/demos/demo6/light-ltr.png" alt="demo" class="w-100"/>
                                    </div>

                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/keen/demo6/index.html" class="btn btn-sm btn-success shadow">
                                            Demo 6												</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="/keen/demo8/assets/media/preview/demos/demo7/light-ltr.png" alt="demo" class="w-100"/>
                                    </div>

                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/keen/demo7/index.html" class="btn btn-sm btn-success shadow">
                                            Demo 7												</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-success rounded">
                                    <div class="overlay-wrapper">
                                        <img src="/keen/demo8/assets/media/preview/demos/demo8/light-ltr.png" alt="demo" class="w-100"/>
                                    </div>

                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/keen/demo8/index.html" class="btn btn-sm btn-success shadow">
                                            Demo 8												</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="/keen/demo8/assets/media/preview/demos/demo9/light-ltr.png" alt="demo" class="w-100"/>
                                    </div>

                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/keen/demo9/index.html" class="btn btn-sm btn-success shadow">
                                            Demo 9												</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Demos-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->
</div>
<!--end::Demos drawer-->



<!--begin::Help drawer-->
<div
    id="kt_help"
    class="bg-body"
    data-kt-drawer="true"
    data-kt-drawer-name="help"
    data-kt-drawer-activate="true"
    data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'350px', 'md': '525px'}"
    data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#kt_help_toggle"
    data-kt-drawer-close="#kt_help_close">

    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_help_header">
            <h5 class="card-title fw-semibold text-gray-600">
                Learn & Get Inspired
            </h5>

            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close">
                    <i class="ki-outline ki-cross fs-2"></i>				</button>
            </div>
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body" id="kt_help_body">
            <!--begin::Content-->
            <div
                id="kt_help_scroll"

                class="hover-scroll-overlay-y"

                data-kt-scroll="true"
                data-kt-scroll-height="auto"
                data-kt-scroll-wrappers="#kt_help_body"
                data-kt-scroll-dependencies="#kt_help_header"
                data-kt-scroll-offset="5px">

                <!--begin::Support-->
                <div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
                    <!--begin::Heading-->
                    <h2 class="fw-bold mb-5">Support at <a href="https://devs.keenthemes.com" class="">devs.keenthemes.com</a></h2>
                    <!--end::Heading-->

                    <!--begin::Description-->
                    <div class="fs-5 fw-semibold mb-5">
                        <span class="text-gray-500">Join our developers community to find answer to your question and help others.</span>
                        <a class="explore-link d-none" href="https://keenthemes.com/licensing">FAQs</a>
                    </div>
                    <!--end::Description-->

                    <!--begin::Link-->
                    <a href="https://devs.keenthemes.com" class="btn btn-lg explore-btn-primary w-100">Get Support</a>
                    <!--end::Link-->
                </div>
                <!--end::Support-->

                <!--begin::Link-->
                <a href="https://preview.keenthemes.com/html/keen/docs"  class="parent-hover d-flex align-items-center mb-7">
                    <!--begin::Icon-->
                    <div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning">
                        <i class="ki-outline ki-abstract-26 text-warning fs-2x fs-lg-3x"></i>                		</div>
                    <!--end::Icon-->

                    <!--begin::Info-->
                    <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column me-2 me-lg-5">
                            <!--begin::Title-->
                            <div class="text-gray-900 parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                Documentation								</div>
                            <!--end::Title-->

                            <!--begin::Description-->
                            <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                From guides and how-tos, to live demos and code examples to get started right away.								</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Wrapper-->

                        <i class="ki-outline ki-arrow-right text-gray-500 fs-2"></i>						</div>
                    <!--end::Info-->
                </a>
                <!--end::Link-->
                <!--begin::Link-->
                <a href="https://preview.keenthemes.com/html/keen/docs/base/utilities"  class="parent-hover d-flex align-items-center mb-7">
                    <!--begin::Icon-->
                    <div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
                        <i class="ki-outline ki-wallet text-primary fs-2x fs-lg-3x"></i>                		</div>
                    <!--end::Icon-->

                    <!--begin::Info-->
                    <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column me-2 me-lg-5">
                            <!--begin::Title-->
                            <div class="text-gray-900 parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                Plugins & Components								</div>
                            <!--end::Title-->

                            <!--begin::Description-->
                            <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                Check out our 300+ in-house components and customized 3rd-party plugins.								</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Wrapper-->

                        <i class="ki-outline ki-arrow-right text-gray-500 fs-2"></i>						</div>
                    <!--end::Info-->
                </a>
                <!--end::Link-->
                <!--begin::Link-->
                <a href="/keen/demo8/layout-builder.html"  class="parent-hover d-flex align-items-center mb-7">
                    <!--begin::Icon-->
                    <div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info">
                        <i class="ki-outline ki-design text-info fs-2x fs-lg-3x"></i>                		</div>
                    <!--end::Icon-->

                    <!--begin::Info-->
                    <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column me-2 me-lg-5">
                            <!--begin::Title-->
                            <div class="text-gray-900 parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                Layout Builder								</div>
                            <!--end::Title-->

                            <!--begin::Description-->
                            <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                Build your layout, preview it and export the HTML for server side integration.								</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Wrapper-->

                        <i class="ki-outline ki-arrow-right text-gray-500 fs-2"></i>						</div>
                    <!--end::Info-->
                </a>
                <!--end::Link-->
                <!--begin::Link-->
                <a href="https://preview.keenthemes.com/html/keen/docs/getting-started/changelog"  class="parent-hover d-flex align-items-center mb-7">
                    <!--begin::Icon-->
                    <div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger">
                        <i class="ki-outline ki-keyboard text-danger fs-2x fs-lg-3x"></i>                		</div>
                    <!--end::Icon-->

                    <!--begin::Info-->
                    <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column me-2 me-lg-5">
                            <!--begin::Title-->
                            <div class="text-gray-900 parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                What's New ?								</div>
                            <!--end::Title-->

                            <!--begin::Description-->
                            <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                Latest features and improvements added with our users feedback in mind.								</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Wrapper-->

                        <i class="ki-outline ki-arrow-right text-gray-500 fs-2"></i>						</div>
                    <!--end::Info-->
                </a>
                <!--end::Link-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->
</div>
<!--end::Help drawer--><!--end::Engage drawers-->

<!--begin::Engage toolbar-->
<div class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2">

    <!--begin::Demos drawer toggle-->
    <button
        id="kt_engage_demos_toggle"
        class="engage-demos-toggle engage-btn btn shadow-sm fs-6 px-4 rounded-top-0"
        title="Check out 9 more demos"
        data-bs-toggle="tooltip"
        data-bs-custom-class="tooltip-inverse"
        data-bs-placement="left"
        data-bs-dismiss="click"
        data-bs-trigger="hover">

    <span id="kt_engage_demos_label">
		Demos
	</span>
    </button>
    <!--end::Demos drawer toggle-->


    <!--begin::Help drawer toggle-->
    <button
        id="kt_help_toggle"
        class="engage-help-toggle btn engage-btn shadow-sm px-5 rounded-top-0"
        title="Learn & Get Inspired"
        data-bs-toggle="tooltip"
        data-bs-custom-class="tooltip-inverse"
        data-bs-placement="left"
        data-bs-dismiss="click"
        data-bs-trigger="hover">
        Help
    </button>
    <!--end::Help drawer toggle-->


</div>
<!--end::Engage toolbar--><!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-outline ki-arrow-up"></i></div>
<!--end::Scrolltop-->

<!--begin::Modals-->
<!--begin::Modal - New Target-->
<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="kt_modal_new_target_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Set First Target</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check <a href="#" class="fw-bold link-primary">Project Guidelines</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Target Title</span>


                            <span class="ms-1"  data-bs-toggle="tooltip" title="Specify a target name for future usage and reference" >
	<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>                        </label>
                        <!--end::Label-->

                        <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title"/>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Assign</label>

                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
                                <option value="">Select user...</option>
                                <option value="1">Karina Clark</option>
                                <option value="2">Robert Doe</option>
                                <option value="3">Niel Owen</option>
                                <option value="4">Olivia Wild</option>
                                <option value="5">Sean Bean</option>
                            </select>
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Due Date</label>

                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>                                <!--end::Icon-->

                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date"/>
                                <!--end::Datepicker-->
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-semibold mb-2">Target Details</label>

                        <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details">
                        </textarea>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Tags</span>


                            <span class="ms-1"  data-bs-toggle="tooltip" title="Specify a target priorty" >
	<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>                        </label>
                        <!--end::Label-->

                        <input class="form-control form-control-solid" value="Important, Urgent" name="tags"/>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-stack mb-8">
                        <!--begin::Label-->
                        <div class="me-5">
                            <label class="fs-6 fw-semibold">Adding Users by Team Members</label>

                            <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                            <span class="form-check-label fw-semibold text-muted">
                                Allowed
                            </span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="fw-semibold me-5">
                                <label class="fs-6">Notifications</label>

                                <div class="fs-7 text-muted">Allow Notifications by Phone or Email</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="d-flex align-items-center">
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked"/>

                                    <span class="form-check-label fw-semibold">
                                        Email
                                    </span>
                                </label>
                                <!--end::Checkbox-->

                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone"/>

                                    <span class="form-check-label fw-semibold">
                                        Phone
                                    </span>
                                </label>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">
                            Cancel
                        </button>

                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->
<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">Invite a Friend</h1>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-5">
                        If you need more info, please check out
                        <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->

                <!--begin::Google Contacts Invite-->
                <div class="btn btn-light-primary fw-bold w-100 mb-8">
                    <img alt="Logo" src="/keen/demo8/assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3"/>
                    Invite Gmail Contacts
                </div>
                <!--end::Google Contacts Invite-->

                <!--begin::Separator-->
                <div class="separator d-flex flex-center mb-8">
                    <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                </div>
                <!--end::Separator-->

                <!--begin::Textarea-->
                <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here">
                </textarea>
                <!--end::Textarea-->

                <!--begin::Users-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
                    <!--end::Heading-->

                    <!--begin::List-->
                    <div class="mh-300px scroll-y me-n7 pe-7">
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-6.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                                    <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" >Guest</option>
                                    <option value="2" selected>Owner</option>
                                    <option value="3" >Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                M                                            </span>
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>

                                    <div class="fw-semibold text-muted">melody@altbox.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected>Guest</option>
                                    <option value="2" >Owner</option>
                                    <option value="3" >Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                                    <div class="fw-semibold text-muted">max@kt.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" >Guest</option>
                                    <option value="2" >Owner</option>
                                    <option value="3" selected>Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-5.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                                    <div class="fw-semibold text-muted">sean@dellito.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" >Guest</option>
                                    <option value="2" selected>Owner</option>
                                    <option value="3" >Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>

                                    <div class="fw-semibold text-muted">brian@exchange.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" >Guest</option>
                                    <option value="2" >Owner</option>
                                    <option value="3" selected>Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                C                                            </span>
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>

                                    <div class="fw-semibold text-muted">mik@pex.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" >Guest</option>
                                    <option value="2" selected>Owner</option>
                                    <option value="3" >Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-9.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>

                                    <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" >Guest</option>
                                    <option value="2" >Owner</option>
                                    <option value="3" selected>Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                O                                            </span>
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>

                                    <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" >Guest</option>
                                    <option value="2" selected>Owner</option>
                                    <option value="3" >Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                N                                            </span>
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                                    <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected>Guest</option>
                                    <option value="2" >Owner</option>
                                    <option value="3" >Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-23.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                                    <div class="fw-semibold text-muted">dam@consilting.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" >Guest</option>
                                    <option value="2" >Owner</option>
                                    <option value="3" selected>Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                E                                            </span>
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                                    <div class="fw-semibold text-muted">emma@intenso.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" >Guest</option>
                                    <option value="2" selected>Owner</option>
                                    <option value="3" >Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-12.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                                    <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected>Guest</option>
                                    <option value="2" >Owner</option>
                                    <option value="3" >Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-info text-info fw-semibold">
                                                A                                            </span>
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                                    <div class="fw-semibold text-muted">robert@benko.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" >Guest</option>
                                    <option value="2" >Owner</option>
                                    <option value="3" selected>Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-13.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>

                                    <div class="fw-semibold text-muted">miller@mapple.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" >Guest</option>
                                    <option value="2" >Owner</option>
                                    <option value="3" selected>Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-success text-success fw-semibold">
                                                L                                            </span>
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                                    <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" >Guest</option>
                                    <option value="2" selected>Owner</option>
                                    <option value="3" >Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-21.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>

                                    <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected>Guest</option>
                                    <option value="2" >Owner</option>
                                    <option value="3" >Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 ">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/keen/demo8/assets/media/avatars/300-23.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                                    <div class="fw-semibold text-muted">dam@consilting.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" >Guest</option>
                                    <option value="2" >Owner</option>
                                    <option value="3" selected>Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->

                <!--begin::Notice-->
                <div class="d-flex flex-stack">
                    <!--begin::Label-->
                    <div class="me-5 fw-semibold">
                        <label class="fs-6">Adding Users by Team Members</label>
                        <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                    </div>
                    <!--end::Label-->

                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked"/>

                        <span class="form-check-label fw-semibold text-muted">
                            Allowed
                        </span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Invite Friend-->            <!--end::Modals-->

<!--begin::Javascript-->
<script>
    var hostUrl = "assets/";
</script>

<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->

<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="/keen/demo8/assets/js/custom/apps/projects/list/list.js"></script>
<script src="{{ asset('assets/js/custom/apps/projects/users/users.js') }}"></script>
<script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/pages/user-profile/general.js') }}"></script>
<script src="/keen/demo8/assets/js/custom/apps/chat/chat.js"></script>
<script src="/keen/demo8/assets/js/custom/utilities/modals/users-search.js"></script>
<script src="/keen/demo8/assets/js/custom/utilities/modals/new-target.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
