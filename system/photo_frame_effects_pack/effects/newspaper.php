<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NewspaperEffect extends PhotoFrameEffect {
	
	public function __construct()
	{
		$this->name 	   = lang('photo_frame_newspaper');
		$this->description = lang('photo_frame_newspaper_desc');
	}
	
	public function render($image)
	{
		$image->grayscale();
		$image->contrast(-110);
	}
}