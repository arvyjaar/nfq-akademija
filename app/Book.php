<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Book
 *
 * @package App
 * @property string $title
 * @property string $year
 * @property integer $author
 * @property integer $category
 */
class Book extends Model
{
    protected $fillable = ['title', 'year', 'category_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsToMany(Author::class, 'author_book');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
