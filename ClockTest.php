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
        $this->assertEquals(([true,true,true,false]),$actual);
    }

    public function testBloc1minute2(){
        //arrange
        $Clock = new Clock();
        //act
        $actual = $Clock->bloc1minute(0);
        //assertEquals
        $this->assertEquals(([false,false,false,false]),$actual);
    }

    public function testBloc5minutes1(){
        //Arrange
        $clock = new Clock();

        //Act
        $actual = $clock->bloc5minutes(3);

        //AssertEquals
        $this->assertEquals([false, false, false, false, false, false, false, false, false, false, false], $actual);
    }

    public function testBloc5minutes2(){
        //Arrange
        $clock = new Clock();

        //Act
        $actual = $clock->bloc5minutes(25);

        //AssertEquals
        $this->assertEquals([true, true, true, true, true, false, false, false, false, false, false], $actual);
    }

    public function testBloc1hour1(){
        //Arrange
        $clock = new Clock();

        //Act
        $actual = $clock->bloc1hour(2);

        //AssertEquals
        $this->assertEquals([true,true,false,false],$actual);
    }

    public function testBloc1hour2(){
        //Arrange
        $clock = new Clock();

        //Act
        $actual = $clock->bloc1hour(5);

        //AssertEquals
        $this->assertEquals([false,false,false,false],$actual);
    }

    public function testBloc5Hours1(){
        //Arrange
        $clock = new Clock();

        //Act
        $actual = $clock->bloc5hours(4);

        //AssertEquals
        $this->assertEquals([false, false, false, false], $actual);
    }

    public function testBloc5Hours2(){
        //Arrange
        $clock = new Clock();

        //Act
        $actual = $clock->bloc5hours(18);

        //AssertEquals
        $this->assertEquals([true, true, true, false], $actual);
    }
}