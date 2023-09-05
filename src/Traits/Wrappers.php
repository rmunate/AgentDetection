<?php

namespace Rmunate\AgentDetection\Traits;

use Jaybizzle\CrawlerDetect\CrawlerDetect;

trait Wrappers
{
    /**
     * Create a new CrawlerDetect instance.
     * All the logic of this method is the work of Mark Beech. (JayBizzle)
     * m@rkbee.ch
     * 
     * @return \Jaybizzle\CrawlerDetect\CrawlerDetect
     */
    public static function crawlerDetect()
    {
        return new CrawlerDetect();
    }
}
