<?php

//class ezpdf yg di panggil
include "pdf/class.ezpdf.php"; 
include "fungsi_indotgl.php";
$pdf = new Cezpdf('A4','lanscape');


//Set margin dan font
$pdf->ezSetCmMargins(3, 3, 3, 3);
$pdf->selectFont('pdf/fonts/Times-Roman.afm');


$image = imagecreatefrompng ("smkn42.png");
//Tampilkan gambar di dokumen PDF
$pdf->addImage($image,40,778,70);

	
//Teks di tengah atas untuk judul header
$pdf->addText(220, 815, 14,'<b>Rekap Data Pelanggaran Siswa</b>');
$pdf->addText(210, 800, 12,'<b>SMK NEGERI 4 BANDAR LAMPUNG</b>');
$pdf->addText(210, 785, 10,'Jl. HOS Cokroaminoto No. 102 Bandar Lampung');

//Garis atas untuk header
$pdf->line(2, 770, 590, 770);

//Garis bawah untuk footer
$pdf->line(2, 50, 590, 50);


//Teks kiri bawah
date_default_timezone_set("Asia/Jakarta");
$pdf->addText(410,34,8,'Dicetak tgl:' . date( 'd-m-Y, H:i:s'));

//Koneksi ke database dan tampilkan datanya
mysql_connect("localhost", "root", "");
mysql_select_db("monitoring-siswa");

$NIS_siswa= $_GET['id'];
$tampil = "SELECT * FROM pelanggaran_siswa LEFT JOIN pelanggaran USING (Kode_pelanggaran) LEFT JOIN siswa USING (NIS_siswa)LEFT JOIN kelas USING (Kode_kelas)  WHERE NIS_siswa= $NIS_siswa;";
$sql = mysql_query($tampil);  
$jml = mysql_num_rows($sql);
if ($jml > 0){
$i = 1;
while($r = mysql_fetch_array($sql)) {
//Format Menampilkan data di ezPdf

 $data[$i]=array('No'=>$i,
       'NIS siswa'=>"$r[NIS_siswa]",
	   'Nama siswa'=>"$r[Nama_siswa]",
	   'Kelas'=>"$r[Nama_kelas]",
       'Tanggal'=>$tgl=tgl_indo($r['Tanggal_pelanggaran_siswa']),
	   'Pelanggaran'=>"$r[Nama_pelanggaran]",
       'Point'=>"$r[Point]"  
       );
 $i++;

}
$options=array('shaded'=>0,'width'=>10);
//Tampilkan Dalam Bentuk Table
 $pdf->ezTable($data, "", "", array('width' => 500));



// Penomoran halaman
$pdf->ezStartPageNumbers(700, 20, 8);
$pdf->ezStream();
}

else{

  echo"<script>alert('Data pelanggaran tidak ditemukan')
  window.location='siswa.php'</script>";

}
?>