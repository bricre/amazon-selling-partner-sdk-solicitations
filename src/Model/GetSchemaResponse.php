<?php

namespace Amz\Solicitations\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class GetSchemaResponse extends AbstractModel
{
    /**
     * @var object
     */
    public $_links = null;

    /**
     * @var \Amz\Solicitations\Model\Schema
     */
    public $payload = null;

    /**
     * @var \Amz\Solicitations\Model\ErrorList
     */
    public $errors = null;
}
