<?php
    function fromPairs($arrays): array
    {
        $result = [];
        foreach ($arrays as $array) {
            $result[$array[0]] = $array[1];
        }
        return $result;
    }