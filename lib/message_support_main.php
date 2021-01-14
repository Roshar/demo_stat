<?php
return[
    'support_main' => "Письмо с сайта statipkro.ru (Сбор статистических данных для Института развития образования ЧР)
<br> адресат: {$this->data['firstname']} {$this->data['lastname']}! <br/> адрес Email: {$this->data['email']} <br/>
        <br/> Содержание текста: <br> {$this->data['message']}"
];

