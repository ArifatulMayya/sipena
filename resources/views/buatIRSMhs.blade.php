<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPENA UNDIP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-100">

    <x-navbar></x-navbar>
    <div class="flex">
        <!-- Sidebar -->
        <x-side-bar-mahasiswa></x-side-bar-mahasiswa>
        <!-- Main Content Area -->
        <div class="h-screen ml-[17%] bg-[#AEC0F1] pt-20 w-screen text-center">
            <!-- Page Content -->
            <div class="p-6 pt-32">
                <h1 class="text-3xl font-bold mb-6">Buat Isian Rencana Studi (IRS)</h1>

                <!-- Search Bar -->
                <div class="flex justify-between items-center mb-6">
                    <div class="relative flex items-center bg-gray-200 rounded-lg shadow">
                        <input type="text" placeholder="Search..." class="px-4 py-2 bg-transparent border-none outline-none">
                        <button class="p-2 text-gray-700 hover:text-gray-900">
                            🔍
                        </button>
                    </div>
                </div>

                <!-- Schedule Card -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-xl font-bold mb-4">Mata Kuliah Semester 2</h2>
                    <table class="w-full text-center border-collapse">
                        <thead>
                            <tr class="bg-blue-100">
                                <th class="border py-2 px-4">Mata Kuliah</th>
                                <th class="border py-2 px-4">Kelas</th>
                                <th class="border py-2 px-4">Kuota Kelas</th>
                                <th class="border py-2 px-4">Kuota Terisi</th>
                                <th class="border py-2 px-4">Waktu</th>
                                <th class="border py-2 px-4">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="even:bg-blue-50">
                                <td class="border py-2 px-4">Struktur Data</td>
                                <td class="border py-2 px-4">A</td>
                                <td class="border py-2 px-4">50</td>
                                <td class="border py-2 px-4">50</td>
                                <td class="border py-2 px-4"><b>Senin, 07:00 - 09:30</b></td>
                                <td class="border py-2 px-4">
                                    <button class="bg-green-500 text-white px-4 py-1 rounded-full mr-2">Tambah</button>
                                    <button class="bg-red-500 text-white px-4 py-1 rounded-full">Batal</button>
                                </td>
                            </tr>
                            <tr class="even:bg-blue-50">
                                <td class="border py-2 px-4">Struktur Data</td>
                                <td class="border py-2 px-4">A</td>
                                <td class="border py-2 px-4">50</td>
                                <td class="border py-2 px-4">50</td>
                                <td class="border py-2 px-4"><b>Senin, 07:00 - 09:30</b></td>
                                <td class="border py-2 px-4">
                                    <button class="bg-green-500 text-white px-4 py-1 rounded-full mr-2">Tambah</button>
                                    <button class="bg-red-500 text-white px-4 py-1 rounded-full">Batal</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
