<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Orchestra\Testbench\TestCase;
use PHPUnit\Framework\Attributes\BackupGlobals;
use Rmunate\AgentDetection\Agent;
use Rmunate\AgentDetection\Providers\AgentProvider;

#[BackupGlobals(true)]
final class LaravelIntegrationTest extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [AgentProvider::class];
    }

    public function test_blade_uses_the_active_request_across_consecutive_requests(): void
    {
        $_SERVER['HTTP_USER_AGENT'] = 'Googlebot/2.1';
        $_SERVER['REMOTE_ADDR'] = '192.0.2.20';
        $_SERVER['REMOTE_PORT'] = '9000';

        $this->app['router']->get('/agent', static function () {
            return Blade::render(<<<'BLADE'
                {{ \Rmunate\AgentDetection\Agent::get() }}
                @agentMobile [mobile] @endAgentMobile
                @agentDesktop [desktop] @endAgentDesktop
                @agentTablet [tablet] @endAgentTablet
                @agentCrawler [crawler] @endAgentCrawler
                @agentMatch($keyword) [match] @endAgentMatch
                @agentRemoteIp('203.0.113.10') [peer] @endAgentRemoteIp
                @agentRemotePort(443) [port] @endAgentRemotePort
                BLADE, ['keyword' => 'IPAD']);
        });

        $ipad = 'Mozilla/5.0 (iPad; CPU OS 17_0 like Mac OS X) Mobile/15E148 Safari/604.1';
        $this->withServerVariables(['REMOTE_ADDR' => '203.0.113.10', 'REMOTE_PORT' => 443])
            ->get('/agent', ['User-Agent' => $ipad])
            ->assertOk()
            ->assertSee($ipad)
            ->assertSee('[mobile]')
            ->assertSee('[tablet]')
            ->assertSee('[match]')
            ->assertSee('[peer]')
            ->assertSee('[port]')
            ->assertDontSee('[desktop]')
            ->assertDontSee('[crawler]');

        $desktop = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) Firefox/145.0';
        $this->withServerVariables(['REMOTE_ADDR' => '203.0.113.11', 'REMOTE_PORT' => 444])
            ->get('/agent', ['User-Agent' => $desktop])
            ->assertOk()
            ->assertSee($desktop)
            ->assertSee('[desktop]')
            ->assertDontSee('[mobile]')
            ->assertDontSee('[tablet]')
            ->assertDontSee('[match]')
            ->assertDontSee('[peer]')
            ->assertDontSee('[port]')
            ->assertDontSee('[crawler]');
    }

    public function test_missing_fields_in_a_laravel_request_do_not_use_server_globals(): void
    {
        $_SERVER['HTTP_USER_AGENT'] = 'Googlebot/2.1';
        $_SERVER['REMOTE_ADDR'] = '192.0.2.20';
        $_SERVER['REMOTE_PORT'] = '9000';

        $this->app['router']->get('/agent', static function (Request $request) {
            $request->headers->remove('User-Agent');
            $request->server->remove('REMOTE_ADDR');
            $request->server->remove('REMOTE_PORT');

            return [
                'agent'   => Agent::get(),
                'crawler' => Agent::isCrawler(),
                'ip'      => Agent::remoteAddress(),
                'port'    => Agent::remotePort(),
            ];
        });

        $this->get('/agent')->assertOk()->assertExactJson([
            'agent'   => null,
            'crawler' => false,
            'ip'      => null,
            'port'    => null,
        ]);
    }
}
