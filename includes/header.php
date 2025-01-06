<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700&display=swap" rel="stylesheet">
    <title>My Website</title>
    <style>
        body {
            background-color: #3d4855;
        }
        .bg-img {
            position: relative;
            width: 100%;
            height: 40rem;
            overflow: hidden;
        }
        .bg-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }
        .text-overlay {
            z-index: 1;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            padding-left: 8rem;
            color: white;
        }
        @media (max-width: 768px) {
            .text-overlay {
                padding-left: 2rem;
                text-align: center;
                align-items: center !important;
            }
            .text-overlay h1 {
                font-size: 1.75rem;
            }
            .text-overlay p {
                font-size: 1.25rem;
            }
            .text-start {
                text-align: center !important;
                padding-left: 1rem !important;
            }
            .title-text h1, .title-text p {
                text-align: center;
            }
            .right-text {
                padding: 1rem !important;
                text-align: center !important;
            }
            .navbar-nav {
                flex-direction: column; /* Menyusun item navbar secara vertikal */
                align-items: center; /* Mengatur item navbar ke tengah */
            }
            .navbar-nav .nav-item {
                margin: 0.5rem 0; /* Menambahkan margin vertikal antar item */
            }
        }
    </style>
</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent position-absolute w-100" style="z-index: 2; top: 0;">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#" style="font-size: 1.5rem; padding-left: 1rem;">Isekai Resident</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav gap-5" style="padding-right: 3rem;">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Location</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Background Image with Text -->
        <div class="bg-img">
            <img src="asset/img/bg_head.png" alt="Background Image">
            <div class="text-overlay text-start d-flex flex-column justify-content-center align-items-start">
                <p style="font-size:1.5rem;">Isekai Residence</p>
                <h1 style="font-size: 2.5rem; font-weight: bold;">Pengalaman Hidup<br>Yang Tenang dan Damai</h1>
            </div>
        </div>
    </header>
    <main>
        <!-- Text Main -->
        <div class="d-flex text-start" style="z-index: 1; padding-left: 3rem; padding-top: 5rem;">
            <article style="color:white;">
                <p style="font-size: 1.5rem;">Who we Are</p>
                <h1 style="font-size: 2.5rem; font-weight: bold;">Isekai Residence<br>Living in Your Dream</h1>
                <p style="font-size: 1.5rem;">Sebuah kota impian para wibu dengan hunian berkualitas, damai, dan tenang<br>Berlokasi paling strategis di Jepang</p>
            </article>
        </div>
        <!-- Side Image and Text -->
        <div class="side-content d-flex flex-column flex-md-row" style="width: 100%; height: auto;">
            <div class="side-bg position-relative" style="width: 100%; height: auto; overflow: hidden;">
                <div class="side-img" style="width: 100%; height: 100%; position: relative;">
                    <img src="asset/img/bg_card.png" alt="Side Image" style="width: 100%; height: auto; object-fit: cover;">
                </div>
            </div>
            <div class="right-text d-flex flex-column justify-content-center" style="width: 100%; padding: 2rem; color: white;">
                <h1>Suasana yang<br>Tenang</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa cum quod eum. Nam vel molestias libero alias assumenda repellat cum excepturi, quasi inventore adipisci ullam nulla, veniam qui sequi debitis.</p>
            </div>
        </div>

        <!-- Title and Card -->
        <div class="d-flex flex-column align-items-center" style="width: 100%; padding-top: 3rem;">
            <div class="title-text d-flex flex-column text-center" style="color: white;">
                <h1>Isekai Residence of Japan</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Odio accusantium consequuntur vel necessitatibus, deserunt exercitationem fugit maxime dicta doloremque<br>dolore neque laboriosam magni perspiciatis tempore nisi minus blanditiis ducimus amet.</p>
            </div>
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem;">
                <div style="width: 18rem; height: 20rem; margin-top: 2rem;">
                    <a href="#" style="text-decoration: none; color: inherit; height: 100%; display: block;">
                        <img src="asset/img/bg_card-item1.png" alt="Card Item 1" style="width: 100%; height: 100%; object-fit: cover; border-radius: inherit;">
                    </a>
                </div>
                <div style="width: 18rem; height: 20rem; margin-top: 2rem;">
                    <a href="#" style="text-decoration: none; color: inherit; height: 100%; display: block;">
                        <img src="asset/img/bg_card-item2.png" alt="Card Item 2" style="width: 100%; height: 100%; object-fit: cover; border-radius: inherit;">
                    </a>
                </div>
                <div style="width: 18rem; height: 20rem; margin-top: 2rem;">
                    <a href="#" style="text-decoration: none; color: inherit; height: 100%; display: block;">
                        <img src="asset/img/bg_card-item3.png" alt="Card Item 3" style="width: 100%; height: 100%; object-fit: cover; border-radius: inherit;">
                    </a>
                </div>
            </div>
            <h1 style="text-align: center; font-size: 2.5rem; padding-top: 3rem; color: white;">About Us</h1>

            <!-- Profile Cards -->
            <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; padding: 4rem 1rem; color: #fff;">
                <!-- Profile Card 1 -->
                <div style="width: 300px; background-color: #2c3e50; border-radius: 10px; padding: 20px; text-align: center;">
                    <div style="width: 80px; height: 80px; background-color: #ccc; border-radius: 50%; margin: 0 auto 20px;"></div>
                    <p style="font-size: 14px; line-height: 1.5; margin: 10px 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <h4 style="font-size: 18px; margin: 10px 0; font-weight: bold;">Farhan Firmansyah</h4>
                    <span style="font-size: 14px; color: #aaa;">Raja Iblis</span>
                </div>
                <!-- Profile Card 2 -->
                <div style="width: 300px; background-color: #2c3e50; border-radius: 10px; padding: 20px; text-align: center;">
                    <div style="width: 80px; height: 80px; background-color: #ccc; border-radius: 50%; margin: 0 auto 20px;"></div>
                    <p style="font-size: 14px; line-height: 1.5; margin: 10px 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <h4 style="font-size: 18px; margin: 10px 0; font-weight: bold;">Krisna Satya A.</h4>
                    <span style="font-size: 14px; color: #aaa;">Komandan Iblis 1</span>
                </div>
                <!-- Profile Card 3 -->
                <div style="width: 300px; background-color: #2c3e50; border-radius: 10px; padding: 20px; text-align: center;">
                    <div style="width: 80px; height: 80px; background-color: #ccc; border-radius: 50%; margin: 0 auto 20px;"></div>
                    <p style="font-size: 14px; line-height: 1.5; margin: 10px 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <h4 style="font-size: 18px; margin: 10px 0; font-weight: bold;">M. Hernanda Fikri W.</h4>
                    <span style="font-size: 14px; color: #aaa;">Komandan Iblis 2</span>
                </div>
                <!-- Profile Card 4 -->
                <div style="width: 300px; background-color: #2c3e50; border-radius: 10px; padding: 20px; text-align: center;">
                    <div style="width: 80px; height: 80px; background-color: #ccc; border-radius: 50%; margin: 0 auto 20px;"></div>
                    <p style="font-size: 14px; line-height: 1.5; margin: 10px 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <h4 style="font-size: 18px; margin: 10px 0; font-weight: bold;">Nanda Muhammad F.</h4>
                    <span style="font-size: 14px; color: #aaa;">Komandan Iblis 3</span>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer style="background-color: #95a5a6; padding: 1.25rem; color: #fff;">
        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; max-width: 62.5rem; margin: auto; padding-top: 3rem;">
            <!-- Kontak -->
            <div style="flex: 1; min-width: 200px; margin: 0.5rem;">
                <h2 style="margin: 0 0 0.625rem;">Hubungi Kami</h2>
                <p style="margin: 0.3125rem 0;">PHONE</p>
                <p style="margin: 0;">081-756.2003</p>
                <p style="margin: 0.3125rem 0;">Office Isekai Residence<br>Japan</p>
                <p style="margin: 0.3125rem 0;">WHATSAPP (MARKETING)</p>
                <p style="margin: 0;"><strong>+62880404XXXX</strong></p>
                <p style="margin: 0.3125rem 0;">EMAIL</p>
                <p style="margin: 0;">infoisekairesidence@japan.com</p>
            </div>
            <!-- Menu -->
            <div style="flex: 1; min-width: 200px; margin: 0.5rem;">
                <h3 style="margin: 0 0 0.625rem;">MENU</h3>
                <p style="margin: 0.3125rem 0;">About Us</p>
                <p style="margin: 0.3125rem 0;">Product</p>
                <p style="margin: 0.3125rem 0;">Location</p>
                <p style="margin: 0.3125rem 0;">Contact Us</p>
            </div>
            <!-- Maps -->
            <div style="flex: 1; min-width: 200px; margin: 0.5rem;">
                <h3 style="margin: 0 0 0.625rem;">Google Maps</h3>
                <p style="margin: 0.3125rem 0;">Isekai Residence</p>
                <p style="margin: 0.3125rem 0;">Location</p>
            </div>
        </div>
    </footer>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>