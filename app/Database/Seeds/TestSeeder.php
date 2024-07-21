<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class TestSeeder extends Seeder
{
    public function run()
    {
        // category
        $category = [];
        $getCategory = fn ($name) => ['name' => $name, 'id' => strtoupper(url_title($name, '-')), 'created_at' => Time::now(), 'updated_at' => Time::now()];
        array_push($category, $getCategory('Kue Kering'), $getCategory('Kue Basah'), $getCategory('Gorengan'), $getCategory('Roti'));
        $this->db->table('categories')->insertBatch($category);
        // ==========================================================================================
        $this->call('ProductSeeder');
    }
}
