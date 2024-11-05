<?php
/**
 * PaymentSettingsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Rvvup API
 *
 * Rvvup Public API
 *
 * The version of the OpenAPI document: 2024-03-01
 * Contact: info@rvvup.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Rvvup\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Rvvup\ApiException;
use Rvvup\Configuration;
use Rvvup\HeaderSelector;
use Rvvup\ObjectSerializer;

/**
 * PaymentSettingsApi Class Doc Comment
 *
 * @category Class
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentSettingsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getPaymentSettings' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getPaymentSettings
     *
     * Get payment settings for a merchant
     *
     * @param  string $merchant_id merchant id (required)
     * @param  \Rvvup\Api\Model\PaymentSettingsContext $payment_settings_context Context in which to fetch the settings (required)
     * @param  int $offset pagination offset (optional)
     * @param  int $limit pagination limit (optional)
     * @param  string $mpk merchant public key (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentSettings'] to see the possible values for this operation
     *
     * @throws \Rvvup\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Rvvup\Api\Model\PaymentMethodDetailsPage
     */
    public function getPaymentSettings($merchant_id, $payment_settings_context, $offset = null, $limit = null, $mpk = null, string $contentType = self::contentTypes['getPaymentSettings'][0])
    {
        list($response) = $this->getPaymentSettingsWithHttpInfo($merchant_id, $payment_settings_context, $offset, $limit, $mpk, $contentType);
        return $response;
    }

    /**
     * Operation getPaymentSettingsWithHttpInfo
     *
     * Get payment settings for a merchant
     *
     * @param  string $merchant_id merchant id (required)
     * @param  \Rvvup\Api\Model\PaymentSettingsContext $payment_settings_context Context in which to fetch the settings (required)
     * @param  int $offset pagination offset (optional)
     * @param  int $limit pagination limit (optional)
     * @param  string $mpk merchant public key (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentSettings'] to see the possible values for this operation
     *
     * @throws \Rvvup\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Rvvup\Api\Model\PaymentMethodDetailsPage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentSettingsWithHttpInfo($merchant_id, $payment_settings_context, $offset = null, $limit = null, $mpk = null, string $contentType = self::contentTypes['getPaymentSettings'][0])
    {
        $request = $this->getPaymentSettingsRequest($merchant_id, $payment_settings_context, $offset, $limit, $mpk, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if ('\Rvvup\Api\Model\PaymentMethodDetailsPage' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Rvvup\Api\Model\PaymentMethodDetailsPage' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Rvvup\Api\Model\PaymentMethodDetailsPage', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Rvvup\Api\Model\PaymentMethodDetailsPage';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Rvvup\Api\Model\PaymentMethodDetailsPage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPaymentSettingsAsync
     *
     * Get payment settings for a merchant
     *
     * @param  string $merchant_id merchant id (required)
     * @param  \Rvvup\Api\Model\PaymentSettingsContext $payment_settings_context Context in which to fetch the settings (required)
     * @param  int $offset pagination offset (optional)
     * @param  int $limit pagination limit (optional)
     * @param  string $mpk merchant public key (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentSettings'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentSettingsAsync($merchant_id, $payment_settings_context, $offset = null, $limit = null, $mpk = null, string $contentType = self::contentTypes['getPaymentSettings'][0])
    {
        return $this->getPaymentSettingsAsyncWithHttpInfo($merchant_id, $payment_settings_context, $offset, $limit, $mpk, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPaymentSettingsAsyncWithHttpInfo
     *
     * Get payment settings for a merchant
     *
     * @param  string $merchant_id merchant id (required)
     * @param  \Rvvup\Api\Model\PaymentSettingsContext $payment_settings_context Context in which to fetch the settings (required)
     * @param  int $offset pagination offset (optional)
     * @param  int $limit pagination limit (optional)
     * @param  string $mpk merchant public key (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentSettings'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentSettingsAsyncWithHttpInfo($merchant_id, $payment_settings_context, $offset = null, $limit = null, $mpk = null, string $contentType = self::contentTypes['getPaymentSettings'][0])
    {
        $returnType = '\Rvvup\Api\Model\PaymentMethodDetailsPage';
        $request = $this->getPaymentSettingsRequest($merchant_id, $payment_settings_context, $offset, $limit, $mpk, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getPaymentSettings'
     *
     * @param  string $merchant_id merchant id (required)
     * @param  \Rvvup\Api\Model\PaymentSettingsContext $payment_settings_context Context in which to fetch the settings (required)
     * @param  int $offset pagination offset (optional)
     * @param  int $limit pagination limit (optional)
     * @param  string $mpk merchant public key (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentSettings'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaymentSettingsRequest($merchant_id, $payment_settings_context, $offset = null, $limit = null, $mpk = null, string $contentType = self::contentTypes['getPaymentSettings'][0])
    {

        // verify the required parameter 'merchant_id' is set
        if ($merchant_id === null || (is_array($merchant_id) && count($merchant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $merchant_id when calling getPaymentSettings'
            );
        }

        // verify the required parameter 'payment_settings_context' is set
        if ($payment_settings_context === null || (is_array($payment_settings_context) && count($payment_settings_context) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_settings_context when calling getPaymentSettings'
            );
        }





        $resourcePath = '/api/2024-03-01/{merchantId}/payment-settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $mpk,
            'mpk', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($merchant_id !== null) {
            $resourcePath = str_replace(
                '{' . 'merchantId' . '}',
                ObjectSerializer::toPathValue($merchant_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payment_settings_context)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payment_settings_context));
            } else {
                $httpBody = $payment_settings_context;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
