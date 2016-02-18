<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 11/02/2016
 * Time: 12:12
 */

$days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

/*$days[0] = "Monday";
$days[1] = "Tuesday";
$days[2] = "Wednesday";
$days[3] = "Thursday";
$days[4] = "Friday";
$days[5] = "Saturday";
$days[6] = "Sunday";*/

function print_day($days,$day)

{

    echo "<tr><th>$days[$day]</th></tr>";

}

function print_all_days ($days)

{

    for ($i = 0; $i < sizeof($days); $i++)

    {

        print_day($days,$i);

    }

}

?>

<table border="1">

    <?php
    print_all_days($days);
    ?>

</table>