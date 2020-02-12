<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.2, maximum-scale=1, user-scalable=no"/>
    <title>Login Intranet - <?php echo COMPANY_NAME ?></title>
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/tj.ico')?>">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tj_login.css')?>" >
    <style type="text/css">

      .loginLogin {
            position: absolute;
            right: 0; 
            height: 100%;
            margin-right: 10%;
            -webkit-animation-duration: 1.7s;
            animation-duration: 1.7s;
            background: transparent;
            opacity: .95;
            border-radius: 20px; 
            border-left: none;
            padding: 15px 20px 20px 15px;
            border-color: #e7eaec;
            border-image: none;
            border-style: none;
            border-width: none;
            box-shadow: none;
      }
    </style>
  </head>

  <body class="white-bg login-bg">
    <!-- Loading page -->
    <div class="preloader">
      <div class="loading">
      <img src="assets/img/loading.gif" alt="please wait">
      </div>
    </div>

    <div class="white-shapes">
      <img class="white-shapes-img1" src="<?php echo base_url('assets/img/right-shapes.png')?>"/>
      <img class="white-shapes-img2" src="<?php echo base_url('assets/img/right-shapes-highres.png')?>" />
      <img class="white-shapes-img3" src="<?php echo base_url('assets/img/right-shapes-highres-high.png')?>" />
    </div>
    <div class="white-shapes-mobile">
    </div>

    <!-- wrapper  -->
    <div class="wrapper-custom">
      <div class="logo">
        <img class="left" src="<?php echo base_url('assets/img/jl-left.png')?>" />
        <img class="right" src="<?php echo base_url('assets/img/tj-right.png')?>" />
      <div class="wrapper">
        <div class="ibox-content wrapper loginLogin animated bounceInRight">
          <div class="row marginMobile">
            <div style="height: 100% absolute;">
              <div class="opening-iproc text-center" style="height: 25%">
                <h2 class="font-bold">eProc Intranet</h2>
                <p class="opening">
                  an Integrated & intelligent tool to assist SCM department in managing procurement, contract and vendor management function.
                </p>
              </div>
           
              <br/>
              <?php 
              $pesan = $this->session->userdata('message');
              $pesan = (empty($pesan)) ? "" : $pesan;
              if(!empty($pesan)){ ?>
              <div class="alert alert-info">
               <?php echo $pesan ?>
             </div>
             <?php } $this->session->unset_userdata('message'); ?>
              <form class="m-t text-center" role="form" id="login_form" data-toggle="validator" method="post" action="<?php echo site_url("log/in") ?>" onsubmit="">
                <div class="form-group">
                  <input type="text" class="form-control" name="username_login" placeholder="Username" required>
                </div>

                <div class="form-group">
                  <input type="password" class="form-control" name="password_login" placeholder="Password" required>
                </div>

                <button style="text-decoration:none;" type="submit" id="login-btn" class="btn btn-color block full-width m-b"> Login</button>
                
                <a id="forgot-btn">
                  <small>Lupa password</small>
                </a>
                
                <div class="footer-logo">
                    <a class="text-center" target="_blank" href="https://iproc.adw.co.id"><img src="<?php echo base_url('assets/img/iproc.png')?>"></a>
                  </div>
                </form>
                <div style="margin-top:15%; height: 25%;text-align: center"> 
                  <p class="helpdesk-eproc text-center">
                    <strong>Informasi eProc</strong>
                    <br/>
                    Email : <a class="email-helpdesk" href="mailto:pengadaan@transjakarta.co.id">pengadaan@transjakarta.co.id</a>
                  </p>

                </div>


              <form class="m-t text-center" role="form" id="forgot_form" method="post" style="display:none;" action="<?php echo site_url("log/forgot") ?>">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <button type="submit" class="btn btn-color block full-width m-b"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Submit</button>

                <a id="back-login-btn">
                  <small>Back to login</small>

                </a>
              </form>

            </div>      
          </div>
        </div>
      </div>

    </div>
  </div>
  
    
    <script  src="<?php echo base_url('assets/js/jquery-3.1.1.min.js')?>"></script>
    <script  src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $(".preloader").fadeOut();
    });
    </script>
    <script type="text/javascript">
      $(document).ready(function () {
        $("#forgot-btn").click(function(){
          $("#forgot_form").show();
          $("#login_form").hide();  
        });
    
        $("#back-login-btn").click(function(){
          $("#forgot_form").css("display","none");
          $("#login_form").css("display", "block");
        });
    
        function sesuaikan(){
          var width = parseInt($(window).width());
          console.log(width);
          if(width > 480){
            $( ".bounceInRight" ).removeClass("loginColumns");
            $(".bounceInRight").addClass("loginColumns-d");
          } else {
            $( ".bounceInRight" ).removeClass("loginColumns-d");
            $(".bounceInRight").addClass("loginColumns");
          }
        }
        sesuaikan();
        $(window).on('resize', function(){
          sesuaikan();
        });
      });
    </script>
  </body>
  </html>
