<?php


namespace app\controllers;
use app\models\CommonTest;
use app\models\IktTest;
use app\Router;
use app\helpers\UtilHelper;
use app\helpers\Validator;
use app\models\School;
use app\models\Person;
use app\helpers\Pdf2html;
use app\models\EduTest;


/**
 * Class QuizController
 * @package app\controllers
 */
class QuizController
{

    public array $containerMethods = [];
    public $firstname;
    public $lastname;
    public $phone;
    public $email;
    public $school_id;
    public $position_id;
    public $area_id;
    public $school_name;
    public $position_name;
    public $experience_id;
    public $id_test;


    /**
     * QuizController constructor.
     */
    public function __construct()
    {
        if(isset($_SESSION) && !empty($_SESSION['email']) && !empty($_SESSION['area']) && $_SESSION['process'] == 1){
            $school = new School();
            $this->firstname = $_SESSION['firstname'];
            $this->lastname = $_SESSION['lastname'];
            $this->phone = $_SESSION['phone'];
            $this->email = $_SESSION['email'];
            $this->school_id = $_SESSION['school'];
            $this->position_id = $_SESSION['position'];
            $this->area_id = $_SESSION['area'];
            $this->school_name = $school->getSchoolById($_SESSION['school']);
            $this->position_name = $school->getPositionById($_SESSION['position']);
            $this->experience_id = $_SESSION['experience'];
            $this->id_test = UtilHelper::urlSegments(4);
            $_SESSION['test_id'] = $this->id_test;
            $this->containerMethods = [ 1 => 'quizIkt', 2 => 'quizEdu'];
        }

    }

    /**
     * choice Method by Url and action
     */
    public function choiceMethod(Router $router)
    {
        $method = $this->containerMethods[$this->id_test];
        $this->$method($router);
    }

    /**
     * @param Router $router
     */
    public function quizIkt(Router $router)
    {


        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $answ1 = '';
            $answ2 = '';
            $answ3 = '';
            $answ4 = '';
            $answ5 = '';
            $answ6 = '';

            if(!isset($_POST['data20']) || empty($_POST['data20'])){
                $answ1 = ['пусто'];
            }else{
                $answ1 = $_POST['data20'];
            }
            if(!isset($_POST['data21']) || empty($_POST['data21'])){
                $answ2 = ['пусто'];
            }else{
                $answ2 = $_POST['data21'];
            }

            if(!isset($_POST['data22']) || empty($_POST['data22'])){
                $answ3 = ['пусто'];
            }else{
                $answ3 = $_POST['data22'];
            }

            if(!isset($_POST['data23']) || empty($_POST['data23'])){
                $answ4 = ['пусто'];
            }else{
                $answ4 = $_POST['data23'];
            }
            if(!isset($_POST['data24']) || empty($_POST['data24'])){
                $answ5 = ['пусто'];
            }else{
                $answ5 = $_POST['data24'];
            }
            if(!isset($_POST['data25']) || empty($_POST['data25'])){
                $answ6 = ['пусто'];
            }else{
                $answ6 = $_POST['data25'];
            }

            $postData = [
                'firstname' => ($_POST['firstname']),
                'lastname' => trim($_POST['lastname']),
                'email' => trim($_POST['email']),
                'phone' => trim($_POST['phone']),
                'position_id' => intval($_POST['position_id']),
                'experience_id' => intval($_POST['experience_id']),
                'school_id' => intval($_POST['school_id']),
                'area_id' => intval($_POST['area_id']),
                'test_id' => intval($this->id_test),               // -- - - - - - -- - id проекта из таблицы  test_title
                /// ответы
                '1' => $_POST['1'], '2' => $_POST['2'], '3' => $_POST['3'], '4' => $_POST['4'], '5' => $_POST['5'],
                '6' => $_POST['6'], '7' => $_POST['7'], '8' => $_POST['8'], '9' => $_POST['9'], '10' => $_POST['10'],
                '11' => $_POST['11'], '12' => $_POST['12'], '13' => $_POST['13'],'14' => $_POST['14'], '15' => $_POST['15'],
                '16' => $_POST['16'], '17' => $_POST['17'], '18' => $_POST['18'], '19' => $_POST['19'],'20' => $answ1,
                '21' => $answ2, '22' => $answ3, '23' => $answ4, '24' => $answ5, '25' => $answ6
            ];

            $rules = [
                'firstname' => ['required'],
                'lastname' => ['required'],
                'position_id' => ['required'],
                'experience_id' => ['required'],
                'school_id' => ['required'],
                'area_id' => ['required'],
                'test_id' => ['required'],
                'phone' => ['required', 'phone'],
                'email' => ['required','email'],
                '1' => ['required'],'2' => ['required'],'3' => ['required'],'4' => ['required'],'5' => ['required'],
                '6' => ['required'],'7' => ['required'],'8' => ['required'],'9' => ['required'],'10' => ['required'],
                '11' => ['required'],'12' => ['required'],'13' => ['required'],'14' => ['required'],'15' => ['required'],
                '16' => ['required'],'17' => ['required'],'18' => ['required'],'19' => ['required'],
            ];
            $validator = new Validator();

            $errors = $validator->validateForm($rules, $postData);


            if(empty($errors)){

                $person = new Person();
                $person->load($postData);
                $personId = $person->save();
                $itest = new IktTest();
                $itest->load($postData,$personId,$this->id_test);
                $testData = $itest->save();

                if($testData){

                    $_SESSION['person_id'] = $personId;
                    if(isset($_SESSION['test_id'])
                        && isset($_SESSION['test_id'])
                        && isset($_SESSION['person_id'])){
                        $_SESSION['process'] = null;
                        header('Location:/main/test/finish/'.$this->id_test);
                        exit;
                    }else{
                        header('Location:/');
                        exit;
                    }

                }

            }else{

                $router->renderView('test_list/ikt_grammar', ['school_name' => $this->school_name,
                    'firstname' => $this->firstname,
                    'lastname' => $this->lastname,
                    'phone' => $this->phone,
                    'email' => $this->email,
                    'position_name' => $this->position_name,
                    'position_id' => $this->position_id,
                    'school_id' => $this->school_id,
                    'area_id' => $this->area_id,
                    'experience_id' => $this->experience_id,
                    'errors' => $errors]);
                exit;
            }
        }

