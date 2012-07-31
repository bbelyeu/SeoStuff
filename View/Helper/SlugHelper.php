<?php
App::uses('AppHelper', 'View/Helper');

class SlugHelper extends AppHelper
{
    public function getSlug($field)
    {
        return Inflector::slug(utf8_encode(strtolower($field)), '-');
    }
}
