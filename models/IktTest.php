<?php


namespace app\models;



class IktTest extends CommonTest
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
    public int $person_id;
    public int $area_id;
    public int $test_id;

    /**
     * @param array $data
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
        $this->person_id = $personId;
        $this->area_id = $data['area_id'];
        $this->test_id = $testId;
    }


    /**
     * @return string
     */
    public function save()
    {
        $tbname = $this->getTestNameByIdFromController($this->test_id);

        $test_tbl_name = $tbname[0]['test_table_name'];

        $sql = "INSERT INTO ".$test_tbl_name.
            " (1_t, 2_t, 3_t, 4_t, 5_t, 6_t, 7_t, 8_t, 9_t, 10_t, 11_t, 12_t, 13_t, 14_t, 15_t, 16_t, 17_t, 18_t, 19_t, person_id, area_id)
        VALUES (:1_t, :2_t, :3_t, :4_t, :5_t, :6_t, :7_t, :8_t, :9_t, :10_t,:11_t,:12_t,:13_t,:14_t,:15_t,:16_t,:17_t,:18_t,
        :19_t, :person_id, :area_id)";

        $res = $this->dbo->insertInDB($this,$sql,[
            ':1_t' => $this->a1,':2_t' => $this->a2,':3_t' => $this->a3,':4_t' => $this->a4,':5_t' => $this->a5,
            ':6_t' => $this->a6,':7_t' => $this->a7,':8_t' => $this->a8,':9_t' => $this->a9,':10_t' => $this->a10,
            ':11_t' => $this->a11,':12_t' => $this->a12,':13_t' => $this->a13,':14_t' => $this->a14,':15_t' => $this->a15,
            ':16_t' => $this->a16,':17_t' => $this->a17,':18_t' => $this->a18,':19_t' => $this->a19,':person_id'=>$this->person_id, ':area_id' => $this->area_id
        ]);

        if(!empty($data['20'])){

            foreach ($data['20'] as $k => $item){
                $sql1 = '';
                $num = "20_t";
                $sql1 = "INSERT INTO additionally_ikt_sub_table (add_id,question_num,resource_name)
                     VALUES (:add_id,:question_num,:resource_name)";
                $this->dbo->insertInDB($this,$sql1,[
                    ':add_id' => $res,
                    ':question_num' => $num,
                    ':resource_name' => $item
                ]);

            }

        }

        if(!empty($data['21'])){

            foreach ($data['21'] as $k => $item){
                $sql2 = '';
                $num = "21_t";
                $sql2 = "INSERT INTO additionally_ikt_sub_table (add_id,question_num,resource_name)
                     VALUES (:add_id,:question_num,:resource_name)";
                $this->dbo->insertInDB($this,$sql2,[
                    ':add_id' => $res,
                    ':question_num' => $num,
                    ':resource_name' => $item
                ]);
            }
        }

        if(!empty($data['22'])){

            foreach ($data['22'] as $k => $item){
                $sql3 = '';
                $num = "22_t";
                $sql3 = "INSERT INTO additionally_ikt_sub_table (add_id,question_num,resource_name)
                     VALUES (:add_id,:question_num,:resource_name)";
                $this->dbo->insertInDB($this,$sql3,[
                    ':add_id' => $res,
                    ':question_num' => $num,
                    ':resource_name' => $item
                ]);
            }
        }

        if(!empty($data['23'])){

            foreach ($data['23'] as $k => $item){
                $sql4 = '';
                $num = "23_t";
                $sql4 = "INSERT INTO additionally_ikt_sub_table (add_id,question_num,resource_name)
                     VALUES (:add_id,:question_num,:resource_name)";
                $this->dbo->insertInDB($this,$sql4,[
                    ':add_id' => $res,
                    ':question_num' => $num,
                    ':resource_name' => $item
                ]);
            }
        }

        if(!empty($data['24'])){

            foreach ($data['24'] as $k => $item){
                $sql5 = '';
                $num = "24_t";
                $sql5 = "INSERT INTO additionally_ikt_sub_table (add_id,question_num,resource_name)
                     VALUES (:add_id,:question_num,:resource_name)";
                $this->dbo->insertInDB($this,$sql5,[
                    ':add_id' => $res,
                    ':question_num' => $num,
                    ':resource_name' => $item
                ]);
            }
        }

        if(!empty($data['25'])){

            foreach ($data['25'] as $k => $item){
                $sql6 = '';
                $num = "25_t";
                $sql6 = "INSERT INTO additionally_ikt_sub_table (add_id,question_num,resource_name)
                     VALUES (:add_id,:question_num,:resource_name)";
                $this->dbo->insertInDB($this,$sql6,[
                    ':add_id' => $res,
                    ':question_num' => $num,
                    ':resource_name' => $item
                ]);
            }
        }

        return $res;
    }


}