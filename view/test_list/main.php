<style>

    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');

    *{
        font-family: 'Roboto', sans-serif;
        font-weight: 300;
    }

    * {
        margin: 0;
        padding: 0;
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
    .pre-wrapper,
    .wrapper,
    .wrapper___article,
    .wrapper-contact,
    .wrapper-project{
        width: 100%;
    }

    .wrapper-project{
        background-color: #eff4f8;
    }
    body{
        background-color: #ffffff
    }
    .wrapper-head{
        height: 60px;
        align-items: center;
        position: fixed;
        background-color: #1b529e;
        padding: 20px 0;
        border-bottom: 1px rgba(26, 26, 26, 0.21) solid;
        z-index: 2;
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
        z-index: 3;
    }
    .wrapper{
        /*background: rgb(80, 164, 219);*/
        /*background: linear-gradient(287deg, rgba(72,123,183,1) 0%, rgba(27,82,158,1) 100%);*/
        margin-top:10vh;
        padding: 0;
    }
    .content {
        max-width: 1240px;
        margin:0 auto;
        display: flex;
        justify-content:space-between;
        align-items: center;
    }

    .content-2{
        max-width: 1240px;
        margin:0 auto;
        display: block;
        text-align: center;
    }

    img {
        max-width: 100%;
    }

    .content__logo img{
        width: 80px;
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

    .content__nav{
        width: 100%;
        display: flex;
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

    .get {
        display:none;
    }

    #diagram {
        float:left;
        width:600px;
        height:600px;
    }

    .highcharts-figure, .highcharts-data-table table {
        min-width: 480px;
        max-width: 800px;
        margin: 1em auto;
    }

    #container {
        height: 380px;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #EBEBEB;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }
    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }
    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }
    .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
        padding: 0.5em;
    }
    .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }
    .highcharts-data-table tr:hover {
        background: #f1f7ff;
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

    nav>ul li>a:hover{
        border-color: #fff;
    }
    .content__logo {
        text-align: center;
    }
    .content__logo-title span {
        text-transform: uppercase;
        text-align: center;
        color: #ffffff;
        font-size: 13px;
    }
    .wrapper-head-second{
        marign-top:60px;
        background-color: #1b529e;

    }
    .left {
        margin: 190px 0px 60px 0px;
        width: 60%;
    }
    .left__main-title h1{
        font-size: 2.9em;
        color: #ffffff;
        font-weight: 500;
        margin-bottom: 30px;
        line-height:1.3em;
    }

    .left__main-description{
        width: 80%;
    }
    .left__main-description span{
        line-height: 1.7em;
    }

    .left__main-description span,
    .left__main-description ul li{
        font-size: 1.2em;
        color: #ffffff;
        font-weight: 400;
    }

    .left__main-description ul {
        margin-top: 15px;
    }

    .graphic{
        margin: 190px 0px 60px 0px;
        width: 40%;
    }

    .highcharts-credits{
        display: none;
    }

    .pre-wrapper__elements{
        display: flex;
        flex-wrap:wrap;
        justify-content: center;
        margin-top:120px;

    }

    .pre-wrapper__elements .first-element h2{
        font-size: 30px;
        font-weight: 500;
        color: #2b2b2b;
        margin-bottom: 20px;
    }

    .wrapper-contact{
        background-color: #eff4f8;
    }

    .content-2__first{
        margin-top: 120px;
    }

    .content-2__second{
        margin-bottom: 80px;
    }
    .content-2__first h2{
        font-size: 30px;
        font-weight: 500;
        color: #2b2b2b;
        margin-bottom: 20px;
    }

    .wrapper___article-block,
    .wrapper-hide{
        display: flex;

    }
    .wrapper___article-block{
        margin-bottom: 5px;
    }

    .wrapper__article-img {
        width: 45%;
        height: 398px;
        background-repeat: no-repeat;
        background-size: contain;
        border-right: 5px solid #1b529e;
    }

    .one{
        background-image: url('/img/ikt-grammar.jpg');
    }
    .two {
        background-image: url('/img/teacher-level.jpg');
    }

    .article-block__text {
        margin: 20px 0px 40px 60px;
    }

    .wrapper__article-description{
        width: 55%;
        background-color: #e6f0ff;
        color: #2a2a2a;
    }

    .article-block__text-title {
        margin-bottom: 20px;
    }

    .article-block__text-title h3{
        text-transform: uppercase;
        color: #2a2a2a;
        font-weight: 700;
    }

    .article-block__text-pre-content {
        margin-bottom: 30px;
        font-size: .9em;
        color: #848484;
    }

    .article-block__text-pre-content ul li{
        display: inline-block;
        margin-right: 35px;
    }

    .article-block__text-description{
        font-size: 1.4em;
        margin-right: 70px;
        line-height: 1.5em;
    }

    .article-block__active {
        margin-top: 30px;
    }

    .article-block__active ul li{
        display: inline-block;
        margin-right: 40px;
    }

    .article-block__active ul li>a{
        display: block;
        padding:15px;
        color:#1b529e;
        transition: background-color .5s, color .5s;
    }

    .article-block__active ul li.btn>a:hover{
        background-color:#1b529e;
        color: #fff;
        text-decoration-line: none;

    }

    .article-block__active ul li a:hover{
        -webkit-text-decoration-line: underline; /* Safari */
        text-decoration-line: underline;

    }

    .article-block__active ul li.btn{
        border: 1px solid #1b529e;
    }
    .contact-block__left{
        width: 40%;
        height: 450px;
        background-repeat: no-repeat;
        background-size: contain;
        background-image: url('/img/letter2.png');
        /*border: 1px solid red;*/

    }
    .contact-block__right{
        width: 60%;
        /*border:1px solid green;*/
        padding: 20px 40px;
        box-sizing: border-box;
    }

    .contact-block__right input {
        width: 100%;
        padding:20px 0px 20px 15px;
        margin: 15px 0;
        font-size: 1.5em;
        border:1px solid rgba(196,196,196,0.5);
        color: #6d6d6d;
    }

    .contact-block__right textarea {
        width: 100%;
        padding:20px 0px 20px 15px;
        font-size: 1.5em;
        margin: 15px 0;
        border:1px solid rgba(196,196,196,0.5);
        color: #6d6d6d;
        resize: none;

    }

    .contact-block__right .mess-send{
        background-color: #ffd70d;
        color:#1b529e;
        transition: background-color 1s;
        font-weight: 400;
    }

    .contact-block__right .mess-send:hover {
        background-color:#f4d641;
    }

    .project-about{
        padding:60px 0;
        color: #2b2b2b;

    }

    .project-about p{
        font-size: 1.4em;
        line-height: 1.5em;
        text-align: center;

    }

    .project-title {
        margin-bottom: 80px;
    }

    .content-footer{
        max-width: 1250px;
        margin:0 auto;
    }
    .footer{
        background-color: #2b2b2b;

    }
    .footer .copyright{
        color: #ffffff;
        padding: 40px;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 999; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .project-about p{
        margin:15px 0;
        padding:2px 85px;
        text-align: justify;
    }

    blockquote {
        margin: 0;
        color: #231E28;
        padding: 30px 30px 30px 60px;
        border-left: 8px solid #CBDDE7;
        position: relative;
        background: #eff4f8;
        font-family: 'Lato', sans-serif;
        font-weight: 300;
    }
    blockquote:before{
        content: "\201C";
        font-family: Arial;
        color: #CBDDE7;
        font-size: 70px;
        position: absolute;
        left: 15px;
        top: 5px;
    }
    blockquote p {
        font-style: italic;
        font-size: 24px;
        margin-top: 0;
    }



    .blockq {
        width:87%;
        margin:0 auto;
    }

    blockquote>footer{
        padding-left: 85px;
    }





</style>
<script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
    $(function () {
        if($('.sendMailer').length){
            // Get the modal
            var modal = document.getElementById("myModal");

            var btn = document.getElementById("myBtn");

            var span = document.getElementsByClassName("close")[0];

            modal.style.display = "block";

            span.onclick = function() {
                modal.style.display = "none";
                $('.sendMailer').remove();

                var url = "/";
                $(location).attr('href',url);

            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                    $('.sendMailer').remove();
                    var url = "/";
                    $(location).attr('href',url);
                }
            }
        }
    })


</script>
<div class="wrapper-head">
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>

            <h2 style="text-align: center; padding:60px 0;"><?php echo $success ?? '' ?></h2>
        </div>

    </div>
    <div class="content">
        <?php if(isset($success)):?>
            <div class="sendMailer"></div>
        <?php endif;?>
        <div class="wrapper_f">
            <div class="content__logo">
                <a href="/main"><img src="/img/static.png" ></a>
                <div class="content__logo-title">
                    <span>статистика</span>
                </div>
            </div>
            <nav class="f">
                <ul>
                    <li><a href="#tests">Тесты</a></li>
                    <li><a href="#project-id">О проекте</a></li>
                    <li><a href="#contact-id">Контакты</a></li>
                </ul>
            </nav>
        </div>

    </div>
</div>


<div class="wrapper-head-second">
    <div class="content">
        <div class="left">
            <div class="left__main-title">
                <h1>Портал изучения
                    образовательных потребностей
                    педагогического сообщества
                    Чеченской Республики</h1>
            </div>
            <div class="left__main-description">
                <span>Пройдите диагностику и получите обратную связь
                    по следующим направлениям развития педагога:</span>
                <ul>
                    <li>- цифровая грамотность</li>
                    <li>- успешность учителя</li>
                </ul>

            </div>
        </div>
        <div class="right">
            <div class="graphic">
                <figure class="highcharts-figure">
                    <div id="container"></div>

                </figure>
            </div>
        </div>
    </div>
</div>
<div id="tests"></div>
<div class="pre-wrapper">
    <div class="content">
        <div class="pre-wrapper__elements">
            <div class="first-element">
                <h2>2 теста на выбор для онлайн-диагностики</h2>
            </div>
            <div class="second-element">
                <h3>Индивидуальный профиль по итогам каждого теста. Детальные рекомендации и материалы по развитию.</h3>
            </div>
        </div>
    </div>
</div>
<div class="wrapper" >
    <div class="content">
        <div class="wrapper___article">
            <!-- article block -->
            <div class="wrapper___article-block">
                <div class="wrapper-hide">
                    <div class="wrapper__article-img one">
                    </div>
                    <div class="wrapper__article-description">
                        <div class="article-block__text">
                            <div class="article-block__text-title">
                                <h3>Цифровая грамотность</h3>
                            </div>
                            <div class="article-block__text-pre-content">
                                <ul>
                                    <li>20 вопросов</li>
                                    <li>30 минут</li>
                                </ul>
                            </div>
                            <div class="article-block__text-description">
                                <p>Цифровая грамотность — это умение пользоваться цифровыми устройствами,
                                    понимание современных технологий и их безопасное и эффективное
                                    использование, навыки корректной работы с информацией
                                    и даже соблюдение определенных мер безопасности в цифровой среде</p>
                            </div>
                            <div class="article-block__active">
                                <ul>
                                    <li class="btn"><a href="/main/test/1">Пройти тест</a></li>
                                    <!--                                    <li><a href="/" class="more">Подробнее</a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end article -->

            <!-- article block -->
            <div class="wrapper___article-block">
                <div class="wrapper-hide">
                    <div class="wrapper__article-img two">
                        <!--                    <img src="/assets/img/ikt-grammar.jpg" alt="">-->
                    </div>
                    <div class="wrapper__article-description">
                        <div class="article-block__text">
                            <div class="article-block__text-title">
                                <h3>Эффективность учителя</h3>
                            </div>
                            <div class="article-block__text-pre-content">
                                <ul>
                                    <li>20 вопросов</li>
                                    <li>30 минут</li>
                                </ul>
                            </div>
                            <div class="article-block__text-description">
                                <p>"Эффективность учителя" — это способность создавать и использовать
                                    контент с помощью цифровых технологий, включая навыки
                                    компьютерного программирования, поиск и обмен информацией,
                                    коммуникацию с другими людьми.</p>
                            </div>
                            <div class="article-block__active">
                                <ul>
                                    <li class="btn"><a href="/main/test/2">Пройти тест</a></li>
                                    <!--                                    <li><a href="/" class="more">Подробнее</a></li>-->
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- end article -->
        </div>

    </div>
</div>
<div id="project-id"></div>
<div class="pre-wrapper" >
    <div class="content-2" >
        <div class="content-2__first project-title" >
            <h2>О проекте</h2>
        </div>
    </div>
</div>

<div class="wrapper-project">
    <div class="content">
        <div class="project-about">
            <p>В условиях быстро меняющейся образовательной среды все более актуальным становится
                требование достижения современного качества образования,
                адекватного запросам общества и социально-экономическим условиям.</p>
            <p>
                Проект по исследованию профессиональных компетенций педагога, предлагаемый институтом повышения квалификации,
                разработан с целью обеспечения педагогических работников надежным электронным ресурсом для оценки уровня
                своего профессионального мастерства.  В основе проекта лежит коучинговый подход,
                основанный  на стимулировании  познавательного интереса, повышении результативности в обучении и развитии.
            </p>
            <div class="blockq">
                <blockquote>
                    <p>Он опирается не на знание, опыт, а на способность человека учиться самому и действовать творчески   </p>
                    <footer>— <cite> М. Дауни </cite></footer>
                </blockquote>
            </div>

            <p>
                Педагоги на условиях анонимности смогут провести самодиагностику, определить проблемные зоны в своей деятельности,
                обозначить методические затруднения. Выявленные дефициты в  деятельности
                учителей являются реперными точками профессионального роста, на основе которых строится траектория  индивидуального развития.
            </p>
        </div>
    </div>
</div>

<div id="contact-id"></div>
<div class="pre-wrapper" >
    <div class="content-2" >
        <div class="content-2__first" >
            <h2>У Вас возникли вопросы?</h2>
        </div>
        <div class="content-2__second">
            <h3>Напишите нам, мы обязательно свяжемся с Вами и ответим на все вопросы</h3>
        </div>
    </div>
</div>
<div class="wrapper-contact">
    <div class="content">

        <div class="contact-block__left">
        </div>
        <div class="contact-block__right">
            <form action="" method="post">
                <input type="hidden" name="support">
                <input type="text" name="firstname" placeholder="Ваше имя">
                <input type="text" name="lastname" placeholder="Ваша фамилия">
                <input type="email" name="email" placeholder="Ваша электронная почта">
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                <input type="submit" class="mess-send" value="ОТПРАВИТЬ">
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
        $('.more').click(function (e) {
            e.preventDefault();
            $(this).parents('.wrapper-hide').hide();

        })
    })
    Highcharts.chart('container', {
        chart: {
            type: 'spline',
            animation: Highcharts.svg, // don't animate in old IE
            marginRight: 10,
            events: {
                load: function () {

                    // set up the updating of the chart each second
                    var series = this.series[0];
                    setInterval(function () {
                        var x = (new Date()).getTime(), // current time
                            y = Math.random();
                        series.addPoint([x, y], true, true);
                    }, 1000);
                }
            }
        },

        time: {
            useUTC: false
        },

        title: {
            text: '<span style="color: #959595; font-size: 13px">Обработка данных в режиме реального времени</span>'
        },

        accessibility: {
            announceNewData: {
                enabled: true,
                minAnnounceInterval: 15000,
                announcementFormatter: function (allSeries, newSeries, newPoint) {
                    if (newPoint) {
                        return 'New point added. Value: ' + newPoint.y;
                    }
                    return false;
                }
            }
        },

        xAxis: {
            type: 'datetime',
            tickPixelInterval: 150
        },

        yAxis: {
            title: {
                text: '<span style="color: #959595; font-size: 10px">Значения</span>'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },

        tooltip: {
            headerFormat: '<b>{series.name}</b><br/>',
            pointFormat: '{point.x:%Y-%m-%d %H:%M:%S}<br/>{point.y:.2f}'
        },

        legend: {
            enabled: false
        },

        exporting: {
            enabled: false
        },

        series: [{
            name: 'Чеченская Республика',
            data: (function () {
                // generate an array of random data
                var data = [],
                    time = (new Date()).getTime(),
                    i;

                for (i = -19; i <= 0; i += 1) {
                    data.push({
                        x: time + i * 1000,
                        y: Math.random()
                    });
                }
                return data;
            }())
        }]
    });

</script>

