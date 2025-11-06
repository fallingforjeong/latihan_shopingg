<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran | The Jeong's</title>
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

        /* --- Style Navbar (Warna Teal) --- */
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
        
        /* --- Animasi --- */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px) scale(0.95); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }
        .fade-in-content {
             animation: fadeIn 0.7s ease-out;
        }
        @keyframes fadeInText {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* --- Tombol Sekunder (Outline Teal) --- */
        .btn-secondary-sky {
            background-color: transparent;
            color: #20bdceff; /* UBAH WARNA */
            font-weight: 600;
            border-radius: 50px; /* Sangat bulat */
            padding: 0.75rem 1.25rem;
            transition: all 0.3s ease;
            border: 2px solid #20bdceff; /* UBAH WARNA */
            text-decoration: none;
        }
        .btn-secondary-sky:hover {
            background-color: #20bdceff; /* UBAH WARNA */
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(32,189,206, 0.2);
        }

        /* --- Tombol Kustom (Solid Teal) --- */
        .btn-submit-custom {
            background-color: #20bdceff; /* UBAH WARNA */
            color: #ffffff;
            font-weight: 600;
            border-radius: 50px; /* Sangat bulat */
            padding: 0.75rem 1.25rem;
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 4px 15px rgba(32,189,206, 0.3);
        }
        .btn-submit-custom:hover {
            background-color: #1aa7b0; /* UBAH WARNA (Lebih gelap) */
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(32,189,206, 0.4);
        }
        .btn-submit-custom:disabled {
            background-color: #20bdceff; /* UBAH WARNA */
            opacity: 0.7;
        }

        /* --- Style Halaman Checkout --- */
        .content-wrapper {
            background-color: #ffffff;
            color: #333; /* Teks gelap untuk konten */
            border-radius: 16px;
            padding: 2.5rem;
            margin-top: 2.5rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            animation: fadeIn 0.7s ease-out;
        }
        .content-wrapper h2, .content-wrapper h4 {
            font-weight: 600;
            color: #003366;
        }
        .price-detail {
            color: #20bdceff; /* UBAH WARNA */
            font-weight: 700;
            font-size: 1.75rem;
        }
        
        /* Tombol Pilihan Pembayaran */
        .payment-option {
            display: block;
            width: 100%;
            padding: 1.25rem 1.5rem;
            margin-bottom: 1rem;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            text-decoration: none;
            color: #333;
            transition: all 0.2s ease;
            cursor: pointer;
        }
        .payment-option:hover {
            border-color: #20bdceff; /* UBAH WARNA */
            background-color: #f8fcfd;
            box-shadow: 0 4px 15px rgba(32,189,206, 0.1);
            transform: translateY(-3px);
        }
        .payment-option .icon {
            font-size: 2rem;
            margin-right: 1rem;
            color: #20bdceff; /* UBAH WARNA */
        }
        .payment-option .title {
            font-weight: 600;
            font-size: 1.1rem;
            color: #003366; /* Tetap biru tua biar kebaca */
        }
        .payment-option .description {
            font-size: 0.9rem;
            color: #555;
        }
        
        /* Input Email di Modal */
        .form-control-modal {
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 50px;
            padding: 0.75rem 1.25rem;
        }
        .form-control-modal:focus {
            background-color: #fff;
            border-color: #20bdceff; /* UBAH WARNA */
            box-shadow: 0 0 0 3px rgba(32,189,206,0.2); /* UBAH WARNA */
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
        <div classs="row justify-content-center">
            <div class="col-md-10 mx-auto">
                
                <div class="content-wrapper fade-in-content">
                    
                    <div class="text-center">
                        <h4>Anda akan membeli:</h4>
                        <h2>{{ $detail['nama'] }}</h2>
                        <h4 class="price-detail">{{ $detail['harga'] }}</h4>
                    </div>
                    
                    <hr class="my-4">
                    
                    <h4 class="text-center mb-4">Pilih Metode Pembayaran</h4>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <button class="payment-option d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#confirmOrderModal">
                                <i class="bi bi-bank icon"></i>
                                <div>
                                    <span class="title">Bank Transfer (BCA)</span>
                                    <span class="description d-block">Bayar ke Virtual Account BCA</span>
                                </div>
                            </button>
                        </div>
                        
                        <div class="col-md-6">
                            <button class="payment-option d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#confirmOrderModal">
                                <i class="bi bi-paypal icon"></i>
                                <div>
                                    <span class="title">PayPal</span>
                                    <span class="description d-block">Bayar aman menggunakan akun PayPal</span>
                                </div>
                            </button>
                        </div>
                    </div>
                    
                    <div class="text-center mt-4">
                        <a href="{{ route('produk.detail', $detail['id']) }}" class="btn btn-secondary-sky">
                            Kembali ke Detail
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="modal fade" id="confirmOrderModal" tabindex="-1" aria-labelledby="confirmOrderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            
            <div class="modal-content" style="border-radius: 16px; border: none; overflow: hidden;">
                
                <div class="modal-header text-center" style="background-color: #20bdceff; color: white; border-bottom: none; position: relative;">
                    <div class="w-100 py-3">
                        <i class="bi bi-envelope-open-fill" style="font-size: 3rem;"></i>
                        <h4 class="modal-title w-100 mt-2" id="confirmOrderModalLabel">Confirm Order</h4>
                    </div>
                    <div style="position: absolute; bottom: -20px; left: 50%; transform: translateX(-50%); width: 0; height: 0; border-left: 20px solid transparent; border-right: 20px solid transparent; border-top: 20px solid #20bdceff;"></div>
                </div>

                <div class="modal-body p-4" style="padding-top: 2.5rem !important;">
                    
                    <div id="modal-form-content">
                        <p class="text-center text-muted small">
                            Enter your email to receive the invoice and payment instructions.
                        </p>
                        <form id="email-confirm-form" class="mt-4">
                            <div class="mb-3">
                                <input type="email" class="form-control form-control-modal" placeholder="Enter email address" required>
                            </div>
                            <button type="submit" class="btn btn-submit-custom w-100" id="btn-send-invoice">
                                SEND
                            </button>
                        </form>
                    </div>

                    <div id="modal-success-content" style="display: none; text-align: center; min-height: 150px;" class="d-flex flex-column justify-content-center align-items-center">
                        <h5 class="text-success-emphasis" style="animation: fadeInText 0.5s ease;">✅ Invoice Sent!</h5>
                        <p class="text-muted" style="animation: fadeInText 0.5s ease 0.2s; animation-fill-mode: backwards;">
                            Invoice sent to your email, please check your email to continue the transaction!
                        </p>
                    </div>
                    
                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-secondary-sky" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        const confirmModal = document.getElementById('confirmOrderModal');
        const emailForm = document.getElementById('email-confirm-form');
        const sendButton = document.getElementById('btn-send-invoice');
        const formContent = document.getElementById('modal-form-content');
        const successContent = document.getElementById('modal-success-content');

        // 1. Logika saat klik "SEND"
        emailForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Stop form dari reload halaman
            
            // Ubah tombol jadi loading
            sendButton.disabled = true;
            sendButton.innerHTML = `<span class="spinner-border spinner-border-sm"></span> Sending...`;

            // Simulasi kirim email (1.5 detik)
            setTimeout(() => {
                // INI TRANSISINYA:
                formContent.style.display = 'none';    // Sembunyikan form email
                successContent.style.display = 'flex'; // Tampilkan pesan sukses
            }, 1500);
        });

        // 2. Logika untuk RESET modal saat ditutup
        confirmModal.addEventListener('hidden.bs.modal', event => {
            // Kembalikan tombol
            sendButton.disabled = false;
            sendButton.innerHTML = 'SEND';
            
            // Kembalikan tampilan ke form email
            successContent.style.display = 'none'; // Sembunyikan sukses
            formContent.style.display = 'block';   // Tampilkan form email
            
            // Bersihkan form
            emailForm.reset();
        });
    </script>
    
</body>
</html>