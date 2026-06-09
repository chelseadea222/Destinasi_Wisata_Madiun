<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pengguna - Wisata Madiun</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { jakarta: ['Plus Jakarta Sans', 'sans-serif'] },
                    colors: { brandDark: '#0f172a', brandAccent: '#E8621A' }
                }
            }
        }
    </script>
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; background: #f8fafc; }</style>
</head>
<body class="flex h-screen overflow-hidden bg-slate-50">

    <aside class="w-64 bg-white border-r border-slate-200 flex-col hidden md:flex z-20">
        <div class="h-20 flex items-center px-6 border-b border-slate-100">
            <h2 class="text-2xl font-extrabold italic tracking-tighter text-brandDark">
                Wisata<span class="text-brandAccent">Madiun</span>
            </h2>
        </div>
        
        <nav class="flex-1 p-4 space-y-2 mt-4">
            <p class="text-[10px] font-black uppercase tracking-widest text-slate-400 mb-3 px-4">Menu Utama</p>
            
            <a href="/user/dashboard" class="flex items-center gap-3 bg-orange-50 text-brandAccent px-4 py-3 rounded-xl font-bold transition-all border border-orange-100">
                <i class="bi bi-house-door-fill text-lg"></i> Beranda
            </a>
            
            <a href="/user/tiket" class="flex items-center gap-3 text-slate-500 hover:text-brandDark hover:bg-slate-100 px-4 py-3 rounded-xl font-semibold transition-all">
                <i class="bi bi-ticket-perforated text-lg"></i> Tiket Saya
            </a>
            
            <a href="/user/homestay" class="flex items-center gap-3 text-slate-500 hover:text-brandDark hover:bg-slate-100 px-4 py-3 rounded-xl font-semibold transition-all">
                <i class="bi bi-house-heart text-lg"></i> Booking Homestay
            </a>
            
            <a href="/user/rute" class="flex items-center gap-3 text-slate-500 hover:text-brandDark hover:bg-slate-100 px-4 py-3 rounded-xl font-semibold transition-all relative">
                <i class="bi bi-signpost-split text-lg"></i> Rute & Navigasi
                <span class="absolute right-4 bg-red-100 text-red-600 text-[8px] font-black uppercase tracking-wider py-0.5 px-2 rounded-full">Baru</span>
            </a>
        </nav>

        <div class="p-4 border-t border-slate-100">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center gap-2 bg-slate-100 text-slate-500 hover:text-red-600 hover:bg-red-50 px-4 py-3 rounded-xl font-bold transition-all border border-transparent hover:border-red-100">
                    <i class="bi bi-box-arrow-left"></i> Keluar
                </button>
            </form>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden relative">
        
        <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-8 shadow-sm z-10">
            <h1 class="text-xl font-bold text-brandDark flex items-center gap-3">
                <i class="bi bi-list md:hidden text-2xl cursor-pointer"></i> Beranda Traveler
            </h1>
            <div class="flex items-center gap-4">
                <button class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-slate-200 transition relative">
                    <i class="bi bi-bell-fill"></i>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border border-white"></span>
                </button>
                <div class="text-right hidden sm:block">
                    <p class="text-sm font-bold text-brandDark">{{ Auth::user()->name ?? 'Guest User' }}</p>
                    <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">Traveler</p>
                </div>
                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name ?? 'G' }}&background=E8621A&color=fff" alt="Avatar" class="h-10 w-10 rounded-full shadow-md border-2 border-white">
            </div>
        </header>

        <div class="flex-1 overflow-y-auto p-6 sm:p-8 bg-slate-50">
            
            <div class="bg-brandDark rounded-3xl p-8 mb-8 text-white shadow-xl relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-brandAccent opacity-20 rounded-full blur-3xl pointer-events-none"></div>
                
                <div class="relative z-10 w-full md:w-2/3">
                    <p class="text-brandAccent text-[10px] font-black uppercase tracking-[0.2em] mb-2">Eksplorasi Dimulai</p>
                    <h2 class="text-3xl font-extrabold mb-3 leading-tight">Mau jalan-jalan ke mana hari ini, {{ Auth::user()->name ?? 'Teman' }}? 🎒</h2>
                    <p class="text-slate-400 text-sm mb-6 max-w-md leading-relaxed">Pesan tiket wisata, booking penginapan nyaman, hingga cari rute tercepat langsung dari satu aplikasi.</p>
                    
                    <div class="flex flex-wrap gap-3">
                        <button class="bg-brandAccent hover:bg-[#c24a10] text-white text-xs font-bold py-3 px-6 rounded-xl transition-all shadow-[0_0_15px_rgba(232,98,26,0.4)] flex items-center gap-2">
                            <i class="bi bi-ticket-detailed"></i> Beli Tiket Sekarang
                        </button>
                    </div>
                </div>
                
                <div class="relative z-10 hidden md:block w-1/3">
                    <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?q=80&w=400&auto=format&fit=crop" class="rounded-2xl border-4 border-slate-700/50 shadow-2xl rotate-3 hover:rotate-0 transition-transform duration-500" alt="Travel">
                </div>
            </div>

            <h3 class="text-lg font-black text-brandDark uppercase italic tracking-tighter mb-4">Layanan Utama</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                
                <a href="#" class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all group flex flex-col justify-between h-full relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-orange-50 rounded-bl-full -z-10 group-hover:bg-brandAccent/10 transition-colors"></div>
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-brandAccent text-white flex items-center justify-center text-2xl shadow-lg shadow-brandAccent/30 mb-5">
                            <i class="bi bi-ticket-perforated"></i>
                        </div>
                        <h4 class="text-xl font-bold text-brandDark mb-2">Beli Tiket Wisata</h4>
                        <p class="text-sm text-slate-500 mb-6">Pesan tiket masuk destinasi tanpa antre. Dapatkan e-ticket langsung di HP Anda.</p>
                    </div>
                    <div class="text-brandAccent text-xs font-bold flex items-center gap-1">
                        Cari Destinasi <i class="bi bi-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </a>

                <a href="#" class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all group flex flex-col justify-between h-full relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-blue-50 rounded-bl-full -z-10 group-hover:bg-blue-100 transition-colors"></div>
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-blue-600 text-white flex items-center justify-center text-2xl shadow-lg shadow-blue-600/30 mb-5">
                            <i class="bi bi-house-heart"></i>
                        </div>
                        <h4 class="text-xl font-bold text-brandDark mb-2">Booking Homestay</h4>
                        <p class="text-sm text-slate-500 mb-6">Cari penginapan nyaman dan estetik di sekitar lokasi wisata dengan harga terjangkau.</p>
                    </div>
                    <div class="text-blue-600 text-xs font-bold flex items-center gap-1">
                        Lihat Penginapan <i class="bi bi-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </a>

                <a href="#" class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all group flex flex-col justify-between h-full relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-emerald-50 rounded-bl-full -z-10 group-hover:bg-emerald-100 transition-colors"></div>
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-emerald-500 text-white flex items-center justify-center text-2xl shadow-lg shadow-emerald-500/30 mb-5">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h4 class="text-xl font-bold text-brandDark mb-2">Rute & Navigasi</h4>
                        <p class="text-sm text-slate-500 mb-6">Dapatkan rute jalan tercepat dari rumah Anda ke lokasi wisata terintegrasi dengan Maps.</p>
                    </div>
                    <div class="text-emerald-500 text-xs font-bold flex items-center gap-1">
                        Buka Peta <i class="bi bi-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </a>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                
                <div class="lg:col-span-2">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-black text-brandDark uppercase italic tracking-tighter">Tiket Aktif Saya</h3>
                        <a href="#" class="text-xs text-brandAccent font-bold hover:underline">Lihat Semua Riwayat</a>
                    </div>
                    
                    <div class="bg-white rounded-3xl border border-slate-100 shadow-sm p-1 flex flex-col sm:flex-row">
                        <div class="w-full sm:w-40 h-40 rounded-2xl overflow-hidden m-2 relative">
                            <img src="https://images.unsplash.com/photo-1542662565-7e4fd6e56d22?q=80&w=400&auto=format&fit=crop" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-brandDark/80 to-transparent"></div>
                            <span class="absolute bottom-2 left-2 bg-white/20 backdrop-blur-sm text-white text-[9px] font-black uppercase tracking-widest py-1 px-2 rounded-lg">Besok</span>
                        </div>
                        
                        <div class="flex-1 p-4 flex flex-col justify-center">
                            <div class="flex justify-between items-start mb-1">
                                <h4 class="text-lg font-bold text-brandDark">Waduk Bening Widas</h4>
                                <span class="bg-green-100 text-green-700 text-[10px] font-bold py-1 px-2 rounded-lg">Lunas</span>
                            </div>
                            <p class="text-xs text-slate-500 mb-3"><i class="bi bi-calendar3"></i> 26 Agustus 2026 • 2 Orang</p>
                            
                            <div class="mt-auto flex flex-wrap gap-2">
                                <button class="bg-slate-100 hover:bg-slate-200 text-brandDark text-xs font-bold py-2 px-4 rounded-xl transition">
                                    <i class="bi bi-qr-code"></i> Tampilkan QR
                                </button>
                                <button class="bg-brandDark hover:bg-slate-800 text-white text-xs font-bold py-2 px-4 rounded-xl transition flex items-center gap-1">
                                    <i class="bi bi-signpost-split"></i> Arahkan Rute
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-1">
                    <h3 class="text-lg font-black text-brandDark uppercase italic tracking-tighter mb-4">Info Sekitar</h3>
                    
                    <div class="bg-gradient-to-br from-blue-500 to-indigo-600 rounded-3xl p-6 text-white shadow-lg mb-4 relative overflow-hidden">
                        <i class="bi bi-cloud-sun absolute -right-4 -top-4 text-7xl text-white/20"></i>
                        <p class="text-[10px] font-black uppercase tracking-widest text-white/70 mb-1">Cuaca Madiun Hari Ini</p>
                        <h4 class="text-4xl font-black mb-1">28°C</h4>
                        <p class="text-sm font-medium">Cerah Berawan, cocok untuk eksplorasi alam.</p>
                    </div>

                    <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="w-12 h-12 bg-red-50 text-red-500 rounded-xl flex items-center justify-center text-xl">
                            <i class="bi bi-tags-fill"></i>
                        </div>
                        <div>
                            <h5 class="text-sm font-bold text-brandDark">Promo Homestay!</h5>
                            <p class="text-xs text-slate-500">Diskon 20% area Madiun Kota.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>
</body>
</html>