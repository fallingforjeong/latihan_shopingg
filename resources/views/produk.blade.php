<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Produk | The Jeong's</title>
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
        }
        .btn-submit-custom:hover {
            background-color: #003366; /* Biru lebih gelap */
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 74, 153, 0.4);
        }
        
        /* --- [BARU] Style Halaman Produk --- */
        .page-title {
            color: #003366; /* Biru tua solid */
            font-weight: 700;
        }
        
        /* [BARU] Kartu Produk */
        .card-product-custom {
            background-color: #ffffff;
            color: #333;
            border: none;
            border-radius: 16px; /* Samakan dengan login */
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: all 0.2s ease;
            height: 100%;
            /* Animasi per kartu */
            animation: fadeIn 0.7s ease-out;
        }
        .card-product-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0,0,0,0.12);
        }
        .card-product-custom .card-img-top {
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
            height: 200px;
            object-fit: cover;
        }
        .card-product-custom .card-title {
            color: #003366; /* Biru tua */
            font-weight: 600;
        }
        .card-product-custom .card-price {
            color: #004a99; /* Biru (warna tombol) */
            font-weight: 700;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-samsung navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('beranda') }}">The Jeong's</a>
            <div class="d-flex">
                <a href="{{ route('logout') }}" class="btn btn-outline-white">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5 px-md-4">
        <h2 class="text-center mb-4 page-title fade-in-content">Jeong's Catalogs</h2>
        
        <div class="row">
            @foreach($produk as $item)
            <div class="col-md-4 col-sm-6">
                <div class="card card-product-custom mb-4">
                    <img src="{{ asset($item['foto']) }}" class="card-img-top" alt="{{ $item['nama'] }}" style="height:200px; object-fit:cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $item['nama'] }}</h5>
                        <p class="card-price">{{ $item['harga'] }}</p>
                        <a href="{{ route('produk.detail', $item['id']) }}"
                            class="btn btn-submit-custom">Check Out</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>