<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrderItemsFixture
 */
class OrderItemsFixture extends TestFixture
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
                'id' => 1,
                'order_id' => 1,
                'product_id' => 1,
                'service_id' => 1,
                'quantity' => 1,
                'price' => 1.5,
                'created' => '2023-04-19 18:15:29',
                'modified' => '2023-04-19 18:15:29',
            ],
        ];
        parent::init();
    }
}
