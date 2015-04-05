<!DOCTYPE html>

<html>
<head>
    <title>ComplexConditionals 2</title>
</head>

<body>
    <?php
        $grade = 93;
            if ($grade == 100)
            {
                echo("Your grade is PERFECT!");
            }
            elseif($grade <=99 && $grade >=90)
            {
                echo("Your grade is Excellent!");
            }
            elseif($grade <=89 && $grade >=80)
            {
                echo("Your grade is great!");
            }
            elseif($grade <=79 && $grade >=70)
            {
                echo("Your grade is good!");
            }
            elseif($grade <=69 && $grade >=60)
            {
                echo("Your grade is average.");
            }
            elseif($grade <=59 && $grade >=50)
            {
                echo("Your grade is below average.");
            }
            else
            {
                echo("You entered invalid grade :(");
            }
    ?>
</body>
</html>
