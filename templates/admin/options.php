<?php

$meatSubscription = array(
					'mc-api'	=> array(	'label'		=> __('Mailchimp Account API', 'nm-mailchimp'),
																'desc'		=> __('', 'nm-mailchimp'),
																'id'			=> $this->plugin_meta['shortname'].'_mc_api_key',
																'type'			=> 'text',
																'default'		=> '',
																'help'			=> __('Enter your MailChimp API Key, don\'t know where to get? please visit this link: <a href="http://www.najeebmedia.com/where-can-i-find-my-mailchimp-api-key/" target="_blank">Get API Key</a> ', 'nm-mailchimp')
																),
					'mc-btn-title'	=> array(	'label'		=> __('Button title', 'nm-mailchimp'),
																'desc'		=> __('Subscription form button title', 'nm-mailchimp'),
																'id'			=> $this->plugin_meta['shortname'].'_button_title',
																'type'			=> 'text',
																'default'		=> '',
																'help'			=> __('', 'nm-mailchimp')
																),
					'mc-subscrition-msg'	=> array(	'label'		=> __('Message', 'nm-mailchimp'),
																'desc'		=> __('Subscription form button title', 'nm-mailchimp'),
																'id'			=> $this->plugin_meta['shortname'].'_ok_message',
																'type'			=> 'text',
																'default'		=> '',
																'help'			=> __('A message when subscrition completed', 'nm-mailchimp')
																),																
					'mc-consent'	=> array(	'label'		=> __('Show User Consent', 'nm-mailchimp'),
																'help'		=> __('Show user consent with checkbox under form', 'nm-mailchimp'),
																'id'			=> $this->plugin_meta['shortname'].'_user_consent',
																'type'			=> 'text',
																'default'		=> '',
																),
					'mc-redirect'	=> array(	'label'		=> __('Redirect URL', 'nm-mailchimp'),
																'desc'		=> __('Set redirect URL when form is completed', 'nm-mailchimp'),
																'id'			=> $this->plugin_meta['shortname'].'_form_redirect',
																'type'			=> 'text',
																'default'		=> '',
																'help'			=> __('', 'nm-mailchimp')
																),
					'mc-modal'	=> array(	'label'		=> __('Enable Modal/Lightbox', 'nm-mailchimp'),
																'desc'		=> __('', 'nm-mailchimp'),
																'id'			=> $this->plugin_meta['shortname'].'_modal',
																'type'			=> 'checkbox',
																'default'		=> '',
																'options'		=> array('yes'	=> __('Yes', $this->plugin_meta['shortname'])),
																'help'			=> __('Show form in Modal Box rather rendering on page.', 'nm-mailchimp')
																),
					'mc-modal-title'	=> array(	'label'		=> __('Modal Title', 'nm-mailchimp'),
																'desc'		=> __('', 'nm-mailchimp'),
																'id'			=> $this->plugin_meta['shortname'].'_modal_title',
																'type'			=> 'text',
																'default'		=> '',
																'help'			=> __('Modal Title', 'nm-mailchimp')
																),
					'mc-modal-content'	=> array(	'label'		=> __('Modal Contents', 'nm-mailchimp'),
																'desc'		=> __('', 'nm-mailchimp'),
																'id'			=> $this->plugin_meta['shortname'].'_modal_content',
																'type'			=> 'textarea',
																'default'		=> '',
																'help'			=> __('Modal contents just before the form. you can use HTML', 'nm-mailchimp')
																),																
					'mc-modal-size'		=> array(	'label'		=> __('Modal Size (W,H)', 'nm-mailchimp'),
																'desc'		=> __('', 'nm-mailchimp'),
																'id'			=> $this->plugin_meta['shortname'].'_modal_size',
																'type'			=> 'text',
																'default'		=> '',
																'help'			=> __('Modal contents like: 400,200 (width=400 & height=200)', 'nm-mailchimp')
																),																						
					'mc-css'	=> array(	'label'		=> __('Custom Styles', 'nm-mailchimp'),
																'help'		=> __('You can define custom css. It will rendered just before the subsciption form. (the main wrapper class is): nm-mc-form. e.g: <pre>.nm-mc-form input[type="text"] {
    display: block;
    border: 1px solid #ccc;
    }</pre>', 'nm-mailchimp'),
																'id'			=> $this->plugin_meta['shortname'].'_form_css',
																'type'			=> 'textarea',
																'default'		=> '',
																),
							);
					

$meatDialog = array(
	'subscrition-saved'	=> array(	
		'label'		=> __('Subscription completed message', 'nm-mailchimp'),
		'desc'		=> __('This message will be shown when user subscrition form is successfully filled', 'nm-mailchimp'),
		'id'			=> $this->plugin_meta['shortname'].'_form_saved',
		'type'			=> 'textarea',
		'default'		=> '',
		'help'			=> ''
	),
	'already-subscribed'	=> array(	
		'label'		=> __('Already subscribed message', 'nm-mailchimp'),
		'desc'		=> __('This message will be shown when user is already subscribed', 'nm-mailchimp'),
		'id'			=> $this->plugin_meta['shortname'].'_already_subscribed_msg',
		'type'			=> 'textarea',
		'default'		=> '',
		'help'			=> ''
	),
);



