<?php

namespace Simplifiedmagento\Fastmodule\Model;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

class Customeimplementaion implements ProductRepositoryInterface
{
    public function save(ProductInterface $product, $saveOptions = false)
    {
        // TODO: Implement save() method.
    }

    public function get($sku, $editMode = false, $storeId = null, $forceReload = false)
    {
        // TODO: Implement get() method.
    }

    public function getById($productId, $editMode = false, $storeId = null, $forceReload = false)
    {
        // TODO: Implement getById() method.
    }

    public function delete(ProductInterface $product)
    {
        // TODO: Implement delete() method.
    }

    public function deleteById($productId)
    {
        // TODO: Implement deleteById() method.
    }

    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        // TODO: Implement getList() method.
    }
}
