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
        <div class="w-full w-screen ml-[17%] bg-[#AEC0F1] text-center">
            <div class="my-7 flex justify-end mr-10 font-semibold text-white">
                <button id="approve-all" class="px-4 py-2 bg-[#01A871] rounded-lg">Setujui Semua</button>
            </div>
            <div class="mx-12">
                <table class="w-full text-center font bg-white rounded-2xl">
                    <thead class="border-b-2">
                        <tr>
                            <th class="w-[10%] py-3">No Ruang</th>
                            <th class="w-[10%] py-3">Blok Gedung</th>
                            <th class="w-[7%] py-3">Lantai</th>
                            <th class="w-[15%] py-3">Prodi</th>
                            <th class="w-[8%] py-3">Kapasitas</th>
                            <th class="w-[15%] py-3">Keperluan</th>
                            <th class="w-[15%] py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $ruang)
                            <tr>
                                <td class="py-3">{{ $ruang->no_ruang }}</td>
                                <td class="py-3">{{ $ruang->blok_gedung }}</td>
                                <td class="py-3">{{ $ruang->lantai }}</td>
                                <td class="py-3">{{ $ruang->prodi }}</td>
                                <td class="py-3">{{ $ruang->kapasitas }}</td>
                                <td class="py-3">{{ $ruang->keperluan }}</td>
                                <td class="py-3">
                                    @if($ruang->status == 'Pending')
                                    <button 
                                        class="bg-green-400 w-24 py-1 rounded-lg approve-button" 
                                        data-no-ruang="{{ $ruang->no_ruang }}" 
                                        data-url="{{ route('ruang.approve') }}">
                                        Setujui
                                    </button>

                                
                                        <button 
                                            class="bg-red-600 w-24 py-1 rounded-lg reject-button" 
                                            data-id="{{ $ruang->id }}"> Tolak
                                        </button>
                                    @else
                                        <span class="text-gray-500">{{ $ruang->status }}</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
$(document).on('click', '.approve-button', function (e) {
    e.preventDefault();

    const noRuang = $(this).data('no-ruang');
    const url = $(this).data('url');

    console.log("No Ruang:", noRuang);
    console.log("URL:", url);

    Swal.fire({
        title: "Are you sure?",
        text: "To approve this room?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Approve it!"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: url,
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: { no_ruang: noRuang },
                success: function (response) {
                    console.log("Response:", response);
                    Swal.fire({
                        title: "Approved!",
                        text: response.message,
                        icon: "success"
                    });
                    location.reload();
                },
                error: function (xhr, status, error) {
                    console.error("Status:", status);
                    console.error("Error:", error);
                    console.error("Response:", xhr.responseText);
                    Swal.fire({
                        title: "Error",
                        text: "An error occurred while approving the room: " + xhr.responseText,
                        icon: "error"
                    });
                }
            });
        }
    });
});
</script>
<script>
    document.getElementById('approve-all').addEventListener('click', function() {
        Swal.fire({
            title: "Are you sure?",
            text: "Approve All Room?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Approve It"
            }).then((result) => {
            if (result.isConfirmed) {
                    fetch('{{ route('ruang.approveAll') }}', {
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
                text: "All Room has been Approved.",
                icon: "success"
                });
            }
        });
    });
</script>