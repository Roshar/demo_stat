<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require_once __DIR__ . '/../vendor/autoload.php';

use app\Router;
use app\controllers\MainController;
use app\controllers\QuizController;

$myRouter = new Router();

$myRouter->get('/',[new MainController, 'index']);
$myRouter->get('/main',[new MainController, 'index']);
$myRouter->post('/',[new MainController, 'index']);
$myRouter->get('/main/test/1',[new MainController, 'test']);
$myRouter->post('/main/test/1',[new MainController, 'test']);
$myRouter->get('/main/test/2',[new MainController, 'test']);
$myRouter->post('/main/test/2',[new MainController, 'test']);
$myRouter->get('/main/notification/',[new MainController, 'notification']);
$myRouter->get('/main/test/start/1',[new QuizController, 'choiceMethod']);
$myRouter->get('/main/test/start/2',[new QuizController, 'choiceMethod']);
$myRouter->post('/main/test/start/1',[new QuizController, 'choiceMethod']);
$myRouter->post('/main/test/start/2',[new QuizController, 'choiceMethod']);
$myRouter->get('/main/test/finish/1', [new QuizController, 'finish']);
$myRouter->post('/main/test/finish/1', [new QuizController, 'finish']);
$myRouter->get('/main/test/finish/2', [new QuizController, 'finish']);
$myRouter->post('/main/test/finish/2', [new QuizController, 'finish']);

$myRouter->resolve();

