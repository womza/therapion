<?php
  class Mailer
  {
      public static function SendMail($template, $to_address, $subject,$from_address="pncb@uh.cu")
      {
          require_once('PHPMailer_5.2.1/phpmailer.php');
            //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

          $mail = new PHPMailer();          
          /*$mail->Host = "mail.matcom.uh.cu";
          $mail->Port = 25;
          $mail->Username='josecarlos@matcom.uh.cu';
          $mail->Password='*J0s3c4rl0s'; */
          $mail->Host = "localhost"; 
          $mail->Port=25;         
          $mail->SetFrom($from_address);
          $mail->CharSet = "UTF-8";
          $mail->Subject= $subject; 
          $mail->MsgHTML($template);
          $mail->AddAddress($to_address);   
          
          $mail->Send();            
      }
      /*public static function SendMultipleMail($template, $to_address, $subject,$attachment_file=FALSE)
      {
          require_once('PHPMailer_5.2.1/phpmailer.php');
            //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded              
         
            
         $mail = new PHPMailer();          
          $mail->Host = "localhost";
          $mail->Port=25;
          $mail->IsSMTP();
          $mail->SetFrom('suscripciones@feriasymercados.net', 'Ferias, Mercados y Mataderos');
          $mail->CharSet = "UTF-8";
          $mail->Subject= $subject; 
          $mail->MsgHTML($template);
             
                      
          $mail->SingleTo=True;
          foreach($to_address as $to)
          {
              $mail->AddAddress($to);              
          }            
          if($attachment_file!=FALSE)
          {
              $mail->AddAttachment($attachment_file);
          }
          if(!$mail->Send()) {
            return "Mailer Error (" . str_replace("@", "&#64;", $row["email"]) . ') ' . $mail->ErrorInfo . '<br />'; 
          }
          return "Ok";           
      }         */
  }
?>