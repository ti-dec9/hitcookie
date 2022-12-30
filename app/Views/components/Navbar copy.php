<div
  class="flex items-center justify-between w-full px-4 py-1 font-bold text-verdehk md:px-12 bg-amarelohk"
  :class="{'hidden': scrolledFromTop}"
>
  <div class="px-4">
    <ul class="flex gap-4">
      <li class="transition-all duration-300 hover:-translate-y-1">
        <a href=""><i class="fa-brands fa-instagram"></i></a>
      </li>
      <li class="transition-all duration-300 hover:-translate-y-1">
        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
      </li>
    </ul>
  </div>
  <div class="text-sm"><a href="https://www.instagram.com/postometano/">Entre em Contato</a></div>
</div>
<nav class="z-40 w-full py-1.0 shadow-sm shadow-amarelohk border-gray-200 max-h-28 bg-verdehk sm:px-4" :class="{'hidden': scrolledFromTop, }">
  <div class="container flex flex-wrap items-center justify-between px-2 lg:px-12 ">
    <a href="<?php echo base_url('/'); ?>" class="flex items-center">
        <img src="https://ik.imagekit.io/jdmxypilt/HitCookie/Logo_ziW7Wvh0L.png?ik-sdk-version=javascript-1.4.3&updatedAt=1671458980860" class="mr-3 h-28 lg:h-28" alt="Logo" />
    </a>
    <nav>
      <button class="inline-flex items-center p-2 ml-3 text-sm text-white duration-200 md:hidden hover:bg-amarelohk" @click="navOpen = !navOpen">
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h22a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h22a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h22a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
      <ul
        class="fixed left-0 right-0 z-30 min-h-screen px-4 pt-8 mt-5 space-y-4 text-sm text-white transition duration-300 transform translate-x-full bg-verdehk lg:mt-0 md:relative md:flex md:space-x-10 md:min-h-0 md:px-0 md:py-0 md:space-y-0 md:translate-x-0"
        :class="{'translate-x-full': !navOpen}"
        :class="{'translate-x-0': navOpen}"
      >
      <li>
        <a href="<?php echo base_url('quem-somos'); ?>" @click="navOpen = false" class="relative block py-2 text-white hover-underline-animation">Quem Somos</a>
      </li>
      <li>
        <a href="<?php echo base_url('cardapio'); ?>" @click="navOpen = false" class="relative block py-2 text-white hover-underline-animation">Cardápio</a>
      </li>
      <li>
        <a href="#novidades" @click="navOpen = false" class="relative block py-2 text-white hover-underline-animation">Novidades</a>
      </li>
      <li>
        <a href="https://www.instagram.com/postometano/" @click="navOpen = false" class="relative block py-2 text-white hover-underline-animation">Contato</a>
      </li>
      </ul>
    </nav>
  </div>
</nav>

<nav class="z-40 w-full animate__animated py-1.0 shadow-sm mb-4 shadow-amarelohk border-gray-200 bg-verdehk sm:px-4" :class="{'sticky': scrolledFromTop, 'top-0': scrolledFromTop, 'animate__slideInDown': scrolledFromTop, 'hidden': !scrolledFromTop, 'max-h-24': scrolledFromTop,}">
  <div class="container flex flex-wrap items-center justify-between px-2 lg:px-12 ">
    <a href="<?php echo base_url('/'); ?>" class="flex items-center">
        <img src="https://ik.imagekit.io/jdmxypilt/HitCookie/Logo_ziW7Wvh0L.png?ik-sdk-version=javascript-1.4.3&updatedAt=1671458980860" class="h-24 mr-3 lg:h-24" alt="Logo" />
    </a>
    
    <nav>
      <button class="inline-flex items-center p-2 ml-3 text-sm text-white duration-200 md:hidden hover:bg-amarelohk" @click="navOpen = !navOpen">
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h22a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h22a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h22a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
      <ul
        class="fixed left-0 right-0 z-30 min-h-screen px-4 pt-8 mt-5 space-y-4 text-sm text-white transition duration-300 transform translate-x-full bg-verdehk lg:mt-0 md:relative md:flex md:space-x-10 md:min-h-0 md:px-0 md:py-0 md:space-y-0 md:translate-x-0"
        :class="{'translate-x-full': !navOpen}"
        :class="{'translate-x-0': navOpen}"
      >
      <li>
        <a href="<?php echo base_url('quem-somos'); ?>" @click="navOpen = false" class="relative block py-2 text-white hover-underline-animation">Quem Somos</a>
      </li>
      <li>
        <a href="<?php echo base_url('cardapio'); ?>" @click="navOpen = false" class="relative block py-2 text-white hover-underline-animation">Cardápio</a>
      </li>
      <li>
        <a href="#novidades" @click="navOpen = false" class="relative block py-2 text-white hover-underline-animation">Novidades</a>
      </li>
      <li>
        <a href="https://www.instagram.com/postometano/" @click="navOpen = false" class="relative block py-2 text-white hover-underline-animation">Contato</a>
      </li>
      </ul>
    </nav>
    <!--
      <div class="hidden w-full md:block md:w-auto" :class="{'translate-x-full': !navOpen}"
    :class="{'translate-x-0': navOpen}">
      <ul class="fixed left-0 right-0 z-30 min-h-screen px-4 pt-8 mt-5 space-y-4 text-sm text-white transition duration-300 transform translate-x-full bg-verdehk lg:mt-0 md:relative md:flex md:space-x-10 md:min-h-0 md:px-0 md:py-0 md:space-y-0 md:translate-x-0"
      >
        <li>
          <a href="<?php echo base_url('quem-somos'); ?>" @click="navOpen = false class="relative block py-2 text-white hover-underline-animation">Quem Somos</a>
        </li>
      
        <li>
          <a href="<?php echo base_url('cardapio'); ?>" @click="navOpen = false class="relative block py-2 text-white hover-underline-animation">Cardápio</a>
        </li>

        <li>
          <a href="#novidades" @click="navOpen = false class="relative block py-2 text-white hover-underline-animation">Novidades</a>
        </li>

        <li>
          <a href="https://www.instagram.com/postometano/" @click="navOpen = false class="relative block py-2 text-white hover-underline-animation">Contato</a>
        </li>
        
        
      </ul>
    </div>
    -->
    
  </div>
</nav>

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


</style>