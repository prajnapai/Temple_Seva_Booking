<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="back-end/css/bootstrap.min.css">
    <link rel="stylesheet" href="back-end/Color/style_backend.css">

    <title>Bookings</title>
</head>
<body>
                

                <div class="col-xs-12 book-style" style="overflow-x:scroll">
                    <h3>Booking Details </h3>
                    <table class="table table-responsive text-nowrap">
                        <thead>
                            <tr>
                                <th>Devotee Name </th>
                                <th>Email </th>
                                <th>Seva Name</th>
								<th>Date</th>
                                <th> Contact Number</th>
                                <th>Amount</th>
                                <th>Invoice</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data['bookingloop'] as $b)
                                <tr>
                                    <td>{{$b->devotee_name}}</td>
                                    <td>{{$b->email}}</td>
                                    <td>{{$b->seva_name}}</td>
									<td>{{$b->date}}</td>
                                    <td>{{$b->contact}}</td>
                                    <td>{{$b->amount}}.00</td>
                                    <td><a href="invoice?booking_id={{$b->booking_id}}">Download</a></td>
                                    
                                </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
               
            </div>  
                
        </div>
    </div>
    

    <script src="back-end/js/jquery.validate.min.js"></script>
   
           


</body>
</html>