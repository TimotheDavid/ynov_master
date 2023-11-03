<?php

namespace MVC\Controller;

use MVC\BaseController;
use MVC\Models\UserModel;

class UserController extends BaseController {

  public function index() {
    $users = [
      new UserModel('John Doe', 'john@example.com'),
      new UserModel('Jane Doe', 'jane@example.com')
    ];

    $this->render('user/index', [
      'users' => $users
    ]);
  }

}



