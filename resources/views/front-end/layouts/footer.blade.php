<footer>
        <div class="col-xs-12 footer-style" >
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 padding">
            <h2 class="footer-heading">About Us</h2>
            <p >The Shree Siddhivinayak Ganapati Mandir is a Hindu temple dedicated to Lord Shri Ganesh. It is located in Prabhadevi, Mumbai, Maharashtra, India.It is one of the richest temples in India.</p>
            <a href="about" type="button" class="btn btn-default btn-sm" style="background-color:#AC7088;border: none;color: white;">ABOUT US</a>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 padding">
            <h2 class="footer-heading linkfooter" >Links</h2>
            <ul class="list">
              <li style="margin: 4% auto;" ><a href="/" class="list">Home</a></li>
              <li style="margin: 4% auto;"><a href="about" class="list">About Us</a></li>
              <li style="margin: 4% auto;" ><a href="seva" class="list">Seva List</a></li>
              <li style="margin-top: 4% ;"><a href="contact" class="list">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 padding">
            <h2 class="footer-heading">Stay Connected</h2>
            <div class="media">
                  <div class="media-left">
                      <i class="fa-solid fa-house "></i>
                  </div>
                  <div class="media-body">
                      <p>Siddhivinayak Temple, Dadar 15 Calcutta wala chuwll agar bazaar, road, SK Bole Marg, Prabhadevi Mumbai, Maharashtra 400028</p>
                  </div>
              </div>

              <div class="media">
                  <div class="media-left">
                      <i class="fa-solid fa-envelope "></i>
                  </div>
                  <div class="media-body">
                  <a href="mailto:shrisiddhivinayaka@gmail.com" class="footer-style">shrisiddhivinayaka@gmail.com</a>
                  </div>
              </div>

              <div class="media">
                  <div class="media-left">
                      <i class="fa-solid fa-phone "></i>
                  </div>
                  <div class="media-body">
                      <a href="contact" class="footer-style" >+91 9884582290</a>
                  </div>
              </div> 
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 padding">
            <h2 class="footer-heading">Follow Us</h2>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-2x follow-padding"></i></a>
            <a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook fa-2x follow-padding"></i></a>
            <a href="https://twitter.com/"><i class="fa-brands fa-twitter fa-2x follow-padding"></i></a>
            <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube fa-2x follow-padding"></i></a>
           </div>
        </div>
        <div class="col-xs-12 bgnav textalign">
          <span style="color: black;font-weight: 600;font-size: 14px;">© Copyright 2022 | All Rights Reserved Shri Siddhivinayaka Temple.</span>
        </div>
      </footer>
     
       
        
   



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="front-end/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v6.1.2/js/all.js"></script>

    <script src="front-end/js/jquery.validate.min.js"></script>



<script>
	$('.menu').click(function(e)
	{
		e.preventDefault();
		$('#loadData').load($(this).attr('href'));
	});
</script>

<script>
	
	Flag=0;
	$('.profilesubmit').click(function(e)
			{
				
				e.preventDefault();
				$("#profileform").validate({
					rules:{

						firstname:
						{
							required:true
							
						},
                        lastname:
						{
							required:true
							
						},
                        gender:
						{
							required:true
							
						},
                        mobileno:
						{
							required:true
							
						},
                        dob:
						{
							required:true
							
						}
					},
					messages:
					{
						firstname:
						{
							required:"Please Enter First name"
							
						},
                        lastname:
                        {
							required:"Please Enter Last name"
							
						},
                        gender:
                        {
							required:"Please Enter Gender "
							
						},
                        mobileno:
                        {
							required:"Please Enter Contact number"
							
						},
                        dob:
                        {
							required:"Please Enter DOB"
							
						}
					}  
					
				});
				if($("#profileform").valid())
				{ 
					if(Flag==0)
					{
						Flag++;
						$.ajax({
							url:"profile_insert",
							type:"POST",
							data:$('#profileform').serialize(), 
							success:function(data)
							{
							    alert('Successfully Updated!!!');
                                window.location.assign('profile');
								
							}
						});
					}
				}
			});
          
</script>

 <script>
	
	Flag=0;
	$('.bookingsubmit').click(function(e)
			{
				
				e.preventDefault();
				$("#bookingform").validate({
					rules:{

						devoteename:
						{
							required:true
							
						},
                        inputemail:
						{
							required:true
							
						},
                        sevaname:
						{
							required:true
							
						},
                        contactnum:
						{
							required:true
							
						},
                        bookingdate:
						{
							required:true
							
						},
                        bookamount:
						{
							required:true
							
						}
					},
					messages:
					{
						devoteename:
						{
							required:"Please Enter Devotee name"
							
						},
                        inputemail:
						{
							required:"Please Enter Email"
							
						},
                        sevaname:
						{
							required:"Please Enter Seva name"
							
						},
                        contactnum:
						{
							required:"Please Enter Contact number"
							
						},
                        bookingdate:
						{
							required:"Please Enter the date"
							
						},
                        bookamount:
						{
							required:"Please Enter the Amount"
							
						}
						
					}  
					
				});
				if($("#bookingform").valid())
				{ 
					if(Flag==0)
					{
						Flag++;
						$.ajax({
							url:"booking_insert",
							type:"POST",
							data:$('#bookingform').serialize(), 
							success:function(data)
							{
							    alert('Successfully Booked Seva!!!');
                                window.location.assign('booknow');
							}
						});
					}
				}
			});
            </script>
</body>
</html>

