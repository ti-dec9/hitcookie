<div
  class="flex items-center justify-between w-full px-4 py-1 font-bold text-verdehk md:px-12 bg-amarelohk"
  :class="{'hidden': scrolledFromTop}"
>
  <div class="px-4">
    <ul class="flex gap-4">
      <li class="transition-all duration-300 hover:-translate-y-1">
        <a href="https://instagram.com/postometano?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram"></i></a>
      </li>
      <li class="transition-all duration-300 hover:-translate-y-1">
        <a href="https://www.facebook.com/postometano?mibextid=ZbWKwL"><i class="fa-brands fa-square-facebook"></i></a>
      </li>
    </ul>
  </div>
  <div class="text-sm"><a href="https://www.instagram.com/postometano/">Entre em Contato</a></div>
</div>
<header
  class="z-30 flex items-center justify-between w-full px-4 text-white transition-all duration-300 shadow-amarelohk bg-verdehk md:px-12"
  :class="{'h-24': !scrolledFromTop, 'h-20': scrolledFromTop, 'drop-shadow-xl': scrolledFromTop, 'fixed' : scrolledFromTop,}"
>
  <a href="<?php echo base_url('/'); ?>">
    <img
      src="https://ik.imagekit.io/jdmxypilt/HitCookie/Logo_ziW7Wvh0L.png?ik-sdk-version=javascript-1.4.3&updatedAt=1671458980860"
      alt="Logo"
      class="h-32 transition duration-200 origin-left transform"
      :class="{'scale-100': !scrolledFromTop, 'scale-75': scrolledFromTop}"
    />
  </a>
  <nav>
    <button class="inline-flex items-center p-2 ml-3 text-sm text-white duration-200 md:hidden hover:bg-amarelohk" @click="navOpen = !navOpen">
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h22a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h22a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h22a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <ul
      class="fixed left-0 right-0 z-30 min-h-screen px-4 pt-8 mt-5 space-y-4 text-sm transition duration-300 transform translate-x-full bg-verdehk lg:mt-0 md:relative md:flex md:space-x-10 md:min-h-0 md:px-0 md:py-0 md:space-y-0 md:translate-x-0"
      :class="{'translate-x-full': !navOpen}"
      :class="{'translate-x-0': navOpen}"
    >
      <li>
        <a id="home" href="<?php echo base_url('/'); ?>" @click="navOpen = false" class="relative block py-2 text-white hover-underline-animation">Home</a>
      </li>
      <li>
        <a id="quem-somos" href="<?php echo base_url('quem-somos'); ?>" @click="navOpen = false" class="relative block py-2 text-white hover-underline-animation">Quem Somos</a>
      </li>
      <li>
        <a id="cardapio" href="<?php echo base_url('cardapio'); ?>" @click="navOpen = false" class="relative block py-2 text-white hover-underline-animation">Cardápio</a>
      </li>
      <li>
        <a id="novidades" href="#novidades" @click="navOpen = false" class="relative block py-2 text-white hover-underline-animation">Novidades</a>
      </li>
      <li>
        <a href="https://www.instagram.com/postometano/" @click="navOpen = false" class="relative block py-2 text-white hover-underline-animation">Contato</a>
      </li>
    </ul>
  </nav>
</header>

<style>
  .hover-underline-animation:hover {  
    display: inline-block;
    position: relative;
    color:#ebe709;
    transition: 0.25s;
  }
  
  
  .hover-underline-animation:after {
    content: '';
    position: absolute;
    width: 100%;
    transform: scaleX(0);
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #ebe709;
    transform-origin: bottom right;
    transition: transform 0.25s ease-out;
  }
  
  .hover-underline-animation:hover:after {
    transform: scaleX(1);
    transform-origin: bottom left;
  }
  .active{
    color:#ebe709 !important; 
  }
  </style>

<script>
  var path = window.location.pathname;
  var page = path.split("/").pop();
  console.log( page );
  
  if (page == 'quem-somos'){
    document.getElementById("quem-somos").classList.add("text-amarelohk");
  } else if (page == ''){
    document.getElementById("home").classList.add("text-amarelohk");
  }
  if (page == 'cardapio'){
    document.getElementById("cardapio").classList.add("text-amarelohk");
  }
  </script>