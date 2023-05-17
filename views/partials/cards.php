<?php
require 'controllers/searchs/search.controller.php';
?>

<div class="grid grid-cols-4 gap-4 max-h-full max-w-full">
<?php
$title = '';
$description = '';
$poster = '';
foreach ($showResult as $dataInfor)
{
        $title = $dataInfor['title'];
        $description = $dataInfor['description'];
        $poster = $dataInfor['img'];
    
    
?>                  
    <div class="flex flex-wrap hover:shadow-2xl " id="card" >
        <div class=" p-2 md:p-4 " id="container-card">
            
            <img src="assets/shows/<?=$poster?>"
                class="block object-cover object-center  h-70  hover:scale-110 transition 
                duration-300 ease-in-out cursor-pointer" alt="Louvre" />
            <div id="contant">
                <h3 class="font-sans"><?= $title; ?></h3>
                <p class="font-sans"> <?= $description; ?> </p>
            </div>
            <div id="btn-detail">
                <button id="more-information" class="font-sans"><a id="more-detail-btn" href="<?php echo "/detail?id=$dataInfor[id]"?>">more information</a></button>
                <button id="see-ticket" class="font-sans bg-red-500">See ticket</button>
            </div>
        </div>
        </div>
        
<?php
    }

?>
</div>