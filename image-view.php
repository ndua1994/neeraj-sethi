<?php 
include('db/config.php');
include('lock.php');
$det=base64_decode($_GET['det']);
?>
<!doctype html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">

		<!-- Page Title -->
		<title>Image Uploading</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" href="css/lightbox.css">
		<link rel="stylesheet" href="inc/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="inc/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="inc/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>

	</head>

	<body>

		<section id="our-story">
			<div class="names">All Memory <span>Of</span> Mine</div>

			<!-- Carousel Gallery -->
			<div class="gallery">
				<div id="owl-gallery" class="owl-carousel owl-theme">
					<?php
					$query=mysqli_query($conn,"select * from tbl_pics where cat_id='".$det."' order by rand()");
					while($row=mysqli_fetch_array($query))
					{
					?>
					<div class="item"><a href="<?=BASE_URL_IMG?>uploads/<?=$row['pic_img']?>" data-lightbox="demo-gallery"><img src="<?=BASE_URL_IMG?>uploads/<?=$row['pic_img']?>" alt="<?=$row['pic_img_alt']?>"></a></div>
					<?php }?>
				</div>
			</div>
		</section>
<section class="uploading-image">
	<div class="container">
		<div class="row">
			<?php
					$query=mysqli_query($conn,"select * from tbl_pics where cat_id='".$det."' order by pic_id desc");
					while($row=mysqli_fetch_array($query))
					{
					?>
			<div class="col-md-3">
				<a href="<?=BASE_URL_IMG?>uploads/<?=$row['pic_img']?>" data-lightbox="demo-gallery"><img src="<?=BASE_URL_IMG?>uploads/<?=$row['pic_img']?>" alt="<?=$row['pic_img_alt']?>" class="uploading"></a>
			</div>
		<?php }?>
			
		</div>
	</div>
</section>
		<!-- Javascript -->
		<script src="js/jquery-1.11.3.js" type="text/javascript"></script>
		<script src="js/countdown.js" type="text/javascript"></script>
		<script src="js/scrollreveal.min.js" type="text/javascript"></script>
		<script src="js/lightbox.js" type="text/javascript"></script>
		<script src="js/jquery.form.min.js" type="text/javascript"></script>
		<script src="inc/owl-carousel/owl.carousel.js" type="text/javascript"></script>
		<script src="js/custom.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfxnFsrmf0Z6EI-VZa9wKiApJLVobOPVQ"></script>

	</body>

</html>
