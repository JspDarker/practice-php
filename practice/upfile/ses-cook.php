<?php
//echo (isset($_POST['submit']))? "OKE" : 'ERROR';
//session_start();
$name = $_POST['name'];
//$name = $_SESSION['name'];
//$userId = $_SESSION['id'];
$userId = $_POST['userId'];
$userCompany = [
    'COE' => ['name' => 'thanh', 'userID'=>'thanh123'],
    'HR' => ['name' => 'jone', 'userID'=>'jone123'],
    'employee' => [
        ['name' => 'employees', 'userID'=>'you123'],
        ['name' => 'employee2', 'userID'=>'this123'],
        ['name' => 'employee3', 'userID'=>'this456'],
        ['name' => 'employee4', 'userID'=>'this789'],
    ]
];
if(isset($_POST['submit'])) {
    echo checkUser($userId, $userCompany);
//    echo $userId;
}
function checkUser($userId, $array) {
    foreach ($array as $k=>$v){
        switch ($k){
            case "HR":
                if($array[$k]['userID'] === $userId) {
                    return "[$k]"." name : {$array[$k]['name']}";
                }
                break;
            case "employee":
                foreach ($v as $kk=>$val) {
                    foreach ($val as $keys => $value) {
                        if($val['userID'] === $userId) {
                            return "[$k]"." name : {$val['name']}";
                        }
                    }
                }
                break;
            case "COE":
                if($array[$k]['userID'] === $userId) {
                    return "[$k]"." name : {$array[$k]['name']}";
                }
                break;
        }
    }
    return "you not of company";
}