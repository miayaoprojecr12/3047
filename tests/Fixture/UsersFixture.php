<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => '6f48af10-c7a5-4880-9e3b-22b627c6ea73',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'firstname' => 'Lorem ipsum dolor sit amet',
                'surname' => 'Lorem ipsum dolor sit amet',
                'created' => 1679842327,
                'modified' => 1679842327,
            ],
        ];
        parent::init();
    }
}
