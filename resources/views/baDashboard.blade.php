<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Dashboard - SIPENA UNDIP</title>
</head>
<body class="bg-[#AEC0F1] h-screen font-sans text-white">

    <x-navbar></x-navbar>
    <div class="mx-12 pt-20">
        <div class="bg-[#10296E] px-8 rounded-2xl rounded-b-none py-4 font-bold text-white">
            <h1>Kaesang Pangarep</h1>
        </div>
        <div class="bg-[#2D4995] px-8 rounded-2xl rounded-t-none py-4 font-bold text-white">
            <h1>NIP : 9876502814714945</h1>
        </div>
    </div>

    <div class="flex">
    
        <aside class="w-[17%] h-[68vh] ml-12 mt-4 bg-[#10296E] text-white py-6 rounded-2xl font-bold text-center">
            <ul class="space-y-2">
                <li class="mx-4 py-2">
                    <a href="#" class="block hover:bg-[#2D4995] rounded-lg px-4 py-2">Dashboard</a>
                </li>
                <li class="mx-4 py-2">
                    <a href="/baBuatRuang" class="block hover:bg-[#2D4995] rounded-lg px-4 py-2">Buat Ruang</a>
                </li>
            </ul>
        </aside>

    
        <div class="w-[83%] h-[68vh]">
          
            <div class="bg-[#AEC0F1] text-white p-6 mx-6 rounded-2xl grid grid-cols-2 font-bold text-center">
                <div class="bg-[#10296E] py-6 rounded-l-xl border-r">
                    <h1 class="text-xl font-normal">Jumlah Pengajuan Ruang</h1>
                    <!-- Display dynamic count of ruang submissions -->
                    <h1 class="text-3xl mt-4 pt-4 border-t">{{ $totalRuang }}</h1>
                </div>
                <div class="bg-[#10296E] py-6 rounded-r-xl">
                    <h1 class="text-xl font-normal">Pengajuan Ruang Disetujui</h1>
                    <h1 class="text-3xl mt-4 pt-4 border-t">{{ $approvedRuang }}</h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
