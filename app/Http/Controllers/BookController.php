<?php

namespace App\Http\Controllers;

use App\Repositories\BookRepository;
use Illuminate\Http\Request;

class BookController extends Controller {

	private $books;

	public function __construct(BookRepository $books) {
		$this->books = $books;
	}

	public function books(Request $request) {
		if ($request->has('q')) {
			$keyword = $request->input('q');
			$perPage = 10;

			if (null === $keyword) {
				$books = $this->books->getAllByPage($perPage);
			} else {
				$books = $this->books->getBooksByPage($keyword, $perPage);
			}
		} else {
			$books   = null;
			$keyword = null;
		}

		return view('search', compact('keyword', 'books'));
	}
}
