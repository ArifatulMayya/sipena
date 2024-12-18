<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pengajuan IRS - SIPENA UNDIP</title>
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.6/css/dataTables.dataTables.css" />
  <script src="https://cdn.datatables.net/2.1.6/js/dataTables.js"></script>

</head>
<body class="bg-[#AEC0F1] h-screen font-sans">

  <x-navbar></x-navbar>

  <div class="flex pt-12">
    <x-sidebar-pa></x-sidebar-pa>

    <!-- Main Content -->
    <div class="w-full p-6">
      <h1 class="text-2xl font-bold mb-4">Daftar Pengajuan IRS</h1>

      <!-- Search Form -->
      <div class="flex justify-center items-center mb-4">
        {{-- <form action="{{ route('mahasiswa.cari1') }}" method="GET" class="flex w-full max-w-screen-lg"> --}}
          <input
            name="search"
            value="{{ request('search') }}"
            class="p-5 w-3/6 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
            placeholder="Cari Nama/NIM Mahasiswa"
            id="table-search" 
            type="text" />
          <input type="hidden" name="sort" value="{{ request('sort', 'asc') }}">
          <button type="submit" class="ml-4 px-4 py-2 bg-orange-500 hover:bg-orange-700 text-white rounded-lg">
            Cari
          </button>
          <div class="flex space-x-2">
            <a href="{{ route('mahasiswa.urutkan1', ['sort' => $sort === 'asc' ? 'desc' : 'asc']) }}" 
              class="ml-20 px-4 py-2 bg-blue-900 hover:bg-blue-950 text-white rounded-lg">
              Urutkan {{ $sort === 'asc' ? 'NIM' : 'NIM' }}
            </a>
            <button onclick = "approveAll()" class="ml-4 px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded-lg setuju-all">
              Setujui Semua
            </button>
          </div>
        </form>
      </div>

      <!-- Table -->
      <table class="w-full bg-white rounded-lg">
        <thead>
          <tr class="bg-gray-200">
            <th class="p-4 text-center">No</th>
            <th class="p-4 text-center">NIM</th>
            <th class="p-4 text-center">Nama</th>
            <th class="p-4 text-center">Semester</th>
            <th class="p-4 text-center">IRS</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($mahasiswa as $index => $mhs)
          <tr class="border-b">
            <td class="p-2 text-center">{{ $loop->iteration + ($mahasiswa->currentPage() - 1) * $mahasiswa->perPage() }}</td>
            <td class="p-2 text-center">{{ $mhs->nim }}</td>
            <td class="p-2">{{ $mhs->nama }}</td>
            <td class="p-2 text-center">{{ $mhs->semester }}</td>
            <td class="p-2 text-center">
              <button 
                class="px-3 py-1 bg-orange-500 text-white rounded-md hover:bg-orange-700 detail-button"
                data-id="{{ $loop->iteration }}">
                Detail
              </button>
            </td>
          </tr>
          <!-- Detail Row -->
          <tr id="detail-{{ $loop->iteration }}" class="hidden">
            <td colspan="5" class="border border-gray-300 px-4 py-2 bg-gray-100">
              <h2 class="text-lg font-bold justify-center mb-5">IRS Gasal 2024/2025</h2>
              
              @if ($mhs->irs->count() > 0)
                <table class="w-full" id = "irs-{{ $mhs->nim }}"> 
                  <thead>
                    <tr>
                      <th class="border border-gray-300 px-4 py-2">No</th>
                      <th class="border border-gray-300 px-4 py-2">Kode MK</th>
                      <th class="border border-gray-300 px-4 py-2">Mata Kuliah</th>
                      <th class="border border-gray-300 px-4 py-2">Kelas</th>
                      <th class="border border-gray-300 px-4 py-2">Ruang</th>
                      <th class="border border-gray-300 px-4 py-2">Dosen</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($mhs->irs as $irs)
                      <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $irs->kode_mk }}</td>
                        <td class="border border-gray-300 px-4 py-2"><b>{{ $irs->nama_mk }}</b>
                          <br>({{ $irs->sks }} SKS) - {{ $irs->status }}<br><i>{{ $irs->hari }} pukul {{ $irs->jam }}</i>
                        </td>
                        <td class="border border-gray-300 px-4 py-2">{{ $irs->kelas }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $irs->ruang }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                          Dr. Aris Sugiharto, S.Si, M.Kom.<br/>
                          Dr. Hermie Arif Wibawa, S.Si., M.Cs.
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>

                <div class="flex justify-end mt-4">
                  <!-- Tombol Setuju -->
                  <button class="bg-green-500 text-white p-2 rounded mr-2 hover:bg-green-700 setuju-button {{ $mhs->isPending?'':'hidden' }}" onclick="approveIrs('{{ $mhs->nama }}', '{{ $mhs->nim }}')"
                          data-id="{{ $loop->iteration }}" data-nim="{{ $mhs->nim }}" data-semester={{ $mhs->semester }}>
                    Setuju
                  </button>
                  <!-- Tombol Tolak -->
                  <button class="bg-red-500 text-white p-2 rounded hover:bg-red-700 tolak-button {{ $mhs->isPending?'':'hidden' }}"
                          data-id="{{ $loop->iteration }}">
                    Tolak
                  </button>
            
                  <!-- Tombol Print IRS, disembunyikan terlebih dahulu -->
                  <button class="bg-blue-500 text-white p-2 rounded mt-2 {{ $mhs->isPending?'hidden':'' }} print-irs-button" 
                          id="print-irs-{{ $loop->iteration }}" onclick="generatePDF('{{ $mhs->nim }}','{{ $mhs->nama }}','Informatika','{{ $mhs->nama_doswal }}',{{ $mhs->nip_doswal }})">
                    Print IRS
                  </button>
                </div>
              @else
                <p class="text-center">Mahasiswa Belum Membuat IRS.</p>
              @endif
                  
              
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="5" class="text-center p-4 mb-4">Tidak ada data mahasiswa.</td>
          </tr>
          @endforelse
        </tbody>
      </table>

      <!-- Pagination -->
      <div class="w-full mt-4 flex justify-between items-center">
        @if ($mahasiswa->onFirstPage())
        <button class="px-4 py-2 bg-gray-400 text-white rounded-lg cursor-not-allowed" disabled>Previous</button>
      @else
        <a href="{{ $mahasiswa->previousPageUrl() }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg">Previous</a>
      @endif
    
      <!-- Next Button -->
      @if ($mahasiswa->hasMorePages())
        <a href="{{ $mahasiswa->nextPageUrl() }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg ml-4">Next</a>
      @else
        <button class="px-4 py-2 bg-gray-400 text-white rounded-lg ml-4 cursor-not-allowed" disabled>Next</button>
      @endif
      </div>
    </div>
  </div>

  <script>
    document.getElementById('table-search').addEventListener('input', function () {
        const searchTerm = this.value.toLowerCase(); // Get the search term in lowercase
        const rows = document.querySelectorAll('tbody tr:not(.hidden)'); // Select all rows except hidden ones

        rows.forEach(row => {
            const cells = row.querySelectorAll('td'); // Get all cells in the row
            const text = Array.from(cells).map(cell => cell.textContent.toLowerCase()).join(' ');

            if (text.includes(searchTerm)) {
                row.style.display = ''; // Show the row
            } else {
                row.style.display = 'none'; // Hide the row
            }
        });
    });
  </script>

  <!-- Javascript Button Detail -->
  <script>
    document.querySelectorAll('.detail-button').forEach(button => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('data-id');
            const detailRow = document.getElementById(`detail-${id}`);

            // Toggle visibility
            if (detailRow) {
                detailRow.classList.toggle('hidden');
            }
        });
    });
  </script>
 <script>
