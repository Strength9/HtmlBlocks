<section class="gallery">
	<div>
		<h1 style="color:#FFF;">Gallery</h1>
	</div>
	<div class="gallery_container">
		<div style="background-image:url('/assets/images/img1.jpg');" onclick="openModal();currentSlide(1)">One</div>
	    <div style="background-image:url('/assets/images/img2.jpg');" onclick="openModal();currentSlide(2)">Two</div>
	    <div style="background-image:url('/assets/images/img3.jpg');" onclick="openModal();currentSlide(3)">Three</div>
	    <div style="background-image:url('/assets/images/img4.jpg');" onclick="openModal();currentSlide(4)">Four</div>
		<div style="background-image:url('/assets/images/img1.jpg');" onclick="openModal();currentSlide(1)">One</div>
		<div style="background-image:url('/assets/images/img2.jpg');" onclick="openModal();currentSlide(2)">Two</div>
		<div style="background-image:url('/assets/images/img3.jpg');" onclick="openModal();currentSlide(3)">Three</div>
		<div style="background-image:url('/assets/images/img4.jpg');" onclick="openModal();currentSlide(4)">Four</div>
		<div style="background-image:url('/assets/images/img1.jpg');" onclick="openModal();currentSlide(1)">One</div>
		<div style="background-image:url('/assets/images/img2.jpg');" onclick="openModal();currentSlide(2)">Two</div>
		<div style="background-image:url('/assets/images/img3.jpg');" onclick="openModal();currentSlide(3)">Three</div>
		<div style="background-image:url('/assets/images/img4.jpg');" onclick="openModal();currentSlide(4)">Four</div>
	</div>
</section>



<!-- The Modal/Lightbox -->
<div id="modal-holder" class="modal">
  		<span class="close cursor" onclick="closeModal()">&times;</span>
 		<div class="modal-content">
   		<div class="prevbutton"><a class="prev" onclick="plusSlides(-1)">&#10094;</a></div>
   		<div class="nextbutton"><a class="next" onclick="plusSlides(1)">&#10095;</a></div>
   		<div class="mainslide">
	   		
			
	   		<div class="mySlides">
		 		<img src="/assets/images/img1.jpg" class="sliderpresent">
	   		</div>
			   <div class="mySlides">
					<img src="/assets/images/img2.jpg" class="sliderpresent">
				  </div>
				  <div class="mySlides">
					   <img src="/assets/images/img3.jpg" class="sliderpresent">
					 </div>
					 <div class="mySlides">
						  <img src="/assets/images/img4.jpg" class="sliderpresent">
						</div>
   		</div>
   		
 		</div>
</div>


<script>
// Open the Modal
		function openModal() {document.getElementById("modal-holder").style.display = "flex";}
		function closeModal() {document.getElementById("modal-holder").style.display = "none";}
		var slideIndex = 1;
		showSlides(slideIndex);
		function plusSlides(n) { showSlides(slideIndex += n); }
		function currentSlide(n) { showSlides(slideIndex = n); }
		function showSlides(n) {
  			var i;
  			var slides = document.getElementsByClassName("mySlides");
 			
  			if (n > slides.length) {slideIndex = 1}
  			if (n < 1) {slideIndex = slides.length}
  			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
  			}
  			slides[slideIndex-1].style.display = "inline-block";
		}
</script>