<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(VaitrosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(Trangthai_tintuyendungsTableSeeder::class);
        $this->call(NganhsTableSeeder::class);
        $this->call(TintuyendungsTableSeeder::class);
        $this->call(Trangthai_hososTableSeeder::class);
        $this->call(ThanhphosTableSeeder::class);
        $this->call(HososTableSeeder::class);
        $this->call(Trangthai_lichhensTableSeeder::class);
        $this->call(LichhensTableSeeder::class);
        $this->call(TrinhdoTableSeeder::class);
        $this->call(DanhgiasTableSeeder::class);
        $this->call(SlidesTableSeeder::class);
     }
}
