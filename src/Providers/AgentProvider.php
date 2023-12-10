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
        Blade::directive('agentMobile', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isMobile()): ?>";
        });

        Blade::directive('endAgentMobile', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a desktop device.
         */
        Blade::directive('agentDesktop', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isDesktop()): ?>";
        });

        Blade::directive('endAgentDesktop', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an iPhone.
         */
        Blade::directive('agentIPhone', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isIPhone()): ?>";
        });

        Blade::directive('endAgentIPhone', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a Macintosh device.
         */
        Blade::directive('agentMacintosh', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isMacintosh()): ?>";
        });

        Blade::directive('endAgentMacintosh', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a Linux-based device.
         */
        Blade::directive('agentLinux', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isLinux()): ?>";
        });

        Blade::directive('endAgentLinux', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an Android device.
         */
        Blade::directive('agentAndroid', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isAndroid()): ?>";
        });

        Blade::directive('endAgentAndroid', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a Windows-based device.
         */
        Blade::directive('agentWindows', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isWindows()): ?>";
        });

        Blade::directive('endAgentWindows', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a Windows Phone device.
         */
        Blade::directive('agentWindowsPhone', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isWindowsPhone()): ?>";
        });

        Blade::directive('endAgentWindowsPhone', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an iPod device.
         */
        Blade::directive('agentIpod', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isIpod()): ?>";
        });

        Blade::directive('endAgentIpod', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an iPad device.
         */
        Blade::directive('agentIpad', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isIpad()): ?>";
        });

        Blade::directive('endAgentIpad', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an iMac device.
         */
        Blade::directive('agentIMac', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isIMac()): ?>";
        });

        Blade::directive('endAgentIMac', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an Tabñet.
         */
        Blade::directive('agentTablet', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isTablet()): ?>";
        });

        Blade::directive('endAgentTablet', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an Robot1.
         */
        Blade::directive('agentCrawler', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isCrawler()): ?>";
        });

        Blade::directive('endAgentCrawler', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an Robot1.
         */
        Blade::directive('agentRobot', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isRobot()): ?>";
        });

        Blade::directive('endAgentRobot', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the supplied IP matches
         * the remote address obtained from Agent::detect()->remoteAddress().
         */
        Blade::directive('agentMatch', function ($expression = null) {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->match($expression)): ?>";
        });

        Blade::directive('endAgentMatch', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the supplied IP matches the remote address obtained from Agent::detect()->remoteAddress().
         */
        Blade::directive('agentRemoteIp', function ($expression) {
            return "<?php if ($expression == app('\Rmunate\AgentDetection\Agent')->detect()->remoteAddress()): ?>";
        });

        Blade::directive('endAgentRemoteIp', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the supplied port matches the remote port obtained from Agent::detect()->remotePort().
         */
        Blade::directive('agentRemotePort', function ($expression) {
            return "<?php if ($expression == app('\Rmunate\AgentDetection\Agent')->detect()->remotePort()): ?>";
        });

        Blade::directive('endAgentRemotePort', function () {
            return '<?php endif; ?>';
        });
    }
}
