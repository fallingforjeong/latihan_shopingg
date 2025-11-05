<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda | The Jeong's</title>
    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
        
    <!-- == CSS KUSTOM BARU (DISAMAKAN DENGAN LOGIN) == -->
    <style>
        /* --- Import Font --- */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        /* --- Style Body (Gradasi Langit) --- */
        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: linear-gradient(135deg, #a0d8f0 0%, #d0e8f8 100%);
            color: #003366; /* Ubah warna teks default jadi biru tua */
            min-height: 100vh;
        }
        
        /* --- Style Navbar (Tetap) --- */
        .navbar-samsung {
            background-color: #20bdceff;
            border-bottom: 1px solid #eee5e5ff; 
            padding: 0.75rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .navbar-samsung .navbar-brand {
            font-weight: 700;
            font-size: 1.3rem;
            color: #ffffff;
        }
        .btn-outline-white {
            border-radius: 8px;
            font-weight: 600;
            border-color: #ffffff;
            color: #ffffff;
            padding: 0.6rem 1.25rem;
            transition: all 0.2s ease;
        }
        .btn-outline-white:hover {
            background-color: #ffffff;
            color: #000000;
        }
        
        /* --- Style Konten Beranda --- */
        .welcome-section h1 {
            color: #003366; /* Biru tua solid */
        }
        .welcome-section p {
            color: #004a99; /* Biru agak muda */
            font-size: 1.1rem;
        }

        /* Style untuk 3 bubble */
        .feature-box h4 {
            font-weight: 600;
            color: #003366; /* Biru tua solid */
            font-size: 1.5rem;
        }
        .feature-box p {
            color: #555; /* Abu-abu gelap untuk deskripsi */
            font-size: 0.95rem;
        }
        
        /* == ANIMASI DI SINI == */
        .fade-in-content {
            animation: fadeIn 0.7s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px) scale(0.95); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-samsung navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('beranda') }}">The Jeong's</a>
            <div class="d-flex">
                <a href="{{ route('login') }}" class="btn btn-outline-white">Login</a>
            </div>
        </div>
    </nav>
    
    <!-- Tambahkan class 'welcome-section' dan 'fade-in-content' -->
    <div class="container text-center mt-5 pt-5 welcome-section fade-in-content">
        <!-- Hapus class 'text-white' -->
        <h1 class="display-3 fw-bold">WELCOME TO THE JEONG'S</h1>
        <!-- Hapus class 'text-white-50' -->
        <p class="lead">Please Login to View Our Catalog.</p>
        <img
            src="https://cdn-icons-png.flaticon.com/512/891/891462.png"
            width="200" alt="Shopping Icon" class="mt-4" 
            style=""> <!-- HAPUS 'filter' DARI SINI -->
    </div>
        
    <!-- Tambahkan class 'fade-in-content' -->
    <div class="container mt-5 pt-4 mb-5 fade-in-content">
        <div class="row text-center">
            
            <div class="col-md-4 mb-3 feature-box">
                <h4 class="mt-3">🚚 Quick Delivery</h4>
                <!-- Hapus class 'text-white-50' -->
                <p>Just a sec after you check out, the product will sent to your address ASAP.</p>
            </div>
            
            <div class="col-md-4 mb-3 feature-box">
                <h4 class="mt-3">✨ High Quality</h4>
                <p>100% OG, trust us.</p>
            </div>

            <div class="col-md-4 mb-3 feature-box">
                <h4 class="mt-3">🎧 24/7 Ready</h4>
                <p>Contact us whenever you have complain with our product.</p>
            </div>
        </div>
    </div>
</body>
</html>