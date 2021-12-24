<!doctype html>
<html lang="en">
  <head>
    <title>Camille</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/style.css">

    </head>
    <body >
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap py-5">

                <div class="img d-flex align-items-center justify-content-center" style="background-image: url(https://live.staticflickr.com/65535/51720610482_da147bebe1_w.jpg" width="200" height="200" alt="cropped-lgo-background);"></div>
                  <h3 class="text-center mb-0">Welcome</h3>
                <p class="text-center" style="color: pink;">Cantik alami berseri</p>
                
                        <?= $this->session->flashdata('pesan'); ?>
                        <form class="user" method="post" action="<?= site_url('Autentifikasi'); ?>">
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" value="<?=set_value('email'); ?>" id="email" placeholder="Masukkan Alamat Email" name="email">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                <div class="form-group">
                    <div class="form-group">
                          <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                          <?= form_error('password','<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                <div class="form-group d-md-flex">
                                <div class="w-100 text-md-right">
                                    <a href="<?=site_url('autentifikasi/lupaPassword'); ?>" >Forgot Password</a>
                                </div>
                </div>
                <div class="form-group">

                    <button type="submit" class="btn btn-primary btn-user btn-block" ><a class="medium" >Log in</button></a>
                </div>
              </form>
              <div class="w-100 text-center mt-4 text">
                <p class="mb-0" >Don't have an account?</p>
                  <a href="<?=site_url('autentifikasi/registrasi'); ?>">Sign Up</a>
              </div>
            </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

    </body>
</html>

