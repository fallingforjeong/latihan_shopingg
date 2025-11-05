<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | The Jeong's</title>
    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <!-- Bootstrap Icons (Masih kita pakai untuk jaga-jaga) -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" 
        rel="stylesheet">

    <!-- == CSS KUSTOM BARU == -->
    <style>
        /* --- Import Font (Opsional tapi bikin bagus) --- */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        /* --- Style Navbar (Tetap dari sebelumnya) --- */
        body {
            /* Ganti font dan background jadi gradasi langit */
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: linear-gradient(135deg, #a0d8f0 0%, #d0e8f8 100%);
            color: #ffffff;
            /* Pastikan konten mengisi seluruh tinggi halaman */
            min-height: 100vh;
        }
        .navbar-samsung {
            background-color: #20bdceff;
            border-bottom: 1px solid #eee5e5ff; 
            padding: 0.75rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); /* Tambah shadow tipis */
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
        
        /* --- Style Kartu Login (Glassmorphism) --- */
        .card-login-custom {
            /* Efek Kaca */
            background-color: rgba(255, 255, 255, 0.4); /* Transparan */
            backdrop-filter: blur(15px); /* Efek blur di belakangnya */
            border: 1px solid rgba(255, 255, 255, 0.5); /* Border tipis */
            
            color: #003366; /* Teks gelap (biru tua) */
            border-radius: 16px; /* Lebih bulat */
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            
            /* == ANIMASI DI SINI == */
            animation: fadeIn 0.7s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px) scale(0.95); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }

        .card-login-custom .card-header {
            background-color: transparent;
            border-bottom: 0;
            color: #003366; /* Teks biru tua */
            font-weight: 700;
            font-size: 1.75rem; /* Lebih besar */
            padding-top: 2rem; /* Jarak atas */
        }
        
        /* Input field kustom */
        .form-control-glass {
            background-color: #ffffff;
            border: none;
            border-radius: 50px; /* Sangat bulat */
            padding: 0.75rem 1.25rem;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .form-control-glass::placeholder {
            color: #aaa;
        }
        
        /* Tombol Login Kustom (Biru Tua) */
        .btn-submit-custom {
            background-color: #004a99; /* Biru tua */
            color: #ffffff;
            font-weight: 600;
            border-radius: 50px; /* Sangat bulat */
            padding: 0.75rem 1.25rem;
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 4px 15px rgba(0, 74, 153, 0.3);
        }
        .btn-submit-custom:hover {
            background-color: #003366; /* Biru lebih gelap */
            color: #ffffff;
            transform: translateY(-2px); /* Animasi tombol naik */
            box-shadow: 0 6px 20px rgba(0, 74, 153, 0.4);
        }
        
        /* Link Lupa Password */
        .forgot-password-link {
            color: #004a99;
            font-size: 0.9rem;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .forgot-password-link:hover {
            color: #003366;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navbar (dibuat sama seperti beranda) -->
    <nav class="navbar navbar-expand-lg navbar-samsung navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('beranda') }}">The Jeong's</a>
            <div class="d-flex">
                <a href="{{ route('login') }}" class="btn btn-outline-white">Login</a>
            </div>
        </div>
    </nav>

    <!-- Konten Login -->
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <!-- Gunakan class card-login-custom -->
                <div class="card card-login-custom">
                    <div class="card-header text-center">
                        <!-- == EMOJI DI SINI == -->
                        <h4>👤 User Login</h4>
                    </div>
                    <div class="card-body p-4">
                        @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <form action="{{ route('login.process') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <!-- Hapus <label>, ganti kelas input -->
                                <input type="text" name="username" class="form-control form-control-glass"
                                    placeholder="Username" required>
                            </div>
                            <div class="mb-3">
                                <!-- Hapus <label>, ganti kelas input -->
                                <input type="password" name="password" class="form-control form-control-glass"
                                    placeholder="Password" required>
                            </div>
                            
                            <!-- Link Lupa Password (dari template) -->
                            <div class="text-center mb-3">
                                <a href="#" class="forgot-password-link">Forgot Password?</a>
                            </div>
                            
                            <div class="d-grid mt-4">
                                <!-- Gunakan class btn-submit-custom -->
                                <button type="submit" class="btn btn-submit-custom">Login</button>
                            </div>
                        </form>
                    </div>
                    <!-- Footer Info (tetap ada) -->
                    <div class="card-footer text-center bg-transparent border-0 pb-4">
                        <small class="text-muted">
                            username: <b>winter</b>
                            dan
                            password:
                            <b>010101</b></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>