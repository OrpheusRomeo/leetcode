<?php
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $max = 0;
        $cnt = count($height);
        $left = 0;
        $right = $cnt -1;
        while($left < $right){
            $l = $right - $left;
            if($height[$left]< $height[$right]){
                $h = $height[$left];
                $sqr = $h * $l;
                $left = $left +1;
            }else{
                $h = $height[$right];
                $sqr = $h * $l;
                $right = $right - 1;    
            }
            if ($max < $sqr){
                $max = $sqr;
            }         
        }
        return $max;
    }
}
