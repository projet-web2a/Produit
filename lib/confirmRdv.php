<?PHP
require "../../entities/rdv.php";
require "../../core/rdvC.php";
require_once '../../lib/phpmailer/PHPMailerAutoLoad.php';

if(empty($_GET["idR"]))
{
	echo "<script type='text/javascript'>";
echo "alert('something wrong!');";
echo "</script>";
exit;
}
else
{
$id=$_GET["idR"];
$ec= new RdvC();
$ec->confirmerRdv($id);
//$result=$ec->recupererEmail($id);

$db= mysqli_connect("localhost","root","","projet_web");
$sql = "SELECT c.email FROM client as c INNER JOIN rdv as r on c.username=r.username where r.id_rdv='$id' ";
$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);
$row_data = mysqli_fetch_array($result);
$to =$row_data['email'];
$subject = "RendezVous EyeZone";
$messageBody ="Your request RendezVous is confirmed by EyeZone .";
if( $count ==0){
        echo"Jointurek ghalta";
        return;
    }
	else 
	{
		$mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; // authentication enabled
        $mail->IsHTML(true); 
        $mail->SMTPSecure = 'ssl';//turn on to send html email
        // $mail->Host = "ssl://smtp.zoho.com";
        $mail->Host = "ssl://smtp.gmail.com"; 
        $mail->Port = 465;
        $mail->Username = "eyarabeh98@gmail.com";
        $mail->Password = "Zayn@malik98";
        $mail->SetFrom("eyarabeh98@gmail.com", "EyeZone");
        $mail->Subject = $subject;

        $mail->Body = $messageBody;
        $mail->AddAddress($to);
		
		if(!$mail->send()) {
           echo "Mailer Error: " . $mail->ErrorInfo;
       } 
       else {
           echo "Message has been sent successfully";
      }
	}


header('Location: displayRdv.php'); 
}

?>

