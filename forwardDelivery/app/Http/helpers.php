<?php

/**
 * @author Rinald Shehaj
 * get the country by id
 */
if (! function_exists('get_country_by_id')) {
    function get_country_by_id($id) {
        $country = \App\Country::find($id);
        return $country;
    }
}
