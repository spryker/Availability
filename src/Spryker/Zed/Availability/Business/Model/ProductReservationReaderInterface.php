<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Availability\Business\Model;

use Generated\Shared\Transfer\ProductAbstractAvailabilityTransfer;
use Generated\Shared\Transfer\ProductConcreteAvailabilityRequestTransfer;
use Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer;

/**
 * @deprecated Use ProductAvailabilityReaderInterface instead.
 */
interface ProductReservationReaderInterface
{
    /**
     * @deprecated Use {@link \Spryker\Zed\Availability\Business\Model\ProductAvailabilityReaderInterface::findOrCreateProductAbstractAvailabilityBySkuForStore()} instead.
     *
     * @param int $idProductAbstract
     * @param int $idLocale
     *
     * @return \Generated\Shared\Transfer\ProductAbstractAvailabilityTransfer
     */
    public function getProductAbstractAvailability(int $idProductAbstract, int $idLocale): ProductAbstractAvailabilityTransfer;

    /**
     * @deprecated Use {@link \Spryker\Zed\Availability\Business\Model\ProductAvailabilityReaderInterface::findOrCreateProductConcreteAvailabilityBySkuForStore()} instead.
     *
     * @param \Generated\Shared\Transfer\ProductConcreteAvailabilityRequestTransfer $productConcreteAvailabilityRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer|null
     */
    public function findProductConcreteAvailability(
        ProductConcreteAvailabilityRequestTransfer $productConcreteAvailabilityRequestTransfer
    ): ?ProductConcreteAvailabilityTransfer;

    /**
     * @deprecated Use {@link \Spryker\Zed\Availability\Business\Model\ProductAvailabilityReaderInterface::findOrCreateProductAbstractAvailabilityBySkuForStore()} instead.
     *
     * @param int $idProductAbstract
     * @param int $idLocale
     * @param int $idStore
     *
     * @return \Generated\Shared\Transfer\ProductAbstractAvailabilityTransfer|null
     */
    public function findProductAbstractAvailability(int $idProductAbstract, int $idLocale, int $idStore): ?ProductAbstractAvailabilityTransfer;
}
