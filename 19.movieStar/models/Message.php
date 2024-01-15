<?php
    class Message {
        public function getMessage() {
            if(isset($_SESSION['message'])){
                return [
                    "msg" => $_SESSION['message'],
                    "type" => $_SESSION['message_type']
                ];
            } else {
                return false;
            }
        }
        public function setMessage($message, $type, $redirect) {
            $_SESSION['message'] = $message;
            $_SESSION['message_type'] = $type;

            if($redirect == "back"){
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            } else {
                header("Location: " . $redirect);
            }
        }

        public function clearMessage(){
            $_SESSION['message'] = "";
            $_SESSION['message_type'] = "";
        }
    }
?>