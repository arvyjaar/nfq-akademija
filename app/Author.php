<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Author
 *
 * @package App
 * @property string $name
 * @property string $surname
*/
class Author extends Model
{
    protected $fillable = ['name'];
}
