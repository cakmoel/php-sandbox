<?php
    class Book
    {
        private $title;
        private $isbn;
        private $copies;
        public function _construct($isbn)
        {
            $this->setIsbn($isbn);
            $this->getTitle();
            $this->getNumberCopies();
        }
        public function setIsbn($isbn)
        {
            $this->isbn = $isbn;
        }
        public function getTitle() {
        	$this->title = "Beginning Python";
        	print "Title: ".$this->title."<br />";
        }
        public function getNumberCopies() {
        	$this->copies = "5";
        	print "Number copies available: ".$this->copies."<br />";
        }
        }
        $book = new book("159059519X");
        
?>        