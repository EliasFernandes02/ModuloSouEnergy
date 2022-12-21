<?php
namespace DigitalCollege\Dev\Block;
use DigitalCollege\Dev\Model\DigitalFactory;
class Index extends \Magento\Framework\View\Element\Template
{
    protected $digitalFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, 
    DigitalFactory $digitalFactory, array $data = []) {
        $this->digitalFactory = $digitalFactory;
        $this->_productCollectionFactory = $productCollectionFactory;
        return parent::__construct($context);
    }

    public function getProductCollection()
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        $collection->setPageSize(3); // dando fetch em 3 produtos
        return $collection;
    }

    public function getDados(){
        $dados = $this->digitalFactory->create()->getCollection();
        return $dados->getData();
    }

    public function saveData(){
        $dados = $this->digitalFactory->create();
        $dados->setData([
            'author_name'=>'Elias',
            'email'=>'elias@email.com',
            'description'=>'agora vai',
        ]
    );
    $dados->save();
    }
}