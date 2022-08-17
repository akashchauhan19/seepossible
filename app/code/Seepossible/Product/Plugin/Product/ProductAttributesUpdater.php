<?php

namespace Seepossible\Product\Plugin\Product;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Helper\Data;

class ProductAttributesUpdater
{
    private $productHelper;

    public function __construct(Data $productHelper)
    {
        $this->productHelper = $productHelper;
    }

	/**
     * Update product name with prefix
     *
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function afterGetName(Product $subject, $result)
    {
        return 'See Possible' . $result;
    }
}