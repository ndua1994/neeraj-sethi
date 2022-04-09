	
		<!-- BEGIN FOOTER -->
		
<?php
$other_info=mysqli_fetch_array(mysqli_query($conn,"select * from tbl_other_information where is_active=1"));
?>
		<footer class="clearfix">
			<div class="m-12">
				<p>Information line • <?=$other_info['mobile_no']?>, E-mail • <?=$other_info['email_id']?></p>

				<div class="m-12 soc">
					<a href="<?=$other_info['twitter_link']?>"><i class="fa fa-twitter fa-mid"></i></a>
					<a href="<?=$other_info['facebook_link']?>"><i class="fa fa-facebook fa-mid"></i></a>
					<a href="<?=$other_info['insta_link']?>"><i class="fa fa-instagram fa-mid"></i></a>
				</div>

				<span>All Rights Reserved © <?=date('Y')?> | neerajshethi.ae</span>
			</div>
		</footer>
		<!-- END FOOTER -->

		<!-- Javascript -->
		<script src="<?=BASE_URL?>js/jquery-1.11.3.js" type="text/javascript"></script>
		<script src="<?=BASE_URL?>js/countdown.js" type="text/javascript"></script>
		<script src="<?=BASE_URL?>js/scrollreveal.min.js" type="text/javascript"></script>
		<script src="<?=BASE_URL?>js/lightbox.js" type="text/javascript"></script>
		<script src="<?=BASE_URL?>js/jquery.form.min.js" type="text/javascript"></script>
		<script src="<?=BASE_URL?>inc/owl-carousel/owl.carousel.js" type="text/javascript"></script>
		<script src="<?=BASE_URL?>js/custom.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfxnFsrmf0Z6EI-VZa9wKiApJLVobOPVQ"></script>

	</body>
</html>
