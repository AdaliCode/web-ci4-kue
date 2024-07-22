<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table            = 'categories';
    protected $useAutoIncrement = false;

    public function products($id)
    {
        return $this->table('categories')->select(['categories.*', 'GROUP_CONCAT(products.id order by products.name DESC SEPARATOR \',\' ) as all_products_id'])->join('products', 'categories.id = products.category_id', 'inner')->find($id);
    }
}
