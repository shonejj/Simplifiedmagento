<?php

namespace Simplifiedmagento\Fastmodule\Controller\Page;

use Simplifiedmagento\Fastmodule\Notmagento\Pencilinterface;
use Magento\Framework\App\Action\Context;

class Helloworld extends \Magento\Framework\App\Action\Action
{
    protected $Pencil;

    public function __construct(Context $context, Pencilinterface $Pencil)
    {
        parent::__construct($context);
        $this->Pencil = $Pencil;
    }

    public function execute()
    {
        echo "module creation was a success move to the next step fast";
        echo "<br>";
        echo $this->Pencil->getPencilType();
    }
}