//   document.querySelectorAll('.setuju-button').forEach(button => {
//     button.addEventListener('click', () => {
//         const nim = button.getAttribute('data-nim');
//         const semester = button.getAttribute('data-semester');
//         const tahunAjaran = "2024/2025 Genap";
//         const status = "Disetujui";

//         fetch("/irs/approve", {
//             method: "POST",
//             headers: {
//                 "Content-Type": "application/json",
//                 "X-CSRF-TOKEN": "{{ csrf_token() }}",
//             },
//             body: JSON.stringify({
//                 nim: nim,
//                 semester: semester,
//                 tahun_ajaran: tahunAjaran,
//                 status: status,
//             }),
//         })
//         .then(response => response.json())
//         .then(data => {
//             if (data.success) {
//                 Swal.fire({
//                     title: "Berhasil",
//                     text: data.message,
//                     icon: "success"
//                 });
//             } else {
//                 Swal.fire({
//                     title: "Gagal",
//                     text: "Terjadi kesalahan",
//                     icon: "error"
//                 });
//             }
//         })
//         .catch(error => {
//             console.error("Error:", error);
//             Swal.fire({
//                 title: "Gagal",
//                 text: "Terjadi kesalahan pada server",
//                 icon: "error"
//             });
//         });
//     });
// });

    function approveIrs(nama, nim) {
      Swal.fire({
        title: " Anda yakin ingin Menyetujui IRS dari " + nama + "?",
        text: "Tindakan tidak bisa dikembalikan",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Setujui!",
        customClass: {
          popup: "swal-custom-border", // Add custom class for the popup
        },
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: "/irs/approve",
            type: "POST",
            data: {
              _token: '{{ csrf_token() }}',
              nim: nim,
            },
            success: function (response) {
              console.log(response);
              Swal.fire({
                title: "Disetujui!",
                text: "IRS disetujui untuk " + nama,
                icon: "success",
                customClass: {
                  popup: "swal-custom-border", // Reuse the same custom class
                },
              }).then(() => {
                location.reload();
              });
            },
          });
        }
      });
    }

    function rejectIrs(nama, nim) {
      Swal.fire({
        title: "Anda yakin ingin Menolak IRS dari " + nama + "?",
        text: "Tindakan Tidak bisa dikembalikan",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Tolak!",
        customClass: {
          popup: "swal-custom-border", // Add custom class for the popup
        },
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: "/irs/reject",
            type: "POST",
            data: {
              _token: '{{ csrf_token() }}',
              nim: nim,
            },
            success: function (response) {
              console.log(response);
              Swal.fire({
                title: "Ditolak!",
                text: "IRS ditolak untuk" + nama,
                icon: "success",
                customClass: {
                  popup: "swal-custom-border", // Reuse the same custom class
                },
              }).then(() => {
                location.reload();
              });
            },
          });
        }
      });
    }

    function approveAll(){
      Swal.fire({
        title: "Anda yakin ingin Menyetujui Semua IRS?",
        text: "Tindakan Tidak bisa dikembalikan",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Setujui Semua",
        customClass: {
          popup: "swal-custom-border", // Add custom class for the popup
        },
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: "/irs/approve-all",
            type: "POST",
            data: {
              _token: '{{ csrf_token() }}',
              nim: 123,
            },
            success: function (response) {
              console.log(response);
              Swal.fire({
                title: "Disetujui!",
                text: "IRS disetujui untuk semua mahasiswa Perwalian anda",
                icon: "success",
                customClass: {
                  popup: "swal-custom-border", // Reuse the same custom class
                },
              }).then(() => {
                location.reload();
              });
            },
          });
        }
      });
    }

    

