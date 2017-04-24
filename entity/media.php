<?php

/**
 *
 * This class is needed to force 2 methods and 1 is optionnal
 * the methods hydrate and getCreator can be use by inherit
 *
 * Use a abstract class to factoring your code
 * A class can extends ONLY ONE ABSTRACT
 *
 * Class Media
 *
 */
abstract class Media {

    protected $type;

    abstract function getTitle();

    abstract function getType();

    public function hydrate(Array $values)
    {
        foreach ($values as $key=>$value)
        {

            // if $key ==  "created_at" and you need this setter: setCreatedAt()
            $elements = explode('_', $key); // this funciton create this array : array('created', 'at')
            $new_key = '';
            foreach ($elements as $element)
            {
                $new_key .= ucfirst($element); // $new_key = CreatedAt;
            }

            $method = 'set'.$new_key;
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    public function getCreator()
    {
        return "LBM";
    }

}