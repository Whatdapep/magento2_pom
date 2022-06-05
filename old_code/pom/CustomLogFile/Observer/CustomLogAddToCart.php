<?php

namespace AddONs\CustomLogFile\Observer;

class CustomLogAddToCart implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @var \AddONs\CustomLogFile\Logger\Add
     */
    protected $loggerProductTracking;

    /**
     * @param \AddONs\CustomLogFile\Logger\Add $loggerProductTracking
     */
    public function __construct(
        \AddONs\CustomLogFile\Logger\Add $loggerProductTracking
    ) {
        $this->loggerProductTracking = $loggerProductTracking;
    }

    /**
     * Handler for 'customer_login' event.
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        // $customer = $observer->getEvent()->getCustomer();
        $this->loggerProductTracking->info("Test Product Tracking Log");
    }
}
