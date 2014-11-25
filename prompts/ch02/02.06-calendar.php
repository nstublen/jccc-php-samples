<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Calendar</title>
</head>
<body>
<form action="02.06-calendar.php" method="post">
<?php # Script 2.6 - calendar.php

// This script makes three pull-down menus
// for an HTML form: months, days, years.

// TODO: Make the months array starting at index 1.

// TODO: Make the days and years arrays as ranges.

// Make the months pull-down menu:
echo '<select name="month">';
    // TODO: Add the option tag for each month.
    //  "<option value="1">January</option>\n"
echo '</select>';

// Make the days pull-down menu:
echo '<select name="day">';
    // TODO: Add the option tag for each day.
    //  "<option value="1">1</option>\n"
echo '</select>';

// Make the years pull-down menu:
echo '<select name="year">';
    // TODO: Add the option tag for each day.
    //  "<option value="2014">2014</option>\n"
echo '</select>';

?>
</form>
</body>
</html>