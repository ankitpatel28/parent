<?php
namespace Menu\Top\Controller\Index;
 use Magento\Framework\App\Action\Context;


class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory
	)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		//die('hi');
		return $this->_pageFactory->create();
	}
       

}       
?>