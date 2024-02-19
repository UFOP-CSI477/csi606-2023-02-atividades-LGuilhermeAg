<?php
    // use App\Models\User;
use Illuminate\Http\Request;
use User as User;

    class loginController extends Controller{
        public function index(){
            return $this->view('Calendar/index');
        }
        public function login(){
            echo 'login';
        }
        public function cadastro() {
            $user = $this->model('User');
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $_SESSION['oldUser'] = $_POST;
                if($user->where('email', $_POST['email'])->first()) {
                    $_SESSION['error'] = true;
                    $_SESSION['cadastroMessage'] = 'Email já cadastrado';
                    echo '1';
                    return $this->view('Calendar/index');
                }
                if($user->where('username', $_POST['username'])->first()) {
                    $_SESSION['error'] = true;
                    $_SESSION['cadastroMessage'] = 'Username já cadastrado';
                    echo '2';
                    return $this->view('Calendar/index');
                }
                if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $_SESSION['error'] = true;
                    $_SESSION['cadastroMessage'] = 'Email inválido';
                    echo '3';
                    return $this->view('Calendar/index');
                }
                $user->createUser($_POST['username'], $_POST['pwd1'], $_POST['email'], 'cliente');
                $_SESSION['cadastroMessage'] = 'Usuário criado com sucesso! Realize o login para continuar.';
                echo '4';
                return $this->view('Calendar/index');
            }
            $_SESSION['cadastroMessage'] = 'Algo deu errado.';
            $_SESSION['error'] = true;
            return $this->view('Calendar/index');
        }
    }
?>