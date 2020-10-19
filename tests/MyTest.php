<?php 
class MyTest extends \Codeception\Test\Unit
{
    const DATA_LOCATION ='datas/';
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        include_once "include/datas.inc.php";
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $this->assertTrue(1===1);
        $this->assertFalse(1===true);
    }

    // testsEmployés
    public function testEmployeeLoading()
    {
        $employees=jsonFileToArray(self::DATA_LOCATION.'employees.json');
        $this->assertIsArray($employees);
        $this->assertEquals(16, count($employees));
        $this->assertEquals('Robin Arryn', $employees[0]['name']);
    }

    //TestsSofts
    public function testSoftsLoading()
    {
        $softs=jsonFileToArray(self::DATA_LOCATION.'softs.json');
        $this->assertIsArray($softs);
        $this->assertEquals(11, count($softs));
        $this->assertEquals('AG2L', $softs[0]['name']);
    }
}