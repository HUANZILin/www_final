<?php

namespace App\Models;

use CodeIgniter\Model;

class WordModel extends Model
{
    protected $table = 'words';
    protected $allowedFields = ['w_id', 'm_id', 'word', 'part_of_speech', 'chinese', 'meaning', 'create_at', 'delete_at'];

}
