<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EffectsButton extends PhotoFrameButton {
	
	public $name = 'Effects';
	
	public $moduleName = 'photo_frame_effects_pack';
	
	public function startCrop($data = array())
	{
		$ee =& get_instance();
		
		$ee->load->helper('string');
		
		$effects = $ee->photo_frame_lib->get_effects();
		
		if(!class_exists('ImageEditor'))
		{
			require_once(PATH_THIRD . 'libraries/ImageEditor.php');
		}
		
		$filename = basename($data['originalPath']);
		$path     = rtrim(str_replace($filename, '', $data['originalPath']), '/') . '/_thumbs/' . $filename;

		if(!file_exists($path))
		{
			return $path;
		}		
		
		$return = array();
		
		foreach($effects as $name => $obj)
		{
			$image = $ee->photo_frame_lib->cache_image(random_string(), $path, $data['directory']['server_path'], $data['directory']['url']);
			
			$obj->render(ImageEditor::init($image->path));
			
			$return[] = (object) array(
				'url'    => $image->url,
				'name'   => $obj->getName(),
				'effect' => $obj->getEffect(),
				'desc'   => $obj->getDescription()
			);
		}
		
		return $return;
	}
	
	public function render($manipulation = array())
	{
		$ee =& get_instance();
		
		$effects = $ee->photo_frame_lib->get_effects();
		
		if(is_object($manipulation->data->effects))
		{
			foreach($manipulation->data->effects as $name)
			{
				$effects[$name]->render($this->image);
			}
		}
	}
}