<?php
function is_leap_year($year) {
    if ($year % 4 != 0 || $year % 100 == 0 && $year % 400 != 0) 
    {
        print('obich');
    } 
    else 
    {
        print('vis');
    }
}

?>