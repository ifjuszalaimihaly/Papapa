<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookContent extends Model
{
    public function maxChapter(int $book_id, int $bible_translation_id)
    {
        return BookContent::where([['book_id',$book_id],['bible_translation_id',$bible_translation_id]])->groupBy('book_id','bible_translation_id')->max('chapter');
    }

    public function maxVersicle(int $book_id, int $bible_translation_id, int $chapter)
    {
        return BookContent::where([['book_id',$book_id],['bible_translation_id',$bible_translation_id],['chapter', $chapter]])->groupBy('book_id','bible_translation_id', 'chapter')->max('versicle');
    }
}
