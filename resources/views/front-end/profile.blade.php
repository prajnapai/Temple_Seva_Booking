@include('front-end/layouts/header')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 ">
                <nav id="sidebar" style="padding-bottom: 40vh;">
                    <div class="sidebar-header">
                    <h3> Welcome {{$data['userdetail']->name}}!!</i></h3>
                    <hr>
                    </div>
                
                    <ul class="list-unstyled components">
                    
                    <li >
                        <a href="profile" ><i class="fa-solid fa-user"></i>  My Profile</a>
                    </li>
                  
                    <li>
                        <a href="history" class="menu"><i class="fa-solid fa-clock-rotate-left"></i>  History</a>
                    </li>
                    <li>
                        <a href="log_out" ><i class="fa-solid fa-power-off"></i>  Logout</a>
                    </li>
                 
                    </ul>
                </nav> 
            </div>
            <div id="loadData">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 ">
               
                    <div class="col-xs-12 profile-style" >
                        <div class="col-xs-12">
                            <h3><i class="fa-solid fa-pen-to-square"></i> Update Profile</h3><br>
                        </div>
                        <form id="profileform">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                            <input type="hidden" name="customer_id" id="customer_id" value="{{$data['profileloop']->id}}">
                            <input type="hidden" name="_token" id="token2" value="{{ csrf_token() }}">
                            
                            
                                <div class="form-group">
                                    <label for="firstname">Fist Name </label>
                                    <input type="text" id="firstname" name="firstname"  value="{{$data['profileloop']->firstname}}" class="form-control">
                                </div>
                            </div>
                        
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="lastname">Last Name </label>
                                    <input type="text" id="lastname" name="lastname"  value="{{$data['profileloop']->lastname}}" class="form-control" >
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="mobileno">Contact number</label>
                                    <input type="text" id="mobileno" name="mobileno"  value="{{$data['profileloop']->contact}}" class="form-control " >
                                </div>
                            </div>

                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="gender"> Gender </label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option>-Select Gender-</option>
                                        <option >Male</option>
                                        <option >Female</option>
                                        <option >Other</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="dob">Date of Birth </label>
                                    <input type="date" id="dob" name="dob" class="form-control">
                                </div>
                            </div>
                           
                    
                        
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                <button class="btn btn-default profilesubmit" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
@include('front-end/layouts/footer')        
