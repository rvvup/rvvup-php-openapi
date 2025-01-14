<?php
/**
 * StatementExportsApi
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
 * Generator version: 7.10.0
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
 * StatementExportsApi Class Doc Comment
 *
 * @category Class
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StatementExportsApi
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
        'exportStatement' => [
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
     * Operation exportStatement
     *
     * Export a statement
     *
     * @param  string $merchant_id merchant id (required)
     * @param  \Rvvup\Api\Model\StatementExportRequest $statement_export_request Statement export filters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['exportStatement'] to see the possible values for this operation
     *
     * @throws \Rvvup\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function exportStatement($merchant_id, $statement_export_request, string $contentType = self::contentTypes['exportStatement'][0])
    {
        $this->exportStatementWithHttpInfo($merchant_id, $statement_export_request, $contentType);
    }

    /**
     * Operation exportStatementWithHttpInfo
     *
     * Export a statement
     *
     * @param  string $merchant_id merchant id (required)
     * @param  \Rvvup\Api\Model\StatementExportRequest $statement_export_request Statement export filters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['exportStatement'] to see the possible values for this operation
     *
     * @throws \Rvvup\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function exportStatementWithHttpInfo($merchant_id, $statement_export_request, string $contentType = self::contentTypes['exportStatement'][0])
    {
        $request = $this->exportStatementRequest($merchant_id, $statement_export_request, $contentType);

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


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation exportStatementAsync
     *
     * Export a statement
     *
     * @param  string $merchant_id merchant id (required)
     * @param  \Rvvup\Api\Model\StatementExportRequest $statement_export_request Statement export filters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['exportStatement'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function exportStatementAsync($merchant_id, $statement_export_request, string $contentType = self::contentTypes['exportStatement'][0])
    {
        return $this->exportStatementAsyncWithHttpInfo($merchant_id, $statement_export_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation exportStatementAsyncWithHttpInfo
     *
     * Export a statement
     *
     * @param  string $merchant_id merchant id (required)
     * @param  \Rvvup\Api\Model\StatementExportRequest $statement_export_request Statement export filters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['exportStatement'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function exportStatementAsyncWithHttpInfo($merchant_id, $statement_export_request, string $contentType = self::contentTypes['exportStatement'][0])
    {
        $returnType = '';
        $request = $this->exportStatementRequest($merchant_id, $statement_export_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'exportStatement'
     *
     * @param  string $merchant_id merchant id (required)
     * @param  \Rvvup\Api\Model\StatementExportRequest $statement_export_request Statement export filters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['exportStatement'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function exportStatementRequest($merchant_id, $statement_export_request, string $contentType = self::contentTypes['exportStatement'][0])
    {

        // verify the required parameter 'merchant_id' is set
        if ($merchant_id === null || (is_array($merchant_id) && count($merchant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $merchant_id when calling exportStatement'
            );
        }

        // verify the required parameter 'statement_export_request' is set
        if ($statement_export_request === null || (is_array($statement_export_request) && count($statement_export_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $statement_export_request when calling exportStatement'
            );
        }


        $resourcePath = '/api/2024-03-01/{merchantId}/statements/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($merchant_id !== null) {
            $resourcePath = str_replace(
                '{' . 'merchantId' . '}',
                ObjectSerializer::toPathValue($merchant_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/octet-stream', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($statement_export_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($statement_export_request));
            } else {
                $httpBody = $statement_export_request;
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
