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
        <div class ="w-83% ml-[17%] bg-[#AEC0F1] w-screen text-center">
            <div class="my-7 flex justify-end mr-10 font-semibold text-white">
                <button class ="px-4 py-2 bg-[#01A871] rounded-lg">Setujui Semua</button>
            </div>
            <div class="mx-12">
                <table class="w-full mb-4 text-center font-bold bg-white rounded-2xl">
                    <thead class=" border-b-2">
                        <tr cla>
                            <th class="w-[20%] py-3">
                                No Ruang
                            </th>
                            <th class="w-[6%] py-3">
                                Blok Gedung
                            </th>
                            <th class="w-[6%] py-3">
                                Lantai
                            </th>
                            <th class="w-[8%] py-3">
                                Kapasitas
                            </th>
                            <th class="w-[20%] py-3">
                                Keperluan
                            </th>
                            <th class="w-[20%] py-3">
                                Status
                            </th>
                            <th class="w-[30%] py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $ruang)
                            <tr>
                                <td class="py-3">{{ $ruang->no_ruang }}</td>
                                <td class="py-3">{{ $ruang->blok_gedung }}</td>
                                <td class="py-3">{{ $ruang->lantai }}</td>
                                <td class="py-3">{{ $ruang->kapasitas }}</td>
                                <td class="py-3">{{ $ruang->keperluan }}</td>
                                <td class="py-3">{{ $ruang->status }}</td>
                                <td class="flex py-3 justify-center">
                                    <form action="{{ route('ruang.approve', $ruang->id) }}" method="POST" class="mt-2 mr-1">
                                        @csrf
                                        @method('PUT')
                                        <button class="bg-green-400 w-24 py-1 rounded-lg" type="submit">Setuju</button>
                                    </form>
                                    <form action="{{ route('ruang.reject', $ruang->id) }}" method="POST" class="mt-2 ml-1">
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