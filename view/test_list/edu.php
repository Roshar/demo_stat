
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
    .wrapper-clear,
    pre-wrapper-form{
        width: 100%;
    }

    .pre-wrapper-form{
        background-color: #eff4f8;
        font-family: 'Open Sans', sans-serif;
    }
    .pre-wrapper-form .first-element h1{
        margin-top: 80px;
        text-align: center;
        font-size: 48px;
        font-weight: 400;

    }

    .pre-wrapper-form .second-element h2{
        margin-top: 80px;
        padding: 120px 0px 20px 0px;
        font-size: 26px;
        font-family: 'Open Sans', sans-serif;
    }
    .pre-wrapper-form .second-element p{
        font-size: 1.2em;
        padding-bottom: 20px;
        font-family: 'Open Sans', sans-serif;
    }
    body{
        background-color: #ffffff
    }
    .content__logo img{
        width: 80px;

    }

    nav {
        padding-top: 30px;
    }
    nav>ul li {
        display: inline-block;
        margin-left: 25px;
    }
    nav>ul li>a{
        display: block;
        font-size: 1.1em;
        color: #fff;
        border-bottom: 1px solid
        transparent;
        transition: all ease-in-out .5s;

    }

    .second-element ul li{
        display: inline-block;
    }

    .second-element ul{
        margin-bottom:  20px;
    }

    .second-element ul li>a{
        display: block;
        padding:15px 45px;
        color:#1b529e;
        font-weight: 400;
        font-size: 1.2em;
        background-color: #ffd70d;
        transition: background-color .5s, color .5s;
    }

    .second-element ul li a:hover{
        background-color:#f4d641;
        text-decoration-line: none;

    }



    .content__text-second-block{
        margin-top: 80px;
    }

    nav>ul li>a:hover{
        border-color: #fff;
    }

    .content__logo {
        text-align: center;
        font-size: 0;
    }

    .content__logo-title span {
        text-transform: uppercase;
        text-align: center;
        color: #ffffff;
        font-size: 13px;
        margin:0;
        padding: 0;
    }

    .wrapper-head{
        height: 60px;
        align-items: center;
        position: fixed;
        background-color: #1b529e;
        padding: 20px 0;
        border-bottom: 1px rgba(26, 26, 26, 0.21) solid;
        z-index: 8888;
        top: 0;
    }
    .wrapper_f{
        padding-top: 10px;
        display: flex;
        justify-content:space-between;
        width: 1200px;
        margin:0 auto;
        background-color: #1b529e;
        position:fixed;
        top:0;
        z-index: 9999;
    }

    .content {
        max-width: 1240px;
        margin:0 auto;
        display: flex;
        justify-content:space-between;
        align-items: center;

    }

    .content-problems{
        max-width: 1240px;
        margin:0 auto;
        text-align: center;
        margin-top: 60px;
    }

    .pre-wrapper__form{
        display: flex;
        justify-content:space-between;
        align-items: center;
        background-repeat: no-repeat;
        background-size: contain;
        background-image: url('/assets/img/teacher-test.png');
    }

    .pre-wrapper__form .first-element{
        width: 50%;
    }
    .pre-wrapper__form .second-element{
        width: 50%;
    }

    .second-element{
        box-sizing: border-box;
        padding-left: 80px;
    }

    .first-element{
        margin-top: 120px;
    }

    .content-pre-form{
        max-width: 1240px;
        margin:0 auto;
    }

    .content-form {
        max-width: 1250px;
        margin:0 auto;
    }
    .content-footer{
        max-width: 1250px;
        margin:0 auto;
    }

    img {
        max-width: 100%;
    }


    .content__title h1{
        color: #1b529e;
    }

    .content__category {
        margin: 0 auto;
    }

    .content__category> ul {
        text-align: center;
    }

    .content__category ul li{
        display: inline;
    }

    .content__category ul li a{
        display: inline-block
    ;text-transform: uppercase
    ;font-size: 2em
    ;text-align: center
    ;padding:100px
    ;color: #ffffff

    }

    .content__category ul li a:hover{
        transition:0.4s;
        background-color: #ffffff;
        color:#487bb7;
    }


    .content__nav ul {
        margin-left: auto;
    }

    .content__nav ul li{
        display: inline;
    }

    .content__nav ul li a{
        display: inline-block;
        color:slategray;
        padding: 10px;
        text-align: right;
        font-size: 1.2em;
    }

    .content__nav ul li a:hover {
        color:#487bb7;
    }

    .content__text{
        padding: 40px 0;
        font-size: 1.2em;
    }

    .content__text h1{
        color: white;
        font-weight: bold;
        padding: 20px 0;
        text-align: center;
        text-transform: uppercase;
        font-size: 3em;
    }

    .content__text p{
        color: white;
    }

    .content__text-second-block h2{
        font-size: 2em;
        padding: 35px 0;
        color: #6d6d6d;
        font-weight: 300;
        text-align: center;
        font-family: 'Open Sans', sans-serif;
    }

    .footer{
        background-color: #2b2b2b;
        margin-top:60px;
    }
    .footer .copyright{
        color: #ffffff;
        padding: 40px;
    }



    select, input {
        border:1px solid rgba(196,196,196,0.5);
        width: 100%;
        font-size: 1.2em;
        color: #6d6d6d;

    }
    select{
        padding: 10px;
    }
    input {
        width: 100%;

        padding:10px 0px 10px 15px;

    }
    .teacher_fields__block {
        margin-top: 30px;
    }

    label{
        display: inline-block;
        margin-bottom: 10px;
    }

    .half {
        display: flex;
        justify-content: space-between;

    }

    .half>input {
        width: 45%;
    }

    .button_fields {
        display: flex;
        margin:35px 0;
        justify-content: center;
    }

    .button_fields-p {
        display: flex;
        margin:35px 0;
        justify-content: center;
    }


    .button_fields button{
        padding: 20px;
        color: #3c71b1;
        font-size: 1.2em;
        text-transform: uppercase;
        border:none;
        border-radius: 2px;
        width: 30%;
    }

    .button_fields-p button{
        padding: 20px;
        color: #3c71b1;
        font-size: 1.2em;
        text-transform: uppercase;
        border:none;
        border-radius: 2px;
        width: 30%;
        background-color: #1b529e;
        color: #fff;
    }
    .enable  {
        background-color: #ffd70d;
    }

    .enable:hover  {
        background-color: #fede3d;

    }


    disabled{
        background-color: lightgrey;
    }

    .invalid{
        border: 1px solid tomato;
        transition-duration: .5s;
    }
    label.invalid-check {
        border-bottom: 1px solid tomato;
    }

    .invalid-notice{
        display: none;
    }
    .invalid-notice p{
        color: tomato;
    }

    .valid{
        border:1px solid forestgreen;
        transition-duration: .5s;
    }

    .flash{
        display: flex;
        justify-content: center;

    }
    .flash-content {
        background-color: #72a75b;
        width:40%;
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        color: #fff;
        top: 50%;
        padding: 50px;
        text-align: center;
        align-content: center;
    }
    .flash-content h2{
        color: #fff;
    }

    .notice{
        display: none;
    }

    .teacher_fields .agree input{
        width:2%;
    }

    .content__text-second-block ol li:last-child{

        list-style-type: none;
    }
