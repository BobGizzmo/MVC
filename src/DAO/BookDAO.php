<?php
namespace MyBooks\DAO;

use MyBooks\Domain\BookDomain;

class BookDAO extends DAO
{
	public function find($id) {
        $req = "select * from book where book_id=?";
        $row = $this->getDb()->fetchAssoc($req, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No article matching id " . $id);
    }

    public function findAll(){
    	$req = "select * from book order by book_id desc";
    	$row = $this->getDb()->fetchAll($req);

    	$books = array();
        foreach ($row as $rows) {
            $bookId = $rows['book_id'];
            $books[$bookId] = $this->buildDomainObject($rows);
        }
        return $books;
    }
   
	public function buildDomainObject(array $row){
		$book = new BookDomain();
		$book->setId($row["book_id"]);
		$book->setTitle($row["book_title"]);
		$book->setIsbn($row["book_isbn"]);
		$book->setSummary($row["book_summary"]);
        $book->setAuthorId($row["auth_id"]);

		return $book;
	}

}