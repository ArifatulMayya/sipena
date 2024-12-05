<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPENA UNDIP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-200 font-sans">
    <x-navbar></x-navbar>
    <div class="flex ">
        <!-- Sidebar -->
        <x-side-bar-mahasiswa></x-side-bar-mahasiswa>

        <!-- Main Content -->
        <div class="h-screen ml-[17%] bg-[#AEC0F1] pt-20 w-screen text-center">

            <!-- Content -->
            <main class="p-6">
                <h1 class="text-2xl font-bold text-gray-800 text-center mb-6">Transkrip Akademik</h1>

                <!-- Transkrip Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-300">
                        <thead class="bg-blue-900 text-white">
                            <tr>
                                <th class="py-2 px-4 text-left">No</th>
                                <th class="py-2 px-4 text-left">Kode</th>
                                <th class="py-2 px-4 text-left">Mata Kuliah</th>
                                <th class="py-2 px-4 text-left">SKS</th>
                                <th class="py-2 px-4 text-left">Nilai</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr class="hover:bg-gray-100">
                                <td class="py-2 px-4">1</td>
                                <td class="py-2 px-4">PAIK6101</td>
                                <td class="py-2 px-4">MATEMATIKA 1</td>
                                <td class="py-2 px-4">2</td>
                                <td class="py-2 px-4">A</td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="py-2 px-4">2</td>
                                <td class="py-2 px-4">PAIK6102</td>
                                <td class="py-2 px-4">DASAR PEMROGRAMAN</td>
                                <td class="py-2 px-4">3</td>
                                <td class="py-2 px-4">A</td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="py-2 px-4">3</td>
                                <td class="py-2 px-4">PAIK6103</td>
                                <td class="py-2 px-4">DASAR SISTEM</td>
                                <td class="py-2 px-4">3</td>
                                <td class="py-2 px-4">A</td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="py-2 px-4">4</td>
                                <td class="py-2 px-4">PAIK6104</td>
                                <td class="py-2 px-4">LOGIKA INFORMATIKA</td>
                                <td class="py-2 px-4">3</td>
                                <td class="py-2 px-4">A</td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="py-2 px-4">5</td>
                                <td class="py-2 px-4">PAIK6105</td>
                                <td class="py-2 px-4">STRUKTUR DISKRIT</td>
                                <td class="py-2 px-4">4</td>
                                <td class="py-2 px-4">A</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Summary -->
                <div class="flex justify-between mt-4">
                    <span class="text-gray-800 font-semibold">IP Komulatif: <span class="font-bold">3.9</span></span>
                    <span class="text-gray-800 font-semibold">SKS Komulatif: <span class="font-bold">15</span></span>
                </div>

                <!-- Print Button -->
                <div class="text-right mt-4">
                    <button class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <i class="fas fa-print mr-2"></i>Print
                    </button>
                </div>
            </main>
        </div>
    </div>

    <!-- FontAwesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
