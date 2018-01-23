<?php

/**
 * @file
 * Install, update and uninstall functions for the uc_series_price module.
 */

function uc_series_price_enable() {
    if (!module_exists('uc_product')) {
        module_enable(array('uc_product'), TRUE);
    }

    $entity = entity_get_info('uscp_series');

    if (!$entity) {
        entity_('uscp_series', array());
    }

    $field = field_info_field('ucsp_series_cost_product_id');

    if (!$field) {
        $field = array(
            'field_name' => 'ucsp_series_cost_product_id',
            'type' => 'number_integer',
        );

        field_create_field($field);
    }

    $instance = field_info_instance('series', 'ucsp_series_cost_product_id', 'uc_series_price');

    // Only add the instance if it doesn't exist. Don't overwrite any changes.
    if (!$instance) {
        $label = t('Series cost product ID');
        $instance = array(
            'field_name' => 'ucsp_series_cost_product_id',
            'entity_type' => 'node',
            'bundle' => 'series',
            'label' => $label,
            'widget' => array(
                'type' => 'text',
            ),
        );

        field_create_instance($instance);
    }

}