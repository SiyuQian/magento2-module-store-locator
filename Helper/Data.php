<?php
/**
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile\StoreLocator
 * @author   Aurelien FOUCRET <aurelien.foucret@gmail.com>
 * @copyright 2016 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */
namespace Smile\StoreLocator\Helper;

use Smile\Retailer\Api\Data\RetailerInterface;

/**
 * Store locator helper.
 *
 * @category Smile
 * @package  Smile\StoreLocator
 * @author   Aurelien FOUCRET <aurelien.foucret@gmail.com>
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var \Smile\StoreLocator\Model\Url
     */
    private $urlModel;

    /**
     * Constructor.
     *
     * @param \Magento\Framework\App\Helper\Context $context  Helper context.
     * @param \Smile\StoreLocator\Model\Url         $urlModel Retailer URL model.
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Smile\StoreLocator\Model\Url $urlModel
    ) {
        parent::__construct($context);
        $this->urlModel = $urlModel;
    }

    /**
     * Store locator home URL.
     *
     * @param int|NULL $storeId Store id.
     *
     * @return string
     */
    public function getHomeUrl($storeId = null)
    {
        return $this->urlModel->getHomeUrl($storeId);
    }

    /**
     * Retailer URL.
     *
     * @param RetailerInterface $retailer Retailer.
     *
     * @return string
     */
    public function getRetailerUrl(RetailerInterface $retailer)
    {
        return $this->urlModel->getUrl($retailer);
    }
}
