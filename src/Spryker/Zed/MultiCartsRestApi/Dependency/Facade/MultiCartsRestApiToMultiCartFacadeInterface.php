<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MultiCartsRestApi\Dependency\Facade;

use Generated\Shared\Transfer\QuoteCriteriaFilterTransfer;

interface MultiCartsRestApiToMultiCartFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\QuoteCriteriaFilterTransfer $quoteCriteriaFilterTransfer
     *
     * @return \Generated\Shared\Transfer\QuoteCollectionTransfer
     */
    public function getQuoteCollectionByCriteria(QuoteCriteriaFilterTransfer $quoteCriteriaFilterTransfer);
}
