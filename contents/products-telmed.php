<section id='content'>
  <div class="constent-wrap">
    <div class="container clearfix ">
      <div class=" row main-row-container">
        
        
        <div class="col-lg-6 col-md-8 col-sm-12">
          <div class="title-heading">
            <p>Digital platform for Remote services</p>
            <h1>Luniva Telemed</h1>
            <h4>Superior solution to eliminate the distance barrier between the health care providers and consumers</h4>

            <?php 
            $equ = '';
            if(isset($_GET['page'])){
                $equ = $_GET['page'];
            }
            if($equ != 'demo'): ?>
       
                <a class="button button-3d button-luniva mt-4" href="demo">
                    <div>Request for demo</i></div>
                </a>
            <?php endif; ?>
            
          </div>
        </div>
        <div class="col-lg-6 col-md-4 col-sm-12 costomeOne center costome-img">
          <img src="images/luniva/telemed.jpg" alt="luniva telemed">
          </div>
      </div>


      <div class="row main-row-container">
      <div class="col-md-6">
          <img src="images/luniva/1slide.png" alt="Online consultation">
        </div>
        <div class="col-md-6">
            <div class="title-heading">
            <h2>Product Info</h2>
              <p>
              Our application eliminates the distance barrier between health care providers and consumers. And improves the accessibility to medical services in distant rural communities, saving lives in critical care and emergencies.
              </p>            
              <h4>Features of Luniva Telemed are as follows:</h4>
              <ul class="iconlist mb-0">
                <li><i class="icon-ok"></i> Connect with Experienced Physicians</li>
                <li><i class="icon-ok"></i> Appointment Booking and Scheduling System</li>
                <li><i class="icon-ok"></i> Audio & video consultation</li>
              </ul>
            </div>

            <div class="col-sm-6">
              <ul class="iconlist mb-0">
                <li><i class="icon-ok"></i> Patient Portal </li>
                <li><i class="icon-ok"></i> Medication Reminder</li>
                <li><i class="icon-ok"></i> Electronic Prescription and Medical Records</li>
            </ul>
            </div>

            <?php 
            $equ = '';
            if(isset($_GET['page'])){
                $equ = $_GET['page'];
            }
            if($equ != 'demo'): ?>
       
                <a class="button button-3d button-luniva mt-4" href="demo">
                    <div>Request for demo</i></div>
                </a>
            <?php endif; ?>
        </div>
        
         
      </div>
    </div>
  </div>

</section>