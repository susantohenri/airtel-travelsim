<?php

/**
 * @since             1.0.0
 * @package           airtel_travelsim
 *
 * @wordpress-plugin
 * Plugin Name:       Airtel Travelsim
 * Description:       This plugin contains Travelsim custom code for Airtel
 * Version:           1.0
 * Author:            Henrisusanto
 * Author URI:        https://github.com/susantohenri
 * Text Domain:       airtel-travelsim
 */

function airtel_travelsim_shortcode() {
    /*
     * purchase order & activate service
     * recharge sim balance
     * - 3.5 recharge (page 18)
     * - https://xml2.travelsim.com/tsim_xml/service/xmlgate?uname=XXXX&upass=XXXX&plain=1&command=recharge&plain=1&onum=37254515257&pin=8070121181226621
     * ? where onum & pin came from?
     * get call data session
     * - 6.1.2 Check active Data session on SIM card (page 103)
     * - https://xml2.travelsim.com/tsim_xml/service/xmlgate?uname=XXXX&upass=XXXX&plain=1&command=checkdatasession&onum=37254515257
     */
}
add_shortcode('airtel-travelsim', 'airtel_travelsim_shortcode');
