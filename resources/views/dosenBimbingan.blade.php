
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Daftar Mahasiswa Perwalian - SIPENA UNDIP </title>
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-[#AEC0F1] w-screen font-sans">

  <x-navbar></x-navbar>
<div class="flex pt-12"> 
  <x-sidebar-pa></x-sidebar-pa>
  <!--Main Content-->
  <div class="w-full p-6">
    <h1 class="text-2xl font-bold mb-4">Daftar Mahasiswa Perwalian</h1>
    <div class="flex justify-center items-center mb-4">
      <form action="{{ route('mahasiswa.cari') }}" method="GET" class="flex w-full max-w-screen-lg">
          <input
            name="search"
            value="{{ request('search') }}"
            class="p-5 w-3/4 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
            placeholder="Cari Nama/NIM Mahasiswa"
            type="text"/>
          <input type="hidden" name="sort" value="{{ request('sort','asc') }}">
          <button type="submit" class="ml-2 px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded-lg">
            Cari
          </button> 
      <div class="flex justify-right items-right">
        <a href="{{ route('mahasiswa.urutkan', ['sort' => $sort === 'asc' ? 'desc' : 'asc']) }}" 
          class="ml-4 px-4 py-2 bg-blue-900 hover:bg-blue-950 text-white rounded-lg">
           Urutkan {{ $sort === 'asc' ? 'NIM':'NIM' }}
       </a>
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
        </tr>
      </thead>
      <tbody>
        @forelse ($mahasiswa as $index=>$mhs)
        <tr class="border-b">
          <td class="p-2 text-center">{{ $loop->iteration + ($mahasiswa->currentPage() - 1) * $mahasiswa->perPage() }}</td>
          <td class="p-2 text-center">{{ $mhs->nim }}</td>
          <td class="p-2">{{ $mhs->nama }}</td>
          <td class="p-2 text-center">{{ $mhs->semester }}</td>
          <td class="p-2 text-center">
            <a href="/studi" class="px-4 py-2 bg-orange-500 hover:bg-orange-700 text-white rounded-lg">Detail</a>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="5" class="text-center p-4">Tidak ada data mahasiswa.</td>
        @endforelse
      </tbody>
    </table>
    <div class="w-full mt-4 flex justify-between items-center ">
      @if ($mahasiswa->onFirstPage())
      <button class="px-4 py-2 bg-gray-400 text-white rounded-lg cursor-not-allowed" disabled>Previous</button>
    @else
      <a href="{{ $mahasiswa->previousPageUrl() }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg">Previous</a>
    @endif
  
    <!-- Next Button -->
    @if ($mahasiswa->hasMorePages())
      <a href="{{ $mahasiswa->nextPageUrl() }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg ml-4">Next</a>
    @else
      <button class="px-4 py-2 bg-gray-400 text-white rounded-lg ml-4 cursor-not-allowed" disabled>Next</button>
    @endif
    </div>
    
  
  
  </div>
</div>
