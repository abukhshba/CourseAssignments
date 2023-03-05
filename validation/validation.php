<?php

class validation{
    private $data;
    private $errors = [];
    private static $fields = ['name' , 'email'];
    public function __construct($postData){
        $this->data = $postData;
    }

    public function validateForm(){
        foreach(self::$fields as $field){
            if(!array_key_exists($field , $this->data)){
                trigger_error("$field is not present in data");
                return;

            }
        }
        $this->validateName();
        $this->validateEmail();
        return $this->errors; 

    }
    private function validateName(){
        $val = trim($this->data['name']);
        if (empty($val)) {
        $this->showErrors('name' , 'name cannot be empty');
        }else{
             if(!preg_match('/^[a-zA-Z0-9 ]{2,20}$/',$val)){
                $this->showErrors('name' , 'name must be a 2 - 20 chars');
             }
        }



    }
    private function validateEmail(){
        $val = trim($this->data['email']);
        if (empty($val)) {
            $this->showErrors('email' , 'email cannot be empty');
            }else{
                 if(!filter_var($val , FILTER_VALIDATE_EMAIL)){
                    $this->showErrors('email' , 'email must be a valid email');
                 }
            }

    }
    private function showErrors($key, $val){
$this->errors[$key] = $val;
    }
    



}

    

?>