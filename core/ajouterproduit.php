 <?php
require '../entites/produit.php';
require 'produitC.php';
require_once '../lib/phpmailer/PHPMailerAutoLoad.php';
if ( isset($_POST['refe']) && isset($_POST['marque']) &&  isset($_POST['destinataire']) && isset($_POST['prix']) && isset($_POST['qte']) && isset($_POST['url']) && isset($_POST['names']) && isset($_POST['desciption']))
{
 	$ref=$_POST['refe'];
 	$mar=$_POST['marque'];
 	$dest=$_POST['destinataire'];
    $prix=$_POST['prix'];
	$qte =$_POST['qte'];
	$url= $_POST['url'];
	$nomCat= $_POST['names'];
	$desc=$_POST['desciption'];
	if ($ref=="" or  $mar=="" or $dest=="" or $prix==""or $qte=="" or $url=="" or $desc=="")
	{
		echo "<script type='text/javascript'>";
echo "alert('HAHAHA no no no Empty Fields PLS!');
window.location.href='../views/admin/produit_ajout.html';";
echo "</script>";
		
	}
	else if (ctype_alpha($mar)==true and is_numeric($_POST['prix'])==true and is_numeric($_POST['qte'])==true) 
	{
    $len = new produit($ref, $mar,$dest,$prix,$qte,$url,$nomCat,$desc );
    $lc= new produitC();
    $lc->ajouterproduit($len);
	$db= mysqli_connect("localhost","root","","optique");
    $sql="select email from client ";
    $result = mysqli_query($db,$sql);
    $count = mysqli_num_rows($result);
	if ($count !=0 )
	{ while ($row_data = mysqli_fetch_array($result))
        {
	     $to =$row_data['email'];
		$subject = "New Product EyeZone";
		$messageBody ="Hey Hey Hey we have a new Product in our shop check it out  EyeZone .";
		$mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; // authentication enabled
        $mail->IsHTML(true); 
        $mail->SMTPSecure = 'ssl';//turn on to send html email
        // $mail->Host = "ssl://smtp.zoho.com";
        $mail->Host = "ssl://smtp.gmail.com"; 
        $mail->Port = 465;
        $mail->Username = "montassar43@gmail.com";
        $mail->Password = "montassar007";
        $mail->SetFrom("montassar43@gmail.com", "EyeZone");
        $mail->Subject = $subject;

        $mail->Body = $messageBody;
        $mail->AddAddress($to);
		
		if(!$mail->send()) {
           echo "Mailer Error: " . $mail->ErrorInfo;
          } 
        }
		echo "<script type='text/javascript'>";
        echo "alert('Message has been send succefully');
      window.location.href='../views/admin/produit_ajout.php';";
        echo "</script>";
	}
	

	
	
	}
else {
		echo "<script type='text/javascript'>";
        echo "alert('Marque Should letters only , Prix and Quantite Should be Numbers');
      window.location.href='../views/admin/produit_ajout.php';";
        echo "</script>";
		} 
}
 ?>