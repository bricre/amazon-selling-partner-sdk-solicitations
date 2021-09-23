<?php

namespace Amz\Solicitations\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Describes a solicitation action that can be taken for an order. Provides a JSON
 * Hypertext Application Language (HAL) link to the JSON schema document that
 * describes the expected input.
 */
class GetSolicitationActionResponse extends AbstractModel
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
     * @var \Amz\Solicitations\Model\SolicitationsAction
     */
    public $payload = null;

    /**
     * @var \Amz\Solicitations\Model\ErrorList
     */
    public $errors = null;
}
