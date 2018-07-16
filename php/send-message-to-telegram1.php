<?php
if(!empty($_POST)){
     
    $token = "410311868:AAHdw-DAiMmYu60jMPORXhc_jTdaEHtbl_8";
    $chat = "-235290116";
    
     
    if (!empty($_POST['name']) && !empty($_POST['phone']) ){
     
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $mail = $_POST['mail'];
		$text = $_POST['text'];
		
        $txt = "Новая заявка: $order %0AИмя: $name %0AТелефон: $phone %0AПочта: $mail %0AСообщение: $text";    
 
        if (fopen("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat&text=$txt", "")) {
  
  echo '<p class="form-message1">Спасибо за отправку вашего сообщения!</p>';
     
        } else {
         
            $return =  'Ошибка отправки!';
        }

    }
}
?>