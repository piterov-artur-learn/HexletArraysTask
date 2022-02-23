<?php
    function combine($arrays): array
    {
        $resArray = [];
        $res = [];
        foreach ($arrays as $array) {
            foreach ($array as $key => $item) {
                $resArray[$key][] = $item;
            }
        }
        foreach ($resArray as $key => $array) {
            $res[$key] = array_unique($array);
        }
        return $res;
    }