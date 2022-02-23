<?php
    function findWhere($data, $query): ?array
    {
        $flag = false;
        foreach ($data as $array) {
            foreach ($query as $key => $value) {
                if ($array[$key] == $value) {
                    $flag = true;
                } else {
                    $flag = false;
                }
            }
            if ($flag) return $array;
        }
        return null;
    }