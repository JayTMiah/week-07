<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Owner;

class BananaTest extends TestCase
{
    public function testBananaTest()
    {
        $this->assertSame("No we have no bananas", Owner::haveWeBananas(0));

        $this->assertSame("Yes we have 1 banana", Owner::haveWeBananas(1));

        $this->assertSame("Yes we have -12 bananas", Owner::haveWeBananas(-12));
    }
}
