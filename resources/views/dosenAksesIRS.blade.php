<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pengajuan IRS - SIPENA UNDIP</title>
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.6/css/dataTables.dataTables.css" />
  <script src="https://cdn.datatables.net/2.1.6/js/dataTables.js"></script>

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
          {{-- <form action="{{ route('mahasiswa.cari1') }}" method="GET" class="flex w-full max-w-screen-lg"> --}}
            <input
              name="search"
              value="{{ request('search') }}"
              class="p-5 w-3/6 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
              placeholder="Cari Nama/NIM Mahasiswa"
              id="table-search" 
              type="text" />
            <input type="hidden" name="sort" value="{{ request('sort', 'asc') }}">
            <button type="submit" class="ml-4 px-4 py-2 bg-orange-500 hover:bg-orange-700 text-white rounded-lg">
              Cari
            </button>
            <div class="flex space-x-2">
              <a 
                class="ml-20 px-4 py-2 bg-blue-900 hover:bg-blue-950 text-white rounded-lg">
                Urutkan 
              </a>
              <button onclick = "approveAll()" class="ml-4 px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded-lg setuju-all">
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
            <th class="p-4 text-center">Akses IRS</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($mahasiswa as $index => $mhs)
            <tr class="border-b">
              <td class="p-2 text-center">{{ $loop->iteration}}</td>
              <td class="p-2 text-center">{{ $mhs->nim }}</td>
              <td class="p-2">{{ $mhs->nama }}</td>
              <td class="p-2 text-center">{{ $mhs->semester }}</td>
              <td class="p-2 text-center">
                <button 
                  class="px-3 py-1 bg-green-500 text-white rounded-md detail-button"
                  data-id="{{ $loop->iteration }}" onclick="bukaIRS('{{ $mhs->nim }}','buka')">
                  Buka 
                </button>
                <button 
                  class="px-3 py-1 bg-red-500 text-white rounded-md  detail-button"
                  data-id="{{ $loop->iteration }}" onclick="bukaIRS('{{ $mhs->nim }}','tutup')">
                  Tutup
                </button>
              </td>
              <td class="p-2 text-center {{ $mhs->akses_irs=='buka'?'text-green-500':'text-red-500' }}">{{ $mhs->akses_irs}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
  
      </div>
    </div>
  
    <script>
      document.getElementById('table-search').addEventListener('input', function () {
          const searchTerm = this.value.toLowerCase(); // Get the search term in lowercase
          const rows = document.querySelectorAll('tbody tr:not(.hidden)'); // Select all rows except hidden ones
  
          rows.forEach(row => {
              const cells = row.querySelectorAll('td'); // Get all cells in the row
              const text = Array.from(cells).map(cell => cell.textContent.toLowerCase()).join(' ');
  
              if (text.includes(searchTerm)) {
                  row.style.display = ''; // Show the row
              } else {
                  row.style.display = 'none'; // Hide the row
              }
          });
      });

      
    </script>

    <script>
        //check if document are loaded and call bukairs
        function bukaIRS(nim, status){
            $.ajax({
                url: '/bukatutupirs',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}', 
                    nim: nim,
                    status: status,
                },
                success: function(response){
                    console.log(response);
                    Swal.fire({
                        title: 'Berhasil',
                        text: response.message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(function(){
                        location.reload();
                    });
                },
                error: function(response){
                    Swal.fire({
                        title: 'Gagal',
                        text: response.message,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
                
        }
        
    </script>
  
  
</body>
</html>

