<?php 
include('includes/header.php');
include('lock.php');
?>
<body>

    <section class="fxt-template-animation fxt-template-layout34" data-bg-image="img/elements/bg1.png">
        <div class="fxt-shape">
            <div class="fxt-transformX-L-50 fxt-transition-delay-1">
                <img src="img/elements/shape1.png" alt="Shape">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="fxt-column-wrap justify-content-between">
                        <div class="fxt-animated-img">
                            <div class="fxt-transformX-L-50 fxt-transition-delay-10">
                                <img src="img/figure/bg34-1.png" alt="Animated Image">
                            </div>
                        </div>
                        <div class="fxt-transformX-L-50 fxt-transition-delay-3">
                            <a href="login-34.html" class="fxt-logo"><img src="img/logo.png" alt="Logo"></a>
                        </div>
                        <div class="fxt-transformX-L-50 fxt-transition-delay-5">
                            <div class="fxt-middle-content">
                                <h1 class="fxt-main-title">Neeraj Sethi life Captured</h1>
                                <div class="fxt-switcher-description1">Capturing the beauty of My journey</div>
                            </div>
                        </div>
                        <div class="fxt-transformX-L-50 fxt-transition-delay-7">
                            <div class="fxt-qr-code">
                                <img src="img/elements/qr-login-34.png" alt="QR">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="fxt-column-wrap justify-content-center">
                        <div class="fxt-form">
                            <form action="" method="post" id="login-frm">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email_id" placeholder="Enter Email ID" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="********" autocomplete="off">
                                
                                </div>
                                <div class="form-group">
                                    <div class="fxt-switcher-description2 text-right">
                                        <a href="<?=BASE_URL?>forgot-password.php" class="fxt-switcher-text">Recovery Password</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="login_submit" class="fxt-btn-fill">Log In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <?php include("includes/footer.php");?>