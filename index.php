<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Scores</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Student Scores</a>
  </div>
</nav>

<div class="container mt-5">
    <?php
    $FirstStudent = array(56, 89, 78);
    $SecondStudent = array(45, 67, 90);
    $ThirdStudent = array(88, 76, 65);
    $FourthStudent = array(55, 45, 78);

    $students = [
        ["First Student", $FirstStudent],
        ["Second Student", $SecondStudent],
        ["Third Student", $ThirdStudent],
        ["Fourth Student", $FourthStudent]
    ];

    function CalculateAverage($scores) {
        $total = 0;
        foreach ($scores as $score) {
            $total += $score;
        }
        return round($total / count($scores), 2);
    }

    echo "<div class='row row-cols-1 row-cols-md-2 g-4'>";
    foreach ($students as $student) {
        $name = $student[0];
        $scores = $student[1];
        echo "<div class='col'>";
        echo "<div class='card h-100 shadow-sm'>";
        echo "<div class='card-header bg-info text-white'><strong>$name</strong></div>";
        echo "<ul class='list-group list-group-flush'>";
        echo "<li class='list-group-item'>Math: <span class='badge bg-primary'>" . $scores[0] . "</span></li>";
        echo "<li class='list-group-item'>Science: <span class='badge bg-success'>" . $scores[1] . "</span></li>";
        echo "<li class='list-group-item'>English: <span class='badge bg-warning text-dark'>" . $scores[2] . "</span></li>";
        echo "</ul>";
        echo "<div class='card-footer text-end'>";
        echo "<span class='fw-bold'>Average: </span><span class='badge bg-dark'>" . CalculateAverage($scores) . "</span>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";
    ?>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>