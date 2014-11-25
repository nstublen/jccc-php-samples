<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Calendar</title>
</head>
<body>
<form action="02.09-calendar.php" method="post">
<?php # Script 2.9 - calendar.php #2

// This script makes three pull-down menus
// for an HTML form: months, days, years.

// Make the months array:
$months = array (1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

// Make the months pull-down menu:
echo '<select name="month">';
foreach ($months as $key => $value) {
	echo "<option value=\"$key\">$value</option>\n";
}
echo '</select>';

// Make the days pull-down menu:
echo '<select name="day">';
    // TODO: Create the option tags using a for loop.
	//  "<option value=\"1\">1</option>\n";
echo '</select>';

// Make the years pull-down menu:
echo '<select name="year">';
    // TODO: Create the option tags using a for loop.
    //  "<option value=\"2014\">2014</option>\n";
echo '</select>';

?>
</form>
</body>
</html>