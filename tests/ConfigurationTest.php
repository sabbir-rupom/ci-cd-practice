<?php 

class ConfigurationTest extends \PHPUnit\Framework\TestCase {
    public function testPhpVersion() {
        $test = phpversion() === '7.3.18';
        $this->assertTrue($test);
    }
}