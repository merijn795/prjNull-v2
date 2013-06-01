<?php
/**
 * prjNull-v2 :: Release 01613139
 * ----------------------------------------
 * The beauty of null. Luv it <3.
 *
 * Developed by Merijn K
 * Contact: merijn795@gmail.com
 */
 
session_start();
session_regenerate_id();

require "includes/null.php";
 
$null = new \isNull\iNull();
 
 
$null->dispatch();

?>