<?php
namespace Mageplaza\HelloWorld\Block;

use GuzzleHttp\Client;
use GuzzleHttp\ClientFactory;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\ResponseFactory;

class Display extends \Magento\Framework\View\Element\Template
{
	public function __construct(\Magento\Framework\View\Element\Template\Context $context)
	{
		parent::__construct($context);
	}

    public function showExchangeRate()
	{
		$client = new Client();
        $response = $client->get('https://tw.rter.info/capi.php');

        return $response->getBody();
	}
}
