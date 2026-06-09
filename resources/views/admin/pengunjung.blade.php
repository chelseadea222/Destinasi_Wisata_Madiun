<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengunjung - Wisata Madiun</title>
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
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; background: #f8fafc; }</style>
</head>
<body class="p-4 md:p-8">

<div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
    <div class="p-6 border-b border-slate-100 flex justify-between items-center">
        <h3 class="text-xl font-black text-brandDark uppercase italic tracking-tighter">Data Pengunjung</h3>
        <span class="text-[10px] font-bold text-slate-400 bg-slate-100 px-3 py-1 rounded-full uppercase tracking-widest">
            Total: {{ $pengunjung->count() }} Orang
        </span>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50 text-slate-400 text-[10px] font-black uppercase tracking-widest">
                    <th class="p-4 pl-6">No</th>
                    <th class="p-4">Nama Pengunjung</th>
                    <th class="p-4">Tanggal</th>
                    <th class="p-4">Tujuan</th>
                </tr>
            </thead>
            <tbody class="text-sm">
                @forelse($pengunjung as $index => $p)
                <tr class="border-b border-slate-50 hover:bg-slate-50/50 transition-colors">
                    <td class="p-4 pl-6 text-slate-400 font-bold">{{ $index + 1 }}</td>
                    <td class="p-4 font-bold text-brandDark">{{ $p->nama_pengunjung }}</td>
                    <td class="p-4 text-slate-600">{{ $p->tanggal_kunjungan }}</td>
                    <td class="p-4">
                        <span class="bg-blue-50 text-blue-600 px-3 py-1 rounded-full text-[10px] font-bold uppercase">
                            {{ $p->tujuan }}
                        </span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="p-10 text-center text-slate-400 font-medium italic">
                        Belum ada data pengunjung yang tercatat.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

</body>
</html>