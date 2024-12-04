<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body {
            background: url('assets/WhatsApp Image 2024-11-28 at 20.45.30_85828e7c.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: transparent; /* Membuat navbar transparan */
			padding: 0.5rem 1rem;
			border: none;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			z-index: 9999;
        }
        .navbar-nav .nav-link {
            color: white; /* Ganti warna teks navbar menjadi hitam */
            margin-left: 30px;
			font-size: large;
			font-weight: bold;
        }
        .navbar-brand img {
            height: 50px;
            width: auto;
        }
        .content {
            text-align: center;
            margin-top: 250px; /* Menambahkan jarak untuk konten agar tidak tertutup navbar */
        }
        .content h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 50px; /* Memberikan jarak bawah */
        }
        .icon-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        .icon-container .icon-box {
            display: inline-block;
            width: 150px;
            height: 150px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            text-align: center;
            padding: 20px;
            transition: transform 0.3s ease-in-out;
        }
        .icon-container .icon-box:hover {
            transform: translateY(-10px);
        }
        .icon-container .icon-box i {
            font-size: 48px;
            margin-bottom: 10px;
        }
        .icon-container .icon-box p {
            font-size: 18px;
            font-weight: bold;
            margin: 0;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .content h1 {
                font-size: 36px;
            }
            .icon-container .icon-box {
                width: 120px;
                height: 120px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img alt="Logo" src="assets/Rectangle 23.png"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('auth/login'); ?>">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <h1>Bersama dalam Kepedulian, Berbagi dalam Kehilangan</h1>
        <div class="icon-container">
            <div class="icon-box">
                <i class="fas fa-users"></i>
                <p>Anggota</p>
            </div>
            <div class="icon-box">
                <i class="fas fa-dollar-sign"></i>
                <p>Iuran</p>
            </div>
            <div class="icon-box">
                <i class="fas fa-hand-holding-heart"></i>
                <p>Santunan</p>
            </div>
            <div class="icon-box">
                <i class="fas fa-coins"></i>
                <p>Keuangan</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional, needed for the responsive navbar to work) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
