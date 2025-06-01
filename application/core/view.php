<?php

class View
{

//public $template_view;
// // here you can specify the default general view.

/*
$content_file - views displaying page content;
$template_file - a common template for all pages;
$data - an array containing page content elements. Usually filled in the model.
*/
    public function generate($content_view, $template_view, $data = null)
    {

        /*
if(is_array($data)) {

// convert array elements to variables
extract($data);
}
*/

/*
dynamically connect a common template (view),
inside which the view will be embedded
to display the content of a specific page.
*/
        include 'application/views/' . $template_view;
    }
}