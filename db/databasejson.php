<?php


require_once 'DB.php';
require_once 'DB_functions.php';


$success = connect('localhost', 'pet_clinic', 'root', 'rootroot');

$data = json_decode(file_get_contents('clients.json'), true);


DB::statement('TRUNCATE TABLE `owner`');;
DB::statement('TRUNCATE TABLE `pet`');;

foreach($data as $key => $value){
    $query =  '
        INSERT 
    INTO `owner`  
    (`first_name`, `surname`)
    Values
    (?, ?)
    ';
    DB::insert($query, [$value['first_name'],$value['surname'] ]);
echo 'inserted';
    foreach($value['pets'] as $pets){
        $query1 =   ' INSERT 
        INTO `pet`  
        (`owner_id`,`name`,`breed`,`weight`,`age`,`photo` )
        Values
        (?, ?, ?, ?, ?, ?)';
        DB::insert($query1, [$key+1 , $pets['name'], $pets['breed'],  $pets['weight'], $pets['age'], $pets['photo'] ]);
    }
};

