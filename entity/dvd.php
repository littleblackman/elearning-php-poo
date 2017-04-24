<?php

class Dvd extends Media{

    protected $id = null;
    protected $title;
    protected $resume;
    protected $director;
    protected $note;

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }


    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setResume($resume) {
        $this->resume = $resume;
    }

    public function getResume() {
        return $this->resume;
    }

    public function setDirector($director) {
        $this->director = $director;
    }

    public function getDirector() {
        return $this->director;
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
        $manager = new DvdManager();
        $manager->persist($this);
        return $this;
    }


}