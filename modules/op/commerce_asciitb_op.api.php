<?php

/**
 * @file
 * Hook documentation for the ASC-IITB OP module.
 */


/**
 * Allows modules to alter the data array used to create a ASC-IITB OP redirect
 * form prior to its form elements being created.
 *
 * @param &$data
 *   The data array used to create redirect form elements.
 * @param $order
 *   The full order object the redirect form is being generated for.
 *
 * @see commerce_asciitb_op_order_form()
 */
function hook_commerce_asciitb_op_order_form_data_alter(&$data, $order) {
  // No example.
}
