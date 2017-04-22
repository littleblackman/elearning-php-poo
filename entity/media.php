<?php

/**
 *
 * This class is needed to force 2 methods and 1 is optionnal
 * the method getCreator can be use by inherit
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

    public function getCreator()
    {
        return "LBM";
    }

}