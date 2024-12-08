<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
    <style>
        /* Modal background */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        /* Modal content */
        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 300px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body class="bg-[#AEC0F1]">

    <!-- Navbar -->
    <x-navbar></x-navbar>

    <!-- Main Content -->
    <div class="flex">
        <x-side-bar-mahasiswa></x-side-bar-mahasiswa>
        <div class="h-screen ml-[17%] pt-20 w-full text-center">
            <h1 class="mt-8 font-semibold text-2xl">Pilih Status Akademik</h1>
            <h1 class="mt-4 font-light">Pilih Status Akademik untuk Semester ini:</h1>

            <!-- Status Options Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8">
                <!-- Aktif Button -->
                <div class="bg-white flex flex-col justify-between mx-4 sm:mx-10 mt-4 rounded-xl h-[60vh] shadow-md">
                    <div class="p-6">
                        <h1 class="font-bold py-4 text-3xl border-b-2">Aktif</h1>
                        <p class="mt-4 text-left px-8">Anda akan mengikuti kegiatan perkuliahan pada semester ini serta mengisi isian Rencana Studi (IRS)</p>
                    </div>
                    <button id="aktifBtn" class="bg-[#437BF7] text-white py-2 rounded-b-xl hover:bg-[#10296E]" onclick="updateStatus('Aktif')" id="btnAktif">Pilih</button>
                </div>

                <!-- Cuti Button -->
                <div class="bg-white flex flex-col justify-between mx-4 sm:mx-10 mt-4 rounded-xl h-[60vh] shadow-md">
                    <div class="p-6">
                        <h1 class="font-bold py-4 text-3xl border-b-2">Cuti</h1>
                        <p class="mt-4 text-left px-8">Menghentikan kuliah sementara untuk semester ini tanpa kehilangan status sebagai mahasiswa undip.</p>
                    </div>
                    <button id="cutiBtn" class="bg-[#437BF7] text-white py-2 rounded-b-xl hover:bg-[#10296E]" onclick="updateStatus('Cuti')" id="btnCuti">Pilih</button>
                </div>
            </div>

            <!-- Status Akademik Anda Section -->
            <div class="text-left items-center text-white py-12 px-4 h-[15vh] bg-[#2D4995] mt-8">
                <h1 class="text-xl">Status Akademik Anda: <span id="status-akademik" class="font-semibold">Belum Dipilih</span></h1>
            </div>

            <!-- Reset Button -->
            <div id="resetContainer" class="hidden mt-8">
                <button class="bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700" onclick="resetStatus()">Batal Pilih</button>
            </div>
        </div>
    </div>

    <script>
        // Variable to track if status has been selected
        let isStatusSelected = false;

        // Function to update the status
        function updateStatus(status) {
            if (isStatusSelected) {
                return; // Do nothing if status has already been selected
            }

            // Update the displayed status
            document.getElementById("status-akademik").textContent = status;

            // Show modal with the selected status message
            document.getElementById("modal-message").textContent = "Studi Akademik Anda " + status;
            document.getElementById("modal").style.display = "flex";

            // Disable the buttons after a choice has been made
            document.getElementById("btnAktif").disabled = true;
            document.getElementById("btnCuti").disabled = true;

            // Show the reset button
            document.getElementById("resetContainer").classList.remove("hidden");

            // Set the flag to true to prevent further changes
            isStatusSelected = true;
        }

        // Function to close the modal
        function closeModal() {
            document.getElementById("modal").style.display = "none"; // Hide the modal
        }

        // Function to reset the status
        function resetStatus() {
            // Reset the displayed status
            document.getElementById("status-akademik").textContent = "Belum Dipilih";

            // Enable the buttons
            document.getElementById("btnAktif").disabled = false;
            document.getElementById("btnCuti").disabled = false;

            // Hide the reset button again
            document.getElementById("resetContainer").classList.add("hidden");

            // Set the flag to false to allow changing the status again
            isStatusSelected = false;
        }
    </script>

</body>

</html>

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',  // Pastikan ini mengandung string yang benar
            showConfirmButton: true,
            timer: 3000
        });
    </script>
@endif  

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: '{{ session('error') }}',
            showConfirmButton: true,
            timer: 5000  // Optional: Auto-close after 5 seconds
        });
    </script>
@endif

        
        
        
