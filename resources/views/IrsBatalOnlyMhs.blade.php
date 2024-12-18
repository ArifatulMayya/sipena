<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPENA UNDIP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body class="bg-blue-100">

    <x-navbar></x-navbar>
    <div class="flex">
        <!-- Sidebar -->
        <x-side-bar-mahasiswa></x-side-bar-mahasiswa>
        <!-- Main Content Area -->
        <div class="h-screen ml-[17%] bg-[#AEC0F1] w-screen text-center">
            <!-- Page Content -->
            <div class="p-6 pt-32 bg-[#AEC0F1]">
                <h1 class="text-3xl font-bold mb-6">Buat Isian Rencana Studi (IRS)</h1>

                <!-- Search Bar -->
                <div class="flex justify-between items-center mb-6 mx-14">
                    <div class="relative flex items-center bg-gray-200 rounded-lg shadow">
                        <input type="text" placeholder="Search..." class="px-4 py-2 bg-transparent border-none outline-none">
                        <button class="p-2 text-gray-700 hover:text-gray-900">
                            🔍
                        </button>
                    </div>

                    <h1 class= "text-2xl font-semibold">MAX SKS : {{ $batas_sks }}</h1>
                </div>

                <!-- Schedule Card -->
            <!-- Bagian jadwal -->
            {{-- <section class=""> --}}
                        {{-- <div class="w-full max-w-7xl mx-auto px-6 lg:px-8 overflow-x-auto">
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
                        </div>                       --}}


                        {{-- <div class="flex mt-4">
                            <div class="w-1/4 bg-white p-4 border rounded-lg">
                                <h4 class="text-center font-bold mb-4">Pilih Matakuliah</h4>
                
                                <!-- Dropdown Filter Mata Kuliah -->
                                <div class="mb-4">
                                    <label for="mk-filter" class="block text-sm font-medium text-gray-700">Filter Mata Kuliah</label>
                                    <select id="mk-filter"
                                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                        <option value="" disabled selected class="text-gray-500">--Mata Kuliah--</option>
                
                                        @foreach ($mataKuliahs as $mk)
                                            <option value="{{ $mk->id }}">{{ $mk->nama_mk }}</option>
                                        @endforeach
                                    </select>
                                </div>
                
                
                                <div class="mb-4" id="matakuliahList">
                                    @foreach ($matkulAll as $mk)
                                        <div class="matakuliah bg-gray-100 p-2 rounded-lg mb-2 hidden" data-sks="{{ $mk->sks }}"
                                            data-mk-id="{{ $mk->id }}" data-mk-name="{{ $mk->nama_mk }}"
                                            data-mk-semester="{{ $mk->semester }}">
                                            <p class="font-bold">{{ $mk->nama_mk }}</p>
                                            <p class="text-sm">(Semester {{ $mk->semester }})</p>
                                            <p class="text-sm">SKS: {{ $mk->sks }}</p>
                                            <p class="status text-right text-xs text-red-600">Belum Terpilih</p>
                                            <button type="button" class="batal-btn text-sm text-red-500 underline"
                                                data-mk-id="{{ $mk->id }}">
                                                Batal
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                
                
                            </div>
                
                            <div class="w-3/4 ml-4 bg-white p-4 border rounded-lg">
                                <div class="w-full max-w-7xl mx-auto px-6 lg:px-8 overflow-x-auto">
                                    <div class="grid grid-cols-8 border-t border-gray-200 sticky top-0 left-0 w-full">
                                        <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">
                                        </div>
                                        <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">
                                            Senin</div>
                                        <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">
                                            Selasa</div>
                                        <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">
                                            Rabu</div>
                                        <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">
                                            Kamis</div>
                                        <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">
                                            Jumat</div>
                                        <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">
                                            Sabtu</div>
                                        <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">
                                            Minggu</div>
                                    </div>
                
                                    @for ($time = 7; $time <= 21; $time++)
                                        <div class="grid grid-cols-8 border-t border-gray-200">
                                            <div class="p-3.5 flex items-center justify-center text-sm font-medium text-gray-900">
                                                {{ $time }}:00</div>
                                            @for ($day = 1; $day <= 7; $day++)
                                                <div class="flex flex-col h-auto p-0.5 md:p-3.5 border-r border-gray-200 transition-all hover:bg-stone-100 calendar-cell"
                                                    data-day="{{ $day - 1 }}" data-time="{{ $time }}">
                
                                                    @foreach ($jadwals as $jadwal)
                                                        @php
                                                            // Ambil jam mulai dan selesai dari jadwal
                                                            $startHour = intval(substr($jadwal->jam_mulai, 0, 2));
                                                            $endHour = intval(substr($jadwal->jam_selesai, 0, 2));
                
                                                            // Tentukan kelas warna berdasarkan kelas jadwal
                                                            $colorClass = match ($jadwal->kelas) {
                                                                'A' => 'bg-blue-50 border-blue-600 text-blue-600',
                                                                'B' => 'bg-red-50 border-red-600 text-red-600',
                                                                'C' => 'bg-green-50 border-green-600 text-green-600',
                                                                'D' => 'bg-purple-50 border-purple-600 text-purple-600',
                                                                'E' => 'bg-yellow-50 border-yellow-600 text-yellow-600',
                                                                default => 'bg-gray-50 border-gray-600 text-gray-600',
                                                            };
                                                        @endphp
                
                                                        <!-- Render hanya jika jam mulai sesuai dengan slot waktu -->
                                                        @if ($time == $startHour && $jadwal->hari == ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'][$day - 1])
                                                            <div class="relative group">
                                                                <!-- Tombol Jadwal -->
                                                                <button
                                                                    class="rounded p-1.5 border-l-2 {{ $colorClass }} w-full text-left"
                                                                    data-mk-id="{{ $jadwal->mataKuliah->id }}">
                                                                    <p class="text-xs font-normal mb-px">{{ $jadwal->mataKuliah->nama_mk }}
                                                                    </p>
                                                                    <p class="text-xs font-semibold">{{ $jadwal->jam_mulai }} -
                                                                        {{ $jadwal->jam_selesai }}</p>
                                                                </button>
                
                
                                                                <!-- Tooltip untuk detail jadwal -->
                                                                <div
                                                                    class="absolute left-full top-0 ml-0 hidden group-hover:block bg-white shadow-lg border rounded-lg p-4 w-64 z-10">
                                                                    <p class="text-sm font-semibold mb-2">Detail Jadwal</p>
                                                                    <ul class="text-sm text-gray-700 mb-3">
                                                                        <li><strong>Mata Kuliah:</strong>
                                                                            {{ $jadwal->mataKuliah->nama_mk . ' ' . $jadwal->kelas }}</li>
                                                                        <li><strong>Ruang:</strong> {{ $jadwal->ruangan }}</li>
                                                                        <li><strong>Hari:</strong> {{ $jadwal->hari }}</li>
                                                                        <li><strong>Kelas:</strong> {{ $jadwal->kelas }}</li>
                                                                        <li><strong>Kuota kelas:</strong> {{ $jadwal->kuota_kelas }}</li>
                                                                        <li><strong>Jam:</strong> {{ $jadwal->jam_mulai }} -
                                                                            {{ $jadwal->jam_selesai }}</li>
                                                                    </ul>
                
                                                                    <!-- Tombol Edit dan Hapus -->
                                                                    <div class="flex gap-2">
                                                                        <button type="button"
                                                                            class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 tambah-btn"
                                                                            data-sks="{{ $jadwal->mataKuliah->sks }}"
                                                                            data-mk-id="{{ $jadwal->mataKuliah->id }}"
                                                                            data-jadwal-id="{{ $jadwal->id }}"
                                                                            data-start-time="{{ $jadwal->jam_mulai }}"
                                                                            data-end-time="{{ $jadwal->jam_selesai }}">
                                                                            <!-- Tambahkan end-time -->
                                                                            Tambah
                                                                        </button>
                
                
                                                                        <!-- Tombol Hapus -->
                                                                        <button type="button"
                                                                            class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 hapus-btn"
                                                                            data-sks="{{ $jadwal->mataKuliah->sks }}"
                                                                            data-mk-id="{{ $jadwal->mataKuliah->id }}" data-irs-id="">
                                                                            <!-- Awalnya kosong -->
                                                                            Hapus
                                                                        </button>
                
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endfor
                                        </div>
                                    @endfor
                                </div>
                        </div> --}}

                        <div> <!-- Add enough padding to account for the height of the fixed header -->

                            {{-- add box on left of the table --}}


                            <div class="relative mx-14 overflow-x-auto shadow-md sm:rounded-lg flex flex-wrap lg:flex-nowrap">
                                <!-- Pilih Mata Kuliah Box -->
                                <div class="w-full lg:w-1/4 bg-white p-4 border rounded-lg">
                                    <h3 class="text-center font-bold mb-4">Riwayat | <span id = "skscount">{{ $total }}</span> SKS</h3>
{{-- 
                                    <!-- Dropdown Filter Mata Kuliah -->
                                    <div class="mb-4">
                                        <label for="mk-filter" class="block text-sm font-medium text-gray-700">Filter Mata Kuliah</label>
                                        <select id="mk-filter" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                            <option value="" disabled selected class="text-gray-500">--Mata Kuliah--</option>
                                        </select>
                                    </div>

                                    <div class="mb-4" id="matakuliahList"></div> --}}
                                    <div class="mb-4" id="matakuliahList">
                                            
                                    </div>
                                </div>

                               
                            </div>

                      </div>
            {{-- </section> --}}
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

    <script>
        function submitClass(jadwal_id,radio) {
          $.ajax({
              url: "/createirs",  // Laravel route
              type: "POST",
              data: {
                  _token: '{{ csrf_token() }}',          // CSRF token
                    jadwal_id: jadwal_id,  // jadwal_id
              },
              success: function(response) {
                  // Handle success
                  // alert('Success: ' + response.data);
                //   console.log(response.data+response.check);
                  console.log(response.data);
                  //change skscount value to response.sks
                document.getElementById('skscount').innerText = response.data.sks;
                fetchIrsData();
              },
              error: function(xhr, status, error) { 
                Swal.fire({
                    title: "Error!",
                    text: "Anda telah mencapai batas SKS",
                    icon: "warning",
                    customClass: {
              popup: "swal-custom-border", // Reuse the same custom class
            },
                    });
                  console.log('Error: ' + xhr.responseJSON.error);
                  radio.checked = false;
                  handleRadioClick(radio);
              }
          });
        }
    </script>

    <script>

        function fetchIrsData() {
            // Show the loading spinner if data is not already loaded

            $.ajax({
                url: "/viewirs", // Your Laravel route to fetch IRS data
                type: "GET",     // Change to GET request
                success: function(response) {
                    let irsContainer = $('#matakuliahList');
                    irsContainer.empty(); // Clear previous data
                    console.log(response);

                    // Generate the block divs instead of a table
                    let content = `<div>`;
                    response.forEach(row => {
                        content += `
                            <div class="matakuliah bg-[#faf5fe] border-l-4 border-purple-300 text-left text-purple-800 p-2 rounded-lg mb-2" >
                                <p class="font-bold">${row.nama}</p>
                                <p class="text-sm">(Semester ${row.semester})</p>
                                <p class="text-sm">SKS: ${row.sks}</p>
                                <button type="button" class="batal-btn text-sm text-red-500 underline" 
                                        onclick="deleteIrs(${row.id})">
                                    Batal
                                </button>
                            </div>`;
                    });
                    content += `</div>`;

                    isload = true;
                    irsContainer.append(content); // Append the block divs to the container
                },
                error: function(xhr, status, error) {
                    console.error('Error: ' + error);
                },
                complete: function() {
                    // Hide the loading spinner
                    // $("#loading-spinner").hide();
                }
            });
        }

        $(document).ready(function() {
            fetchIrsData();
        });




    </script>

    <script>
        function deleteIrs(id) {
            console.log('Deleting IRS with ID: ' + id);
            $.ajax({
                url: "/deleteirs",  // Your Laravel route to delete IRS data
                type: "POST",
                data: {
                    _token : '{{ csrf_token() }}', // CSRF token
                    id: id // IRS ID
                },
                success: function(response) {
                    console.log(response);
                    // Uncheck the radio button for the deleted schedule
                    let radioId = `#kelas-${response.kodejadwal}`;
                    $(radioId).prop('checked', false);

                    // Remove conflicts related to the deleted schedule
                    removeConflict(document.querySelector(radioId));

                    // Update the SKS count
                    document.getElementById('skscount').innerText = response.sks;

                    // Fetch updated IRS data (if necessary)
                    fetchIrsData('{{ $email }}');
                },
                error: function(xhr, status, error) {
                    console.log('Error: ' + error);
                }
            });
        }
    </script>

    <script>

        let conflictArray = []; // Global array to track conflicting schedules

        // Function to extract start and end times from "jam" string (e.g., "07.00 - 09.30")
        function extractTimeRange(jamString) {
            let [startTime, endTime] = jamString.split(' - ');
            console.log(`Extracted time range: Start - ${startTime}, End - ${endTime}`);
            return { startTime, endTime };
        }

        // Function to check for conflicts and update the conflict array
        function checkConflict(selectedRadio) {
            let selectedHari = selectedRadio.getAttribute('data-hari');
            let selectedJam = selectedRadio.getAttribute('data-jam');
            let { startTime: selectedStartTime, endTime: selectedEndTime } = extractTimeRange(selectedJam);

            console.log(`Selected Schedule: ${selectedHari} from ${selectedStartTime} to ${selectedEndTime}`);

            document.querySelectorAll('input[type="radio"]').forEach(radio => {
                let hari = radio.getAttribute('data-hari');
                let jam = radio.getAttribute('data-jam');
                let { startTime, endTime } = extractTimeRange(jam);

                let row = document.querySelector(`label[for="${radio.id}"]`);

                // Reset the specific radio if it's not already in the conflict array
                if (!conflictArray.includes(radio.getAttribute('id'))) {
                    radio.disabled = false;
                    toggleRowHighlight(row, false);
                }

                // If it's the same day and there's a time conflict
                if (hari === selectedHari && selectedRadio !== radio) {
                    console.log(`Same day as selected (${hari}). Checking time conflict...`);

                    if (
                        (startTime < selectedEndTime && startTime >= selectedStartTime) ||
                        (selectedStartTime < endTime && selectedStartTime >= startTime)
                    ) {
                        console.log(`Conflict found! Disabling radio and adding 'bg-[#E71B1B]' for time: ${startTime} - ${endTime}`);

                        // Disable the conflicting schedule and highlight the row
                        radio.disabled = true;
                        // toggleRowClass(row,false);
                        toggleRowHighlight(row, true);

                        // Add the conflicting radio id to the conflict array
                        if (!conflictArray.includes(radio.getAttribute('id'))) {
                            conflictArray.push(radio.getAttribute('id'));
                        }
                    }
                }
            });

            console.log('Conflicting radio buttons:', conflictArray);
        }

        // Function to remove conflicts when a schedule is deselected
        function removeConflict(selectedRadio) {
            let selectedHari = selectedRadio.getAttribute('data-hari');
            let selectedJam = selectedRadio.getAttribute('data-jam');
            let { startTime: selectedStartTime, endTime: selectedEndTime } = extractTimeRange(selectedJam);

            console.log(`Removing conflicts for: ${selectedHari} from ${selectedStartTime} to ${selectedEndTime}`);

            // Iterate through conflictArray to remove conflicts associated with the deselected schedule
            conflictArray = conflictArray.filter(radioId => {
                let radio = document.getElementById(radioId);
                let hari = radio.getAttribute('data-hari');
                let jam = radio.getAttribute('data-jam');
                let { startTime, endTime } = extractTimeRange(jam);

                let kode = selectedRadio.name;
                let radios = document.querySelectorAll(`input[type="radio"][name="${kode}"]`);
                radios.forEach(radio => {
                            let row = document.querySelector(`label[for="${radio.id}"]`);
                            if(radio.checked){
                                // toggleRowClass(row, true);
                            }else{
                                // toggleRowClass(row, false);
                            }
                });
                // Re-enable the radio and remove the bg-red-800 class if it no longer conflicts
                if (hari === selectedHari && (
                    (startTime < selectedEndTime && startTime >= selectedStartTime) ||
                    (selectedStartTime < endTime && selectedStartTime >= startTime)
                )) {
                    console.log(`Enabling ${radioId}, no longer in conflict`);
                    radio.disabled = false;
                    let row = document.querySelector(`label[for="${radio.id}"]`);
                    toggleRowHighlight(row, false);
                    return false; // Remove this radioId from the conflict array
                }


                //restore style for same course

                


                return true; // Keep this radioId in the conflict array
            });

            console.log('Updated conflict array after removal:', conflictArray);
        }

        function handleRadioClick(radio) {

                conflictArray.forEach(radioId => {
                    let radio = document.getElementById(radioId);
                    let row = document.querySelector(`label[for="${radio.id}"]`);
                    radio.disabled = false;
                    toggleRowHighlight(row, false);
                });

                let selectedRadios = document.querySelectorAll('input[type="radio"]:checked');
                console.log('Selected radio buttons found:', selectedRadios);

                selectedRadios.forEach(selectedRadio => {
                    
                    checkConflict(selectedRadio);
                    // nonSelectedClass(selectedRadio);
                });

                //change style for same course
                // nonSelectedClass(radio);

        }

        // Automatically check for conflicts after page reload
        document.addEventListener('DOMContentLoaded', function() {
            // Find all selected radio buttons (if any) and check for conflicts
            let selectedRadios = document.querySelectorAll('input[type="radio"]:checked');
            console.log('Selected radio buttons found:', selectedRadios);

            // Iterate over the selected radio buttons and check conflicts for each one
            selectedRadios.forEach(selectedRadio => {

                checkConflict(selectedRadio); 
                //change style for course class that not selected, for ex : Selected Strukdat A, Strukdat B will change style
                // nonSelectedClass(selectedRadio);

                // Check for conflicts

            });
        });

        function nonSelectedClass(radio){

            //change style for same course
            let kode = radio.name;
            let radios = document.querySelectorAll(`input[type="radio"][name="${kode}"]`);
            radios.forEach(radio => {
                        let row = document.querySelector(`label[for="${radio.id}"]`);
                        if(radio.checked){
                            // toggleRowClass(row, false);
                        }else{
                            if(radio.disabled){
                                console.log('disabled'); 
                            }else{
                                // toggleRowClass(row, true);
                            }
                        }
            });
        }


        function toggleRowHighlight(row, isHighlighted) {
            if (isHighlighted) {
                row.classList.remove('border-purple-300','text-gray-900','bg-[#faf5fe]', 'hover:bg-gray-100');
                row.classList.add('text-red-800', 'border-red-300' ,'bg-red-50','hover:bg-[#faf7f7]');
            } else {
                row.classList.add('border-purple-300','text-gray-900','bg-[#faf5fe]', 'hover:bg-gray-100');
                row.classList.remove('text-red-800','border-red-300' ,'bg-red-50','hover:bg-[#faf7f7]');
            }
        }

        function toggleRowClass(row, isHighlighted) {
            if (isHighlighted) {
                row.classList.remove('border-gray-200','dark:text-white','dark:bg-gray-800', 'hover:bg-gray-100', 'dark:hover:bg-gray-700','dark:hover:text-gray-300');
                row.classList.add('dark:bg-gray-600','border-blek-900','dark:text-gray-400','border-l-4');
            } else {
                row.classList.add('border-gray-200','dark:text-white','dark:bg-gray-800', 'hover:bg-gray-100', 'dark:hover:bg-gray-700','dark:hover:text-gray-300');
                row.classList.remove('dark:bg-gray-600','border-gray-400','dark:text-gray-400');
            }
        }



    </script>
</body>