<?php
    use PHPUnit\Framework\TestCase;
    require 'Clock.php';


class ClockTest extends TestCase{

    public function testBloc1minute1(){
        //arrange
        $Clock = new Clock();
        //act
        $actual = $Clock->bloc1minute(8);
        //assertEquals
        $this->assertEquals(("yyyn"),$actual);
    }

    public function testBloc1minute2(){
        //arrange
        $Clock = new Clock();
        //act
        $actual = $Clock->bloc1minute(0);
        //assertEquals
        $this->assertEquals(("nnnn"),$actual);
    }

    public function testBloc5minutes1(){
        //Arrange
        $clock = new Clock();

        //Act
        $actual = $clock->bloc5minutes(3);

        //AssertEquals
        $this->assertEquals("nnnnnnnnnnn", $actual);
    }

    public function testBloc5minutes2(){
        //Arrange
        $clock = new Clock();

        //Act
        $actual = $clock->bloc5minutes(25);

        //AssertEquals
        $this->assertEquals("yyyyynnnnnn", $actual);
    }

    public function testBloc1hour1(){
        //Arrange
        $clock = new Clock();

        //Act
        $actual = $clock->bloc1hour(2);

        //AssertEquals
        $this->assertEquals("yynn",$actual);
    }

    public function testBloc1hour2(){
        //Arrange
        $clock = new Clock();

        //Act
        $actual = $clock->bloc1hour(5);

        //AssertEquals
        $this->assertEquals("nnnn",$actual);
    }

    public function testBloc5Hours1(){
        //Arrange
        $clock = new Clock();

        //Act
        $actual = $clock->bloc5hours(4);

        //AssertEquals
        $this->assertEquals("nnnn", $actual);
    }

    public function testBloc5Hours2(){
        //Arrange
        $clock = new Clock();

        //Act
        $actual = $clock->bloc5hours(18);

        //AssertEquals
        $this->assertEquals("yyyn", $actual);
    }

    public function testBlocSecond1(){
        //Arrange
        $clock = new Clock();

        //Act
        $actual = $clock->blocSecond(0);

        //AssertEquals
        $this->assertEquals("y", $actual);
    }

    public function testBlocSecond2(){
        //Arrange
        $clock = new Clock();

        //Act
        $actual = $clock->blocSecond(1);

        //AssertEquals
        $this->assertEquals("n", $actual);
    }

    public function testBlocSecond3(){
        //Arrange
        $clock = new Clock();

        //Act
        $actual = $clock->blocSecond(58);

        //AssertEquals
        $this->assertEquals("y", $actual);
    }

    public function testAll(){
        //Arrange
        $clock = new Clock();
        //Act
        $actual = $clock->all("11:11:11");
        //AssertEquals
        $this->assertEquals("n",$actual[0]);
        $this->assertEquals("yynn",$actual[1]);
        $this->assertEquals("ynnn",$actual[2]);
        $this->assertEquals("yynnnnnnnnn",$actual[3]);
        $this->assertEquals("ynnn",$actual[4]);
        }
}
