<?php
class Book {
    public $isbn;
    public $title;
    public $author;
    public $available;
    public function getPrintableTitle(): string {
        $result = '<i>' . $this->title
        . '</i> - ' . $this->author;
        if (!$this->available) {
        $result .= ' <b>Not available</b>';
        }
        return $result;
    }
}
?>