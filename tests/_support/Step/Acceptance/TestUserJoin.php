<?php
namespace Step\Acceptance;

class TestUserJoin extends \AcceptanceTester
{

    public function imagineUser()
    {
        $faker = \Faker\Factory::create();
        $user = [
            'name' => $faker->firstName,
            'email' => $faker->email,
            'password' => $faker->city
        ];
        return $user;
    }

    public function joinUser($user)
    {
        $I = $this;
        $I->amOnPage('/user/join');
        $I->see('Join us');
        $I->fillField('UserJoinForm[name]', $user['name']);
        $I->fillField('UserJoinForm[email]', $user['email']);
        $I->fillField('UserJoinForm[password]', $user['password']);
        $I->fillField('UserJoinForm[repeatpassword]', $user['password']);
        $I->click('Create');
    }

    public function loginUser($user)
    {
        $I = $this;
        $I->amOnPage('/user/login');
        $I->see('Log in');
        $I->fillField('UserLoginForm[email]', $user['email']);
        $I->fillField('UserLoginForm[password]', $user['password']);
        $I->click('Enter');
    }

    public function logoutUser()
    {
        $I = $this;
         $I->click('Logout');
    }

    public function isUserLogged($user)
    {
        $I = $this;
         $I->see($user['name']);
    }

    public function noUserLogged($user)
    {
        $I = $this;
        $I->dontSee($user['name']);
    }

}