<?php
class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function uniqueOccurrences($arr) {
        $count_arr = array_count_values($arr);
        $count_new = array_count_values($count_arr);
        foreach($count_new as $key => $value){
            if ($value >1){
                return false;
            }else{
                continue;
            }
        }
        return ture;
    }
}

?>
