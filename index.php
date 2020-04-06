<?php include('includes/header.php');?>
<section class="">
<div class="container-fluid">
  <div class="row">
      <div class="col-lg-8 col-md-8 col-md-8 col-xs-12 p-0">
          <img src="images/main-header.jpg" class="img-fluid">
      </div>
      <div class="col-lg-4 col-md-4 col-md-4 col-xs-12 bg-grey">
        <div class="box-form">
          <h1 class="getyourself">Don’t hesitate. Get a Quote </h1>
        <form id="register" method="post">  
        <input type="text" class="form-control" id="name"  placeholder="Full Name" name="name" required> 

        <!-- <input type="number" class="form-control ignore" pattern="[0-9]{11}" placeholder="Contact No: 03331234567"
         name="contact" title="Just enter numbers like 03451234567"
         required="" data-toggle="tooltip" title="Just enter numbers like 03451234567" id="contact"/> -->
         <input type="text" class="form-control ignore" pattern="[0-9]{11}" placeholder="Contact No: 03331234567" 
         name="contact" title="Just enter numbers like 03451234567" required="" 
         data-toggle="tooltip" data-placement="right" id="contact" aria-required="true">

        <input type="text" class="form-control" id="email"  placeholder="Email Address" name="email" required>
       
        <input type="text" class="form-control" id="city"  placeholder="City" name="city" required >  

        <input type="text" class="form-control" id="businessname" maxlength="30"   placeholder="Business Name" name="businessname" required>

         <button type="submit" class="btn btn-registr btn-lg" id="register" name="submit" value="Request a Quote" >Request a Quote</button>
       </form>
        </div>  

      </div>

  </div>  
</div>  
</section>

<section>
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 common-heading">
            <h1 class="">ABOUT <span>GDEX</span></h1>
          </div> 
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 about-describe">
            <p>GDEX is a B2B courier service that is available for pickups and deliveries 24 hours a day, 7 days a week. We help small business thrive by making door-to-door deliveries easy, and affordable.</p><p> Our clients are the reason we exist, they are the innovative, entrepreneurial and hard-working heart of Pakistan’s growing economy. Our mission is to give these clients immense efficiency, outstanding customer service and affordable pricing to help maximize their potential.  
            </p>
               <p>Our platform is ideal for e-commerce stores, restaurants, pharmacies, neighborhood grocers or any business that sells products on a recurring basis. </p>
          </div>  
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 about-describe">
         

            <p>At GDEX, we customize our client’s route needs with our technological resources. We organize several orders in one efficient route, spreading the costs over several clients at once, giving you savings. </p>
            <p>Our team monitors your shipment every step of the way, ensuring that each one arrives on time, at a competitive price. </p>
            <p>We are happy to say that GDEX is becoming the primary option for businesses that want efficient service. If you are one of them, we are at your service.</p>
          </div>
      </div> 
    </div>  
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 common-heading">
                   <h1 class="">The<span>  GDEX</span> Advantage</h1>
            </div>  
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="admission-proc">
                <img src="images/check-icon.png" class="img-fluid">
                <p>On-time Deliveries</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="admission-proc">
                <img src="images/check-icon.png" class="img-fluid">
                <p>Proven Service</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="admission-proc">
                <img src="images/check-icon.png" class="img-fluid">
                <p>Competitive Pricing</p>
              </div>
            </div>
        </div>  
    </div>  
</section>

  <!--  Demos -->

<?php include('includes/footer.php')?>


