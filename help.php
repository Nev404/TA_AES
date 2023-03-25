<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Panduan</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style2.css" />

</head>

<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="admin_page.php">AES 128</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar"
                aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="topNavBar">
                <form class="d-flex ms-auto my-3 my-lg-0">
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3">
                            HOME
                        </div>
                    </li>
                    <li>
                        <a href="admin_page.php" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                            <span>Dashboard</span>
                            <a href="admin_profile_update.php" class="nav-link px-3">
                                <span class="me-2"><i class="bi bi-gear"></i></span>
                                <span>Update Profile</span>
                            </a>
                            <a href="register.php" class="nav-link px-3">
                                <span class="me-2"><i class="bi bi-person-plus-fill"></i></span>
                                <span>Add User</span>
                            </a>
                        </a>
                    </li>

                    <li class="my-4">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                            Kriptografi
                        </div>
                    </li>
                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                            <span class="me-2"><i class="bi bi-folder-fill"></i></span>
                            <span>File</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="layouts">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-lock-fill"></i></span>
                                        <span>Enkripsi</span>
                                    </a>
                                    <a href="#" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-unlock-fill"></i></span>
                                        <span>Dekripsi</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <a href="#" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-clock-history"></i></span>
                        <span>All File</span>
                    </a>
                    <li class="my-4">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                            HELP
                        </div>
                        <a href="#" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-question-circle-fill"></i></span>
                            <span>Panduan</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h4>Panduan</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <span><i class="bi bi-shield-shaded"></i></span> Kriptografi
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Apa itu kriptografi ?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Kriptografi adalah ilmu dan seni untuk melindungi
                                        informasi dengan mengubahnya menjadi bentuk yang tidak dapat dimengerti oleh
                                        orang yang tidak berwenang.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Kegunaan Kriptografi
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Kriptografi digunakan untuk mengamankan pesan dan
                                        data penting dalam komunikasi elektronik, seperti email, transaksi keuangan,
                                        dan penyimpanan data di cloud.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Jenis Kriptografi
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Ada berbagai jenis teknik kriptografi, seperti
                                        kriptografi simetris, kriptografi asimetris, dan hash function, yang
                                        semuanya memiliki tujuan yang sama yaitu melindungi informasi agar tidak
                                        dapat diakses oleh orang yang tidak berwenang.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                        Apa itu Enkripsi ?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Enkripsi adalah proses mengubah pesan atau data
                                        menjadi bentuk yang tidak dapat dimengerti oleh orang yang tidak memiliki
                                        kunci untuk mendekripsinya. Dalam kriptografi, enskripsi adalah salah satu
                                        teknik utama untuk melindungi keamanan dan privasi data saat ditransmisikan
                                        atau disimpan.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false"
                                        aria-controls="flush-collapseFive">
                                        Apa itu Dekripsi ?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Dekripsi adalah proses membalikkan enskripsi, yaitu
                                        mengubah kembali pesan atau data yang telah dienskripsi menjadi bentuk
                                        aslinya yang dapat dibaca atau dimengerti oleh penerima yang sah. Deskripsi
                                        dilakukan dengan menggunakan kunci dekripsi yang sesuai dengan kunci
                                        enskripsi yang digunakan dalam proses enskripsi sebelumnya.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseSix" aria-expanded="false"
                                        aria-controls="flush-collapseSix">
                                        Apa itu AES 128 ?
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">AES (Advanced Encryption Standard) adalah sebuah
                                        algoritma kriptografi simetris yang digunakan untuk mengenkripsi dan
                                        mendekripsi data. AES menggunakan kunci yang sama untuk mengenkripsi dan
                                        mendekripsi data, sehingga algoritma ini juga dikenal sebagai kriptografi
                                        simetris.
                                        AES mendukung kunci dengan panjang 128, 192, atau 256 bit. AES 128
                                        menggunakan kunci dengan panjang 128 bit, yang membuatnya lebih cepat dan
                                        lebih efisien dalam penggunaan sumber daya daripada AES dengan kunci yang
                                        lebih panjang.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <div class="card-body">
                            <div class="card-header">
                                <span><i class="bi bi-info-square-fill"></i></span> Penggunaan Aplikasi
                            </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSeven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven"
                                            aria-expanded="false" aria-controls="flush-collapseSeven">
                                            Dashboard
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Menu Dashboard menampilkan informasi statistik dan
                                            penggunaan
                                            aplikasi ini</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingEight">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseEight"
                                            aria-expanded="false" aria-controls="flush-collapseEight">
                                            Update Profile
                                        </button>
                                    </h2>
                                    <div id="flush-collapseEight" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Menu Update Profile ini berfungsi untuk mengubah
                                            data user</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingNine">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseNine"
                                            aria-expanded="false" aria-controls="flush-collapseNine">
                                            Add User
                                        </button>
                                    </h2>
                                    <div id="flush-collapseNine" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Menu Add User ini berfungsi untuk menambahkan user
                                            agar bisa menggunakan aplikasi ini
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTen">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTen"
                                            aria-expanded="false" aria-controls="flush-collapseTen">
                                            File
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTen" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Pada menu Enkripsi berfungsi untuk mengenkripsi file
                                            <br>
                                            Pada menu Deskripsi berfungsi untuk mengdekripsi file
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingEleven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven"
                                            aria-expanded="false" aria-controls="flush-collapseEleven">
                                            All File
                                        </button>
                                    </h2>
                                    <div id="flush-collapseEleven" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Pada menu All File berfungsi untuk melihat seluruh
                                            file yang telah dienkripsi dan didekripsi
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="./js/bootstrap.bundle.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
                <script src="./js/jquery-3.5.1.js"></script>
                <script src="./js/jquery.dataTables.min.js"></script>
                <script src="./js/dataTables.bootstrap5.min.js"></script>
                <script src="./js/script.js"></script>

</body>

</html>