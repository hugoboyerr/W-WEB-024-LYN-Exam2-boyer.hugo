<?php
function resum_join_str($sta = NULL, $stb = NULL)
{
        if (strlen($sta) < 14 || strlen($stb) < 3 && $sta !== FALSE || $stb !== FALSE) {
          return    str_pad($sta, 14,'.');
          return    str_pad($stb,3, '.',STR_PAD_LEFT);

             substr($sta, 14);
              substr($stb, -3);
        } else {
           return FALSE;
        }
       
}

