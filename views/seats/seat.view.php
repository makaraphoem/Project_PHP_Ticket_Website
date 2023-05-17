<?php
require "views/partials/head.php";

?>
<div id="seat-information" class="text-white w-[100%] mt-[40px] ">
    <div class="movie-container max-w-full text-white flex p-5">
        <div class="container flex flex-1 flex-col gap-5 w-full  p-4 ">
            <h1 class="text-[28px] text-center font-bold">SELECT YOUR SEAT</h1>
            <div class="w-full">
                <div class="flex flex-col justify-center items-center bg-gray-700 bg-opacity-[75%] p-2.5 rounded-[30px]" style="perspective: 1000px;">
                    <?php
                    $alphabets = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'M'];
                    foreach ($alphabets as $alphabet) { ?>
                        <div class='flex w-full gap-2 py-1 justify-evenly items-center'>
                            <p class='w-[20px] flex items-center justify-center'>
                                <?= $alphabet ?>
                            </p>
                            <div class='flex flex-1 items-center justify-center gap-2' id="seat-movie">
                                <?php
                                for ($i = 1; $i <= 12; $i++) {
                                    $seatName = $alphabet . $i;
                                    $isFound = true;
                                    if (!$isFound) {
                                        echo "<img src='assets/seat.png' alt='' id='chair' class='unseat w-[30px] h-[30px] m-[3px] '>";

                                    }elseif ($i == 6)
                                    {
                                        echo "<img data-index='" . $alphabet . $i . "' src='assets/seat.png' alt='' id='chair' class='mr-[40px] w-[30px] h-[30px] m-[3px] rounded-lg'>";
                                    }else 
                                    {
                                        echo "<img data-index='" . $alphabet . $i . "' src='assets/seat.png' alt='' id='chair' class=' w-[30px] h-[30px] m-[3px] rounded-lg '>";
                                    }
                                };
                                ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="screen bg-white h-[30px] flex self-center text-center w-[80%] mt-[30px]"></div>
                </div>
            </div>
        </div>
        <div class="  flex flex-1 flex-col rounded-[80px] h-full">
            <div class="container flex flex-col gap-2.5 width-full p-3">
            <h1 class="text-[28px] text-center font-bold">LIST INFORMATION</h1>
            </div>
            <div class="summary ml-9 pt-4 bg-gray-700 rounded-[30px]">
                <div class="">
                    <div class="font-medium ml-5 p-3 text-gray-300">
                        Title : <span id="title" class="decoration-sky-500/30">Chamnan</span>
                    </div>
                    <div class="font-medium ml-5 p-3 text-gray-300">
                        Running times : <span id="running-time" class="decoration-sky-500/30">120</span> Minutes
                    </div>
                    <div class="font-medium ml-5 p-3 text-gray-300">
                        Language : <span id="language" class="decoration-sky-500/30">English</span>
                    </div>
                    <div class="font-medium ml-5 p-3 text-gray-300">
                        Location : <span id="venue" class="decoration-sky-500/30">LEGEND MIDTOWN</span>
                    </div>
                    <div class="font-medium ml-5 p-3 text-gray-300">
                        Hall : <span id="hall" class="decoration-sky-500/30">Hall-01</span>
                    </div>
                    <div class="font-medium ml-5 p-3 text-gray-300">
                        Date : <span id="date" class="decoration-sky-500/30">20-02-2023</span>
                    </div>
                    <div class="font-medium ml-5 p-3 text-gray-300">
                        Time : <span id="time" class="decoration-sky-500/30">19:45</span>
                    </div>
                    <div class="font-medium ml-5 p-3 text-gray-300">
                        Price : <span id="price" class="decoration-sky-500/30"></span> $
                    </div>
                    <div class="font-medium ml-5 p-3 text-gray-300">
                        Seat : <span id="total-Seat" class="decoration-sky-500/30"></span>
                    </div>
                    <div class="font-medium ml-5 p-3 text-gray-300">
                        Total Price : <span id="total-price" class="decoration-sky-500/30"></span> $
                    </div>
                </div>
                <div class="button p-3 ml-5 mr-5 flex justify-center ">
                    <button class="flex mr-auto text-white bg-gray-300 border-0 py-2 px-6 focus:outline-none hover:bg-gray-400 rounded"><a href="" class="text-black">Back</a></button>
                    <button class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded"><a href="/purchase">Checkout</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src = 'views/js/seat.js' ></script> 
<?php
require "views/partials/footer.php";
?>