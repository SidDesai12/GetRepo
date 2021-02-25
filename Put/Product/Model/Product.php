<?php
namespace Put\Product\Model;

use Put\Product\Api\ProductInterface;

class Product implements ProductInterface
{

    /**
     * @var \Magento\Catalog\Api\ProductRepositoryInterface
     */
    protected $productRepository;

    public function __construct(
       \Magento\Catalog\Api\ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * {@inheritdoc}
     */


    public function putProductById($id)
    {

        $product_data=$this->productRepository->getById($id);
        $name = $product_data->setName();
        $quantity = $product_data->setQty();
        $product_status = $product_data->setStatus(); 
    }
}