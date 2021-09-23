<?php

namespace Amz\Solicitations\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A Link object.
 */
class LinkObject extends AbstractModel
{
    /**
     * A URI for this object.
     *
     * @var string
     */
    public $href = null;

    /**
     * An identifier for this object.
     *
     * @var string
     */
    public $name = null;
}