</script>

{{-- <script>
  // Menambahkan event listener pada semua tombol dengan kelas 'setuju-button'
  document.querySelectorAll('.tolak-button').forEach(button => {
      button.addEventListener('click', () => {
          // Menampilkan SweetAlert
          Swal.fire({
              title: "Berhasil Ditolak!", 
              text: "Pengajuan IRS berhasil ditolak", 
              icon: "success" // Gunakan 'success' untuk ikon checklist
          });
      });
  });
</script>
<script>
  // Menambahkan event listener pada semua tombol dengan kelas 'setuju-button'
  document.querySelectorAll('.setuju-all').forEach(button => {
      button.addEventListener('click', () => {
          // Menampilkan SweetAlert
          Swal.fire({
              title: "Berhasil", 
              text: "Semua IRS berhasil disimpan", 
              icon: "success" // Gunakan 'success' untuk ikon checklist
          });
      });
  });
</script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
<script>

  function generatePDF(nim,nama,prodi,nama_doswal,nip_doswal) {
                const { jsPDF } = window.jspdf;
                const doc = new jsPDF();

                // Mendapatkan lebar halaman PDF
                const pageWidth = doc.internal.pageSize.getWidth();

                // Menambahkan header
                doc.setFontSize(10);
                doc.setFont("times");
                doc.text("KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET DAN TEKNOLOGI", pageWidth / 2, 10, { align: "center" });
                doc.text("FAKULTAS SAINS DAN MATEMATIKA", pageWidth / 2, 16, { align: "center" });
                doc.text("UNIVERSITAS DIPONEGORO", pageWidth / 2, 22, { align: "center" });

                // Menambahkan judul
                doc.setFontSize(10);
                doc.setFont("times", "bold");
                let currentY = 35;
                doc.text("ISIAN RENCANA STUDI MAHASISWA", pageWidth / 2, currentY, { align: "center" });
                currentY += 15;

                // Menambahkan informasi detail
                const marginLeft = 14; // Margin kiri untuk teks
                doc.setFontSize(10);
                doc.setFont("times", "normal");
                doc.text(`NIM                        : ${nim}`, marginLeft, currentY);
                currentY += 5;
                doc.text(`Nama Mahasiswa          : ${nama}`, marginLeft, currentY);
                currentY += 5;
                doc.text("Program Studi        : Informatika", marginLeft, currentY);
                currentY += 5;
                doc.text(`Nama Doswal      : ${nama_doswal}`, marginLeft, currentY);

                // Membuat tabel di bawah informasi detail
                doc.autoTable({
                    html: `#${'irs-' + nim}`,
                    startY: currentY + 5,
                    theme: 'grid',
                    styles: {
                        font: "times",
                        fontSize: 8,
                        cellPadding: 3,
                        halign: 'center',
                        valign: 'middle',
                        lineColor: [0, 0, 0],
                        lineWidth: 0.25,
                        overflow: 'linebreak'
                    },
                    headStyles: {
                        font: "times",
                        textColor: [0, 0, 0],
                        fillColor: [255, 255, 255],
                        fontSize: 8,
                        fontStyle: "bold"
                    }
                });

                // Menambahkan tanda tangan
                const marginRight = pageWidth - 100; // Posisi margin kanan
                const endTableY = doc.lastAutoTable.finalY + 10;

                doc.setFontSize(10);
                doc.text("Pembimbing Akademik (Dosen Wali)", marginLeft, endTableY + 5);
                doc.text(`(${nama_doswal})`, marginLeft, endTableY + 30);
                doc.text(`NIP: ${nip_doswal}`, marginLeft, endTableY + 35);

                doc.text("Semarang, " + formatDate(new Date()), marginRight, endTableY);
                doc.text("Nama Mahasiswa", marginRight, endTableY + 5);
                doc.text(`(${nama})`, marginRight, endTableY + 30);
                doc.text("NIM: " + nim, marginRight, endTableY + 35);

                // Menyimpan file PDF
                doc.save('IRS_Mahasiswa.pdf');
            }

            function formatDate(date) {
                const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                const day = date.getDate();
                const month = months[date.getMonth()];
                const year = date.getFullYear();
                return day + " " + month + " " + year;
            }
</script>


</body>
</html>