</style>
<script>
    $(function(){

        function contains(arr, elem) {
            for (var i = 0; i < arr.length; i++) {
                if (arr[i] === elem) {
                    //return true;
                    delete arr[i];
                    return true;
                }
            }
            return false;
        }

        function validateEmail(email) {
            const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }

        function validatePhone(phone){
            const re = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;

            return re.test(phone);

        }

        function validate(){
            const email = $("#email").val();

            if(validateEmail(email)){
                $("#email").removeClass('invalid');
                $("#email").addClass('valid')
                return true;
            }else {
                $("#email").removeClass('valid');
                $("#email").addClass('invalid')
                return false;
            }
        }

        function validatePhoneStep2(){
            const phone = $('#phone').val();
            if(validatePhone(phone)){
                $("#phone").removeClass('invalid');
                $("#phone").addClass('valid');
                return true;
            }else{
                $("#phone").removeClass('valid');
                $("#phone").addClass('invalid');
            }
        }

        function checkboxvalidate(){
            if($('#agree').is(':checked')){
                return true;
            }
            return false;
        }

        function checkParams() {
            var firstname = $('#firstname').val();
            var secondname = $('#secondname').val();
            var area = $('#area').val();
            var pos = $("#position").val();
            var exp = $("#experience").val();
            var email = validate();
            var phone = validatePhoneStep2();
            var agree = checkboxvalidate();


            if(firstname.length != 0 && secondname.length != 0 && email && area > 0 && pos > 0 && exp > 0 && phone && agree) {
                // $('#submit').removeAttr('disabled');
                $('#submit').removeClass("disabled");
                $('#submit').addClass('enable');
            } else {
                // $('#submit').attr('disabled', 'disabled');
                $('#submit').removeClass("enable");
                $('#submit').addClass('disabled');
            }
        }

        $("#area").change(function(){

            let id = $('#area').val();
            if(id > 0) {
                $("#area").removeClass('invalid');
                $("#area").addClass('valid');
            }else{
                $("#area").removeClass('valid');
                $("#area").addClass('invalid')
            }
            checkParams();

            $.ajax({
                type: 'POST',
                url: '',
                data: {area:id},
                success: function(data){
                    $("#school_area").html(data);
                }
            });
        });

        const ar = [];

        $("#position").change(function() {
            var pos = $("#position").val();
            if(pos > 0){
                $("#position").removeClass('invalid');
                $("#position").addClass('valid')
            }else{
                $("#position").removeClass('valid');
                $("#position").addClass('invalid')
            }
            checkParams()
        });

        $("#experience").change(function() {
            var exp = $("#experience").val();

            if(exp > 0){
                $("#experience").removeClass('invalid');
                $("#experience").addClass('valid')
            }else {
                $("#experience").removeClass('valid');
                $("#experience").addClass('invalid')
            }
            checkParams()
        });

        $("#email").keyup(function(){
            checkParams();
            validate();
        });

        $("#phone").keyup(function(){
            checkParams();
            validatePhoneStep2();
        })

        $('#firstname').keyup(function(){
            $("#firstname").removeClass('invalid');
            $("#firstname").addClass('valid')
            checkParams();
        });
        $('#secondname').keyup(function(){
            $("#secondname").removeClass('invalid');
            $("#secondname").addClass('valid')
            checkParams();
        });

        $('#agree').click(function(){
            if( $(this).is(':checked') ) {
                $("#agreeLab").removeClass('invalid-check');
                $('.invalid-notice').css('display', 'none')

            } else {
                $("#agreeLab").addClass('invalid-check')
                $('.invalid-notice').css('display', 'block')

            }
            checkParams();
        });


        $("#submit").click(function (e) {
            var firstname = $('#firstname').val();
            var secondname = $('#secondname').val();
            var area = $('#area').val();
            var pos = $("#position").val();
            var exp = $("#experience").val();
            var email = validate();
            var phone = validatePhoneStep2();
            var agree = checkboxvalidate();

            if(!firstname){
                e.preventDefault();
                $("#firstname").removeClass('valid');
                $('#firstname').addClass('invalid')
            }

            if(!secondname){

                e.preventDefault();
                $("#secondname").removeClass('valid');
                $('#secondname').addClass('invalid')
            }

            if(area < 1){
                console.log(area)
                e.preventDefault();
                $("#area").removeClass('valid');
                $('#area').addClass('invalid')
            }

            if(pos < 1){
                e.preventDefault();
                $("#position").removeClass('valid');
                $('#position').addClass('invalid')
            }

            if(exp < 1){
                console.log(exp)
                e.preventDefault();
                $("#experience").removeClass('valid');
                $('#experience').addClass('invalid')
            }

            if(!email){
                e.preventDefault();
                $("#email").removeClass('valid');
                $('#email').addClass('invalid')
            }

            if(!phone){
                e.preventDefault();
                $("#phone").removeClass('valid');
                $('#phone').addClass('invalid')
            }

            if(!agree){
                e.preventDefault();
                $("#agreeLab").addClass('invalid-check')
                $('.invalid-notice').css('display', 'block')
            }
        })

        console.log(ar)

    })


