<?php
/**
* Simple\Ageverification\Block\Ageverification
*/
namespace Simple\Ageverification\Block;
use Magento\Framework\View\Element\Template\Context;
use Magento\Customer\Model\Session;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Ageverification extends \Magento\Framework\View\Element\Template
{
    
   /**
   * Ageverification enable configuration path
   */
   const XML_PATH_ENABLE_AGEVERIFICATION_POPUP = 'ageverification/general/enable';
    
   /**
   * Ageverification cookie interval configuration path
   */
   const XML_PATH_COOKIE_INTERVAL_AGEVERIFICATION_POPUP = 'ageverification/general/cookie_time_interval';
    
    /**
   * Ageverification popup content configuration path
   */
   const XML_PATH_POPUP_CONTENT_AGEVERIFICATION_POPUP = 'ageverification/general/popup_content';
    
   /**
   * Ageverification title content configuration path
   */
   const XML_PATH_TITLE_AGEVERIFICATION_POPUP = 'ageverification/general/verification_title';
    
   /**
   * Ageverification verification type configuration path
   */
   const XML_PATH_VERIFICATION_TYPE_AGEVERIFICATION_POPUP = 'ageverification/general/age_verification_type';
    
   /**
   * @var \Magento\Framework\App\Config\ScopeConfigInterface
   */
   protected $scopeConfig;
    
   /**
   * @var \Magento\Customer\Model\Session
   */
   protected $customerSession;
    
   /**
   * @var \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
   */
   protected $storeScope;

    /**
    * Context $context
    * ScopeConfigInterface $scopeConfig
    * Session $customerSession
    */
    public function __construct(Context $context, ScopeConfigInterface $scopeConfig, Session $customerSession)
	{
        $this->scopeConfig = $scopeConfig;
        $this->customerSession = $customerSession;
        $this->storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
		parent::__construct($context);
	}
    
    /**
    * function returns module status enable/disable
    * @return bool
    */
    public function getModuleStatus(){
        return $this->scopeConfig->getValue(self::XML_PATH_ENABLE_AGEVERIFICATION_POPUP, $this->storeScope);
    }
    
    /**
    * function returns cookie interval from system configuration
    * @retun integer
    */
    public function getCookieInterval(){
      return $this->scopeConfig->getValue(self::XML_PATH_COOKIE_INTERVAL_AGEVERIFICATION_POPUP, $this->storeScope);  
    }
    
    /**
    * function returns Popup content
    * @retun String
    */
    public function getPopupContent(){
      return $this->scopeConfig->getValue(self::XML_PATH_POPUP_CONTENT_AGEVERIFICATION_POPUP, $this->storeScope);  
    }
    /**
    * function returns Popup title
    * @retun String
    */
    public function getAgeVerificationPopupTitle(){
        return $this->scopeConfig->getValue(self::XML_PATH_TITLE_AGEVERIFICATION_POPUP, $this->storeScope);  
    }
    
    /**
    * function returns Verification type
    * @retun String
    */
    public function getAgeVerificationType(){
        return $this->scopeConfig->getValue(self::XML_PATH_VERIFICATION_TYPE_AGEVERIFICATION_POPUP, $this->storeScope);  
    }
}