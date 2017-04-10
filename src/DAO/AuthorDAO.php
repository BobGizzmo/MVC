<?php
namespace MyBooks\DAO;

use MyBooks\Domain\BookDomain;

class AuthorDAO extends DAO
{
	public function findAllByBook($id, $authorId){
		$req = "SELECT * FROM book, author WHERE book.book_id=? AND author.auth_id=?";
		$row = $this->getDb()->fetchAssoc($req, array($id, $authorId));
		 if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No article matching id " . $id);
	}

	public function buildDomainObject(array $row){
		$book = new BookDomain();
		$book->setId($row["book_id"]);
		$book->setTitle($row["book_title"]);
		$book->setIsbn($row["book_isbn"]);
		$book->setSummary($row["book_summary"]);
		$book->setAuthorId($row["auth_id"]);
		$book->setAuthorFirstName($row["auth_first_name"]);
		$book->setAuthorLastName($row["auth_last_name"]);

		return $book;
	}
}