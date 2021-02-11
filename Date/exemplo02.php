<?php

echo strtotime("now");
// echo strtotime("10 September 2000");
// echo strtotime("+1 day");
// echo strtotime("+1 week");
// echo strtotime("+1 week 2 days 4 hours 2 seconds");
// echo strtotime("next Thursday");
// echo strtotime("last Monday");

$ts = strtotime('now');

echo date("l, d/m/Y", $ts);



?>