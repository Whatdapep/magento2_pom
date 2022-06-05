<?php

namespace AddONs\CustomLogFile\Observer;

class CustomerLoginSuccess implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @var \AddONs\CustomLogFile\Logger\Customer
     */
    protected $loggerCustomer;

    /**
     * @param \AddONs\CustomLogFile\Logger\Customer $loggerCustomer
     */
    public function __construct(
        \AddONs\CustomLogFile\Logger\Customer $loggerCustomer
    ) {
        $this->loggerCustomer = $loggerCustomer;
    }

    /**
     * Handler for 'customer_login' event.
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $customer = $observer->getEvent()->getCustomer();
        $this->loggerCustomer->info('Customer ID: '.$customer->getId().' has been logged in successfully!');
    }
}
