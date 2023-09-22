<?php
class Login extends Model
{
    public function checkLogin()
    {
        $this->validate();

        $user = User::getOne(['email' => $this->email]);

        if ($user) {
            if ($user->end_date) {
                throw new AppException('Usuário está desligado da empresa.');
            }

            if (password_verify($this->password, $user->password)) {
                return $user;
            }
        }

        throw new AppException('Usuário/Senha inválidos.');
    }

    // Aqui esta sendo criado um método para validação...
    public function validate()
    {
        $errors = [];

        if (!$this->email) {
            $errors['email'] = 'E-mail é um campo obrigatório.';
        }

        if (!$this->password) {
            $errors['password'] = 'Por favor, informe a senha.';
        }

        if (count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }
}