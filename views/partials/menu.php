<?php

$menu = [
    "Concerts",
    "Movies",
    "Lists all",
] ;

foreach ($menu as $category)
{
?>
    <li class="flex-1 ">
        <a class="text-center font-sans w-40 block border border-[#B60505] rounded py-2 px-4 bg-[#B60505] hover:bg-red-800 text-white" href="/?category=<?= $category ?>"><?= $category ?></a>
    </li>
        
<?php
}
