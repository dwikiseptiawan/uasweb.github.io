<!DOCTYPE html>
<html lang="en">
<head>

  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
<link
rel="stylesheet"
href="./assets/css/simple-line-icons.css"
type="text/css"
media="all"
/>
<link
rel="stylesheet"
href="./assets/css/jquery.fancybox.css"
type="text/css"
media="all"
/>

   <title>Web Semantic</title>
  
</head>
 <body>
<!-- Header -->


<main class="group" id="home">
      <section id="about">
        <div class="container">
            <div class="col-md-9 triangle-left-md triangle-top-sm">
              <div class="rounded bg-white shadow-dark padding-30">
                <div class="row">
                  <div class="col-md-6">
                    <p>
                     Hai Saya Dwiki Septiawan, saya berasal dari keluarga BrokenHome, saat ini saya sedang menunjang pendidikan perkuliahan. Saya Kuliah di Universitas Teknokrat Indonesia, Mengambil Jurusan Fakultas Teknik Informatika
                    </p>
                    <div class="mt-3">
                      <a
                        href=""
                        class="btn btn-default"
                        >Download CV</a
                      >
                    </div>        
          <div class="spacer" data-height="100"></div>
        </div>
      </section>

         <section id="resume">
          <div class="container"> 
            <div class="spacer" data-height="60"></div>
            <div class="row wow fadeInUp">
              <div class="col-md-8 col-sm-12 offset-md-2">
                <div
                  class="timeline edu bg-white rounded shadow-dark padding-30 overflow-hidden"
                >
                  <h2 class="ml-4">Education</h2>
                  <div class="timeline-container wow fadeInUp">
                    <div class="content">
                      <span class="time">2020 - Present</span>
                      <h3 class="title">University</h3>
                      <p>Teknik Informatika - Universitas Teknokrat Indonesia</p>
                    </div>
                  </div>
                  <div
                    class="timeline-container wow fadeInUp"
                    data-wow-delay="0.2s"
                  >
                    <div class="content">
                      <span class="time">2016 2019</span>
                      <h3 class="title">Senior High School</h3>
                      <p>Science - SMK N 2 TERBANGGI BESAR.</p>
                    </div>
                  </div>
                  <!-- main line -->
                  <span class="line"></span>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="portfolio">
          <div class="container">
            <!-- section title -->
  
            <div class="spacer" data-height="60"></div>
      
      <!-- section skill -->
      <section>
        <div class="container">
          <h2 class="section-title wow fadeInUp">My Skills</h2>

          <div class="row wow fadeInUp">
            <div class="col-md-3 col-6">
              <!-- client item -->
              <div class="client-item">
                <div class="inner">
                  <a href="./mulai-langkahmu-sebagai-back-end-engineer-certificate.pdf">
                  <img
                    src="./assets/img/html5.svg"
                    alt="client-name"
                    width="45"
                    height="45"
                  />
                </a>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <!-- client item -->
              <div class="client-item">
                <div class="inner">
                  <a href="./Programming Logic 101.pdf">
                  <img
                    src="./assets/img/css3.svg"
                    alt="client-name"
                    width="65"
                    height="65"
                  />
                </a>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <!-- client item -->
              <div class="client-item">
                <div class="inner">
                  <a href="./sertifikat_course_123_2384975_310822185641.pdf">
                  <img
                    src="./assets/img/javascript.svg"
                    alt="client-name"
                    width="60"
                    height="60"
                  />
                </a>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <!-- client item -->
              <div class="client-item">
                <div class="inner">
                  <a href="./sertifikat_course_163_2384975_021022183151.pdf">
                  <img
                    src="./assets/img/php.svg"
                    alt="client-name"
                    width="57"
                    height="57"
                  />
                  </a>
                </div>
              </div>
            </div>
          
       
        
          </div>
        </div>
      </section>
</main>
<!-- End Article -->

<!-- Aside -->
<aside id="aside">
  <img src="assets/img/gw.JPG"/>
  <div class="info">
      <p>I am Dwiki Septiawan. 
      </p>
      <ul>
      <?php include_once 'readQuery.php'; ?>
      <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate" name="name" value="<?php echo $name;?>">
                        <label for="icon_prefix">Name</label>
                    </div>

                    <div class="input-field">
                        <i class="material-icons prefix">location_on</i>
                        <input id="icon_prefix" type="text" class="validate" name="address" value="<?php echo $address;?>">
                        <label for="icon_prefix">Address</label>
                    </div>

                    <div class="input-field">
                        <i class="material-icons prefix">phone</i>
                        <input id="icon_prefix" type="text" class="validate" name="phone" value="<?php echo $phone;?>">
                        <label for="icon_prefix">Phone</label>
                    </div>

       
                    
      </ul>
    <div class="item">
      </a>
      <a href="https://www.instagram.com/hitamvan" id="instagram">
      <img  src="assets/img/instagram.png" alt="" />
      </a>
    </div>
 </div>
</aside>
<!-- End Aside -->

<!-- Footer -->
<footer>
  <div class="suplay">
     <button class="btn_dark" onclick="darkMode()">🌙</button>
     <p class="copy">&copy; <span id="year">2023</span> -DwikiSeptiawan- </p>
  </div>
</footer>
<!-- Footer -->
  
 <script src="assets/java.js"></script>

  </body>
</html>


      
        
