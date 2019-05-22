 <?php
  

function send_LINE($msg){
 $access_token = 'AFgp1v3btl25qKoYTP3fmJYQHv4eA0lx1UshF4CHNySwa+PvHhSxsmE7xZdz/PXXiS6uxnqaK0R8Mbigje//RXoZv1W++POq2WTNQPKORo15qffE+6t2l9O5q0ZVSvfNCvRiDiLRWhYQ+4lkDrJOigdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U71539254ae90a1b74e4a5b65b07ddc87',
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
