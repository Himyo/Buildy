<?php

namespace MVC\Utils;
class Utils
{

    public static function flattenArray(array $data): array {
        $flat = [];
        foreach($data as $i => $values) {
            $keys = array_keys($values);
            foreach ($keys as $key){
                $flat[$key] = $values[$key];
            }
        }
        return $flat;
    }
}