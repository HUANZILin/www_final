<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table = 'members';
    protected $allowedFields = ['m_id', 'm_account', 'm_password', 'create_at', 'delete_at'];

}
