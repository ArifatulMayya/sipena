<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Daftar Mahasiswa - SIPENA UNDIP </title>
  @vite('resources/css/app.css')
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
                            <th class="w-[10%] py-3">Kelas</th>
                            <th class="w-[15%] py-3">Nama Ruang</th>
                            <th class="w-[5%] py-3">SKS</th>
                            <th class="w-[10%] py-3">Hari</th>
                            <th class="w-[10%] py-3">Waktu Mulai</th>
                            <th class="w-[10%] py-3">Waktu Selesai</th>
                            <th class="w-[10%] py-3">Kuota</th>
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
                            <option value="" disabled selected>Pilih Kode Mata Kuliah</option>
                            <!-- Options akan diisi melalui JavaScript -->
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
                            <option value="2">D</option>
                            <option value="3">E</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="nama_ruang" class="block text-sm font-medium text-gray-700">Nama Ruangan</label>
                        <select id="nama_ruang" name="nama_ruang" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
                            <option value="" disabled selected>Pilih Ruangan</option>
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
                        <input type="time" id="jam" name="jam" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="wkt_selesai" class="block text-sm font-medium text-gray-700">Waktu Selesai</label>
                        <input type="time" id="jam" name="jam" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
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
    // Data mata kuliah sesuai dengan seeder
    const mataKuliahData = [
        { kode_mk: 'PAIK6102', nama_mk: 'Dasar Pemrograman' },
        { kode_mk: 'PAIK6105', nama_mk: 'Struktur Diskrit' },
        { kode_mk: 'PAIK6104', nama_mk: 'Logika Informatika' },
        { kode_mk: 'PAIK6101', nama_mk: 'Matematika I' },
        { kode_mk: 'PAIK6103', nama_mk: 'Dasar Sistem' },
        { kode_mk: 'UUW00007', nama_mk: 'Bahasa Inggris' },
        { kode_mk: 'UUW00005', nama_mk: 'Olahraga' },
        { kode_mk: 'UUW00003', nama_mk: 'Pancasila dan Kewarganegaraan' },
        { kode_mk: 'UUW00004', nama_mk: 'Bahasa Indonesia' },
        { kode_mk: 'UUW00011', nama_mk: 'Pendidikan Agama' },
        { kode_mk: 'PAIK6202', nama_mk: 'Algoritma dan Pemrograman' },
        { kode_mk: 'PAIK6204', nama_mk: 'Aljabar Linear' },
        { kode_mk: 'PAIK6203', nama_mk: 'Organisasi dan Arsitektur Komputer' },
        { kode_mk: 'PAIK6201', nama_mk: 'Matematika II' },
        { kode_mk: 'UUW00006', nama_mk: 'Internet of Things (IoT)' },
        { kode_mk: 'PAIK6301', nama_mk: 'Struktur Data' },
        { kode_mk: 'PAIK6304', nama_mk: 'Metode Numerik' },
        { kode_mk: 'PAIK6302', nama_mk: 'Sistem Operasi' },
        { kode_mk: 'PAIK6305', nama_mk: 'Interaksi Manusia dan Komputer' },
        { kode_mk: 'PAIK6303', nama_mk: 'Basis Data' },
        { kode_mk: 'PAIK6306', nama_mk: 'Statistika' },
        // Tambahkan mata kuliah lain sesuai dengan seeder Anda
    ];

    // Mengisi dropdown kode mata kuliah
    const kodeMkSelect = document.getElementById('kode_mk');
    mataKuliahData.forEach(mk => {
        const option = document.createElement('option');
        option.value = mk.kode_mk;
        option.textContent = mk.kode_mk;
        kodeMkSelect.appendChild(option);
    });

    // Mengisi nama mata kuliah secara otomatis saat kode dipilih
    kodeMkSelect.addEventListener('change', function () {
        const selectedKode = this.value;
        const selectedMk = mataKuliahData.find(mk => mk.kode_mk === selectedKode);
        if (selectedMk) {
            document.getElementById('nama_mk').value = selectedMk.nama_mk;
        } else {
            document.getElementById('nama_mk').value = ''; // Kosongkan jika tidak ditemukan
        }
    });
</script>
        
        
        
        