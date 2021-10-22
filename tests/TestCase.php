<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Stephenjude\ApiTestHelper\WithApiHelper;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use WithApiHelper;
}
