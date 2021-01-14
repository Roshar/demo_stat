<?php

namespace app\controllers;

use app\helpers\EmailSend;
use app\Router;
use app\models\Person;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use app\models\Preview;
use app\models\CommonTest;
use app\helpers\Validator;
use app\helpers\UtilHelper;
use app\helpers\Pdf2html;
use app\models\School;


class MainController
{
    /**
     * @param Router $router
     */
    public function index(Router $router)
    {
        unset ($_SESSION['mail']);
        unset ($_SESSION['area']);
        unset ($_SESSION['process']);
        unset ($_SESSION['firstname']);
        unset ($_SESSION['e_msg']);

        session_destroy();

        $postData = [
            'firstname' => '',
            'lastname' => '',
            'email' => '',
            'message' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $arrOption = [
                'firstname' => htmlspecialchars(trim($_POST['firstname'])),
                'lastname' => htmlspecialchars(trim($_POST['lastname'])),
                'email' => htmlspecialchars(trim($_POST['email'])),
                'message' => htmlspecialchars(trim($_POST['message'])),
            ];

            $sendler = new EmailSend('webrush@mail.ru','' ,'support_main',$arrOption);

            $sendler->start('support_main');

            $noticeMsg = include_once __DIR__.'/../lib/email_tmpl_message.php';

            $router->renderView('test_list/main',[
                'success' => $noticeMsg['support_main']
            ]);

            exit;
        }
        $router->renderView('test_list/main');
    }

    /**
     * @param Router $router
     */

    public function test(Router $router)
    {

        $preview = new Preview();
        $areas = $preview->getAreas();
        $positions = $preview->getAllPosition();
        $experience = $preview->getExperience();
        $errors = [];
        $urlPieceIndex = UtilHelper::urlSegments(3);
        require_once __DIR__.'/../lib/library.php';
        $urlPiece = checkUrl($urlPieceIndex);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $tblName = null;

            if(isset($_POST['getresults'])){

                $commonTest = new CommonTest();

                $tblName = $commonTest->getTestTableName($_POST['diagnosticId']); //получаем название нужной таблицы тестов

                if($tblName) {

                    $answers = $commonTest->getAllAnswers($tblName[0]['test_table_name'], $_POST['personId'], $_POST['area']); //получаем все значения у определенного респондента

                    $values = array_slice($answers[0], 1, -2);

                    $getAllValuesWhereHaveBadAnswers = UtilHelper::return_all_bad_answers($values);

                    $tmpBadAnswers = [];

                    foreach ($getAllValuesWhereHaveBadAnswers as $nameAnswer => $item) {

                        $tmpBadAnswers[] = $commonTest->getSources($nameAnswer, $tblName[0]['sources_tbl_name']);
                    }

                    $resultTotal = array_sum($values);  //сумма баллов

                    $generationFunctionForCalculate = 'calculate_' . $tblName[0]['test_table_name']; //заносим значение, для вызова ф-ии

                    $idFromFunctionCalculate = UtilHelper::$generationFunctionForCalculate($resultTotal); // вызываем необходимый метод

                    $recommendation = $commonTest->getAllRecommendation($idFromFunctionCalculate, $tblName[0]['test_table_name_results']);

                    $school = new School();

                    $schoolData = $school->getSchoolById($_POST['school']);

                    $schoolName = $schoolData[0]['school_name'];

                    $tblNameTitle = $tblName[0]['title'];

                    $percent = '';

                    if ($_POST['diagnosticId'] == 2) {
                        $percent = ($resultTotal / 108) * 100;
                    } elseif ($_POST['diagnosticId'] == 2) {
                        $percent = ($resultTotal / 57) * 100;
                    }

                    $postData['firstname'] = htmlspecialchars(trim($_POST['firstname']));
                    $postData['lastname']  = htmlspecialchars(trim($_POST['lastname']));
                    $postData['email']  = htmlspecialchars(trim($_POST['email']));
                    $postData['schoolname']  = $schoolName;
                    $postData['testname'] = $tblName[0]['title'];
                    $arrOption = [
                        'firstname' => htmlspecialchars(trim($_POST['firstname'])),
                        'lastname' => htmlspecialchars(trim($_POST['lastname'])),
                        'email' => htmlspecialchars(trim($_POST['email'])),
                        'schoolname' => htmlspecialchars(trim($_POST['email'])),
                        'testname' => $tblName[0]['title'],
                        'recommendation' => $recommendation[0]['text_finish'],
                        'percent' => $percent
                    ];

                    $sendPdf = new EmailSend($_POST['email'],$tblNameTitle,'certificate',$arrOption);

                    $sendPdf->start('certificate');

                    $_SESSION['notification'] = "certificate";

                    if(isset($_SESSION['notification'])){

                        header('Location: /main/notification/');

                    }
                }
            }

            if (!empty($_POST['formdata'])) {

                $validator = new Validator();

                $postData = [
                    'firstname' => trim($_POST['firstname']),
                    'lastname' => trim($_POST['lastname']),
                    'position' => intval($_POST['position']),
                    'experience' => intval($_POST['experience']),
                    'school' => intval($_POST['school']),
                    'area' => intval($_POST['area']),
                    'email' => trim(mb_strtolower($_POST['email'])),
                    'phone' => trim($_POST['phone']),
                    'agree' => intval($_POST['agree'])

                ];

                $rules = [
                    'firstname' => ['required'],
                    'lastname' => ['required'],
                    'position' => ['required'],
                    'experience' => ['required'],
                    'school' => ['required'],
                    'area' => ['required'],
                    'email' => ['required', 'email'],
                    'phone' => ['required', 'phone'],
                    'agree' => ['required']
                ];

                $errors = $validator->validateForm($rules, $postData);

                if (empty($errors)) {
                    $person = new Person();
                    $uniqPersonData = $person->checkPersonUniqByEmail($postData, $urlPieceIndex);

                    if (empty($uniqPersonData)) {

                        $_SESSION = [
                            'email' => $postData['email'],
                            'firstname' => $postData['firstname'],
                            'lastname' => $postData['lastname'],
                            'position' => $postData['position'],
                            'experience' => $postData['experience'],
                            'area' => $postData['area'],
                            'school' => $postData['school'],
                            'phone' => $postData['phone'],
                            'agree' => $postData['agree'],
                            'process' => 1 // для невозможности возврата после редиректа
                        ];

                        header('Location:/main/test/start/' . $urlPieceIndex);
                    }else{

                        $uniq['uniq'] = 1;

                        $router->renderView('test_list/'.$urlPiece, [
                            'personId' => $uniqPersonData['id_person'],
                            'area' => $postData['area'],
                            'errors' => $errors,
                            'positions' => $positions,
                            'experience' => $experience,
                            'uniq' => $uniq,
                            'email' => $postData['email'],
                            'firstname' => $postData['firstname'],
                            'lastname' => $postData['lastname'],
                            'schoolId' => $postData['school'],
                            'diagnosticId' => $urlPieceIndex //id диагностики/тестирования в таблице tests_title
                        ]);
                        exit;
                    }
                }else{
                    echo "errors";
                    exit;
                }
            }
            include_once __DIR__.'/../lib/ajax.php';
        }
            $router->renderView('test_list/'.$urlPiece, [
                'areas' => $areas,
                'errors' => $errors,
                'positions' => $positions,
                'experience' => $experience
            ]);
    }

    public function notification(Router $router)
    {
        if(isset($_SESSION['notification'])){
            $router->renderView('test_list/notification_email');
        }else{
            header('Location: /');
        }

    }

}