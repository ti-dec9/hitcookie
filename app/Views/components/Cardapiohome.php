
<section class="relative flex items-center justify-center py-20 pt-48 lg:pt-20 lg:pl-32 bg-verdehk">
    <!-- Linha preta abaixo do tÃ­tulo -->
   <div class="relative z-20 px-4 flex flex-row lg:py-0 py-20 w-[750px] h-full mx-4 border-4 rounded-lg border-amarelohk lg:mx-0 lg:pr-4">
    <div class="absolute inset-x-0 -top-72 lg:-inset-y-20 lg:-left-72">
      <img class="lg:w-[550px] lg:h-[550px] w-[550px] h-[550px]  lg:flex drop-shadow-xl " src="https://ik.imagekit.io/jdmxypilt/HitCookie/IMG_4420-removebg__1__KHtHs_dri.png?ik-sdk-version=javascript-1.4.3&updatedAt=1672416363073" alt="" />
    </div>
        <div class="relative z-40 py-16 text-center lg:ml-52 lg:px-10 lg:text-start">
      <h2 class="pt-4 text-2xl font-bold text-white uppercase">Conheça nosso Cardápio!</h2> <br>
      <p class="text-white">Variado e com diversas opções deliciosas, todos os itens do nosso cardápio são feitos artesanalmente e com muito amor. Do café da manhã ao almoço, do hambúrguer a sobremesa... </p> <br>
      <span class="text-xl font-bold text-amarelohk hover-underline-animation"><a href="<?php echo base_url('cardapio'); ?>">Cardápio_</a></span>
      </div>
  </div>
</section>

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
