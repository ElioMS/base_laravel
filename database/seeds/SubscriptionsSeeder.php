<?php

use Illuminate\Database\Seeder;

class SubscriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
			{
			  factory(App\Subscription::class, 25)->create();

			}
}