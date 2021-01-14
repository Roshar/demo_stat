<?php


namespace app\models;
use app\Database;
use app\models\CommonTest;

/**
 * Class Person
 * @package app\models
 */

class Person
{
    public Database $dbo;
    public ?string $firstname = null;
    public ?string $lastname = null;
    public ?string $email = null;
    public ?string $phone = null;
    public ?int $position_id = null;
    public ?int $area_id = null;
    public ?int $school_id = null;
    public ?int $experience_id = null;
    public  $id_test = null;
    public ?array $tblName = null;

    public function load($data)
    {
            $this->firstname = $data['firstname'];
            $this->lastname = $data['lastname'];
            $this->email= $data['email'];
            $this->phone= $data['phone'];
            $this->position_id= $data['position_id'];
            $this->area_id= $data['area_id'];
            $this->school_id= $data['school_id'];
            $this->experience_id= $data['experience_id'];
            $this->id_test= $data['test_id'];
            $this->tblName = $this->getAllListPersonTableName($data['area_id']);
    }

    /**
     * @return string
     */
    public function save()
    {

        $person_table_title = $this->tblName[0]['person_table_title'];

        $sql = "INSERT INTO ".$person_table_title.
            " (firstname, lastname, email, 	phone, position_id, area_id, school_id, experience_id, test_id)
         VALUES (:one, :two, :three,:four,:five, :six, :seven, :eight, :nine)";


        return $this->dbo->insertInDB($this,$sql,[
            ':one' => $this->firstname,
            ':two' => $this->lastname,
            ':three' => $this->email,
            ':four' => $this->phone,
            ':five' => $this->position_id,
            ':six' => $this->area_id,
            ':seven' => $this->school_id,
            ':eight' => $this->experience_id,
            ':nine' => $this->id_test
        ]);

    }

    /**
     * Person constructor.
     */
    public function __construct()
    {
        $this->dbo = Database::$db;
    }

    /**
     * @param $area
     * @return array
     */
    public function getAllListPersonTableName($area)
    {

        $result = $this->dbo->getDatasById('person_schema_relationship','area_id',$area);
        return $result;
    }

    /**
     * @param $data
     * @param $idTest
     * @return array|bool
     */
    public function checkPersonUniqByEmail($data, $idTest)
    {
        $tblName = $this->getAllListPersonTableName($data['area']);

        $personEmail = $data['email'];

        $person_table_title = $tblName[0]['person_table_title'];

        $id = $idTest;

        $sql1 = "SELECT * FROM ".$person_table_title." WHERE email = :email AND test_id = :test_id";


        $res = $this->dbo->getDataBySqlString($sql1,[':email' => $personEmail, ':test_id' => $idTest],$option='fetch');

        $tbnameTest = '';

        if (!empty($res)) {

            $tbnameTest = CommonTest::getTestTableName($id);

            $testtblname = $tbnameTest[0]['test_table_name'];

            $sql2 = "SELECT * FROM " . $testtblname . " WHERE person_id = :person_id AND area_id = :area_id";
            $result = $this->dbo->getDataBySqlString($sql2,[':person_id' => $res['id_person'], ':area_id' => $data['area']],$option='fetch');

            if($result){
                return [
                    'id_person' =>  $res['id_person'],
                    'school_id' =>  $res['school_id']
                ];

            }
            return false;
        }
        return false;

    }

}