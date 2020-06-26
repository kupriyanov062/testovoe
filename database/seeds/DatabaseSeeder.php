<?php

use Illuminate\Database\Seeder;
use App\{type, product};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    protected $type = ['Чехол', 'Стекло', 'Пленка', 'Кабель', 'Наушники'];

    public function run()
    {
        $this->call(TypeSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
