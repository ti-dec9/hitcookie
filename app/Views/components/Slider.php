<!--
<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="h-[650px] hero">
      <video autoplay loop muted>
        <source src="https://ik.imagekit.io/3yrvfhfn9/PSR_Site/Industrial_background_video_66H6ZYP4G.mp4?ik-sdk-version=javascript-1.4.3&updatedAt=1666635114299" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
        <div class="opacity-50 hero-overlay bg-primary-content -z-0"></div>
          <div class="z-20 flex justify-start w-full p-8 py-44 lg:px-20">
              <div class="flex flex-col max-w-xl gap-4">
                <h2 data-wow-delay=".6s" class="text-xl font-bold wow text-azulpsr animate__animated animate__fadeInRight">Desde 2001</h2>
                  <h1 data-wow-delay=".6s" class="text-3xl font-bold text-white wow lg:text-6xl animate__animated animate__fadeInRight">Sua melhor escolha é confiar em nós!</h1>
                  <div data-wow-delay=".6s" class="flex flex-col gap-4 text-white wow animate__animated animate__fadeInUp">
                      <p class="font-light leading-6 lg:text-justify ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem.</p>
                      </p>
                  </div>
                  <div data-wow-delay=".6s" class="wow animate__animated animate__fadeInUp">
                    <button class="p-3 text-lg font-bold text-white transition duration-500 border-0 rounded-md bg-azulpsr lg:w-7/12 hover:scale-105 hover:bg-azulpsr">Saiba Mais</button>
                  </div>
              </div>
          </div>
          <div class="absolute right-0 z-30 hidden lg:block">
            <ul class="flex flex-col gap-4 pr-4 text-white">
              <li><a href="" class="link link-hover"><i class="text-2xl duration-300 transform fa-brands fa-instagram hover:scale-125"></i></a> </li>
              <li><a href="" class="link link-hover"><i class="text-2xl duration-300 transform fa-brands fa-linkedin hover:scale-125"></i></a> </li>
              <li><a href="" class="link link-hover"><i class="text-2xl duration-300 transform fa-brands fa-facebook-f hover:scale-125"></i></a> </li>
            </ul>
          </div>
      </div>
    </div>
      -->
      <div class="swiper mySwiper">
      <div class="swiper-wrapper">

      <!--Desktop 1-->
      <div class="swiper-slide lg:block">
      <div class="w-full h-[500px] hero">
        <img src="https://ik.imagekit.io/jdmxypilt/HitCookie/fdhsdxghsed_pzJpXSg7u?ik-sdk-version=javascript-1.4.3&updatedAt=1671545285676" alt="">
       <!-- <div class="opacity-10 hero-overlay bg-primary-content -z-0"></div> -->
      </div>
    </div>
    <!--Mobile 1
    <div class="block swiper-slide lg:hidden">
      <div class="w-full hero">
        <img class="w-[500px] h-[500px]" src="https://ik.imagekit.io/3yrvfhfn9/PSR_Site/PSR_-_Banner_Site_Mobile-9_uV0S-9tmF.png?ik-sdk-version=javascript-1.4.3&updatedAt=1669409451375" alt="">
        
      </div>
    </div> 
    -->

      <!--Desktop 2-->
      <div class="swiper-slide lg:block">
      <div class="w-full h-[500px] hero">
        <img src="https://ik.imagekit.io/jdmxypilt/HitCookie/sadfsaf_93wyzyeq7?ik-sdk-version=javascript-1.4.3&updatedAt=1671545299528" alt="">
       <!-- <div class="opacity-10 hero-overlay bg-primary-content -z-0"></div> -->
      </div>
    </div>
    <!--Mobile 2
    <div class="block swiper-slide lg:hidden">
      <div class="w-full hero">
        <img class="w-[500px] h-[500px]" src="https://ik.imagekit.io/3yrvfhfn9/PSR_Site/PSR_-_Banner_Site_Mobile-6_8uruiindF.png?ik-sdk-version=javascript-1.4.3&updatedAt=1669409451296" alt="">
        
      </div>
    </div>  -->

    <!--Desktop 3-->
    <div class="swiper-slide lg:block">
      <div class="w-full h-[500px] hero">
        <img src="https://ik.imagekit.io/jdmxypilt/HitCookie/cvbxcvb_0sRTPOrPx?ik-sdk-version=javascript-1.4.3&updatedAt=1671545325474" alt="">
       <!-- <div class="opacity-10 hero-overlay bg-primary-content -z-0"></div> -->
      </div>
    </div>
    <!--Mobile 3
    <div class="block swiper-slide lg:hidden">
      <div class="w-full hero">
        <img class="w-[500px] h-[500px]" src="https://ik.imagekit.io/3yrvfhfn9/PSR_Site/PSR_-_Banner_Site_Mobile-7_X8JdUJCJ8.png?ik-sdk-version=javascript-1.4.3&updatedAt=1669409451217" alt="">
    
      </div>
    </div>
    
-->

    </div>
    
 
 <div class="swiper-pagination"></div>

</div>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    centeredSlides: true,
    loop:false,
    autoplay: {
      delay: 5000,
      disableOnInteraction: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>

<style>
  .swiper {
        width: 100%;
        height: 100%;
      }
      
    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100% !important;
        object-fit: cover;
      }

      .swiper-pagination-bullet {
        background-color: #ebe709;
      }
</style>
