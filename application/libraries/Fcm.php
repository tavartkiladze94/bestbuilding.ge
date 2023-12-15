 <?php
         
         class Fcm {
           function sendNotification($dataArr) {

           $fcmApiKey = "AAAA-bDjErY:APA91bE8FUQixvp0J-YqXR-_FruRNLiv-IBbqyiBSVoNy-KZmceguPfYWZ9auleUqXA6UxjH_CDgsyT0GNsa2Yi6USH_OpP8Jf_H4ekiMWmnP3GI0iwUCJAzuEuAaIUKA6z2qw6XU2EF" ; //App API Key

           $url = 'https://fcm.googleapis.com/fcm/send';//Google URL
           $registrationIds = $dataArr['token'];//Fcm Device ids array
           $message = $dataArr['message'];//Message which you want to send
           $title = $dataArr['title'];
           $type = $dataArr['type'];
    
          if(is_array($registrationIds)){
              
               $notificationdata = array('body' => $message,'title' => $title,'type' => $type);
               $fields = array('registration_ids' => $registrationIds ,'notification' => $notificationdata);

          }else{
            
               $fields = array('to' => $registrationIds ,'body' => $message,'title' => $title,'type' => $type);
         
          }

         $headers = array(
            'Authorization: key=' . $fcmApiKey,
            'Content-Type: application/json'
         );

        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, $url );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch);
    
    
          if ($result === FALSE) {
              die('Curl failed: ' . curl_error($ch));
           }
   
          curl_close($ch);  
          return $result;
        }
      }
?>