<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> IRS - SIPENA UNDIP </title>
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-[#AEC0F1] h-screen font-sans">
   <div class="flex items-center"> 
        <x-sidebar1-mhs></x-sidebar1-mhs>
        <div class="flex-1 p-6">
            <div class="bg-[#AEC0F1] p-6">
                <h1 class="text-center text-xl font-bold mb-4">Isian Rencana Studi</h1>
                <div class="mb-4">
                    <p>Nama :</p>
                    <p>NIM :</p>
                    <p>Semester: </p>
                </div>
                <table class="w-full bg-white rounded-md overflow-hidden">
                    <thead class="bg-blue-800 text-white">
                        <tr>
                            <th class="p-2">No.</th>
                            <th class="p-2">Kode</th>
                            <th class="p-2">Mata Kuliah</th>
                            <th class="p-2">Kelas</th>
                            <th class="p-2">Ruangan</th>
                            <th class="p-2">Hari</th>
                            <th class="p-2">Jam</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-2 text-center">1</td>
                            <td class="p-2 text-center">2022/2023 Ganjil</td>
                            <td class="p-2 text-center">21</td>
                            <td class="p-2 text-center">4.0</td>
                        </tr>
                        <tr>
                            <td class="p-2 text-center">2</td>
                            <td class="p-2 text-center">2022/2023 Genap</td>
                            <td class="p-2 text-center">24</td>
                            <td class="p-2 text-center">3.8</td>
                        </tr>
                        <tr>
                            <td class="p-2 text-center">3</td>
                            <td class="p-2 text-center">2023/2024 Ganjil</td>
                            <td class="p-2 text-center">21</td>
                            <td class="p-2 text-center">3.6</td>
                        </tr>
                    </tbody>
                </table>
                <div class="mt-4 text-right">
                    <button onclick="window.print()" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 text-bold transition">
                        Print IRS
                    </button>
                </div>

            </div>
        </div>
   </div>
</body>
</html>
