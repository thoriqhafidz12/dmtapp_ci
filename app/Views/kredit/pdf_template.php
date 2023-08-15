<html>
<head>
	<title>Cetak Form Pengajuan Kredit</title>
	<style>
    *{
      font-family:sans-serif;
    }
    @page {
      size: A4;
      margin: 0;
    }
    body {
      margin: 40px;
    }
    .container {
      display: flex;
    }

    .table-wrapper {
      flex: 1;
      
    }

    table {
      width: 100%;
	    border: 1px solid black;
      font-size:12px;
    }
    
    th,td{
      padding: 0%;
    }
    
    
  </style>
</head>
<body>
  <table style="border:0px">
    <tr>
      <th><h2 style="color:red; font-family:sans-serif;">PT. BPR DHANA MITRATAMA</h2></th>
      <th style="background-color:green;"><h3 style="color:white; font-family:sans-serif; text-align:center;">FORMULIR PERMOHONAN PINJAMAN</h3></th>
    </tr>
  </table>
  <table style="border:0px;">
    <tr>
      <td style="text-align:right;padding:0px;font-size:13px">CIF : . . . . . .   . . . . . . . . . . . .</td>
    </tr>
    <tr>
      <td style="text-align:right;padding:0px;font-size:13px">INDUK : . . . . . . . . . . . . . . . </td>
    </tr>
  </table>
  <div class="container">
    <div class="table-wrapper">
      <table>
        <tr>
          <td rowspan="2" width="150px">Produk </td>
          <td rowspan="2" width="195px">: <?= $kredit->produk ?></td>
          <td>Plafon</td>
          <td>: <?= $kredit->plafon ?></td>
        </tr>
        <tr>
          <td>Jangka </td>
          <td>: <?= $kredit->jangka ?> Bulan</td>
        </tr>
      </table>
    </div>
    <div class="table-wrapper">
      <table>
        <tr>
          <td colspan="2"><strong>DATA PEMOHON</strong></td>
          <td colspan="2"><strong>PEKERJAAN/USAHA DAN KEUANGAN</strong></td>
        </tr>
        <tr>
          <td width="150px">Nama Pemohon</td>
          <td width="195px">: <?= $kredit->nama_pem ?> (<?= $kredit->jenis_pem ?>)</td>
          <td width="150px">Tipe Pendapatan</td>
          <td width="195px">: <?= $kredit->tipe?></td>
        </tr>
        <tr>
          <td>Nama Panggilan</td>
          <td>: <?= $kredit->nama_pang ?></td>
          <td>Nama Badan</td>
          <td>: <?= $kredit->nama_badan?></td>
        </tr>
        <tr>
          <td>Tempat Tanggal Lahir</td>
          <td>: <?= $kredit->ttl1 ?></td>
          <td>Jenis Kegiatan</td>
          <td>: <?= $kredit->jenis_keg?></td>
        </tr>
        <tr>
          <td>Nomor KTP</td>
          <td>: <?= $kredit->no_ktp ?></td>
          <td>Bidang</td>
          <td>: <?= $kredit->bidang?></td>
        </tr>
        <tr>
          <td>Masa Berlaku</td>
          <td>: <?= $kredit->masber ?></td>
          <td>Alamat</td>
          <td>: <?= $kredit->jl?></td>
        </tr>
        <tr>
          <td>Nama Ibu Kandung</td>
          <td>: <?= $kredit->nama_ibu ?></td>
          <td>Kel. / RT/RW</td>
          <td>: <?= $kredit->kel?> <?= $kredit->rtrw3?></td>
        </tr>
        <tr>
          <td>Pendidikan Terakhir </td>
          <td>: <?= $kredit->pend_ter ?></td>
          <td>Kec. / Kab.- Kota</td>
          <td>: <?= $kredit->kec3?> / <?= $kredit->kab3?></td>
        </tr>
        <tr>
          <td>Profesi </td>
          <td>: <?= $kredit->profesi  ?></td>
          <td>No Telepon</td>
          <td>: <?= $kredit->no_telp5?></td>
        </tr>
        <tr>
          <td>Usaha </td>
          <td>: <?= $kredit->usaha ?></td>
          <td>No NPWP</td>
          <td>: <?= $kredit->npwp ?></td>
        </tr>
        <tr>
          <td>Status Kawin</td>
          <td>: <?= $kredit->status_kaw ?></td>
          <td>No SIUP</td>
          <td>: <?= $kredit->siup?></td>
        </tr>
        <tr>
          <td>Jumlah Tanggungan</td>
          <td>: <?= $kredit->jumlah_tang ?></td>
          <td>Lama</td>
          <td>: <?= $kredit->lama2?> Tahun</td>
        </tr>
        <tr>
          <td>No Telepon </td>
          <td>: <?= $kredit->no_telp ?></td>
          <td>Omset / Gaji Perbulan</td>
          <td>: Rp. <?= $kredit->omset?></td>
        </tr>
        <tr>
          <td>Nama Pasangan</td>
          <td>: <?= $kredit->nama_pas?></td>
          <td>Laba Perbulan</td>
          <td>: Rp. <?= $kredit->laba?></td>
        </tr>
        <tr>
          <td>Status Pasangan</td>
          <td>: <?= $kredit->status_pas?></td>
          <td rowspan="2" colspan="2"><strong>INFORMASI AGUNAN</strong></td>
        </tr>
        <tr>
          <td>Tempat Tgl.Lahir</td>
          <td>: <?= $kredit->ttl_pas?></td>
        </tr>
        <tr>
          <td>No KTP</td>
          <td>: <?= $kredit->no_ktp2?></td>
          <td>Informasi Agunan</td>
          <td >: <?= $kredit->informasi?></td>
        </tr>
        <tr>
          <td>Masa Berlaku</td>
          <td>: <?= $kredit->masa_ber2?></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>: <?= $kredit->jenis_pas?></td>
        </tr>
        <tr>
          <td>Pendidikan Terakhir</td>
          <td>: <?= $kredit->pend_ter2?></td>
        </tr>
        
        <tr>
          <td>Profesi</td>
          <td>: <?= $kredit->profesi2?></td>
        </tr>
        <tr>
          <td>Usaha</td>
          <td>: <?= $kredit->usaha2?></td>
        </tr>
        <tr>
          <td>No Telepon</td>
          <td>: <?= $kredit->no_telp2?></td>
        </tr>
      </table>
    </div>
  </div>
  <div class="container">
    <div class="table-wrapper">
      <table>
        <tr>
          <td colspan="2"><strong>KETERANGAN TEMPAT TINGGAL</strong></td>
          <td colspan="2"><strong>INFORMASI LAIN</strong></td>
        </tr>
        <tr>
          <td colspan="2" style="font-weight:bold;text-align:center;">Alamat Tempat tinggal Saat Ini :</td>
          <td width="158px">Tujuan Pengajuan</td>
          <td>: <?= $kredit->tujuan?></td>
        </tr>
        <tr>
          <td width="150px">Jalan / Desa / Kel.</td>
          <td width="195px">: <?= $kredit->jl?></td>
          <td>Angsuran yang Diinginkan</td>
          <td>: <?= $kredit->angsuran?></td>
        </tr>
        <tr>
          <td>RT/RW</td>
          <td>: <?= $kredit->rtrw?></td>
          <td>Take Over</td>
          <td>: <?= $kredit->takover?> Bank : <?= $kredit->bank?></td>
        </tr>
        <tr>
          <td>Kecamatan</td>
          <td>: <?= $kredit->kec?></td>
          <td colspan="2" rowspan="4">Dengan menandatangani aplikasi permohonan ini, Saya menyatakan bahwa keterangan dalam aplikasi ini adalah lengkap dan benar, dan Saya bersedia untuk dilakukan kunjungan ke tempat tinggal atau lokasi usaha dan agunan oleh pihak BANK atau pihak lain yang ditunjuk BANK.</td>
        </tr>
        <tr>
          <td>Kabupaten / Kota</td>
          <td>: <?= $kredit->kab?></td>
          
        </tr>
        <tr>
          <td>No Telepon / Fax.</td>
          <td>: <?= $kredit->no_telp3?></td>
        </tr>
        <tr>
          <td>Kode Pos</td>
          <td>: <?= $kredit->kopos?></td>
          
        </tr>
        <tr>
          <td>HP</td>
          <td>: <?= $kredit->hp?></td>
          <td colspan="2">Blora, <?= date('d-F-Y H:i:s', strtotime($kredit->tgl_daftar)) ?></td>
        </tr>
        <tr>
          <td>Status Tempat Tinggal</td>
          <td>: <?= $kredit->status_ting?></td>
          <td rowspan="3" colspan="2"><img src="data:image/jpeg;base64,<?= base64_encode(file_get_contents('./img/ttd/daftar/' . $kredit->ttd_daftar)) ?>" alt="" style="width: 120px;height:70px;"></td>
        </tr>
        <tr>
          <td>Lama Menempati Rumah</td>
          <td>: <?= $kredit->lama?> Tahun</td>
        </tr>
        <tr>
          <td colspan="2" style="font-weight:bold;text-align:center;">Alamat Sesuai KTP :</td>
        </tr>
        <tr>
          <td>Jalan / Desa / Kel.</td>
          <td>: <?= $kredit->jl2?></td>
          <td>Petugas Pendaftar :</td>
          <td>Disposisi Direksi / Kabag:</td>
        </tr>
        <tr>
          <td>RT / RW</td>
          <td>: <?= $kredit->rtrw2?></td>
          <td rowspan="3"><img src="data:image/jpeg;base64,<?= base64_encode(file_get_contents('./img/ttd/petugas/' . $kredit->ttd_petugas)) ?>" alt="" style="width: 120px;height:70px;"></td>
        </tr>
        <tr>
          <td>Kecamatan</td>
          <td>: <?= $kredit->kec2?></td>
        </tr>
        <tr>
          <td>Kabupaten</td>
          <td>: <?= $kredit->kab2?></td>
        </tr>
        <tr>
          <td>Telepon / Fax.</td>
          <td>: <?= $kredit->no_telp4?></td>
          <td>Direksi / Kabag :</td>
        </tr>
        <tr>
          <td>Kode Pos</td>
          <td>: <?= $kredit->kopos2?></td>
        </tr>
        <tr>
          <td colspan="2"><strong>DIISI OLEH PETUGAS</strong></td>
        </tr>
        <tr>
          <td>Pendaftaran Tanggal</td>          
          <td>: <?= date('d-F-Y H:i:s', strtotime($kredit->tgl_daftar)) ?></td>          
                    
        </tr>
        <tr>
          <td>Petugas</td>
          <td>: <?= $kredit->nama_petugas; ?></td>
          
        </tr>
        <tr>
          <td>Proses Pendaftaran</td>
          <td>: Dikunjungi Oleh Petugas</td>
          
        </tr>
        <tr>
          <td>Status</td>
          <td>: <?= $kredit->status; ?></td>
      
        </tr>
      </table>
    </div>
  </div>
  <table style="border:0px">
    <tr style="background-color:#261E73;padding:0px;">
      <th><h5 style="color:white; font-family:sans-serif;text-align:left;">BANK SAHABAT ANAK NEGERI</h5></th>
      <th><img src="data:image/jpeg;base64,<?= base64_encode(file_get_contents('img/BPRlogo.png')) ?>" alt="" style="width: 30px;"></th>
    </tr>
  </table>