</script>

<div class="wrapper-head">
    <div class="content">

        <div class="wrapper_f">
            <div class="content__logo">
                <a href="/"><img src="/img/static.png" ></a>
                <div class="content__logo-title">
                    <span>статистика</span>
                </div>
            </div>
            <nav class="f">
                <ul>
                    <li><a href="/main#tests">Тесты</a></li>
                    <li><a href="/main#project-id">О проекте</a></li>
                    <li><a href="/main#contact-id">Контакты</a></li>
                </ul>
            </nav>
        </div>

    </div>
</div>
<div class="pre-wrapper-form">
    <div class="content-pre-form">
        <div class="pre-wrapper__form">
            <div class="first-element">
                <h1>Тест «Эффективность учителя»</h1>
            </div>
            <div class="second-element">
                <h2>Уважаемый учитель!
                    Предлагаем Вам  воспользоваться анкетой для самооценки уровня профессиональной компетентности.
                </h2>
                <p>
                    Анкета включает следующие направления педагогической деятельности:
                    •	«Планирование образовательной деятельности обучающихся»,
                    •	«Развитие профессиональной деятельности»,
                    •	«Контроль образовательных достижений обучающихся»,
                    •	«Работа с родителями»,
                    •	«Самообразование»

                </p>

                <p>Анкета  состоит из 35 или 36 высказываний, соответствующих профессиональным компетентностям.
                </p>
                <ul>
                    <li><a href="#test-body">Перейти к тесту</a></li>
                    <!--                    <li><a href="">Вернуться к выбору теста</a></li>-->
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="content-problems">
    <?php $errors =[]?>
    <?php foreach ($errors as $k => $error) {
        $errors[$k] = $k;
    }?>


    <div class="notice"><?php if(!empty($errors)){
            echo "<div class='flash'>
                            <div class='flash-content'>
                                <h2>Заполните все поля!</h2>
                            </div>
                            
                  </div>";
}?></div>

    <?php if(isset($uniq)):?>
        <div class="uniq">
            <div class="h2">Пользователь с таким адресом электронной почты уже проходил данную диагностику</div>
            <div class="givemelink">
                <h3>Мы можем Вам отправить на эту почту, результат диагностики</h3>
                <form method="post" name="uniq">
                    <input type="hidden" name="personId" value="<?=$uniqPersonId ?? ''?>">
                    <input type="hidden" name="getresults" value="<?=$uniq['uniq']?>">
                    <input type="hidden" name="email" value="<?=$email ?? '';?>">
                    <input type="hidden" name="firstname" value="<?=$firstname ?? '';?>">
                    <input type="hidden" name="lastname" value="<?=$lastname ?? '';?>">
                    <input type="hidden" name="school" value="<?=$schoolId ?? '';?>">
                    <input type="hidden" name="diagnosticId" value="<?=$diagnosticId ?? '';?>">
                    <input type="hidden" name="area" value="<?=$area ?? '';?>">
                    <div class="button_fields-p">
                        <button type="submit" > Отправить мне на почту</button>
                    </div>
                    <div class="back"><a href="/" style=" border-bottom: 1px solid tomato;font-size: 1.3em">Вернуться на главную страницу</a></div>

                </form>

            </div>
        </div>
    <?php endif;?>
