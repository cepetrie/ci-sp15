<?php

/**
 * Customer.php controller for a generic Customer
 * 
 * Used to show how to do CRUD in CodeIgniter
 *
 * @package ITC260
 * @subpackage Customer
 * @author Christina Petrie <ChristinaPetrie@hotmail.com>
 * @version 1.0 2015/04/30 
 * @link http://www.example.com/ 
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see Customer_model.php
 * @see index.php
 * @todo none
 */

/**
 *Customer controller for our CRUD demo
 *
 * @see Customer_model
 * @todo none
 */
 
/**
 * Loads default data into object
 *
 * Added in v3 - Result object
 *
 * @param none
 * @return void
 * @todo none
*/


//Customer.php controller
class Customer extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            //$this->load->model('news_model');
            //$this->config->set_item('banner', 'Global News Banner');
        }#end constructor()
 
/**
 * Shows initial Customer Database data
 * @param none
 * @return void
 * @todo none
*/
        public function index()
        {            
            //$data['news'] = $this->news_model->get_news();
            $data['title'] = 'Customer';               
            $this->load->view('customer/index', $data);              
        }#end index

}#end Customer class/controller()

?>