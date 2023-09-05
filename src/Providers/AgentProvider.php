<?php

namespace Rmunate\AgentDetection\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AgentProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //...
    }

    /**
     * Create Blade Directives.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * This directive is used to conditionally render content for mobile devices.
         * It checks if the detected user agent is a mobile device.
         */
        Blade::directive('ifAgentIsMobile', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isMobile()): ?>";
        });

        Blade::directive('endIfAgentIsMobile', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a desktop device.
         */
        Blade::directive('ifAgentIsDesktop', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isDesktop()): ?>";
        });

        Blade::directive('endIfAgentIsDesktop', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an iPhone.
         */
        Blade::directive('ifAgentIsIPhone', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isIPhone()): ?>";
        });

        Blade::directive('endIfAgentIsIPhone', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a Macintosh device.
         */
        Blade::directive('ifAgentIsMacintosh', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isMacintosh()): ?>";
        });

        Blade::directive('endIfAgentIsMacintosh', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a Linux-based device.
         */
        Blade::directive('ifAgentIsLinux', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isLinux()): ?>";
        });

        Blade::directive('endIfAgentIsLinux', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an Android device.
         */
        Blade::directive('ifAgentIsAndroid', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isAndroid()): ?>";
        });

        Blade::directive('endIfAgentIsAndroid', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a Windows-based device.
         */
        Blade::directive('ifAgentIsWindows', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isWindows()): ?>";
        });

        Blade::directive('endIfAgentIsWindows', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a Windows Phone device.
         */
        Blade::directive('ifAgentIsWindowsPhone', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isWindowsPhone()): ?>";
        });

        Blade::directive('endIfAgentIsWindowsPhone', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an iPod device.
         */
        Blade::directive('ifAgentIsIpod', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isIpod()): ?>";
        });

        Blade::directive('endIfAgentIsIpod', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an iPad device.
         */
        Blade::directive('ifAgentIsIpad', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isIpad()): ?>";
        });

        Blade::directive('endIfAgentIsIpad', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an iMac device.
         */
        Blade::directive('ifAgentIsIMac', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isIMac()): ?>";
        });

        Blade::directive('endIfAgentIsIMac', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an Tabñet.
         */
        Blade::directive('ifAgentIsTablet', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isTablet()): ?>";
        });

        Blade::directive('endIfAgentIsTablet', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an Robot1.
         */
        Blade::directive('ifAgentIsCrawler', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isCrawler()): ?>";
        });

        Blade::directive('endIfAgentIsCrawler', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an Robot1.
         */
        Blade::directive('ifAgentIsRobot', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isRobot()): ?>";
        });

        Blade::directive('endIfAgentIsRobot', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the supplied IP matches
         * the remote address obtained from Agent::detect()->remoteAddress().
         */
        Blade::directive('ifAgentMatch', function ($expression) {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->match($expression)): ?>";
        });

        Blade::directive('endIfAgentMatch', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the supplied IP matches the remote address obtained from Agent::detect()->remoteAddress().
         */
        Blade::directive('ifAgentRemoteIp', function ($expression) {
            return "<?php if ($expression == app('\Rmunate\AgentDetection\Agent')->detect()->remoteAddress()): ?>";
        });

        Blade::directive('endIfAgentRemoteIp', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the supplied port matches the remote port obtained from Agent::detect()->remotePort().
         */
        Blade::directive('ifAgentRemotePort', function ($expression) {
            return "<?php if ($expression == app('\Rmunate\AgentDetection\Agent')->detect()->remotePort()): ?>";
        });

        Blade::directive('endIfAgentRemotePort', function () {
            return '<?php endif; ?>';
        });
    }
}