        $router->renderView('test_list/ikt_grammar', ['school_name' => $this->school_name,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'phone' => $this->phone,
            'email' => $this->email,
            'position_name' => $this->position_name,
            'position_id' => $this->position_id,
            'school_id' => $this->school_id,
            'area_id' => $this->area_id,
            'experience_id' => $this->experience_id]);

        exit;
    }

    /**
     * @param Router $router
     */
    public function quizEdu(Router $router)
    {

        if(isset($_SESSION) && !empty($_SESSION['email']) && !empty($_SESSION['area']) && $_SESSION['process'] == 1){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $postData = [
                    'firstname' => ($_POST['firstname']),
                    'lastname' => trim($_POST['lastname']),
                    'email' => trim($_POST['email']),
                    'phone' => trim($_POST['phone']),
                    'position_id' => intval($_POST['position_id']),
                    'experience_id' => intval($_POST['experience_id']),
                    'school_id' => intval($_POST['school_id']),
                    'area_id' => intval($_POST['area_id']),
                    'test_id' => $this->id_test,               // -- - - - - - -- - id проекта из таблицы  test_title
                    /// ответы
                    '1' => $_POST['1'], '2' => $_POST['2'], '3' => $_POST['3'], '4' => $_POST['4'], '5' => $_POST['5'],
                    '6' => $_POST['6'], '7' => $_POST['7'], '8' => $_POST['8'], '9' => $_POST['9'], '10' => $_POST['10'],
                    '11' => $_POST['11'], '12' => $_POST['12'], '13' => $_POST['13'],'14' => $_POST['14'], '15' => $_POST['15'],
                    '16' => $_POST['16'], '17' => $_POST['17'], '18' => $_POST['18'], '19' => $_POST['19'], '20' => $_POST['20'],
                    '21' => $_POST['21'], '22' => $_POST['22'], '23' => $_POST['23'], '24' => $_POST['24'], '25' => $_POST['25'],
                    '26' => $_POST['26'], '27' => $_POST['27'], '28' => $_POST['28'], '29' => $_POST['29'], '30' => $_POST['30'],
                    '31' => $_POST['31'], '32' => $_POST['32'], '33' => $_POST['33'], '34' => $_POST['34'], '35' => $_POST['35'],
                    '36' => $_POST['36'],
                ];

                $rules = [
                    'firstname' => ['required'],
                    'lastname' => ['required'],
                    'position_id' => ['required'],
                    'experience_id' => ['required'],
                    'school_id' => ['required'],
                    'area_id' => ['required'],
                    'test_id' => ['required'],
                    'phone' => ['required', 'phone'],
                    'email' => ['required','email'],
                    '1' => ['required'],'2' => ['required'],'3' => ['required'],'4' => ['required'],'5' => ['required'],
                    '6' => ['required'],'7' => ['required'],'8' => ['required'],'9' => ['required'],'10' => ['required'],
                    '11' => ['required'],'12' => ['required'],'13' => ['required'],'14' => ['required'],'15' => ['required'],
                    '16' => ['required'],'17' => ['required'],'18' => ['required'],'19' => ['required'],'20' => ['required'],
                    '21' => ['required'],'22' => ['required'],'23' => ['required'],'24' => ['required'],'25' => ['required'],
                    '26' => ['required'],'27' => ['required'],'28' => ['required'],'29' => ['required'],'30' => ['required'],
                    '31' => ['required'],'32' => ['required'],'33' => ['required'],'34' => ['required'],'35' => ['required'],
                    '36' => ['required']
                ];



                $validator = new Validator();

                $errors = $validator->validateForm($rules, $postData);

                if(empty($errors)){
                    $person = new Person();
                    $person->load($postData);
                    $personId = $person->save();
                    $edutest = new EduTest();
                    $edutest->load($postData,$personId,$this->id_test);
                    $testData = $edutest->save();

                    if($testData){
                        $_SESSION['person_id'] = $personId;
                        if(isset($_SESSION['test_id'])
                            && isset($_SESSION['test_id'])
                            && isset($_SESSION['person_id'])){
                            $_SESSION['process'] = null;
                            header('Location:/main/test/finish/'.$this->id_test);
                            exit;
                        }else{
                            header('Location:/');
                            exit;
                        }

                    }

                }else{

                    $router->renderView('test_list/teacher_best', ['school_name' => $this->school_name,
                        'firstname' => $this->firstname,
                        'lastname' => $this->lastname,
                        'phone' => $this->phone,
                        'email' => $this->email,
                        'position_name' => $this->position_name,
                        'position_id' => $this->position_id,
                        'school_id' => $this->school_id,
                        'area_id' => $this->area_id,
                        'experience_id' => $this->experience_id,
                        'errors' => $errors]);
                    exit;
                }
            }

            $router->renderView('test_list/teacher_best', ['school_name' => $this->school_name,
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'phone' => $this->phone,
                'email' => $this->email,
                'position_name' => $this->position_name,
                'position_id' => $this->position_id,
                'school_id' => $this->school_id,
                'area_id' => $this->area_id,
                'experience_id' => $this->experience_id]);

            exit;

        }else{
            header('Location:/');
            exit;
        }
    }

    /**
     * @param Router $router
     */
    public function finish(Router $router)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $postData = [
                    'firstname' => trim($_POST['firstname']),
                    'lastname' => trim($_POST['lastname']),
                    'testname' => trim($_POST['testname']),
                    'schoolname' => trim($_POST['schoolname']),
                ];
                $rules = [
                    'firstname' => ['required'],
                    'lastname' => ['required'],
                    'testname' => ['required'],
                    'schoolname' => ['required']
                ];
                $validator = new Validator();

                $errors = $validator->validateForm($rules, $postData);

                if(empty($errors)){
                    try{
                        $mpdf = new \Mpdf\Mpdf([
                            'mode' => 'utf-8',
                            'format' => 'A4-L',
                            'orientation' => 'L'
                        ]);

                        $pdfParams = new Pdf2html($postData['firstname'],$postData['lastname'],$postData['schoolname'],$postData['testname']);

                        $mpdf->showImageErrors = true;
                        $mpdf->debug = true;
                        $mpdf->WriteHTML( $pdfParams);
                        $mpdf->Output('certificate.pdf', 'D');
                    }catch (\Mpdf\MpdfException $e){
                        echo $e->getMessage();
                    }

                header('Location:/');

                }
        }

        if(!empty($_SESSION['test_id']) && !empty($_SESSION['person_id']) && !empty($_SESSION['area']) ) {

            $commonTest = new CommonTest();

            $tblName = $commonTest->getTestTableName($_SESSION['test_id']); //получаем название нужной таблицы тестов

            if($tblName){

            $dataRes = '';

                $answers = $commonTest->getAllAnswers($tblName[0]['test_table_name'],$_SESSION['person_id'],$_SESSION['area']); //получаем все значения у определенного респондента

                $values = array_slice($answers[0], 1, -2);

                $getAllValuesWhereHaveBadAnswers = UtilHelper::return_all_bad_answers($values);

                $tmpBadAnswers = [];

                foreach ($getAllValuesWhereHaveBadAnswers as $nameAnswer => $item){

                    $tmpBadAnswers[] = $commonTest->getSources($nameAnswer,$tblName[0]['sources_tbl_name']);
                }

                $resultTotal = array_sum($values);  //получаем сумму

                $generationFunctionForCalculate = 'calculate_'.$tblName[0]['test_table_name']; //заносим значение, для вызова ф-ии

                $idFromFunctionCalculate = UtilHelper::$generationFunctionForCalculate($resultTotal); // вызываем необходимый метод

                $allRecommendation = $commonTest->getAllRecommendation($idFromFunctionCalculate,$tblName[0]['test_table_name_results']);   //получаем рекомендации по названию таблицы и полученному id из библиотеки calculate

                if ($allRecommendation){

                    if(isset($_SESSION['firstname'])){
                        $school = new School();
                        $firstname = $_SESSION['firstname'];
                        $lastname = $_SESSION['lastname'];
                        $school_name = $school->getSchoolById($_SESSION['school']);
                        $percent = '';
                        if(isset($_SESSION['test_id']) && $_SESSION['test_id'] == 2){
                            $percent = ($resultTotal / 108 ) * 100;
                        }elseif (isset($_SESSION['test_id']) && $_SESSION['test_id'] == 1){
                            $percent = ($resultTotal / 57 ) * 100;
                        }

                        $router->renderView('test_list/item2res', ['school_name' => $school_name,
                            'firstname' => $firstname,
                            'lastname' => $lastname,
                            'present' => $percent,
                            'testname' => $tblName,
                            'recommendation' => $allRecommendation,
                            'badAnswers' => $tmpBadAnswers,
                            'experience_id' => $this->experience_id]);
                        exit;
                    }

                }else{
                    header('Location:/');
                    exit;
                }

            }else{
                echo "tblname not exists";
            }

        }else {
            header('Location:/');
            exit;
        }
    }


}