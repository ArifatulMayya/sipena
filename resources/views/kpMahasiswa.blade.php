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
    <h1 class="text-2xl font-bold mb-4">Daftar Mahasiswa</h1>
    <div class="flex justify-between items-center mb-4">
      <input class="p-2 w-3/4 max-w-md px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Cari Nama/NIM Mahasiswa" type="text"/>
      <div class="flex justify-center items-center">
        <button class="px-2 py-1">
          <i class="fas fa-chevron-left text-white"></i>
        </button>
        <ul class="flex space-x-1 mx-2">
          <li><a class="px-2 py-1 bg-white rounded-lg" href="#">1</a></li>
          <li><a class="px-2 py-1 bg-white rounded-lg" href="#">2</a></li>
          <li><a class="px-2 py-1 bg-white rounded-lg" href="#">3</a></li>
          <li><a class="px-2 py-1 bg-white rounded-lg" href="#">4</a></li>
          <li><a class="px-2 py-1 bg-white rounded-lg" href="#">5</a></li>
          <li><a class="px-2 py-1 bg-white rounded-lg" href="#">6</a></li>
        </ul>
        <button class="px-2 py-1">
          <i class="fas fa-chevron-right text-white"></i>
        </button>
        <button class="ml-4 px-4 py-2 bg-blue-900 text-white rounded-lg">Urutkan</button>
        <button class="ml-4 px-4 py-2 bg-green-500 text-white rounded-lg !important">Simpan</button>
      </div>
    </div>
    <table class="w-full bg-white rounded-lg">
      <thead>
        <tr class="bg-gray-200">
          <th class="p-4 text-center">No</th>
          <th class="p-4 text-center">NIM</th>
          <th class="p-4 text-center">Nama</th>
          <th class="p-4 text-center">Semester</th>
          <th class="p-4 text-center">Perkembangan Studi</th>
          <th class="p-4 text-center">Kelas</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b">
          <td class="p-2 text-center">1</td>
          <td class="p-2 text-center">24060122129800</td>
          <td class="p-2">Stefani Mayya Febria Hutagalung</td>
          <td class="p-2 text-center">4</td>
          <td class="p-2 text-center">
            <a href="/kpStudi" class="px-4 py-2 bg-orange-500 text-white rounded-lg">Detail</a>
          </td>
          <td class="p-2 text-center">
            <select class="px-2 py-1 border rounded-md">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            </select>
          </td>
        </tr>
        <tr class="border-b">
          <td class="p-2 text-center">2</td>
          <td class="p-2 text-center">24060122129812</td>
          <td class="p-2">Antonius Iwan Santoso</td>
          <td class="p-2 text-center">4</td>
          <td class="p-2 text-center">
            <a href="/kpStudi24060122129812" class="px-4 py-2 bg-orange-500 text-white rounded-lg">Detail</a>
          </td>
          <td class="p-2 text-center">
            <select class="px-2 py-1 border rounded-md">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            </select>
          </td>
        </tr>
        <tr class="border-b">
          <td class="p-2 text-center">3</td>
          <td class="p-2 text-center">24060122129822</td>
          <td class="p-2">Salsabila Nuridzati Tahira</td>
          <td class="p-2 text-center">4</td>
          <td class="p-2 text-center">
            <a href="/studi24060122129822" class="px-4 py-2 bg-orange-500 text-white rounded-lg">Detail</a>
          </td>
          <td class="p-2 text-center">
            <select class="px-2 py-1 border rounded-md">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            </select>
          </td>
        </tr>
        <tr class="border-b">
          <td class="p-2 text-center">4</td>
          <td class="p-2 text-center">24060122129837</td>
          <td class="p-2">Mohamad Ezra</td>
          <td class="p-2 text-center">4</td>
          <td class="p-2 text-center">
            <a href="/studi24060122129837" class="px-4 py-2 bg-orange-500 text-white rounded-lg">Detail</a>
          </td>
          <td class="p-2 text-center">
            <select class="px-2 py-1 border rounded-md">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            </select>
          </td>
        </tr>
        <tr class="border-b">
          <td class="p-2 text-center">5</td>
          <td class="p-2 text-center">24060122129876</td>
          <td class="p-2">Pieta Eulalia</td>
          <td class="p-2 text-center">4</td>
          <td class="p-2 text-center">
            <a href="/studi24060122129876" class="px-4 py-2 bg-orange-500 text-white rounded-lg">Detail</a>
          </td>
          <td class="p-2 text-center">
            <select class="px-2 py-1 border rounded-md">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            </select>
          </td>
        </tr>
        <tr class="border-b">
          <td class="p-2 text-center">6</td>
          <td class="p-2 text-center">24060122129879</td>
          <td class="p-2">Syadza Esperita</td>
          <td class="p-2 text-center">4</td>
          <td class="p-2 text-center">
            <a href="/studi24060122129879" class="px-4 py-2 bg-orange-500 text-white rounded-lg">Detail</a>
          </td>
          <td class="p-2 text-center">
            <select class="px-2 py-1 border rounded-md">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            </select>
          </td>
        </tr>
        <tr class="border-b">
          <td class="p-2 text-center">7</td>
          <td class="p-2 text-center">24060122129895</td>
          <td class="p-2">Mario Septianto</td>
          <td class="p-2 text-center">4</td>
          <td class="p-2 text-center">
            <a href="/studi24060122129895" class="px-4 py-2 bg-orange-500 text-white rounded-lg">Detail</a>
          </td>
          <td class="p-2 text-center">
            <select class="px-2 py-1 border rounded-md">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            </select>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
