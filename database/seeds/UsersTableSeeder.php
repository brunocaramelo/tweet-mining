<?php

use Illuminate\Database\Seeder;
use Tweet\Admin\Users\Entities\UserEntity as User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createAll();
    }

    private function createAll()
    {
        User::firstOrCreate([
                                'name' => 'admin',
                                'email' => 'admin@tal.com.br',
                                'password' => '$2y$10$BQrTQ0TqrGPv8MsqF814K.xGnPnc8VYNVmQWogVqSKCcK/ewC2sde',
                                'remember_token' => '$2y$10$EawiwkCLolaIis5Mz8e7DuM9kndBdtJHhdhpti29Uf2nRGE8ELx0m',
                                'api_token' => '$2y$10$BQrTQ0TqrGPv8MsqF814K.xGnPnc8VYNVmQWogVqSKCcK/ewC2sde',
                            ]);
    }
}
