<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AD-Task-1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php
    $name = "Jethro Wang";
    ?>
    <div class="section">
        <h1>Hello, <?php echo $name; ?></h1>
        <p>Please scroll down to view more</p>
    </div>

    <div class="section">
        <h1>Basic Information<br>(Conditional Statement and Declarations)</h1>
        <?php
        $school = "FEU Institute of Technology";
        $course = "BS information Technology";
        $specialization = "Web and Mobile Development";
        $year = "2nd Year";

        if ($school == "FEU Institute of Technology" && $course == "BS information Technology") {
            echo "<p>School: $school</p>";
            echo "<p>Course: $course</p>";
            echo "<p>Specialization: $specialization</p>";
            echo "<p>School year: $year</p>";
        } else {
            echo "<p>Information not available.</p>";
        }
        ?>
    </div>

    <div class="section">
        <h1>Meal Schedule<br>(Conditional Statement and Declarations)</h1>
        <?php
        $day = date("l");
        echo "<p>Today is: $day</p>";

        switch($day){
            case "Monday":
                $meals = [
                    "Breakfast: Fried Rice & Egg",
                    "Lunch: Chicken Adobo",
                    "Dinner: Tinola"
                ];
                break;
            case "Tuesday":
                $meals =[
                    "Breakfast: Tapsilog",
                    "Lunch: Sinigang na Baboy",
                    "Dinner: Grilled Bangus"
                ];
                break;
            case "Wednesday":
                $meals =[
                    "Breakfast: Champorado",
                    "Lunch: Kare-Kare",
                    "Dinner: Pork BBQ"
                ];
                break;
            case "Thursday":
                $meals =[
                    "Breakfast: Pancakes with bacon",
                    "Lunch: Bistek ",
                    "Dinner: Ginisang Munggo"
                ];
                break;
            case "Friday":
                $meals =[
                    "Breakfast: bread and Milo ",
                    "Lunch: Fried Tilapia ",
                    "Dinner: Spaghetti"
                ];
            case "Saturday":
                $meals =[
                    "Breakfast: Turon ",
                    "Lunch: Fried Chicken",
                    "Dinner: Sinigang"
                ];
                break;
            default:
            $meals =["No meals planned"];
                
        }

        foreach ($meals as $meal){
            echo "<div class=\"box\">$meal</div>";
        }
        

        ?>
        <a href="page/page1/index.php" class="btn">Go to the 2nd page</a>
    </div>
</body>
</html>