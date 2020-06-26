<?php

namespace App\Http\Repository;

use Illuminate\Support\Facades\Storage;
use App\{product};

class ProductRepository
{


    public function get()
    {
        return product::paginate(50);
    }

}
