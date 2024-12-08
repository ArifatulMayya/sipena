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
        <div class="h-screen ml-[17%] bg-[#AEC0F1] w-screen text-center">
            <!-- Page Content -->
            <div class="p-6 pt-32">
                <h1 class="text-3xl font-bold mb-6">Buat Isian Rencana Studi (IRS)</h1>

                <!-- Search Bar -->
                <div class="flex justify-between items-center mb-6">
                    <div class="relative flex items-center bg-gray-200 rounded-lg shadow">
                        <input type="text" placeholder="Search..." class="px-4 py-2 bg-transparent border-none outline-none">
                        <button class="p-2 text-gray-700 hover:text-gray-900">
                            🔍
                        </button>
                    </div>
                </div>

                <!-- Schedule Card -->
 <!-- Bagian jadwal -->
 <section class="relative mb-8 mt-6 mx-8 bg-white border border-gray-200 rounded-3xl shadow-sm flex">
                        <div class="w-full max-w-7xl mx-auto px-6 lg:px-8 overflow-x-auto">
                            <div class="grid grid-cols-8 border-t border-gray-200 sticky top-0 left-0 w-full">
                                <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900"></div>
                                <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">Senin
                                </div>
                                <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">Selasa
                                </div>
                                <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">Rabu
                                </div>
                                <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">Kamis
                                </div>
                                <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">Jumat
                                </div>
                                <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">Sabtu
                                </div>
                                <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">Minggu
                                </div>
                            </div>
                            @for ($time = 7; $time <= 21; $time++)
                                <div class="grid grid-cols-8 border-t border-gray-200">
                                    <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">
                                        {{ $time }}:00
                                    </div>
                                    @for ($day = 1; $day <= 7; $day++)
                                        <div
                                            class="flex flex-col h-auto p-0.5 md:p-3.5 border-r border-gray-200 transition-all hover:bg-stone-100">
                                            @php
                                                $days = [
                                                    'Senin',
                                                    'Selasa',
                                                    'Rabu',
                                                    'Kamis',
                                                    'Jumat',
                                                    'Sabtu',
                                                    'Minggu',
                                                ];
                                                $schedules = [];
                                                foreach ($jadwalkuliahs as $jadwal) {
                                                    $j = [
                                                        'id' => $jadwal->id,
                                                        'day' => $jadwal->hari,
                                                        'kode_mk' => $jadwal->kode_mk,
                                                        'sks' => $jadwal->sks,
                                                        'kapasitas' => $jadwal->kapasitas,
                                                        'start' => $jadwal->wkt_mulai,
                                                        'end' => $jadwal->wkt_selesai,
                                                        'title' => $jadwal->nama_mk,
                                                        'kelas' => $jadwal->kelas,
                                                        'ruangan' => $jadwal->ruang,
                                                        'jenis' => $jadwal->status,
                                                    ];
                                                    array_push($schedules, $j);
                                                }
                                            @endphp
                                            @foreach ($jadwalkuliahs as $jadwal)
                                                @php
                                                    $dayIndex = array_search($jadwal->hari, ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']);
                                                    $startHour = intval(substr($jadwal->wkt_mulai, 0, 2));
                                                    $endHour = intval(substr($jadwal->wkt_selesai, 0, 2));
                                                    $duration = $endHour - $startHour;
                                                @endphp

                                                @if ($time == $startHour && $dayIndex + 1 == $day)
                                                    <div class="rounded p-1.5 border-l-2 border-purple-600 bg-purple-50">
                                                        <p class="text-xs font-normal text-gray-900 mb-px">{{ $jadwal->nama_mk }} ({{ $jadwal->kelas }})</p>
                                                        <p class="text-xs font-semibold text-blue-600">{{ $jadwal->wkt_mulai }} - {{ $jadwal->wkt_selesai }}</p>
                                                        <p class="text-xs font-semibold text-blue-600">{{ $jadwal->nama_ruang }}</p>
                                                        <br>
                                                        <button type="submit" class="bg-blue-600 text-white px-4 py-0.1 rounded-lg">Pilih</button>
                                                    </div>
                                                @endif
                                            @endforeach

                                        </div>
                                    @endfor
                                </div>
                            @endfor
                        </div>                       

                    
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to handle modal visibility -->
    <script>
        // Get modal element
        const modal = document.getElementById('modal');
        const openModalButton = document.getElementById('openModal');
        const closeModalButton = document.getElementById('closeModal');

        // Open modal when the button is clicked
        openModalButton.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        // Close modal when the close button is clicked
        closeModalButton.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        // Close modal if the user clicks outside the modal content
        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    </script>