<?php

use PHPUnit\Framework\Attributes\BackupGlobals;
use PHPUnit\Framework\TestCase;
use Rmunate\AgentDetection\Agent;
use Rmunate\AgentDetection\Exceptions\AgentException;

#[BackupGlobals(true)]
final class AgentTest extends TestCase
{
    public function test_it_handles_a_missing_user_agent_without_laravel(): void
    {
        unset($_SERVER['HTTP_USER_AGENT'], $_SERVER['REMOTE_ADDR'], $_SERVER['REMOTE_PORT']);

        self::assertNull(Agent::get());
        self::assertFalse(Agent::isMobile());
        self::assertFalse(Agent::isDesktop());
        self::assertFalse(Agent::isTablet());
        self::assertFalse(Agent::isCrawler());
        self::assertNull(Agent::getCrawler());
        self::assertFalse(Agent::match(''));
        self::assertSame('Unknown', Agent::clientOS());
        self::assertSame('Unknown', Agent::browser()->getName());
        self::assertNull(Agent::remoteAddress());
        self::assertNull(Agent::remotePort());
    }

    public function test_it_uses_the_php_request_and_honors_an_explicit_user_agent(): void
    {
        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_0 like Mac OS X) Mobile/15E148';
        $_SERVER['REMOTE_ADDR'] = '192.0.2.10';
        $_SERVER['REMOTE_PORT'] = '50000';

        self::assertSame($_SERVER['HTTP_USER_AGENT'], Agent::get());
        self::assertTrue(Agent::isIPhone());
        self::assertTrue(Agent::detect()->isMobile());
        self::assertSame('192.0.2.10', Agent::remoteAddress());
        self::assertSame('50000', Agent::remotePort());
        self::assertTrue(Agent::set('Mozilla/5.0 (Windows NT 10.0)')->isDesktop());
        self::assertFalse(Agent::set('')->isMobile());
        self::assertFalse(Agent::set('0')->isMobile());
        self::assertTrue(Agent::isIPhone());
    }

    public function test_it_passes_the_selected_agent_to_the_tablet_and_crawler_detectors(): void
    {
        $_SERVER['HTTP_USER_AGENT'] = 'Googlebot/2.1 (+http://www.google.com/bot.html)';
        $tablet = Agent::set('Mozilla/5.0 (iPad; CPU OS 17_0 like Mac OS X) Mobile/15E148 Safari/604.1');

        self::assertTrue($tablet->isTablet());
        self::assertFalse($tablet->isCrawler());
        self::assertNull($tablet->getCrawler());
        self::assertTrue(Agent::isCrawler());
        self::assertSame('Googlebot', Agent::getCrawler());
        self::assertFalse(Agent::set('')->isCrawler());
        self::assertFalse(Agent::set('0')->isCrawler());
    }

    public function test_an_unknown_static_method_throws_an_agent_exception(): void
    {
        $this->expectException(AgentException::class);
        $this->expectExceptionMessage("The method 'unknownMethod()' does not exist.");

        Agent::unknownMethod();
    }

    public function test_static_calls_do_not_mask_argument_errors(): void
    {
        $this->expectException(ArgumentCountError::class);

        Agent::__callStatic('match', []);
    }
}
