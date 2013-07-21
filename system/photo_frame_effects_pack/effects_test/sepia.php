<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SepiaEffect extends PhotoFrameEffect {
	
	public function __construct()
	{
		$this->name 	   = lang('photo_frame_sepia');
		$this->description = lang('photo_frame_sepia_desc');
	}
	
	public function render($image)
	{
		$image->sepia();
	}
}