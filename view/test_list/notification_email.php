<style>
    *{
        margin: 0;
        padding: 0;
    }
    .container {
        width:100%;
        background-color: #1b529e;

    }
    .main{
        width: 1200px;
        margin: 0 auto;
        text-align: center;
        min-height: 100vh;
        position: relative;
    }


    .letter-img{
        position: absolute;
        top:30vh;
        background-repeat: no-repeat;
        background-size: contain;
        background-image: url("/img/pngwin.png");
        opacity: 0.5;
        width: 500px;
        height:500px;
    }

    .msg-block {
        padding: 60px;
    }
    .msg-block h1{
        font-size: 4em;
        color: white;
        padding-bottom: 30px;
    }
    .msg-block a {
        color: #f1f7ff;
        text-decoration: none;
        font-size: 1.5em;
    }
</style>

<div class="container">
    <div class="main">
        <div class="letter-img">
            <div class="letter-area"></div>
        </div>
        <?php $messageArray = include_once __DIR__ . '/../../lib/email_tmpl_message.php';?>
        <?php if(isset($_SESSION['notification'])):?>
        <?php
            $keyName = $_SESSION['notification'];
        ?>
        <div class="msg-block">
            <?=$messageArray[$keyName];?>
        </div>
        <?php endif;?>
    </div>
</div>
