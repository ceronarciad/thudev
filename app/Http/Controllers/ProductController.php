<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\ProductRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProductController extends AppBaseController
{
    /** @var  ProductRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the Product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $products = $this->productRepository->all();

        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->all();
        $isActive = null;
        $hasDiscount = null;
        
        if($request->isActive == true || $request->isActive == "on"){
            $isActive = 1;
        }else{
            $isActive = 0;
        }

        if($request->hasDiscount == true || $request->hasDiscount == "on"){
            $hasDiscount = 1;
        }else{
            $hasDiscount = 0;
        }

        $product = $this->productRepository->create($request->merge(['hasDiscount' => $hasDiscount, 'isActive' => $isActive])->all());

        Flash::success('¡Producto guardado exitosamente!');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Producto no encontrado');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Producto no encontrado');

            return redirect(route('products.index'));
        }

        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param int $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductRequest $request)
    {
        $product = $this->productRepository->find($id);
        $isActive = null;
        $hasDiscount = null;

        if (empty($product)) {
            Flash::error('Producto no encontrado');

            return redirect(route('products.index'));
        }
                
        if($request->isActive == true || $request->isActive == "on"){
            $isActive = 1;
        }else{
            $isActive = 0;
        }

        if($request->hasDiscount == true || $request->hasDiscount == "on"){
            $hasDiscount = 1;
        }else{
            $hasDiscount = 0;
        }
        $product = $this->productRepository->update($request->merge(['hasDiscount' => $hasDiscount, 'isActive' => $isActive])->all(), $id);


        Flash::success('¡Producto acutalizado exitosamente!');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Producto no encontrado');

            return redirect(route('products.index'));
        }

        $this->productRepository->delete($id);

        Flash::success('¡Producto eliminado exitosamente!');

        return redirect(route('products.index'));
    }
}
