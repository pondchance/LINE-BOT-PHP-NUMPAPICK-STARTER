 <?php
  

function send_LINE($msg){
 $access_token = 'GnW1kmsBsYdaqox/iKYdrVXXLs9zGNmsUbJitzc0ruqavQL11OleTuem4jj4ijGIgHB4Q/l0uXZmznTlHXhJYAYany3JsunN6VlvJniaPHCpO1Mdj4dTfY8S1saYOAo47BF4XQHnMPUw0zjeOoskFgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U99a1ae7b36379e2158ed6c95082784a9',
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
