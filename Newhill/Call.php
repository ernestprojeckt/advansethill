<?php


class User
{
    private string $name;
    private int $age;
    private string $email = 'test@email.com';

    public function __call(string $name, array $arguments)
    {
        if (!method_exists($this, $name)) {
            throw new \Exception("Class " . $this::class . " doesn't contain method $name!!!");
        }
        return call_user_func_array([$this, $name], $arguments);
    }

    private function setName(string $name): void
    {
        $this->name = $name;
    }

    private function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getAll(): array
    {
        return [
            'Name' => $this->name,
            'Age' => $this->age,
            'Email' => $this->email,
        ];
    }
}




$user = new User();

try {
    $user->setEmail('newtestemail@mail.com');
} catch (Exception $e) {
    d("Error message: \"{$e->getMessage()}\" in {$e->getFile()}:{$e->getLine()}!!!");
} finally {
    $user->setName('Taras');
    $user->setAge(32);
    dd($user->getAll());
}