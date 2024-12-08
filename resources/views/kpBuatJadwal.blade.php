<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Daftar Mahasiswa - SIPENA UNDIP </title>
  @vite('resources/css/app.css')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-[#AEC0F1] h-screen font-sans">

  <x-navbar></x-navbar>
<div class="flex pt-12"> 
  <x-side-bar-kp></x-side-bar-kp>
  <!--Main Content-->
  <div class="w-full p-6">
    <h1 class="text-2xl font-bold mb-4">Buat Jadwal</h1>
    <div class="flex justify-end items-center mb-4">
        <!-- Button to open modal -->
        <button id="openModal" class="bg-orange-600 text-white font-semibold px-5 py-3 rounded-lg">+ Tambah Jadwal Kuliah</button>
            </div>

            <div class="mx-12 mt-6">
                <table class="w-full text-center font-bold bg-white rounded-2xl">
                    <thead class=" border-b-2">
                        <tr>
                            <th class="w-[10%] py-3">Kode MK</th>
                            <th class="w-[20%] py-3">Nama MK</th>
                            <th class="w-[5%] py-3">Kelas</th>
                            <th class="w-[10%] py-3">Nama Ruang</th>
                            <th class="w-[5%] py-3">SKS</th>
                            <th class="w-[10%] py-3">Hari</th>
                            <th class="w-[10%] py-3">Waktu Mulai</th>
                            <th class="w-[10%] py-3">Waktu Selesai</th>
                            <th class="w-[5%] py-3">Kuota</th>
                            <th class="w-[10%] py-3">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwalkuliahs as $jadwal)
                            <tr>
                                <td class="py-2">{{ $jadwal->kode_mk}} </td>
                                <td class="py-2">{{ $jadwal->nama_mk}} </td>
                                <td class="py-2">{{ $jadwal->kelas}} </td>
                                <td class="py-2">{{ $jadwal->nama_ruang}} </td>
                                <td class="py-2">{{ $jadwal->sks}} </td>
                                <td class="py-2">{{ $jadwal->hari}} </td>
                                <td class="py-2">{{ $jadwal->wkt_mulai}} </td>
                                <td class="py-2">{{ $jadwal->wkt_selesai}} </td>
                                <td class="py-2">{{ $jadwal->kuota}} </td>
                                <td class="py-3">
                                    <!-- Button untuk Edit -->

                                    <!-- Button untuk Hapus -->
                                    <form action="{{ route('jadwalkuliah.destroy', $jadwal->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal for Adding Jadwal -->
    <div id="modal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white w-96 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Tambah Jadwal Kuliah</h2>
            <form action="{{ route('jadwalkuliah.store') }}" method="POST">
                @csrf
                <!-- Input Fields -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-4">
                        <label for="kode_mk" class="block text-sm font-medium text-gray-700">Kode Mata Kuliah</label>
                        <select id="kode_mk" name="kode_mk" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
                            <option value="" disabled selected>Pilih Kode</option>
                                @foreach ($matkuls as $mk)
                                        <option value="{{ $mk->kode_mk }}" data-nama="{{ $mk->nama_mk }}">{{ $mk->kode_mk }}</option>
                                @endforeach
                            </select>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="nama_mk" class="block text-sm font-medium text-gray-700">Nama Mata Kuliah</label>
                        <input type="text" id="nama_mk" name="nama_mk" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" readonly>
                    </div>
                    <div class="mb-4">
                        <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                        <select id="kelas" name="kelas" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
                            <option value="" disabled selected>Pilih Kelas</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="4">D</option>
                            <option value="5">E</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="nama_ruang" class="block text-sm font-medium text-gray-700">Nama Ruangan</label>
                        <select id="nama_ruang" name="nama_ruang" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
                            <option value="" disabled selected>Pilih Ruangan</option>
                            @foreach ($approvedRuangs as $ruang)
                                @if ($ruang->prodi === 'Informatika')  <!-- Menambahkan kondisi untuk prodi Informatika -->
                                    <option value="{{ $ruang->no_ruang }}">{{ $ruang->no_ruang }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="sks" class="block text-sm font-medium text-gray-700">SKS</label>
                        <input type="number" id="sks" name="sks" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" min="1" max="6" required>
                    </div>
                    <div class="mb-4">
                        <label for="sifat" class="block text-sm font-medium text-gray-700">Sifat Mata Kuliah</label>
                        <select id="sifat" name="sifat" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
                            <option value="" disabled selected>Pilih Sifat</option>
                            <option value="Wajib">Wajib</option>
                            <option value="Pilihan">Pilihan</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="hari" class="block text-sm font-medium text-gray-700">Hari</label>
                        <select id="hari" name="hari" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
                            <option value="" disabled selected>Pilih Hari</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="wkt_mulai" class="block text-sm font-medium text-gray-700">Waktu Mulai</label>
                        <input type="time" id="wkt_mulai" name="wkt_mulai" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="wkt_selesai" class="block text-sm font-medium text-gray-700">Waktu Selesai</label>
                        <input type="time" id="wkt_selesai" name="wkt_selesai" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="kuota" class="block text-sm font-medium text-gray-700">Kuota</label>
                        <input type="number" id="kuota" name="kuota" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" min="1" max="100" required>
                    </div>
                </div>

                <div class="flex justify-end space-x-4 mt-4">
                    <button type="button" id="closeModal" class="bg-gray-400 text-white px-4 py-2 rounded-lg">Batal</button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Simpan</button>
                </div>

                <form action="{{ route('jadwalkuliah.destroy', $jadwal->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg">Hapus</button>
                </form>
            </form>
            
        </div>
    </div>

    <!-- JavaScript to handle modal visibility -->
    <script>
        // Get modal element
        const modal = document.getElementById('modal');
        const openModalButton = document.getElementById('openModal');
        const closeModalButton = document.getElementById('closeModal');

        // Open modal when the button is clicked
        openModalButton.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        // Close modal when the close button is clicked
        closeModalButton.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        // Close modal if the user clicks outside the modal content
        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    </script>
    </div>

    <br>
    </div>
  </div>
</div>

<script>
document.getElementById('kode_mk').addEventListener('change', function() {
    var selectedOption = this.options[this.selectedIndex];
    var namaMk = selectedOption.getAttribute('data-nama');  // Ambil nama mata kuliah
    document.getElementById('nama_mk').value = namaMk;  // Isi input nama mata kuliah
});
</script>

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            showConfirmButton: true,
            timer: 3000
        });
    </script>
