<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('load_header_data')) {
    function load_header_data() {
        $CI =& get_instance();
        
        $CI->load->model('hospitals_model');


        $data['languages'] = ["English"=>"en","Hindi"=>"hi"];
        
        $dt = $CI->hospitals_model->get_all_countries_departments();
        $data["countries"] = [];

        for ($i = 0; $i < count($dt); $i++) {
            $country = $dt[$i]['country'];
            $department = $dt[$i]['department_name'];
            if (array_key_exists($country, $data["countries"])) {
                array_push($data["countries"][$country], $department);
            } else {
                $data["countries"][$country] = [$department];
            }
        }

        return $data;
    }
}
