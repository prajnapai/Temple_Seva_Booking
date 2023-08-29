<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 ">
    <div class="col-xs-12 profile-style" >
        <div class="col-xs-12">
             <h3> History</h3>
                <table class="table table-responsive">
                    <thead>
                            <tr>
                                <th>Booking Id</th>
                                <th>Date</th>
                                <th>Devotee Name</th>
                                <th>Seva Name</th>
                                <th>Amount</th>
                                <th>Invoice</th>
                            </tr>
                    </thead>
                    <tbody>
                            @foreach($data['bookingloop'] as $b)
                            <tr>
                                <td>{{$b->booking_id}}</td>
                                <td>{{$b->date}}</td>
                                <td>{{$b->devotee_name}}</td>
                                <td>{{$b->seva_name}}</td>
                                <td>{{$b->amount}}.00</td>
                                
                                <td><a href="invoice?booking_id={{$b->booking_id}}">Download</a></td>
                              
                            </tr>
                            @endforeach
                    </tbody>
                       
                </table>
        </div>
        
                   
           
    </div>
       
</div>
     