@endif  

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: '{{ session('error') }}',
            showConfirmButton: true,
            timer: 3000
        });
    </script>
@endif  

@section('content')
    <!-- Form input ruang dan prodi -->
    <form method="POST" action="{{ route('ruang.store') }}">
        @csrf
        <label for="no_ruang">No Ruang:</label>
        <input type="text" name="no_ruang" id="no_ruang">
        
        <label for="prodi">Prodi:</label>
        <input type="text" name="prodi" id="prodi">
        
        <button type="submit">Submit</button>
    </form>

    <!-- Display alert messages -->
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ruangInput = document.getElementById('no_ruang'); // ID input ruang
            const prodiInput = document.getElementById('prodi'); // ID input prodi
            const existingData = @json($ruang); // Mengambil data ruang yang ada dari controller
            
            ruangInput.addEventListener('blur', function () {
                const noRuang = ruangInput.value;
                const prodi = prodiInput.value;

                // Cek apakah no_ruang dan prodi sudah ada dalam database
                const existingRoom = existingData.find(room => room.no_ruang === noRuang && room.prodi === prodi);
                
                if (existingRoom) {
                    alert('Ruang dan Prodi ini sudah ada!');
                    // Reset atau mencegah pengiriman form
                    ruangInput.value = ''; // Clear input ruang
                    prodiInput.value = ''; // Clear input prodi
                }
            });
        });
    </script>
    
@endsection
        
        
        