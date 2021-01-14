<?php

if (isset($_POST['area'])) {
    $schools = $preview->getSchoolsById((int)$_POST['area']);
    if (!empty($schools)) {
        echo "<select name='school' id='school' class='valid'>";
        foreach ($schools as $school):
            echo " <option  value='" . $school['id_school'] . "'> " . $school['school_name'] . "</option>";
        endforeach;
        exit();
    } else {
        echo "<select id='school'>
                    <option value='0'> Выберите школу</option>
                  </select>";
        exit();
    }
} else {
    echo "<select id='school'>
                    <option value='0'> Выберите школу</option>
                  </select>";
    exit();
}