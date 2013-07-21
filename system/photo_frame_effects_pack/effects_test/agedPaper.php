<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AgedPaperEffect extends PhotoFrameEffect {
	
	protected $effect = 'agedPaper';
	
	public function __construct()
	{
		$this->name 	   = lang('photo_frame_aged_paper');
		$this->description = lang('photo_frame_aged_paper_desc');
	}
	
	public function render($image)
	{
		$image->grayscale();
		$image->rgba(15, 7, 0);
		$image->contrast(-110);
	}
}