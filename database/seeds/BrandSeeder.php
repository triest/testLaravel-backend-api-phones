<?php

    use App\Models\Brand;
    use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{

    public function run()
    {
        //
        Brand::create([
                'title' => "Apple"
        ]);

        Brand::create([
                'title' => "Samsung"
        ]);

        Brand::create([
                'title' => "Nokia"
        ]);
    }
}
