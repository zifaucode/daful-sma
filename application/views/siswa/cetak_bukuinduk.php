<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $judul_web; ?></title>
    <base href="<?php echo base_url();?>"/>
    <link rel="icon" type="image/png" href="assets/images/favicon.png"/>
    <style>
    table {
        border-collapse: collapse;
    }
    thead > tr{
      background-color: #0070C0;
      color:#f1f1f1;
    }
    thead > tr > th{
      background-color: #0070C0;
      color:#fff;
      padding: 10px;
      border-color: #fff;
    }
    th, td {
      padding: 2px;
    }

    th {
        color: #222;
    }
    body{
      font-family:Calibri;
    }
    </style>
  </head>
  <body onload="window.print();">
    <?php $this->load->view('kop_lap'); ?><br>
    <h4 align="center" style="margin-top:0px;"><u>DATA UNTUK BUKU INDUK SISWA</u></h4>
    
  

    <p><strong>A. KETERANGAN PRIBADI (WAJIB DIISI )</strong></p>
<ol>
<li>Nama Lengkap&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo ucwords($user->nama_lengkap); ?></li>
</ol>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nama Panggilan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <?php echo ucwords($user->nama_panggilan); ?></p>
<ol start="2">
<li>Nomor NISN&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<?php echo ucwords($user->nisn); ?></li>
<li>NIK&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo ucwords($user->nik); ?></li>
<li>Jenis Kelamin&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:<?php echo ucwords($user->jk); ?></li>
<li>Tempat/Tanggal Lahir&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <?php echo ucwords($user->tempat_lahir); ?>,<?php echo ucwords($user->tgl_lahir); ?></li>
<li>Agama&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo ucwords($user->agama); ?></li>
<li>Kewarganegaraan&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: INDONESIA</li>
<li>Anak Ke&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo ucwords($user->anak_ke); ?></li>
<li>Jumlah saudara kandung&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo ucwords($user->jmlh_saudara_kandung); ?></li>
<li>Jumlah saudara tiri&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <?php echo ucwords($user->jmlh_saudara_tiri); ?></li>
<li>Jumlah saudara angkat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:<?php echo ucwords($user->jmlh_saudara_angkat); ?></li>
<li>Anak Yatim/ Piatu/yatim Piatu &nbsp; : </li>
</ol>
<p>&nbsp;</p>
<p><strong>B. KETERANGAN TEMPAT TINGGAL (WAJIB DIISI )</strong></p>
<p>&nbsp;</p>
<ol start="14">
<li>Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo ucwords($user->alamat_siswa); ?></li>
<li>Telepon/HP&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo ucwords($user->no_hp_siswa); ?></li>
<li>E-mail&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <?php echo ucwords($user->email); ?></li>
<li>Tinggal dengan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: </li>
<li>Jarak tempat tinggal kesekolah&nbsp; &nbsp; : <?php echo ucwords($user->jarak_sekolah); ?> (KM);</li>
<li>Moda Transportasi&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo ucwords($user->transportasi); ?></li>
</ol>
<p>&nbsp;</p>
<p><strong>C. KETERANGAN KESEHATAN (WAJIB DIISI )</strong></p>
<p>&nbsp;</p>
<ol start="20">
<li>Berat Badan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <?php echo ucwords($user->berat_badan); ?></li>
<li>Tinggi Badan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo ucwords($user->tinggi_badan); ?></li>
<li>Lingkar Kepala&nbsp; &nbsp; &nbsp; : </li>
<li>Golongan Darah&nbsp; &nbsp; : </li>
<li>Moda transportasi&nbsp; : <?php echo ucwords($user->transportasi); ?></li>
</ol>
<p>&nbsp;</p>
<p><strong>D. KETERANGAN PENDIDIKAN SEBELUMNYA (WAJIB DIISI)</strong></p>
<p>&nbsp;</p>
<ol start="25">
<li>Asal Sekolah SLTP&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:<?php echo ucwords($user->nama_sekolah); ?></li>
<li>Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..</li>
<li>Tanggal dan nomor STTB &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..</li>
</ol>
<p>&nbsp;</p>
<p><strong>E. KETERANGAN TENTANG ORANG TUA KANDUNG (WAJIB DIISI )</strong></p>
<p>&nbsp;</p>
<p>Ayah&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<ol start="28">
<li>Nama&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <?php echo ucwords($user->nama_ayah); ?></li>
<li>Tempat Tgl Lahir&nbsp; &nbsp;: &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..&nbsp; &nbsp; &nbsp;</li>
<li>Kewarganegaraan : &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..&nbsp;</li>
<li>Ijazah Tertinggi&nbsp; &nbsp; : &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li>
<li>Pekerjaan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <?php echo ucwords($user->pekerjaan_ayah); ?></li>
<li>Penghasilan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &<?php echo ucwords($user->penghasilan_ayah); ?></li>
</ol>
<p>Ibu&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<ol start="28">
<li>Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:<?php echo ucwords($user->nama_ibu); ?></li>
<li>Tempat Tgl Lahir&nbsp; &nbsp; &nbsp; : &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..&nbsp; &nbsp; &nbsp;</li>
<li>Kewarganegaraan&nbsp; &nbsp; : &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..&nbsp;</li>
<li>Ijazah Tertinggi&nbsp; &nbsp; &nbsp; &nbsp;: &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li>
<li>Pekerjaan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:<?php echo ucwords($user->pekerjaan_ibu); ?></li>
<li>Penghasilan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <?php echo ucwords($user->penghasilan_ibu); ?></li>
</ol>

  </body>
</html>
