<?php

namespace Simplifiedmagento\Fastmodule\Controller\Page;

use Simplifiedmagento\Fastmodule\Notmagento\Pencilinterface;
use Magento\Framework\App\Action\Context;
use Magento\Catalog\Model\ProductFactory;
use Simplifiedmagento\Fastmodule\Helper;

class Helloworld extends \Magento\Framework\App\Action\Action
{
    protected $Pencil;
    protected $ProductFactory;
    

    public function __construct(Context $context, Pencilinterface $Pencil, ProductFactory $ProductFactory)
    {
        parent::__construct($context);
        $this->Pencil = $Pencil;
        $this->productFactory=$ProductFactory;
        
    }

    public function execute()
    {
        echo "module creation was a success move to the next step fast";
        echo "<br>";
        echo "<hr>";
        echo $this->Pencil->getPencilType();
        echo "<hr>";
        echo "interface understanding,implementation,dependency injuction done ";
        echo "<br>";
        echo "<hr>";
        $product =$this->productFactory->create()->load(1);
        $product->setName("iphone");
        $productName=$product->getName();
        echo $productName; 

    }
}

