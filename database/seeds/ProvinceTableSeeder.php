<?php

use Illuminate\Database\Seeder;
use App\Province;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::truncate();

        Province::insert([
            [ 'code' => 'PNP', 'name' => 'Phnom Penh' ],
            [ 'code' => 'KAN', 'name' => 'Kandal' ],
            [ 'code' => 'CHH', 'name' => 'Kampong Chhnang' ],
            [ 'code' => 'PUR', 'name' => 'Pursat' ],
            [ 'code' => 'BAT', 'name' => 'Battambang' ],
            [ 'code' => 'BAN', 'name' => 'Bantey Meanchey' ],
            [ 'code' => 'ODD', 'name' => 'Odor Meanchey' ],
            [ 'code' => 'PRH', 'name' => 'Preah Vihear' ],
            [ 'code' => 'SIE', 'name' => 'Siemreap' ],
            [ 'code' => 'STU', 'name' => 'Stung Traeng' ],
            [ 'code' => 'KRA', 'name' => 'Kratie' ],
            [ 'code' => 'MON', 'name' => 'Mondulkiri' ],
            [ 'code' => 'RAT', 'name' => 'Ratanakiri' ],
            [ 'code' => 'THO', 'name' => 'Kampong Thom' ],
            [ 'code' => 'CHA', 'name' => 'Kampong Cham' ],
            [ 'code' => 'PRE', 'name' => 'Preyvieng' ],
            [ 'code' => 'SVA', 'name' => 'Svayrieng' ],
            [ 'code' => 'TAK', 'name' => 'Takeo' ],
            [ 'code' => 'KAM', 'name' => 'Kampot' ],
            [ 'code' => 'SIH', 'name' => 'Shihanuk Ville' ],
            [ 'code' => 'SPE', 'name' => 'Kampong Speu' ],
            [ 'code' => 'KOH', 'name' => 'Koh Kong' ],
        ]);
    }
}
