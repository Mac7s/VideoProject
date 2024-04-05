<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $logos = [
            'fa fa-music',
            'fa fa-soccer-ball-o',
            'fa fa-gamepad'
        ];
        $names = [
            'موسیقی',
            'ورزشی',
            'بازی'
        ];
        for($i=0; $i<3; $i++){
            Category::create([
                'name'=>$names[$i],
                'logo'=>$logos[$i]
            ]);
        }
    }
}
