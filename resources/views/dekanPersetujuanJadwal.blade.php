<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <x-navbar></x-navbar>
    <div class="flex pt-12">
        <x-side-bar-dekan></x-side-bar-dekan>
        <div class="w-full h-screen ml-[17%] bg-[#AEC0F1] text-center">
            <div class="my-7 flex justify-end mr-10 font-semibold text-white">
                <button id="approve-all" class="px-4 py-2 bg-[#01A871] rounded-lg">Setujui Semua</button>
            </div>
            <div class="mx-12">
                <table class="w-full text-center font bg-white rounded-2xl">
                    <thead class="border-b-2">
                        <tr>
                            <th class="w-[30%] py-3">Mata Kuliah</th>
                            <th class="w-[5%] py-3">Kelas</th>
                            <th class="w-[25%] py-3">Waktu</th>
                            <th class="w-[10%] py-3">Ruang</th>
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
                                <td class="py-3">
                                    @if($jadwal->status == 'Pending')
                                        <button 
                                            class="bg-green-400 w-24 py-1 rounded-lg approve-button" 
                                            data-id="{{ $jadwal->kode_mk }}"> Setuju
                                        </button>
                        
                                        <button 
                                            class="bg-red-600 w-24 py-1 rounded-lg reject-button" 
                                            data-id="{{ $jadwal->kode_mk }}"> Tolak
                                        </button>
                        
                                    @else
                                        <span class="text-gray-500">{{ $jadwal->status }}</span>
                                    @endif
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.approve-button').on('click', function (e) {
            e.preventDefault(); // Prevent default button behavior
            Swal.fire({
                title: "Are you sure?",
                text: "To Approve this Schedule?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Approve it!"
                }).then((result) => {
                if (result.isConfirmed) {
                    const kodeMk = $(this).data('id');

            // Send an AJAX POST request
                    $.ajax({
                        url: '{{ route("jadwal.approve") }}', // Route to your approve method
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Laravel CSRF protection
                        },
                        data: { kode_mk: kodeMk }, // Data to be sent in the request
                        success: function (response) {
                            location.reload(); // Optionally reload the page or update UI dynamically
                        },
                        error: function (xhr, status, error) {
                            console.error(xhr.responseText); // Log error for debugging
                        }
                    });

                    Swal.fire({
                    title: "Approved!",
                    text: "Schedule has been Approved",
                    icon: "success"
                    });
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('.reject-button').on('click', function (e) {
            e.preventDefault(); // Prevent default button behavior
            
            // Get the ID from the button's data-id attribute
            const kodeMk = $(this).data('id');

            // Send an AJAX POST request
            $.ajax({
                url: '{{ route("jadwal.reject") }}', // Route to your approve method
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Laravel CSRF protection
                },
                data: { kode_mk: kodeMk }, // Data to be sent in the request
                success: function (response) {
                    alert(response.message); // Show success message
                    location.reload(); // Optionally reload the page or update UI dynamically
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText); // Log error for debugging
                    alert('An error occurred. Please try again.');
                }
            });
        });
    });
</script>
<script>
    document.getElementById('approve-all').addEventListener('click', function() {
        Swal.fire({
            title: "Are you sure?",
            text: "Approve All Schedule?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Approve It"
            }).then((result) => {
            if (result.isConfirmed) {
                    fetch('{{ route('jadwal.approveAll') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                    },
                })
                .then(response => response.json())
                .then(data => {
                    location.reload(); // Reload the page to reflect changes
                })
                .catch(error => {
                    console.error('Error:', error);
                });
                Swal.fire({
                title: "Approved!",
                text: "All Schedule has been Approved.",
                icon: "success"
                });
            }
        });
    });
</script>
