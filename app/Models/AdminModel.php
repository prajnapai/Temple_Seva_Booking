<?php
	
	namespace App\Models;
	
	use Illuminate\Database\Eloquent\Model;
	use DB;
	use Auth;
	
	class AdminModel extends Model
	{
		
		public function sevaInsert($id)
		{
			if($id['seva_id']=="")
			{
                $sevaInsert=DB::table('seva')->insertGetId(["seva_name"=>$id['sevaname'],"seva_category"=>$id['sevacategory'],"seva_img"=>$id['image'],"time"=>$id['sevatime'],"duration"=>$id['sevaduration'],"amount"=>$id['sevaamount'],"description"=>$id['sevadescrip']]);
				
			}
			else
			{
			    $sevaInsert=DB::table('seva')->where('seva_id','=',$id['seva_id'])->update(["seva_name"=>$id['sevaname'],"seva_category"=>$id['sevacategory'],"seva_img"=>$id['image'],"time"=>$id['sevatime'],"duration"=>$id['sevaduration'],"amount"=>$id['sevaamount'],"description"=>$id['sevadescrip']]);
			}
			return $sevaInsert; 
		}
		
		public function categoryInsert($id)
		{
			if($id['category_id']=="")
			{
                $categoryInsert=DB::table('category')->insertGetId(["cat_name"=>$id['categoryname']]);
			}
			else
			{
			    $categoryInsert=DB::table('category')->where('category_id','=',$id['category_id'])->update(["cat_name"=>$id['categoryname']]);
			}
			return $categoryInsert; 
		}

		public function registerInsert($id)
		{
			$customer=DB::table('users')->insertGetId(["name"=>$id['firstname'],"email"=>$id['regemail'],"password"=>$id['regpassword'],"usertype"=>'customer']);
			$registerInsert=DB::table('customer')->insertGetId(["firstname"=>$id['firstname'],"lastname"=>$id['lastname'],"email"=>$id['regemail'],"contact"=>$id['mobileno'],"password"=>$id['regpassword'],"id"=>$customer]);
			return $registerInsert; 
		}

		public function profileInsert($id)
		{
			DB::table('users')->where('id','=',$id['customer_id'])->update(["name"=>$id['firstname']]);
			$profileInsert=DB::table('customer')->where('id','=',$id['customer_id'])->update(["firstname"=>$id['firstname'],"lastname"=>$id['lastname'],"contact"=>$id['mobileno'],"gender"=>$id['gender'],"dob"=>$id['dob']]);
			
			return $profileInsert; 
		}

		public function bookingInsert($id)
		{
           $bookingInsert=DB::table('bookings')->insertGetId(["devotee_name"=>$id['devoteename'],"email"=>$id['inputemail'],"seva_name"=>$id['sevaname'],"contact"=>$id['contactnum'],"date"=>$id['bookingdate'],"amount"=>$id['bookamount'],"id"=>$id['id']]);
			
			return $bookingInsert; 
		 
		}

    }
?>