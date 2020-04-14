<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.warning {color: #FF0000;}
	</style>
</head>
<body>

<?php
$error_nama = "";
$error_jklm = "";
$error_nisn = "";
$error_nik = "";
$error_temla = "";
$error_tangla = "";
$error_nral = "";
$error_agama = "";
$error_kwn = "";
$error_bk = "";
$error_alamat = "";
$error_rt = "";
$error_rw = "";
$error_dusun = "";
$error_lurah = "";
$error_kecamatan = "";
$error_pos = "";
$error_lintang = "";
$error_bujur = "";
$error_tt = "";
$error_mt = "";
$error_kks = "";
$error_anak = "";
$error_penerima = "";
$error_no = "";

$nama = "";
$jklm = "";
$nisn = "";
$nik = "";
$temla = "";
$tangla = "";
$nral = "";
$agama = "";
$kwn = "";
$bk = "";
$alamat = "";
$rt = "";
$rw = "";
$dusun = "";
$lurah = "";
$kecamatan = "";
$pos = "";
$lintang = "";
$bujur = "";
$tt = "";
$mt = "";
$kks = "";
$anak = "";
$penerima = "";
$no = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["nama"]))
	{
		$error_nama = "Nama tidak boleh kosong";
	}
	else
	{
		$nama = cek_input($_POST["nama"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$nama))
		{
		$nameErr = "Inputan Hanya boleh huruf dan spasi";	
		}
	}

	if (empty($_POST["jklm"]))
	{
    $jklmErr = "Jenis Kelamin Tidak Boleh Kosong";
    }
    else 
    {
    $gender = test_input($_POST["jklm"]);
    }

	if (empty($_POST["nisn"]))
	{
		$error_nisn = "NISN tidak boleh kosong";
	}
	else
	{
		$nisn = cek_input($_POST["nisn"]);

		if (!is_numeric($nisn))
		{
		$error_nisn = 'NISN hanya boleh angka';	
		}
	}

	if (empty($_POST["nik"]))
	{
		$error_nik = "NIK/No.KITAS tidak boleh kosong";
	}
	else
	{
		$nik = cek_input($_POST["nik"]);

		if (!is_numeric($nik))
		{
		$error_nik = 'NIK/No.KITAS hanya boleh angka';	
		}
	}

	if (empty($_POST["temla"]))
	{
		$error_nama = "Tempat Lahir tidak boleh kosong";
	}
	else
	{
		$nama = cek_input($_POST["temla"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$temla))
		{
		$temlaErr = "Tempat Lahir Hanya boleh huruf dan spasi";	
		}
	}

	if (empty($_POST["tangla"]))
	{
	$error_tangla = "Tanggal Lahir tidak boleh kosong";	
	}
	else
	{
		$tangla = cek_input($_POST["tangla"]);
	}

	if (empty($_POST["nral"]))
	{
	$error_nral = "No Registrasi Akta Lahir tidak boleh kosong";	
	}
	else
	{
		$nral = cek_input($_POST["nral"]);
	}

	if (empty($_POST["agama"]))
	{
		$error_agama = "Agama tidak boleh kosong";
	}
	else
	{
		$agama = cek_input($_POST["agama"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$agama))
		{
		$agamaErr = "Agama Hanya boleh huruf dan spasi";	
		}
	}

	if (empty($_POST["kwn"]))
	{
		$error_kwn = "Kewarganegaraan tidak boleh kosong";
	}
	else
	{
		$kwn = cek_input($_POST["kwn"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kwn))
		{
		$kwnErr = "Kewarganegaraan Hanya boleh huruf dan spasi";	
		}
	}

	if (empty($_POST["bk"]))
	{
	$error_bk = "Berkebutuhan Khusus tidak boleh kosong";	
	}
	else
	{
		$bk = cek_input($_POST["bk"]);
	}

	if (empty($_POST["alamat"]))
	{
	$error_alamat = "Alamat Jalan tidak boleh kosong";	
	}
	else
	{
		$alamat = cek_input($_POST["alamat"]);
	}

	if (empty($_POST["rt"]))
	{
		$error_rt = "RT tidak boleh kosong";
	}
	else
	{
		$rt = cek_input($_POST["rt"]);

		if (!is_numeric($rt))
		{
		$error_rt = 'RT hanya boleh angka';	
		}
	}

	if (empty($_POST["rw"]))
	{
		$error_rw = "RW tidak boleh kosong";
	}
	else
	{
		$rw = cek_input($_POST["rw"]);

		if (!is_numeric($rw))
		{
		$error_rw = 'RW hanya boleh angka';	
		}
	}

	if (empty($_POST["dusun"]))
	{
	$error_dusun = "Nama Dusun tidak boleh kosong";	
	}
	else
	{
		$dusun = cek_input($_POST["dusun"]);
	}

	if (empty($_POST["lurah"]))
	{
	$error_lurah = "Nama Kelurahan/Desa tidak boleh kosong";	
	}
	else
	{
		$lurah = cek_input($_POST["lurah"]);
	}

	if (empty($_POST["kecamatan"]))
	{
	$error_kecamatan = "Kecamatan tidak boleh kosong";	
	}
	else
	{
		$kecamatan = cek_input($_POST["kecamatan"]);
	}

	if (empty($_POST["pos"]))
	{
	$error_pos = "Kode Pos tidak boleh kosong";	
	}
	else
	{
		$pos = cek_input($_POST["pos"]);
	}

	if (empty($_POST["lintang"]))
	{
	$error_lintang = "Lintang tidak boleh kosong";	
	}
	else
	{
		$lintang = cek_input($_POST["lintang"]);
	}

	if (empty($_POST["bujur"]))
	{
	$error_bujur = "Bujur tidak boleh kosong";	
	}
	else
	{
		$bujur = cek_input($_POST["bujur"]);
	}

	if (empty($_POST["tt"]))
	{
	$error_tt = "Tempat Tinggal tidak boleh kosong";	
	}
	else
	{
		$tt = cek_input($_POST["tt"]);
	}

	if (empty($_POST["mt"]))
	{
	$error_mt = "Moda Transportasi tidak boleh kosong";	
	}
	else
	{
		$mt = cek_input($_POST["mt"]);
	}

	if (empty($_POST["kks"]))
	{
	$error_kks = "Nomor KKS tidak boleh kosong";	
	}
	else
	{
		$kks = cek_input($_POST["kks"]);
	}

	if (empty($_POST["anak"]))
	{
		$error_anak = "Anak ke berapa tidak boleh kosong";
	}
	else
	{
		$anak = cek_input($_POST["anak"]);

		if (!is_numeric($anak))
		{
		$error_anak = 'Anak ke berapa hanya boleh angka';	
		}
	}

	if (empty($_POST["penerima"]))
	{
	$error_penerima = "Penerima KPS/PKH tidak boleh kosong";	
	}
	else
	{
		$penerima = cek_input($_POST["penerima"]);
	}

	if (empty($_POST["no"]))
	{
	$error_no = "No KPS/PKH tidak boleh kosong";	
	}
	else
	{
		$no = cek_input($_POST["no"]);
	}

}

