    
      <footer>
        <div class="footer-content">
          <div>
            <a href=""><img class="footer-logo" src="bootstrap/images/footer-logo.png" alt=""></a>
            <p>Roaming Wheels: Tempo Traveler and Tourist Bus Rental Hub</p>
          </div>
          <div>
            <h4>Company</h4>
            <ul>
              <li>About</li>
              <li>Services</li>
              <li>Mobile</li>
            </ul>
          </div>
          <div>
            <h4>Contact</h4>
            <ul>
              <li>Email</li>
              <li>Address</li>
            </ul>
          </div>
          <div>
            <h4>More</h4>
            <ul>
              <li>Customer Support</li>
              <li>Gallery</li>
              <li>Low fare tips</li>
            </ul>
          </div>
        </div>
        <div class="bottom">© 2024 Developed by Snowfinch Consulting Group</div>
      </footer>
      <script>
        let index = 0;
        const testimonials = document.querySelectorAll(".testimonial");
        const dots = document.querySelectorAll(".dot");
    
        function showTestimonial(i) {
          testimonials.forEach((t, j) => {
            t.classList.remove("active");
            dots[j].classList.remove("active");
          });
          testimonials[i].classList.add("active");
          dots[i].classList.add("active");
        }
    
        function autoSlide() {
          index = (index + 1) % testimonials.length;
          showTestimonial(index);
        }
    
        setInterval(autoSlide, 4000);
    
       dots.forEach((dot, i) => {
          dot.addEventListener("click", () => {
            index = i;
            showTestimonial(index);
          });
        });

       
    document.querySelectorAll('.faq-question').forEach(question => {
      question.addEventListener('click', () => {
        const faq = question.parentElement;
        faq.classList.toggle('active');
      });
    });
    let currentSlide = 0;
        const slides = document.querySelectorAll(".slide");
        const buttons = document.querySelectorAll(".pagination button");

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.display = "none";
                if (buttons[i]) buttons[i].classList.remove("active");
            });
            slides[index].style.display = "block";
            if (buttons[index]) buttons[index].classList.add("active");
            currentSlide = index;
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        showSlide(0);

        function showImages(type) {
            let buttons = document.querySelectorAll(".custom-tab button");
            buttons.forEach(btn => btn.classList.remove("active"));
            event.target.classList.add("active");

            let images = document.querySelectorAll(".image-gallery img");
            images.forEach(img => {
                if (type === "all" || img.dataset.type === type) {
                    img.classList.remove("hidden");
                } else {
                    img.classList.add("hidden");
                }
            });
        }
        function showgallerySet(id) {
      let galleries = document.querySelectorAll('.gallery-set');
      let tabs = document.querySelectorAll('.tab-btn-img');

      galleries.forEach(g => g.classList.remove('active'));
      tabs.forEach(t => t.classList.remove('active'));

      document.getElementById(id).classList.add('active');
      event.target.classList.add('active');
    }

    function showSubgallerySet(id) {
      let galleries = document.querySelectorAll('.sub-gallery-set');
      let tabs = document.querySelectorAll('.gal-img');

      galleries.forEach(g => g.classList.remove('active'));
      tabs.forEach(t => t.classList.remove('active'));

      document.getElementById(id).classList.add('active');
      event.target.classList.add('active');
    }
      </script>
</body>

</html>