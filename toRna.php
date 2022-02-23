<?php
    function toRna($dna): string
    {
        $res = [];
        $arr = str_split($dna);
        foreach ($arr as $sym) {
            switch($sym) {
                case "G":
                    $res[] = "C";
                    break;
                case "C":
                    $res[] = "G";
                    break;
                case "T":
                    $res[] = "A";
                    break;
                case "A":
                    $res[] = "U";
                    break;
            }
        }
        return implode($res);
    }