<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="back-end/css/bootstrap.min.css">
    <title>Invoice</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 60%;
            margin-right: auto;
            margin-left: auto;
            margin-top:20px;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h3 class="text-white">SHRI SIDDHIVINAYAKA TEMPLE</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">shrisiddhivinayaka@gmail.com</p>
                        <p class="text-white">+91 9884582290</p>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Invoice No: {{$data['bookingloop']->booking_id}}</h2>
                    <p class="sub-heading">Order Date: {{$data['bookingloop']->date}} </p>
                    <p class="sub-heading">Email Address: {{$data['bookingloop']->email}} </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name: {{$data['bookingloop']->devotee_name}} </p>
                    <p class="sub-heading">Phone Number: {{$data['bookingloop']->contact}} </p>
                </div>
            </div>
        </div>
        <div class="body-section">
            <h3 class="heading">Booked Seva</h3>
            <br>
            <table class="table table-responsive" >
                <thead>
                    <tr>
                        <th class="w-20">Seva </th>
                        <th class="w-20 ">Price</th>
                        <th class="w-20 text-right">Grandtotal</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$data['bookingloop']->seva_name}}</td>
                        <td>{{$data['bookingloop']->amount}}.00</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Total</td>
                        <td>{{$data['bookingloop']->amount}}.00</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Tax Total</td>
                        <td>100.00</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Grand Total</td>
                        <td> {{$data['bookingloop']->amount +100}}.00</td>
                    </tr>
                </tbody>
            </table>
            <h3 class="heading">Payment Status: Paid</h3>
           
        </div>

        <div class="body-section">
            <p>&copy; Copyright 2022 - All Rights Reserved Shri Siddhivinayaka Temple. 
            </p>
        </div>      
    </div>      
    

    <script src="back-end/js/jquery.validate.min.js"></script>

</body>
</html>