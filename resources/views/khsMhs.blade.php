<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPENA UNDIP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-100">
    <x-navbar></x-navbar>

    <div class="flex">
        <!-- Sidebar -->
        <x-side-bar-mahasiswa></x-side-bar-mahasiswa>

        <!-- Main Content Area -->
        <div class="h-screen ml-[17%] bg-[#AEC0F1] pt-20 w-screen text-center">

            <!-- Main Content -->
            <div class="px-4 py-3">
                <h1 class="text-3xl font-semibold mb-6">Kartu Hasil Studi (KHS)</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-lg shadow-md p-4 flex justify-between items-center">
                        <div>
                            <span class="font-bold text-lg">Semester I</span>
                            <p class="text-sm text-gray-700">IPS: 3.9 | SKS: 24</p>
                        </div>
                        <div class="text-blue-600 text-2xl cursor-pointer">👁️</div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-lg shadow-md p-4 flex justify-between items-center">
                        <div>
                            <span class="font-bold text-lg">Semester II</span>
                            <p class="text-sm text-gray-700">IPS: 3.9 | SKS: 24</p>
                        </div>
                        <div class="text-blue-600 text-2xl cursor-pointer">👁️</div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white rounded-lg shadow-md p-4 flex justify-between items-center">
                        <div>
                            <span class="font-bold text-lg">Semester III</span>
                            <p class="text-sm text-gray-700">IPS: 3.9 | SKS: 24</p>
                        </div>
                        <div class="text-blue-600 text-2xl cursor-pointer">👁️</div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white rounded-lg shadow-md p-4 flex justify-between items-center">
                        <div>
                            <span class="font-bold text-lg">Semester IV</span>
                            <p class="text-sm text-gray-700">IPS: 3.9 | SKS: 24</p>
                        </div>
                        <div class="text-blue-600 text-2xl cursor-pointer">👁️</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
