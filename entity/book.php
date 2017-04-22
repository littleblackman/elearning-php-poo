<?php

class Book {

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

    public function getTitle() {
        return $this->title;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setAuthor($author) {
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

}