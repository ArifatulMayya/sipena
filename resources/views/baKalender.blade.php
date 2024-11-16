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
        <x-side-bar-ba></x-side-bar-ba>
        <div class="w-83% h-screen ml-[17%] bg-[#AEC0F1] w-screen">
            <h1 class="mt-16 ml-6 font-semibold text-3xl">Kalender Akademik</h1>
            <div class="mt-4 text-white font-semibold flex justify-end"> 
                <button class="bg-[#F1681B] px-6 py-2 mx-4 rounded-lg">Tambah Agenda</button>
                <button class="bg-[#3927A7] px-6 py-2 mx-4 rounded-lg">Edit</button>
                <button class="bg-[#01A871] px-6 py-2 mx-4 rounded-lg">Simpan</button>
            </div>
            <div class="mt-8">
                <div class="bg-white flex flex-col justify center mx-16 pb-8 rounded-2xl">
                    <h1 class="text-center mb-6 mt-6 font-bold text-3xl">Agustus 2024</h1>
                    <table class=" border-collapse mx-4 text-center">
                        <thead>
                        <tr class="text-center font-semibold text-gray-700">
                            <th class="text-red-500">M</th>
                            <th>S</th>
                            <th>S</th>
                            <th>R</th>
                            <th>K</th>
                            <th>J</th>
                            <th>S</th>
                        </tr>
                        </thead>
                        <tbody>
                            <!-- First Week (with empty cells for days before the 1st) -->
                            <tr>
                            <td></td><td></td><td></td><td></td>
                            <td class="p-2 ">
                                <span class="text-gray-500 text-lg font-semibold">1</span>
                                <div class="bg-[#01A871] text-white font-semibold text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2 ">
                                <span class="text-gray-500 text-lg font-semibold">2</span>
                                <div class="bg-[#01A871] text-white font-semibold text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">3</span>
                                <div class="bg-[#01A871] text-white font-semibold text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            </tr>

                            <!-- Second Week -->
                            <tr>
                            <td class="p-2">
                                <span class="text-red-500 text-sm">4</span>
                                <div class="bg-[#01A871] text-white font-semibold text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">5</span>
                                <div class="bg-[#01A871] text-white font-semibold text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">6</span>
                                <div class="bg-[#01A871] text-white font-semibold text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">7</span>
                                <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">8</span>
                                <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">9</span>
                                <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">10</span>
                                <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            </tr>

                            <!-- Third Week -->
                            <tr>
                            <td class="p-2">
                                <span class="text-red-500 text-sm">11</span>
                                <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">12</span>
                                <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">13</span>
                                <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">14</span>
                                <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">15</span>
                                <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">16</span>
                                <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">17</span>
                                <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            </tr>
                            <!-- Third Week -->
                            <tr>
                            <td class="p-2">
                                <span class="text-red-500 text-sm">18</span>
                                <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">19</span>
                                <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">20</span>
                                <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">21</span>
                                <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">22</span>
                                <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">23</span>
                                <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">24</span>
                                <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div>
                            </td>
                            </tr>
                            <!-- Third Week -->
                            <tr>
                            <td class="p-2">
                                <span class="text-red-500 text-sm">25</span>
                                <!-- <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div> -->
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">26</span>
                                <!-- <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div> -->
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">27</span>
                                <!-- <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div> -->
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">28</span>
                                <!-- <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div> -->
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">29</span>
                                <!-- <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div> -->
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">30</span>
                                <!-- <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div> -->
                            </td>
                            <td class="p-2">
                                <span class="text-gray-500 text-lg font-semibold">31</span>
                                <!-- <div class="bg-[#01A871] text-white text-base mt-1 py-2 rounded">Pengisian IRS</div> -->
                            </td>
                            </tr>

                            <!-- Additional weeks as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>