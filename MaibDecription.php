<?php

namespace Fruitware\MaibApi;

use GuzzleHttp\Command\Guzzle\Description;

class MaibDecription extends Description {
	/**
	 * @param array $options Custom options to apply to the description
	 *     - formatter: Can provide a custom SchemaFormatter class
	 */
	public function __construct( array $options = [ ] ) {
		parent::__construct( [
			'name'       => 'Maib API',
//            'baseUrl' => 'https://ecomm.maib.md:4455/ecomm2/MerchantHandler/', // demo server
			'operations' => [
				'registerSmsTransaction'   => [
					'httpMethod'    => 'POST',
					'uri'           => '/ecomm2/MerchantHandler',
					'description'   => 'identifies the request for register SMS transaction',
					'responseModel' => 'getResponse',
					'parameters'    => [
						'command'        => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
						],
						'amount'         => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
//							'max'       => 12,
						],
						'currency'       => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
//							'max'       => 3,
						],
						'client_ip_addr' => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
							'max'      => 15,
						],
						'description'    => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => false,
							'max'      => 125,
						],
						'language'       => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => false,
							'max'      => 32,
						],
					]
				],
				'registerDmsAuthorization' => [
					'httpMethod'    => 'POST',
					'uri'           => '/ecomm2/MerchantHandler',
					'description'   => 'identifies the request for register DMS transaction',
					'responseModel' => 'getResponse',
					'parameters'    => [
						'command'        => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
						],
						'amount'         => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
							'max'      => 12,
						],
						'currency'       => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
							'max'      => 3,
						],
						'client_ip_addr' => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
							'max'      => 15,

						],
						'description'    => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => false,
							'max'      => 125,
						],
						'language'       => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => false,
							'max'      => 32,
						],
					]
				],
				'makeDMSTrans'             => [
					'httpMethod'    => 'POST',
					'uri'           => '/ecomm2/MerchantHandler',
					'description'   => 'identifies the request for execute DMS transaction',
					'responseModel' => 'getResponse',
					'parameters'    => [
						'command'        => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
						],
						'auth_id'        => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
						],
						'amount'         => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
							'max'      => 12,
						],
						'currency'       => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
							'max'      => 3,
						],
						'client_ip_addr' => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
							'max'      => 15,

						],
						'description'    => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => false,
							'max'      => 125,
						],
						'language'       => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => false,
							'max'      => 32,
						],
					]
				],
				'getTransactionResult'     => [
					'httpMethod'    => 'POST',
					'uri'           => '/ecomm2/MerchantHandler',
					'description'   => 'identifies the request for get transaction result',
					'responseModel' => 'getResponse',
					'parameters'    => [
						'command'        => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
						],
						'trans_id'       => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
						],
						'client_ip_addr' => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
							'max'      => 15,

						],
					]
				],
				'revertTransaction'        => [
					'httpMethod'    => 'POST',
					'uri'           => '/ecomm2/MerchantHandler',
					'description'   => 'identifies the request for revert transaction',
					'responseModel' => 'getResponse',
					'parameters'    => [
						'command'  => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
						],
						'trans_id' => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
						],
						'amount '  => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => false,
							'max'      => 12,
						],
					]
				],
				'closeDay'                 => [
					'httpMethod'    => 'POST',
					'uri'           => '/ecomm2/MerchantHandler',
					'description'   => 'End of business day',
					'responseModel' => 'getResponse',
					'parameters'    => [
						'command' => [
							'type'     => 'string',
							'location' => 'postField',
							'required' => true,
						],
					]
				],
			],
			'models'     => [
				'getResponse' => [
					'type'       => 'object',
					'properties' => [
						'additionalProperties' => [
							'location' => 'body'
						]
					]
				]
			]
		], $options );
	}
}