<?php

class DvdManager  extends BddManager {

    /**
     * return all dvds in bdd
     *
     * @return array
     */
    public function getDvds() {
        $bdd = $this->bdd;
        $query = "SELECT * FROM dvd";
        $req = $bdd->prepare($query);
        $req->execute();

        while($row = $req->fetch(PDO::FETCH_ASSOC)) {

            // instance of a book object
            $dvd = new Dvd();

            // hydrate  frm bdd datas
            $dvd->hydrate($row);

            // now you have an array of object (instead of an array of array)
            $dvds[] = $dvd;
        }
        return $dvds;

    }

    /**
     * save the dvd in bdd
     *
     * @param Dvd $dvd
     */
    public function persist(Dvd $dvd)
    {
        if($dvd->getId() == null) {
            $this->create($dvd);
        } else {
            $this->update($dvd);
        }
    }


    /**
     * update a dvd in bdd
     * @param Dvd $dvd
     * @return $this
     */
    public function update(Dvd $dvd) {
        $bdd = $this->bdd;
        $req = $bdd->prepare("UPDATE dvd SET title = :title, resume = :resume, director = :director, note = :note WHERE id = :id");
        $req->execute(
            array(
                'title'     => $dvd->getTitle(),
                'resume'    => $dvd->getResume(),
                'director'  => $dvd->getDirector(),
                'note'      => $dvd->getNote(),
                'id'        => $dvd->getId()
            )
        );
        return $this;
    }



    /**
     * create a new dvd in bdd
     *
     * @param Dvd $dvd
     * @return $this
     */
    public function create(Dvd $dvd) {

        $bdd = $this->bdd;
        $req = $bdd->prepare("INSERT INTO dvd (title, resume, director, note) VALUES (:title, :description, :author, :note)");
        $req->execute(
            array(
                'title'     => $dvd->getTitle(),
                'resume'    => $dvd->getResume(),
                'director'  => $dvd->getDirector(),
                'note'      => $dvd->getNote()
            )
        );
        return $this;
    }

    public function getDvdById($dvd_id)
    {
        $bdd = $this->bdd;
        $query = "SELECT * FROM dvd WHERE id = ".$dvd_id;
        $req = $bdd->prepare($query);
        $req->execute();

        $row = $req->fetch(PDO::FETCH_ASSOC);

        $dvd = new Dvd();
        $dvd->hydrate($row);

        return $dvd;
    }

}