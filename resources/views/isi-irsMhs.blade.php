<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> IRS - SIPENA UNDIP </title>
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-[#AEC0F1] h-screen font-sans">
   <div class="flex items-center"> 
        <x-sidebar1-mhs></x-sidebar1-mhs>
        <div class="flex-1 p-6">
            <div class="bg-[#AEC0F1] p-6">
                <h1 class="text-center text-xl font-bold mb-4">Isian Rencana Studi</h1>
                <div class="mb-4">
                    <p>Nama : {{ $mahasiswa->nama }}</p>
                    <p>NIM : {{ $mahasiswa->nim }}</p>
                    <p>Semester: {{ $semester }} </p>
                </div>
                <table class="w-full bg-white rounded-md overflow-hidden" id="irs-table">
                    <thead class="bg-blue-800 text-white">
                        <tr>
                            <th class="p-2">No.</th>
                            <th class="p-2">Kode</th>
                            <th class="p-2">Mata Kuliah</th>
                            <th class="p-2">SKS</th>
                            <th class="p-2">Kelas</th>
                            <th class="p-2">Ruangan</th>
                            <th class="p-2">Hari</th>
                            <th class="p-2">Jam</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($dataIRS as $index=>$irs)
                        <tr>
                            <td class="p-2 text-center">{{ $index+1 }}</td>
                            <td class="p-2 text-center">{{ $irs->kode_mk }}</td>
                            <td class="p-2 text-center">{{ $irs->nama_mk }}</td>
                            <td class="p-2 text-center">{{ $irs->sks }}</td>
                            <td class="p-2 text-center">{{ $irs->kelas }}</td>
                            <td class="p-2 text-center">{{ $irs->nama_ruang }}</td>
                            <td class="p-2 text-center">{{ $irs-> hari }}</td>
                            <td class="p-2 text-center">{{ $irs->wkt_mulai}}-{{ $irs->wkt_selesai }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center p-4">Data IRS tidak ditemukan</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="mt-4 text-right">
                    <p class="text-left inline-block">SKS Semester : {{ $totalSKS }}</p><br>
                    <p class="text-left inline-block">IP Semester : {{ number_format($ipSemester,2) }}</p><br>
                    <button onclick="generatePDF('{{ $mahasiswa->nim }}','{{ $mahasiswa->nama }}','{{ $mahasiswa->nama_doswal }}','{{ $mahasiswa->nip_doswal }}')" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 text-bold transition">
                        Print IRS
                    </button>
                </div>

            </div>
        </div>
   </div>
</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
<script>

  function generatePDF(nim, nama, nama_doswal, nip_doswal) {
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
                    html: '#irs-table',
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
</html>
