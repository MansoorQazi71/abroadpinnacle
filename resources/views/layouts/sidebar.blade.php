<!-- Start of Slider Section using Bootstrap Carousel -->
<section id="imi-slider" class="imi-slider-section position-relative">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="position-relative">
            <!-- Images overlay (you can customize positioning with CSS) -->
            <div class="imi-slider-img-wrapper position-absolute w-100">
              <div class="slider-img1">
                <img decoding="async" src="https://crescentcon.com/wp-content/uploads/2024/10/Untitled-design-5.png" class="img-fluid" alt="Slide Image 1">
              </div>
              <div class="slider-img2">
                <img decoding="async" src="https://crescentcon.com/wp-content/uploads/2024/10/Untitled-design-7.png" class="img-fluid" alt="Slide Image 2">
              </div>
            </div>
            <!-- Text content -->
            <div class="container">
              <div class="imi-slider-text headline pera-content text-center">
                <h1>
                  <span>Welcome to</span> 
                  <span>Crescent Consultants</span>
                </h1>
                <p>We are a team of dedicated officers providing personalized solutions to your immigration needs.</p>
              </div>
            </div>
          </div>
        </div>
  
        <!-- You can add additional slides here if needed -->
        <!--
        <div class="carousel-item">
          <div class="position-relative">
            <div class="imi-slider-img-wrapper position-absolute w-100">
              <div class="slider-img1">
                <img decoding="async" src="path/to/your/image1.jpg" class="img-fluid" alt="Slide Image 1">
              </div>
              <div class="slider-img2">
                <img decoding="async" src="path/to/your/image2.jpg" class="img-fluid" alt="Slide Image 2">
              </div>
            </div>
            <div class="container">
              <div class="imi-slider-text headline pera-content text-center">
                <h1>Your Slide Title</h1>
                <p>Your slide description goes here.</p>
              </div>
            </div>
          </div>
        </div>
        -->
      </div>
  
      <!-- Carousel Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <!-- End of Slider Section -->
<style>
    .imi-slider-img-wrapper {
    top: 0;
    left: 0;
    /* Adjust width, height, and positioning as needed */
}
.slider-img1,
.slider-img2 {
    /* Custom styling for individual images */
}
.imi-slider-text {
    position: relative;
    z-index: 2;
    /* Additional styling as needed */
}

</style>  