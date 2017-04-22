<?php

/**
 * This interface is used when you have to define how a service works
 * if you want to sell book you MUST have a price
 *
 * A class can implements MANY INTERFACES
 *
 *
 * Interface Saleable
 */
interface Saleable {

    public function getPrice();

}