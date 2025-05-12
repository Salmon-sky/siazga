<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Nilai</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            .print-container,
            .print-container * {
                visibility: visible;
            }

            .print-container {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }

            .card {
                box-shadow: none;
                border: none;
                margin-bottom: 20px;
            }

            .btn {
                display: none;
            }

            .table {
                width: 100% !important;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5 print-container">
        <div class="card">
            <div class="card-header text-center">
                <img src="{{ asset('assets/img/YAL.png') }}" style="width: 100px; height: 100px;" alt="" />
                <h4 class="card-title">Nilai Hasil Belajar Siswa (E-Raport Siswa)</h4>
                <div class="row">
                    <div class="col">
                        <h5>NIS:</h5>
                        <p>{{ auth()->user()->nomor_induk }}</p>
                        <h5>Nama Siswa:</h5>
                        <p>{{ auth()->user()->nama }}</p>
                    </div>
                    <div class="col">
                        <h5>Jurusan:</h5>
                        <p>{{ auth()->user()->Kelas->nama ?? '-' }}</p>
                        <h5>Semester:</h5>
                        <p>{{ $semester->nama }}</p>
                        <h5>Kelas:</h5>
                        <p>{{ auth()->user()->Kelas->kelas ?? '-' }}</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Mata Pelajaran</th>
                            <th>Tugas</th>
                            <th>UTS</th>
                            <th>UAS</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $totalTugas = 0;
                            $totalUTS = 0;
                            $totalUAS = 0;
                            $count = 0;
                        @endphp
                        @foreach ($nilais as $nilai)
                            @if ($nilai->Siswa->nomor_induk == auth()->user()->nomor_induk)
                                @php
                                    $totalTugas += $nilai->tugas ?? 0;
                                    $totalUTS += $nilai->uts ?? 0;
                                    $totalUAS += $nilai->uas ?? 0;
                                    $count++;
                                @endphp
                                <tr>
                                    <td>{{ $nilai->Mapel->nama ?? '-' }}</td>
                                    <td>{{ $nilai->tugas ?? '-' }}</td>
                                    <td>{{ $nilai->uts ?? '-' }}</td>
                                    <td>{{ $nilai->uas ?? '-' }}</td>
                                    <td>{{ $nilai->keterangan ?? '-' }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                    <tfoot>
                        <!-- Baris Rata-rata -->
                        <tr>
                            <th>Rata-rata</th> <!-- Kolom pertama tetap -->
                            <th>
                                {{ $count > 0 ? number_format($totalTugas / $count, 2) : '-' }}
                            </th>
                            <th>
                                {{ $count > 0 ? number_format($totalUTS / $count, 2) : '-' }}
                            </th>
                            <th>
                                {{ $count > 0 ? number_format($totalUAS / $count, 2) : '-' }}
                            </th>
                            <th>-</th> <!-- Kosong -->
                        </tr>
                        <!-- Baris Total -->
                        <tr>
                            <th>Total</th> <!-- Kolom pertama -->
                            <th colspan="3"> <!-- Menggabungkan kolom kedua hingga kelima -->
                                {{ $count > 0 ? number_format(($totalTugas * 0.3 + $totalUTS * 0.3 + $totalUAS * 0.4) / $count, 2) : '-' }}
                            </th>
                        </tr>
                    </tfoot>
                </table>

            </div>
            <div class="card-footer text-muted">
                <div class="row mt-3">
                    <div class="col">
                        <p>Kepala Sekolah</p>
                        <p>(Tanda Tangan)</p>
                        <p>Ice Rosina Sari</p>
                    </div>
                    <div class="col text-right">
                        <p>Wali Kelas</p>
                        <p>(Tanda Tangan)</p>
                        <p>{{ auth()->user()->Kelas->WaliKelas->nama ?? '-' }}</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <button class="btn btn-primary" onclick="window.print()"><i class="fas fa-download"></i>
                            Download</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
