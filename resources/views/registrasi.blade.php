<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <x-navbar></x-navbar>
    <div class="flex">
        <x-side-bar-mahasiswa></x-side-bar-mahasiswa>
        <div class="h-screen ml-[17%] bg-[#AEC0F1] pt-20 w-screen text-center">
            <h1 class="mt-8 font-semibold text-2xl">Pilih Status Akademik</h1>
            <h1 class="mt-4 font-light">Pilih Status Akademik untuk Semester ini : </h1>
            <div class="grid grid-cols-2 mt-4">
                <div class="bg-white flex flex-col mx-10 justify-between mt-4  rounded-xl h-[60vh]">
                    <div class=" p-6">
                        <h1 class="font-bold py-4 text-3xl border-b-2">Aktif</h1>
                        <h1 class="mt-4 text-left px-8">Anda akan mengikuti kegiatan perkuliahan pada semester ini serta mengisi isian Rencana Studi (IRS)</h1>
                    </div>
                    <button class="bg-[#437BF7] text-white py-2 rounded-b-xl hover:bg-[#10296E]">Pilih</button>
                </div>
                <div class="bg-white flex flex-col justify-between mt-4 mx-10 rounded-xl h-[60vh]">
                    <div class="p-6">
                        <h1 class="font-bold py-4 text-3xl border-b-2">Cuti</h1>
                        <h1 class="mt-4 text-left px-8">Menghentikan kuliah sementara untuk semester ini tanpa kehilangan status sebagai mahasiswa undip.</h1>
                    </div>
                    <button class="bg-[#437BF7] text-white py-2 rounded-b-xl hover:bg-[#10296E]">Pilih</button>
                </div>
            </div>
            <div class="text-left items-center text-white py-12 px-4 h-[15vh] bg-[#2D4995] mt-4">
                <h1>Status Akademik Anda : </h1>
            </div>
        </div>
    </div>

    <script>
        function toggleDropdown() {
          const dropdown = document.getElementById("dropdown-layouts");
          dropdown.classList.toggle("hidden");
        }
      </script>
</body>
</html>