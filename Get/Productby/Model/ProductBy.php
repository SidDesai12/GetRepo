<?php
namespace Get\Productby\Model;

use Get\Productby\Api\ProductByInterface;

class ProductBy implements ProductByInterface
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


    public function getProductById($id)
    {

        $product_data=$this->productRepository->getById($id);
        $name = "Name : ".$product_data->getName();
        $sku = "Sku : ".$product_data->getSku();
        $desc = "Description: ".$product_data->getDescription();
        $price = "Price : ".$product_data->getPrice();
        $product_status = "Status : ".$product_data->getStatus();
        $details = array($name,$sku,$desc,$price,$product_status);

        
         return $details;

        
    }
}