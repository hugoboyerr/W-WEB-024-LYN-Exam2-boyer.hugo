<?php
function resum_join_str($sta = FALSE, $stb = FALSE)
{
        if (strlen($sta) < 14 || strlen($stb) < 3) {
              str_pad($sta, 15, '.');
              str_pad($sta, 15, '.');

            substr($sta, 14);
              substr($stb, -3);
        } 
}
var_dump(resum_join_str("gjeijg", 'a'));
