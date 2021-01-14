<?php
return[
    'certificate' => "Письмо с сайта statipkro.ru (Сбор статистических данных для Института развития образования ЧР)<br>
                                    Здравствуйте, {$this->data['firstname']} {$this->data['lastname']}! <br/>
                                    <h2> Результаты диагностики </h2> <br>
                                    Выполнено:{$this->data['percent']}% ({$this->data['recommendation']} ;)<br>",
];
