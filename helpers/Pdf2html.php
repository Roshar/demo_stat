<?php


namespace app\helpers;


class Pdf2html
{

    public $firstname;
    public $lastname;
    public $schoolname;
    public $testname;

    public function __construct($firstname,$lastname,$schoolname,$testname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->schoolname = $schoolname;
        $this->testname = $testname;
        $this->p = $_SERVER['DOCUMENT_ROOT'];
    }

    public function __toString()
    {
        $html = <<<EOT
                    <style>

                          *{
                            margin: 0;
                            padding: 0;
                            font-family: 'Roboto', sans-serif;
                            font-weight: 300;
                            color: #2b2b2b;
                        }
                    
                        img{
                            max-width: 100%;
                        }
                    
                        .container{
                            width: 977px;
                            border: 5px solid #4D59A0;
                            margin:0 auto;
                            font-family: 'Open Sans', sans-serif;
                            color:#2a2a2a;
                        }
                        .wrapper-head{
                            width: 977px;
                            margin:0;
                            padding-top:10px;
                            /*border: 1px solid red;*/
                    
                        }
                        .wrapper-head .log{
                            height:90px;
                            width: 90px;
                            background-repeat: no-repeat;
                            background-size: contain;
                            background-image: url('/Applications/MAMP/htdocs/test/public/img/logo.png');
                            margin:0 auto;
                        }
                    
                        .title_institute h4{
                            text-align: center;
                            font-size: 12px;
                            margin:0;
                            font-family: 'Open Sans', sans-serif;
                            font-weight: 300;
                    
                        }

                        .wrapper-center h1,
                        .wrapper-center h2,
                        .wrapper-center h3,
                        .wrapper-center h4{
                            text-align:center;
                            margin:0;
                        }
                        .wrapper-center h1{
                            margin-top:30px;
                            font-size: 58px;
                            font-family: 'Open Sans', sans-serif;
                            font-weight: 400;
                        }
                    
                        .wrapper-center h4{
                            font-weight: 300;
                        }
                    
                        .wrapper-center h3{
                        margin-bottom: 20px;
                        }
                    
                        .wrapper-teacher-data1{
                            width: 977px;
                        }
                        .wrapper-teacher-data{
                            width: 800px;
                            margin:0 auto;
                        }
                        .wrapper-teacher-data h2{
                            text-align:center;
                            font-size: 30px;
                            margin:0;
                            border-bottom: 1px solid #ffd70d;
                        }
                    
                        .wrapper-teacher-data h3{
                            text-align:center;
                            font-size: 18px;
                            margin-bottom: 20px;
                            font-weight: 300;
                    
                        }
                    
                    
                        .wrapper-pre-footer{
                            display: block;
                            width: 977px;
                            /*border:1px solid red;*/
                            margin-top:30px;
                        }
                    
                        .wrapper-pre-footer:after {
                            content: "";
                            display: block;
                            clear: both;
                        }
                    
                        .block0{
                            width:90px;
                            padding-top:49px;
                            margin-left: 120px;
                            float: left;
                        }
                        .block-i{
                            width: 450px;
                            /*height:240px;*/
                            float: left;
                            position: relative;
                        }
                        .block1{
                            margin-left:150px;
                            width:350px;
                            position: absolute;
                            top:30px;
                        }
                    
                        .block3{
                            float: left;
                            padding-top:70px;
                            margin-left: 90px;
                        }
                    
                        .block3{
                            width: 150px;
                        }
                        .footer p{
                            text-align: center;
                            /*margin-top:10px;*/
                            padding-bottom: 10px;
                        }
                    
                    </style>
                    <body>
                    <div class="container">
                        <div class="wrapper-head">
                            <div class="log">
                    
                            </div>
                            <div class="title_institute">
                                <h4>Государственное бюджетное учреждение дополнительного профессионального образования</h4>
                                <h4 style="font-size: 1.2em">"Чеченский институт повышения квалификации работников образования"</h4>
                            </div>
                        </div>
                        <div class="wrapper-center">
                            <h1>СЕРТИФИКАТ</h1>
                            <h4>за прохождение диагностики педагогических компетенций</h4>
                            <h3>{$this->testname}</h3>
                        </div>
                        <div class="wrapper-teacher-data1">
                             <div class="wrapper-teacher-data">
                                <h2>{$this->lastname} {$this->firstname}</h2>
                                <h3>{$this->schoolname}</h3>
                            </div>
                        </div>
                    
                        <div class="wrapper-pre-footer">
                            <div class="block0">
                                <p>Ректор</p>
                            </div>
                            <div class="block-i">
                                <div class="block1">
                         <img src="/Applications/MAMP/htdocs/test/public/img/stamp1.png" alt="">
                                </div>
                            </div>
                    
                            <div class="block3">
                                Г.Б. Эльмурзаева
                            </div>
                        </div>
                        <div class="footer">
                        <p>Грозный, 2021</p>
                    </div>  
                    </div>
                    </body>
                    EOT;
        return $html;

    }
}