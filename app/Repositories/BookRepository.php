<?php

namespace App\Repositories;

use App\Book;

class BookRepository {

	private $book;

	public function __construct(Book $book) {
		$this->book = $book;
	}

	public function getAllByPage($limit) {
		return $this->book->paginate($limit);
	}

	public function getBooksByPage($keyword, $limit) {
		$fields = ['idxno', 'callno', 'propno', 'title', 'level', 'author', 'version', 'type', 'case', 'volume', 'savevol', 'series', 'classification', 'note'];

		$books = $this->book;
		foreach ($fields as $field) {
			foreach (($keywords = explode(' ', $keyword)) as $value) {
				if ($value === reset($keywords)) {
					$books = $books->orWhere($field, 'like', '%' . $value . '%');
				} else {
					$books = $books->where($field, 'like', '%' . $value . '%');
				}
			}
		}

		return $books->paginate($limit);
	}
}