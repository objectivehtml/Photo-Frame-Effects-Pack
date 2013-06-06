<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class StorybookEffect extends PhotoFrameEffect {
	
	public function __construct()
	{
		$this->name 	   = lang('photo_frame_storybook');
		$this->description = lang('photo_frame_storybook_desc');
	}
	
	public function render($image)
	{
	    $image->contrast(-15); 
	    $image->rgba(20, 0, 0);
	    $image->rgba(50, 50, 0); 
	    $image->rgba(0, 0, 30); 
	    $image->brightness(-25); 
	    $image->sharpness(.5);
	}
}