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
    <h4 align="center" style="margin-top:0px;"><u>SURAT PERNYATAAN ORANG TUA</u></h4>
    
    <br>

    <table width="100%" border="0">
      
      <tr>
        <td>NAMA ORANG TUA</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_ayah); ?></td>
      </tr>
      

       <tr>
        <td>PEKERJAAN</td>
        <td>:</td>
        <td><?php echo $user->pekerjaan_ayah; ?></td>
      </tr>
      <tr>
        <td>AGAMA</td>
        <td>:</td>
        <td><?php echo $user->agama; ?></td>
      </tr>
      <tr>
        <td>ALAMAT</td>
        <td>:</td>
        <td><?php echo $user->alamat_siswa; ?></td>
      </tr>

      
      
      <tr>
        <td>NO. HP (Ortu)</td>
        <td>:</td>
        <td><?php echo $user->no_hp_ayah; ?></td>
      </tr>

      <tr>
        <td>ORANG TUA DARI</td>
        <td>:</td>
        <td><?php echo $user->nama_lengkap; ?></td>
      </tr>

      <tr>
        <td>Hubungan keluarga dengan siswa</td>
        <td>:</td>
        <td><?php echo ucwords($user->status_keluarga); ?></td>
      </tr>
     
    </table>
    <br>
<b><u>Bahwa selaku orang tua / wali dari siswa yang bernama: :</u></b>
    <br>
    <p><?php echo ucwords($user->nama_lengkap); ?>, kelas X (Sepuluh ) SMA NEGERI 1  Parung, saya :</p>
    <table width="100%" border="0" style="margin-left:5px;">
      <tr>

        <td>1. Bersedia membimbing dan mengawasi siswa tersebut diatas untuk mentaati tata tertib sekolah, mengikuti kegiatan sekolah, agar tidak terlibat kegiatan  kenakalan remaja.</td>
      </tr>
      <tr>
        <td>2. Bersedia membimbing dan mendorong siswa tersebut diatas untuk mengikuti pelajaran dengan tekun.</td>
        
        
      </tr>
      <tr>
        <td>3. Bersedia mendukung seluruh program sekolah, dan tidak akan menuntu secara hukum jika terjadi permasalahan, penyelesaian dilakukan secra kekeluargaan.</td>
       
      </tr>
      
      <tr>
        <td>4. Menjamin siswa tersebut di atas belum menikah dan tidak akan menikah selama menempuh pendidikan di SMA NEGERI 1  Parung</td>
       
      </tr>
      
       
     
      <tr>
        <td>5.  Apabila saya  melanggar pernyataan ini,  maka saya siap menerima sanksi, berupa :</td>
      </tr>
       <tr>
        <td>a.  Tidak diperkenankan mengikuti pelajaran selama jangka waktu tertentu<br>b.  Dikembalikan kepada saya</td>

      </tr>
      <br>
      <br>
      
      
    </table>
    <div style="float:right;">
      Parung, <?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?> <br>
      Yang membuat pernyataan,  <br>
      Orang Tua /Wali<br>
      <br>
      <br>
      <br>
      <b><u><?php echo ucwords($user->nama_ayah); ?></u></b><br>
      
    </div>
    <br><br><br><br><br><br><br><br><br><br>

    

  </body>
</html>
