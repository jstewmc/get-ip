<?php
/**
 * The file for the get-ip service tests
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\GetIp;

use Jstewmc\TestCase\TestCase;

/**
 * Tests for the get-ip service
 */
class GetIpTest extends TestCase
{
    /* !__invoke() */
    
    /**
     * __invoke() should return null if ip address does not exist
     */
    public function testInvokeReturnsNullIfIpAddressDoesNotExist()
    {
        return $this->assertNull((new GetIp())());
    }
    
    /**
     * __invoke() should return null if ip address is invalid
     */
    public function testInvokeReturnsNullIfIpAddressIsNotValid()
    {
        return $this->assertNull((new GetIp())('foo'));
    }
    
    /**
     * __invoke() should return string if ip address is valid
     */
    public function testInvokeReturnsStringIfIpAddressIsValid()
    {
        return $this->assertEquals('1.2.3.4', (new GetIp())('1.2.3.4'));   
    }
}
