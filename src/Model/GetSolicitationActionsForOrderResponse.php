<?php

namespace Amz\Solicitations\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getSolicitationActionsForOrder operation.
 */
class GetSolicitationActionsForOrderResponse extends AbstractModel
{
    /**
     * @var object
     */
    public $_links = null;

    /**
     * @var object
     */
    public $_embedded = null;

    /**
     * @var \Amz\Solicitations\Model\ErrorList
     */
    public $errors = null;
}
