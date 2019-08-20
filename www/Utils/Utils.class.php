<?php

namespace MVC\Utils;
class Utils
{

    public static function flattenArray(array $data): array {
        $flat = [];
        foreach($data as $i => $values) {
            if(!is_array($values)) {
                $flat[$i] = $values;
                continue;
            }
            $keys = array_keys($values);
            foreach ($keys as $key){
                $flat[$key] = $values[$key];
            }
        }
        return $flat;
    }
}