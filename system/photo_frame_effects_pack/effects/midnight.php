<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MidnightEffect extends PhotoFrameEffect {
	
	public function __construct()
	{
		$this->name 	   = lang('photo_frame_midnight');
		$this->description = lang('photo_frame_midnight_desc');
	}
	
	public function render($image)
	{
		$image->rgba(34, 43, 109);
		$image->gamma(1, .25);
		$image->brightness(20);
		$image->contrast(-20);
	}
}