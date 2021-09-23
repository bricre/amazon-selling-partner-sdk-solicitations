<?php

namespace Amz\Solicitations\Api;

use Amz\Solicitations\Model\CreateProductReviewAndSellerFeedbackSolicitationResponse as CreateProductReviewAndSellerFeedbackSolicitationResponse;
use Amz\Solicitations\Model\GetSolicitationActionsForOrderResponse as GetSolicitationActionsForOrderResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Solicitations extends AbstractAPI
{
    /**
     * Returns a list of solicitation types that are available for an order that you
     * specify. A solicitation type is represented by an actions object, which contains
     * a path and query parameter(s). You can use the path and parameter(s) to call an
     * operation that sends a solicitation. Currently only the
     * productReviewAndSellerFeedbackSolicitation solicitation type is available.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $amazonOrderId An Amazon order identifier. This specifies the order for
     * which you want a list of available solicitation types.
     * @param array $queries options:
     *                       'marketplaceIds'		A marketplace identifier. This specifies the marketplace in
     *                       which the order was placed. Only one marketplace can be specified.
     *
     * @return GetSolicitationActionsForOrderResponse
     */
    public function getSolicitationActionsForOrder($amazonOrderId, array $queries = []): GetSolicitationActionsForOrderResponse
    {
        return $this->client->request('getSolicitationActionsForOrder', 'GET', "solicitations/v1/orders/{$amazonOrderId}",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Sends a solicitation to a buyer asking for seller feedback and a product review
     * for the specified order. Send only one productReviewAndSellerFeedback or free
     * form proactive message per order.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $amazonOrderId An Amazon order identifier. This specifies the order for
     * which a solicitation is sent.
     * @param array $queries options:
     *                       'marketplaceIds'		A marketplace identifier. This specifies the marketplace in
     *                       which the order was placed. Only one marketplace can be specified.
     *
     * @return CreateProductReviewAndSellerFeedbackSolicitationResponse
     */
    public function createProductReviewAndSellerFeedbackSolicitation($amazonOrderId, array $queries = []): CreateProductReviewAndSellerFeedbackSolicitationResponse
    {
        return $this->client->request('createProductReviewAndSellerFeedbackSolicitation', 'POST', "solicitations/v1/orders/{$amazonOrderId}/solicitations/productReviewAndSellerFeedback",
            [
                'query' => $queries,
            ]
        );
    }
}
