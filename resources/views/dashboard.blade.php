<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Wisata Madiun</title>
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

    <aside class="w-64 bg-brandDark text-white flex-col hidden md:flex shadow-xl z-20">
        <div class="h-20 flex items-center justify-center border-b border-slate-800">
            <h2 class="text-2xl font-extrabold italic tracking-tighter">
                Wisata<span class="text-brandAccent">Madiun</span>
            </h2>
        </div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="/dashboard" class="flex items-center gap-3 bg-brandAccent text-white px-4 py-3 rounded-xl font-semibold transition-all shadow-md shadow-brandAccent/30">
                <i class="bi bi-grid-1x2-fill"></i> Dashboard Utama
            </a>
            <a href="/destinasi" class="flex items-center gap-3 text-slate-400 hover:text-white hover:bg-slate-800 px-4 py-3 rounded-xl font-semibold transition-all">
                <i class="bi bi-map-fill"></i> Kelola Destinasi
            </a>
            <a href="/pengunjung" class="flex items-center gap-3 text-slate-400 hover:text-white hover:bg-slate-800 px-4 py-3 rounded-xl font-semibold transition-all">
    <i class="bi bi-people-fill"></i> Data Pengunjung
</a>
        </nav>
        <div class="p-4 border-t border-slate-800">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center gap-2 text-slate-400 hover:text-red-400 hover:bg-slate-800 px-4 py-3 rounded-xl font-bold transition-all">
                    <i class="bi bi-box-arrow-left"></i> Keluar (Logout)
                </button>
            </form>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden relative">
        
        <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-8 shadow-sm z-10">
            <h1 class="text-xl font-bold text-brandDark flex items-center gap-3">
                <i class="bi bi-list md:hidden text-2xl cursor-pointer"></i> Overview
            </h1>
            <div class="flex items-center gap-4">
                <div class="text-right hidden sm:block">
                    <p class="text-sm font-bold text-brandDark">{{ Auth::user()->name ?? 'Administrator' }}</p>
                    <p class="text-[10px] text-emerald-600 font-black uppercase tracking-wider"><i class="bi bi-circle-fill text-[8px]"></i> Online</p>
                </div>
                <div class="h-10 w-10 bg-brandAccent text-white rounded-full flex items-center justify-center font-bold shadow-md">
                    {{ substr(Auth::user()->name ?? 'A', 0, 1) }}
                </div>
            </div>
        </header>

        <div class="flex-1 overflow-y-auto p-6 sm:p-8">
            
            <div class="bg-gradient-to-r from-brandDark to-slate-800 rounded-2xl p-8 mb-8 text-white shadow-lg relative overflow-hidden">
                <div class="absolute -right-10 -top-10 w-40 h-40 bg-brandAccent opacity-20 rounded-full blur-2xl"></div>
                <h2 class="text-2xl font-bold mb-2">Selamat datang kembali, {{ Auth::user()->name ?? 'Admin' }}! 👋</h2>
                <p class="text-slate-300 text-sm max-w-lg">Pantau dan kelola seluruh data destinasi pariwisata Kabupaten Madiun dengan mudah melalui panel admin ini.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm flex items-center gap-4 hover:shadow-md transition-shadow">
                    <div class="w-14 h-14 rounded-full bg-orange-50 text-brandAccent flex items-center justify-center text-2xl shadow-inner">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div>
                        <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest mb-1">Total Destinasi</p>
                        <h3 class="text-2xl font-black text-brandDark">12</h3>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm flex items-center gap-4 hover:shadow-md transition-shadow">
                    <div class="w-14 h-14 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-2xl shadow-inner">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div>
                        <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest mb-1">Total Pengunjung</p>
                        <h3 class="text-2xl font-black text-brandDark">1,402</h3>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm flex items-center gap-4 hover:shadow-md transition-shadow">
                    <div class="w-14 h-14 rounded-full bg-emerald-50 text-emerald-500 flex items-center justify-center text-2xl shadow-inner">
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div>
                        <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest mb-1">Ulasan Masuk</p>
                        <h3 class="text-2xl font-black text-brandDark">856</h3>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="p-6 border-b border-slate-100 flex flex-col sm:flex-row justify-between items-center gap-4">
                    <h3 class="text-lg font-bold text-brandDark">Destinasi Terbaru</h3>
                    <button class="text-xs bg-brandAccent hover:bg-orange-700 text-white font-bold py-2.5 px-5 rounded-xl transition-all shadow-md shadow-brandAccent/30 flex items-center gap-2">
                        <i class="bi bi-plus-lg"></i> Tambah Data
                    </button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 text-slate-400 text-[10px] font-black uppercase tracking-widest border-b border-slate-100">
                                <th class="p-4 pl-6">No</th>
                                <th class="p-4">Nama Destinasi</th>
                                <th class="p-4">Lokasi</th>
                                <th class="p-4">Status</th>
                                <th class="p-4 text-center pr-6">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <tr class="border-b border-slate-50 hover:bg-slate-50/50 transition-colors">
                                <td class="p-4 pl-6 text-slate-400 font-bold">1</td>
                                <td class="p-4 font-bold text-brandDark">Waduk Bening Widas</td>
                                <td class="p-4 text-slate-500">Kec. Saradan</td>
                                <td class="p-4"><span class="bg-emerald-50 text-emerald-600 border border-emerald-200 py-1 px-3 rounded-full text-[10px] font-bold">Buka</span></td>
                                <td class="p-4 text-center pr-6">
                                    <button class="text-blue-500 hover:text-blue-700 mx-1 bg-blue-50 p-2 rounded-lg transition-colors"><i class="bi bi-pencil-square"></i></button>
                                    <button class="text-red-500 hover:text-red-700 mx-1 bg-red-50 p-2 rounded-lg transition-colors"><i class="bi bi-trash-fill"></i></button>
                                </td>
                            </tr>
                            <tr class="border-b border-slate-50 hover:bg-slate-50/50 transition-colors">
                                <td class="p-4 pl-6 text-slate-400 font-bold">2</td>
                                <td class="p-4 font-bold text-brandDark">Gunung Kendil</td>
                                <td class="p-4 text-slate-500">Kec. Wungu</td>
                                <td class="p-4"><span class="bg-emerald-50 text-emerald-600 border border-emerald-200 py-1 px-3 rounded-full text-[10px] font-bold">Buka</span></td>
                                <td class="p-4 text-center pr-6">
                                    <button class="text-blue-500 hover:text-blue-700 mx-1 bg-blue-50 p-2 rounded-lg transition-colors"><i class="bi bi-pencil-square"></i></button>
                                    <button class="text-red-500 hover:text-red-700 mx-1 bg-red-50 p-2 rounded-lg transition-colors"><i class="bi bi-trash-fill"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
</body>
</html>