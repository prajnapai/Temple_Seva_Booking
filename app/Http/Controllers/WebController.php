<?php

namespace App\Http\Controllers;
	
     use App\Models\AdminModel;
     use Illuminate\Http\Request;
	use Auth;
	use DB;
	use App\Models\User;
	use file;
	use Input;
    
    
class WebController extends Controller
{
     public function __construct()
    {
       $this->admin= new AdminModel;
    }
   
    public function home()
    {
          $uname='';
			if(Auth::user())
			$uname= Auth::user();
			if(!empty($uname))
			{
		    	$data['id']=$uname->id;
		    	$data['userdetail']=DB::table('users')->where('id',$data['id'])->first();
			}
			else
			{
				$data['id']="0";
				$data['userdetail']="null";
			}
         return view('front-end.home',compact('data'));
    }

    public function about()
    {     $uname='';
			if(Auth::user())
			$uname= Auth::user();
			if(!empty($uname))
			{
		    	$data['id']=$uname->id;
		    	$data['userdetail']=DB::table('users')->where('id',$data['id'])->first();
			}
			else
			{
				$data['id']="0";
				$data['userdetail']="null";
			}

         return view('front-end.about',compact('data'));
    }

    public function seva()
    {
          $uname='';
			if(Auth::user())
			$uname= Auth::user();
			if(!empty($uname))
			{
		    	$data['id']=$uname->id;
		    	$data['userdetail']=DB::table('users')->where('id',$data['id'])->first();
			}
			else
			{
				$data['id']="0";
				$data['userdetail']="null";
			}

          $data['categoryloop']=DB::table('category')->where('status','0')->get();
          $data['sevaloop']=DB::table('seva')->where('status','0')->get();
		return view('front-end.seva',compact('data'));
         
    }

    public function details()
    {
          $uname='';
			if(Auth::user())
			$uname= Auth::user();
			if(!empty($uname))
			{
		    	$data['id']=$uname->id;
		    	$data['userdetail']=DB::table('users')->where('id',$data['id'])->first();
			}
			else
			{
				$data['id']="0";
				$data['userdetail']="null";
			}

          $data['sevaloop']=DB::table('seva')->where('status','0')->get();
		return view('front-end.details',compact('data'));
      
    }
   
    

    public function contact()
    {
          $uname='';
			if(Auth::user())
			$uname= Auth::user();
			if(!empty($uname))
			{
		    	$data['id']=$uname->id;
		    	$data['userdetail']=DB::table('users')->where('id',$data['id'])->first();
			}
			else
			{
				$data['id']="0";
				$data['userdetail']="null";
			}
               
         return view('front-end.contact',compact('data'));
    }

    public function login()
    {
         return view('front-end.login');
    }

	public function login_insert(Request $request)
		{
			$canLogin = 0;
			$email = $request->input('email');
			$auth = user::where('email',$email)->where('usertype','customer')->first();
			if($auth)
			{
				Auth::login($auth);
				$password = Auth::user()->password;
				$login_status = Auth::user()->status;
				if($request->input('password'))
				{
					if ($request->input('password')==$password)
					{
						if($login_status=='0')
						{ 
							$canLogin=1;
						}
						elseif($login_status=='1')
						{
							$canLogin=404;
						} 
						else
						{
							$canLogin=0;
						} 
					}
				}					
				else
				{
					$canLogin=0;
				}
			}
			return $canLogin;
		}

        public function log_out()
		{
		  if(Auth::check())
			{
				Auth::logout();
				return redirect('/');
			}
			else
			{
				return redirect('/');
			}
		}

		public function register()
		{
			return view('front-end.register');
		}
	
	
		public function register_insert(Request $request)
		{
			$data['customer_id']=$request->input('customer_id');
			$data['firstname']=$request->input('firstname');
			$data['lastname']=$request->input('lastname');
			$data['regemail']=$request->input('regemail');
			$data['mobileno']=$request->input('mobileno');
			$data['regpassword']=$request->input('regpassword');
	
			return $this->admin->registerInsert($data);
				
		}
		 
		public function booknow()
		{
			  $uname='';
				if(Auth::user())
				$uname= Auth::user();
				if(!empty($uname))
				{
					$data['id']=$uname->id;
					$data['userdetail']=DB::table('users')->where('id',$data['id'])->first();
				}
				else
				{
					$data['id']="0";
					$data['userdetail']="null";
				}
	
			  return view('front-end.booknow',compact('data'));
		}

		public function booking_insert(Request $request)
		{
			$data['id']=$request->input('id');
			$data['booking_id']=$request->input('booking_id');
			$data['devoteename']=$request->input('devoteename');
			$data['inputemail']=$request->input('inputemail');
			$data['sevaname']=$request->input('sevaname');
			$data['contactnum']=$request->input('contactnum');
			$data['bookingdate']=$request->input('bookingdate');
			$data['bookamount']=$request->input('bookamount');
			
			return $this->admin->bookingInsert($data);
			
		}

		public function profile()
		{
			$uname='';
			if(Auth::user())
			$uname= Auth::user();
			if(!empty($uname))
			{
			    	$data['id']=$uname->id;
			    	$data['userdetail']=DB::table('users')->where('id',$data['id'])->first();
				$data['profileloop']=DB::table('customer')->where('id',$data['id'])->first();
			}
			else
			{
				$data['id']="0";
				$data['userdetail']="null";
			}
			
			return view('front-end.profile',compact('data'));
			
		}
		public function profile_insert(Request $request)
		{
			$data['customer_id']=$request->input('customer_id');
			$data['firstname']=$request->input('firstname');
			$data['lastname']=$request->input('lastname');
			$data['mobileno']=$request->input('mobileno');
			$data['gender']=$request->input('gender');
			$data['dob']=$request->input('dob');
	
			return $this->admin->profileInsert($data);
				
		}

		public function history()
		{
			$uname='';
			if(Auth::user())
			$uname= Auth::user();
			if(!empty($uname))
			{
		    	$data['id']=$uname->id;
		    	$data['userdetail']=DB::table('users')->where('id',$data['id'])->first();
				$data['profileloop']=DB::table('customer')->where('id',$data['id'])->first();
				$data['bookingloop']=DB::table('bookings')->where('id',$data['id'])->get();

			}
			else
			{
				$data['id']="0";
				$data['userdetail']="null";
			}
			 $data['sevaloop']=DB::table('seva')->where('status','0')->get();
			return view('front-end.history',compact('data'));
		}

}

?>
