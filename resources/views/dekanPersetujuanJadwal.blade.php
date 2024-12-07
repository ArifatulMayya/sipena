<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <x-navbar></x-navbar>
    <div class="flex pt-12">
        <x-side-bar-dekan></x-side-bar-dekan>
        <div class="w-full h-screen ml-[17%] bg-[#AEC0F1] text-center">
            <div class="my-7 flex justify-end mr-10 font-semibold text-white">
                <button class="px-4 py-2 bg-[#01A871] rounded-lg">Setujui Semua</button>
            </div>
            <div class="mx-12">
                <table class="w-full text-center font-bold bg-white rounded-2xl">
                    <thead class="border-b-2">
                        <tr>
                            <th class="w-[20%] py-3">Mata Kuliah</th>
                            <th class="w-[5%] py-3">Kelas</th>
                            <th class="w-[15%] py-3">Waktu</th>
                            <th class="w-[10%] py-3">Ruang</th>
                            <th class="w-[20%] py-3">Dosen Pengampu</th>
                            <th class="w-[20%] py-3">Status</th>
                            <th class="w-[30%] py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $jadwal)
                            <tr>
                                <td class="py-3">{{ $jadwal->nama_mk }}</td>
                                <td class="py-3">{{ $jadwal->kelas }}</td>
                                <td class="py-3">{{ $jadwal->wkt_mulai }} - {{ $jadwal->wkt_selesai }}</td>
                                <td class="py-3">{{ $jadwal->nama_ruang }}</td>
                                <td class="py-3">{{ $jadwal->dosen_pengampu }}</td>
                                <td class="py-3">{{ $jadwal->status }}</td>
                                <td class="py-3">
                                    <form action="{{ route('jadwal.approve', $jadwal->id) }}" method="POST" class="mt-2 mr-1 inline-block">
                                        @csrf
                                        @method('PUT')
                                        <button class="bg-green-400 w-24 py-1 rounded-lg" type="submit">Setuju</button>
                                    </form>
                                    <form action="{{ route('jadwal.reject', $jadwal->id) }}" method="POST" class="mt-2 ml-1 inline-block">
                                        @csrf
                                        @method('PUT')
                                        <button class="bg-red-600 w-24 py-1 rounded-lg" type="submit">Tolak</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
