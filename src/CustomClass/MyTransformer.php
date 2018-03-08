<?php
namespace App\CustomClass;


use Josegonzalez\Upload\File\Transformer\DefaultTransformer;

class MyTransformer extends DefaultTransformer
{

    public function transform(){
        
        $extension = pathinfo($this->data['name'], PATHINFO_EXTENSION);
        // Store the thumbnail in a temporary file
        
        
        // Use the Imagine library to DO THE THING
        $imagine = new \Imagine\Gd\Imagine();
        
        $thumb = tempnam(sys_get_temp_dir(), 'thumb') . '.' . $extension;
        $imagine->open($this->data['tmp_name'])
                ->thumbnail(new \Imagine\Image\Box(36, 36), \Imagine\Image\ImageInterface::THUMBNAIL_INSET)
                ->save($thumb);
        $box = tempnam(sys_get_temp_dir(), 'box') . '.' . $extension;
        $imagine->open($this->data['tmp_name'])
                ->resize( new \Imagine\Image\Box(1000, 1000) , \Imagine\Image\ImageInterface::FILTER_UNDEFINED)
                ->save($box);
        $landscape1 = tempnam(sys_get_temp_dir(), 'landscape1') . '.' . $extension;
        $imagine->open($this->data['tmp_name'])
                ->resize( new \Imagine\Image\Box(1010, 596) , \Imagine\Image\ImageInterface::FILTER_UNDEFINED)
                ->save($landscape1);
        $landscape2 = tempnam(sys_get_temp_dir(), 'landscape2') . '.' . $extension;
        $imagine->open($this->data['tmp_name'])
                ->resize( new \Imagine\Image\Box(874, 610) , \Imagine\Image\ImageInterface::FILTER_UNDEFINED)
                ->save($landscape2);
        $orig = tempnam(sys_get_temp_dir(), 'orig') . '.' . $extension;
        $imagine->open($this->data['tmp_name'])
                ->resize( new \Imagine\Image\Box(1106, 758) , \Imagine\Image\ImageInterface::FILTER_UNDEFINED)
                ->save($orig);
        
        // Now return the original *and* the thumbnail
        return [
            $thumb => 'thumb-' . $this->data['name'],
            $box => 'box-' . $this->data['name'],
            $landscape1 => 'landscape1-' . $this->data['name'],
            $landscape2 => 'landscape2-' . $this->data['name'],
            $orig => $this->data['name'],
        ];
        
    }
    
    
    
}



?>