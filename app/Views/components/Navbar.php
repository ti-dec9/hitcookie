<nav class="z-40 w-full py-1.0 bg-verdehk border-gray-200 sm:px-4" :class="{'sticky': scrolledFromTop, 'top-0': scrolledFromTop}">
  <div class="container flex flex-wrap items-center justify-between px-2 lg:px-12 ">
    <a href="<?php echo base_url('/'); ?>" class="flex items-center">
        <img src="https://ik.imagekit.io/jdmxypilt/HitCookie/Logo_ziW7Wvh0L.png?ik-sdk-version=javascript-1.4.3&updatedAt=1671458980860" class="h-32 lg:h-28 mr-3" alt="Logo" />
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-white md:hidden hover:bg-amarelohk duration-200" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Abrir Menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-verdehk md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-verdehk dark:border-gray-700">
        <li>
          <a href="<?php echo base_url('quem-somos'); ?>" class="block py-2 text-white hover-underline-animation">Quem Somos</a>
        </li>
      
        <li>
          <a href="#" class="block py-2 text-white hover-underline-animation">Cardápio</a>
        </li>

        <li>
          <a href="#" class="block py-2 text-white hover-underline-animation">Novidades</a>
        </li>

        <li>
          <a href="#" class="block py-2 text-white hover-underline-animation">Contato</a>
        </li>
        
        
      </ul>
    </div>
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