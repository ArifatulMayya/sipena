<!-- dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SIPENA UNDIP</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#AEC0F1] h-screen font-sans text-white">

    <x-navbar></x-navbar>
    <!--profile section-->
    <div class=" mx-8 pl-5 pr-11 pt-20">
        <div class="bg-[#10296E] px-8 rounded-2xl rounded-b-none py-4 font-bold text-white">
            <h1>AYAM UNDIP</h1>
        </div>
        <div class="flex justify-between items-center bg-[#2D4995] px-8 rounded-2xl rounded-t-none py-4 font-bold text-white">
            <h1>NIP : 8765876666</h1>
            <button class="bg-orange-500 hover:bg-orange-700 text-white px-4 py-1 rounded-md">Tanda Tangan Digital</button>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex mx-8 mt-6">

        <!-- Sidebar -->
        <aside class="w-[15%] h-[68vh] ml-12 mt-4 bg-[#10296E] text-white py-6 rounded-2xl text-center">
                <ul class="space-y-2">
                    <li class="mx-4 py-2">
                        <a href="/dashboard" class="block hover:bg-[#2D4995] rounded-lg px-4 py-2 font-bold">Dashboard</a>
                    </li>
                    <li class="mx-4 py-2">
                        <a href="/kpMahasiswa" class="block hover:bg-[#2D4995] rounded-lg px-4 py-2">Daftar Mahasiswa</a>
                    </li>
                    <li class="mx-4 py-2">
                        <a href="/kpirsVerifikasi" class="block hover:bg-[#2D4995] rounded-lg px-4 py-2">Kelola Mata Kuliah</a>
                    </li>
                    <li class="mx-4 py-2">
                        <a href="/kpBuatJadwal" class="block hover:bg-[#2D4995] rounded-lg px-4 py-2">Jadwal Kuliah</a>
                    </li>
                    <li class="mx-4 py-2">
                        <a href="/kpirsVerifikasi" class="block hover:bg-[#2D4995] rounded-lg px-4 py-2">Verifikasi IRS</a>
                    </li>
                    <li class="mx-4 py-2">
                        <a href="/kpirsVerifikasi" class="block hover:bg-[#2D4995] rounded-lg px-4 py-2">Verifikasi IRS</a>
                    </li>
                </ul>
            </aside>

        <!-- Dashboard Content -->
        <div class="w-3/4 space-y-6">

            <!-- Statistik -->
            <div class="flex justify-between ml-4 mt-6 bg-[#10296E] p-6 rounded-2xl">
                    <!-- Jumlah Mahasiswa -->
                    <div class="w-1/3 text-center">
                        <p class="text-lg font-semibold">Jumlah Mahasiswa</p>
                        <p class="text-5xl font-bold mt-2">752</p>
                    </div>
                    <!-- Aktif -->
                    <div class="w-1/3 text-center border-l-2 border-r-2 border-[#AEC0F1]">
                        <p class="text-lg font-semibold">Aktif</p>
                        <p class="text-5xl font-bold mt-2">729</p>
                    </div>
                    <!-- Cuti -->
                    <div class="w-1/3 text-center">
                        <p class="text-lg font-semibold">Cuti</p>
                        <p class="text-5xl font-bold mt-2">23</p>
                    </div>
            </div>

            <!-- Tabel Data -->
            <div class="flex justify-between ml-4 mt-6 bg-[#10296E] p-6 rounded-2xl">
                <table class="w-full text-center text-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4">Angkatan</th>
                            <th class="py-2 px-4">Jumlah Mahasiswa Aktif</th>
                            <th class="py-2 px-4">IPK Rata-Rata</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-[#2D4995]">
                            <td class="py-2 px-4">2024</td>
                            <td class="py-2 px-4">245</td>
                            <td class="py-2 px-4">3.82</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4">2023</td>
                            <td class="py-2 px-4">221</td>
                            <td class="py-2 px-4">3.78</td>
                        </tr>
                        <tr class="bg-[#2D4995]">
                            <td class="py-2 px-4">2022</td>
                            <td class="py-2 px-4">155</td>
                            <td class="py-2 px-4">3.61</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4">2021</td>
                            <td class="py-2 px-4">108</td>
                            <td class="py-2 px-4">3.57</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</body>
</html>
