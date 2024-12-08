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
            <h1>Prof. Peter Parker</h1>
        </div>
        <div class="flex justify-between items-center bg-[#2D4995] px-8 rounded-2xl rounded-t-none py-4 font-bold text-white">
            <h1>NIP : 16982412710003</h1>
            <button class="bg-orange-500 hover:bg-orange-700 text-white px-4 py-1 rounded-md">Tanda Tangan Digital</button>
        </div>
    </div>

        
        <!-- Sidebar and Content -->
        <div class="flex">
    
            <aside class="w-[15%] h-[68vh] ml-12 mt-4 bg-[#10296E] text-white py-6 rounded-2xl text-center">
                <ul class="space-y-2">
                    <li class="mx-4 py-2">
                        <a href="#" class="block hover:bg-[#2D4995] rounded-lg px-4 py-2 font-bold">Dashboard</a>
                    </li>
                    <li class="mx-4 py-2">
                        <a href="/dosenBimbingan" class="block hover:bg-[#2D4995] rounded-lg px-4 py-2">Bimbingan Non-TA</a>
                    </li>
                    <li class="mx-4 py-2">
                        <a href="/dosenPengajuanIRS" class="block hover:bg-[#2D4995] rounded-lg px-4 py-2">Pengajuan IRS</a>
                    </li>
                </ul>
            </aside>
            
            <!-- Main Content -->
            <div class="w-3/4 space-y-6">
                <!-- IRS Section -->
                <div class="flex justify-between ml-4 mt-6 bg-[#10296E] p-6 rounded-2xl">
                    <div class="text-center">
                        <p class="text-lg font-semibold">Pengajuan IRS</p>
                        <p class="text-2xl font-bold"> {{ $jumlahPengajuan }}</p>
                    </div>
                    <div class="text-center">
                        <p class="text-lg font-semibold">IRS Disetujui</p>
                        <p class="text-2xl font-bold">{{ $irsDisetujui }}</p>
                    </div>
                    <div class="text-center">
                        <p class="text-lg font-semibold">IRS Ditolak</p>
                        <p class="text-2xl font-bold">2</p>
                    </div>
                </div>
                
                <!-- Academic Calendar -->
                <div class="w-5/8 space-y-6 ml-4 mt-6 bg-[#10296E]  p-6 rounded-2xl">
                    <!-- Judul Kalender Akademik -->
                    <h3 class="text-lg font-semibold text-white mb-4">Kalender Akademik</h3>
                
                    <!-- Daftar Item Kalender Akademik -->
                    <ul class="space-y-1 text-white">                           
                        <li><span class="font-semibold">7-18 Oktober 2024</span> : Periode UTS (setelah pertemuan minggu ke-7)</li>
                        <li><span class="font-semibold">15 Oktober 2024</span> : Upacara Dies Natalis Undip ke 67</li>
                        <li><span class="font-semibold">31 Oktober 2024</span> : Penutupan Pelaporan PD Dikti Semester Genap 2023/2024</li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

