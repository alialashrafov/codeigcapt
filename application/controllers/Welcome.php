<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$this->load->helper("captcha");

		$vals = array(
      // 'word'          => 'Random word',
        'img_path'      => 'captcha/',
        'img_url'       => 'http://localhost/code3/captcha/',
        'font_path'     => 'fonts/orangejuice 2.0.ttf',
        'img_width'     => '200',
        'img_height'    => 60,
        'expiration'    => 7200,
        'word_length'   => 5,
        'font_size'     => 20,
        'img_id'        => 'Imageid',
        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

        // White background and border, black text and red grid
        'colors'        => array(
                'background' => array(155, 55, 5),
                'border' => array(5, 63, 21),
                'text' => array(25, 25, 25),
                'grid' => array(67, 234, 10)
        )
);

$cap = create_captcha($vals);
//echo $cap['image'];


		// $this->load->view('welcome_message');
		
		$viewData = array(
			'captcha' => $cap
		);

		$this->load->view('welcome_message', $viewData);
	}
}
