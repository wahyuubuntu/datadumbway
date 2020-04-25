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
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $query = mysqli_query($db,"SELECT * FROM hero WHERE id='$id'");
        $baris = mysqli_fetch_array($query);
        $idrole = $baris['id_role'];
    ?>
    <h3>Hero : <?php echo $baris['nama'];?></h3>
         <form method="post">
            <div class="form-group">
                <label for="name">
                    <?php
                        $query1 = mysqli_query($db,"SELECT * FROM role WHERE id='$idrole'");
                        $baris1 = mysqli_fetch_array($query1);
                        echo "Role : ".$baris1['name'];
                    ?>
                </label>                
            </div>
            <div class="form-group">
            <label>Foto Hero : <img src="img/<?php echo $baris['image'];?>" width="100px"></label>
            </div>            
            <div class="form-group">
            <label>Deskripsi Hero : <?php echo $baris['deskripsi'];?></label>
            </div>
            <div class="form-group">
                <a href="index.php">Kembali</a> | <a href="edit_hero.php?id=<?php echo $baris['id'];?>">Edit</a> | <a href="hapus_hero.php?id=<?php echo $baris['id'];?>">Hapus</a>
            </div>
        </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $name   = $_POST['name'];
    $query  = mysqli_query($db,"UPDATE role SET name = '$name' WHERE id='$id'");
    header("Location:data_role.php");
}else{}
?>