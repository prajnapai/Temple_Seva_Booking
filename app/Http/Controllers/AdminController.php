<?php
namespace App\Http\Controllers;

	
	use App\Models\AdminModel;
	use Illuminate\Http\Request;
	use Auth;
	use DB;
	use App\Models\User;
	use file;
	use Input;
    
    
class AdminController extends Controller
{
	public function __construct()
    {
       $this->admin= new AdminModel;
    }
  
    public function admin()
    {
         return view('back-end.admin');
    }
  
	public function admin_login(Request $request)
		{
			$canLogin = 0;
			$email = $request->input('email');
			$auth = user::where('email',$email)->where('usertype','admin')->first();
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

	public function logout()
		{
		  if(Auth::check())
			{
				Auth::logout();
				return redirect('admin');
			}
			else
			{
				return redirect('admin');
			}
		}
	public function dashboard()
		{
			$data['catcount']=DB::table('category')->where('status','0')->count();
			$data['sevacount']=DB::table('seva')->where('status','0')->count();
			$data['bookcount']=DB::table('bookings')->where('status','0')->count();
			return view('back-end.dashboard',compact('data'));
		}
	public function bookings()
		{
			$data['bookingloop']=DB::table('bookings')->where('status','0')->get();
			return view('back-end.bookings',compact('data'));
		}


		public function category()
		{
			$data['categoryloop']=DB::table('category')->where('status','0')->get();
			return view('back-end.category',compact('data'));	
		}

	public function category_insert(Request $request)
		{
			$data['category_id']=$request->input('category_id');
			$data['categoryname']=$request->input('categoryname');
		

			return $this->admin->categoryInsert($data);
			
		}
	public function deleteCategory(Request $request)
		{
			$data=$request->input('Did');
			return DB::table('category')->where('category_id',$data)->update(['status'=>'1']);
		}

	public function editCategory(Request $request)
		{
			$data['Eid']=$request->input('Eid');
			$editData=DB::table('category')->where('category_id',$data['Eid'])->first();
			return json_encode($editData);
		}
	
	public function seva()
		{
			$data['categoryloop']=DB::table('category')->where('status','0')->get();
			$data['sevaloop']=DB::table('seva')->where('status','0')->get();
			return view('back-end.seva_back',compact('data'));
		}

		public function seva_insert(Request $request)
		{
			$data['seva_id']=$request->input('seva_id');
			$data['sevaname']=$request->input('sevaname');
			$data['sevacategory']=$request->input('sevacategory');
			
			$path = 'Upload/seva/';
			$destinationPath=$path;
			$fn=$request->file('sevaimg');
			if($fn)
			{
				$fname=$request->file('sevaimg')->getClientOriginalName();
				$data['image']=$request->file('sevaimg')->move($destinationPath,$fname);
			}
			else
			{
				$data['image']=$request->input('update_image');
			}
		
			$data['sevatime']=$request->input('sevatime');
			$data['sevaduration']=$request->input('sevaduration');
			$data['sevaamount']=$request->input('sevaamount');
			$data['sevadescrip']=$request->input('sevadescrip');

			return $this->admin->sevaInsert($data);
			
		}

	public function deleteSeva(Request $request)
		{
			$data=$request->input('Did');
			return DB::table('seva')->where('seva_id',$data)->update(['status'=>'1']);
		}

	public function editSeva(Request $request)
		{
			$data['Eid']=$request->input('Eid');
			$editData=DB::table('seva')->where('seva_id',$data['Eid'])->first();
			return json_encode($editData);
		}
	
	


	public function password()
		{
			return view('back-end.password');
		}

    		public function password_insert(Request $request)
		{
			$user=DB::table('users')->where('usertype','admin')->first();
			$password=$user->password;
			$old = $request->input('oldpass');
			$new = $request->input('newpass');
				if($password==$old)
				{
					DB::table('users')->where('id',$user->id)->update(['password'=>$new]);
					return 1;
				}					
				else
				{
					return 0;
				}
		}

		

			public function invoice(Request $request)
			{
				$uname='';
				if(Auth::user())
				$uname= Auth::user();
				if(!empty($uname))
				{
					$data['id']=$uname->id;
					$data['userdetail']=DB::table('users')->where('id',$data['id'])->first();
					$data['profileloop']=DB::table('customer')->where('id',$data['id'])->first();
					//$data['bookingloop']=DB::table('bookings')->where('id',$data['id'])->first();
		
				}
				else
				{
					$data['id']="0";
					$data['userdetail']="null";
				}
				$data['booking_id']=$request->input('booking_id');
				$data['bookingloop']=DB::table('bookings')->where('booking_id',$data['booking_id'])->first();
				//$data['sevaloop']=DB::table('seva')->where('status','0')->get();
		
				return view('back-end.invoice',compact('data'));
				
			}

		
			
}

?>
