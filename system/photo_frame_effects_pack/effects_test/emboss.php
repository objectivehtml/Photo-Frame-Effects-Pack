<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EmbossEffect extends PhotoFrameEffect {
	
	public function __construct()
	{
		$this->name 	   = lang('photo_frame_emboss');
		$this->description = lang('photo_frame_emboss_desc');
	}
	
	public function render($image)
	{
		$image->emboss();
	}
}