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
    <style type="text/css">
        .btn-info{
            margin-bottom: 20px;
        }
         .dataheader{
            text-align: left;
        }
        .datatombol{
            text-align: right;
        }
    </style>
</head>

<body>
    <main id="main" role="main">
     

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" id="collection-heading">
                        <h1 class="dataheader">Mobile Ganggu</h1>
                    </div>
                    <div class="col-md-6" id="collection-heading2">
                        <a href="tambah_role.php" class="datatombol"><button type="button" class="btn btn-info">Add Role</button></a>
                        <a href="tambah_hero.php" class="datatombol"><button type="button" class="btn btn-info">Add Hero</button></a>
                    </div>
                </div>

                <div class="row">
                    <?php
                        include 'koneksi.php';
                        $query = mysqli_query($db,"SELECT hero.id as id,hero.image,hero.nama,role.id as r_id,role.name  FROM hero,role WHERE hero.id_role=role.id ORDER BY hero.id DESC");
                        while($baris = mysqli_fetch_array($query)){
                    ?>
                     <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="img/<?php echo $baris['image']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text" align="center"><b><?php echo $baris['nama']; ?></b></p>
                                <div class="d-flex justify-content-between align-items-center">
                                   
                                    <small class="text-muted"><?php echo $baris['name']; ?></small>
                                </div>
                            </div>
                        </div>
                        <a href="detail.php?id=<?php echo $baris['id']; ?>"><button type="button" class="btn btn-info btn-block">Detail</button></a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-primary scrollUp">
            <i class="fa fa-arrow-circle-o-up"></i>
        </a>
    </main>
    <!-- Footer -->
    <footer id="footer">
        <p class="copyright">Made with
            <i class="fa fa-heart"></i> By
            <a target="_blank" title="Orbit Themes" href="http://www.orbitthemes.com">Orbit Themes</a> &copy;
            <span id="currentYear"></span> All Rights Reserved.
        </p>
        <div class="social">
            <a traget="_blank" href="https://facebook.com/orbitthemes" title="facebook">
                <i class="fa fa-facebook"></i>
            </a>
            <a traget="_blank" href="https://twitter.com/orbitthemes" title="twitter">
                <i class="fa fa-twitter"></i>
            </a>
            <a traget="_blank" href="https://plus.google.com/+orbitthemes" title="Google+" target="_blank">
                <i class="fa fa-google-plus"></i>
            </a>
            <a traget="_blank" href="https://github.com/orbitthemes" title="github" target="_blank">
                <i class="fa fa-github"></i>
            </a>
            <a traget="_blank" href="https://www.behance.net/orbitthemes" title="Behance" target="_blank">
                <i class="fa fa-behance"></i>
            </a>
            <a traget="_blank" href="https://dribbble.com/orbitthemes" title="Dribbble" target="_blank">
                <i class="fa fa-dribbble"></i>
            </a>
            <a traget="_blank" href="https://www.pinterest.com/orbitThemes/" title="Pinterest" target="_blank">
                <i class="fa fa-pinterest"></i>
            </a>
            <a traget="_blank" href="https://www.reddit.com/user/orbitthemes" title="Reddit" target="_blank">
                <i class="fa fa-reddit"></i>
            </a>
            <a traget="_blank" href="https://orbitthemes.com/blog/" title="RSS" target="_blank">
                <i class="fa fa-rss"></i>
            </a>
        </div>
    </footer>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="dist/jquery/jquery.min.js"></script>
    <script src="dist/popper/popper.min.js" integrity=""></script>
    <script src="dist/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.min.js"></script>
</body>

</html>