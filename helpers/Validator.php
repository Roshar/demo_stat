<?php


namespace app\helpers;

/**
 * Class Validator
 * @package app\helpers
 */
class Validator
{

    public $errors = [];

    /**
     * @param $data
     * @return bool
     */
    public function required($data)
    {

        return (!empty($data));

    }

    /**
     * @param $data
     * @return bool
     */
    public function email($data)
    {
        if (filter_var($data, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    /**
     * @param $val
     * @return bool
     */
    public function phone($val){
        if(preg_match("/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/s", $val)) {
            return true;
        }
        return false;
    }

    /**
     * @param $dataWithRules
     * @param $postData
     * @return array
     */
    function validateForm($dataWithRules, $postData)
    {

        $fields = array_keys($dataWithRules);

        foreach ($fields as $fieldName) {

            $fieldsData = $postData[$fieldName];
            $rules = $dataWithRules[$fieldName];

            foreach ($rules as $ruleName) {
                if (!$this->$ruleName($fieldsData)) {
                    $this->errors[$fieldName][] = $ruleName;
                }
            }
        }
       return $this->errors;
    }
}