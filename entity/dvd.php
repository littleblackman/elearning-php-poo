<?php

class Dvd {

    protected $id = null;
    protected $title;
    protected $resume;
    protected $director;
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

}