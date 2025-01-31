<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\User;

class HomeController extends Controller {
    public function index() {
        $users = User::getAll();
        $this->view('home', ['users' => $users]);
    }
}
