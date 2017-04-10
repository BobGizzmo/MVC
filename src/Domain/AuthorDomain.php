<?php
namespace MyBooks\Domain;

class AuthorDomain{

	private $id;

	private $firstName;

	private $lastName;

	public function getId(){
		return $this->id
	}
	public function setId(){
		$this->id = $id
	}
	public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($title) {
        $this->title = $firstName;
        return $this;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($isbn) {
        $this->isbn = $lastName;
        return $this;
    }
}