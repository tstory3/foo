<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require __DIR__ . '/../src/FooFighters.php';

class FooFightersTest extends TestCase
{
  public function testGetRandomFoo_WithDefaultFooEntries_ReturnsNotNull()
  {
       $foosh = new FooFighters();
       $this->assertNotNull( $foosh->getRandomFoo() );
  }

  public function testFooArrayInitialization_WithDefaultEntries_ReturnsCountOf1()
  {
       $foosh = new FooFighters();
       $this->assertCount(1, $foosh->foo);
  }
  
}
