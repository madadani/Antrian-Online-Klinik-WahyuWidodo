<!DOCTYPE html>
<html>

<head>
    <title>Laporan Rekam Medis</title>
    <style>
        .container {
            /* margin: 0 auto; */
            width: 100%;
            /* max-width: 800px; */
        }

        .logo {
            float: left;
            width: 100px;
            height: 100px;
        }

        .header {
            text-align: center;
            margin-bottom: 25px;
            overflow: auto;
        }

        .header h1,
        .header p {
            margin: 0;
        }

        .table {
            margin-bottom: 50px;
            border-collapse: collapse;
            width: 100%;
        }

        .table th,
        .table td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }

        .table th {
            background-color: #ccc;
        }

        .table tfoot td {
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="storage/logo/why.jpeg" alt="Logo Instansi" style="width: 120px; height: 120px;">
        </div>
        <div class="header">
            <h1>PEMERINTAH KABUPATEN SRAGEN</h1>
            <h1>REKAM MEDIS</h1>
            <h1>KLINIK PRATAMA WAHYU WIDODO</h1>
            <p>Mojodoyong RT/21 Kedawung,Sragen</p>
            <p>Email : <u>klinikwahyuwidodo@gmail.com</u></p>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Mo. RM</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">No. BPJS</th>
                    <th scope="col">No. KTP</th>
                    <th scope="col">Dokter</th>
                    <th scope="col">Keluhan</th>
                    <th scope="col">Diagnosa</th>
                    <th scope="col">Obat</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Poli</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $rm)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $rm->nama }}</td>
                        <td>{{ $rm->no_rm }}</td>
                        <td>{{ $rm->jenis_kelamin }}</td>
                        <td>{{ $rm->no_bpjs }}</td>
                        <td>{{ $rm->no_ktp }}</td>
                        <td>{{ $rm->dokter }}</td>
                        <td>{{ $rm->keluhan }}</td>
                        <td>{{ $rm->diagnosa }}</td>
                        <td>{{ $rm->obat }}</td>
                        <td>{{ \Carbon\Carbon::parse($rm->tanggal)->format('d-m-Y') }}</td>
                        <td>{{ $rm->poli }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
