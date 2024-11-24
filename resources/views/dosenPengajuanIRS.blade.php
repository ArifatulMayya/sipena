<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Daftar Pengajuan IRS - SIPENA UNDIP </title>
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-[#AEC0F1] h-screen font-sans">

  <x-navbar></x-navbar>
<div class="flex pt-12"> 
  <x-sidebar-pa></x-sidebar-pa>
  <!--Main Content-->
  <div class="w-full p-6">
    <h1 class="text-2xl font-bold mb-4">Daftar Pengajuan IRS</h1>
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
        <button class="ml-4 px-4 py-2 bg-blue-900 hover:bg-blue-950 text-white rounded-lg">Urutkan</button>
        <button class="ml-4 px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded-lg">Setujui Semua</button>
    </div>
    </div>
    <table class="w-full bg-white rounded-lg">
      <thead>
        <tr class="bg-gray-200">
          <th class="p-4 text-center">No</th>
          <th class="p-4 text-center">NIM</th>
          <th class="p-4 text-center">Nama</th>
          <th class="p-4 text-center">Semester</th>
          <th class="p-4 text-center">IRS</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b">
          <td class="p-2 text-center">1</td>
          <td class="p-2 text-center">24060122129800</td>
          <td class="p-2">Stefani Mayya Febria Hutagalung</td>
          <td class="p-2 text-center">4</td>
          <td class="p-2 text-center">
            <button 
            class="px-3 py-1 bg-orange-500 text-white rounded-md hover:bg-orange-700"
            onclick="toggleDetail(1)">
            Detail
            </button>
          </td>
        </tr>
        <!--Detail Row 1-->
        <tr id="detail-1" class="hidden">
            <td colspan="5" class="border border-gray-300 px-4 py-2 bg-gray-100">
                <h2 class="text-lg font-bold justify-center mb-5">IRS Gasal 2024/2025 </h2>
              <table class="w-full">
                <thead>
                  <tr>
                    <th class="border border-gray-300 px-4 py-2">No</th>
                    <th class="border border-gray-300 px-4 py-2">Kode MK</th>
                    <th class="border border-gray-300 px-4 py-2">Mata Kuliah</th>
                    <th class="border border-gray-300 px-4 py-2">Kelas</th>
                    <th class="border border-gray-300 px-4 py-2">Ruang</th>
                    <th class="border border-gray-300 px-4 py-2">Dosen</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border border-gray-300 px-4 py-2">1</td>
                    <td class="border border-gray-300 px-4 py-2">PAIK6404</td>
                    <td class="border border-gray-300 px-4 py-2"><h7><b>Grafika dan Komputasi Visual</b>
                    <br>(3 SKS) - Baru<br><i>Senin pukul 07.00-09.30</i></td>
                    <td class="border border-gray-300 px-4 py-2">C</td>
                    <td class="border border-gray-300 px-4 py-2">E101</td>
                    <td class="border border-gray-300 px-4 py-2">Dr. Aris Sugiharto, S.Si, M.Kom.<br/>
                        Dr. Hermie Arif Wibawa, S.Si., M.Cs.</td>
                  </tr>
                  <tr>
                    <td class="border border-gray-300 px-4 py-2">2</td>
                    <td class="border border-gray-300 px-4 py-2">PAIK6406</td>
                    <td class="border border-gray-300 px-4 py-2"><h7><b>Sistem Cerdas</b>
                    <br>(3 SKS) - Baru<br><i>Rabu pukul 07.00-09.30</i></td>
                    <td class="border border-gray-300 px-4 py-2">C</td>
                    <td class="border border-gray-300 px-4 py-2">E101</td>
                    <td class="border border-gray-300 px-4 py-2"> Dr. Hermie Arif Wibawa, S.Si., M.Cs.<br/> Sandy Kurniawan, S.Kom., M.Kom.
                       </td>
                  </tr>
                </tbody>
              </table>
              <div class="flex justify-end mt-4">
                <button class="bg-green-500 text-white p-2 rounded mr-2 hover:bg-green-700">
                 Setuju
                </button>
                <button class="bg-red-500 text-white p-2 rounded hover:bg-red-700">
                 Tolak
                </button>
               </div>
            </td>
          </tr>
        <tr class="border-b">
          <td class="p-2 text-center">2</td>
          <td class="p-2 text-center">24060122129812</td>
          <td class="p-2">Antonius Iwan Santoso</td>
          <td class="p-2 text-center">4</td>
          <td class="p-2 text-center">
            <button 
            class="px-3 py-1 bg-orange-500 text-white rounded-md hover:bg-orange-700"
            onclick="toggleDetail(2)">
            Detail
            </button>
          </td>
        </tr>
        <tr class="border-b">
          <td class="p-2 text-center">3</td>
          <td class="p-2 text-center">24060122129822</td>
          <td class="p-2">Salsabila Nuridzati Tahira</td>
          <td class="p-2 text-center">4</td>
          <td class="p-2 text-center">
            <button 
            class="px-3 py-1 bg-orange-500 text-white rounded-md hover:bg-orange-700"
            onclick="toggleDetail(3)">
            Detail
            </button>
          </td>
        </tr>
        <tr class="border-b">
          <td class="p-2 text-center">4</td>
          <td class="p-2 text-center">24060122129837</td>
          <td class="p-2">Mohamad Ezra</td>
          <td class="p-2 text-center">4</td>
          <td class="p-2 text-center">
            <button 
            class="px-3 py-1 bg-orange-500 text-white rounded-md hover:bg-orange-700"
            onclick="toggleDetail(4)">
            Detail
            </button>
          </td>
        </tr>
        <tr class="border-b">
          <td class="p-2 text-center">5</td>
          <td class="p-2 text-center">24060122129876</td>
          <td class="p-2">Pieta Eulalia</td>
          <td class="p-2 text-center">4</td>
          <td class="p-2 text-center">
            <button 
            class="px-3 py-1 bg-orange-500 text-white rounded-md hover:bg-orange-700"
            onclick="toggleDetail(5)">
            Detail
            </button>
          </td>
        </tr>
        <tr class="border-b">
          <td class="p-2 text-center">6</td>
          <td class="p-2 text-center">24060122129879</td>
          <td class="p-2">Syadza Esperita</td>
          <td class="p-2 text-center">4</td>
          <td class="p-2 text-center">
            <button 
            class="px-3 py-1 bg-orange-500 text-white rounded-md hover:bg-orange-700"
            onclick="toggleDetail(6)">
            Detail
            </button>
          </td>
        </tr>
        <tr class="border-b">
          <td class="p-2 text-center">7</td>
          <td class="p-2 text-center">24060122129895</td>
          <td class="p-2">Mario Septianto</td>
          <td class="p-2 text-center">4</td>
          <td class="p-2 text-center">
            <button 
            class="px-3 py-1 bg-orange-500 text-white rounded-md hover:bg-orange-700"
            onclick="toggleDetail(7)">
            Detail
            </button>
          </td>
        </tr>
      </tbody>
    </table>

    <!--Javascript button detail-->
    <script>
        function toggleDetail(id) {
          const detailRow = document.getElementById(`detail-${id}`);
          if (detailRow.classList.contains('hidden')) {
            detailRow.classList.remove('hidden');
          } else {
            detailRow.classList.add('hidden');
          }
        }
      </script>
  </div>
</div>
