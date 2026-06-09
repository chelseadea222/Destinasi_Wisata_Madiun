```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Destinasi - Wisata Madiun</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        jakarta: ['Plus Jakarta Sans', 'sans-serif']
                    },
                    colors: {
                        brandDark: '#0f172a',
                        brandAccent: '#E8621A'
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f8fafc;
        }
    </style>
</head>

<body class="p-8">

<div class="max-w-6xl mx-auto">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h3 class="text-2xl font-black text-brandDark uppercase italic tracking-tighter">
            Kelola Destinasi
        </h3>

        <a href="/dashboard"
           class="bg-slate-200 hover:bg-slate-300 px-4 py-2 rounded-xl font-bold transition">
            ← Kembali
        </a>
    </div>

    <!-- Alert Success -->
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form Tambah Destinasi -->
    <div class="bg-white rounded-2xl shadow p-6 mb-6">

        <h4 class="font-bold text-lg mb-4">
            Tambah Destinasi Baru
        </h4>

        <form action="{{ route('destinasi.store') }}" method="POST">
            @csrf

            <div class="grid md:grid-cols-3 gap-4">

                <div>
                    <label class="block font-semibold mb-2">
                        Nama Destinasi
                    </label>

                    <input
                        type="text"
                        name="nama_destinasi"
                        class="w-full border border-slate-300 rounded-lg p-3"
                        placeholder="Masukkan nama destinasi"
                        required>
                </div>

                <div>
                    <label class="block font-semibold mb-2">
                        Lokasi
                    </label>

                    <input
                        type="text"
                        name="lokasi"
                        class="w-full border border-slate-300 rounded-lg p-3"
                        placeholder="Masukkan lokasi"
                        required>
                </div>

                <div>
                    <label class="block font-semibold mb-2">
                        Status
                    </label>

                    <select
                        name="status"
                        class="w-full border border-slate-300 rounded-lg p-3">

                        <option value="Aktif">
                            Aktif
                        </option>

                        <option value="Nonaktif">
                            Nonaktif
                        </option>

                    </select>
                </div>

            </div>

            <button
                type="submit"
                class="mt-4 bg-brandAccent hover:opacity-90 text-white px-5 py-3 rounded-xl font-bold">
                <i class="bi bi-plus-circle"></i>
                Tambah Destinasi
            </button>
        </form>
    </div>

    <!-- Tabel Destinasi -->
    <div class="bg-white rounded-2xl shadow overflow-hidden">

        <table class="w-full text-left">

            <thead>
                <tr class="bg-slate-100 text-slate-600 uppercase text-sm">
                    <th class="p-4">Nama Destinasi</th>
                    <th class="p-4">Lokasi</th>
                    <th class="p-4">Status</th>
                    <th class="p-4 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse($destinasi as $item)

                <tr class="border-b">

                    <td class="p-4 font-semibold">
                        {{ $item->nama_destinasi }}
                    </td>

                    <td class="p-4">
                        {{ $item->lokasi }}
                    </td>

                    <td class="p-4">
                        @if($item->status == 'Aktif')
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">
                                Aktif
                            </span>
                        @else
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-bold">
                                Nonaktif
                            </span>
                        @endif
                    </td>

                    <td class="p-4">

                        <div class="flex justify-center gap-3">

                            <a href="/destinasi/{{ $item->id }}/edit"
                               class="text-blue-600 font-bold hover:underline">
                                Edit
                            </a>

                            <form action="/destinasi/{{ $item->id }}" method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="text-red-500 font-bold hover:underline">
                                    Hapus
                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="4" class="p-6 text-center text-slate-500">
                        Belum ada data destinasi
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>
</html>
```
