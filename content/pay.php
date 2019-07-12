<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pembayaran | Integral Store </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- <link rel="/stylesheet" href="../bootstrap/bootstrap.min.css">
        <script src="../bootstrap/popper.min.js"></script>
        <script src="../bootstrap/bootstrap.min.js"></script> -->
    </head>
    <body>
    	<?php 
    	session_start();

	// cek apakah yang mengakses halaman ini sudah login
    	if($_SESSION['mail']==""){
    		header("location:../index.php?pesan=gagal");
    	}

    	?>
    	<div class="navbar">
            <div class="col-md-10 col-sm-10 col-6"></div>
            <div class="col-md-1 col-sm-2 col-4">
               
                <a href="../akses/logout.php"><button type="button" class="btn btn-outline-secondary">Logout</button></a>
            </div>
        </div>
       <div class="text-center">
       	<h1><b>PORTAL PEMBAYARAN</b></h1>
       	<br><h1>INTEGRAL STORE</h1>
       	<p>Halo Anda telah login sebagai <b><?php echo $_SESSION['mail']; ?></b> Silahkan Melakukan Transaksi</p>
       </div>

       <div class="container post">
       	<div class="row">

       		<div class="col-md-4">
       			<div class="card mb-4 box-shadow">
       				<img class="card-img-top" src="../img/paypal.png" alt="Card image cap">
       				<div class="card-body">
       					<p class="card-text text-center">PAYPAL</p>
       					<div class="d-flex justify-content-between align-items-center">
       						<div class="btn-group">
       							<a href="https://docs.google.com/forms/d/e/1FAIpQLSeWxYdjkrjO5PM4DsqBknGxj1WpzhXFB4daKhO6Fn4JlfVVrA/viewform?usp=sf_link" target="blank">
       								<button type="button" class="btn btn-sm btn-outline-secondary">BUKA</button></a>
       							</div>
       						</div>
       					</div>
       				</div>
       			</div>

       			<div class="col-md-4">
       				<div class="card mb-4 box-shadow">
       					<img class="card-img-top" src="../img/ovo.png" alt="Card image cap">
       					<div class="card-body">
       						<p class="card-text text-center">OVO</p>
       						<div class="d-flex justify-content-between align-items-center">
       							<div class="btn-group">
       								<a href="https://shopee.co.id/slemador" target="blank">
       									<button type="button" class="btn btn-sm btn-outline-secondary">BUKA</button></a>
       								</div>
       							</div>
       						</div>
       					</div>
       				</div>

       				<div class="col-md-4">
       					<div class="card mb-4 box-shadow">
       						<img class="card-img-top" src="../img/dana.png" alt="Card image cap">
       						<div class="card-body">
       							<p class="card-text text-center">DANA</p>
       							<div class="d-flex justify-content-between align-items-center">
       								<div class="btn-group">
       									<a href="https://www.tokopedia.com/tokoonyip" target="blank">
       										<button type="button" class="btn btn-sm btn-outline-secondary">BUKA</button></a>
       									</div>
       								</div>
       							</div>
       						</div>
       					</div>

<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+6285712729478", // WhatsApp number
            telegram: "@tn_incognito", // Telegram bot username
            sms: "+6285712729478", // Sms phone number
            facebook: "//www.facebook.com/integralstotre", // Facebook URL
            email: "onyipgtg@gmail.com", // Email
            call: "+6285712729478", // Call phone number
            call_to_action: "", // Call to action
            button_color: "#666666", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,telegram,sms,facebook,call,email", // Order of buttons
            ga: true, // Google Analytics enabled
            branding: false, // Show branding string
            mobile: true, // Mobile version enabled
            desktop: true, // Desktop version enabled
            greeting: true, // Greeting message enabled
            shift_vertical: 0, // Vertical position, px
            shift_horizontal: 0, // Horizontal position, px
            domain: "", // site domain
            key: "1QRo1ZQ7TrWm8hWd-AenTw", // pro-widget key
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
       				</body>
       				</html>