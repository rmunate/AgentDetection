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
         *
         * Usage:
         * @agentIsMobile
         *   Content for mobile devices
         * @endAgentIsMobile
         *
         */
        Blade::directive('agentIsMobile', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isMobile()): ?>";
        });

        /**
         * End of the mobile-specific block.
         */
        Blade::directive('endAgentIsMobile', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a desktop device.
         *
         * Usage:
         * @agentIsDesktop
         *   Content for desktop devices
         * @endAgentIsDesktop
         *
         */
        Blade::directive('agentIsDesktop', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isDesktop()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for desktop devices.
         */
        Blade::directive('endAgentIsDesktop', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an iPhone.
         *
         * Usage:
         * @agentIsIPhone
         *   Content for iPhone devices
         * @endAgentIsIPhone
         *
         */
        Blade::directive('agentIsIPhone', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isIPhone()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for iPhone devices.
         */
        Blade::directive('endAgentIsIPhone', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a Macintosh device.
         *
         * Usage:
         * @agentIsMacintosh
         *   Content for Macintosh devices
         * @endAgentIsMacintosh
         *
         */
        Blade::directive('agentIsMacintosh', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isMacintosh()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for Macintosh devices.
         */
        Blade::directive('endAgentIsMacintosh', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a Linux-based device.
         *
         * Usage:
         * @agentIsLinux
         *   Content for Linux-based devices
         * @endAgentIsLinux
         *
         */
        Blade::directive('agentIsLinux', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isLinux()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for Linux-based devices.
         */
        Blade::directive('endAgentIsLinux', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an Android device.
         *
         * Usage:
         * @agentIsAndroid
         *   Content for Android devices
         * @endAgentIsAndroid
         *
         */
        Blade::directive('agentIsAndroid', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isAndroid()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for Android devices.
         */
        Blade::directive('endAgentIsAndroid', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a Windows-based device.
         *
         * Usage:
         * @agentIsWindows
         *   Content for Windows-based devices
         * @endAgentIsWindows
         *
         */
        Blade::directive('agentIsWindows', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isWindows()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for Windows-based devices.
         */
        Blade::directive('endAgentIsWindows', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a Windows Phone device.
         *
         * Usage:
         * @agentIsWindowsPhone
         *   Content for Windows Phone devices
         * @endAgentIsWindowsPhone
         *
         */
        Blade::directive('agentIsWindowsPhone', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isWindowsPhone()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for Windows Phone devices.
         */
        Blade::directive('endAgentIsWindowsPhone', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an iPod device.
         *
         * Usage:
         * @agentIsIpod
         *   Content for iPod devices
         * @endAgentIsIpod
         *
         */
        Blade::directive('agentIsIpod', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isIpod()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for iPod devices.
         */
        Blade::directive('endAgentIsIpod', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an iPad device.
         *
         * Usage:
         * @agentIsIpad
         *   Content for iPad devices
         * @endAgentIsIpad
         *
         */
        Blade::directive('agentIsIpad', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isIpad()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for iPad devices.
         */
        Blade::directive('endAgentIsIpad', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an iMac device.
         *
         * Usage:
         * @agentIsIMac
         *   Content for iMac devices
         * @endAgentIsIMac
         *
         */
        Blade::directive('agentIsIMac', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isIMac()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for iMac devices.
         */
        Blade::directive('endAgentIsIMac', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the supplied IP matches the remote address obtained from Agent::detect()->remoteAddress().
         *
         * Usage:
         * @agentIp('192.168.1.1')
         *   Content to be displayed if the IP matches
         * @endAgentIp
         */
        Blade::directive('agentRemoteIp', function ($expression) {
            return "<?php if ($expression == app('\Rmunate\AgentDetection\Agent')->detect()->remoteAddress()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for matching IP addresses.
         *
         */
        Blade::directive('endAgentRemoteIp', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the supplied port matches the remote port obtained from Agent::detect()->remotePort().
         *
         * Usage:
         * @agentRemotePort('80')
         *   Content to be displayed if the port matches
         * @endAgentRemotePort
         */
        Blade::directive('agentRemotePort', function ($expression) {
            return "<?php if ($expression == app('\Rmunate\AgentDetection\Agent')->detect()->remotePort()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for matching port numbers.
         *
         */
        Blade::directive('endAgentRemotePort', function () {
            return '<?php endif; ?>';
        });




        Blade::directive('isCrawler', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isCrawler()): ?>";
        });
        
        Blade::directive('endAgentRemotePort', function () {
            return '<?php endif; ?>';
        });

    }
}
