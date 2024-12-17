<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPENA UNDIP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-blue-100">

    <x-navbar></x-navbar>
    <div class="flex">
        <!-- Sidebar -->
        <x-side-bar-mahasiswa></x-side-bar-mahasiswa>
        <!-- Main Content Area -->
        <div class="-screen ml-[17%] bg-[#AEC0F1] h-screen text-center">
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

                <!-- Schedule Card and History Section -->
                <div class="flex space-x-8">
                    <!-- History Section (left side) -->
                    <section class="w-1/4 bg-white p-4 rounded-3xl shadow-md">
                <h2 class="text-2xl font-semibold mb-4">Riwayat</h2>
    
                {{-- <!-- Student Info Section -->
                @if(auth()->check())
                <p><strong>Nama:</strong> {{ auth()->user()->name }}</p>
                <p><strong>NIM:</strong> {{ auth()->user()->nim }}</p>
                <p><strong>IPK Sebelumnya:</strong> {{ auth()->user()->ipk_sebelumnya }}</p>
                <p><strong>Batas SKS:</strong> {{ auth()->user()->batas_sks }}</p>
                @else
                    <p>User not logged in.</p>
                @endif --}}

                        <!-- History List -->
                        <ul id="historyList" class="space-y-4">
                            <!-- Dynamically Populated with JavaScript -->
                        </ul>
                    </section>


                    <!-- Schedule Card Section (right side) -->
                    <section class="flex-1 bg-white border border-gray-200 rounded-3xl shadow-sm">
                        <div class="w-full max-w-7xl mx-auto px-6 lg:px-8 overflow-x-auto">
                            <div class="grid grid-cols-8 border-t border-gray-200 sticky top-0 left-0 w-full">
                                <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900"></div>
                                <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">Senin</div>
                                <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">Selasa</div>
                                <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">Rabu</div>
                                <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">Kamis</div>
                                <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">Jumat</div>
                                <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">Sabtu</div>
                                <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">Minggu</div>
                            </div>
                            @for ($time = 7; $time <= 21; $time++)
                                <div class="grid grid-cols-8 border-t border-gray-200">
                                    <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">
                                        {{ $time }}:00
                                    </div>
                                    @for ($day = 1; $day <= 7; $day++)
                                        <div class="flex flex-col h-auto p-0.5 md:p-3.5 border-r border-gray-200 transition-all hover:bg-stone-100">
                                            @php
                                                $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
                                                $schedules = [];
                                                foreach ($approvedjadwals as $jadwal) {
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
                                            @foreach ($approvedjadwals as $jadwal)
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
                                                        <button class="bg-blue-600 text-white px-4 py-1 rounded-lg pilih-jadwal" data-jadwal-id="{{ $jadwal->id }}">
                                                            Pilih
                                                        </button>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    @endfor
                                </div>
                            @endfor
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

<<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () { 
    $(document).on('click', '.pilih-jadwal', function (e) {
        e.preventDefault();

        // Confirmation dialog using SweetAlert2
        Swal.fire({
            title: "Are you sure?",
            text: "To add this schedule to your IRS?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Add to IRS!"
        }).then((result) => {
            if (result.isConfirmed) {
                // AJAX request to add the schedule to the student's IRS
                $.ajax({
                    url: '{{ route('buatIRSMhs') }}',  // Change to your route for adding to IRS
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'  // CSRF token for security
                    },
                    data: { jadwal_id: jadwalId, user_id: userId },
                    success: function (response) {
                        console.log("Response:", response);

                        // Show success message
                        Swal.fire({
                            title: "Added to IRS!",
                            text: response.message,
                            icon: "success"
                        });

                        // Update history list dynamically if needed
                        const historyList = document.getElementById('historyList');
                        const listItem = document.createElement('li');
                        listItem.classList.add('border', 'p-4', 'rounded-lg', 'shadow-md');
                        listItem.innerHTML = `<strong>${response.jadwal.title}</strong> (${response.jadwal.kelas}) - ${response.jadwal.wkt_mulai} - ${response.jadwal.wkt_selesai}`;
                        historyList.appendChild(listItem);
                    },
                    error: function (xhr, status, error) {
                        console.error("Status:", status);
                        console.error("Error:", error);
                        console.error("Response:", xhr.responseText);

                        // Show error message if request fails
                        Swal.fire({
                            title: "Error",
                            text: "An error occurred while adding the schedule to your IRS: " + xhr.responseText,
                            icon: "error"
                        });
                    }
                });
            }
        });
    });
});

document.getElementById('approve-all').addEventListener('click', function() {
    Swal.fire({
        title: "Are you sure?",
        text: "Add all selected schedules to your IRS?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Add to IRS"
    }).then((result) => {
        if (result.isConfirmed) {
            var selectedSchedules = []; // Array of selected schedule IDs

            // Collect selected schedule IDs (this depends on your frontend structure)
            document.querySelectorAll('.pilih-jadwal:checked').forEach(function (checkbox) {
                selectedSchedules.push(checkbox.dataset.jadwalId);
            });

            fetch('{{ route('buatIRSMhs') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    user_id: {{ auth()->id() }},
                    jadwal_ids: selectedSchedules  // Send an array of schedule IDs
                })
            })
            .then(response => response.json())
            .then(data => {
                Swal.fire({
                    title: "Added to IRS!",
                    text: "All selected schedules have been added to your IRS.",
                    icon: "success"
                });
                location.reload();
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    });
});
