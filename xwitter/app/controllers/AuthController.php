<?php

namespace App\Controllers;

use Core\Controller;

class AuthController extends Controller
{
  public function login()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $email = $_POST['email'];
      $password = $_POST['password'];

      if ($email === 'admin@example.com' && $password === '123456') {
        echo "Login realizado com sucesso!";
      } else {
        echo "Email ou senha incorretos!";
      }
    }

    $this->view('auth/login');
  }

  public function register()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name = $_POST['name'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];

      if($password === $cpassword){
        echo "Cadastro realizado com sucesso!";
      }else{
        echo "As senhas são diferentes";
      }

    }
    $this->view('auth/register');
  }
}