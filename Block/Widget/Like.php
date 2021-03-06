<?php
namespace Peec\Facebook\Block\Widget;

use Magento\Framework\UrlInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\App\Config\_scopeConfigInterface;

class Like extends Template implements \Magento\Widget\Block\BlockInterface
{
    /**
     * Extension config path
     */
    const XML_PATH_FB = 'peec_facebook/likes/';
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data
    ) {
        parent::__construct($context, $data);
        $this->setTemplate('widget/like.phtml');
    }
    public function getShowFaces()
    {
        return $this->_scopeConfig->getValue(static::XML_PATH_FB . 'show_faces', ScopeInterface::SCOPE_STORE);
    }
    public function getShare()
    {
        return $this->_scopeConfig->getValue(static::XML_PATH_FB . 'share', ScopeInterface::SCOPE_STORE);
    }
    public function getAction()
    {
        return $this->_scopeConfig->getValue(static::XML_PATH_FB . 'action', ScopeInterface::SCOPE_STORE);
    }
    public function getColorScheme()
    {
        return $this->_scopeConfig->getValue(static::XML_PATH_FB . 'color_scheme', ScopeInterface::SCOPE_STORE);
    }
    public function getProductLayout()
    {
        return $this->_scopeConfig->getValue(static::XML_PATH_FB . 'product_layout', ScopeInterface::SCOPE_STORE);
    }
    public function getCategoryLayout()
    {
        return $this->_scopeConfig->getValue(static::XML_PATH_FB . 'category_layout', ScopeInterface::SCOPE_STORE);
    }
    public function getDataRef()
    {
        return $this->_scopeConfig->getValue(static::XML_PATH_FB . 'data_ref', ScopeInterface::SCOPE_STORE);
    }
    public function getWidth()
    {
        return $this->_scopeConfig->getValue(static::XML_PATH_FB . 'width', ScopeInterface::SCOPE_STORE);
    }
    public function getUrlInterface()
    {
        return $this->_urlBuilder;
    }
}