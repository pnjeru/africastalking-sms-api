<?php

namespace Aft;
/**
 * send sms 
 */
class SMS extends AfricasTalkingGateway
{
	/**
	 * phone number or array of recepient
	 * @var [type]
	 */
	protected $recepient;

	/**
	 * Message body
	 * @var [type]
	 */
	protected $body;

	/**
	 * Create aft object
	 * @var [type]
	 */
	protected  static $gateway;


	/**
	 * validate phone and messageBosdy
	 * @return [type] [description]
	 */
	public  static function prepare()
	{
			$apiKey = \Config::get('aft.apikey');
			$environment = \Config::get('aft.environment');
			$username = $environment=="sandbox"?'sandbox':\Config::get('aft.username');

			if($username == 'sandbox'){
				self::$gateway =  new AfricasTalkingGateway($username, $apiKey, 'sandbox');
			}else{

				self::$gateway =  new AfricasTalkingGateway($username, $apiKey);
			}
	}

	/**
	 * Implement Aft Gateway here
	 * @return [type] [description]
	 */
	public static function send($recipients, $message){
		
		self::prepare();

		try { 
			$results = self::$gateway->sendMessage($recipients, $message);
			return $results;
		}catch ( AfricasTalkingGatewayException $e ){
			return $e;
		}
	}
}