<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\WordModel;

class Word extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        return view('pages/word_play');
    }

    public function wordsearch()
    {
        return view('pages/word_search');
    }

    public function wordcollect()
    {
        return view('pages/word_collect');
    }

    public function wordpractice()
    {
        return view('pages/word_practice');
    }

    public function store()
    {
        date_default_timezone_set('Asia/Taipei');
        $date = date('Y-m-d H:i:s');

        $request = \Config\Services::request();
        $data = $request->getPost();

        $memberData = session()->memberData;

        $values = [
            'm_id'=>$memberData['m_id'],
            'word'=>$data['title'],
            'meaning'=>$data['content'],
            'chinese'=>$data['e_content'],
            'part_of_speech'=>$data['part_of_speech'],
            'create_at'=>$date,
        ];
        $wordModel = new WordModel();
        $wordModel->insert($values);

        return $this->response->setStatusCode(200)->setJSON("OK");
    }
}
