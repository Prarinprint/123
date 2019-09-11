 <?php
  

function send_LINE($msg){
 $access_token = epSnkLT7f2SnLiyE6P6/IPF1XAG0l6FL8YxErv3lHDnWMGdD4J6DBLrl4jpo7ApYu2Yw0otqGTHfBMffbYaOq0OFjVK7VFXuSxmuqs26sbziJx7Wi3K2WOkHn+vQJHnDqGflFlwp2jtKosnHOXIjxAdB04t89/1O/w1cDnyilFU=

'; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ufddc7174217e6e153152f312ba757c70',
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
