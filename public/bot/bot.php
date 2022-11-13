<?php
class TeleBot{
    private $token="5767365958:AAFWoe-oCUzW6m0kQYlZVg25PasfdSkpVbM";
    const API_URL="https://api.telegram.org/bot5767365958:AAFWoe-oCUzW6m0kQYlZVg25PasfdSkpVbM/";
    public function setwebhook ($url){
    return $this->request('setwebhook',[
         'url' => $url
    ]);
    }
    public function request($method, $data){
        $ch=curl_init();
        $url=self::API_URL.$method;
        
        curl_setopt($ch, CURLOPT_URL,$url);
         curl_setopt($ch, CURLOPT_HEADER, false);
         curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        $data=json_encode($data);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        return $result;
    }
    public function sendMessage($chat_id, $text){
        return $this->request("sendMessage",[
            "chat_id" => $chat_id,
            "text" => $text
        ]);
    }
    public function getmessage(){
        $update=json_decode(file_get_contents("php://input"));
        return $update->message;
    }
    
}
$bot = new TeleBot();
$bot->sendMessage("530728514",$bot->getmessage()->text);