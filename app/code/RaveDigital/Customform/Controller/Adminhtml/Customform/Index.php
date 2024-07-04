<?php
declare(strict_types=1);

namespace RaveDigital\Customform\Controller\Adminhtml\Customform;

class Index extends \Magento\Backend\App\Action
{

    protected $resultPageFactory;

    /**
     * Constructor
     *
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * Index action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
		$resultPage->setActiveMenu('RaveDigital::top_level');
		$resultPage->addBreadcrumb(__('Product Inquiry'), __('Product Inquiry'));
        $resultPage->addBreadcrumb(__('Manage Product Inquiry'), __('Manage Product Inquiry'));
            $resultPage->getConfig()->getTitle()->prepend(__("Manage Product Inquiry"));
            return $resultPage;
    }
}
