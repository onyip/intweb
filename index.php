<!DOCTYPE html>
<html>
<head>
  <title>INTEGRAL STORE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
      <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
      <script src="bootstrap/popper.min.js"></script>
      <script src="bootstrap/bootstrap.min.js"></script>

      
    </head>
    <body>
      <?php 
      session_start();

  // cek apakah yang mengakses halaman ini sudah login
      if(!$_SESSION['mail']==""){
        header("location:index.php?pesan=gagal");
      }

      ?>
      <header>

        <div class="navbar">
          <div class="col-md-8 col-sm-8 col-4"></div>
          <div class="col-md-2 col-sm-4 col-6">
            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#mylogin">Login</button></a>
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#mydaftar">Daftar</button></a>
          </div>
        </div>

        <div class="text-center">
          <h1><b>PORTAL INFORMASI</b></h1>
          <br><h1>INTEGRAL STORE</h1>
          <br><p>Dibawah Ini Merupakan Platfrom Resmi Dari INTEGRAL STORE
            <br>Silahkan Gunakan Sesuai Kebutuhan</p>
          </div>

        </header>

        <div class="container post">
          <div class="row">

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/form.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text text-center">Form Pembelian</p>
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
                  <img class="card-img-top" src="img/shopee.png" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-center">Shopee</p>
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
                    <img class="card-img-top" src="img/toped.png" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text text-center">Tokopedia</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="https://www.tokopedia.com/tokoonyip" target="blank">
                            <button type="button" class="btn btn-sm btn-outline-secondary">BUKA</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top" src="img/bl.png" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text text-center">Bukalapak</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <a href="https://www.bukalapak.com/u/onyipgedang" target="blank">
                              <button type="button" class="btn btn-sm btn-outline-secondary">BUKA</button></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/insta.png" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text text-center">Instagram</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <a href="https://www.instagram.com/integral_store.id/" target="blank"> 
                                <button type="button" class="btn btn-sm btn-outline-secondary">BUKA</button></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal daftar -->
                    <div id="mydaftar" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Mendaftar</h4>
                          </div>
                          <div class="modal-body">
                            <form action="akses/signup.php" method="post">
                             <div class="form-group">
                              <label for="exampleInputEmail1">Fullname</label>
                              <input type="text" class="form-control" id="Fullname" placeholder="Fullname" name="nama">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="user@domain.com" name="mail">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pwd">
                            </div>
                            
                          </div>
                          <div class="modal-footer">
                           <button type="submit" class="btn btn-primary">Submit</button>
                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                         </div>
                       </form>
                     </div>
                   </div>
                 </div>
                 <!-- end modal daftar -->

                 <!-- Modal login -->
                 <div id="mylogin" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Login</h4>
                      </div>
                      <div class="modal-body">
                        <form action="akses/login.php" method="post">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" id="username" placeholder="user@domain.com" name="mail">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pwd">
                          </div>
                          <div class="modal-footer">
                           <button type="submit" class="btn btn-success">Login</button>
                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                         </div>
                       </form>
                     </div>
                     
                   </div>
                 </div>
               </div>
               <!-- End Modal Login -->
               <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
                <div class="clear-top text-center">
                  <small>Copyright &copy; OG_dang | Integral Store</small>
                </div>
                
              </footer>
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
      <!-- /WhatsHelp.io widget -->
    </body>
    </html>