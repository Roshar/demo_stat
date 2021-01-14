<?php


namespace app\models;

/**
 * Class EduTest
 * @package app\models
 */
class EduTest extends CommonTest
{

    public  $a1 = null;
    public  $a2 = null;
    public  $a3 = null;
    public  $a4 = null;
    public  $a5 = null;
    public  $a6 = null;
    public  $a7 = null;
    public  $a8 = null;
    public  $a9 = null;
    public  $a10 = null;
    public  $a11 = null;
    public  $a12 = null;
    public  $a13 = null;
    public  $a14 = null;
    public  $a15 = null;
    public  $a16 = null;
    public  $a17 = null;
    public  $a18 = null;
    public  $a19 = null;
    public  $a20 = null;
    public  $a21 = null;
    public  $a22 = null;
    public  $a23 = null;
    public  $a24 = null;
    public  $a25 = null;
    public  $a26 = null;
    public  $a27 = null;
    public  $a28 = null;
    public  $a29 = null;
    public  $a30 = null;
    public  $a31 = null;
    public  $a32 = null;
    public  $a33 = null;
    public  $a34 = null;
    public  $a35 = null;
    public  $a36 = null;
    public int $person_id;
    public int $area_id;
    public int $test_id;

    /**
     * @param array $data
     * @param int $personId
     * @param int $testId
     */
    public function load(array $data, int $personId, int $testId) //$data,$personId,$test_id
    {
        $this->a1 = $data['1'] - 1;
        $this->a2 = $data['2'] - 1;
        $this->a3 = $data['3'] - 1 ;
        $this->a4 = $data['4'] - 1;
        $this->a5 = $data['5'] - 1;
        $this->a6 = $data['6'] - 1;
        $this->a7 = $data['7'] - 1;
        $this->a8 = $data['8'] - 1;
        $this->a9 = $data['9'] - 1;
        $this->a10 = $data['10'] - 1;
        $this->a11 = $data['11'] - 1;
        $this->a12 = $data['12'] - 1;
        $this->a13 = $data['13'] - 1;
        $this->a14 = $data['14'] - 1;
        $this->a15 = $data['15'] - 1;
        $this->a16 = $data['16'] - 1;
        $this->a17 = $data['17'] - 1;
        $this->a18 = $data['18'] - 1;
        $this->a19 = $data['19'] - 1;
        $this->a20 = $data['20'] - 1;
        $this->a21 = $data['21'] - 1;
        $this->a22 = $data['22'] - 1;
        $this->a23 = $data['23'] - 1;
        $this->a24 = $data['24'] - 1;
        $this->a25 = $data['25'] - 1;
        $this->a26 = $data['26'] - 1;
        $this->a27 = $data['27'] - 1;
        $this->a28 = $data['28'] - 1;
        $this->a29 = $data['29'] - 1;
        $this->a30 = $data['30'] - 1;
        $this->a31 = $data['31'] - 1;
        $this->a32 = $data['32'] - 1;
        $this->a33 = $data['33'] - 1;
        $this->a34 = $data['34'] - 1;
        $this->a35 = $data['35'] - 1;
        $this->a36 = $data['36'] - 1;
        $this->person_id = $personId;
        $this->area_id = $data['area_id'];
        $this->test_id = $testId;
    }

    /**
     * @return string
     */
    function save()
    {
        $tbname = $this->getTestNameByIdFromController($this->test_id);

        $test_tbl_name = $tbname[0]['test_table_name'];

        $sql = "INSERT INTO ".$test_tbl_name.
            " (1_t, 2_t, 3_t, 4_t, 5_t, 6_t, 7_t, 8_t, 9_t, 10_t, 11_t, 12_t, 13_t, 14_t, 15_t, 16_t, 17_t, 18_t, 19_t, 20_t,
21_t, 22_t, 23_t, 24_t, 25_t, 26_t, 27_t, 28_t, 29_t, 30_t, 31_t, 32_t, 33_t, 34_t, 35_t, 36_t, person_id, area_id)
        VALUES (:1_t, :2_t, :3_t, :4_t, :5_t, :6_t, :7_t, :8_t, :9_t, :10_t,:11_t,:12_t,:13_t,:14_t,:15_t,:16_t,:17_t,:18_t,
        :19_t, :20_t, :21_t, :22_t, :23_t, :24_t, :25_t, :26_t, :27_t, :28_t, :29_t, :30_t, :31_t, :32_t, :33_t, :34_t, :35_t, :36_t, :person_id, :area_id)";

        $res = $this->dbo->insertInDB($this,$sql,[
            ':1_t' => $this->a1,':2_t' => $this->a2,':3_t' => $this->a3,':4_t' => $this->a4,':5_t' => $this->a5,
            ':6_t' => $this->a6,':7_t' => $this->a7,':8_t' => $this->a8,':9_t' => $this->a9,':10_t' => $this->a10,
            ':11_t' => $this->a11,':12_t' => $this->a12,':13_t' => $this->a13,':14_t' => $this->a14,':15_t' => $this->a15,
            ':16_t' => $this->a16,':17_t' => $this->a17,':18_t' => $this->a18,':19_t' => $this->a19,':20_t' => $this->a20,
            ':21_t' => $this->a21,':22_t' => $this->a22,':23_t' => $this->a23,':24_t' => $this->a24,':25_t' => $this->a25,
            ':26_t' => $this->a26,':27_t' => $this->a27,':28_t' => $this->a28,':29_t' => $this->a29,':30_t' => $this->a30,
            ':31_t' => $this->a31,':32_t' => $this->a32,':33_t' => $this->a33,':34_t' => $this->a34,':35_t' => $this->a35,
            ':36_t' => $this->a36,':person_id'=>$this->person_id, ':area_id' => $this->area_id
        ]);


        return $res;
    }

}