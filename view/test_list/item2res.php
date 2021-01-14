
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
    .wrapper-body,
    .wrapper_pre,
    .wrapper-body-recom,
    .wrapper-body-sertif{
        width: 100%;
    }

    .wrapper_pre{
        background-color: #eff4f8;
        font-family: 'Open Sans', sans-serif;
    }
    .center-h{
        background-color: #eff4f8;
        font-family: 'Open Sans', sans-serif;
    }
    .pre-wrapper-form .first-element h1{
        margin-top: 80px;
        text-align: center;
        font-size: 48px;
        font-weight: 400;

    }

    .content .first-element h4{
        padding-top: 120px;
        padding-bottom: 40px;
        text-align: center;
        font-size: 1.5em;
        font-weight: 400;
        margin-top: -20px;

    }
    .content .first-element h1{
        margin-bottom: 80px;
        text-align: center;
        font-size: 48px;
        font-weight: 400;
        padding-bottom: 120px;

    }

    .first-element-rec h2,
    .first-element-b h2,
    .serif h2{
        font-size: 36px;
    }

    .wrapper-body-recom .content-pre-form{
        border-bottom: 1px solid lightgrey;
        margin-top: 60px;
        margin-bottom: 60px;
    }

    .wrapper-body .content-pre-form{
        border-bottom: 1px solid lightgrey;
        margin-top: 40px;
        margin-bottom: 60px;
    }

    .pre-wrapper-form .second-element h2,
    .wrapper-body .second-element h2{
        margin-top: 80px;
        padding: 120px 0px 20px 0px;
        font-size: 26px;
        font-family: 'Open Sans', sans-serif;
    }
    .pre-wrapper-form .second-element p,
    .wrapper-body .second-element p{
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

    .second-element-rec{
        background-color:#eff4f8;
    }

    .second-element-rec ul{
        margin-bottom:  20px;
    }

    .second-element-rec ul li>a{
        display: block;
        padding:15px 45px;
        color:#1b529e;
        font-weight: 400;
        font-size: 1.2em;
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
        height: 80px;
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

    }

    .pre-wrapper__form{
        display: flex;
        justify-content:space-between;

        position: relative;
    }

    .pre-wrapper__form .first-element{
        position: relative;
        width: 50%;
    }

    .pre-wrapper__form .first-element-rec{
        position: relative;
        width: 50%;
    }
    .pre-wrapper__form .second-element{
        width: 50%;
    }

    .pre-wrapper__form .second-element-rec{
        width: 50%;
    }

    .second-element{
        box-sizing: border-box;
    }

    .first-element{
        margin-top: 100px;
    }

    .first-element-b{
        margin-top: 20px;
    }


    .content-pre-form{
        max-width: 1240px;
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



    .button_fields button{
        padding: 20px;
        color: #3c71b1;
        font-size: 1.2em;
        text-transform: uppercase;
        border:none;
        border-radius: 2px;
        width: 30%;
    }


    disabled{
        background-color: lightgrey;
    }


    .invalid-notice p{
        color: tomato;
    }

    .flash-content h2{
        color: #fff;
    }



    .teacher_fields .agree input{
        width:2%;
    }

    .content__text-second-block ol li:last-child{

        list-style-type: none;
    }
    .serif {
        margin:0 auto;
        width: 50%;
        text-align: center;
    }
    .center-h{
        text-align: center;
        margin:0 auto;
        width: 100%;
        height:500px;
        background-repeat: no-repeat;
        background-size: contain;
        background-image: url('/img/happ.png');

    }
    .center-h h1{
        text-align: center;

    }

    .first-element-rec-pos{
        position: absolute;
        top: 0;
    }

    .demo {
        max-width: 40%;
        margin: 60px 0px  40px 120px;

    }

    .demo > div {

    }

</style>

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

<script>
    (function($){
        $.fn.extend({
            percentcircle: function(options) {
                var defaults = {
                        animate : true,
                        diameter : 140,
                        guage: 16,
                        coverBg: '#fff',
                        bgColor: '#efefef',
                        fillColor: '#1b529e',
                        percentSize: '24px',
                        percentWeight: 'normal'
                    },
                    styles = {
                        cirContainer : {
                            'width':defaults.diameter,
                            'height':defaults.diameter
                        },
                        cir : {
                            'position': 'relative',
                            'text-align': 'center',
                            'width': defaults.diameter,
                            'height': defaults.diameter,
                            'border-radius': '100%',
                            'background-color': defaults.bgColor,
                            'background-image' : 'linear-gradient(91deg, transparent 50%, '+defaults.bgColor+' 50%), linear-gradient(90deg, '+defaults.bgColor+' 50%, transparent 50%)'
                        },
                        cirCover: {
                            'position': 'relative',
                            'top': defaults.guage,
                            'left': defaults.guage,
                            'text-align': 'center',
                            'width': defaults.diameter - (defaults.guage * 2),
                            'height': defaults.diameter - (defaults.guage * 2),
                            'border-radius': '100%',
                            'background-color': defaults.coverBg
                        },
                        percent: {
                            'display':'block',
                            'width': defaults.diameter,
                            'height': defaults.diameter,
                            'line-height': defaults.diameter + 'px',
                            'vertical-align': 'middle',
                            'font-size': defaults.percentSize,
                            'font-weight': defaults.percentWeight,
                            'color': defaults.fillColor
                        }
                    };

                var that = this,
                    template = '<div><div class="ab"><div class="cir"><span class="perc">{{percentage}}</span></div></div></div>',
                    options =  $.extend(defaults, options)

                function init(){
                    that.each(function(){
                        var $this = $(this),

                            perc = Math.round($this.data('percent')),
                            deg = perc * 3.6,
                            stop = options.animate ? 0 : deg,
                            $chart = $(template.replace('{{percentage}}',perc+'%'));

                        $chart.css(styles.cirContainer).find('.ab').css(styles.cir).find('.cir').css(styles.cirCover).find('.perc').css(styles.percent);

                        $this.append($chart);
                        setTimeout(function(){
                            animateChart(deg,parseInt(stop),$chart.find('.ab'));
                        },250)
                    });
                }

                var animateChart = function (stop,curr,$elm){
                    var deg = curr;
                    if(curr <= stop){
                        if (deg>=180){
                            $elm.css('background-image','linear-gradient(' + (90+deg) + 'deg, transparent 50%, '+options.fillColor+' 50%),linear-gradient(90deg, '+options.fillColor+' 50%, transparent 50%)');
                        }else{
                            $elm.css('background-image','linear-gradient(' + (deg-90) + 'deg, transparent 50%, '+options.bgColor+' 50%),linear-gradient(90deg, '+options.fillColor+' 50%, transparent 50%)');
                        }
                        curr ++;
                        setTimeout(function(){
                            animateChart(stop,curr,$elm);
                        },1);
                    }
                };

                init(); //kick off the goodness
            }
        });

    })(jQuery);
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
                    <li><a href="/main">Завершить процедуру диагностики</a></li>
                </ul>
            </nav>
        </div>

    </div>
</div>
<div class="wrapper_pre">
    <div class="content">
        <div class="center-h">
            <div class="first-element">
                <h4>Результаты диагностики по тесту</h4>
                <h1><?=$testname[0]['title'];?></h1>

            </div>
        </div>
    </div>
</div>

<div class="wrapper-body">
    <div class="content-pre-form">
        <div class="pre-wrapper__form">
            <div class="first-element-b">
                <h2> Эффективность учителя</h2>
                <div class="demo">
                    <div class="demo-4" data-percent="<?php echo $present?>"></div>
                </div>
            </div>
            <div class="second-element">
                <?php if(isset($recommendation)):?>
                    <p> <?php echo $recommendation[0]['text_finish']?> </p>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>

<?php if(!empty($badAnswers)):?>
    <div class="wrapper-body-recom">
        <div class="content-pre-form">
            <div class="pre-wrapper__form">
                <div class="first-element-rec">
                    <div class="first-element-rec-pos">
                        <h2> Рекомендуемые материалы для развития</h2>
                    </div>

                </div>
                <div class="second-element-rec">
                    <ul>
                        <?php foreach($badAnswers as $datum):?>
                            <?php foreach ($datum as $value):?>
                                <li><?=$value['source_body']?></li>
                            <?php endforeach;?>
                        <?php endforeach;?>
                    </ul>

                </div>
            </div>
        </div>
    </div>
<?php endif;?>
<div class="wrapper-body-sertif">
    <div class="content">
        <div class="serif">
            <h2>Ваш сертфикат готов</h2>
            <form action="" method="post">
                <input type="hidden" name="firstname" value="<?=$firstname?>">
                <input type="hidden" name="lastname" value="<?=$lastname?>">
                <input type="hidden" name="testname" value="<?=$testname[0]['title'];?>">
                <input type="hidden" name="schoolname" value="<?=$school_name[0]['school_name']?>">
                <input type="hidden" value="getsertif">
                <input type="submit" style="padding: 15px;margin-top:10px;border:none;background-color: #ffd70d;color:#1b529e;font-size: 1.2em;" value="Нажмите на кнопку, чтобы скачать сертификат">

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
    $('.demo-1').percentcircle();

    $('.demo-2').percentcircle({
        animate : false,
        diameter : 100,
        guage: 3,
        coverBg: '#fff',
        bgColor: '#efefef',
        fillColor: '#E95546',
        percentSize: '15px',
        percentWeight: 'normal'
    });

    $('.demo-3').percentcircle({
        animate : false,
        diameter : 100,
        guage: 3,
        coverBg: '#fff',
        bgColor: '#efefef',
        fillColor: '#DA4453',
        percentSize: '18px',
        percentWeight: 'normal'
    });
    $('.demo-4').percentcircle({
        animate : true,
        diameter : 100,
        guage: 3,
        coverBg: '#fff',
        bgColor: '#efefef',
        fillColor: '#1b529e',
        percentSize: '18px',
        percentWeight: 'normal'
    });
    $('.demo-5').percentcircle({
        animate : true,
        diameter : 100,
        guage: 3,
        coverBg: '#fff',
        bgColor: '#efefef',
        fillColor: '#8BC163',
        percentSize: '18px',
        percentWeight: '20px'
    });
    $('.demo-6').percentcircle({
        animate : true,
        diameter : 100,
        guage: 10,
        coverBg: '#fff',
        bgColor: '#efefef',
        fillColor: '#D870A9',
        percentSize: '18px',
        percentWeight: 'normal'
    });

</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>


