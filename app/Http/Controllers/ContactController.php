<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view("contact", [
            'title' => 'contact',
            'nama' => 'William',
            'kelas' => '11 PPLG 2',
            'linkedIn' => '-',
            'github' => 'https://github.com/Wolongok'
        ]);
    }
}
