<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="bg-[#AEC0F1] h-screen">
        <x-navbar></x-navbar>

    <div class="mx-12 pt-16">
        <div class="bg-[#10296E] mt-6 px-8 rounded-2xl rounded-b-none py-4 font-bold text-white">
            <h1>Stefani Mayya Febria</h1>
        </div>
        <div class="bg-[#2D4995] px-8 rounded-2xl rounded-t-none py-4 font-bold text-white">
            <h1>NIM : 24060122140179  |  Informatika S1</h1>
        </div>
    </div>
    <div class="flex">
        <aside class="w-[17%] h-[68vh] ml-12 mt-4 bg-[#10296E] text-white py-6 rounded-2xl font-bold text-center">
            <ul class="space-y-2">
                <li class=" mx-4 py-2">
                    <a href="">Dashboard</a>
                </li>
                <li class=" mx-4 py-2">
                    <a href="/registrasi">Registrasi</a>
                </li>
                <li>
                  <button
                    type="button"
                    class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-[#2D4995]"
                    aria-controls="dropdown-layouts"
                    onclick="toggleDropdown()"
                  >
                    <span class="flex-1 ml-3 text-center whitespace-nowrap">Akademik</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path
                        fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </button>
                  <ul id="dropdown-layouts" class="hidden text-center mx-6 py-2 space-y-2">
                    <li class="text-center">
                      <a href="/buatIRSMhs" class="flex justify-center items-center p-2 hover:bg-[#2D4995] transition duration-75 rounded-lg group ">Buat IRS</a>
                    </li>
                    <li>
                      <a href="irsMhs" class="flex justify-center items-center p-2 hover:bg-[#2D4995] transition duration-75 rounded-lg group ">IRS</a>
                    </li>
                    <li>
                      <a href="khsMhs" class="flex justify-center items-center p-2 hover:bg-[#2D4995] transition duration-75 rounded-lg group ">KHS</a>
                    </li>
                    <li>
                      <a href="transkripMhs" class="flex justify-center items-center p-2 hover:bg-[#2D4995] transition duration-75 rounded-lg group">Transkrip</a>
                    </li>
                  </ul>
                </li>

            </ul>
        </aside>
        <div class="w-[83%] mr-12 h-[68vh]">
            <div class="text-white bg-[#10296E] mt-4 ml-6 p-6 rounded-2xl ">
                <h1 class="text-xl">Status Akademik</h1>
                <div class="grid grid-cols-2 mt-2 pb-4 justify-center text-xl text-center border-b">
                    <h1 class="border-r"><strong>Dosen Wali : </strong>Gibran Pangarep</h1>
                    <h1><strong>NIP : </strong>19824905900000</h1>
                </div>
                <div class="grid grid-cols-5 mt-4 ">
                    <div class="text-center py-4 px-3 border-r">
                        <h1>Semester Akademik Sekarang</h1>
                        <h1 class="mt-2 font-semibold text-2xl">2024/2025 Ganjil</h1>
                    </div>
                    <div class="text-center py-4 px-3 border-r">
                        <h1>Semester Studi</h1>
                        <h1 class="mt-2 font-semibold text-2xl">4</h1>
                    </div>
                    <div class="text-center py-4 px-3 border-r">
                        <h1>IPk</h1>
                        <h1 class="mt-2 font-semibold text-2xl">4</h1>
                    </div>
                    <div class="text-center py-4 px-3 border-r">
                        <h1>SKS</h1>
                        <h1 class="mt-2 font-semibold text-2xl">66</h1>
                    </div>
                    <div class="text-center py-4 px-3">
                        <h1>Status</h1>
                        <h1 class="mt-2 font-semibold text-2xl">Aktif</h1>
                    </div>

                </div>
            </div>
            <div class="text-white h-[36vh] bg-[#10296E] rounded-2xl mt-4 ml-6 p-6 ">
                <h1 class="text-xl mb-4">Today's Schedule</h1>
                <div class="p-1 bg-[#F2F2F2] rounded-xl">
                    <table class="w-full text-center my-4 text-black">
                        <thead class="border-b-2 border-gray-300">
                          <tr>
                            <th class="px-4 py-2 ">Mata Kuliah</th>
                            <th class="px-4 py-2 ">Waktu</th>
                            <th class="px-4 py-2 ">Ruang</th>
                            <th class="px-4 py-2 ">Pertemuan</th>
                            <th class="px-4 py-2 ">Hadir</th>
                            <th class="px-4 py-2 ">Rekap</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="px-4 py-2 ">Proyek Perangkat Lunak</td>
                            <td class="px-4 py-2 ">08:00 - 10:00</td>
                            <td class="px-4 py-2 ">E101</td>
                            <td class="px-4 py-2 ">1/14</td>
                            <td class="px-4 py-2 ">1/14</td>
                            <td class="px-4 py-2 ">25%</td>
                          </tr>
                          <tr>
                            <td class="px-4 py-2 ">Teori dan Bahasa Otomata</td>
                            <td class="px-4 py-2 ">10:00 - 12:00</td>
                            <td class="px-4 py-2 ">E102</td>
                            <td class="px-4 py-2 ">1/14</td>
                            <td class="px-4 py-2 ">1/14</td>
                            <td class="px-4 py-2 ">25%</td>
                          </tr>
                          <tr>
                            <td class="px-4 py-2 ">Sistem Informasi</td>
                            <td class="px-4 py-2 ">13:00 - 15:00</td>
                            <td class="px-4 py-2 ">E103</td>
                            <td class="px-4 py-2 ">1/14</td>
                            <td class="px-4 py-2 ">1/14</td>
                            <td class="px-4 py-2 ">25%</td>
                          </tr>
                        </tbody>
                      </table>
                      
                </div>
            </div>
        </div>
    </div>
  </div>

  <script>
  function toggleDropdown() {
    const dropdown = document.getElementById("dropdown-layouts");
    dropdown.classList.toggle("hidden");
  }
</script>
</body>
</html>