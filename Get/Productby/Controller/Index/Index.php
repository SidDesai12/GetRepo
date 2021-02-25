<?php

namespace Mastering\SampleModule\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{

    /**
     * @var \Magento\Framework\Controller\Result\JsonFactory
     */
    private $jsonResultFactory;

    public function __construct(
    
        \Magento\Framework\Controller\Result\JsonFactory $jsonResultFactory
    
    ){
    
        $this->jsonResultFactory = $jsonResultFactory;
    }

    public function execute()
    {
        $data = $details;
        $result = $this->jsonResultFactory->create();
        $result->setData($data);
        return $result;


    }
    // public function execute()
    // {
    //     /** @var \Magento\Framework\Controller\Result\Raw $result */
    //     $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
    //     $result->setContents('Hello World!');
    //     return $result;
    // }
}







