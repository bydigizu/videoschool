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
    
    public function testPasswordHash()
    {
        $myPassword = 'qwas123';
        
        $userRecord_local = new \app\models\UserRecord();
        $userRecord_local->setTestUser();
        
        $userRecord_local->setPassword($myPassword);
        $userRecord_local->save();
        
        $userRecord_found = \app\models\UserRecord::findOne($userRecord_local->id);
        $this->assertInstanceOf(get_class($userRecord_local), $userRecord_found);
        
        $securiti = new \yii\base\Security();
        $this->assertTrue($securiti->validatePassword(
                $myPassword,
                $userRecord_found->passhash
                ));
    }
    
    public function testPasswordIsNotRehashed()
    {
        $myPassword = 'qwas123';
        
        $userRecord_local = new \app\models\UserRecord();
        $userRecord_local->setTestUser();
        
        $userRecord_local->setPassword($myPassword);
        $userRecord_local->save();
        
        $firs_hash = $userRecord_local->passhash;
        
        $userRecord_local->name .= mt_rand(1, 9);
        $userRecord_local->save();
        
        $this->assertEquals($firs_hash, $userRecord_local->passhash);
        
        $userRecord_found = \app\models\UserRecord::findOne($userRecord_local->id);
        $this->assertEquals($firs_hash, $userRecord_found->passhash);
        
    }
}