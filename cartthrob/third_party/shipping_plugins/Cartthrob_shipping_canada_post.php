<?php if ( ! defined('CARTTHROB_PATH')) Cartthrob_core::core_error('No direct script access allowed');

class Cartthrob_shipping_canada_post extends CartThrob_shipping
{
	public $title = "canada_post_live_rates_title"; 
	public $overview = 'canada_post_live_rates_overview'; 
	
	public $html = ''; 
 
	public $settings = array(
		array(
			'name' => 'CPC Id',
			'short_name' => 'access_key',
			'type' => 'text',
			'default'	=> ''
		),
		array(
			'name' => 'Turnaround Time (can be found in CPC Retailer Profile)',
			'short_name' => 'turnaround',
			'type' => 'text',
			'default'	=> ''
		),
		array(
			'name' => 'Are you sending each item individually, or as a package?',
			'short_name' => 'container',
			'type' => 'radio',
			'default' => 'package',
			'options'	=> array(
					'package' => "Package",
					'individually' => "Individually"
			),
		),
		/// DEFAULTS FOR SHIPPING OPTIONS
		array(
			'name' => 'Unit of Length Measurement',
			'short_name' => 'length_code',
			'type' => 'radio',
			'default' => 'IN',
			'options'	=> array(
					'IN' => "Inches",
					'CM' => "Centimeters"
			),
		),
		array(
			'name' => 'Unit of Weight Measurement',
			'short_name' => 'weight_code',
			'type' => 'radio',
			'default' => 'KG',
			'options'	=> array(
					'LB' => "Pounds",
					'KG' => "Kilograms"
			),
		),
		array(
			'name' => 'Origination Postal Code',
			'short_name' => 'origination_postal_code',
			'type' => 'text'
 		),
		
		array(
			'name' => 'Server Mode',
			'short_name' => 'mode',
			'type' => 'radio',
			'default' => 'test',
			'options'	=> array(
					'test' => "Test",
					'live' => "Live / Production"
			),
		),
		array(
			'name' =>  'Default Package Length',
			'short_name' => 'def_length',
			'type' => 'text',
			'default' => '15'
		),
		array(
			'name' =>  'Default Package Width',
			'short_name' => 'def_width',
			'type' => 'text',
			'default' => '15'
		),
		array(
			'name' =>  'Default Package Height',
			'short_name' => 'def_height',
			'type' => 'text',
			'default' => '15'
		),
 
		// CUSTOMER CHOICES
		
		array(
			'name' => 'Customer Selectable Rate Options',
			'short_name' => 'selectable_rates',
			'type' => 'header',
		),
		/// DEFAULTS FOR SHIPPING OPTIONS
		array(
			'name' => 'Service Default',
			'short_name' => 'product_id',
			'type' => 'select',
			'default' => 'Regular', 
			'options' => array(
				"Regular"					=> "Regular",
				"Parcel Air"				=> "Parcel Air",
				"Parcel Surface" 			=> "Parcel Surface",
				"Priority Courier"			=> "Priority Courier",
				"Expedited"					=> "Expedited",
				"Xpresspost" 				=> "Xpresspost",
				"XPressPost International" 	=> "XPressPost International",
				"Priority Worldwide INTL"	=> "Priority Worldwide INTL",
				"Expedited US Business"		=> "Expedited US Business",
				"Xpresspost USA"			=> "Xpresspost USA",
				"Priority Worldwide USA" 	=> "Priority Worldwide USA",
				"Small Packets Air"			=> "Small Packets Air",
				"Small Packets Surface"		=> "Small Packets Surface",

			),
		),
 		// AVAILABLE SHIPPING METHODS
		array(
			'name' => 'Regular',
			'short_name' => 'Regular',
			'type' => 'radio',
			'default' => 'y',
			'options' => array(
				'n' => 'No',
				'y' => 'Yes',
				)
		),
		array(
			'name' => 'Xpresspost',
			'short_name' => 'Xpresspost',
			'type' => 'radio',
			'default' => 'y',
			'options' => array(
				'n' => 'No',
				'y' => 'Yes',
				)
		),
		array(
			'name' => 'Priority Courier',
			'short_name' => 'Priority_Courier',
			'type' => 'radio',
			'default' => 'y',
			'options' => array(
				'n' => 'No',
				'y' => 'Yes',
				)
		),
		array(
			'name' => 'Expedited',
			'short_name' => 'Expedited',
			'type' => 'radio',
			'default' => 'y',
			'options' => array(
				'n' => 'No',
				'y' => 'Yes',
				)
		),

		
		array(
			'name' => 'Priority Worldwide USA',
			'short_name' => 'Priority_Worldwide_USA',
			'type' => 'radio',
			'default' => 'y',
			'options' => array(
				'n' => 'No',
				'y' => 'Yes',
				)
		),
		array(
			'name' => 'Xpresspost USA',
			'short_name' => 'Xpresspost_USA',
			'type' => 'radio',
			'default' => 'y',
			'options' => array(
				'n' => 'No',
				'y' => 'Yes',
				)
		),
 		array(
			'name' => 'Expedited US Business',
			'short_name' => 'Expedited_US_Business',
			'type' => 'radio',
			'default' => 'y',
			'options' => array(
				'n' => 'No',
				'y' => 'Yes',
				)
		),
		array(
			'name' => 'Small Packets Air',
			'short_name' => 'Small_Packets_Air',
			'type' => 'radio',
			'default' => 'y',
			'options' => array(
				'n' => 'No',
				'y' => 'Yes',
				)
		),
 		array(
			'name' => 'Small Packets Surface',
			'short_name' => 'Small_Packets_Surface',
			'type' => 'radio',
			'default' => 'y',
			'options' => array(
				'n' => 'No',
				'y' => 'Yes',
				)
		),
		array(
			'name' => 'Priority Worldwide INTL',
			'short_name' => 'Priority_Worldwide_INTL',
			'type' => 'radio',
			'default' => 'n',
			'options' => array(
				'n' => 'No',
				'y' => 'Yes',
				)
		),
		array(
			'name' => 'XPressPost International',
			'short_name' => 'XPressPost_International',
			'type' => 'radio',
			'default' => 'n',
			'options' => array(
				'n' => 'No',
				'y' => 'Yes',
				)
		),
		array(
			'name' => 'Parcel Surface',
			'short_name' => 'Parcel_Surface',
			'type' => 'radio',
			'default' => 'y',
			'options' => array(
				'n' => 'No',
				'y' => 'Yes',
				)
		),
		array(
			'name' => 'Parcel Air',
			'short_name' => 'Parcel_Air',
			'type' => 'radio',
			'default' => 'y',
			'options' => array(
				'n' => 'No',
				'y' => 'Yes',
				)
		),
	);
	public $required_fields = array(); 
	public $prefix = ""; 
	public $shipping_methods = array(
		"Regular"					=> "Regular",
		"Parcel Air"				=> "Parcel Air",
		"Parcel Surface" 			=> "Parcel Surface",
		"Priority Courier"			=> "Priority Courier",
		"Expedited"					=> "Expedited",
		"Xpresspost" 				=> "Xpresspost",
		"XPressPost International" 	=> "XPressPost International",
		"Priority Worldwide INTL"	=> "Priority Worldwide INTL",
		"Expedited US Business"		=> "Expedited US Business",
		"Xpresspost USA"			=> "Xpresspost USA",
		"Priority Worldwide USA" 	=> "Priority Worldwide USA",
		"Small Packets Air"			=> "Small Packets Air",
		"Small Packets Surface"		=> "Small Packets Surface",
		);
	
 
	function get_live_rates($option_value="ALL")
	{
		$this->EE =& get_instance(); 
		$this->EE->load->library('cartthrob_shipping_plugins');
 		$this->core->cart->set_custom_data("shipping_error", ""); 
		$this->core->cart->save(); 

 		$orig_state = 	($this->plugin_settings('origination_state'))? $this->plugin_settings('origination_state') : $this->EE->cartthrob_shipping_plugins->customer_location_defaults('state') ;  
		$orig_zip = 	($this->plugin_settings('origination_zip'))? $this->plugin_settings('origination_zip') : $this->EE->cartthrob_shipping_plugins->customer_location_defaults("zip");   
		$orig_country_code = ($this->plugin_settings('orig_country_code'))? $this->EE->cartthrob_shipping_plugins->alpha2_country_code($this->plugin_settings('orig_country_code')) : $this->EE->cartthrob_shipping_plugins->alpha2_country_code($this->EE->cartthrob_shipping_plugins->customer_location_defaults("country_code")); 
  		$orig_res_com = ($this->plugin_settings('origination_res_com') == "RES")? 1: 0; 
		$destination_res_com = ($this->plugin_settings('destination_res_com') == "RES")? 1: 0;


		// the following variables are set, so that we can maintain this code, and CT1's code easier. setting these variables allows us to keep some of the following code in parity
		$rate_chart = $this->plugin_settings('rate_chart'); 
		$shipping_address = $this->EE->cartthrob_shipping_plugins->customer_location_defaults('address') ; 
		$shipping_address2 = $this->EE->cartthrob_shipping_plugins->customer_location_defaults('address2') ; 
		$shipping_city = $this->EE->cartthrob_shipping_plugins->customer_location_defaults('city') ; 
		$shipping_state = $this->EE->cartthrob_shipping_plugins->customer_location_defaults('state') ; 
		$shipping_zip = $this->EE->cartthrob_shipping_plugins->customer_location_defaults('zip') ; 
		$dest_country_code = $this->EE->cartthrob_shipping_plugins->alpha2_country_code($this->EE->cartthrob_shipping_plugins->customer_location_defaults('country_code')) ; 
		$container =  $this->EE->cartthrob_shipping_plugins->customer_location_defaults('container', $this->plugin_settings('container')); 
		$dim_width = $this->EE->cartthrob_shipping_plugins->customer_location_defaults('width',$this->plugin_settings('def_width')); 
		$dim_length = $this->EE->cartthrob_shipping_plugins->customer_location_defaults('length',$this->plugin_settings('def_length')); 
		$dim_height = $this->EE->cartthrob_shipping_plugins->customer_location_defaults('height',$this->plugin_settings('def_height')); 
		// set default weight
		$weight_total =  ($this->core->cart->weight() ? $this->core->cart->weight() : 1);
		
		
		if ($option_value == "ALL")
		{
			$product_id= $this->plugin_settings("product_id"); 
		}
		else
		{
			$product_id = $option_value;  
		}

		$shipping = array(
				'error_message'	=> NULL,
				'price'			=> array(),
				'option_value'		=> array(),
				'option_name'		=> array(),
			);
 
		$this->_host = "http://sellonline.canadapost.ca";
			
		if (!$this->plugin_settings('access_key'))
		{
			$shipping['error_message'] = $this->lang('shipping_settings_not_configured');
			return $shipping; 
		}
	
		$eparcel = new SimpleXMLElement("<eparcel></eparcel>");
		
		$eparcel->addChild('language', ( $this->core->cart->customer_info("language")  ? $this->core->cart->customer_info("language")  : "en") );
		$ratesAndServicesRequest = $eparcel->addChild('ratesAndServicesRequest'); 
		$ratesAndServicesRequest->addChild('merchantCPCID', $this->plugin_settings('access_key')  );
		$ratesAndServicesRequest->addChild("fromPostalCode", $orig_zip); 
		$ratesAndServicesRequest->addChild("turnAroundTime", 
					($this->plugin_settings('turnaround') ? 
					$this->plugin_settings('turnaround') : 
					"16")); 

		$ratesAndServicesRequest->addChild('itemsPrice', $this->core->cart->shippable_subtotal() ); 
		
		$lineItems = $ratesAndServicesRequest->addChild('lineItems'); 
		 
		if ( $this->plugin_settings('container') == "package" )
		{
			$item = $lineItems->addChild('item'); 
			
			$item->addChild('quantity', '1');
			$item->addChild('weight', ($this->core->cart->weight() ? $this->core->cart->weight() : 1 ));

			if ( $this->plugin_settings('length_code') == "IN"  )
			{
				$item->addChild('length', $dim_length   * (254/100));
				$item->addChild('width', $dim_width  * (254/100));
				$item->addChild('height', $dim_height  * (254/100));
			}
			else
			{
				if ( $this->plugin_settings('length_code') == "IN"  )
				{
					$item->addChild('length', $dim_length );
					$item->addChild('width', $dim_width  );
					$item->addChild('height', $dim_height );
				}
			}
			
			$item->addChild('description', 'cart contents'); // @TODO lang
			$item->addChild('readyToShip');
		}
		else
		{
			foreach ( $this->core->cart->shippable_items() as $row_id => $item)
			{
				if (!isset($items))
				{
					$items = $lineItems->addChild("Items"); 
				}
				$var = "item".$row_id; 
				$$var = $items->addChild("item"); 
				$$var->addChild("quantity", $item['quantity'] ); 
				$$var->addChild('weight', (!empty($item['weight']) ? $item['weight']: 1) );

				if ( $this->plugin_settings('length_code') == "IN"  )
				{
					$$var->addChild('length', $dim_length   * (254/100));
					$$var->addChild('width', $dim_width  * (254/100));
					$$var->addChild('height', $dim_height  * (254/100));
				}
				else
				{
					if ( $this->plugin_settings('length_code') == "IN"  )
					{
						$$var->addChild('length', $dim_length );
						$$var->addChild('width', $dim_width );
						$$var->addChild('height', $dim_height );
					}
				}
				$$var->addChild('description', $item['title']); // @TODO lang
				$$var->addChild('readyToShip');
			}
		}
		
		$ratesAndServicesRequest->addChild('city', $shipping_city ); 
		$ratesAndServicesRequest->addChild('provOrState', $shipping_state ); 
		$ratesAndServicesRequest->addChild('country', $this->EE->cartthrob_shipping_plugins->alpha2_country_code($shipping_state)); 
		$ratesAndServicesRequest->addChild('postalCode', $shipping_zip); 
		
		$data = (string) $eparcel->asXML(); 
		$xml =   new SimpleXMLElement($this->EE->cartthrob_shipping_plugins->curl_transaction($this->_host.":30000",$data)); 
		
		if (  $xml->ratesAndServicesResponse[0]->statusCode  !=1)
		{
			$shipping['error_message']	= (string) $xml->error[0]->statusMessage;
			// update cart hash and shipping hash
			$this->cart_hash($shipping); 
			$this->core->cart->set_custom_data("shipping_error", $shipping['error_message']); 
			$this->core->cart->save(); 
			
			return $shipping;
		}
		
		foreach ($xml->ratesAndServicesResponse[0]->product as $rating)
		{
			$shipping['price'][] = number_format((string) $rating->rate,2,".",",");
			$shipping['option_value'][]	= (string) $rating->name;
			$shipping['option_name'][]  = $this->shipping_methods((string) $rating->name); 
			$shipping['error_message']	= NULL; 
			$this->core->cart->set_custom_data("shipping_error", ""); 
		}

		// CHECKING THE PRESELECTED OPTIONS THAT ARE AVAILABLE
		$available_shipping =array(); 
		foreach ($shipping['option_value'] as $key => $value)
		{
			if ( $this->plugin_settings( $value) !="n" )
			{
				$available_shipping['price'][$key] 				= $shipping['price'][$key]; 
				$available_shipping['option_value'][$key]		= $shipping['option_value'][$key]; 
				$available_shipping['option_name'][$key]		= $shipping['option_name'][$key]; 
			}
		}
		
		if ($shipping['error_message'])
		{
			$available_shipping['error_message'] = $shipping['error_message']; 
			$this->core->cart->set_custom_data("shipping_error", $shipping['error_message']); 
		}
		// update cart shipping hash
		$this->cart_hash($available_shipping); 
		
		// @TODO update with lang
 		// if there's no errors, but we removed all of the shipping options, it's because none of the values were configured on the backend. We need to warn.
 		if (empty($available_shipping['error_message']) && empty($available_shipping['price']) && !empty($available_shipping))
		{
			$available_shipping['error_message'] = "Shipping options compatible with your location: (".$shipping_address ." ". $shipping_address2 ." ". $shipping_city." ". ($shipping_state?",".$shipping_state: "")." ". $shipping_zip ." ". $dest_country_code.") have not been configured in the cart settings. Please contact the webmaster"; 
			if ($dest_country_code != $orig_country_code)
			{
				$available_shipping['error_message'] .= " International shipping options may need to be added. "; 
			}
			$this->core->cart->set_custom_data("shipping_error", $available_shipping['error_message']); 
			
		}
		$this->core->cart->save(); 
		
		return $available_shipping; 
 	}
	// END
	function get_shipping()
	{
		$cart_hash = $this->core->cart->custom_data('cart_hash'); 
		
 		if ($this->core->cart->count() <= 0 || $this->core->cart->shippable_subtotal() <= 0)
		{
			return 0;
		}
		
 		if ($cart_hash != $this->cart_hash())
		{
			$this->core->cart->set_custom_data('shipping_requires_update', $this->title ); 
			$this->core->cart->save(); 
		}
		else
		{
			$this->core->cart->set_custom_data('shipping_requires_update', NULL ); 
			$this->core->cart->save(); 
		}
		
		$shipping_data =$this->core->cart->custom_data(ucfirst(get_class($this)));
		if (empty($shipping_data['option_value']) && empty($shipping_data['price']))
 		{
			$shipping_data = $this->get_live_rates(); 
		}
	 	if(!$this->core->cart->shipping_info('shipping_option'))
		{
			$temp_key = FALSE; 
			// if no option has been set, we'll get the cheapest option, and set that as the customer's shipping option. 
			if (!empty($shipping_data['price']))
			{
				// this looks weird, but we're trying to get the key. we have to find the min value, then pull the key from that. 
				$temp_key = array_search( min($shipping_data['price']), $shipping_data['price']); 
			}
			if ($temp_key !== FALSE && !empty($shipping_data['option_value'][$temp_key]))
			{
				$this->shipping_option =  $shipping_data['option_value'][$temp_key]; 
				$this->core->cart->set_shipping_info("shipping_option",  $shipping_data['option_value'][$temp_key] ); 
			}
			else
			{
				$this->shipping_option =  $this->plugin_settings('product_id'); 
				$this->core->cart->set_shipping_info("shipping_option", $this->plugin_settings('product_id')); 
				
			}
		}
		else
		{
			$this->shipping_option = $this->core->cart->shipping_info('shipping_option');
		}
		
		
		if (!empty($shipping_data['option_value']) && !empty($shipping_data['price']))
		{
			if ($this->shipping_option && in_array($this->shipping_option, $shipping_data['option_value']))
			{
				$key =array_pop(array_keys($shipping_data['option_value'], $this->shipping_option)); 
				if (!empty($shipping_data['price'][$key]))
				{                          
					return $shipping_data['price'][$key]; 
				}
			}
			elseif ( ! $this->shipping_option)
			{
				return 0;
			}
			else
			{
				return min($shipping_data['price']);
			}
		}
		return 0; 
	}
 	function shipping_methods($number = NULL, $prefix = NULL)
	{
		if (isset($this->prefix))
		{
			$prefix = $this->prefix; 
		}
 		if ($number)
		{
			if (array_key_exists($number, $this->shipping_methods))
			{
				return $this->shipping_methods[$number]; 
			}
			else
			{
				return "--"; 
			}
		}
		foreach ($this->shipping_methods as $key => $method)
		{
 			if ($this->plugin_settings($prefix.$key) =="y")
			{
				$available_options[$key] = $method; 
			}
 
		}
		return $available_options; 
	}
	// END
	public function plugin_shipping_options()
	{
		$options = array(); 
 		// GETTING THE RATES FROM SESSION
		$shipping_data =$this->core->cart->custom_data(ucfirst(get_class($this)));
		$this->core->cart->save(); 
		
		/*
 		if (!$shipping_data)
		{
			// IF NONE ARE IN SESSION, WE WILL *TRY* TO GET RATES BASED ON CURRENT CART CONTENTS
			$shipping_data = $this->get_live_rates(); 
  		}
		*/
 		$shipping_data = $this->get_live_rates(); 
		
 		if (!empty($shipping_data['option_value'] ))
		{
			foreach ($shipping_data['option_value'] as $key => $value)
			{
				$options[] = array(
					'rate_short_name' => $value,
					'price' => $shipping_data['price'][$key],
					'rate_price' => $shipping_data['price'][$key],
					'rate_title' => $shipping_data['option_name'][$key],
				);
			}
 		}
		
		
		return $options;
	}
	// creates a hash value to compare 
	function cart_hash($shipping = NULL )
	{
		// hashing the cart data, so we can check later if the cart has been updated      
		$cart_hash = md5(serialize($this->core->cart->items_array())); 
 		if ($shipping)
		{
			$this->core->cart->set_custom_data('cart_hash', $cart_hash); 
			$this->core->cart->set_custom_data(ucfirst(get_class($this)), $shipping);
		}  
		$this->core->cart->save(); 
		
		return $cart_hash; 
	}
}
