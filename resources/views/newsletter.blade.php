<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="{{ asset('assets/css/newsletter.css') }}">
    <link href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">

    <title>Halaman Print A4</title>
</head>


<body>
    {{-- <button id="cetak" class="btn btn-danger">cetak</button> --}}
    <div class="book">
        <div class="page">
            <div class="header-letter">
                <table width="100%">
                    <tr class="row-header-letter">
                        <td class="left-logo"><img src="{{ asset('assets/img/Garuda_Logo.png') }}" alt=""
                                width="100%"></td>
                        <td class="header-letter-title">
                            <h2>BERITA ACARA SERAH TERIMA AKSES GEOPORTAL</h2>

                            <h3>PERCEPATAN PELAKSANAAN KEBIJAKAN SATU PETA</h3>
                        </td>
                        <td class="right-logo">
                            <img src="{{ asset('assets/img/Badan_Informasi_Geospasial_Logo.png') }}" alt=""
                                width="100%">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="content-letter py-2">
                <p class="m-0">
                    Menindaklanjuti amanat Peraturan Presiden Nomor 9 Tahun 2016 tentang Percepatan Pelaksanaan
                    Kebijakan Satu Peta pada Tinggkat Ketelitian Peta Skala 1:50.000, maka pada hari
                    <b>Rabu</b>,
                    tanggal <b>Sepuluh</b> bulan <b>Agustus</b> tahun <b>Dua Ribu Dua Puluh
                        Dua</b>.
                    kami yang bertanda tangan di bawah ini:
                </p>
                <div class="first-party py-1">
                    <table id="first-party" width="100%">
                        <tbody>
                            <tr>
                                <td scope="row" width="20px">1</td>
                                <td width="130px">Nama</td>
                                <td>: {{ $firstParty->fullname }}</td>
                            </tr>
                            <tr>
                                <td scope="row" width="20px"></td>
                                <td width="130px">NIP</td>
                                <td>: {{ $firstParty->nip }}</td>
                            </tr>
                            <tr>
                                <td scope="row" width="20px"></td>
                                <td width="130px"">Jabatan</td>
                                <td>: {{ $firstParty->position }}</td>
                            </tr>
                            <tr>
                                <td scope="row" width="20px"></td>
                                <td width="130px"">Email. No. Telpon</td>
                                <td>: {{ $firstParty->email }}. {{ $firstParty->handphone }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="py-2">
                        yang selanjutnya disebut <b>PIHAK PERTAMA</b>
                    </div>
                </div>
                <div class="second-party">
                    <table id="second-party" width="100%">
                        <tbody>
                            <tr>
                                <td scope="row" width="20px">1</td>
                                <td width="130px">Nama</td>
                                <td>: {{ $secondParty->fullname }}</td>
                            </tr>
                            <tr>
                                <td scope="row" width="20px"></td>
                                <td width="130px">NIP</td>
                                <td>: {{ $secondParty->nip }}</td>
                            </tr>
                            <tr>
                                <td scope="row" width="20px"></td>
                                <td width="130px"">Jabatan</td>
                                <td>: {{ $secondParty->position }}</td>
                            </tr>
                            <tr>
                                <td scope="row" width="20px"></td>
                                <td width="130px"">Email. No. Telpon</td>
                                <td>: {{ $secondParty->email }}. {{ $secondParty->handphone }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="py-2">
                        yang selanjutnya disebut <b>PIHAK KEDUA</b>
                    </div>
                </div>
                <div class="content-agreement">
                    <span>Pihak Pertama menyerahkan <b>username</b> dan <b>password</b> akses Geoportal Kebijakan Satu
                        Peta (KSP) kepada Pihak Kedua, dengan ketentuan sebagai berikut:</span>
                    <table id="content-agreement" width="100%">
                        <tbody>
                            <tr>
                                <td scope="row" width="20px" valign="top">1)</td>
                                <td>Pihak Pertama berhak untuk menerima asli Surat Perintah Tugas dari Pihak Kedua yang
                                    menyatakan Pihak Kedua
                                    sebagai Penerima Mandat Akses.
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" width="20px" valign="top">2)</td>
                                <td>Pihak Pertama berhak untuk mendapatkan jaminan keamanan dan kerahasiaan username dan
                                    password akses
                                    yang sudah diserahkan kepada Pihak Kedua.
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" width="20px" valign="top">3)</td>
                                <td> Pihak Pertama menyatakan bahwa tingkat kerahasiaan username dan password akses yang
                                    diserahkan, serta data
                                    dan informasi geospasial yang termuat dalam Geoportal KSP adalah Rahasia.
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" width="20px" valign="top">4)</td>
                                <td> Pihak Kedua berhak untuk menerima username dan password akses dari Pihak Pertama
                                    setelah penyerahan Surat
                                    Perintah Tugas yang menyatakan Pihak Kedua sebagai Penerima Mandat Akses.
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" width="20px" valign="top">5)</td>
                                <td>Pihak Kedua memanfaatkan Geoportal KSP sesuai dengan ketentuan dalam Keputusan
                                    Presiden Nomor 20 Tahun
                                    2018, Peraturan Menteri Koordinator Bidang Perekonomian Nomor 6 Tahun 2018, serta
                                    Peraturan Menteri
                                    Koordinator Bidang Perekonomian Nomor 7 Tahun 2018.
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" width="20px" valign="top">6)</td>
                                <td>Pihak Kedua sepenuhnya memegang tanggung jawab dan tanggung gugat atas penggunaan
                                    akun Geoportal KSP,
                                    termasuk apabila dilakukan pelimpahan kewenangan melalui mekanisme mandat.
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" width="20px" valign="top">7)</td>
                                <td> Pihak Kedua tidak diperbolehkan untuk menyebarluaskan akses Geoportal KSP berikut
                                    data dan informasi
                                    geospasial di dalamnya, kecuali berdasarkan peraturan perundang-undangan dan
                                    peraturan lain yang mengatur
                                    kegiatan berbagi data Kebijakan Satu Peta.

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="footer-letter">
                <div class="row">
                    <div class="col-6">
                        <br>
                        <br>
                        <div class="row">
                            <span class="text-center">PIHAK PERTAMA</span>
                        </div>
                        <div class="row">
                            <span class="text-center">{{ $firstParty->position }}</span>
                        </div>
                        <div class="row">
                            <span class="text-center">Badan Informasi Geospasial</span>
                        </div>
                        <br><br><br><br><br>
                        <div class="row">
                            <span class="text-center">{{ $firstParty->fullname }}</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <span class="text-center">Kabupaten Banggai Kepulauan, 10 Agustus 2022</span>
                        </div>
                        <br>
                        <div class="row">
                            <span class="text-center">PIHAK KEDUA</span>
                        </div>
                        <div class="row">
                            <span class="text-center">{{ $secondParty->position }}</span>
                        </div>
                        <div class="row">
                            <span class="text-center">Kabupaten Banggai Kepulauan</span>
                        </div>
                        <br><br><br><br><br>
                        <div class="row">
                            <span class="text-center">{{ $secondParty->fullname }}</span>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-8">
                        <pre class="py-2 w-40">
*   Berita Acara ini terdiri atas 3 (tiga) rangkap
Rangkap 1 untuk Pihak Pertama
Rangkap 2 untuk Pihak Kedua
Rangkap 3 untuk Sekretariat Tim Percepatan Kebijakan Satu Peta
                        </pre>
                    </div>
                    <div class="col-4">
                        <div class="card-body d-flex justify-content-end">
                            {!! QrCode::size(100)->generate(
                                'https://project-praktik-lapang.herokuapp.com/newsletter/' . $newsletterById->id,
                            ) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script type="{{ url('assets/js/print.js') }}"></script> --}}
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
