<?php

namespace Rmunate\AgentDetection\Server;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;

/**
 * @internal
 */
final class RequestContext
{
    public static function userAgent(): ?string
    {
        $request = self::current();

        return $request !== null ? $request->userAgent() : ($_SERVER['HTTP_USER_AGENT'] ?? null);
    }

    public static function server(string $key): ?string
    {
        $request = self::current();
        $value = $request !== null ? $request->server($key) : ($_SERVER[$key] ?? null);

        return $value === null ? null : (string) $value;
    }

    private static function current(): ?Request
    {
        $app = Facade::getFacadeApplication();

        // Resolve the binding on each call so reused workers see the current request.
        return $app !== null && $app->bound('request') ? $app->make('request') : null;
    }
}
