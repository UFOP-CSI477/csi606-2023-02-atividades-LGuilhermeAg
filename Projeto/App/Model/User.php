<?php
    use Illuminate\Database\Eloquent\Model as Eloquent;
    class User extends Eloquent{
        protected $table = 'users';
        public $timestamps = [];
        protected $fillable = [
            'id',
            'username',
            'senha',
            'tipo', // enum('admin','profissional','cliente')
            'email',
            'nome',
        ];

        public static function createUser($username, $senha, $email, $tipo){
            $user = new User();
            echo 'User.php';
            $user->username = $username;
            $user->senha = password_hash($senha, PASSWORD_DEFAULT);
            $user->email = $email;
            $user->tipo = $tipo;
            $user->save();
        }

    }
?>