<?php

class Book extends Media implements Saleable, Borrowing  {

    use CleanData;

    protected $id = null;
    protected $title;
    protected $description;
    protected $author;
    protected $note;


    public function hydrate(Array $values)
    {
        foreach ($values as $key=>$value)
        {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    /**
     * return a unique string
     * mixed of author name and title
     *
     * @return string
     */
    public function getPersonalIdentification()
    {
        $personal_identification = sha1($this->getAuthor().$this->getTitle());
        return $personal_identification;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * this method is required when a class extend media
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }

    /**
     * Format the name by using a trait
     * @param $author
     */
    public function setAuthor($author) {
        $author = $this->formatName($author);
        $this->author = $author;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setNote($note) {
        $this->note = $note;
    }

    public function getNote() {
        return $this->note;
    }

    /**
     * save the object
     *
     * @return $this
     */
    public function save()
    {
        // connect to bdd & save
        $manager = new BookManager();
        $manager->persist($this);
        return $this;
    }

    /**
     * return the type of media
     * this method is required when a class extend media
     *
     * @return string
     */
    public function getType()
    {
        return "book";
    }

    /**
     *  Interface Saleable
     */
    public function getPrice()
    {
        // TODO: Implement getPrice() method.
    }

    /**
     *  Interface Borrowing
     */
    public function getDateFrom()
    {
        // TODO: Implement getDateFrom() method.
    }

    /**
     *  Interface Borrowing
     */
    public function getPersonName()
    {
        // TODO: Implement getPersonName() method.
    }

}