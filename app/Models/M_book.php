<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_book extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_title',
        'book_author',
        'status',
    ];
    protected $table = 'book';
    protected $primaryKey = 'id_book';
    public $timestamps = false;

    public static function getAll()
    {
        return DB::table('book')
            ->select('*')
            ->get();
    }
}
