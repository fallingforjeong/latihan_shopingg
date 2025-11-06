<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Produk | The Jeong's</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" 
        rel="stylesheet">
        
    <style>
        /* --- Import Font --- */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        /* --- Style Body (Gradasi Langit) --- */
        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: linear-gradient(135deg, #a0d8f0 0%, #d0e8f8 100%);
            color: #003366; /* Teks default biru tua */
            min-height: 100vh;
        }

        /* --- Style Navbar (Dari Login) --- */
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
        
        /* --- Animasi (Dari Login) --- */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px) scale(0.95); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }
        .fade-in-content {
             animation: fadeIn 0.7s ease-out;
        }

        /* --- Tombol Kustom (Dari Login) --- */
        .btn-submit-custom {
            background-color: #004a99; /* Biru tua */
            color: #ffffff;
            font-weight: 600;
            border-radius: 50px; /* Sangat bulat */
            padding: 0.75rem 1.25rem;
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 4px 15px rgba(0, 74, 153, 0.3);
            text-decoration: none; /* [BARU] Hapus garis bawah link */
        }
        .btn-submit-custom:hover {
            background-color: #003366; /* Biru lebih gelap */
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 74, 153, 0.4);
        }
        
        /* --- Tombol Sekunder (Outline) --- */
        .btn-secondary-sky {
            background-color: transparent;
            color: #004a99;
            font-weight: 600;
            border-radius: 50px; /* Sangat bulat */
            padding: 0.75rem 1.25rem;
            transition: all 0.3s ease;
            border: 2px solid #004a99; /* Border biru */
            text-decoration: none; /* [BARU] Hapus garis bawah link */
        }
        .btn-secondary-sky:hover {
            background-color: #004a99; /* Jadi solid */
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 74, 153, 0.2);
        }

        /* --- Style Halaman Detail --- */
        .content-wrapper {
            background-color: #ffffff;
            color: #333; /* Teks gelap untuk konten */
            border-radius: 16px;
            padding: 2.5rem;
            margin-top: 2.5rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            animation: fadeIn 0.7s ease-out;
        }
        .content-wrapper h2 {
            font-weight: 600;
            color: #003366;
        }
        .price-detail {
            color: #004a99; /* Biru (warna tombol) */
            font-weight: 700;
            font-size: 1.75rem;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-samsung navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('produk') }}">The Jeong's</a>
            <div class="d-flex">
                <a href="{{ route('logout') }}" class="btn btn-outline-white">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="content-wrapper fade-in-content">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ asset($detail['foto']) }}" alt="{{ $detail['nama'] }}" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-md-7">
                    <h2>{{ $detail['nama'] }}</h2>
                    <h4 class="price-detail">{{ $detail['harga'] }}</h4>
                    <p class="mt-3">{{ $detail['deskripsi'] }}</p>
                    <div class="mt-4">
                        
                        <a href="{{ route('checkout', $detail['id']) }}" class="btn btn-submit-custom me-2">
                            Konfirmasi Beli
                        </a>
                        
                        <a href="{{ route('produk') }}" class="btn btn-secondary-sky">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </body>
</html>