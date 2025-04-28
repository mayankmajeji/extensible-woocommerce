<?php

/** 
 * Author: Mayank Majeji | UnmaskWP.com
 * GitHub Link: https://github.com/mayankmajeji/extensible-woocommerce
 */

/**
 * Add a new country to countries list
 *
 * @param array $countries WooCommerce countries
 * @return array $countries WooCommerce countries
 */
function maverick_add_new_country_woocommerce($countries)
{
  // new countries
  $new_countries = array(
    'NIRE'  => __('Northern Ireland', 'woocommerce'),
  );

  return array_merge($countries, $new_countries);
}

add_filter('woocommerce_countries',  'maverick_add_new_country_woocommerce');

/**
 * Add a new country to continents list
 *
 * @param array $continents WooCommerce continents
 * @return array $continents WooCommerce continents
 */
function maverick_add_new_country_to_continents($continents)
{

  // add new country to Europe continent
  $continents['EU']['countries'][] = 'NIRE';

  // return continents
  return $continents;
}

add_filter('woocommerce_continents', 'maverick_add_new_country_to_continents');
