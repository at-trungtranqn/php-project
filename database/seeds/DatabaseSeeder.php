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
        factory(App\User::class, 70)->create();
        factory(App\Category::class, 20)->create();
        factory(App\Food::class, 50)->create();
        factory(App\DailyMenu::class, 50)->create();
        factory(App\Supplier::class, 5)->create();
        factory(App\Material::class, 50)->create();
        factory(App\Order::class, 50)->create()->each(function ($order){
            factory(App\OrderItem::class, random_int(1,5))->create(['order_id' => $order->id,]);
        });
    }
}
