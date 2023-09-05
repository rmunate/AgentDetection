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
         * @ifAgentIsMobile
         *   Content for mobile devices
         * @endIfAgentIsMobile
         *
         */
        Blade::directive('ifAgentIsMobile', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isMobile()): ?>";
        });

        /**
         * End of the mobile-specific block.
         */
        Blade::directive('endIfAgentIsMobile', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a desktop device.
         *
         * Usage:
         * @agentIsDesktop
         *   Content for desktop devices
         * @endIfAgentIsDesktop
         *
         */
        Blade::directive('ifAgentIsDesktop', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isDesktop()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for desktop devices.
         */
        Blade::directive('endIfAgentIsDesktop', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an iPhone.
         *
         * Usage:
         * @agentIsIPhone
         *   Content for iPhone devices
         * @endIfAgentIsIPhone
         *
         */
        Blade::directive('ifAgentIsIPhone', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isIPhone()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for iPhone devices.
         */
        Blade::directive('endIfAgentIsIPhone', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a Macintosh device.
         *
         * Usage:
         * @agentIsMacintosh
         *   Content for Macintosh devices
         * @endIfAgentIsMacintosh
         *
         */
        Blade::directive('ifAgentIsMacintosh', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isMacintosh()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for Macintosh devices.
         */
        Blade::directive('endIfAgentIsMacintosh', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a Linux-based device.
         *
         * Usage:
         * @agentIsLinux
         *   Content for Linux-based devices
         * @endIfAgentIsLinux
         *
         */
        Blade::directive('ifAgentIsLinux', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isLinux()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for Linux-based devices.
         */
        Blade::directive('endIfAgentIsLinux', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an Android device.
         *
         * Usage:
         * @agentIsAndroid
         *   Content for Android devices
         * @endIfAgentIsAndroid
         *
         */
        Blade::directive('ifAgentIsAndroid', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isAndroid()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for Android devices.
         */
        Blade::directive('endIfAgentIsAndroid', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a Windows-based device.
         *
         * Usage:
         * @agentIsWindows
         *   Content for Windows-based devices
         * @endIfAgentIsWindows
         *
         */
        Blade::directive('ifAgentIsWindows', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isWindows()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for Windows-based devices.
         */
        Blade::directive('endIfAgentIsWindows', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is a Windows Phone device.
         *
         * Usage:
         * @agentIsWindowsPhone
         *   Content for Windows Phone devices
         * @endIfAgentIsWindowsPhone
         *
         */
        Blade::directive('ifAgentIsWindowsPhone', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isWindowsPhone()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for Windows Phone devices.
         */
        Blade::directive('endIfAgentIsWindowsPhone', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an iPod device.
         *
         * Usage:
         * @agentIsIpod
         *   Content for iPod devices
         * @endIfAgentIsIpod
         *
         */
        Blade::directive('ifAgentIsIpod', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isIpod()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for iPod devices.
         */
        Blade::directive('endIfAgentIsIpod', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an iPad device.
         *
         * Usage:
         * @agentIsIpad
         *   Content for iPad devices
         * @endIfAgentIsIpad
         *
         */
        Blade::directive('ifAgentIsIpad', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isIpad()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for iPad devices.
         */
        Blade::directive('endIfAgentIsIpad', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the detected user agent is an iMac device.
         *
         * Usage:
         * @agentIsIMac
         *   Content for iMac devices
         * @endIfAgentIsIMac
         *
         */
        Blade::directive('ifAgentIsIMac', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isIMac()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for iMac devices.
         */
        Blade::directive('endIfAgentIsIMac', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the supplied IP matches the remote address obtained from Agent::detect()->remoteAddress().
         *
         * Usage:
         * @agentIp('192.168.1.1')
         *   Content to be displayed if the IP matches
         * @endIfAgentIp
         */
        Blade::directive('ifAgentRemoteIp', function ($expression) {
            return "<?php if ($expression == app('\Rmunate\AgentDetection\Agent')->detect()->remoteAddress()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for matching IP addresses.
         *
         */
        Blade::directive('endIfAgentRemoteIp', function () {
            return '<?php endif; ?>';
        });

        /**
         * This Blade directive starts a block that will be conditionally rendered if the supplied port matches the remote port obtained from Agent::detect()->remotePort().
         *
         * Usage:
         * @agentRemotePort('80')
         *   Content to be displayed if the port matches
         * @endIfAgentRemotePort
         */
        Blade::directive('ifAgentRemotePort', function ($expression) {
            return "<?php if ($expression == app('\Rmunate\AgentDetection\Agent')->detect()->remotePort()): ?>";
        });

        /**
         * This Blade directive ends the block that is conditionally rendered for matching port numbers.
         *
         */
        Blade::directive('endIfAgentRemotePort', function () {
            return '<?php endif; ?>';
        });




        Blade::directive('isCrawler', function () {
            return "<?php if (app('\Rmunate\AgentDetection\Agent')->detect()->isCrawler()): ?>";
        });
        
        Blade::directive('endIfAgentRemotePort', function () {
            return '<?php endif; ?>';
        });

    }
}
