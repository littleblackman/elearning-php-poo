<?php

/**
 * This interface is used when you have to define how a service works
 * if you want to borrow book you MUST have a date start and a person name
 *
 * A class can implements MANY INTERFACES
 *
 *
 * Interface Borrowing
 */
interface Borrowing {

    public function getDateFrom();

    public function getPersonName();

}