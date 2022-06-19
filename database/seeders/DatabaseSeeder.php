<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //   DB::table('tblleads')->factory(10)->create();
        //   DB::table('tblinvoices')->factory(10)->create();
        //   DB::table('tblestimate_requests')->factory(10)->create();
        //   DB::table('tblprojects')->factory(10)->create();
        //   DB::table('tblproposals')->factory(10)->create();
        //   DB::table('tbltasks')->factory(10)->create();

          DB::table('tblleads')->factory()->create([
            'id' => 1,
            'status' => 1,
        ]);
    }
}
