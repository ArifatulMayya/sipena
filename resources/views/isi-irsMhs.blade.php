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
                    <p>Nama : {{ $mahasiswa->nama }}</p>
                    <p>NIM : {{ $mahasiswa->nim }}</p>
                    <p>Semester: {{ $semester }} </p>
                </div>
                <table class="w-full bg-white rounded-md overflow-hidden">
                    <thead class="bg-blue-800 text-white">
                        <tr>
                            <th class="p-2">No.</th>
                            <th class="p-2">Kode</th>
                            <th class="p-2">Mata Kuliah</th>
                            <th class="p-2">SKS</th>
                            <th class="p-2">Kelas</th>
                            <th class="p-2">Ruangan</th>
                            <th class="p-2">Hari</th>
                            <th class="p-2">Jam</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($dataIRS as $index=>$irs)
                        <tr>
                            <td class="p-2 text-center">{{ $index+1 }}</td>
                            <td class="p-2 text-center">{{ $irs->kode_mk }}</td>
                            <td class="p-2 text-center">{{ $irs->nama_mk }}</td>
                            <td class="p-2 text-center">{{ $irs->sks }}</td>
                            <td class="p-2 text-center">{{ $irs->kelas }}</td>
                            <td class="p-2 text-center">{{ $irs->nama_ruang }}</td>
                            <td class="p-2 text-center">{{ $irs-> hari }}</td>
                            <td class="p-2 text-center">{{ $irs->wkt_mulai}}-{{ $irs->wkt_selesai }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center p-4">Data IRS tidak ditemukan</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="mt-4 text-right">
                    <p class="text-left inline-block">SKS Semester : {{ $totalSKS }}</p><br>
                    <p class="text-left inline-block">IP Semester : {{ number_format($ipSemester,2) }}</p><br>
                    <button onclick="window.print()" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 text-bold transition">
                        Print IRS
                    </button>
                </div>

            </div>
        </div>
   </div>
</body>
</html>
