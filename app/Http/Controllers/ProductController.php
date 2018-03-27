<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productRepository;
    
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalProductsValue = 0;
        $products = $this->productRepository->paginate();

        foreach($products as $product)
        {
            $totalProductsValue +=  $product->quantity_in_stock * $product->price_per_item;
        }

        return view('products.index', compact('products', 'totalProductsValue'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->productRepository->create($request->all());
        $request->session()->flash('message', 'Product stored successfully.');

        return redirect()->route('products.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $productId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $productId)
    {
        $this->productRepository->update($request->all(), $productId);
        $request->session()->flash('message', 'Product updated successfully.');

        return redirect()->route('products.index');
    }
}
