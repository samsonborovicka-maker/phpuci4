<?php

namespace Tests\Support;

use PHPUnit\Framework\TestCase;
use App\Models\BibleModel;

class BibleModelTest extends TestCase
{
    public function testCisloSelmyReturns666()
    {
        $model = new BibleModel();
        $this->assertSame(666, $model->cisloSelmy());
    }
}
