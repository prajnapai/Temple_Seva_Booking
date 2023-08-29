 @include('front-end/layouts/header')  
       <div class="col-xs-12" style="background-color:cornsilk">
	   <h2 class="titlefont textalign">BOOK NOW!! </h2>

        <div class="col-lg-4 col-md-4 col-lg-offset-4" style="background-color:#A2B5BB;margin-top:5% ;margin-bottom: 5%;">
            <form style="margin-top:5%;" id="bookingform">
                <input type="hidden" name="booking_id" id="booking_id">
                <input type="hidden" name="id" id="id"  value="{{$data['id']}}">
                <input type="hidden" name="_token" id="token2" value="{{ csrf_token() }}">

            <div class="form-group">
                  <label for="devoteename">Devotee Name </label>
                  <input type="text" class="form-control" id="devoteename" name="devoteename">
                </div>

                <div class="form-group">
                  <label for="inputemail">Email</label>
                  <input type="email" class="form-control " id="inputemail" name="inputemail">
                </div>

                <div class="form-group">
                    <label for="sevaname">Seva Name </label>
                    <input type="text" class="form-control" id="sevaname" name="sevaname">
                </div>

                <div class="form-group">
                    <label for="contactnum">Contact Number</label>
                    <input type="text" class="form-control" id="contactnum" name="contactnum">
                </div>
                <div class="form-group">
                    <label for="bookingdate">Date</label>
                    <input type="date" class="form-control" id="bookingdate" name="bookingdate">
                </div>
                <div class="form-group">
                    <label for="bookamount">Amount </label>
                    <input type="number" class="form-control" id="bookamount" name="bookamount">
                </div>

                <div class="padding">
                    <button type="submit" class="btn btn-primary bookingsubmit">Submit</button>
                </div>
              </form>
        </div>
        </div>
@include('front-end/layouts/footer')  