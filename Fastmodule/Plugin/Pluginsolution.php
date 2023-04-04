<?php 

namespace Simplifiedmagento\Fastmodule\Plugin;

class Pluginsolution 
{


    // public function beforesetName(\Magento\Catalog\Model\Product $subject , $result)
    // {
    //     return "before plugin". $result; 
    // }

    // public function aftersetName(\Magento\Catalog\Model\Product $subject , $result)
    // {
    //     return "After plugin". $result; 
    // }

    public function aroundsetName(\Magento\Catalog\Model\Product $subject ,callable $proceed,$result)
    {
    
        echo $result . " name of the product before execution ";
        echo"<hr>";
       
        $this->proceed=$proceed($result);

        if($result =="iphone"){
            $result="after proceed";
            $this->proceed=$proceed($result);
        }
        

    }

}