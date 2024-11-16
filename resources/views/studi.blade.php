<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Perkembangan Studi - SIPENA UNDIP </title>
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-[#AEC0F1] h-screen font-sans">
   <div class="flex items-center"> 
        <x-sidebar1></x-sidebar1>
        <div class="flex-1 p-6">
            <div class="bg-blue-900 h-12 flex items-center justify-end pr-4">
                <div class="bg-gray-300 rounded-full w-8 h-8"></div>
            </div>
            <div class="bg-blue-200 p-6">
                <h1 class="text-center text-xl font-bold mb-4">Perkembangan Studi</h1>
                <div class="mb-4">
                    <p>Nama : Stefani Mayya Febria Hutagalung</p>
                    <p>NIM : 24060122129800</p>
                </div>
                <table class="w-full bg-white rounded-md overflow-hidden">
                    <thead class="bg-blue-800 text-white">
                        <tr>
                            <th class="p-2">Sem.</th>
                            <th class="p-2">Tahun Ajaran</th>
                            <th class="p-2">Kelas</th>
                            <th class="p-2">Jumlah SKS</th>
                            <th class="p-2">IP Semester</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-2 text-center">1</td>
                            <td class="p-2 text-center">2022/2023 Ganjil</td>
                            <td class="p-2 text-center">D</td>
                            <td class="p-2 text-center">21</td>
                            <td class="p-2 text-center">4.0</td>
                        </tr>
                        <tr>
                            <td class="p-2 text-center">2</td>
                            <td class="p-2 text-center">2022/2023 Genap</td>
                            <td class="p-2 text-center">C</td>
                            <td class="p-2 text-center">24</td>
                            <td class="p-2 text-center">3.8</td>
                        </tr>
                        <tr>
                            <td class="p-2 text-center">3</td>
                            <td class="p-2 text-center">2023/2024 Ganjil</td>
                            <td class="p-2 text-center">C</td>
                            <td class="p-2 text-center">21</td>
                            <td class="p-2 text-center">3.6</td>
                        </tr>
                    </tbody>
                </table>
                <div class="mt-4 text-right">
                    <p class="text-left inline-block">SKS Kumulatif : 66</p><br>
                    <p class="text-left inline-block">IP Kumulatif : 3.8</p>
                </div>
            </div>
        </div>
   </div>
</body>
</html>
