<?php

namespace Files\Models;

use Illuminate\Database\Eloquent\Model;

class UploadFile extends Model
{
    protected $fillable = ['title', 'path', 'user_id', 'file_size', 'extension', 'type'];
}
