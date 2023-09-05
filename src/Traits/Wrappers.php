<?php

namespace Rmunate\AgentDetection\Traits;

use Detection\MobileDetect;
use Jaybizzle\CrawlerDetect\CrawlerDetect;

trait Wrappers
{
    /**
     * Crea una nueva instancia de CrawlerDetect.
     * Todo el trabajo de lógica de este método es obra de Mark Beech. (JayBizzle)
     * Contacto: m@rkbee.ch.
     *
     * @return \Jaybizzle\CrawlerDetect\CrawlerDetect
     */
    public static function crawlerDetect()
    {
        return new CrawlerDetect();
    }

    /**
     * Crea una nueva instancia de MobileDetect.
     * Todo el trabajo de lógica de este método es obra de Mark Beech. (JayBizzle)
     * Contacto: m@rkbee.ch.
     *
     * @return \Detection\MobileDetect
     */
    public static function mobileDetect($headers = null, $userAgent = null)
    {
        return new MobileDetect($headers, $userAgent);
    }
}
