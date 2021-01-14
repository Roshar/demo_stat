
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
    .wrapper-head,
    .pre-wrapper-form,
    .btn-area{
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

            for(let i = 1; i<37; i++){
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

<?php $er =[]?>
<?php if(isset($errors)):?>
    <?php foreach ($errors as $k => $error) {
        $er[$k]=$k;
    }?>
    <div class="wrapper-head">
        <div class="content">
            <?php if(!empty($er)){
                echo "<h3 style='color: tomato; text-align: center; padding-top: 20px'>Заполните все поля!</h3>";
            }?>
        </div>

    </div>
<?php endif;?>


<div class="wrapper-head">
    <div class="content">
        <?php if(empty($er)):?>
            <div class="person-card">
                <ul class="person-card__list">
                    <li> Имя: <?=$firstname?> </li>
                    <li> Фамилия: <?=$lastname?></li>
                    <li> Должность: <?=$position_name[0]['title_position']?></li>
                    <li> Номер телефона: <?=$phone?></li>
                    <li> Город/район: <?=$school_name[0]['title_area']?></li>
                    <li> Образовательная организация: <?=$school_name[0]['school_name']?></li>
                </ul>
            </div>

        <?php endif;?>
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
                    <td class="tg-xnqf" colspan="6">ПЛАНИРОВАНИЕ ОБРАЗОВАТЕЛЬНОЙ ДЕЯТЕЛЬНОСТИ   ОБУЧАЮЩИХСЯ</td>
                </tr>
                <tr>
                    <td class="tg-r0kq">1</td>
                    <td class="tg-gfa8">Составляю&nbsp;&nbsp;&nbsp;рабочую программу в соответствии с требованиями ФГОС</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="1" id="1" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">2</td>
                    <td class="tg-gfa8">Разрабатываю&nbsp;&nbsp;&nbsp;план-конспект урочного занятия, в том числе метапредметного в соответсвии с&nbsp;&nbsp;&nbsp;требованиями ФГОС</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="2" id="2" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">3</td>
                    <td class="tg-gfa8">Составляю&nbsp;&nbsp;&nbsp;план воспитательной работы класса с учетом Программы воспитания и&nbsp;&nbsp;&nbsp;социализации</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="3" id="3" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">4</td>
                    <td class="tg-gfa8">Разрабатываю&nbsp;&nbsp;&nbsp;план конспект внеурочного занятия в соответствии с требованиями ФГОС</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="4" id="4" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">5</td>
                    <td class="tg-gfa8">Планирую&nbsp;&nbsp;&nbsp;и реализую самообразование на основе самоанализа профессиональных проблем</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="5" id="5" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">6</td>
                    <td class="tg-gfa8">Учитываю   при подготовке к занятиям результаты независимой оценки качества образования.   <br>Использую задания для учеников из ВПР, НИКО, международных сравнительных   исследований <br>качества образования, региональных или муниципальных контрольных   работ за два предшествующих года</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="6" id="6" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">7</td>
                    <td class="tg-gfa8">Учитываю&nbsp;&nbsp;&nbsp;при подготовке к занятиям результаты ГИА. Использую задания из банка на&nbsp;&nbsp;&nbsp;fipi.ru</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="7" id="7" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">8</td>
                    <td class="tg-gfa8">Учитываю&nbsp;&nbsp;&nbsp;при подготовке к занятиям результаты ВСОКО. Использую задания Олимпиадного&nbsp;&nbsp;&nbsp;цикла для учеников</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="8" id="8" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">9</td>
                    <td class="tg-gfa8">Планирую&nbsp;&nbsp;&nbsp;урок для учащихся с разным уровнем учебной мотивации. </td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="9" id="9" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">10</td>
                    <td class="tg-gfa8">Составляю&nbsp;&nbsp;&nbsp;задания для уровня "Выпускник получит возможность научиться"</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="10" id="10" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">11</td>
                    <td class="tg-gfa8">Использую   социокультурные возможности населенного пункта (города, региона), чтобы   <br>совершенствовать развитие обучающихся</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="11" id="11" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-xnqf" colspan="6">РАЗВИТИЕ ПРОФЕССИОНАЛЬНОЙ ДЕЯТЕЛЬНОСТИ</td>
                </tr>
                <tr>
                    <td class="tg-r0kq">12</td>
                    <td class="tg-gfa8">Использую   разнообразные формы уроков (с опорой на фантазию (урок-сказка), уроки, в   основе которых <br>лежат соревнование и игра (урок-викторина, бой, турнир,   эстафета), постановки или решения <br>учебной задачи, моделирования и   преобразования модели и др.)</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="12" id="12" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">13</td>
                    <td class="tg-r0kq">Использую   разные формы подбора учебного содержания (доступность в сочетании с   научностью, интрига, <br>опора на жизненный опыт, метапредметная направленность,   принцип гештальта и пр.)</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="13" id="13" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">14</td>
                    <td class="tg-gfa8">Разрабатываю&nbsp;&nbsp;&nbsp;метапредметные уроки с опорой на классификацию УУД</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="14" id="14" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">15</td>
                    <td class="tg-r0kq">Внедряю   различные приемы организации деятельности учеников на уроке (коллективные,  <br> групповые методы, активные, исследовательские для выработки новых знаний и   др.)</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="15" id="15" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">16</td>
                    <td class="tg-gfa8">Использую   приемы, которые помогают заинтересовать на уроке школьников с высокой   <br>мотивацией к обучению ("Фантастическая добавка", "Отсроченная   загадка", "Ассоциация <br>на доске", "Скульптура",   "Картинная галерея и др.)</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="16" id="16" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">17</td>
                    <td class="tg-gfa8">Владею&nbsp;&nbsp;&nbsp;проектной деятельностью </td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="17" id="17" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">18</td>
                    <td class="tg-gfa8">Владею&nbsp;&nbsp;&nbsp;исследовательской деятельностью</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="18" id="18" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">19</td>
                    <td class="tg-gfa8">Умею&nbsp;&nbsp;&nbsp;организовывать практические, исследовательские работы</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="19" id="19" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">20</td>
                    <td class="tg-gfa8">Владею&nbsp;&nbsp;&nbsp;методами организации рефлексии на уроке</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="20" id="20" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">21</td>
                    <td class="tg-gfa8">Составляю&nbsp;&nbsp;&nbsp;самоанализ урока</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="21" id="21" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">22</td>
                    <td class="tg-gfa8">Соблюдаю&nbsp;&nbsp;&nbsp;нормы СанПиН на уроках</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="22" id="22" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-ivwd" colspan="6"> КОНТРОЛЬ   ОБРАЗОВАТЕЛЬНЫХ ДОСТИЖЕНИЙ ОБУЧАЮЩИХСЯ</td>
                </tr>
                <tr>
                    <td class="tg-r0kq">23</td>
                    <td class="tg-gfa8">Умею   планировать и отслеживать формирование метапредметных образовательных  <br> результатов у обучающихся</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="23" id="23" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">24</td>
                    <td class="tg-gfa8">Умею&nbsp;&nbsp;&nbsp;оценивать предметные образовательные результаты учащихся</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="24" id="24" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">25</td>
                    <td class="tg-gfa8">Составляю   стандартизованные проверочные работы с учетом кодификаторов элементов <br>  содержания и требований к разным уровням подготовки выпускников</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="25" id="25" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">26</td>
                    <td class="tg-gfa8">Использую   формирующее оценивание после урока (индекс-карточки, пятиминутное эссе,  <br> недельный отчет и др.), во время урока ("Светофор", поиск ошибок,   сигналы рукой и др.)</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="26" id="26" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-xnqf" colspan="6">РАБОТА С РОДИТЕЛЯМИ</td>
                </tr>
                <tr>
                    <td class="tg-r0kq">27</td>
                    <td class="tg-gfa8">Разрабатываю&nbsp;&nbsp;&nbsp;и провожу родительские собрания</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="27" id="27" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">28</td>
                    <td class="tg-gfa8">Взаимодействую&nbsp;&nbsp;&nbsp;с родителями для выработки единых требований к обучению и воспитанию</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="28" id="28" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">29</td>
                    <td class="tg-gfa8">Умею&nbsp;&nbsp;&nbsp;предотвращать конфликт между участниками образовательных отношений </td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="29" id="29" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-xnqf" colspan="6">САМООБРАЗОВАНИЕ</td>
                </tr>
                <tr>
                    <td class="tg-r0kq">30</td>
                    <td class="tg-gfa8">Готовлю&nbsp;&nbsp;&nbsp;выступления по методической теме</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="30" id="30" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">31</td>
                    <td class="tg-gfa8">Владею&nbsp;&nbsp;&nbsp;интерактивным оборудованием (интерактивная доска, система голосования и др.)</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="31" id="31" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">32</td>
                    <td class="tg-gfa8">Готовлю&nbsp;&nbsp;&nbsp;и провожу открытые уроки и мастер-классы минимум раз в год</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="32" id="32" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">33</td>
                    <td class="tg-gfa8">Умею   анализировать свою деятельность, определять успехи и риски, планировать   задачи работы на <br>основе положительных или отрицательных результатов своей   деятельности</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="33" id="33" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">34</td>
                    <td class="tg-gfa8">Участвую&nbsp;&nbsp;&nbsp;в профессиональных конкурсах</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="34" id="34" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">35</td>
                    <td class="tg-gfa8">Умею&nbsp;&nbsp;&nbsp;формировать портфолио</td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="35" id="35" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tg-r0kq">36</td>
                    <td class="tg-gfa8">Участвовал(а)&nbsp;&nbsp;&nbsp;в подготовке молодого учителя к конкурсу </td>
                    <td class="tg-r0kq" colspan="4">
                        <select name="36" id="36" class="sl">
                            <option value="0">Выбрать ответ</option>
                            <option value="4">Могу поделиться опытом</option>
                            <option value="3">Успешно решаю</option>
                            <option value="2">Могу решить</option>
                            <option value="1">Необходима помощь</option>
                        </select>
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




