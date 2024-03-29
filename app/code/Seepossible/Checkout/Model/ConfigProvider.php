<?php 

namespace Seepossible\Checkout\Model;
 
use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Framework\View\LayoutInterface;
 
class ConfigProvider implements ConfigProviderInterface
{
   protected $_layout;
   
   protected $cmsBlock;
 
   public function __construct(LayoutInterface $layout, $blockId)
   {
       $this->_layout = $layout;
       $this->cmsBlock = $this->constructBlock($blockId);
   }
 
   public function constructBlock($blockId){
       $block = $this->_layout->createBlock('Magento\Cms\Block\Block')
           ->setBlockId($blockId)->toHtml();
       return $block;
   }
 
   public function getConfig()
   {
       return [
           'cms_block' => $this->cmsBlock
       ];
   }
}