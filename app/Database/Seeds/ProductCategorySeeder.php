<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        //Membuat data
        $data = [
            [
                'kategori' => 'Elektronik',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'kategori' => 'Laptop',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'kategori' => 'Hardware',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'kategori' => 'Handphone',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'kategori' => 'Aksesoris',
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ];

        foreach($data as $items){
            $this->db->table('product_category')->insert($items);
        }
    }
}
