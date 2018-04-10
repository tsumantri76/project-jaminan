@php
    $newname = 'WAR-BG'.date('Y-m-d');
    $date = date('d/m/Y');
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        html
        {
            margin: 1.5cm 1.5cm 2cm 2cm;
        }
        .atas td, th {
            text-align: left;
            padding: 8px;
        }
        .bawah td, th {
            padding-bottom: 20px;
        }
        .bawah .terima {
            padding-left: 25%;
            text-align: center;
        }
    </style>
    <title>{{ $newname }}</title>
</head>
<body>
    <div class="kop-surat">
        ANGKASA PURA I
    </div>
    <hr>
    <center>
        TANDA TERIMA JAMINAN PENAWARAN <br> {{ $cek->no_terima }} <br><br><br><br>
    </center>
        <table class="atas">
            <tr>
                <td>NAMA PERUSAHAAN </td>
                <td> : {{ $cek->vendor_id }}</td>
            </tr>
            <tr>
                <td>BANK PENJAMIN </td>
                <td> : {{ $cek->nama_bank }}</td>
            </tr>
            <tr>
                <td>NOMOR GARANSI BANK </td>
                <td> : {{ $cek->no_bankgr }}</td>
            </tr>
            <tr>
                <td>SERI GARANSI BANK </td>
                <td> : {{ $cek->seri_bankgr }}</td>
            </tr>
            <tr>
                <td>TANGGAL GARANSI BANK </td>
                <td> : {{ TanggalIndo($cek->tgl_bankgr) }}</td>
            </tr>
            <tr>
                <td>JUMLAH/NILAI GARANSI BANK </td>
                <td> : Rp. {{ number_format($cek->nominal_jambg,2,',','.') }}</td>
            </tr>
            <tr>
                <td>TERBILANG </td>
                <td> : {{ terbilang($cek->nominal_jambg, $style=3) }}</td>
            </tr>
            <tr>
                <td>BERDASARKAN SURAT </td>
                <td> : {{ $cek->vendor_id }}</td>
            </tr>
            <tr>
                <td>UNTUK KEPERLUAN </td>
                <td> : Jaminan Penawaran Pekerjaan {{ $cek->pekerjaan }}</td>
            </tr>
            <tr>
                <td>PERIODE PEKERJAAN </td>
                <td> : {{ $cek->vendor_id }}</td>
            </tr>
            <tr>
                <td>MASA BERLAKU </td>
                <td> : {{ TanggalIndo($cek->tgl_berlaku) }} s/d {{ TanggalIndo($cek->tgl_berakhir) }}</td>
            </tr>
            <tr>
                <td>KETERANGAN </td>
                <td> : {{ $cek->ket }}</td>
            </tr>
        </table>
        <p style="text-align : right; margin-top: 50px;">
            {{ $cek->wilayah }}, {{ $date }}
        </p>
        <table class="bawah" width="100%">
            <tr>
                <td>Menyerahkan, </td>
                <td class="terima">Menerima, <br> Dept. Head/Section Head Bidang Treasury/Finance</td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>(......................)</td>
                <td class="terima">(.......................)</td>
            </tr>
        </table>
        <p style="margin-top: 45px;">*) Catatan : penarikan bank garansi jaminan penawaran ini hanya dapat dilakukan selama 30 hari sejak berakhirnya masa sanggah</p>
</body>
</html>