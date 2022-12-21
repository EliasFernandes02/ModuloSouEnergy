<?php

namespace DigitalCollege\Dev\Observer;

use Magento\Framework\Event\ObserverInterface;
use DigitalCollege\Dev\Model\DigitalFactory;

class DigitalLogin implements ObserverInterface
{

    protected $digitalFactory;

    public function __construct(DigitalFactory $digitalFactory)
    {
        $this->digitalFactory = $digitalFactory;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        echo "Paramos na Nossa Observer!";
        $customer = $observer->getEvent()->getCustomer();
        echo '<br>';
        echo $customer->getName(); //O Método é o nome da coluna
        echo '<br>';
        echo $customer->getEmail(); //O Método é o nome da coluna
        echo '<br>';
        echo $customer->getGroupId(); //O Método é o nome da coluna
        $this->saveData($customer->getName(),$customer->getEmail());
        exit;
    }

    public function saveData($name,$email,$obs = 'nada obs!'){
        $dc = $this->digitalFactory->create();
        $dc->setData([
            'author_name' => $name,
            'email' => $email,
            'description' => $obs,
            ]
        );
        $dc->save();
    }

}