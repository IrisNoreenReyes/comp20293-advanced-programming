<?php
require_once __DIR__ . '/../src/Maze.php';

class MazeTest extends \PHPUnit\Framework\TestCase
{

    public function testModNum()
    {
        $maze = new Maze (10);
        $res = $maze->modNum(2);

        $this->assertEquals(0, $res);
    }

    public function testModNumWithExcept1()
    {
        $this->expectException(InvalidArgumentException::class);

        $maze = new Maze (2);
        $res = $maze->modNum(15);
    }

    public function testModNumWithExcept2()
    {
        $this->expectException(InvalidArgumentException::class);

        $maze = new Maze (2);
        $res = $maze->modNum('I');
    }

    public function testMod1()
    {
        $maze = new Maze (15);
        $res = $maze->modNum(10);

        $this->assertEquals(5, $res);
    }

    public function testMod2()
    {
        $maze = new Maze (32);
        $res = $maze->modNum(12);

        $this->assertEquals(8, $res);
    }

}