$meatRegistration = array('user-registration'=> array(	'label'		=> __('Add option in WP Registration plugin to subscribe for lists?', 'nm-mailchimp'),
														'desc'		=> __('', 'nm-mailchimp'),
														'id'			=> $this->plugin_meta['shortname'].'_mailchimp_subscription',
														'type'			=> 'checkbox',
														'default'		=> '',
														'options'		=> array('yes'	=> __('Yes', $this->plugin_meta['shortname'])),
														'help'			=> __('Adds a checkbox in wp registration signup form for your newsletter.', 'nm-mailchimp')
													 ),
						  
						  'option-text'		=> array(	'label'		=> __('Text for subscription checkbox option.', 'nm-mailchimp'),
														'desc'		=> __('', 'nm-mailchimp'),
														'id'			=> $this->plugin_meta['shortname'].'_option_text',
														'type'			=> 'text',
														'default'		=> '',
														'help'			=> __('Enter text here to display on signup form under subscription option.', 'nm-mailchimp')
													),
						  'file-meta'		=> array(	'label'		=> __('Select list.', 'nm-mailchimp'),
				 		  								'desc'		=> __('', 'nm-mailchimp'),
														'type'		=> 'file',
														'id'		=> 'mailchimp-lists.php',
														'help'			=> __('Select list to subscribe user.', 'nm-mailchimp')
												 	),
		);

$meatWooRegistration = array('woo-user-registration'=> array(	'label'		=> __('Add option in WP Registration plugin to subscribe for lists?', 'nm-mailchimp'),
														'desc'		=> __('', 'nm-mailchimp'),
														'id'			=> $this->plugin_meta['shortname'].'_woo_mailchimp_subscription',
														'type'			=> 'checkbox',
														'default'		=> '',
														'options'		=> array('yes'	=> __('Yes', $this->plugin_meta['shortname'])),
														'help'			=> __('Adds a checkbox in wp registration signup form for your newsletter.', 'nm-mailchimp')
													 ),
						  
						  'option-text'		=> array(	'label'		=> __('Text for subscription checkbox option.', 'nm-mailchimp'),
														'desc'		=> __('', 'nm-mailchimp'),
														'id'			=> $this->plugin_meta['shortname'].'_woo_option_text',
														'type'			=> 'text',
														'default'		=> '',
														'help'			=> __('Enter text here to display on signup form under subscription option.', 'nm-mailchimp')
													),
						  'file-meta'		=> array(	'label'		=> __('Select list.', 'nm-mailchimp'),
				 		  								'desc'		=> __('', 'nm-mailchimp'),
														'type'		=> 'file',
														'id'		=> 'woo-lists.php',
														'help'			=> __('Select list to subscribe user.', 'nm-mailchimp')
												 	),
		);
		
$meat_other_plugins = array('other-plugins'	=> array(	
				 		 'desc'		=> '',
						 'type'		=> 'file',
						 'id'		=> 'more-plugins.php',
												    ),
						 );
						 						 		
$this -> the_options = array('general_settings'	=> array(	'name'		=> __('Subscription Form', 'nm-mailchimp'),
														'type'	=> 'tab',
														'desc'	=> __('Fill following options as per description', 'nm-mailchimp'),
														'meat'	=> $meatSubscription,
														
													),
						'dialog_boxes'	=> array('name'		=> __('Messages', 'nm-mailchimp'),
								'type'	=> 'tab',
								'desc'	=> __('Set user message as per your need', 'nm-mailchimp'),
								'meat'	=> $meatDialog,
								
						),
						'registration'	=> array('name'		=> __('Signup Subscription', 'nm-mailchimp'),
								'type'	=> 'tab',
								'desc'	=> __('This is PRO feature. It will enable Subscription on signup when use <a href="http://najeebmedia.com/wordpress-plugin/wp-front-end-file-upload-and-download-manager/">WP Simple Registration Plugin</a>', 'nm-mailchimp'),
								'meat'	=> '',
								
						),
						'woo-registration'	=> array('name'		=> __('WooCommerce Subscription', 'nm-mailchimp'),
								'type'	=> 'tab',
								'desc'	=> __('This is PRO featuer. It will enable user subscription on WooCommerce Checkout page after billing.', 'nm-mailchimp'),
								'meat'	=> '',
								
						),
						'more-plugins'	=> array('name'		=> __('More Plugins', 'nm-mailchimp'),
								'type'	=> 'tab',
								'desc'	=> __('You may also like other plugins by N-Media.', 'nm-mailchimp'),
								'meat'	=> 'more',
								
						),
		
						
					);

//print_r($repo_options);