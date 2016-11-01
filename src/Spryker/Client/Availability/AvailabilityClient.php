<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\Availability;

use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \Spryker\Client\Availability\AvailabilityFactory getFactory()
 */
class AvailabilityClient extends AbstractClient implements AvailabilityClientInterface
{

    /**
     * @api
     *
     * @param int $idProductAbstract
     *
     * @return \Generated\Shared\Transfer\StorageAvailabilityTransfer
     */
    public function getProductAvailabilityByIdProductAbstract($idProductAbstract)
    {
        $locale = $this->getFactory()->getLocaleClient()->getCurrentLocale();
        $availabilityStorage = $this->getFactory()->createAvailabilityStorage($locale);
        $availability = $availabilityStorage->getProductAvailability($idProductAbstract);

        return $availability;
    }

}