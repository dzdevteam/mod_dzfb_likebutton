<?php
// no direct access
defined('_JEXEC') or die;

abstract class modDZFacebookLikeButtonHelper
{
    public static function getDataAttribs($params) {
        $data = array();
        
        # Href
        $href = JUri::current();
        $data[] = "data-href=\"$href\"";
        
        # Show send button
        $send = (int) $params->get('send', 0);
        if ($send)
            $data[] = "data-send=\"true\"";
        else
            $data[] = "data-send=\"false\"";
        
        # Button layout
        $layout = $params->get('button_layout', 'standard');
        $data[] = "data-layout=\"layout\"";
        
        # Box width
        $width = (int) $params->get('width', 0);
        if ($width)
            $data[] = "data-width=\"$width\"";
            
        # Show faces in box
        $show_faces = (int) $params->get('show_faces', 1);
        if ($show_faces)
            $data[] = "data-show-faces=\"true\"";
        else
            $data[] = "data-show-faces=\"false\"";
        
        # Button font
        $font = $params->get('font', 'arial');
        $data[] = "data-font=\"$font\"";
        
        # Box colorscheme
        $colorscheme = $params->get('colorscheme', 'light');
        $data[] = "data-colorscheme=\"$colorscheme\"";
        
        # Action
        $action = $params->get('action', 'like');
        $data[] = "data-action=\"$action\"";
        
        # Return data attribs in string
        return implode(" ", $data);
    }
}
