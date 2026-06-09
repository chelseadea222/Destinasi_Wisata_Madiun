<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Wisata Madiun</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
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
<body class="min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-[850px] bg-white rounded-[2.5rem] shadow-2xl shadow-slate-200 overflow-hidden flex flex-col md:flex-row border border-slate-100">
        
        <div class="hidden md:flex w-[40%] bg-brandDark relative flex-col justify-end p-8 overflow-hidden">
            <img src="https://i.pinimg.com/736x/d5/fa/66/d5fa660d2e02cb8b5f2c3e1489919426.jpg" 
                 class="absolute inset-0 w-full h-full object-cover opacity-20 grayscale" alt="Wisata">
            <div class="absolute inset-0 bg-gradient-to-t from-brandDark via-brandDark/40 to-transparent"></div>
            
            <div class="relative z-10">
                <h2 class="text-white text-xl font-extrabold italic leading-tight mb-2 uppercase tracking-tighter">
                    Wisata<span class="text-brandAccent">Madiun</span>
                </h2>
                <p class="text-slate-400 text-[11px] leading-relaxed italic">
                    Bergabunglah untuk memulai petualangan dan mencatat jejak liburan Anda.
                </p>
            </div>
        </div>

        <div class="w-full md:w-[60%] p-8 sm:p-10 flex flex-col justify-center">
            
            <div class="mb-6">
                <h3 class="text-xl font-black text-brandDark uppercase italic tracking-tighter">Sign Up</h3>
                <p class="text-slate-400 text-[10px] font-bold uppercase tracking-[0.2em] mt-1">Create New Account</p>
            </div>

            <form method="POST" action="/register" class="space-y-3">
                @csrf
                <div class="space-y-1">
                    <label class="block text-brandDark text-[9px] font-black uppercase tracking-widest ml-1">Nama Lengkap</label>
                    <div class="relative group">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-300 group-focus-within:text-brandAccent transition-colors italic">
                            <i class="bi bi-person-fill"></i>
                        </span>
                        <input type="text" name="name" value="{{ old('name') }}" required placeholder="Nama Lengkap"
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl py-2.5 pl-10 pr-4 text-xs font-semibold focus:outline-none focus:border-brandDark focus:ring-4 focus:ring-slate-100 transition-all">
                    </div>
                    @error('name') <span class="text-red-500 text-[10px] italic">{{ $message }}</span> @enderror
                </div>

                <div class="space-y-1">
                    <label class="block text-brandDark text-[9px] font-black uppercase tracking-widest ml-1">Email</label>
                    <div class="relative group">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-300 group-focus-within:text-brandAccent transition-colors italic">
                            <i class="bi bi-envelope-fill"></i>
                        </span>
                        <input type="email" name="email" value="{{ old('email') }}" required placeholder="nama@email.com"
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl py-2.5 pl-10 pr-4 text-xs font-semibold focus:outline-none focus:border-brandDark focus:ring-4 focus:ring-slate-100 transition-all">
                    </div>
                    @error('email') <span class="text-red-500 text-[10px] italic">{{ $message }}</span> @enderror
                </div>

                <div class="space-y-1">
                    <label class="block text-brandDark text-[9px] font-black uppercase tracking-widest ml-1">Password</label>
                    <div class="relative group">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-300 group-focus-within:text-brandAccent transition-colors italic">
                            <i class="bi bi-key-fill"></i>
                        </span>
                        <input type="password" name="password" required placeholder="Minimal 6 karakter"
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl py-2.5 pl-10 pr-4 text-xs font-semibold focus:outline-none focus:border-brandDark focus:ring-4 focus:ring-slate-100 transition-all">
                    </div>
                    @error('password') <span class="text-red-500 text-[10px] italic">{{ $message }}</span> @enderror
                </div>

                <div class="pt-4">
                    <button type="submit" 
                        class="w-full bg-brandDark hover:bg-slate-800 text-white font-black py-3.5 rounded-xl text-[10px] tracking-[0.2em] uppercase italic transition-all flex items-center justify-center gap-2 shadow-lg shadow-slate-200">
                        Daftar Akun <i class="bi bi-arrow-right-short text-lg text-brandAccent"></i>
                    </button>
                </div>
            </form>

            <div class="mt-6 pt-6 border-t border-slate-50 text-center md:text-left">
                <p class="text-slate-400 text-[10px] font-bold uppercase tracking-widest italic">
                    Sudah punya akun? <a href="/login" class="text-brandAccent hover:underline ml-1">Login Sekarang</a>
                </p>
            </div>
        </div>
    </div>

</body>
</html>