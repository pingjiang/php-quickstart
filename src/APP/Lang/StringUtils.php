<?php

namespace APP\Lang;

/**
* StringUtils
*/
class StringUtils
{
    public static function charAt($str, $pos) {
        return substr($str, $pos, 1);
    }
    
    public static function indexOf($str, $pattern, $startPos = 0) {
        return strstr($str, $pattern, $startPos);
    }
}
?>