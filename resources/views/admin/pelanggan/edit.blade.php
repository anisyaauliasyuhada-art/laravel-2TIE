<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Primary Meta Tags -->
    <title>Edit Pelanggan - Volt Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Edit Pelanggan - Volt Dashboard">
    <meta name="author" content="Themesberg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ asset('assets-admin/img/favicon/apple-touch-icon.png') }}">

    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets-admin/img/favicon/favicon-32x32.png') }}">

    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets-admin/img/favicon/favicon-16x16.png') }}">

    <link rel="manifest"
        href="{{ asset('assets-admin/img/favicon/site.webmanifest') }}">

    <link rel="mask-icon"
        href="{{ asset('assets-admin/img/favicon/safari-pinned-tab.svg') }}"
        color="#ffffff">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Volt CSS -->
    <link type="text/css"
        href="{{ asset('assets-admin/css/volt.css') }}"
        rel="stylesheet">
</head>

<body>

    <!-- Mobile Navbar -->
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="{{ route('dashboard') }}">
            <img class="navbar-brand-dark"
                src="{{ asset('assets-admin/img/brand/light.svg') }}"
                alt="Volt logo">
        </a>

        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu"
                aria-controls="sidebarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Sidebar -->
    <nav id="sidebarMenu"
        class="sidebar d-lg-block bg-gray-800 text-white collapse"
        data-simplebar>

        <div class="sidebar-inner px-4 pt-3">

            <ul class="nav flex-column pt-3 pt-md-0">

                <!-- Logo -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link d-flex align-items-center">

                        <span class="sidebar-icon">
                            <img
                                src="{{ asset('assets-admin/img/brand/light.svg') }}"
                                height="20"
                                width="20"
                                alt="Volt Logo">
                        </span>

                        <span class="mt-1 ms-1 sidebar-text">
                            Volt Overview
                        </span>
                    </a>
                </li>

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">

                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">

                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>

                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                        </span>

                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>

                <!-- Pelanggan -->
                <li class="nav-item active">
                    <a href="{{ route('pelanggan.index') }}" class="nav-link">

                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">

                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z">
                                </path>
                            </svg>
                        </span>

                        <span class="sidebar-text">Pelanggan</span>
                    </a>
                </li>

                <li role="separator"
                    class="dropdown-divider mt-4 mb-3 border-gray-700">
                </li>

                <!-- Documentation -->
                <li class="nav-item">
                    <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/"
                        target="_blank"
                        class="nav-link d-flex align-items-center">

                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">

                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                        </span>

                        <span class="sidebar-text">
                            Documentation
                            <span class="badge badge-sm bg-secondary ms-1 text-gray-800">
                                v1.4
                            </span>
                        </span>
                    </a>
                </li>

            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="content">

        <!-- Top Navbar -->
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">

            <div class="container-fluid px-0">

                <div class="d-flex justify-content-between w-100"
                    id="navbarSupportedContent">

                    <div class="d-flex align-items-center">
                        <form class="navbar-search form-inline"
                            id="navbar-search-main">

                            <div class="input-group input-group-merge search-bar">

                                <span class="input-group-text" id="topbar-addon">
                                    <svg class="icon icon-xs"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd">
                                        </path>
                                    </svg>
                                </span>

                                <input type="text"
                                    class="form-control"
                                    id="topbarInputIconLeft"
                                    placeholder="Search"
                                    aria-label="Search"
                                    aria-describedby="topbar-addon">
                            </div>
                        </form>
                    </div>

                    <!-- Navbar Links -->
                    <ul class="navbar-nav align-items-center">

                        <!-- Notifications -->
                        <li class="nav-item dropdown">

                            <a class="nav-link text-dark notification-bell dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                data-bs-display="static"
                                aria-expanded="false">

                                <svg class="icon icon-sm text-gray-900"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">

                                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                    </path>
                                </svg>
                            </a>

                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">

                                <div class="list-group list-group-flush">

                                    <a href="#"
                                        class="text-center text-primary fw-bold border-bottom border-light py-3">
                                        Notifications
                                    </a>

                                    <a href="#" class="list-group-item list-group-item-action">
                                        Tidak ada notifikasi baru.
                                    </a>

                                </div>
                            </div>
                        </li>

                        <!-- Profile -->
                        <li class="nav-item dropdown ms-lg-3">

                            <a class="nav-link dropdown-toggle pt-1 px-0"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">

                                <div class="media d-flex align-items-center">

                                    <img class="avatar rounded-circle"
                                        alt="Profile"
                                        src="{{ asset('assets-admin/img/team/profile-picture-3.jpg') }}">

                                    <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">

                                        <span class="mb-0 font-small fw-bold text-gray-900">
                                            Admin
                                        </span>

                                    </div>
                                </div>
                            </a>

                            <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">

                                <a class="dropdown-item d-flex align-items-center"
                                    href="{{ route('pelanggan.index') }}">

                                    My Profile
                                </a>

                                <div role="separator"
                                    class="dropdown-divider my-1">
                                </div>

                                <a class="dropdown-item d-flex align-items-center"
                                    href="{{ route('dashboard') }}">

                                    Dashboard
                                </a>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Header -->
        <div class="py-4">

            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">

                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">

                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">
                            <svg class="icon icon-xxs"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">

                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6">
                                </path>
                            </svg>
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('pelanggan.index') }}">
                            Pelanggan
                        </a>
                    </li>

                    <li class="breadcrumb-item active" aria-current="page">
                        Edit Data
                    </li>

                </ol>
            </nav>

            <div class="d-flex justify-content-between w-100 flex-wrap">

                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Edit Pelanggan</h1>
                    <p class="mb-0">
                        Form untuk mengubah data pelanggan.
                    </p>
                </div>

                <div>
                    <a href="{{ route('pelanggan.index') }}"
                        class="btn btn-secondary">
                        Kembali
                    </a>
                </div>

            </div>
        </div>

        <!-- Form Edit Pelanggan -->
        <div class="row">

            <div class="col-12 mb-4">

                <div class="card border-0 shadow components-section">

                    <div class="card-body">

                        <form
                            action="{{ route('pelanggan.update', $dataPelanggan->pelanggan_id) }}"
                            method="POST">

                            @csrf
                            @method('PUT')

                            <div class="row mb-4">

                                <!-- First Name -->
                                <div class="col-lg-4 col-sm-6">

                                    <div class="mb-3">

                                        <label for="first_name"
                                            class="form-label">
                                            First Name
                                        </label>

                                        <input type="text"
                                            id="first_name"
                                            name="first_name"
                                            class="form-control"
                                            value="{{ old('first_name', $dataPelanggan->first_name) }}"
                                            required>

                                    </div>

                                    <!-- Last Name -->
                                    <div class="mb-3">

                                        <label for="last_name"
                                            class="form-label">
                                            Last Name
                                        </label>

                                        <input type="text"
                                            id="last_name"
                                            name="last_name"
                                            class="form-control"
                                            value="{{ old('last_name', $dataPelanggan->last_name) }}"
                                            required>

                                    </div>

                                </div>

                                <!-- Birthday and Gender -->
                                <div class="col-lg-4 col-sm-6">

                                    <!-- Birthday -->
                                    <div class="mb-3">

                                        <label for="birthday"
                                            class="form-label">
                                            Birthday
                                        </label>

                                        <input type="date"
                                            id="birthday"
                                            name="birthday"
                                            class="form-control"
                                            value="{{ old('birthday', $dataPelanggan->birthday ? \Carbon\Carbon::parse($dataPelanggan->birthday)->format('Y-m-d') : '') }}">

                                    </div>

                                    <!-- Gender -->
                                    <div class="mb-3">

                                        <label for="gender"
                                            class="form-label">
                                            Gender
                                        </label>

                                        <select id="gender"
                                            name="gender"
                                            class="form-select">

                                            <option value="">
                                                -- Pilih --
                                            </option>

                                            <option value="Male"
                                                {{ old('gender', $dataPelanggan->gender) == 'Male' ? 'selected' : '' }}>
                                                Male
                                            </option>

                                            <option value="Female"
                                                {{ old('gender', $dataPelanggan->gender) == 'Female' ? 'selected' : '' }}>
                                                Female
                                            </option>

                                            <option value="Other"
                                                {{ old('gender', $dataPelanggan->gender) == 'Other' ? 'selected' : '' }}>
                                                Other
                                            </option>

                                        </select>

                                    </div>

                                </div>

                                <!-- Email, Phone, Buttons -->
                                <div class="col-lg-4 col-sm-12">

                                    <!-- Email -->
                                    <div class="mb-3">

                                        <label for="email"
                                            class="form-label">
                                            Email
                                        </label>

                                        <input type="email"
                                            id="email"
                                            name="email"
                                            class="form-control"
                                            value="{{ old('email', $dataPelanggan->email) }}"
                                            required>

                                    </div>

                                    <!-- Phone -->
                                    <div class="mb-3">

                                        <label for="phone"
                                            class="form-label">
                                            Phone
                                        </label>

                                        <input type="text"
                                            id="phone"
                                            name="phone"
                                            class="form-control"
                                            value="{{ old('phone', $dataPelanggan->phone) }}">

                                    </div>

                                    <!-- Buttons -->
                                    <div>

                                        <button type="submit"
                                            class="btn btn-info">
                                            Simpan Perubahan
                                        </button>

                                        <a href="{{ route('pelanggan.index') }}"
                                            class="btn btn-outline-secondary ms-2">
                                            Batal
                                        </a>

                                    </div>

                                </div>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-white rounded shadow p-5 mb-4 mt-4">

            <div class="row">

                <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">

                    <p class="mb-0 text-center text-lg-start">
                        © 2019-<span class="current-year"></span>

                        <a class="text-primary fw-normal"
                            href="https://themesberg.com"
                            target="_blank">
                            Themesberg
                        </a>
                    </p>

                </div>

                <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">

                    <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">

                        <li class="list-inline-item px-0 px-sm-2">
                            <a href="https://themesberg.com/about">
                                About
                            </a>
                        </li>

                        <li class="list-inline-item px-0 px-sm-2">
                            <a href="https://themesberg.com/themes">
                                Themes
                            </a>
                        </li>

                        <li class="list-inline-item px-0 px-sm-2">
                            <a href="https://themesberg.com/blog">
                                Blog
                            </a>
                        </li>

                        <li class="list-inline-item px-0 px-sm-2">
                            <a href="https://themesberg.com/contact">
                                Contact
                            </a>
                        </li>

                    </ul>

                </div>

            </div>
        </footer>

    </main>

    <!-- Core JavaScript -->
    <script src="{{ asset('assets-admin/vendor/popperjs/core/dist/umd/popper.min.js') }}"></script>

    <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Volt JavaScript -->
    <script src="{{ asset('assets-admin/js/volt.js') }}"></script>

    <!-- Current Year -->
    <script>
        document.querySelector('.current-year').textContent =
            new Date().getFullYear();
    </script>

</body>
</html>
