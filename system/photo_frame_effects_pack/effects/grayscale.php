<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GrayScaleEffect extends PhotoFrameEffect {
	
	protected $effect = 'grayscale';
	
	public function __construct()
	{
		$this->name 	   = lang('photo_frame_grayscale');
		$this->description = lang('photo_frame_grayscale_desc');
	}
	
	public function render($image)
	{
		$image->grayscale();
	}
}