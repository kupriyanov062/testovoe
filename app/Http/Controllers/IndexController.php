<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Repository\TypeRepository;
use App\Http\Repository\ProductRepository;
class IndexController extends Controller
{

    protected $type, $product;
    public function __construct(TypeRepository $typeRepository, ProductRepository $productRepository)
    {
//        $this->middleware('auth');
        $this->type = $typeRepository->get_all();
        $this->product = $productRepository->get();
    }

    public function index (Request $request){
        return view('index.index',['type'=>$this->type, 'product'=>$this->product]);
    }

   }
