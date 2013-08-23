<?php
require_once 'curl.php';

/**
* This is the main SlikIO class which provides access to the SlikIO API.
*/
class SlikIO
{
	private $privateKey;
	private $curl;

	/**
	* Creates a new instance of SlikIO
	* @param Array $config The application configuration, like api keys.
	*/
	function __construct($config)
	{
		$secretKey = $config['private'];
		$curl = new Curl();
	}

	/**
	* Sends data to a user collection.
	* @param string $collection_id The ID of the collection to push data to
	* @param array $data The data to push to the collection
	*/
	public function sendData($collection_id, $data)
	{
		$url = "http://{$privateKey}:@localhost:3000/api/v1/collections/{$collection_id}/data"
		makePOSTRequest($url, $data);
	}


	/**
	* Makes a POST request to a url with data.
	* @param string $url The url to POST to.
	* @param Array $data The data to send.
	* @return CurlResponse The response from the http request.
	*/
	private makePOSTRequest($url, $data)
	{
	    $response = null;

		try {
			$response = $curl->post($url, $data);
		} catch (HttpException $e) {
			echo $e;
		}

		return $response
	}
}

?>