<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>{{ env('APP_NAME') }} </title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin/images/favicon.png') }}">

    <link href="{{ asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
    <link href="{{ asset('admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/jvmap/jquery-jvectormap.css') }}" rel="stylesheet">
    <link href="../../cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}"
        rel="stylesheet">
    <!-- tagify-css -->
    <link href="{{ asset('admin/vendor/tagify/dist/tagify.css') }}" rel="stylesheet">

    <!-- Style css -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <svg class="logo-abbr" width="39" height="23" viewBox="0 0 39 23" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path class="w3"
                        d="M32.0362 22H19.0466L20.7071 18.7372C20.9559 18.2484 21.455 17.9378 22.0034 17.9305L31.1036 17.8093C33.0753 17.6497 33.6571 15.9246 33.7015 15.0821C33.7015 13.2196 32.1916 12.5765 31.4367 12.4878H23.7095L25.9744 8.49673H30.4375C31.8763 8.3903 32.236 7.03332 32.236 6.36814C32.3426 4.93133 30.9482 4.61648 30.2376 4.63865H28.6955C28.2646 4.63865 27.9788 4.19212 28.1592 3.8008L29.7047 0.44798C31.0903 0.394765 32.8577 0.780573 33.5683 0.980129C38.6309 3.42801 37.0988 7.98676 35.6999 9.96014C38.1513 11.9291 38.4976 14.3282 38.3644 15.2816C38.098 20.1774 34.0346 21.8005 32.0362 22Z"
                        fill="var(--primary)" />
                    <path class="react-w"
                        d="M9.89261 21.4094L0 2.80536H4.86354C5.41354 2.80536 5.91795 3.11106 6.17246 3.59864L12.4032 15.5355C12.6333 15.9762 12.6261 16.5031 12.3842 16.9374L9.89261 21.4094Z"
                        fill="white" />
                    <path class="react-w"
                        d="M17.5705 21.4094L7.67786 2.80536H12.5372C13.0894 2.80536 13.5954 3.11351 13.8489 3.60412L20.302 16.0939L17.5705 21.4094Z"
                        fill="white" />
                    <path class="react-w"
                        d="M17.6443 21.4094L28.2751 0H23.4513C22.8806 0 22.361 0.328884 22.1168 0.844686L14.8271 16.2416L17.6443 21.4094Z"
                        fill="white" />
                    <path class="react-w"
                        d="M9.89261 21.4094L0 2.80536H4.86354C5.41354 2.80536 5.91795 3.11106 6.17246 3.59864L12.4032 15.5355C12.6333 15.9762 12.6261 16.5031 12.3842 16.9374L9.89261 21.4094Z"
                        stroke="white" />
                    <path class="react-w"
                        d="M17.5705 21.4094L7.67786 2.80536H12.5372C13.0894 2.80536 13.5954 3.11351 13.8489 3.60412L20.302 16.0939L17.5705 21.4094Z"
                        stroke="white" />
                    <path class="react-w"
                        d="M17.6443 21.4094L28.2751 0H23.4513C22.8806 0 22.361 0.328884 22.1168 0.844686L14.8271 16.2416L17.6443 21.4094Z"
                        stroke="white" />
                </svg>
                <svg class="brand-title" width="47" height="16" viewBox="0 0 47 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.36 15.2C7.2933 15.2 6.3 15.0267 5.38 14.68C4.4733 14.32 3.68 13.82 3 13.18C2.3333 12.5267 1.8133 11.76 1.44 10.88C1.0667 9.99999 0.880005 9.03999 0.880005 7.99999C0.880005 6.95999 1.0667 5.99999 1.44 5.11999C1.8133 4.23999 2.34 3.47999 3.02 2.83999C3.7 2.18666 4.49331 1.68666 5.40001 1.33999C6.30671 0.979988 7.3 0.799988 8.38 0.799988C9.5267 0.799988 10.5733 0.999988 11.52 1.39999C12.4667 1.78666 13.2667 2.36666 13.92 3.13999L12.24 4.71999C11.7333 4.17332 11.1667 3.76666 10.54 3.49999C9.9133 3.21999 9.2333 3.07999 8.5 3.07999C7.7667 3.07999 7.0933 3.19999 6.48 3.43999C5.88 3.67999 5.35331 4.01999 4.90001 4.45999C4.46001 4.89999 4.1133 5.41999 3.86 6.01999C3.62 6.61999 3.5 7.27999 3.5 7.99999C3.5 8.71999 3.62 9.37999 3.86 9.97999C4.1133 10.58 4.46001 11.1 4.90001 11.54C5.35331 11.98 5.88 12.32 6.48 12.56C7.0933 12.8 7.7667 12.92 8.5 12.92C9.2333 12.92 9.9133 12.7867 10.54 12.52C11.1667 12.24 11.7333 11.82 12.24 11.26L13.92 12.86C13.2667 13.62 12.4667 14.2 11.52 14.6C10.5733 15 9.52 15.2 8.36 15.2ZM16.4113 15V0.999988H22.1713C23.4113 0.999988 24.4713 1.19999 25.3513 1.59999C26.2446 1.99999 26.9313 2.57332 27.4113 3.31999C27.8913 4.06666 28.1313 4.95332 28.1313 5.97999C28.1313 7.00669 27.8913 7.89329 27.4113 8.63999C26.9313 9.37329 26.2446 9.93999 25.3513 10.34C24.4713 10.7267 23.4113 10.92 22.1713 10.92H17.8513L19.0113 9.73999V15H16.4113ZM25.5713 15L22.0313 9.91999H24.8112L28.3713 15H25.5713ZM19.0113 10.02L17.8513 8.77999H22.0513C23.1979 8.77999 24.0579 8.53329 24.6312 8.03999C25.2179 7.54669 25.5113 6.85999 25.5113 5.97999C25.5113 5.08666 25.2179 4.39999 24.6312 3.91999C24.0579 3.43999 23.1979 3.19999 22.0513 3.19999H17.8513L19.0113 1.91999V10.02ZM31.0402 15V0.999988H33.1802L39.3002 11.22H38.1802L44.2002 0.999988H46.3402L46.3602 15H43.9002L43.8802 4.85999H44.4002L39.2802 13.4H38.1202L32.9202 4.85999H33.5202V15H31.0402Z"
                        fill="black" />
                </svg>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <form>
                                <div class="input-group search-area">
                                    <span class="input-group-text"><button class="bg-transparent border-0">
                                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="8.78605" cy="8.78605" r="8.23951" stroke="white"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14.5168 14.9447L17.7471 18.1667" stroke="white"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button></span>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link " href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20.8067 7.62358L20.1842 6.54349C19.6577 5.62957 18.4907 5.31429 17.5755 5.83869V5.83869C17.1399 6.09531 16.6201 6.16812 16.1307 6.04106C15.6413 5.91399 15.2226 5.59749 14.9668 5.16134C14.8023 4.88412 14.7139 4.56836 14.7105 4.24601V4.24601C14.7254 3.72919 14.5304 3.22837 14.17 2.85764C13.8096 2.48691 13.3145 2.27783 12.7975 2.27805H11.5435C11.037 2.27804 10.5513 2.47988 10.194 2.83891C9.83669 3.19795 9.63717 3.68456 9.63961 4.19109V4.19109C9.6246 5.23689 8.77248 6.07678 7.72657 6.07667C7.40421 6.07332 7.08846 5.98491 6.81123 5.82038V5.82038C5.89606 5.29598 4.72911 5.61126 4.20254 6.52519L3.53435 7.62358C3.00841 8.53636 3.3194 9.70258 4.23 10.2323V10.2323C4.8219 10.574 5.18653 11.2056 5.18653 11.889C5.18653 12.5725 4.8219 13.204 4.23 13.5458V13.5458C3.32056 14.0719 3.00923 15.2353 3.53435 16.1453V16.1453L4.16593 17.2346C4.41265 17.6798 4.8266 18.0083 5.31619 18.1474C5.80578 18.2866 6.33064 18.2249 6.77462 17.976V17.976C7.21108 17.7213 7.73119 17.6515 8.21934 17.7822C8.70749 17.9128 9.12324 18.233 9.37416 18.6716C9.5387 18.9489 9.62711 19.2646 9.63046 19.587V19.587C9.63046 20.6435 10.487 21.5 11.5435 21.5H12.7975C13.8505 21.5 14.7055 20.6491 14.7105 19.5961V19.5961C14.7081 19.088 14.9089 18.6 15.2682 18.2407C15.6275 17.8814 16.1155 17.6806 16.6236 17.6831C16.9452 17.6917 17.2596 17.7797 17.5389 17.9394V17.9394C18.4517 18.4653 19.6179 18.1543 20.1476 17.2437V17.2437L20.8067 16.1453C21.0618 15.7075 21.1318 15.186 21.0012 14.6963C20.8706 14.2067 20.5502 13.7893 20.111 13.5366V13.5366C19.6718 13.2839 19.3514 12.8665 19.2208 12.3769C19.0902 11.8873 19.1603 11.3658 19.4154 10.9279C19.5812 10.6383 19.8214 10.3982 20.111 10.2323V10.2323C21.0161 9.70286 21.3264 8.54346 20.8067 7.63274V7.63274V7.62358Z"
                                            stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                        <circle cx="12.1751" cy="11.889" r="2.63616" stroke="white"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_TimeLine02" class="widget-timeline dz-scroll style-1 p-3 height370">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-badge primary"></div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <h6 class="mb-0">Referral Setting</h6>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-fullscreen" href="javascript:void(0);">
                                    <svg id="icon-full" viewBox="0 0 24 24" width="20" height="20"
                                        stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" class="css-i6dzq1">
                                        <path
                                            d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"
                                            style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
                                    </svg>
                                    <svg id="icon-minimize" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="A098AE" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-minimize">
                                        <path
                                            d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3"
                                            style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item ps-3">
                                <div class="dropdown header-profile2">
                                    <a class="nav-link" href="javascript:void(0);" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="header-info2 d-flex align-items-center">
                                            <div class="header-media">
                                                <img src="{{ asset('admin/images/tab/1.jpg') }}" alt="">
                                            </div>
                                            <div class="header-info">
                                                <h6>{{ auth()->user()->name }}</h6>
                                                <p>{{ auth()->user()->email }}</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" style="">
                                        <div class="card border-0 mb-0">
                                            <div class="card-header py-2">
                                                <div class="products">
                                                    <img src="{{ asset('admin/images/tab/1.jpg') }}"
                                                        class="avatar avatar-md" alt="">
                                                    <div>
                                                        <h6>{{ auth()->user()->name }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer px-0 py-2">
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <svg class="profle-logout" xmlns="http://www.w3.org/2000/svg"
                                                        width="18" height="18" viewBox="0 0 24 24"
                                                        fill="none" stroke="#ff7979" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                        <polyline points="16 17 21 12 16 7"></polyline>
                                                        <line x1="21" y1="12" x2="9"
                                                            y2="12"></line>
                                                    </svg>
                                                    <button class="btn btn-danger" type="submit">Logout </button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="menu-title">{{ env('APP_NAME') }}</li>
                    <li><a href="{{ route('Admin.Dashboard') }}">
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.986 14.0673C7.4407 14.0673 4.41309 14.6034 4.41309 16.7501C4.41309 18.8969 7.4215 19.4521 10.986 19.4521C14.5313 19.4521 17.5581 18.9152 17.5581 16.7693C17.5581 14.6234 14.5505 14.0673 10.986 14.0673Z"
                                        stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.986 11.0054C13.3126 11.0054 15.1983 9.11881 15.1983 6.79223C15.1983 4.46564 13.3126 2.57993 10.986 2.57993C8.65944 2.57993 6.77285 4.46564 6.77285 6.79223C6.76499 9.11096 8.63849 10.9975 10.9563 11.0054H10.986Z"
                                        stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Users</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.Todays.Users') }}">Today User</a></li>
                            <li><a href="{{ route('Admin.Pending.Users') }}">Pending User</a></li>
                            <li><a href="{{ route('Admin.Approved.Users') }}">Approved User</a></li>
                            <li><a href="{{ route('Admin.Rejected.Users') }}">Rejected User</a></li>
                            {{-- <li><a href="{{ route('Admin.Add.Top.Users') }}">Add Top Users</a></li>
                            <li><a href="{{ route('Admin.All.Top.Users') }}">All Top Users</a></li> --}}
                        </ul>
                    </li>
                    <li class="menu-title">OUR FEATURES</li>
                    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.75 5.95833C2.75 3.55189 2.77577 2.75 5.95833 2.75C9.1409 2.75 9.16667 3.55189 9.16667 5.95833C9.16667 8.36478 9.17682 9.16667 5.95833 9.16667C2.73985 9.16667 2.75 8.36478 2.75 5.95833Z"
                                        stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.8333 5.95833C12.8333 3.55189 12.8591 2.75 16.0416 2.75C19.2242 2.75 19.25 3.55189 19.25 5.95833C19.25 8.36478 19.2601 9.16667 16.0416 9.16667C12.8232 9.16667 12.8333 8.36478 12.8333 5.95833Z"
                                        stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.75 16.0417C2.75 13.6352 2.77577 12.8333 5.95833 12.8333C9.1409 12.8333 9.16667 13.6352 9.16667 16.0417C9.16667 18.4481 9.17682 19.25 5.95833 19.25C2.73985 19.25 2.75 18.4481 2.75 16.0417Z"
                                        stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.8333 16.0417C12.8333 13.6352 12.8591 12.8333 16.0416 12.8333C19.2242 12.8333 19.25 13.6352 19.25 16.0417C19.25 18.4481 19.2601 19.25 16.0416 19.25C12.8232 19.25 12.8333 18.4481 12.8333 16.0417Z"
                                        stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Task</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.Add.Task') }}">Task</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M18.634 13.4211C18.634 16.7009 16.7007 18.6342 13.4209 18.6342H6.28738C2.99929 18.6342 1.06238 16.7009 1.06238 13.4211V6.27109C1.06238 2.99584 2.26688 1.06259 5.54763 1.06259H7.38096C8.03913 1.06351 8.65879 1.37242 9.05296 1.89951L9.88988 3.01234C10.2859 3.53851 10.9055 3.84834 11.5637 3.84926H14.1579C17.446 3.84926 18.6596 5.52309 18.6596 8.86984L18.634 13.4211Z"
                                        stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5.85754 12.2577H13.8646" stroke="#888888" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Withdraw Requests</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.Withdraw.Pending.Requests') }}">Pending</a></li>
                            <li><a href="{{ route('Admin.Withdraw.Approved.Requests') }}">Approved</a></li>
                            <li><a href="{{ route('Admin.Withdraw.Rejected.Requests') }}">Rejected</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M20.8064 7.62355L20.184 6.54346C19.6574 5.62954 18.4905 5.31426 17.5753 5.83866V5.83866C17.1397 6.09528 16.6198 6.16809 16.1305 6.04103C15.6411 5.91396 15.2224 5.59746 14.9666 5.16131C14.8021 4.88409 14.7137 4.56833 14.7103 4.24598V4.24598C14.7251 3.72916 14.5302 3.22834 14.1698 2.85761C13.8094 2.48688 13.3143 2.2778 12.7973 2.27802H11.5433C11.0367 2.27801 10.5511 2.47985 10.1938 2.83888C9.83644 3.19791 9.63693 3.68453 9.63937 4.19106V4.19106C9.62435 5.23686 8.77224 6.07675 7.72632 6.07664C7.40397 6.07329 7.08821 5.98488 6.81099 5.82035V5.82035C5.89582 5.29595 4.72887 5.61123 4.20229 6.52516L3.5341 7.62355C3.00817 8.53633 3.31916 9.70255 4.22975 10.2322V10.2322C4.82166 10.574 5.18629 11.2055 5.18629 11.889C5.18629 12.5725 4.82166 13.204 4.22975 13.5457V13.5457C3.32031 14.0719 3.00898 15.2353 3.5341 16.1453V16.1453L4.16568 17.2345C4.4124 17.6797 4.82636 18.0082 5.31595 18.1474C5.80554 18.2865 6.3304 18.2248 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6515 8.2191 17.7821C8.70725 17.9128 9.12299 18.233 9.37392 18.6716C9.53845 18.9488 9.62686 19.2646 9.63021 19.5869V19.5869C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5 14.7053 20.6491 14.7103 19.5961V19.5961C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6806 16.6233 17.6831C16.9449 17.6917 17.2594 17.7797 17.5387 17.9393V17.9393C18.4515 18.4653 19.6177 18.1543 20.1474 17.2437V17.2437L20.8064 16.1453C21.0615 15.7074 21.1315 15.1859 21.001 14.6963C20.8704 14.2067 20.55 13.7893 20.1108 13.5366V13.5366C19.6715 13.2839 19.3511 12.8665 19.2206 12.3769C19.09 11.8872 19.16 11.3658 19.4151 10.9279C19.581 10.6383 19.8211 10.3981 20.1108 10.2322V10.2322C21.0159 9.70283 21.3262 8.54343 20.8064 7.63271V7.63271V7.62355Z"
                                        stroke="#888888" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <circle cx="12.1747" cy="11.889" r="2.63616" stroke="#888888"
                                        stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Settings</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.Referral.Setting') }}">Referral</a></li>
                            <li><a href="{{ route('Admin.Bank.Details') }}">Bank Details</a></li>
                            <li><a href="{{ route('Admin.Verification.Page') }}">Verfication Page</a></li>
                            <li><a href="{{ route('Admin.Level.Page') }}">Level Setting</a></li>
                            <li><a href="{{ route('Admin.Marquee.Text') }}">Bar Text</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('Admin.Change.My.Password') }}"
                            style="padding: 12px;background-color:rgb(51, 182, 200);border-radius:12px;color:white;">Change
                            Password</a>
                    </li>
                </ul>
                <div class="help-desk">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
        </div>
