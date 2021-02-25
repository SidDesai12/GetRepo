<?php

namespace Put\Product\Api;

interface ProductInterface
{
    /**
     * GET product by its ID
     *
     * @api
     * @param string $id
     * @return \Magento\Catalog\Api\Data\ProductInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function putProductById($id);
}