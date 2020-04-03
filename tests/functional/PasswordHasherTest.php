<?php 
class PasswordHasherTest extends \Codeception\Test\Unit
{
    /**
     * @var \FunctionalTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $userRecord = \app\models\UserRecord::findOne(1);
        $this->assertEquals('Krosh', $userRecord->name, 'Krosh does not found');
    }
}