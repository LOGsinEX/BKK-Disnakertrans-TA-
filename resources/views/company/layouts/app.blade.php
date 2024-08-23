<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta20
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Perusahaan</title>
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <?php $notifications = [] ?>
    <!-- CSS files -->
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <style>
    @import url('https://rsms.me/inter/inter.css');

    :root {
        --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }

    body {
        font-feature-settings: "cv03", "cv04", "cv11";
    }
    </style>
</head>

<body>
    <script src="{{ asset('dist/js/demo-theme.min.js') }}"></script>
    <div class="page">
        <!-- Sidebar -->
        <aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
            <div class="container-fluid dropdown">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
                    aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark">
                    <a href="{{ route('company.dashboard') }}">
                        <img src="{{ asset('images/Logo-Brand-2.png') }}" alt="Logo Brand 2" class="navbar-brand-image">
                    </a>
                </h1>
                <div class="dropdown d-flex gap-2">
                    <a href="?theme=dark" class="nav-link px-0 hide-theme-dark d-sm-inline d-lg-none" title="Mode gelap"
                        data-bs-toggle="tooltip" data-bs-placement="bottom">
                        <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                        </svg>
                    </a>
                    <a href="?theme=light" class="nav-link px-0 hide-theme-light d-sm-inline d-lg-none"
                        title="Mode cerah" data-bs-toggle="tooltip" data-bs-placement="bottom">
                        <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path
                                d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                        </svg>
                    </a>
                    <a href="#" class="nav-link px-0 d-sm-inline d-lg-none notificationDropdown"
                        data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications"
                        id="notificationDropdown">
                        <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                        </svg>
                        {{-- <span class="badge bg-red notificationBadge" id="notificationBadge"></span> --}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                        <div class="card" style="width: 250px;">
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-indeterminate"></div>
                            </div>
                            <div class="card-header">
                                <h3 class="card-title">Notifikasi</h3>
                            </div>
                            <div class="list-group list-group-flush list-group-hoverable notifications-container"
                                id="notifications-container">
                                <!-- Notifications will be appended here -->
                            </div>
                        </div>
                    </div>
                    {{-- profile --}}
                    <div class="nav-item dropdown nav-link px-0 d-sm-inline d-lg-none">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                            aria-label="Open user menu">
                            <img class="avatar avatar-sm"
                                src="{{ $company->company_logo ? asset('storage/company_logo/'.$company->company_logo) : asset('images/default-logo-company.png') }}">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="{{ route('company.profile') }}" class="dropdown-item">Profile</a>
                            {{-- <a href="#" class="dropdown-item">Feedback</a> --}}
                            {{-- <div class="dropdown-divider"></div> --}}
                            <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                        </div>
                    </div>


                </div>
                <div class="collapse navbar-collapse" id="sidebar-menu">
                    <ul class="navbar-nav pt-lg-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('company.dashboard') }}">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('company.jobs') }}">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 11l3 3l8 -8" />
                                        <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Daftar Lowongan Kerja
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('company.lamaranmasuk') }}">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 11l3 3l8 -8" />
                                        <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Daftar Lamaran Masuk
                                </span>
                            </a>
                        </li>
                        <li class="nav-item d-sm-inline d-md-none">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 5l0 14" />
                                    <path d="M5 12l14 0" />
                                </svg>
                                Tambah Lowongan Kerja
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <!-- Navbar -->
        <header class="navbar navbar-expand-md d-none d-lg-flex d-print-none">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                    aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="d-none d-md-flex">
                        <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Mode gelap"
                            data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                            </svg>
                        </a>
                        <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Mode cerah"
                            data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path
                                    d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                            </svg>
                        </a>
                        <div class="nav-item dropdown d-none d-md-flex me-3">
                            <a href="#" class="nav-link px-0 notificationDropdown" data-bs-toggle="dropdown"
                                tabindex="-1" aria-label="Show notifications" id="notificationDropdown">
                                <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                                </svg>
                                {{-- <span class="badge bg-red notificationBadge" id="notificationBadge"></span> --}}
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                                <div class="card" style="width: 400px;">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-indeterminate"></div>
                                    </div>
                                    <div class="card-header">
                                        <h3 class="card-title">Notifikasi Terbaru</h3>
                                    </div>
                                    <div class="list-group list-group-flush list-group-hoverable notifications-container"
                                        id="notifications-container">
                                        <!-- Notifications will be appended here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                            aria-label="Open user menu">
                            <img class="avatar avatar-sm"
                                src="{{ $company->company_logo ? asset('storage/company_logo/'.$company->company_logo) : '' }}">
                            <div class="d-none d-xl-block ps-2">
                                <div>{{ $company->company_name ?? 'company'}}</div>
                                <div class="mt-1 small text-secondary">perusahaan</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="{{ route('company.profile') }}" class="dropdown-item">Pengaturan Akun</a>
                            {{-- <a href="#" class="dropdown-item">Feedback</a> --}}
                            {{-- <div class="dropdown-divider"></div> --}}
                            <a href="{{ route('logout') }}" class="dropdown-item">Keluar</a>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                </div>
            </div>
        </header>
        <div class="page-wrapper">
            @yield('main')
            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="row text-center align-items-center flex-row-reverse">
                        <div class="col-lg-auto ms-lg-auto">
                            <ul class="list-inline list-inline-dots mb-0">
                            </ul>
                        </div>
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    Copyright &copy; 2024
                                    <a href="." class="link-secondary">Muhamad Chikal Efendi</a>.
                                    All rights reserved.
                                </li>
                                <li class="list-inline-item">
                                    <a href="./changelog.html" class="link-secondary" rel="noopener">

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    @yield('modal')
    <!-- Libs JS -->
    {{-- <script src="{{ asset('dist/libs/jsvectormap/dist/js/jsvectormap.min.js') }}" defer></script>
    <script src="{{ asset('dist/libs/jsvectormap/dist/maps/world.js') }}" defer></script> --}}
    {{-- <script src="{{ asset('dist/libs/jsvectormap/dist/maps/world-merc.js') }}" defer></script> --}}
    <!-- Tabler Core -->
    <script src="{{ asset('dist/js/tabler.min.js') }}" defer></script>
    {{-- <script src="{{ asset('dist/js/demo.min.js') }}" defer></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    function showLoadingIndicator() {
        $('.progress').hide().show(); // Reset dan tampilkan indikator kemajuan
    }

    function hideLoadingIndicator() {
        $('.progress').hide();
    }
    </script>
    @yield('customjs')
    <script>
    function showLoadingIndicator() {
        $('.progress').hide().show(); // Reset dan tampilkan indikator kemajuan
    }

    function hideLoadingIndicator() {
        $('.progress').hide();
    }

    $(document).ready(function() {
        $('.notificationDropdown').on('click', function() {
            showLoadingIndicator();
            $.ajax({
                url: '{{ route("notifications") }}',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('.notifications-container').empty();
                    if (response.length > 0) {
                        $('.notificationBadge').text(response.length);
                        $.each(response, function(index, notification) {
                            var notificationItem = $(
                                '<div class="list-group-item">' +
                                '<div class="row align-items-center">' +
                                '<div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>' +
                                '<div class="col text-truncate">' +
                                '<a href="#" class="text-body d-block notification-link" data-id="' +
                                notification.id + '">' +
                                '<strong>' + notification.job_seeker_name +
                                '</strong> melamar lowongan ' + notification
                                .job_title +
                                '</a>' +
                                '<div class="d-block text-secondary text-truncate mt-n1">' +
                                notification.created_at + '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>'
                            );
                            notificationItem.find('.notification-link').on('click',
                                function(e) {
                                    e.preventDefault();
                                    window.location.href =
                                        '{{ route("company.lamaranmasuk") }}';
                                });
                            $('.notifications-container').append(notificationItem);
                        });
                    } else {
                        $('.notifications-container').append(
                            '<div class="list-group-item">No new notifications</div>');
                    }
                    hideLoadingIndicator();
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });

        $('.notificationDropdown').on('hidden.bs.dropdown', function() {
            $('.list-group-item')
                .hide(); // Ganti '.list-group-item' dengan selektor yang sesuai dengan notifikasi Anda
            $('.notificationBadge').hide();
        });
    });
    </script>

</body>

</html>