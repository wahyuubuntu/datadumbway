<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <!-- Required meta tags always come first -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Album - Photo Collection Template , Responsive Bootstrap 4 template , bootstrap 4 starter template, bootstrap4 template, Album template, Photography Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" lang="en" content="Simple Bootstrap 4 Photography template , Responsive and Modern HTML5 Template made from bootstrap 4.">
    <meta name="keywords" lang="en" content="photography template, bootstrap 4 template,bootstrap 4 album template, responsive bootstrap 4 template, bootstrap 4, bootstraping, bootstrap4, oribitthemes, othemes">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="">
    <!--Font Awesome-->
    <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/main.min.css">
    <!--[if IE]>
      <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>
    <![endif]-->
    <!--[if lt IE 9]>
      <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
    <![endif]-->
</head>
<body>
        <h3>Tambah Hero</h3>
        <a href="index.php">Kembali ke Beranda</a> 
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="nama" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="name">ID Role</label>
                <select name="id_role">
                	<?php
                        include 'koneksi.php';
                        $query = mysqli_query($db,"SELECT * FROM role ORDER BY id ASC");
                        while($baris = mysqli_fetch_array($query)){
                    ?>
                	<option value="<?php echo $baris['id']; ?>"><?php echo $baris['name']; ?></option>
                	<?php }?>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Image</label>
                <input type="file" name="image">
            </div>
            <div class="form-group">
                <label for="name">Deskripsi</label>
                <textarea cols="10" rows="4" name="deskripsi"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info btn-sm" value="Simpan" name="submit">
            </div>
        </form>
</body>
</html>
<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $name   	= $_POST['nama'];
    $id_role 	= $_POST['id_role'];
    $nama 		= $_FILES['image']['name'];
    $lokasi 	=  $_FILES['image']['tmp_name'];

    move_uploaded_file($nama, "img/".$nama);
    $desk 		= $_POST['deskripsi']; 


    $query  = mysqli_query($db,"INSERT INTO hero VALUES (NULL,'$name','$id_role','$nama','$desk')");
    echo "sukses ditambah";
    echo "<br><a href=index.php>lihat data hero</a>";
}else{}
?>