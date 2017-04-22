<?php

class BookManager  {

    protected $bdd;
    private $host      = "localhost";
    private $login     = "root";
    private $password  = "root";

    public function __construct()
    {
        $bdd = new PDO('mysql:host='.$this->host.';dbname=my_library;charset=utf8', $this->login, $this->password);
        $this->bdd = $bdd;
    }

    /**
     * return all books in bdd
     *
     * @return array
     */
    public function getBooks() {
        $bdd = $this->bdd;
        $query = "SELECT * FROM book";
        $req = $bdd->prepare($query);
        $req->execute();

        while($row = $req->fetch(PDO::FETCH_ASSOC)) {

            // instance of a book object
            $book = new Book();

            // hydrate manualy from bdd datas
            $book->setId($row['id']);
            $book->setTitle($row['title']);
            $book->setAuthor($row['author']);
            $book->setDescription($row['description']);
            $book->setNote($row['note']);

            // now you have an array of object (instead of an array of array)
            $books[] = $book;
        }
        return $books;

    }

    /**
     * persist a book in bdd
     *
     * @param Book $book
     * @return $this
     */
    public function create(Book $book) {

        $bdd = $this->bdd;
        $req = $bdd->prepare("INSERT INTO book (title, description, author, note) VALUES (:title, :description, :author, :note)");
        $req->execute(
            array(
                'title'       => $book->getTitle(),
                'description' => $book->getDescription(),
                'author'      => $book->getAuthor(),
                'note'        => $book->getNote()
            )
        );
        return $this;
    }


}