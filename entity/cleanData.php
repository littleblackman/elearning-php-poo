<?php

trait CleanData {

    public function formatName($string)
    {
        $elements = explode(' ', $string);
        foreach($elements as $element)
        {
            $arr[] = ucfirst(strtolower($element));
        }
        $new_string = implode(' ', $arr);

        return $new_string;
    }

}