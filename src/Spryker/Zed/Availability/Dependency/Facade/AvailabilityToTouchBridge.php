<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Availability\Dependency\Facade;

use Spryker\Zed\Touch\Business\TouchFacadeInterface;

class AvailabilityToTouchBridge implements AvailabilityToTouchInterface
{

    /**
     * @var TouchFacadeInterface
     */
    protected $touchFacade;

    /**
     * @param TouchFacadeInterface $touchFacade
     */
    public function __construct($touchFacade)
    {
        $this->touchFacade = $touchFacade;
    }

    /**
     * @param string $itemType
     * @param int $idItem
     * @param bool $keyChange
     *
     * @return bool
     */
    public function touchActive($itemType, $idItem, $keyChange = false)
    {
        return $this->touchFacade->touchActive($itemType,$idItem, $keyChange);
    }
}