</body>
<body>
  <p style="text-align: justify;text-justify: inter-word;">
    Sehubungan dengan permohonan kredit yang saya ajukan, dengan ini saya memberikan izin kepada PT BPR DHANA MITRATAMA untuk membuka dan mencetak Informasi Debitur atas nama saya dan atau pendamping/pasangan, atau pemilik agunan dan atau avalis melalui Sistem Layanan Informasi Keuangan (SLIK).
  </p>
  <br><br>
  <p style="text-align:center;">
    Pemohon
  </p>
  <p style="text-align:center;">
  <img src="data:image/jpeg;base64,<?= base64_encode(file_get_contents('./img/ttd/daftar/' . $kredit->ttd_daftar)) ?>" alt="" style="width: 120px;">
  </p>
  <p style="text-align:center;">
  ( <?= $kredit->nama_pem; ?> )
  </p>
  
  <!-- HALAMAN AGUNAN DAN KTP -->
  <div style = "display:block; clear:both; page-break-after:always; ">
  </div>
  <p style="text-align:center;">
    <img src="data:image/jpeg;base64,<?= base64_encode(file_get_contents('./img/ktp/' . $kredit->foto_ktp)) ?>" alt="" style="width: 500px;">
    <img src="data:image/jpeg;base64,<?= base64_encode(file_get_contents('./img/agunan/' . $kredit->foto_agunan)) ?>" alt="" style="width: 500px;">
  </p>
</body>
</html>