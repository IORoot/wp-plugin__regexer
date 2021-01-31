<?php


if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5e3da1cf51198',
	'title' => 'Regex Posts',
	'fields' => array(
		array(
			'key' => 'field_5e3da1de03491',
			'label' => 'Post Type',
			'name' => 'regex_post_type',
			'type' => 'select',
			'instructions' => 'The post type to run the regex on.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '30',
				'class' => '',
				'id' => '',
			),
			'hide_admin' => 0,
			'choices' => array(
				'article' => 'article',
				'post' => 'post',
			),
			'default_value' => array(
				0 => 'article',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5e3da2921dcb5',
			'label' => 'Post Field',
			'name' => 'regex_post_field',
			'type' => 'select',
			'instructions' => 'The post field to run the regex against.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '40',
				'class' => '',
				'id' => '',
			),
			'hide_admin' => 0,
			'choices' => array(
				'post_content' => 'post_content',
				'post_title' => 'post_title',
				'post_excerpt' => 'post_excerpt',
			),
			'default_value' => array(
				0 => 'post_content',
			),
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5e3dac4e57740',
			'label' => 'Post ID',
			'name' => 'regex_post_id',
			'type' => 'number',
			'instructions' => '(Optional)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '10',
				'class' => '',
				'id' => '',
			),
			'hide_admin' => 0,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5e3da3289f2af',
			'label' => 'run',
			'name' => 'regex_run',
			'type' => 'true_false',
			'instructions' => 'Preview or Live',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'hide_admin' => 0,
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'LIVE',
			'ui_off_text' => 'Preview',
		),
		array(
			'key' => 'field_5e3da2f581780',
			'label' => 'Regex',
			'name' => 'regex_to_run',
			'type' => 'text',
			'instructions' => 'The Regex to execute against the field',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'hide_admin' => 0,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e3daa9aa855d',
			'label' => 'Regex Replacement',
			'name' => 'regex_replacement',
			'type' => 'text',
			'instructions' => 'The Replacement text',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'hide_admin' => 0,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e3da3b3ebd7b',
			'label' => 'Preview Text',
			'name' => 'regex_preview_text',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'hide_admin' => 0,
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 16,
			'new_lines' => '',
		),
		array(
			'key' => 'field_5e3da3e0ebd7c',
			'label' => 'Preview Result',
			'name' => 'regex_preview_result',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'hide_admin' => 0,
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 16,
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'regexposts',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => 'Allows you to REGEX post fields in different post types.',
));

endif;if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5e3da1cf51198',
        'title' => 'Regex Posts',
        'fields' => array(
            array(
                'key' => 'field_5e3da1de03491',
                'label' => 'Post Type',
                'name' => 'regex_post_type',
                'type' => 'select',
                'instructions' => 'The post type to run the regex on.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '30',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'choices' => array(
                    'article' => 'article',
                    'post' => 'post',
                ),
                'default_value' => array(
                    0 => 'article',
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5e3da2921dcb5',
                'label' => 'Post Field',
                'name' => 'regex_post_field',
                'type' => 'select',
                'instructions' => 'The post field to run the regex against.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '40',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'choices' => array(
                    'post_content' => 'post_content',
                    'post_title' => 'post_title',
                    'post_excerpt' => 'post_excerpt',
                ),
                'default_value' => array(
                    0 => 'post_content',
                ),
                'allow_null' => 1,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5e3dac4e57740',
                'label' => 'Post ID',
                'name' => 'regex_post_id',
                'type' => 'number',
                'instructions' => '(Optional)',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '10',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array(
                'key' => 'field_5e3da3289f2af',
                'label' => 'run',
                'name' => 'regex_run',
                'type' => 'true_false',
                'instructions' => 'Preview or Live',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '20',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'LIVE',
                'ui_off_text' => 'Preview',
            ),
            array(
                'key' => 'field_5e3da2f581780',
                'label' => 'Regex',
                'name' => 'regex_to_run',
                'type' => 'text',
                'instructions' => 'The Regex to execute against the field',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5e3daa9aa855d',
                'label' => 'Regex Replacement',
                'name' => 'regex_replacement',
                'type' => 'text',
                'instructions' => 'The Replacement text',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5e3da3b3ebd7b',
                'label' => 'Preview Text',
                'name' => 'regex_preview_text',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 16,
                'new_lines' => '',
            ),
            array(
                'key' => 'field_5e3da3e0ebd7c',
                'label' => 'Preview Result',
                'name' => 'regex_preview_result',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'hide_admin' => 0,
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 16,
                'new_lines' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'regexposts',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => 'Allows you to REGEX post fields in different post types.',
    ));
    
    endif;