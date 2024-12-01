<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Tambah Ruang</title>
</head>
<body>
    <x-navbar></x-navbar>
    <div class="flex pt-12">
        <x-side-bar-ba></x-side-bar-ba>
        <div class="ml-[17%] bg-[#AEC0F1] h-screen w-screen">
            <div class="my-16 ml-9">
                <h1 class="text-3xl font-semibold">Buat Ruang</h1>
            </div>
            <div class="flex justify-end mr-10">
                <!-- Button to open modal -->
                <button id="openModal" class="bg-orange-600 text-white font-semibold px-5 py-3 rounded-lg">+Tambah Ruang</button>
            </div>

            <div class="mx-12 mt-6">
                <table class="w-full text-center font-bold bg-white rounded-2xl">
                    <thead class=" border-b-2">
                        <tr>
                            <th class="w-[20%] py-3">No Ruang</th>
                            <th class="w-[5%] py-3">Blok Gedung</th>
                            <th class="w-[15%] py-3">Lantai</th>
                            <th class="w-[10%] py-3">Kapasitas</th>
                            <th class="w-[20%] py-3">Keperluan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ruangs as $ruang)
                        <tr>
                            <td class="py-3">{{ $ruang->no_ruang }}</td>
                            <td class="py-3">{{ $ruang->blok_gedung }}</td>
                            <td class="py-3">{{ $ruang->lantai }}</td>
                            <td class="py-3">{{ $ruang->kapasitas }}</td>
                            <td class="py-3">{{ $ruang->keperluan }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal for Adding Ruang -->
    <div id="modal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white w-96 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Tambah Ruang</h2>
            <form action="{{ route('ruang.store') }}" method="POST">
                @csrf
                <!-- Input Fields -->
                <div class="mb-4">
                    <label for="no_ruang" class="block text-sm font-medium text-gray-700">No Ruang</label>
                    <input type="text" id="no_ruang" name="no_ruang" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
                </div>
            
                <div class="mb-4">
                    <label for="blok_gedung" class="block text-sm font-medium text-gray-700">Blok Gedung</label>
                    <input type="text" id="blok_gedung" name="blok_gedung" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
                </div>
            
                <div class="mb-4">
                    <label for="lantai" class="block text-sm font-medium text-gray-700">Lantai</label>
                    <input type="number" id="lantai" name="lantai" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
                </div>
            
                <div class="mb-4">
                    <label for="kapasitas" class="block text-sm font-medium text-gray-700">Kapasitas</label>
                    <input type="number" id="kapasitas" name="kapasitas" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
                </div>
            
                <div class="mb-4">
                    <label for="keperluan" class="block text-sm font-medium text-gray-700">Keperluan</label>
                    <input type="text" id="keperluan" name="keperluan" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
                </div>
            
                <div class="flex justify-end space-x-4">
                    <button type="button" id="closeModal" class="bg-gray-400 text-white px-4 py-2 rounded-lg">Batal</button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Simpan</button>
                </div>
            </form>
            
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
</body>
</html>
