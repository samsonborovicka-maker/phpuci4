<?php

namespace Tests\Support;

use PHPUnit\Framework\TestCase;
use App\Controllers\BibleController;

class BibleControllerTest extends TestCase
{
    public function testIndexReturnsExpectedString()
    {
        $controller = new BibleController();
        $result = $controller->index();

        $this->assertStringContainsString('Cislo selmy je: 666', $result);
    }
}
