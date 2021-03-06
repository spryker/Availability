<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Availability\Communication\Plugin;

use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\Oms\Dependency\Plugin\ReservationHandlerPluginInterface;
use Spryker\Zed\Stock\Dependency\Plugin\StockUpdateHandlerPluginInterface;

/**
 * @deprecated Use {@link \Spryker\Zed\Oms\Communication\Plugin\Oms\ReservationHandler\ReservationVersionPostSaveTerminationAwareStrategyPlugin} instead.
 *
 * @method \Spryker\Zed\Availability\Business\AvailabilityFacadeInterface getFacade()
 * @method \Spryker\Zed\Availability\Communication\AvailabilityCommunicationFactory getFactory()
 * @method \Spryker\Zed\Availability\AvailabilityConfig getConfig()
 * @method \Spryker\Zed\Availability\Persistence\AvailabilityQueryContainerInterface getQueryContainer()
 */
class AvailabilityHandlerPlugin extends AbstractPlugin implements ReservationHandlerPluginInterface, StockUpdateHandlerPluginInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param string $sku
     *
     * @return void
     */
    public function handle($sku)
    {
        $this->getFacade()->updateAvailability($sku);
    }
}
