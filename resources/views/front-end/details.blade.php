@include('front-end/layouts/header')
        <div class="col-xs-12" >
            <h2 class="titlefont textalign">SEVA DETAILS</h2>
            <hr style="border-top:3px solid #59003c ;width:10%;">
            @foreach($data['sevaloop'] as $p)
            <div class="col-xs-12 detailback" >
                <div class="col-lg-5 col-lg-offset-2 col-md-5 col-sm-12 col-xs-12" >
                    <img src="{{$p->seva_img}}" alt="img" width="60%" class="img-responsive " style="border:3px outset #F05454;padding:1%;margin:3% auto">
                </div>
                <div class="col-lg-5  col-md-5 col-sm-12 col-xs-12" style="margin-left:-5%">
                        <h2 class="detail-head">{{$p->seva_name}}</h2>                     
                        <p class="detail-style">Timings:{{$p->time}}</p>
                        <p class="detail-style">Duration:{{$p->duration}}</p>
                        <p class="detail-style">Amount:&#x20B9;{{$p->amount}}.00</p>
                        <a href="booknow"  type="button" class="btn btn-primary" style="margin-bottom:10px ;">Book Now!! </a>
                </div>
            </div>
            @endforeach

        </div>
@include('front-end/layouts/footer')
