<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$eBWT.3puoqQFsqhmNY6UOO8Kudx9Qgv.M52m1NLxGhtTS1fkaA0s2', 'role_id' => 1, 'remember_token' => '', 'premium' => 0,],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
