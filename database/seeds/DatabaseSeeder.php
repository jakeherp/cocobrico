<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
		
		$roles = array(
			['id' => 1, 'name' => 'admin', 'description' => 'Full access!', 'modifyCustomer' => 1, 'modifyContainer' => 1, 'modifyOrder' => 1, 'loadList' => 1, 'modifyPrice' => 1, 'deleteOrder' => 1, 'modifyPrices' => 1, 'modifyCredit' => 1, 'modifyBillOfLoading' => 1, 'view' => 1],
			['id' => 2, 'name' => 'observer', 'description' => 'Only view!', 'modifyCustomer' => 0, 'modifyContainer' => 0, 'modifyOrder' => 0, 'loadList' => 0, 'modifyPrice' => 0, 'deleteOrder' => 0, 'modifyPrices' => 0, 'modifyCredit' => 0, 'modifyBillOfLoading' => 0, 'view' => 1],
			['id' => 3, 'name' => 'moderator-1', 'description' => 'View, Modify Container & Bill of Loading!', 'modifyCustomer' => 0, 'modifyContainer' => 1, 'modifyOrder' => 0, 'loadList' => 0, 'modifyPrice' => 0, 'deleteOrder' => 0, 'modifyPrices' => 0, 'modifyCredit' => 0, 'modifyBillOfLoading' => 1, 'view' => 1],
			['id' => 4, 'name' => 'moderator-2', 'description' => 'View, Modify Credit!', 'modifyCustomer' => 0, 'modifyContainer' => 0, 'modifyOrder' => 0, 'loadList' => 0, 'modifyPrice' => 0, 'deleteOrder' => 0, 'modifyPrices' => 0, 'modifyCredit' => 1, 'modifyBillOfLoading' => 0, 'view' => 1],
			['id' => 5, 'name' => 'moderator-3', 'description' => 'View, Modify Container, Order & Load List!', 'modifyCustomer' => 0, 'modifyContainer' => 1, 'modifyOrder' => 1, 'loadList' => 1, 'modifyPrice' => 0, 'deleteOrder' => 0, 'modifyPrices' => 0, 'modifyCredit' => 0, 'modifyBillOfLoading' => 0, 'view' => 1]
		);
		
		DB::table('user_roles')->insert($roles);
    }
}
