<?php

namespace App\Contracts;

use App\Models\Book;
use Illuminate\Http\Request;

interface BookContract
{
    public function store(Request $request);
    public function show(Book $book);
    public function update(Request $request, Book $book);
    public function destroy(Book $book);
}