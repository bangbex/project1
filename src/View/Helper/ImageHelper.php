<?php
    namespace App\View\Helper;

    use Cake\View\Helper\HtmlHelper;
    use Cake\View\View;

    class ImageHelper extends HtmlHelper
    {

        /*
            mode : thumb,
        
        
        
        */
        
        
        public function display($entity, array $options = []){
            
            $image = $entity['image'];
            $dir = $entity['dir'];
            $relative_path = $entity['relative_path'];
            $path = '../'. $relative_path.$image;

            if(isset($options['mode'])):
            switch($options['mode']):
                case 'thumb':
                    $path = '../'. $relative_path.'thumb-'.$image;
                break;
                case 'box':
                    $path = '../'. $relative_path.'box-'.$image;
                break;
                case 'landscape1':
                    $path = '../'. $relative_path.'landscape1-'.$image;
                break;
                case 'landscape2':
                    $path = '../'. $relative_path.'landscape2-'.$image;
                break;
                default:
                    $path = '../'. $relative_path.$image;
                break;
            
            endswitch;
            endif;
            
            //debug($path);
            
            
            return parent::image($path, $options);
            
        }
        
}



?>