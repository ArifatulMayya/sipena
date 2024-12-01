<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Daftar Mahasiswa - SIPENA UNDIP </title>
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-[#AEC0F1] h-screen font-sans">

  <x-navbar></x-navbar>
<div class="flex pt-12"> 
  <x-side-bar-kp></x-side-bar-kp>
  <!--Main Content-->
  <div class="w-full p-6">
    <h1 class="text-2xl font-bold mb-4">Buat Jadwal</h1>
    <div class="flex justify-end items-center mb-4">
        <div class="flex justify-end mr-10">
                <button class="bg-orange-600 text-white font-semibold px-5 py-3 rounded-lg">+ Tambah Ruang</button>
        </div>
    </div>
    <div class="mx-12 mt-6">
                <table class="w-full text-center font-bold bg-white rounded-2xl">
                    <thead class=" border-b-2">
                        <tr cla>
                            <th class="w-[20%] py-3">
                                No 
                            </th>
                            <th class="w-[5%] py-3">
                                Mata Kuliah
                            </th>
                            <th class="w-[15%] py-3">
                                Koordinator MK
                            </th>
                            <th class="w-[10%] py-3">
                                Kelas
                            </th>
                            <th class="w-[20%] py-3">
                                Jadwal
                            </th>
                            <th class="w-[20%] py-3">
                                Ruangan
                            </th>
                            <th class="w-[20%] py-3">
                                Edit
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-3">
                               1
                            </td>
                            <td class="py-3">
                                Gravika dan Komputasi Visual
                            </td>
                            <td class="py-3">
                                Aris Sugiharto
                            </td>
                            <td class="py-3">
                               A
                            </td>
                            <td class="py-3">
                                Senin(07.00-09.30)
                            </td>
                            <td class="py-3">
                                E101
                            </td>
                            <td class="py-3">
                                <button class="bg-green-400 w-24 py-1 rounded-lg">Edit</button>
                                <button class="bg-red-600 w-24 py-1 rounded-lg">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3">
                               2
                            </td>
                            <td class="py-3">
                                Gravika dan Komputasi Visual
                            </td>
                            <td class="py-3">
                                Aris Sugiharto
                            </td>
                            <td class="py-3">
                               B
                            </td>
                            <td class="py-3">
                                Selasa(07.00-09.30)
                            </td>
                            <td class="py-3">
                                E102
                            </td>
                            <td class="py-3">
                                <button class="bg-green-400 w-24 py-1 rounded-lg">Edit</button>
                                <button class="bg-red-600 w-24 py-1 rounded-lg">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3">
                               3
                            </td>
                            <td class="py-3">
                                Gravika dan Komputasi Visual
                            </td>
                            <td class="py-3">
                                Aris Sugiharto
                            </td>
                            <td class="py-3">
                               C
                            </td>
                            <td class="py-3">
                                Rabu(07.00-09.30)
                            </td>
                            <td class="py-3">
                                E103
                            </td>
                            <td class="py-3">
                                <button class="bg-green-400 w-24 py-1 rounded-lg">Edit</button>
                                <button class="bg-red-600 w-24 py-1 rounded-lg">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3">
                               4
                            </td>
                            <td class="py-3">
                                Gravika dan Komputasi Visual
                            </td>
                            <td class="py-3">
                                Aris Sugiharto
                            </td>
                            <td class="py-3">
                               D
                            </td>
                            <td class="py-3">
                                Kamis(07.00-09.30)
                            </td>
                            <td class="py-3">
                                E101
                            </td>
                            <td class="py-3">
                                <button class="bg-green-400 w-24 py-1 rounded-lg">Edit</button>
                                <button class="bg-red-600 w-24 py-1 rounded-lg">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3">
                               5
                            </td>
                            <td class="py-3">
                                Algoritma Pemrograman
                            </td>
                            <td class="py-3">
                                Aris Puji Widodo
                            </td>
                            <td class="py-3">
                               A
                            </td>
                            <td class="py-3">
                                Rabu(07.00-09.30)
                            </td>
                            <td class="py-3">
                                E102
                            </td>
                            <td class="py-3">
                                <button class="bg-green-400 w-24 py-1 rounded-lg">Edit</button>
                                <button class="bg-red-600 w-24 py-1 rounded-lg">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3">
                               6
                            </td>
                            <td class="py-3">
                                Teori Bahasa Dan Otomata
                            </td>
                            <td class="py-3">
                                Aris Sugiharto
                            </td>
                            <td class="py-3">
                               C
                            </td>
                            <td class="py-3">
                                Selasa(07.00-09.30)
                            </td>
                            <td class="py-3">
                                E103
                            </td>
                            <td class="py-3">
                                <button class="bg-green-400 w-24 py-1 rounded-lg">Edit</button>
                                <button class="bg-red-600 w-24 py-1 rounded-lg">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
    </div>
    <br>
    <div class="flex justify-end items-center mb-4">
        <div class="flex justify-end mr-10">
            <button class="ml-4 px-4 py-2 bg-green-500 text-white rounded-lg !important">Simpan</button>
        </div>
    </div>
  </div>
</div>

        
        
        
        