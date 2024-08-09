<?php

// $name = "Mehdi";
// indxed arrays
// $names = array('Mehdi', 'Hasan', "Sara", 10, false, 3.4);
// $names2 = ['Mehdi', 'Hasan', "Sara", 10, false, 3.4];

// var_dump($names[4]);

// associative array:

// $person = array('name'=>'Mehdi', 'family'=>'Ahmadi', 'age' => 28, 'height' => 1.82);

// echo $person['family'];

// echo $person;
// var_dump($person);


// $students = [
//   ['name' => 'Ali', 'age'=>20,'grade'=>'A'],
//   ['name' => 'Mehdi', 'age'=>27, 'grade' => 'F'],
//   ['name' => 'Sara', 'age'=> 30, 'grade' => 'B'],
// ];

// echo $students[2]['age'];

// $names = array('Mehdi', 'Hasan', "Sara");

// $names[]  = 'Ali';

// var_dump($names);

// $person = array('name'=>'Mehdi', 'family'=>'Ahmadi', 'age' => 28, 'height' => 1.82);

// $person['grade'] = 'D';

// var_dump($person);

// $students = [
//   ['name' => 'Ali', 'age'=>20,'grade'=>'A'],
//   ['name' => 'Mehdi', 'age'=>27, 'grade' => 'F'],
//   ['name' => 'Sara', 'age'=> 30, 'grade' => 'B'],
// ];

// $students[] = ['name' => 'Ahmad', 'family' => 'Ahmadi', 'grade' => 'A+'];

// var_dump($students);


// $comments = [
//    "This article is very informative",
//    "I found this post very helpful, than you",
//    "Great read, Looking forward to more articles like this"
// ];

// echo "<h2>Commnets</h2>";

// echo "<ul>";

//   foreach($comments as $comment) {
//     echo "<li>".htmlspecialchars($comment)."</li>";
//   }

// echo "</ul>";


// $config = [
//   "database_host" => "localhost",
//   "database_name" => "example_db",
//   "database_user" => "root",
//   "database_password" => "12345678",
//   "disply_error" => true
// ];

// echo "Database Host: ". $config['database_host'] ."<br>";
// echo "Database Name: ". $config['database_name'] ."<br>";
// echo "Display Errors: ".  ($config['disply_error'] ? "Enabled" : "Disabled"). "<br>";

// $projects = [
//   [
//     "project_id" => 1,
//     "project_name" => "Website Redesign",
//     "tasks" => [
//       ["task_id" => 101, "task_name" =>"Develop Frontend", "status" => "completed"],
//       ["task_id" => 102, "task_name" =>"Develop Backend", "status" => "Pending"],
//       ["task_id" => 103, "task_name" =>"Test Website", "status" => "In Progress"]
//     ]
//   ],

//   [
//     "project_id" => 2,
//     "project_name" => "Mobile App Development",
//     "tasks" => [
//       ["task_id" => 201, "task_name" =>"Design Mockups", "status" => "completed"],
//       ["task_id" => 202, "task_name" =>"Develop Backend", "status" => "Pending"],
//       ["task_id" => 203, "task_name" =>"Deploy App", "status" => "In Progress"]
//     ]
//   ],
  
// ];

// foreach($projects as $project) {
//   echo "<h2>Project:" . htmlspecialchars($project['project_name']) . "</h2>";
//   echo "<ul>";

//   foreach($project['tasks'] as $index => $task) {
//     echo "<li>$index:Task:" . htmlspecialchars($task['task_name'])."- Status: " . htmlspecialchars($task['status']) . "</li>";
//   }

//   echo "</ul>";
// }