<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Destinasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <div class="card shadow-sm">
                    <div class="card-header bg-warning text-dark fw-bold">
                        <h5 class="mb-0">Edit Data Destinasi</h5>
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('destinasi.update', $destinasi->id) }}" method="POST">
                            
                            @csrf 
                            @method('PUT') <div class="mb-3">
                                <label for="nama_destinasi" class="form-label">Nama Destinasi</label>
                                <input type="text" class="form-control @error('nama_destinasi') is-invalid @enderror" id="nama_destinasi" name="nama_destinasi" value="{{ old('nama_destinasi', $destinasi->nama_destinasi) }}" required>
                                
                                @error('nama_destinasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="lokasi" class="form-label">Lokasi</label>
                                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" value="{{ old('lokasi', $destinasi->lokasi) }}" required>
                                
                                @error('lokasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="status" class="form-label">Status Operasional</label>
                                <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                                    <option value="Aktif" {{ old('status', $destinasi->status) == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                    <option value="Nonaktif" {{ old('status', $destinasi->status) == 'Nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                                </select>

                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('destinasi.index') }}" class="btn btn-outline-secondary">Batal / Kembali</a>
                                <button type="submit" class="btn btn-warning fw-bold">Update Data</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>