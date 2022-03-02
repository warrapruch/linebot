 <?php
  

function send_LINE($msg){
 $access_token = 'poy1ZHg9qPW5kiz/2KmL++zH0iLyS8QIL68cfBYSVnoYMhK1/5Fi9wpPgsVcAiFQmA4G8ztERismyrbxh+uNxmcD0jj/x0Blx0iah4ScWLEb6yl9iTE8C+LCp0JoaOnj1SnO7/rnKFK26PaP+SINdAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => 'U94c08ddc8b6b198480ebfd699145aee6',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
