  <?php 
    require 'views/partials/head.php' ;
    require 'views/partials/nav.php';
    $type='Lists All';
    if(isset($_GET['category'])){
      $type= $_GET['category'];
    }
    ?>
  
        <!-- slide sho -->
     
        <?php require 'views/partials/banner.php'  ?>
          <!-- small  and card -->
          <div class="flex flex-col items-center justify-center mt-5">
            
            <!-- small menue -->
            <div class="flex flex-row items-center gap-4 max-w-full">
                <ul class="flex flex-row items-center gap-8 max-w-full">
                  <?php require 'views/partials/menu.php';?>
              </ul>
            </div>
            <!-- card -->
            
            <section class="overflow-hidden max-w-full text-gray-700 ">
              
                <div class="container px-5 py-2  lg:pt-12 lg:px-10">
                 <h2 class='text-white text-2xl '><?php echo $type ;?></h2>
                    <?php require 'views/partials/cards.php';?>
                </div>
            </section>
          </div>

<?php 

require 'views/partials/footer.php' ; ?>         