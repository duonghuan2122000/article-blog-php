<?php 
/**
 * Functions lib
 * @author CreatedBy: dbhuan (28/08/2021)
 */

class Redirect {
    public function __construct($url = null)
    {
        if($url){
            echo "<script>location.href='$url';</script>";
        }
    }
}