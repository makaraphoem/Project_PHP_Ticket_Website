
<?php
require 'views/partials/head.php';
require 'controllers/details/detail.controller.php';
require 'views/partials/nav.php' ;

?>
<section class=" body-font overflow-hidden bg-black text-white" >
  <div class="container px-5 py-24 mx-auto ">
    <div class="lg:w-3/5 ml-20 flex flex-wrap">
        <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="assets/shows/<?php echo $img ?>">
        <div class="lg:w-1/2 w-full lg:pl-14  lg:mt-0">
          <h1 class="text-3xl title-font font-medium mb-3 text-white"><?php echo  $movie_name ;?></h1>
          <div class="flex mb-4">
            <span class="flex items-center">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <p class="flex ml-5 border-spacing-1 bg-purple-400 border-0 py-1 px-3 focus:outline-none rounded"><?php echo $type['name']?></p>
            
            </span>
          </div>
          <p class="leading-relaxed"><?php echo  $description ;?></p>
          <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
            <button class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded"><a href="/purchase">Buy Now</a></button>
            <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">               
              <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
            </svg>
          </div>
          <div>
            <p>Opening Date  : <?php echo  $date_time['date'] ;?></p>
            <p>Opening time : <?php echo $date_time['time']?> pm</p>
            <p>Running Time  : <?php echo  $time ;?> mn</p>
            <p>Language      : <?php echo  $language ;?></p> 
            <p>Subtitle      : <?php echo   $subtitle ;?></p>
          </div>
        </div>
    </div>
  </div>

  <div class="flex justify-center">
    <iframe width="1110" height="500" src="<?php echo $trailer ?>" title="65 - Official Trailer - Only In Cinemas March 17" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="rounded-lg"></iframe>              
  </div>
  <!-- Date -->
  <div class="flex w-full justify-center items-center">
    <div  class=" flex w-[87%]  max-w-96 mt-5 p-10 bg-gray-300 rounded-lg">
      <div class=" text-2xl text-red-400 hover:text-[#B60505] border-[#B60505] ">Today <?= $day."-".$month."-".$year?></div>
      <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-alt-circle-right" class="w-20 h-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="blackColor" d="M504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256zm72 20v-40c0-6.6 5.4-12 12-12h116v-67c0-10.7 12.9-16 20.5-8.5l99 99c4.7 4.7 4.7 12.3 0 17l-99 99c-7.6 7.6-20.5 2.2-20.5-8.5v-67H140c-6.6 0-12-5.4-12-12z"></path>
      </svg>
      <div class="text-black text-2xl "><?= $date_time['date'];?></div>
    </div>
  </div>
  <!-- times -->
  <div class="container mx-auto px-20">
    <div class="flex flex-col w-full" style="cursor: auto;">
      <div class="grid gap-32 gap-y-10 grid-cols-1 sm:grid-cols-2 my-2  w-full">
        <?php
          foreach ($venuesDatas as $data)
          {
          ?>

          <div class="metric-card bg-slate-700 rounded-lg p-4 max-w-72 w-full " style="cursor: auto;">
            <div class="flex items-center  gap-2 w-full">
              <img src="assets/<?= $data['logo'] ?>"  width="70" alt="" >
              <div class="text-white flex flex-col">
                <?= $data['name'] ?>
                <span class="text-gray-400">Hall-01</span>
              </div>
            </div>
            <div class="grid gap-x-8 gap-y-4 grid-cols-3 p-4">
              <a href="/seat" class = "flex justify-center items-center">
                <div  class=" border-t-[2px] border-[#B60505] flex sm:inline-flex justify-center items-center bg-black  hover:text-black hover:bg-white  text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2">
                  09:45
                </div>
              </a>
              <a href="/seat" class = "flex justify-center items-center">
                <div  class=" border-t-[2px] border-[#B60505] flex sm:inline-flex justify-center items-center bg-black  hover:text-black hover:bg-white  text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2">
                  13:00
                </div>
              </a>
              <a href="/seat" class = "flex justify-center items-center">
                <div  class=" border-t-[2px] border-[#B60505] flex sm:inline-flex justify-center items-center bg-black  hover:text-black hover:bg-white  text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2">
                  14:45
                </div>
              </a>
              <a href="/seat" class = "flex justify-center items-center">
                <div  class=" border-t-[2px] border-[#B60505] flex sm:inline-flex justify-center items-center bg-black  hover:text-black hover:bg-white  text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2">
                  15:15
                </div>
              </a>
              <a href="/seat" class = "flex justify-center items-center">
                <div  class=" border-t-[2px] border-[#B60505] flex sm:inline-flex justify-center items-center bg-black  hover:text-black hover:bg-white  text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2">
                  16:15
                </div>
              </a>
              <a href="/seat" class = "flex justify-center items-center">
                <div  class=" border-t-[2px] border-[#B60505] flex sm:inline-flex justify-center items-center bg-black  hover:text-black hover:bg-white  text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2">
                  18:45
                </div>
              </a>
            </div>
          </div>
          <?php 
          }
        ?>
      </div>
    </div>
  </div>
</section>
  <?php
    require 'views/partials/footer.php';
  ?>





  