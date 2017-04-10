<?php
namespace MyBooks\Domain;

class BookDomain
 {
    private $id;

    private $title;

    private $isbn;

    private $summary;

    private $authorId;

    private $authorFirstName;

    private $authorLastName;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
        return $this;
    }
    public function getSummary() {
        return $this->summary;
    }

    public function setSummary($summary) {
        $this->summary = $summary;
        return $this;
    }

    public function getAuthorId() {
        return $this->authorId; 
    }

    public function setAuthorId($authorId) {
        $this->authorId = $authorId; 
        return $this;
    }

    public function getAuthorFirstName() {
        return $this->authorFirstName;
    }

    public function setAuthorFirstName($authorFirstName) {
        $this->authorFirstName = $authorFirstName;
        return $this;
    }

    public function getAuthorLastName() {
        return $this->authorLastName;
    }

    public function setAuthorLastName($authorLastName) {
        $this->authorLastName = $authorLastName;
        return $this;
    }
 }