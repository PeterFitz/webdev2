<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 11/02/2016
 * Time: 11:31
 */

$days = array();

$days[0] = "Monday";
$days[1] = "Tuesday";
$days[2] = "Wednesday";
$days[3] = "Thursday";
$days[4] = "Friday";
$days[5] = "Saturday";
$days[6] = "Sunday";

function print_day($days,$day)

{

    echo "<li>$days[$day]</li>";

}

?>

<h1>Day of week</h1>
<ul>
<?php
	print_day($days,0);
	print_day($days,1);
	print_day($days,2);
	print_day($days,3);
	print_day($days,4);
    print_day($days,5);
    print_day($days,6);
?>
</ul>
