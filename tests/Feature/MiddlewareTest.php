<?php

namespace Guardian\Tests;

use Illuminate\Http\Request;
use Saif\Guardian\Middleware\XSSSanitizer;
use PHPUnit\Framework\TestCase;

class MiddlewareTest extends TestCase
{
    public function testMiddlewareStripsTags()
    {
        $middleware = new XSSSanitizer();

        $request = Request::create('/test', 'GET', [
            'input' => '<script>alert(\"xss\")</script>safe text',
        ]);

        $middleware->handle($request, function ($request) {
            $this->assertEquals('safe text', $request->input('input'));
        });
    }
}
