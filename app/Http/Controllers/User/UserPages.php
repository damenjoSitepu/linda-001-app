<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserPages extends Controller
{
    public $User;

    public function __construct()
    {
        $this->User = new \App\Models\UserModel();
    }

    // Halaman User
    public function index($type = '')
    {
        // Data
        $data = [
            'title'     => 'User Profile',
            'opt'       => 'User',
            'getUser'   => $this->User->getUser(session()->get('login')['user_id']),
            'type'      => $type ? $type : ''
        ];

        return view("user/index", $data);
    }

    // Halaman Management User
    public function management()
    {

        // Data
        $data = [
            'title'     => 'Management User',
            'opt'       => 'User',
            'getUser'   => $this->User->getUsers()
        ];

        return view("user/admin", $data);
    }

    // Halaman Detail Management User
    public function detail($type = '', $user_id = '')
    {

        // Data
        $data = [
            'title'     => 'Detail Management User',
            'opt'       => 'User',
            'type'      => $type ? $type : ''
        ];

        return view("user/admin-detail", $data);
    }
}
