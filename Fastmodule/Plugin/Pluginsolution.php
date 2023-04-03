<?php 

namespace Simplifiedmagento\Fastmodule\Plugin;

class Pluginsolution 
{


    // public function beforesetname(\Magento\Catalog\Model\Product $subject , $result)
    // {
    //     return "before plugin". $result; 
    // }

    // public function aftersetname(\Magento\Catalog\Model\Product $subject , $result)
    // {
    //     return "After plugin". $result; 
    // }

    public function aroundsetname(\Magento\Catalog\Model\Product $subject ,callable $proceed, $result)
    {
        return "before plugin". $result;
        echo "<br>";
        $this->proceed=$proceed;
        return $result."after plugin";
        echo "<br>";
        return $result;
    }

}