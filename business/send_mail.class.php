<?php

/**
 * Класс SendMail состоит из:
 * SendMimeMail - отправляет письмо и возвращает результат работы;
 * MimeHeaderEncode - кодирует письма
 *
 * @author yats
 */
class SendMail {
    
     /*
     *  Метод SendMimeMail отправляет письмо и возвращает результат работы
     * 
     * @param <string> $sender_name - имя отправителя;
     * @param <string> $sender_email - email отправителя;
     * @param <string> $recipient_name - имя получателя;
     * @param <string> $recipient_email - email получателя;
     * @param <string> $data_charset - кодировка переданных данных;
     * @param <string> $send_charset  - кодировка письма;
     * @param <string> $subject - тема письма;
     * @param <string> $message - сообщение
     * 
     */
    public function SendMimeMail ($sender_name, $sender_email, $recipient_name, $recipient_email, $data_charset, $send_charset, $subject, $message){

        $to = self::MimeHeaderEncode($recipient_name, $data_charset, $send_charset) . ' <' .  $recipient_email   . '>';

        $subject = self::MimeHeaderEncode($subject, $data_charset, $send_charset);

        $from =  self::MimeHeaderEncode($sender_name, $data_charset, $send_charset) .' <' . $sender_email . '>';

        if($data_charset != $send_charset) 
        {
            $message = iconv($data_charset, $send_charset, $message);
        }

        $headers = "From: $from\r\n";

        $headers .= "Content-type: text/html; charset=$send_charset\r\n";

        return mail($to, $subject, $message, $headers);

    }
    
    /*
     * Метод MimeHeaderEncode кодирует письма
     * 
     * @param <string> $str - строка;
     * @param <string> $data_charset - кодировка переданных данных;
     * @param <string> $send_charset - кодировка письма;
     */ 
    public function MimeHeaderEncode($str, $data_charset, $send_charset) 
    {

      if($data_charset != $send_charset) 
      {
            $str = iconv($data_charset, $send_charset, $str);
      }

      return '=?' . $send_charset . '?B?' . base64_encode($str) . '?=';
    }
}

?>
