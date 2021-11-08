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
    <h4 align="center" style="margin-top:0px;"><u>SURAT  PERNYATAAN PESERTA DIDIK BARU</u></h4>
    <h4 align="center" style="margin-top:0px;"><u>TAHUN PELAJARAN 2021/2022</u></h4>
    
    <br>

    <table width="100%" border="0">
      
      <tr>
        <td>NAMA LENGKAP</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_lengkap); ?></td>
      </tr>
      

       <tr>
        <td>Tempat, Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $user->tempat_lahir; ?>,<?php echo $user->tgl_lahir; ?></td>
      </tr>

      <tr>
        <td>JENIS KELAMIN</td>
        <td>:</td>
        <td><?php echo ucwords($user->jk); ?></td>
      </tr>
      <tr>
        <td>AGAMA</td>
        <td>:</td>
        <td><?php echo $user->agama; ?></td>
      </tr>

      <tr>
        <td>NO PENDAFTARAN</td>
        <td>:</td>
        <td>-</td>
      </tr>
      <tr>
        <td>ALAMAT</td>
        <td>:</td>
        <td><?php echo $user->alamat_siswa; ?></td>
      </tr>

      <tr>
        <td>NAMA ORANG TUA</td>
        <td>:</td>
        <td><?php echo $user->nama_ayah; ?></td>
      </tr>

       <tr>
        <td>PEKERJAAN ORANG TUA</td>
        <td>:</td>
        <td><?php echo $user->pekerjaan_ayah; ?></td>
      </tr>

      <tr>
        <td>HUBUNGAN KELUARGA</td>
        <td>:</td>
        <td><?php echo $user->status_keluarga; ?></td>
      </tr>

      <tr>
        <td>NO. HP (Siswa)</td>
        <td>:</td>
        <td><?php echo $user->no_hp_siswa; ?></td>
      </tr>
       
      <tr>
        <td>NO. HP (Ortu)</td>
        <td>:</td>
        <td><?php echo $user->no_hp_ayah; ?></td>
      </tr>

      <tr>
        <td>Email</td>
        <td>:</td>
        <td>-</td>
      </tr>

     
    </table>
    <br>
<b><u>Dengan sungguh-sungguh dan penuh kesadaran :</u></b>
    <br>
    <center><b><p>MENYATAKAN</p></b></center>
    <p>Bahwa selama menjadi siswa SMA Negeri 1 Parung, saya :</p>
    <table width="100%" border="0" style="margin-left:5px;">
      <tr>

        <td>1.  Belajar dengan tekun dan penuh motivasi</td>
      </tr>
      <tr>
        <td>2.  Menjaga nama baik diri sendiri, keluarga dan sekolah</td>
        
        
      </tr>
      <tr>
        <td>3.  Mentaati tata tertib sekolah</td>
       
      </tr>
      
      <tr>
        <td>4.  Hormat kepada orang tua dan guru-guru</td>
       
      </tr>
      
       
     
      <tr>
        <td>5.  Tidak terlibat Narkoba dan obat terlarang, tawuran, merokok, dan kegiatan kenakalan remaja lainnya baik didalam maupun diluar lingkungan sekolah</td>
      </tr>

      <tr>
        <td>6.  Mengikuti pendidikan agama (<?php echo $user->agama; ?>) yang saya anut</td>
      </tr>
      <tr>
        <td>7.  Belum dan sanggup tidak menikah selama menempuh pendidikan</td>
      </tr>

       <tr>
        <td>8.  Apabila saya melanggar pernyataan ini, maka saya siap menerima sanksi, berupa:</td>
      </tr>
       <tr>
        <td>a.  Tidak diperkenankan mengikuti pelajaran selama jangka waktu tertentu<br>b. Dikembalikan kepada orang tua/wali /dikeluarkan</td>
      </tr>
      <br>
      <br>
      <tr>
        <td>Pernyataan ini saya buat dengan sebenar-benarnya dalam keadaan sadar dan dengan penuh tanggung jawab serta diketahui oleh orang tua/wali saya.</td>
      </tr>
      
          
      
    </table>
    <br>
      <br>
 
      <br>
      <br> 
      <br>
      <br>  
    <div style="float:left;">
      Mengetahui,  <br>
      Orang Tua /Wali<br>
      <br>
      <br>
      <br>
      <br>
      <b><u>(<?php echo $user->nama_ayah; ?>)</u></b><br>
      
    </div>

    <div style="float:right;">
      Parung, <?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?> <br>
      Yang membuat pernyataan,  <br>
      <br>
      <br>
      <p>Materai 10000</p>
      <br>
      <b><u>(<?php echo $user->nama_lengkap; ?>)</u></b><br>
      
    </div>
    <br><br><br><br><br><br><br><br><br><br>

    

  </body>
</html>
