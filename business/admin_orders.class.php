<?php

/*
 * Класс AdminOrders
 */

class AdminOrders{
    
    public $mMessage;
    public $mMessage2;
    
    public function __construct() {
        
        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit-1']))
        {
          $result = self::AddOrderToEmail($_POST['firstname-1'], $_POST['typework-1'], $_POST['email-1'], $_POST['phone-1']);
           
          if($result){
                $this->mMessage = "<h1 class=\"request\">Дякуємо за заявку. Ми зв'яжемося з вами найближчим часом.</h1>";
            }
          
        }
        
        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit-2']))
        {
          $result = self::AddOrderToEmail($_POST['firstname-2'], $_POST['typework-2'], $_POST['email-2'], $_POST['phone-2']);
           
          if($result){
                $this->mMessage2 = "<h1 class=\"request\">Дякуємо за заявку. Ми зв'яжемося з вами найближчим часом.</h1>";
            }
          
        }
    }

    public function AddOrderToEmail($firstname, $typework, $email, $phone){
        
                
        // составляем письмо 
        $sender_name = $firstname;

        $sender_email = $email;

        $recipient_name =  "Лихошерст Степан";

        $recipient_email = "veterinarianturnkey@yandex.ru";

        $data_charset = 'UTF-8';

        $send_charset = 'windows-1251'; // KOI8-R
        
        

        $subject = 'Заявка на БЕЗКОШТОВНУ консультацію як знайти кваліфікованого Ветлікаря ПІД КЛЮЧ';
        
                    
        $message = '<p>'. $firstname . '</p>
        
                <p>'. $email . '</p>

            <p>'. $phone . '</p>
            
           --

           <p> P.s. Лист було створено автоматично, на нього не потрібно відповідати.</p>';

            // отправляем письмо

            $result = SendMail::SendMimeMail($sender_name, $sender_email, $recipient_name, $recipient_email, $data_charset, $send_charset, $subject, $message);
            
            if($result){
                return true;
            }
         
        }
}
?>
