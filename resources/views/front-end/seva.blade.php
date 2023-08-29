@include('front-end/layouts/header')
        <div>
          <img src="front-end/img/bg2.png" alt="ganesha_logo" width="100%">
        </div>
  <div class="col-xs-12">
      <div class="col-xs-12 padding">
          <h2 class="titlefont textalign">SEVA LIST</h2>  
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          @foreach($data['categoryloop'] as $c)
            <div id="{{$c->cat_name}}">
              <h1 class="sevaheading">{{$c->cat_name}}</h2>
           
          @foreach($data['sevaloop']->where('seva_category',$c->category_id) as $p)  
            <?php if($p->seva_category == $c->category_id): ?>             
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div style="text-align: center;">
                  <div class="thumbnail_seva">
                    <img src="{{$p->seva_img}}" class="img-responsive" style="padding:5% 11%">
                    <div style="margin-top:-8%">
                      <h3>{{$p->seva_name}}</h3>
                      <p>{{$p->description}}</p>
                      <a href="details"  type="button" class="btn btn-primary" style="margin-bottom:10px ;">Seva Details</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif ;?>
          @endforeach     
          </div>
          @endforeach
        </div>   
            
          
         
      </div>
  </div>
@include('front-end/layouts/footer')