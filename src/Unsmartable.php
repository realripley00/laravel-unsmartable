<?php

namespace RealRipley\Unsmartable;


trait Unsmartable
{
    /**
	 * Boot the unsmartable trait.
	 *
	 * @return void
	 */
	public static function bootUnsmartable()
	{

    }
    
    public function unSmart($content)
    {
        $content = preg_replace('/\s+/', ' ',  $content); 

        $search = array(chr(145),
                    chr(146),
                    chr(147),
                    chr(148),
                    chr(151));
 
        $replace = array("'",
                        "'",
                        '"',
                        '"',
                        '-');
    
        return str_replace($search, $replace, $content); 
    }
}