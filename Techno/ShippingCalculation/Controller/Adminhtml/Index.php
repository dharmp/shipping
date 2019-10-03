<?php
/**
 * Copyright © Techno, Inc. All rights reserved.
 */

namespace Techno\ShippingCalculation\Controller\Adminhtml;

/**
 * Shipping Calculation controller for acl
**/

abstract class Index extends \Magento\Backend\App\Action
{

  /**
  * Authorization level of a basic admin session
  *
  * @see _isAllowed()
  */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Techno_ShippingCalculation::shipping_tax');
    }
}
