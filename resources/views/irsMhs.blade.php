<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPENA UNDIP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#a4baf6]">
    <x-navbar></x-navbar>

    <div class="flex">
        <x-side-bar-mahasiswa></x-side-bar-mahasiswa>

        <!-- Main Content -->
        <div class="h-screen ml-[17%] bg-[#AEC0F1] pt-20 w-screen text-center">
            <!-- Main Content Section -->
            <div class="p-6">
                <h1 class="text-2xl font-bold mb-6">Isian Rencana Semester (IRS)</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    
                    @foreach ($irs as $semester)
                        <div class="bg-white flex justify-between p-4 rounded-lg shadow-md">
                            <div class="text-left text-gray-700">
                                <span class="font-bold text-xl">Semester {{ $semester->semester }}</span>
                                <p class="mt-2">SKS: {{ $semester->totalSKS }}</p>
                            </div>
                            <div class="mt-4 text-center">
                                <a href="{{ route('irs.detail',['nim'=>$user->nim_nip,'semester'=>$semester->semester]) }}" class="bg-blue-600 text-white py-2 px-4 rounded-full hover:bg-blue-700 transition duration-300">👁️</a>
                            </div>
                        </div>
                    
                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>


</body>

</html>
