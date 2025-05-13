<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Structures</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="page">
        <h1>The 7 Days(Looping Incremental)</h1>
        <div class="scroll-box">
            <?php
            $weeks = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
            $n = 1;
            foreach ($weeks as $day){
                echo "<div class='box'>Day $n: $day</div>";
                $n++;
            }
            ?>
            </div>

        <h1>Workout Days(Looping Incremental)</h1>
        <div class="scroll-box">
            <?php
            $workouts = ["Pushday", "Pullday", "legday", "Rest day", "Endurance Day", "light workout", "Rest day"];
            for ($i = 0; $i < count($workouts); $i++) {
            $n = $i + 1;
            echo "<div class='box'>Workout $n: {$workouts[$i]}</div>";
            }
            ?>
        </div>

        <h1>Top 5 Recommendation(Looping Decremental)</h1>
        <div class="scroll-box">
            <?php
            $movies =["Hunger by Sitisiri Mongkolsiri","The PURSUIT of Happiness","The Founder (2016)","The Social Network","Breaking bad" ];
            $count = 5;
            while ($count > 0){
                $movieIndex = 5 - $count;
                $movieName = isset($movies[$movieIndex]) ? $movies[$movieIndex] : '';
                echo "<div class='box'>Top $count NETFLIX Recommendation : $movieName</div>";
                $count--;
            }
            ?>
        </div>

        <a href="http://127.0.0.1:3030/Index.php" class="btn"> Back to Main</a>

    </div>


    
</body>
</html>