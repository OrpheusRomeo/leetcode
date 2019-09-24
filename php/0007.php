<?php
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        if ($x==0){
            return 0;
        }
        if($x < 0){
            $x = substr($x,1);
            $x = '-'.strrev($x);
            if ((-pow(2,31))< $x  && $x< (pow(2,31)-1)){
                return $x/1;
            }
            return 0;
        }else{
            $x = strrev($x);
            if ((-pow(2,31))< $x  && $x< (pow(2,31)-1)){
                return $x/1;
            }
            return 0;
        }
    }
}
