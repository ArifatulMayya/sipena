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
                                No Ruang
                            </th>
                            <th class="w-[10%] py-3">
                                Blok Gedung
                            </th>
                            <th class="w-[10%] py-3">
                                Lantai
                            </th>
                            <th class="w-[10%] py-3">
                                Kapasitas
                            </th>
                            <th class="w-[20%] py-3">
                                Keperluan
                            </th>
                            <th class="w-[20%] py-3">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-3">
                                E101
                            </td>
                            <td class="py-3">
                                E
                            </td>
                            <td class="py-3">
                                1
                            </td>
                            <td class="py-3">
                                50
                            </td>
                            <td class="py-3">
                                Seminar
                            </td>
                            <td class="py-3">
                                <button class="bg-green-400 w-24 py-1 rounded-lg">Setuju</button>
                                <button class="bg-red-600 w-24 py-1 rounded-lg">Tolak</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3">
                                E101
                            </td>
                            <td class="py-3">
                                E
                            </td>
                            <td class="py-3">
                                1
                            </td>
                            <td class="py-3">
                                50
                            </td>
                            <td class="py-3">
                                Seminar
                            </td>
                            <td class="py-3">
                                <button class="bg-green-400 w-24 py-1 rounded-lg">Setuju</button>
                                <button class="bg-red-600 w-24 py-1 rounded-lg">Tolak</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3">
                                E101
                            </td>
                            <td class="py-3">
                                E
                            </td>
                            <td class="py-3">
                                1
                            </td>
                            <td class="py-3">
                                50
                            </td>
                            <td class="py-3">
                                Seminar
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