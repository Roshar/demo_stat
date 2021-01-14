<?php


namespace app\helpers;

/**
 * Class UtilHelper
 * @package app\helpers
 */
class UtilHelper
{
    /**
     * @param $index
     * @return |null
     */
    public static function urlSegments($index)
    {
        $path = $_SERVER['PATH_INFO'] ?? '/';
        $result = explode('/', $path);
        return $result[$index] ?? null;
    }



//название функции соответсвуеет названию таблицы тестов по которой проводится вычисления

//calculate ==
    /**
     * @param $totalVal
     * @return bool|int
     */
    public static function calculate_action_teacher_best($totalVal)
    {
        if ($totalVal <= 42) {
            return 1;
        } else if ($totalVal >= 43 && $totalVal <= 82) {
            return 2;
        } else if ($totalVal >= 83 && $totalVal <= 108) {
            return 3;
        } else {
            return false;
        }
    }

    /**
     * @param $totalVal
     * @return bool|int
     */
    public static function calculate_action_ikt_grammar_part($totalVal)
    {
        if ($totalVal <= 18) {
            return 1;
        } else if ($totalVal >= 19 && $totalVal <= 37) {
            return 2;
        } else if ($totalVal >= 38 && $totalVal <= 57) {
            return 3;
        } else {
            return false;
        }
    }

    /**
     * @param $value
     * @return bool
     */
    public function filterArrayByValue($value)
    {
        return ($value == 0);
    }

    /**
     * @param $answers
     * @return array
     */
    public static function return_all_bad_answers($answers)
    {
        $filteredArray = array_filter($answers, function ($val){
            return ($val == 0);
        });
        return $filteredArray;
    }

    /**
     * @param $n
     * @return string
     */
    public static function randomString($n)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $str = '';
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $str .= $characters[$index];
        }
        return $str;
    }

}