</div>
<div id="test-body"></div>
<div class="wrapper-clear">
    <div class="content-form">
        <div class="content__text-second-block">


            <?php if(!isset($uniq)):?>
            <h2>Перед началом тестирования ответьте на несколько вопросов</h2>


            <form method="POST" name="form1">
                <ol>
                    <li>
                        <label for="area" class="label">Выберите Ваш район</label>
                        <div class="custom-select">
                            <select name="area" id="area" <?php if(isset($er['area'])){echo "class='invalid'";}?>>
                                <option value="0"> Выбрать</option>
                                <?php foreach($areas as $area):?>
                                    <option  value="<?=$area['id_area']?>"
                                        <?php if(isset($_POST['area'])):?>
                                            <?php if($_POST['area']==$area['id_area']){echo "selected";}?>
                                        <?php endif;?>><?=$area['title_area']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>

                    </li>
                    <li>
                        <div class="teacher_fields__block">
                            <label for="school" class="label">Выберте Ваше место работы</label>
                            <div id="school_area">
                                <select name="school" id="school" <?php if(isset($er['school'])){echo "class='invalid'";}?>>
                                    <option value="0">Выбрать</option>
                                    <?php if(isset($schools)):?>
                                        <?php foreach($schools as $school):?>
                                            <option  value="<?=$school['id_school']?>"
                                                <?php if($_POST['school']==$school['id_school']){echo "selected";}?>>
                                                <?=$school['school_name']?>
                                            </option>
                                        <?php endforeach;?>
                                    <?php endif;?>
                                </select>
                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="teacher_fields__block">
                            <label for="area" class="label">Выберите должность</label>
                            <div id="position_area">
                                <select name="position" id="position" <?php if(isset($er['position'])){echo "class='invalid'";}?> >
                                    <option value="0">Выбрать</option>
                                    <?php foreach($positions as $position):?>
                                        <option  value="<?=$position['id_discipline']?>"
                                            <?php if(isset($_POST['position'])):?>
                                                <?php if($_POST['position']==$position['id_discipline']){echo "selected";}?>
                                            <?php endif;?>>
                                            <?=$position['title_position']?>
                                        </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="teacher_fields__block">
                            <label for="experience" class="label">Выберите стаж</label>
                            <div id="position_area">
                                <select name="experience" id="experience" <?php if(isset($er['experience'])){echo "class='invalid'";}?> >
                                    <option value="0">Выбрать</option>
                                    <?php foreach($experience as $experience):?>
                                        <option  value="<?=$experience['id']?>"
                                            <?php if(isset($_POST['experience'])):?>
                                                <?php if($_POST['experience']==$experience['id']){echo "selected";}?>
                                            <?php endif;?>>
                                            <?=$experience['experience']?>
                                        </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="teacher_fields">
                            <div class="teacher_fields__block">
                                <label  class="label">Укажите Ваш электронный почтовый адрес (убедитесь, что он корректный) и номер мобильного телефона</label>
                                <div class="half">
                                    <input type="text" id="email" name="email"
                                        <?php if(isset($errors['email'])){echo "class='invalid'";}?>
                                           value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>"
                                           placeholder="Электронный почтовый адрес">
                                    <input type="text" id="phone" name="phone"
                                        <?php if(isset($errors['phone'])){echo "class='invalid'";}?>
                                           value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];}?>"
                                           placeholder="Номер телефна">
                                </div>

                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="teacher_fields">
                            <div class="teacher_fields__block">
                                <label  class="label">Укажите Ваше имя и фамилию (для выдачи электронного сертификата)</label>
                                <input type="hidden" name="formdata" value="formdata">
                                <div class="half">
                                    <input type="text" id="firstname" name="firstname"
                                        <?php if(isset($errors['firstname'])){echo "class='invalid'";}?>
                                           value="<?php if(isset($_POST['firstname'])){echo $_POST['firstname'];}?>"
                                           placeholder="Имя">
                                    <input type="text" id="secondname" name="lastname"
                                        <?php if(isset($errors['lastname'])){echo "class='invalid'";}?>
                                           value="<?php if(isset($_POST['lastname'])){echo $_POST['lastname'];}?>"
                                           placeholder="Фамилия">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="teacher_fields">
                            <div class="teacher_fields__block agree">
                                <input type="checkbox"  name="agree" id="agree" value="1" <?php if(isset($_POST['agree'])){echo "checked";}?> >
                                <label for="vehicle1" id="agreeLab"> Я соглашаюсь на передачу персональных данных ГБУ ДПО «ЧИПКРО», для обработки результатов диагностики и обратной связи по их  итогам.</label><br>
                                <div class="invalid-notice">
                                    <p> Здесь необходимо поставить галочку</p>
                                </div>
                            </div>
                        </div>
                    </li>

                </ol>
                <div class="button_fields">
                    <button type="submit" class="disabled" id="submit" > Начать тест </button>
                </div>
            </form>


        </div>
    </div>
</div>
<div class="footer">
    <div class="content-footer">
        <div class="copyright">
            © 2020, Государтсвенное бюджетное учреждение дполнительного профессионального образования "Чеченский институт повышения квалификациии работников образования"
        </div>
    </div>
</div>
<script>
    $(function () {

        let flash = $('.flash').length;
        console.log(flash)
        if(flash){
            setTimeout(function(){$('.notice').fadeIn('fast')},500);
            $('.notice').fadeIn();
            setTimeout(function(){$('.notice').fadeOut('slow')},2000);  //30000 = 30 секунд
        }
    })
</script>

<?php endif;?>

