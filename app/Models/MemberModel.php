<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table = 'Members';
    protected $allowedFields = ['m_id', 'm_account', 'm_password', 'm_identity', 'create_at', 'delete_at'];

    function get_login_details($username, $password) {        
		$query = $this->db->table($this->Members)->where(['username' => $m_account, 'password' => $m_password])->limit(1)->get();
        
		return $query->getRow();
    }
}
