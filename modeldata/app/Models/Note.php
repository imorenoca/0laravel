<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'deadline',
        'done',
    ];
    protected $guarded = [
        'id',
    ];
    protected $casts = [
        'deadline' => 'date',
    ];
    protected $hidden = [
        'password',
    ];
}
/*

$note = new note ();
$note->title = 'Hello world';
$note->description = 'Lore ipsum';
$note->save();
*/
