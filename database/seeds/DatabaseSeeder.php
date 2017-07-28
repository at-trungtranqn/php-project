<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Suppliers::class, 50)->create();
        factory(App\Categories::class, 20)->create();
        factory(App\User::class, 50)->create()->each(function(App\User $user) {
                factory(App\Orders::class, 2)
                    ->create([
                        'user_id' => $user->id,
                    ]);
            });
    }
}
