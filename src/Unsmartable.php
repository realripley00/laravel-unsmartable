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

        $rawContent = html_entity_decode($content);

        $search = array(
                    chr(9),
                    chr(10),
                    chr(11),
                    chr(12),
                    chr(13),
                    chr(14),
                    chr(145),
                    chr(146),
                    chr(147),
                    '‘',
                    '’',
                    '“',
                    '”',
                    '—',
                    '–',
                    chr(151));
 
        $replace = array(
                        " ",
                        " ",
                        " ",
                        " ",
                        " ",
                        " ",
                        "'",
                        "'",
                        "'",
                        "'",
                        "'",
                        '"',
                        '"',
                        '-',
                        '-',
                        '-');
    
         return str_replace($search, $replace, $rawContent);  
    }
}