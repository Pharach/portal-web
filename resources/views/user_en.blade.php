<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
    <link href="{{ asset('storage/css/style.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Kanit:ital,wght@0,400;0,500;0,700;1,500;1,700&display=swap"
        rel="stylesheet">
    <link href="{{ asset('storage/css/style.css') }}" rel="stylesheet">
    <title>Web Portal DTC</title>
</head>

<body>
    
    <header class="header d-flex justify-content-between align-items-center px-4">
        <div class="header-logo">
            <a href="/">
                <img src="//km.dtc.co.th/moodle/pluginfile.php/1/theme_klass/logo/1621227805/DTC_logo%20-%20update-white-01.png"
                    alt="DTC Logo" class="logo">
            </a>
        </div>
        <div class="searchbar">
            <form id="searchForm" action="https://www.google.com/search" method="GET">
                <div class="searchbar-wrapper">
                    <span class="search-icon-wrapper">
                        <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                        </svg>
                    </span>
                    <input type="text" id="searchInput" class="searchbar-input" maxlength="2048" name="q"
                        placeholder="Search Google">
                    <button type="submit" class="search-button">Search</button>
                </div>
            </form>
        </div>

        <!-- EN/TH Buttons -->
        <div class="language-toggle">
            <a href="{{ route('user.th') }}" class="btn btn-light">TH</a>
        </div>
    </header>

    <div class="container mt-1">
        <div class="row row-cols-sm-2 row-cols-sm-2 row-cols-lg-3 row-cols-lg-4">
            <div class="col d-flex">
                <div class="col">
                    <a href="https://bizmail.one.th/" target="_blank" class="card-link">
                        <div class="card text-center h-100">
                            <dotlottie-player
                                src="https://lottie.host/05232e3f-324c-4d7a-9be8-622e77c52bfe/Yd4R2pTbf7.lottie"
                                class="card-img-top" alt="Bizmail" background="transparent" speed="1" loop
                                autoplay></dotlottie-player>
                            <div class="card-body">
                                <h5 class="card-title">Bizmail (Zimbra)</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="col">
                    <a href="http://10.255.255.15/phone/" target="_blank" class="card-link">
                        <div class="card text-center h-100">
                            <dotlottie-player
                                src="https://lottie.host/c72c0cf6-76e0-4281-bba5-a8799dded8a5/ITtdQvLIbM.lottie"
                                class="card-img-top" alt="ค้นหารายชื่อพนักงาน" background="transparent" speed="1" loop
                                autoplay></dotlottie-player>
                            <div class="card-body">
                                <h5 class="card-title">Phone Search</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="col">
                    <a href="http://reserved.dtc.co.th/" target="_blank" class="card-link">
                        <div class="card text-center h-100">
                            <dotlottie-player
                                src="https://lottie.host/c679a653-f9aa-4032-b225-9bae4ba446f5/9Dduw5fvxH.lottie"
                                class="card-img-top" alt="Reserve Meetingroom" background="transparent" speed="1.5" loop
                                autoplay></dotlottie-player>
                            <div class="card-body">
                                <h5 class="card-title">Reserve Meetingroom</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="col">
                    <a href="https://contract.dtc.co.th/" target="_blank" class="card-link">
                        <div class="card text-center h-100">
                            <dotlottie-player
                                src="https://lottie.host/be0cb859-0b26-4413-8557-784a24d46539/EYjuDsyY4R.lottie"
                                class="card-img-top" alt="DTC Contracts" background="transparent" speed="1.5" loop
                                autoplay></dotlottie-player>
                            <div class="card-body">
                                <h5 class="card-title">DTC Contracts</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="col">
                    <a href="https://hr.dtc.co.th/" target="_blank" class="card-link">
                        <div class="card text-center h-100">
                            <dotlottie-player
                                src="https://lottie.host/dd47e248-2ff2-40a1-8d1a-041b43f03eb2/g3FNsNVVoU.lottie"
                                class="card-img-top" alt="HR System" background="transparent" speed="1" loop
                                autoplay></dotlottie-player>
                            <div class="card-body">
                                <h5 class="card-title">HR System</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="col">
                    <a href="https://km.dtc.co.th/moodle/" target="_blank" class="card-link">
                        <div class="card text-center h-100">
                            <dotlottie-player
                                src="https://lottie.host/c62d3ca7-b3a5-4a7f-9f2a-5193a993eb6e/JQEG3rmbtd.lottie"
                                class="card-img-top" alt="Knowledge DTC" background="transparent" speed="1.5" loop
                                autoplay></dotlottie-player>
                            <div class="card-body">
                                <h5 class="card-title">Knowledge DTC</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="col">
                    <a href="https://ticket.dtc.co.th/" target="_blank" class="card-link">
                        <div class="card text-center h-100">
                            <dotlottie-player
                                src="https://lottie.host/67e9553c-8816-45a8-8901-44d3eba17dd8/3FmN6Pgwnw.lottie"
                                class="card-img-top" alt="IT ticketing" background="transparent" speed="1.5" loop
                                autoplay></dotlottie-player>
                            <div class="card-body">
                                <h5 class="card-title">IT Ticketing System</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="col">
                    <a href="https://reserved.dtc.co.th/maintenance/" target="_blank" class="card-link">
                        <div class="card text-center h-100">
                            <dotlottie-player
                                src="https://lottie.host/99ff1372-d5c3-4bfa-8df8-9d33bda7b004/oZc7voA2Fy.lottie"
                                class="card-img-top" alt="Maintenance Building" background="transparent" speed="1.5" loop
                                autoplay></dotlottie-player>
                            <div class="card-body">
                                <h5 class="card-title">Maintenance Building</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>