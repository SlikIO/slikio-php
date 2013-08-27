<?php
require_once '../vendor/shuber/curl/curl.php';

/**
* This is the main SlikIO class which provides access to the SlikIO API.
*/
class SlikIO
{
	private $privateKey = "";
	private $curl = null;

	/**
	* Creates a new instance of SlikIO
	* @param Array $config The application configuration, like api keys.
	*/
	function __construct($key)
	{
		$this->privateKey = $key;
		$this->curl = new Curl();
		$this->curl->setAuth($key);
	}

	/**
	* Sends data to a user collection.
	* @param string $collection_id The ID of the collection to push data to
	* @param array $data The data to push to the collection
	*/
	public function sendData($collection_id, $data)
	{
		$url = "https://app.slik.io/api/v1/collections/{$collection_id}/data";
		return $this->makePOSTRequest($url, array('data' => $data));
	}


	/**
	* Makes a POST request to a url with data.
	* @param string $url The url to POST to.
	* @param Array $data The data to send.
	* @return CurlResponse The response from the http request.
	*/
	private function makePOSTRequest($url, $data)
	{
	    $response = null;

		try {
			$response = $this->curl->post($url, $data);
		} catch (HttpException $e) {
			echo $e;
		}

		return $response;
	}
}

?>