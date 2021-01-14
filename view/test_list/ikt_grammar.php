
<style>

    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400&display=swap');

    *{
        margin: 0;
        padding: 0;
        font-family: 'Roboto', sans-serif;
        font-weight: 300;
        color: #2b2b2b;
    }

    html {
        scroll-behavior: smooth;
    }

    ul li {
        list-style-type: none;
    }
    a {
        text-decoration: none
    }
    .wrapper-head {
        width: 100%;
    }

    .content {
        max-width: 1240px;
        margin:0 auto;


    }
    table{
        width: 100%;
    }
    .tg td,
    td.tg-xnqf{
        color: #2b2b2b;
    }
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:#757575;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
        overflow:hidden;padding:12px 5px;word-break:normal;}
    .tg th{border-color:#757575;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
        font-weight:normal;overflow:hidden;padding:12px 5px;word-break:normal;}
    .tg .tg-ivwd{background-color:#eff4f8;border-color:inherit;font-family:Verdana, Geneva, sans-serif !important;;font-weight:bold;
        text-align:center;vertical-align:top}
    .tg .tg-ugz6{background-color:#1b529e;border-color:#ffffff;color:#ffffff;font-family:Verdana, Geneva, sans-serif !important;;
        font-weight:bold;text-align:center;vertical-align:top}
    .tg .tg-5icg{background-color:#1b529e;border-color:#ffffff;color:#ffffff;font-family:Verdana, Geneva, sans-serif !important;;
        font-weight:bold;text-align:left;vertical-align:middle}
    .tg .tg-9jwy{background-color:#1b529e;border-color:#ffffff;color:#ffffff;font-family:Verdana, Geneva, sans-serif !important;;
        font-weight:bold;text-align:center;vertical-align:middle}
    .tg .tg-zkzj{background-color:#1b529e;border-color:#ffffff;color:#ffffff;font-family:Verdana, Geneva, sans-serif !important;;
        text-align:center;vertical-align:top}
    .tg .tg-xnqf{background-color:#eff4f8;border-color:inherit;font-family:Verdana, Geneva, sans-serif !important;;font-weight:bold;
        text-align:center;vertical-align:bottom}
    .tg .tg-r0kq{border-color:inherit;font-family:Verdana, Geneva, sans-serif !important;;text-align:left;vertical-align:top}
    .tg .tg-gfa8{border-color:inherit;font-family:Verdana, Geneva, sans-serif !important;;text-align:left;vertical-align:bottom}
    .tg .tg-7clu{background-color:#fc9292;border-color:inherit;color:#ffffff;font-family:Verdana, Geneva, sans-serif !important;;
        font-size:18px;text-align:center;vertical-align:top}
    .person-card{
        width:100%;
        margin:40px 0;
        padding-bottom: 20px;
        border-bottom:1px solid #ffd70d;

    }
    .person-card ul li{
        color: #2b2b2b;
    }

    .container-btn {
        height: 200px;
        position: relative;
    }

    .center {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    .sl{
        border: none;
        padding: 10px 4px;
        box-sizing: border-box;
    }

    .center>input[type=submit]{
        padding:25px 120px;
        font-size: 1.5em;
        background-color: #ffd70d;
        border: none;
        color:#1b529e;
        border-radius: 2px;
    }

    .error-sel{
        border:1px solid tomato;
        box-sizing: border-box;
    }
    .error-msg{
        display: none;
        color: tomato;
        font-size: 1.2em;
        margin-top: 20px;
        text-align: right;
    }


</style>
<script>
    $(function () {



        function validateError() {
            const errors = [];

            for(let i = 1; i<20; i++){
                if($(`#${i}`).val() == 0){
                    errors.push(i);
                }
            }

            return errors;

        }

        let elements = document.querySelectorAll('.sl');
        elements.forEach((item) => { item.addEventListener('change', (item)=>{
            if(item.target.value == 0){

                $(item.target).css("border","solid 1px tomato")
            }else {

                $(item.target).css("border","solid 1px white")

            }
        }) })



        $('#btn-send').click((e)=>{
            let some = validateError();
            if(some.length > 0){
                $('.error-msg').css('display','block');
                e.preventDefault();
                for(let o = 0; o<some.length+1; o++){
                    $(`#${some[o]}`).css("border","solid 1px tomato")
                }
            }
        })

    })

</script>

<?php $error =[]?>
<?php if(isset($errors)):?>
    <?php foreach ($errors as $k => $error) {
        $error[$k]=$k;
    }?>
    <div class="wrapper-head">
        <div class="content">
            <?php if(!empty($error)){
                echo "<h3 style='color: tomato; text-align: center; padding-top: 20px'>Заполните все поля!</h3>";
            }?>
        </div>

    </div>
<?php endif;?>

<div class="wrapper-head">
    <div class="content">
            <div class="person-card">
                <ul class="person-card__list">
                    <li> Имя: <?=$firstname ?? ''?> </li>
                    <li> Фамилия: <?=$lastname ?? ''?></li>
                    <li> Должность: <?=$position_name[0]['title_position'] ?? ''?></li>
                    <li> Номер телефона: <?=$phone ?? ''?></li>
                    <li> Город/район: <?=$school_name[0]['title_area'] ?? ''?></li>
                    <li> Образовательная организация:<?=$school_name[0]['school_name'] ?? ''?></li>
                </ul>
            </div>

    </div>
</div>

<div class="wrapper-head">
    <div class="content">
        <table class="tg">
            <form method="post">
                <thead>
                <tr>
                    <th class="tg-5icg" rowspan="2">№</th>
                    <th class="tg-9jwy" rowspan="2">Параметры </th>
                    <th class="tg-ugz6" colspan="4" rowspan="2">Варианты ответов<br>(отметьте свой ответ)</th>
                </tr>
                <tr>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td class="tg-r0kq">1</td>
                    <td class="tg-gfa8">Основные правила работы с персональным компьютером <br>(подключение к сети электропитания, последовательное включение/выключение компьютера и внешних устройств)</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="1" id="1" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">2</td>
                    <td class="tg-gfa8">Приёмы работы с внешними накопителями (дисковод, CD-ROM, DVD, USB-флэш-накопитель, внешние SSD накопители и др.)</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="2" id="2" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">3</td>
                    <td class="tg-gfa8">Приёмы работы с приложениями Microsoft Office (Создать, Открыть, Сохранить, Сохранить как)</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="3" id="3" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">4</td>
                    <td class="tg-gfa8">Понятие буфера обмена на уровне файлов (операции - Копировать, Вырезать и Вставить)</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="4" id="4" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">5</td>
                    <td class="tg-gfa8">Создание и редактирование текстовых документов (в программе типа Microsoft Office Word)</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="5" id="5" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">6</td>
                    <td class="tg-gfa8">Вывод на печать текстовых документов</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="6" id="6" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">7</td>
                    <td class="tg-gfa8">Создание и редактирование презентаций (работа в программе типа Microsoft Office PowerPoint)</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="7" id="7" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">8</td>
                    <td class="tg-gfa8">Представление о целях и задачах создания мультимедийной презентации</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="8" id="8" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">9</td>
                    <td class="tg-gfa8">Интерфейс, основные меню и панели инструментов Microsoft Office PowerPoint </td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="9" id="9" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">10</td>
                    <td class="tg-gfa8">Создание электронных таблиц (работа в программе типа Microsoft Office Excel)</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="10" id="10" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">11</td>
                    <td class="tg-gfa8">Основные представления о сети Интернет</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="11" id="11" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">12</td>
                    <td class="tg-gfa8">Переходы по гиперссылкам и сохранение фрагментов текста, рисунков, страниц целиком</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="12" id="12" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">13</td>
                    <td class="tg-r0kq">Понятие электронной почты и почтового адреса. Отсылка писем. Приём корреспонденции. Прикрепление и получение файлов</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="13" id="13" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">14</td>
                    <td class="tg-gfa8">Основы поиска информации в  сети Интернет</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="14" id="14" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">15</td>
                    <td class="tg-r0kq">Понятие портал, сайт, визитка</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="15" id="15" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">16</td>
                    <td class="tg-gfa8">Понятие электронный образовательный ресурс</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="16" id="16" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">17</td>
                    <td class="tg-gfa8">Понятие цифровой образовательный ресурс</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="17" id="17" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">18</td>
                    <td class="tg-gfa8">Средство коммуникации для проведения  учебных занятий</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="18" id="18" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">19</td>
                    <td class="tg-gfa8">Инструменты для создания учебных материалов на уроке</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="19" id="19" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Знаю, могу показать и научить </option>
                            <option value="3">Сяду за компьютер - вспомню</option>
                            <option value="2">Представляю в общих чертах</option>
                            <option value="1">Ничего не могу сказать</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">20</td>
                    <td class="tg-gfa8" colspan="5">Какие цифровые образовательные ресурсы применяете в своей педагогической деятельности

                        <br>
                        <input type="checkbox" name="data20[]" value="Решу ЕГЭ">
                        <label >Решу ЕГЭ </label><br>
                        <input type="checkbox"  name="data20[]" value="Учи.ру">
                        <label >Учи.ру </label><br>
                        <input type="checkbox"  name="data20[]" value="Решу ОГЭ, Просвещение ">
                        <label for="other">Решу ОГЭ, Просвещение </label><br>
                        <input type="checkbox"  name="data20[]" value="Российская электронная школа">
                        <label for="other">Российская электронная школа </label><br>
                        <input type="checkbox"  name="data20[]" value="ЯКласс">
                        <label for="other">ЯКласс </label><br>
                        <input type="checkbox"  name="data20[]" value="Портал «Цифровое образование»">
                        <label for="other">Портал «Цифровое образование»</label><br>
                        <input type="checkbox"  name="data20[]" value="Яндекс.учебник">
                        <label for="other">Яндекс.учебник</label><br>
                        <input type="checkbox"  name="data20[]" value="LECTA">
                        <label for="other">LECTA </label><br>
                        <input type="checkbox"  name="data20[]" value="Физикон">
                        <label for="other">Физикон </label><br>
                        <input type="checkbox"  name="data20[]" value="Мобильное электронное образование">
                        <label for="other">Мобильное электронное образование</label><br>
                        <input type="checkbox"  name="data20[]" value="Онлайн школа ">
                        <label for="other">Онлайн школа </label><br>
                        <input type="checkbox"  name="data20[]" value="Единая коллекция цифровых образовательных ресурсов ">
                        <label for="other">Единая коллекция цифровых образовательных ресурсов </label><br>
                        <input type="checkbox"  name="data20[]" value="Другое">
                        <label for="other">Другое</label><br>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">21</td>
                    <td class="tg-gfa8" colspan="5">Какие электронные образовательные ресурсы применяете для поддержки процесса преподавания
                        <br>
                        <input type="checkbox" name="data21[]" value="Единый урок">
                        <label >Единый урок  (единыйурок.рф), </label><br>

                        <input type="checkbox"  name="data21[]" value="Мультиурок ">
                        <label >Мультиурок (https://multiurok.ru) </label><br>

                        <input type="checkbox"  name="data21[]" value="Инфоурок ">
                        <label for="other">Инфоурок (https://infourok.ru/) </label><br>

                        <input type="checkbox"  name="data21[]" value="Сервисы для создания интерактивных заданий (https://learningapps.org/, https://www.menti.com/), ">
                        <label for="other">Сервисы для создания интерактивных заданий (https://learningapps.org/, https://www.menti.com/),  </label><br>

                        <input type="checkbox"  name="data21[]" value="Среда для педагогов (https://pedsovet.org);">
                        <label for="other">Среда для педагогов (https://pedsovet.org) </label><br>

                        <input type="checkbox"  name="data21[]" value="Школьный портал (https://proshkolu.ru/)">
                        <label for="other"> Школьный портал (https://proshkolu.ru/)</label><br>

                        <input type="checkbox"  name="data21[]" value="Социальная сеть работников образования (nsportal.ru)">
                        <label for="other">Социальная сеть работников образования (nsportal.ru)</label><br>

                        <input type="checkbox"  name="data21[]" value="Сайт федерального института педагогических измерений (http://fipi.ru/).">
                        <label for="other">Сайт федерального института педагогических измерений (http://fipi.ru/)</label><br>

                        <input type="checkbox"  name="data21[]" value="Другое">
                        <label for="other">Другое</label><br>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">22</td>
                    <td class="tg-gfa8" colspan="5">Какие средства коммуникации применяете для проведения уроков при необходимости
                        <br>
                        <input type="checkbox" name="data22[]" value="Zoom">
                        <label >Zoom </label><br>

                        <input type="checkbox"  name="data22[]" value="Skype ">
                        <label > Skype </label><br>

                        <input type="checkbox"  name="data22[]" value="Webinar">
                        <label for="other">Webinar </label><br>

                        <input type="checkbox"  name="data22[]" value="Bandicam">
                        <label for="other">Bandicam </label><br>

                        <input type="checkbox"  name="data22[]" value="Discord ">
                        <label for="other">Discord </label><br>

                        <input type="checkbox"  name="data22[]" value="Другое">
                        <label for="other"> Другое</label><br>

                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">23</td>
                    <td class="tg-gfa8" colspan="5">Какие  используете инструменты  создания  учебных материалов на уроке
                        <br>
                        <input type="checkbox" name="data23[]" value="Google Таблицы">
                        <label >Google Таблицы </label><br>

                        <input type="checkbox"  name="data23[]" value="Google Документы ">
                        <label > Google Документы </label><br>

                        <input type="checkbox"  name="data23[]" value="Google Презентация">
                        <label for="other">Google Презентация </label><br>

                        <input type="checkbox"  name="data23[]" value=" Google Формы">
                        <label for="other"> Google Формы </label><br>

                        <input type="checkbox"  name="data23[]" value="Другое">
                        <label for="other"> Другое</label><br>

                    </td>
                </tr>
                <tr>

                    <td class="tg-r0kq">24</td>
                    <td class="tg-gfa8" colspan="5">Какие  используете инструменты  создания  учебных материалов на уроке
                        <br>
                        <input type="checkbox" name="data24[]" value="Google сервисы">
                        <label >Google сервисы </label><br>

                        <input type="checkbox"  name="data24[]" value="Yandex сервисы">
                        <label > Yandex сервисы</label><br>

                        <input type="checkbox"  name="data24[]" value="Mail.ru сервисы">
                        <label for="other">Mail.ru сервисы </label><br>

                        <input type="checkbox"  name="data24[]" value="Другое">
                        <label for="other"> Другое</label><br>

                    </td>
                </tr>

                <tr>

                    <td class="tg-r0kq">25</td>
                    <td class="tg-gfa8" colspan="5">Какие бесплатные системы дистанционного обучения используете при необходимости организации электронного обучения
                        <br>
                        <input type="checkbox" name="data25[]" value="СДО  Moodle">
                        <label >СДО  Moodle </label><br>

                        <input type="checkbox"  name="data25[]" value="СДО   ATutor">
                        <label > СДО   ATutor</label><br>

                        <input type="checkbox"  name="data25[]" value="СДО  Ё-СТАДИ – Электронная образовательная cреда">
                        <label for="other">СДО  Ё-СТАДИ – Электронная образовательная cреда </label><br>

                        <input type="checkbox"  name="data25[]" value="СДО  Eliademy">
                        <label for="other">СДО  Eliademy </label><br>

                        <input type="checkbox"  name="data25[]" value="СДО  Forma LMS">
                        <label for="other">СДО  Forma LMS </label><br>

                        <input type="checkbox"  name="data25[]" value="СДО  Dokeos">
                        <label for="other">СДО  Dokeos</label><br>

                        <input type="checkbox"  name="data25[]" value="СДО  ILIAS">
                        <label for="other">СДО  ILIAS</label><br>

                        <input type="checkbox"  name="data25[]" value="СДО  Opigno">
                        <label for="other">СДО  Opigno</label><br>

                        <input type="checkbox"  name="data25[]" value="ССДО  OLAT">
                        <label for="other">СДО  OLAT </label><br>

                        <input type="checkbox"  name="data25[]" value="СДО  iSpring Learn">
                        <label for="other">СДО  iSpring Learn </label><br>

                        <input type="checkbox"  name="data25[]" value="Другое">
                        <label for="other"> Другое</label><br>

                    </td>
                </tr>

                </tbody>
        </table>
    </div>
</div>
<div class="container-btn">
    <div class="content">
        <div class="error-msg">Вы не ответили на все вопросы.</div>
    </div>
    <div class="center">
        <input id="btn-send" type="submit" value="ЗАВЕРШИТЬ">
    </div>
        <input type="hidden" name="firstname" value="<?=$firstname ?? ''?>">
        <input type="hidden" name="lastname" value="<?=$lastname ?? ''?>">
        <input type="hidden" name="email" value="<?=$email ?? ''?>">
        <input type="hidden" name="phone" value="<?=$phone ?? ''?>">
        <input type="hidden" name="area_id" value="<?=$area_id ?? ''?>">
        <input type="hidden" name="school_id" value="<?=$school_id ?? ''?>">
        <input type="hidden" name="position_id" value="<?=$position_id ?? ''?>">
        <input type="hidden" name="experience_id" value="<?=$experience_id ?? ''?>">
    </form>
</div>



