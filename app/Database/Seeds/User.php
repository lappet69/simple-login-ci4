<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'John',
            'password'    => password_hash('qwe123', PASSWORD_BCRYPT),
        ];

        // Simple Queries
        $this->db->query('INSERT INTO users (username, password) VALUES(:username:, :password:)', $data);

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}
