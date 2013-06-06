<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NegativeEffect extends PhotoFrameEffect {
	
	public function __construct()
	{
		$this->name 	   = lang('photo_frame_negative');
		$this->description = lang('photo_frame_negative_desc');
	}
	
	public function render($image)
	{
		$image->negative();
	}
}