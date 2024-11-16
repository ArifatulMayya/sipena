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
    <div class="flex pt-12">
    <x-side-bar-dekan></x-side-bar-dekan>
        <div class ="w-83% h-screen ml-[17%] bg-[#AEC0F1] w-screen text-center">
            <div class="my-7 flex justify-end mr-10 font-semibold text-white">
                <button class ="px-4 py-2 bg-[#01A871] rounded-lg">Setujui Semua</button>
            </div>
            <div class="mx-12">
                <table class="w-full text-center font-bold bg-white rounded-2xl">
                    <thead class=" border-b-2">
                        <tr cla>
                            <th class="w-[20%] py-3">
                                Mata Kuliah
                            </th>
                            <th class="w-[5%] py-3">
                                Kelas
                            </th>
                            <th class="w-[15%] py-3">
                                Waktu
                            </th>
                            <th class="w-[10%] py-3">
                                Ruang
                            </th>
                            <th class="w-[20%] py-3">
                                Dosen Pengampu
                            </th>
                            <th class="w-[20%] py-3">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-3">
                                Basis Data
                            </td>
                            <td class="py-3">
                                A
                            </td>
                            <td class="py-3">
                                Senin, 07-00 - 09:30
                            </td>
                            <td class="py-3">
                                E103
                            </td>
                            <td class="py-3">
                                Satriyo Adhy, S.Si.,M.T.
                            </td>
                            <td class="py-3">
                                <button class="bg-green-400 w-24 py-1 rounded-lg">Setuju</button>
                                <button class="bg-red-600 w-24 py-1 rounded-lg">Tolak</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3">
                                Basis Data
                            </td>
                            <td class="py-3">
                                A
                            </td>
                            <td class="py-3">
                                Senin, 13:00 - 15:30
                            </td>
                            <td class="py-3">
                                E102
                            </td>
                            <td class="py-3">
                                Satriyo Adhy, S.Si.,M.T.
                            </td>
                            <td class="py-3">
                                <button class="bg-green-400 w-24 py-1 rounded-lg">Setuju</button>
                                <button class="bg-red-600 w-24 py-1 rounded-lg">Tolak</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3">
                                Basis Data
                            </td>
                            <td class="py-3">
                                C
                            </td>
                            <td class="py-3">
                                Senin, 15:40-18:10
                            </td>
                            <td class="py-3">
                                E102
                            </td>
                            <td class="py-3">
                                Satriyo Adhy, S.Si.,M.T.
                            </td>
                            <td class="py-3">
                                <button class="bg-green-400 w-24 py-1 rounded-lg">Setuju</button>
                                <button class="bg-red-600 w-24 py-1 rounded-lg">Tolak</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>