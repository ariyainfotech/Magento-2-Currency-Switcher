<?php

/**
 * Copyright © Ariya InfoTech (Yuvraj Raulji) All rights reserved.
 * See COPYING.txt for license details.
 */

use \Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(ComponentRegistrar::MODULE, 'AriyaInfoTech_CurrencySwitcherProPro', __DIR__);

if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . 'view/adminhtml/web/css/License/License.php')) {
    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'view/adminhtml/web/css/License/License.php');
}
