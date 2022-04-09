<?php 
include('includes/header.php');
include('lock.php');
?>
	<body>
		<header>

			<div class="names">All Memory <span>Of</span> Mine</div>

			<div class="main-images center-content">

				<?php 
				$memo_img=mysqli_fetch_array(mysqli_query($conn,"select * from tbl_memories where memo_order=1 and is_active=1"));
				?>

				<div class="couple">
					<img src="<?=BASE_URL_IMG?>uploads/<?=$memo_img['memo_img']?>" alt="" class="round-img round-img-lgb">
				</div>

				<div class="images">
					<?php 
					$i=1;
					$query=mysqli_query($conn,"select * from tbl_memories where memo_order!=1 and is_active=1 order by memo_order");
					while($row=mysqli_fetch_array($query))
					{
						$i==3 ? ++$i : $i;
					?>
					<div class="image-0<?=$i?>">
						<img src="<?=BASE_URL_IMG?>uploads/<?=$row['memo_img']?>" alt="<?=$row['memo_img_alt']?>" class="round-img">
					</div>
				    <?php $i++;}?>
				</div>
			</div>
		</header>
		
		<!-- Accommodation -->
		<section id="accommodation">
			<h1>Images that tell my story</h1>
			<hr>

			<div class="center-container clearfix">

				<?php
				$query=mysqli_query($conn,"select * from tbl_category where is_active='1' order by cat_id desc");
				while($row=mysqli_fetch_array($query))
				{
				?>
				<div class="m-03">
					<h2><?=$row['cat_name']?></h2>
					<img src="<?=BASE_URL_IMG?>uploads/<?=$row['cat_img']?>" alt="<?=$row['cat_img_alt']?>" class="round-img">
					<p><?=$row['cat_descp']?></p>
					<a class="more-button" href="<?=BASE_URL?>image-view.php?det=<?=base64_encode($row['cat_id'])?>">more</a>
				</div>
			<?php }?>

				

			</div>
		</section>

		<!-- Gifts -->
	<?php include('includes/footer.php');?>