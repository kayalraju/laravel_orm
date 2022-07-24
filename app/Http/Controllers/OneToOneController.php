<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;
use App\Models\Customer;
use DB;
class OneToOneController extends Controller
{
    public function add_data(){

    	$mobile= new Mobile();
		$mobile->model="note";
		$mobile->company="redmi";

		$customer= new Customer();
		$customer->name="raju kayal";
		$customer->email="raju@gmail.com";


		$customer->save();

		$customer->mobile()->save($mobile);	
    }

     public function getmobile($id){
		//show mobile through customer table
		$customer= Customer::find($id)->mobile;
		return $customer;

    }
    
	public function getCustomer($id){
		//show customet through mobile table
		$mobile= Mobile::find($id)->customer;
		return $mobile;
    }

	public function getCustomerBlade($id){
		//show customet through mobile table in blade templete 
		$mobile= Mobile::find($id)->customer;
		return view('onetoone.home',['mobile'=>$mobile]);
		

    }
  
	public function fetchAllData($id){
		//***fetch data customer to mobile
		//$customer=Customer::find($id);
		//dd($customer->name);//show the customer name
		//dd($customer->mobile->model);//get data which customer buy which type mobile

		//**fetch data mobile to customer */
		$mobile=Mobile::find($id);
		dd($mobile->customer->name,$mobile->company,$mobile->model);//fetch data which mobile buying the customer

	}
    
}
