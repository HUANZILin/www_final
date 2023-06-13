<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\MemberModel;

class Member extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        if($this->session->get('memberData')) {
            return redirect()->to("/homepage");
        } else {
            return view('pages/home_visitor');
        }
    }

    public function login()
    {
        if($this->session->get('memberData')) {
            return redirect()->to("/homepage");
        } else {
            return view('pages/login');
        }
    }

    public function register()
    {
        if($this->session->get('memberData')) {
            return redirect()->to("/homepage");
        } else {
            return view('pages/register');
        }
    }

    public function homepage()
    {
        return view('pages/home_page');
    }

    public function userdata()
    {
        return view('pages/userdata');
    }

    public function userdataedit()
    {
        return view('pages/userdataedit');
    }

    public function dologin()
    {
        $data = $this->request->getPost();

        $memberModel = new MemberModel();
        $memberData = $memberModel->where("m_account", $data['email'])->first();

        if (password_verify($data['password'], $memberData['m_password'])) {
            $this->session->set("memberData", $memberData);
            return $this->respond([
                "msg"  => "Loin success.",
            ]);
        } else {
            return $this->fail("帳號密碼錯誤", 403);
        }
    }

    public function doRegister()
    {
        date_default_timezone_set('Asia/Taipei');
        $date = date('Y-m-d H:i:s');

        $data = $this->request->getPost();

        if($data['password'] != $data['rePassword']) {
            return $this->fail("密碼驗證錯誤", 400);
        }

        $memberModel = new MemberModel();
        $temp = $memberModel->where("m_account", $data['email'])->first();

        if($temp != null) {
            return $this->fail("帳號已被註冊", 400);
        }

        $memberData = $memberModel->insert([
            "m_account"  => $data['email'],
            "m_password" => password_hash( $data['password'], PASSWORD_DEFAULT),
            "create_at"  => $date,
        ]);

        if ($memberData === null) {
            return $this->fail("Signup fail.");
        } else {
            return $this->respond([
                "msg"  => "Signup success."
            ]);
        }
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to("/");
    }
}
