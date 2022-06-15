<?php
// arrays
$students = array ("Purity", "Annete", "Trevor", "Jamal", "Diana");
echo $students [2];
// associating arrays
$myMarks = array ( "Assesments" =>25,
                     "Cats" => 15,
                     "Projects" => 35,
                     "Attendance" => 8,
                 ); 
echo "My Project Marks:" .$myMarks["Projects"];
//Multidimentional arrays
$webdevtechnologies = array(
    'fronted'=> array('html', 'css', 'jss', 'bootstrap'),
    'backend'=> array('php', 'Python', 'Java', 'Js'),
    'frameworks'=> array('laravel', 'Django', 'springboot', 'fliter'),
    'database'=> array('MySQL', 'postgreSQL', 'mongoDB', 'Firebase'),
);
echo $webdevtechnologies['fronted'][1];
echo $webdevtechnologies['frameworks'][2];
echo $webdevtechnologies['database'][0];

?>