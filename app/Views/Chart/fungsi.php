<?php $koneksi    = mysqli_connect("localhost", "root", "", "rumah_sakit");
$ortopedi = mysqli_query($koneksi, "SELECT spesialis FROM riwayat_penyakit WHERE spesialis='Ortopedi'");
$kebidanan = mysqli_query($koneksi, "SELECT spesialis FROM riwayat_penyakit WHERE spesialis='Kebidanan'");
$anak = mysqli_query($koneksi, "SELECT spesialis FROM riwayat_penyakit WHERE spesialis='Anak'");
$tumbuh_kembang = mysqli_query($koneksi, "SELECT spesialis FROM riwayat_penyakit WHERE spesialis='Tumbuh Kembang'");
$bedah_umum = mysqli_query($koneksi, "SELECT spesialis FROM riwayat_penyakit WHERE spesialis='Bedah Umum'");
$bedah_disgestif = mysqli_query($koneksi, "SELECT spesialis FROM riwayat_penyakit WHERE spesialis='Bedah Disgestif atau Pencernaan'");
$bedah_saraf = mysqli_query($koneksi, "SELECT spesialis FROM riwayat_penyakit WHERE spesialis='Bedah Saraf'");
$paru = mysqli_query($koneksi, "SELECT spesialis FROM riwayat_penyakit WHERE spesialis='Paru'");
$kulit = mysqli_query($koneksi, "SELECT spesialis FROM riwayat_penyakit WHERE spesialis='Kulit dan Kelamin'");

$ortopedis = mysqli_num_rows($ortopedi);
$kebidanans = mysqli_num_rows($kebidanan);
$anaks = mysqli_num_rows($anak);
$tumbuh_kembangs = mysqli_num_rows($tumbuh_kembang);
$bedah_umums = mysqli_num_rows($bedah_umum);
$bedah_disgestifs = mysqli_num_rows($bedah_disgestif);
$bedah_sarafs = mysqli_num_rows($bedah_saraf);
$parus = mysqli_num_rows($paru);
$kulitus = mysqli_num_rows($kulit);

// menghitung pasien berdasarkan jenis kelamin laki2 dan tanggal

$ag  = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Laki-Laki' AND tanggal_berobat LIKE '_____08%' ");
$sep = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Laki-Laki' AND tanggal_berobat LIKE '_____09%' ");
$okt = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Laki-Laki' AND tanggal_berobat LIKE '_____10%' ");
$nov = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Laki-Laki' AND tanggal_berobat LIKE '_____11%' ");
$des = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Laki-Laki' AND tanggal_berobat LIKE '_____12%' ");
$jan = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Laki-Laki' AND tanggal_berobat LIKE '_____01%' ");
$feb = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Laki-Laki' AND tanggal_berobat LIKE '_____02%' ");
$mar = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Laki-Laki' AND tanggal_berobat LIKE '_____03%' ");
$apr = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Laki-Laki' AND tanggal_berobat LIKE '_____04%' ");
$mei = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Laki-Laki' AND tanggal_berobat LIKE '_____05%' ");
$jun = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Laki-Laki' AND tanggal_berobat LIKE '_____06%' ");
$jul = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Laki-Laki' AND tanggal_berobat LIKE '_____07%' ");

$agusts = mysqli_num_rows($ag);
$seps = mysqli_num_rows($sep);
$okts = mysqli_num_rows($okt);
$novs = mysqli_num_rows($nov);
$dess = mysqli_num_rows($des);
$jans = mysqli_num_rows($jan);
$febs = mysqli_num_rows($feb);
$mars = mysqli_num_rows($mar);
$aprs = mysqli_num_rows($apr);
$meis = mysqli_num_rows($mei);
$juns = mysqli_num_rows($jun);
$juls = mysqli_num_rows($jul);

// menghitung pasien berdasarkan jenis kelamin perempuan dan tanggal

$agg  = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Perempuan' AND tanggal_berobat LIKE '_____08%' ");
$sepp = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Perempuan' AND tanggal_berobat LIKE '_____09%' ");
$okto = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Perempuan' AND tanggal_berobat LIKE '_____10%' ");
$novo = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Perempuan' AND tanggal_berobat LIKE '_____11%' ");
$deso = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Perempuan' AND tanggal_berobat LIKE '_____12%' ");
$jano = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Perempuan' AND tanggal_berobat LIKE '_____01%' ");
$febo = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Perempuan' AND tanggal_berobat LIKE '_____02%' ");
$maro = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Perempuan' AND tanggal_berobat LIKE '_____03%' ");
$apro = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Perempuan' AND tanggal_berobat LIKE '_____04%' ");
$meio = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Perempuan' AND tanggal_berobat LIKE '_____05%' ");
$juno = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Perempuan' AND tanggal_berobat LIKE '_____06%' ");
$julo = mysqli_query($koneksi, "SELECT jenis_kelamin, tanggal_berobat FROM pasien WHERE jenis_kelamin='Perempuan' AND tanggal_berobat LIKE '_____07%' ");

$aggusts = mysqli_num_rows($agg);
$sepps = mysqli_num_rows($sepp);
$oktos = mysqli_num_rows($okto);
$novos = mysqli_num_rows($novo);
$desos = mysqli_num_rows($deso);
$janos = mysqli_num_rows($jano);
$febos = mysqli_num_rows($febo);
$maros = mysqli_num_rows($maro);
$apros = mysqli_num_rows($apro);
$meios = mysqli_num_rows($meio);
$junos = mysqli_num_rows($juno);
$julos = mysqli_num_rows($julo);
