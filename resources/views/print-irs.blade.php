<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Print IRS - SIPENA UNDIP</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
  </style>
</head>
<body>
  <h1>Print IRS - Mahasiswa: {{ $mahasiswa->nama }}</h1>
  <p>Detail Pengajuan IRS:</p>

  <!-- Tampilkan Detail IRS Disini -->
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Kode MK</th>
        <th>Mata Kuliah</th>
        <th>Kelas</th>
        <th>Ruang</th>
        <th>Dosen</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>PAIK6404</td>
        <td>Grafika dan Komputasi Visual</td>
        <td>C</td>
        <td>E101</td>
        <td>Dr. Aris Sugiharto, S.Si, M.Kom.</td>
      </tr>
    </tbody>
  </table>

  <button onclick="window.print()">Print</button>
</body>
</html>
