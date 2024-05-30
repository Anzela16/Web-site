<?php
define('DB_SERVER', 'localhost');
define('DB_DATABASE', 'Errins_Anzela');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE)
            or die("Ошибка " . mysqli_error($db));
?>


<!-- // function sqlDef($val) {
//     /*var_dump($db);
//     $dbData = mysqli_real_escape_string($db, $val);*/
//     if($val == '') {
//         return 'NULL';
//     } else {
//         return $val;
//     }
// }

// function startsWith($str, $start) {
//      $length = strlen($start);
//      return (substr($str, 0, $length) === $start);
// }

// function endsWith($str, $end) {
//     $length = strlen($end);
//     if ($length == 0) {
//         return true;
//     }

//     return (substr($str, -$length) === $end);
// }

// function get_service_type($id) {
//     switch ($id) {
//         case '1':
//             return "Интернет";
//         case '2':
//             return "Телевизор";
//         case '3':
//             return "Телефон";
//         default:
//             return "Другое";
//     }
// }

// function get_tariff_type($id) {
//     switch ($id) {
//         case '1':
//             return "физических лиц";
//         case '2':
//             return "юридических лиц";
//         default:
//             return "общий";
//     }
// }

// function cut_date($date) {
//     $date_full = explode("-", $date);
//     return $date_full[1] . "-" . $date_full[0];
// }

// function normalize_date($date) {
//     $date_full = explode("-", $date);
//     return $date_full[2] . "-" . $date_full[1] . "-" . $date_full[0];
// }

// function randomPassword($len) {
//     $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
//     $pass = array();
//     $alphaLength = strlen($alphabet) - 1;
//     for ($i = 0; $i < $len; $i++) {
//         $n = rand(0, $alphaLength);
//         $pass[] = $alphabet[$n];
//     }
//     return implode($pass);
// }

// function translateWords($word) {
//     switch ($word) {
//         case 'first_name':
//             return 'Имя';
//         case 'second_name':
//             return 'Фамилия';
//         case 'middle_name':
//             return 'Отчество';
//         case 'service':
//             return 'Услуги';
//         case 'contract':
//             return 'Договор';
//         case 'email':
//             return 'Эмэйл';
//         case 'data_of_birth':
//             return 'Дата рождения';
//         case 'password':
//             return 'Пароль';
//         case 'password_reset_token':
//             return 'Токен сброса пароля';
//         case 'phone_number':
//             return 'Номер телефона';
//         case 'address':
//             return 'Адрес';
//         case 'passport_id':
//             return 'Номер паспорта';
//         case 'passport_series':
//             return 'Серия паспорта';
//         case 'name_organization':
//             return 'Наименование организации';
//         case 'full_name_gendir':
//             return 'ФИО ГенДир';
//         case 'KPP':
//             return 'КПП';
//         case 'INN':
//             return 'ИНН';
//         case 'OGRN':
//             return 'ОГРН';
//         default:
//             return 'Неизвестное знаечение';
//     }
// }

?> -->