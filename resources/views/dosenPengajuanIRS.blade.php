<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pengajuan IRS - SIPENA UNDIP</title>
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-[#AEC0F1] h-screen font-sans">

  <x-navbar></x-navbar>

  <div class="flex pt-12">
    <x-sidebar-pa></x-sidebar-pa>

    <!-- Main Content -->
    <div class="w-full p-6">
      <h1 class="text-2xl font-bold mb-4">Daftar Pengajuan IRS</h1>

      <!-- Search Form -->
      <div class="flex justify-center items-center mb-4">
        <form action="{{ route('mahasiswa.cari1') }}" method="GET" class="flex w-full max-w-screen-lg">
          <input
            name="search"
            value="{{ request('search') }}"
            class="p-5 w-3/6 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
            placeholder="Cari Nama/NIM Mahasiswa"
            type="text" />
          <input type="hidden" name="sort" value="{{ request('sort', 'asc') }}">
          <button type="submit" class="ml-4 px-4 py-2 bg-orange-500 hover:bg-orange-700 text-white rounded-lg">
            Cari
          </button>
          <div class="flex space-x-2">
            <a href="{{ route('mahasiswa.urutkan1', ['sort' => $sort === 'asc' ? 'desc' : 'asc']) }}" 
              class="ml-20 px-4 py-2 bg-blue-900 hover:bg-blue-950 text-white rounded-lg">
              Urutkan {{ $sort === 'asc' ? 'NIM' : 'NIM' }}
            </a>
            <button class="ml-4 px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded-lg">
              Setujui Semua
            </button>
          </div>
        </form>
      </div>

      <!-- Table -->
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
          @forelse ($mahasiswa as $index => $mhs)
          <tr class="border-b">
            <td class="p-2 text-center">{{ $loop->iteration + ($mahasiswa->currentPage() - 1) * $mahasiswa->perPage() }}</td>
            <td class="p-2 text-center">{{ $mhs->nim }}</td>
            <td class="p-2">{{ $mhs->nama }}</td>
            <td class="p-2 text-center">{{ $mhs->semester }}</td>
            <td class="p-2 text-center">
              <button 
                class="px-3 py-1 bg-orange-500 text-white rounded-md hover:bg-orange-700 detail-button"
                data-id="{{ $loop->iteration }}">
                Detail
              </button>
            </td>
          </tr>
          <!-- Detail Row -->
          <tr id="detail-{{ $loop->iteration }}" class="hidden">
            <td colspan="5" class="border border-gray-300 px-4 py-2 bg-gray-100">
              <h2 class="text-lg font-bold justify-center mb-5">IRS Gasal 2024/2025</h2>
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
                    <td class="border border-gray-300 px-4 py-2"><b>Grafika dan Komputasi Visual</b>
                      <br>(3 SKS) - Baru<br><i>Senin pukul 07.00-09.30</i>
                    </td>
                    <td class="border border-gray-300 px-4 py-2">C</td>
                    <td class="border border-gray-300 px-4 py-2">E101</td>
                    <td class="border border-gray-300 px-4 py-2">
                      Dr. Aris Sugiharto, S.Si, M.Kom.<br/>
                      Dr. Hermie Arif Wibawa, S.Si., M.Cs.
                    </td>
                  </tr>
                  <tr>
                    <td class="border border-gray-300 px-4 py-2">2</td>
                    <td class="border border-gray-300 px-4 py-2">PAIK6406</td>
                    <td class="border border-gray-300 px-4 py-2"><b>Sistem Cerdas</b>
                      <br>(3 SKS) - Baru<br><i>Rabu pukul 07.00-09.30</i>
                    </td>
                    <td class="border border-gray-300 px-4 py-2">C</td>
                    <td class="border border-gray-300 px-4 py-2">E101</td>
                    <td class="border border-gray-300 px-4 py-2">
                      Dr. Hermie Arif Wibawa, S.Si., M.Cs.<br/>
                      Sandy Kurniawan, S.Kom., M.Kom.
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="flex justify-end mt-4">
                <button class="bg-green-500 text-white p-2 rounded mr-2 hover:bg-green-700">Setuju</button>
                <button class="bg-red-500 text-white p-2 rounded hover:bg-red-700">Tolak</button>
              </div>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="5" class="text-center p-4">Tidak ada data mahasiswa.</td>
          </tr>
          @endforelse
        </tbody>
      </table>

      <!-- Pagination -->
      <div class="mt-4">
        {{ $mahasiswa->appends(['sort' => $sort])->links('pagination::tailwind') }}
      </div>
    </div>
  </div>

  <!-- Javascript Button Detail -->
  <script>
    document.querySelectorAll('.detail-button').forEach(button => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('data-id');
            const detailRow = document.getElementById(`detail-${id}`);

            // Toggle visibility
            if (detailRow) {
                detailRow.classList.toggle('hidden');
            }
        });
    });
  </script>

</body>
</html>