function cek_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<div class="row">
<div class="col-md-6">
<div class="card">
<div class="card-header">
	DATA PRIBADI
</div>			
</div class="card-body">
<form method="post" action="Cetak3.php"> <div class="form-group row">
	<label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
	<div class="col-sm-10">
	<input type="text" name="nama" class="form-control <?php echo($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span> 
	</div>
</div>

<div class="form-group row">
	<label for="jklm" class="col-sm-2 col-form-label">Jenis Kelamin</label>
	<div class="col-sm-10">
		<input type="text" name="jklm" class="form-control <?php echo($error_jklm !="" ? "is-invalid" : ""); ?>" id="jklm" placeholder="jklm" value="<?php echo $jklm; ?>"><span class="warning"><?php echo $error_jklm; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="nisn" class="col-sm-2 col-form-label">NISN</label>
	<div class="col-sm-10">
		<input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="nisn" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="nik" class="col-sm-2 col-form-label">NIK</label>
	<div class="col-sm-10">
		<input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="nik" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="temla" class="col-sm-2 col-form-label">Tempat Lahir</label>
	<div class="col-sm-10">
		<input type="text" name="temla" class="form-control <?php echo($error_temla !="" ? "is-invalid" : ""); ?>" id="temla" placeholder="temla" value="<?php echo $temla; ?>"><span class="warning"><?php echo $error_temla; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="tangla" class="col-sm-2 col-form-label">Tanggal Lahir</label>
	<div class="col-sm-10">
		<input type="text" name="tangla" class="form-control <?php echo($error_tangla !="" ? "is-invalid" : ""); ?>" id="tangla" placeholder="tangla" value="<?php echo $tangla; ?>"><span class="warning"><?php echo $error_tangla; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="nral" class="col-sm-2 col-form-label">No Regristasi Akta Lahir</label>
	<div class="col-sm-10">
		<input type="text" name="nral" class="form-control <?php echo($error_nral !="" ? "is-invalid" : ""); ?>" id="nral" placeholder="nral" value="<?php echo $nral; ?>"><span class="warning"><?php echo $error_nral; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="agama" class="col-sm-2 col-form-label">Agama</label>
	<div class="col-sm-10">
		<input type="text" name="agama" class="form-control <?php echo($error_agama !="" ? "is-invalid" : ""); ?>" id="agama" placeholder="agama" value="<?php echo $agama; ?>"><span class="warning"><?php echo $error_agama; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="kwn" class="col-sm-2 col-form-label">Kewarganegaraan</label>
	<div class="col-sm-10">
		<input type="text" name="kwn" class="form-control <?php echo($error_kwn !="" ? "is-invalid" : ""); ?>" id="kwn" placeholder="kwn" value="<?php echo $kwn; ?>"><span class="warning"><?php echo $error_kwn; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="bk" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
	<div class="col-sm-10">
		<input type="text" name="bk" class="form-control <?php echo($error_bk !="" ? "is-invalid" : ""); ?>" id="bk" placeholder="bk" value="<?php echo $bk; ?>"><span class="warning"><?php echo $error_bk; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="alamat" class="col-sm-2 col-form-label">Alamat Jalan</label>
	<div class="col-sm-10">
		<input type="text" name="alamat" class="form-control <?php echo($error_alamat !="" ? "is-invalid" : ""); ?>" id="alamat" placeholder="alamat" value="<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="rt" class="col-sm-2 col-form-label">RT</label>
	<div class="col-sm-10">
		<input type="text" name="rt" class="form-control <?php echo($error_rt !="" ? "is-invalid" : ""); ?>" id="rt" placeholder="rt" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="rw" class="col-sm-2 col-form-label">RW</label>
	<div class="col-sm-10">
		<input type="text" name="rw" class="form-control <?php echo($error_rw !="" ? "is-invalid" : ""); ?>" id="rw" placeholder="rw" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="dusun" class="col-sm-2 col-form-label">Nama Dusun</label>
	<div class="col-sm-10">
		<input type="text" name="dusun" class="form-control <?php echo($error_dusun !="" ? "is-invalid" : ""); ?>" id="dusun" placeholder="dusun" value="<?php echo $dusun; ?>"><span class="warning"><?php echo $error_dusun; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="lurah" class="col-sm-2 col-form-label">Nama Kelurahan/Desa</label>
	<div class="col-sm-10">
		<input type="text" name="lurah" class="form-control <?php echo($error_lurah !="" ? "is-invalid" : ""); ?>" id="lurah" placeholder="lurah" value="<?php echo $lurah; ?>"><span class="warning"><?php echo $error_lurah; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
	<div class="col-sm-10">
		<input type="text" name="kecamatan" class="form-control <?php echo($error_kecamatan !="" ? "is-invalid" : ""); ?>" id="kecamatan" placeholder="kecamatan" value="<?php echo $kecamatan; ?>"><span class="warning"><?php echo $error_kecamatan; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="pos" class="col-sm-2 col-form-label">Kode Pos</label>
	<div class="col-sm-10">
		<input type="text" name="pos" class="form-control <?php echo($error_pos !="" ? "is-invalid" : ""); ?>" id="pos" placeholder="pos" value="<?php echo $pos; ?>"><span class="warning"><?php echo $error_pos; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="lintang" class="col-sm-2 col-form-label">Lintang</label>
	<div class="col-sm-10">
		<input type="text" name="lintang" class="form-control <?php echo($error_lintang !="" ? "is-invalid" : ""); ?>" id="lintang" placeholder="lintang" value="<?php echo $lintang; ?>"><span class="warning"><?php echo $error_lintang; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="bujur" class="col-sm-2 col-form-label">Bujur</label>
	<div class="col-sm-10">
		<input type="text" name="bujur" class="form-control <?php echo($error_bujur !="" ? "is-invalid" : ""); ?>" id="bujur" placeholder="bujur" value="<?php echo $bujur; ?>"><span class="warning"><?php echo $error_bujur; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="tt" class="col-sm-2 col-form-label">Tempat Tinggal</label>
	<div class="col-sm-10">
		<input type="text" name="tt" class="form-control <?php echo($error_tt !="" ? "is-invalid" : ""); ?>" id="tt" placeholder="tt" value="<?php echo $tt; ?>"><span class="warning"><?php echo $error_tt; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="mt" class="col-sm-2 col-form-label">Moda Transportasi</label>
	<div class="col-sm-10">
		<input type="text" name="mt" class="form-control <?php echo($error_mt !="" ? "is-invalid" : ""); ?>" id="mt" placeholder="mt" value="<?php echo $mt; ?>"><span class="warning"><?php echo $error_mt; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="kks" class="col-sm-2 col-form-label">Nomor KKS</label>
	<div class="col-sm-10">
		<input type="text" name="kks" class="form-control <?php echo($error_kks !="" ? "is-invalid" : ""); ?>" id="kks" placeholder="kks" value="<?php echo $kks; ?>"><span class="warning"><?php echo $error_kks; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="anak" class="col-sm-2 col-form-label">Anak Ke Berapa</label>
	<div class="col-sm-10">
		<input type="text" name="anak" class="form-control <?php echo($error_anak !="" ? "is-invalid" : ""); ?>" id="anak" placeholder="anak" value="<?php echo $anak; ?>"><span class="warning"><?php echo $error_anak; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="penerima" class="col-sm-2 col-form-label">Penerima KPS/PKH</label>
	<div class="col-sm-10">
		<input type="text" name="penerima" class="form-control <?php echo($error_penerima !="" ? "is-invalid" : ""); ?>" id="penerima" placeholder="penerima" value="<?php echo $penerima; ?>"><span class="warning"><?php echo $error_penerima; ?></span>
	</div>
</div>

<div class="form-group row">
	<label for="no" class="col-sm-2 col-form-label">No KPS/PKH</label>
	<div class="col-sm-10">
		<input type="text" name="no" class="form-control <?php echo($error_no !="" ? "is-invalid" : ""); ?>" id="no" placeholder="no" value="<?php echo $no; ?>"><span class="warning"><?php echo $error_no; ?></span>
	</div>
</div>

<div class="form-group row">
	<div class="col-sm-10">
		<button type="submit" class="btn btn-primary">kirim</button>
	</div>
</div>
</form>

</div>
</div>
</div>
</div>

</body>
</html>