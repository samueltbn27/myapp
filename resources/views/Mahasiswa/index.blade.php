<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pemrograman Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mata Kuliah</a>
                    </li>
                </ul>
                <button class="btn btn-outline-light" onclick="logout()">Logout</button>
            </div>
        </div>
    </nav>

    <!-- Konten CRUD Mahasiswa -->
    <div class="container mt-5">
        <h2 class="text-center">CRUD Mahasiswa</h2>

        <!-- Tambah Mahasiswa -->
        <button class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#addMahasiswaModal">Tambah
            Mahasiswa</button>

        <!-- Tabel Daftar Mahasiswa -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data -->
                @foreach ($data as $id => $s)
                    <tr>
                        <td>{{ $id + 1 }}</td>
                        <td>{{ $s->nim }}</td>
                        <td>{{ $s->nama }}</td>
                        <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                data-bs-target="#editMahasiswaModal{{ $s->id }}">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah Mahasiswa -->
    <div class="modal fade" id="addMahasiswaModal" tabindex="-1" aria-labelledby="addMahasiswaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMahasiswaModalLabel">Tambah Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Mahasiswa -->
    <div class="modal fade" id="editMahasiswaModal" tabindex="-1" aria-labelledby="editMahasiswaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editMahasiswaModalLabel">Edit Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="edit_nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="edit_nim" placeholder="Masukkan NIM">
                        </div>
                        <div class="mb-3">
                            <label for="edit_nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="edit_nama" placeholder="Masukkan Nama">
                        </div>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Logout Function -->
    <script>
        function logout() {
            alert('Anda berhasil logout!');
            // Redirect to login page (contoh: /login)
            window.location.href = '/login';
        }
    </script>
</body>

</html>
