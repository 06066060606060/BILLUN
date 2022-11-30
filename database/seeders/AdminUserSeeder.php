<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class AdminUserSeeder extends Seeder
{

    public function run()
    {
        User::firstOrCreate(
            ['email' => 'xmicky@hotmail.fr'],
            ['name' => 'Mika0000', 'email' => 'xmicky@hotmail.fr',  'password' => '$2y$10$CKAJks3CbIipqWu6T4HAgOTXXpBzuPhEMnNug3lLlS3Ys3BSIA.Xu', 'OpenAI_API_Key' => 'sk-....', 'role' => 'admin']);
       
    }
}
