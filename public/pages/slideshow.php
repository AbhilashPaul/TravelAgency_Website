<?PHP
echo'
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
            
        <!-- Wrapper for slides -->
        <div class="carousel-inner imgcontainer">
        <div class="item active">
            <img src="../images/safari.jpg" class="travelimage" alt="African Wildlife Safari">
            <div class="carousel-caption">
              <p>African Wildlife Safari</p>
            </div>
        </div>
      
        <div class="item">
            <img src="../images/bali.jpg" class="travelimage" alt="Bali, land of the gods!">
            <div class="carousel-caption">
              <p>Bali, land of the gods!</p>
            </div>
        </div>
      
        <div class="item">
            <img src="../images/santorini.jpg" class="travelimage" alt="The Incredible Island of Santorini, Greece.">
            <div class="carousel-caption">
              <p>The Incredible Island of Santorini, Greece!</p>
            </div>
        </div>

        <div class="item">
            <img src="../images/borabora.jpg" class="travelimage" alt="Bora Bora: Paradise on earth!">
            <div class="carousel-caption">
                <p>Bora Bora, Paradise on earth!</p>
            </div>
        </div>
            <div class="item">
                <img src="../images/surfing.jpg" class="travelimage" alt="Surfing Vacations!">
                <div class="carousel-caption">
                    <p>Surfing Vacations!</p>
                </div>
            </div>
        
        </div>
      
        <!-- Left and right controls--> 
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      ';
?>
