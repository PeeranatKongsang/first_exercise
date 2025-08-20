<?php
    // input the point from user of student 
    // let make it array instead of variable

    $FirstStudent = array(56, 89, 78);
    $SecondStudent = array(45, 67, 90);
    $ThirdStudent = array(88, 76, 65);
    $FourthStudent = array(55, 45, 78);


    function DisplayStudent($studentName, $scores) {
        echo "<h2>Student: $studentName</h2>";
        echo "<ul>";
        echo "<li>Math: " . $scores[0] . "</li>";
        echo "<li>Science: " . $scores[1] . "</li>";
        echo "<li>English: " . $scores[2] . "</li>";
        echo "</ul>";
    }

    DisplayStudent("First Student", $FirstStudent);
    DisplayStudent("Second Student", $SecondStudent);
    DisplayStudent("Third Student", $ThirdStudent);
    DisplayStudent("Fourth Student", $FourthStudent);
    echo "<hr>";

?>