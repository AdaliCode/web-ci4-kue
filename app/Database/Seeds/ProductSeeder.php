<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        function getProduct($name, $category = 'Kue Basah')
        {
            $slug = strtolower(url_title($name, '-'));
            return ['name' => $name, 'slug' => $slug, 'category' => $category, 'created_at' => Time::now(), 'updated_at' => Time::now()];
        }
        array_push($data, getProduct('Kastengel', 'Kue Kering'));
        array_push($data, getProduct('kue bulan salju', 'Kue Kering'));
        array_push($data, getProduct('kukis', 'Kue Kering'));
        array_push($data, getProduct('kue soes'));
        array_push($data, getProduct('pie susu'));
        array_push($data, getProduct('pie coklat'));
        array_push($data, getProduct('Lemper'));
        array_push($data, getProduct('lapis legit'));
        array_push($data, getProduct('lapis'));
        array_push($data, getProduct('kue lapis'));
        array_push($data, getProduct('kue lumpur'));
        array_push($data, getProduct('martabak telor', 'Gorengan'));
        array_push($data, getProduct('martabak tahu', 'Gorengan'));
        array_push($data, getProduct('tahu Isi', 'Gorengan'));
        array_push($data, getProduct('Pastel', 'Gorengan'));
        array_push($data, getProduct('Pastel kerucut', 'Gorengan'));
        array_push($data, getProduct('risol mayones', 'Gorengan'));
        array_push($data, getProduct('Kroket', 'Gorengan'));
        array_push($data, getProduct('sosis solo', 'Gorengan'));
        array_push($data, getProduct('Korean Garlic Bread', 'Roti'));
        array_push($data, getProduct('roti keju', 'Roti'));
        array_push($data, getProduct('roti sosis', 'Roti'));
        array_push($data, getProduct('roti coklat', 'Roti'));
        $this->db->table('products')->insertBatch($data);
    }
}
