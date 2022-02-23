<?php
    function scrabble($symbols, $word): bool
    {
        $symbolsArray = str_split($symbols);
        $wordArray = str_split($word);
        $tmp = 0;
        foreach ($wordArray as $symbol) {
            $symbol = strtolower($symbol);
            if (in_array($symbol, $symbolsArray)) {
                unset($symbolsArray[array_search($symbol, $symbolsArray)]);
                $tmp++;
            }
        }
        if ($tmp == count($wordArray)) {
            return true;
        }
        return false;
    }