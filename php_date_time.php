<?php
/*$date_array = getdate();

foreach ( $date_array as $key => $val ){
    print "$key = $val<br />";
}

$formated_date  = "Today's date: ";
$formated_date .= $date_array['mday'] . "/";
$formated_date .= $date_array['mon'] . "/";
$formated_date .= $date_array['year'];

print $formated_date;*/

print date("m/d/y G.i:s<br>", time());
echo '<br>';
print "Today is ";
print date("j of F Y, \a\\t g.i a", time());

$datetime = new DateTime();

$timezone = new DateTimeZone('America/Los_Angeles');
$datetime->setTimezone($timezone);

var_dump($datetime);

?>