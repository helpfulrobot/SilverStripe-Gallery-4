<?php
class GalleryPage extends Page
{

    public static $db = array(
    );

    public static $has_one = array(
    );
    
    public static $has_many = array(
        //'GalleryImages' => 'GalleryImage',
        'Images' => 'Image'
    );
    
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        
        $f = new SortableGalleryField('Images', 'My Images');
        $fields->addFieldToTab('Root.Images', $f);
        
        return $fields;
    }
}
class GalleryPage_Controller extends Page_Controller
{

    
    public static $allowed_actions = array(
    );
    
    public function getGalleryImages()
    {
        return $this->Images();
    }
    
    
    public function init()
    {
        parent::init();
        
        Requirements::javascript(SAPPHIRE_DIR .'/thirdparty/jquery/jquery.js');
        Requirements::javascript(SS3GALLERY_DIR . '/javascript/ss3Gallery.js');
        Requirements::css(SS3GALLERY_DIR . '/css/ss3Gallery.css');
    }
}
