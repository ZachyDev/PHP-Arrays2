<?php
    $student_record = array(
        'one' => 'moseti,male,20,IT',
        'two' => 'doro,female,20,EDS',
    );
    // var_dump($student_record);
    foreach($student_record as $studs){
        echo "student :" .$studs . "<br>";
    }
    // returns the student at index position one
    echo $student_record['one']. "<br>";
    // counts the number of items in the array
    $count_arr = count($student_record);
    echo $count_arr."<br>";
    // deletes an element at index position 'two'
      // shuffle input
      shuffle($student_record);
    unset($student_record['two']);
    print_r($student_record)."<br>";
    // reverses an array
    $student_record = array_reverse($student_record);
    // print_r($student_record);
    // array_slice
    $input = array('a','b','c','d');
    // $output = array_slice($input,1);
    $output = array_slice($input,-2,1);
    // $output = array_slice($input,0,2);
    foreach($output as $out){
        echo $out . "<br>";
    }
  

?>