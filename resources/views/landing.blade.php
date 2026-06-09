<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Madiun - Dark Edition</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    
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
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        html { scroll-behavior: smooth; }
        
        /* Efek grid pattern tipis di background */
        .bg-grid-pattern {
            background-image: linear-gradient(to right, rgba(255,255,255,0.03) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(255,255,255,0.03) 1px, transparent 1px);
            background-size: 40px 40px;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col bg-brandDark text-slate-200 bg-grid-pattern selection:bg-brandAccent selection:text-white">

    <nav class="bg-brandDark/80 backdrop-blur-md border-b border-slate-800 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="/" class="text-xl font-extrabold italic uppercase tracking-tighter text-white">
                Wisata<span class="text-brandAccent">Madiun</span>
            </a>

            <div class="flex items-center gap-5">
                @auth
                    <div class="hidden md:block mr-2 text-right">
                        <p class="text-[9px] font-black uppercase tracking-widest text-brandAccent">Active Session</p>
                        <p class="text-xs font-bold text-white">{{ Auth::user()->name }}</p>
                    </div>
                    <a href="/dashboard" class="bg-white hover:bg-slate-200 text-brandDark font-black py-2.5 px-6 rounded-lg text-[10px] tracking-[0.2em] uppercase italic transition-all flex items-center gap-2 shadow-[0_0_15px_rgba(255,255,255,0.2)]">
                        Dashboard <i class="bi bi-arrow-right-short text-brandAccent text-lg leading-none"></i>
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <header class="relative w-full overflow-hidden flex items-center justify-center min-h-[85vh]">
        
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div class="absolute top-[20%] left-[50%] -translate-x-1/2 w-[60%] h-[60%] bg-brandAccent/15 rounded-full blur-[120px]"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 py-20 flex flex-col items-center text-center">
            
            <div class="inline-flex items-center gap-2 border border-slate-700 bg-slate-800/80 backdrop-blur-sm text-slate-300 text-[9px] font-black uppercase tracking-[0.2em] py-1.5 px-4 rounded-full mb-8 shadow-lg">
                <span class="w-2 h-2 rounded-full bg-brandAccent animate-pulse shadow-[0_0_8px_#E8621A]"></span>
                Sistem Informasi Terpadu
            </div>
            
            <h1 class="text-white text-5xl sm:text-6xl lg:text-7xl font-extrabold italic uppercase tracking-tighter leading-[0.9] mb-8">
                Jelajahi <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brandAccent to-orange-400">Pesona</span> 
                Madiun
            </h1>
            
            <p class="text-slate-400 text-sm md:text-base font-medium italic max-w-2xl mx-auto mb-12 leading-relaxed">
                Pusat data pariwisata tepercaya. Temukan berbagai destinasi liburan, kuliner legendaris, dan spot healing terbaik di Kota Pendekar melalui satu akses terpadu.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-5">
                
                @guest
                <a href="/login" class="bg-transparent border border-slate-600 text-slate-300 hover:bg-brandAccent hover:border-brandAccent hover:text-white active:bg-[#d45513] active:border-[#d45513] font-black py-4 px-8 rounded-xl text-[11px] tracking-[0.2em] uppercase italic transition-all hover:-translate-y-1 flex items-center gap-2">
                    Login <i class="bi bi-box-arrow-in-right text-lg leading-none"></i>
                </a>
                
                <a href="/register" class="bg-transparent border border-slate-600 text-slate-300 hover:bg-brandAccent hover:border-brandAccent hover:text-white active:bg-[#d45513] active:border-[#d45513] font-black py-4 px-8 rounded-xl text-[11px] tracking-[0.2em] uppercase italic transition-all hover:-translate-y-1 flex items-center gap-2">
                    Register <i class="bi bi-person-plus text-lg leading-none"></i>
                </a>
                @endguest

                @auth
                <a href="#destinasi" class="bg-brandAccent hover:bg-[#d45513] text-white font-black py-4 px-8 rounded-xl text-[11px] tracking-[0.2em] uppercase italic transition-all flex items-center gap-2 shadow-[0_0_20px_rgba(232,98,26,0.2)] hover:-translate-y-1">
                    Mulai Eksplorasi <i class="bi bi-arrow-down-short text-lg leading-none"></i>
                </a>
                @endauth
                
            </div>
        </div>
    </header>

    <section id="destinasi" class="py-24 bg-brandDark/50 backdrop-blur-md border-t border-slate-800 relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            
            <div class="mb-14 flex flex-col md:flex-row md:items-end justify-between gap-6 border-b border-slate-800 pb-6">
                <div>
                    <h3 class="text-3xl lg:text-4xl font-black text-white uppercase italic tracking-tighter">Popular Places</h3>
                    <p class="text-brandAccent text-[11px] font-bold uppercase tracking-[0.2em] mt-2">Database Destinasi Madiun</p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                
                <div class="flex flex-col sm:flex-row bg-slate-900 border border-slate-800 hover:border-slate-600 rounded-3xl overflow-hidden group transition-all duration-300 shadow-xl">
                    <div class="w-full sm:w-48 h-48 sm:h-auto overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1542662565-7e4fd6e56d22?q=80&w=500&auto=format&fit=crop" class="w-full h-full object-cover grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500">
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-center">
                        <div class="text-brandAccent text-[9px] font-black uppercase tracking-[0.2em] mb-2">Kategori: Alam</div>
                        <h4 class="text-xl font-extrabold italic text-white uppercase tracking-tight mb-2">Waduk Bening</h4>
                        <p class="text-xs text-slate-400 mb-4 line-clamp-2">Pemandangan waduk yang asri dengan latar belakang hutan jati, cocok untuk rekreasi keluarga.</p>
                        <a href="/login" class="mt-auto text-slate-300 text-[10px] font-black uppercase tracking-[0.2em] italic flex items-center gap-1 hover:text-white transition-colors">
                            Akses Detail <i class="bi bi-box-arrow-in-up-right text-brandAccent"></i>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row bg-slate-900 border border-slate-800 hover:border-slate-600 rounded-3xl overflow-hidden group transition-all duration-300 shadow-xl">
                    <div class="w-full sm:w-48 h-48 sm:h-auto overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?q=80&w=500&auto=format&fit=crop" class="w-full h-full object-cover grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500">
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-center">
                        <div class="text-brandAccent text-[9px] font-black uppercase tracking-[0.2em] mb-2">Kategori: Sejarah</div>
                        <h4 class="text-xl font-extrabold italic text-white uppercase tracking-tight mb-2">Monumen Kresek</h4>
                        <p class="text-xs text-slate-400 mb-4 line-clamp-2">Monumen bersejarah yang menjadi saksi bisu peristiwa penting, dikelilingi taman tertata rapi.</p>
                        <a href="/login" class="mt-auto text-slate-300 text-[10px] font-black uppercase tracking-[0.2em] italic flex items-center gap-1 hover:text-white transition-colors">
                            Akses Detail <i class="bi bi-box-arrow-in-up-right text-brandAccent"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-brandDark border-t border-slate-800 py-10 mt-auto relative z-10">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <div>
                <h2 class="text-white text-lg font-extrabold italic uppercase tracking-tighter">
                    Wisata<span class="text-brandAccent">Madiun</span>
                </h2>
                <p class="text-slate-500 text-[10px] font-bold uppercase tracking-[0.2em] mt-1">Sistem Informasi Destinasi Terpadu</p>
            </div>
            <p class="text-slate-500 text-[10px] font-black uppercase tracking-[0.2em]">
                &copy; {{ date('Y') }} All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>