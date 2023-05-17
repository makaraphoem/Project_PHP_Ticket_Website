
<nav class=" border-gray-200 dark:bg-gray-900 bg-[#202124] w-full top-0 sticky z-10">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5 ">
        <a href="/" class="flex ">
            <img src="assets/logo.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap  dark:text-white text-white font-sans">Join Plush</span>
        </a>
        <div class="">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white font-sans">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                 stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                 d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <form action="" method="get" class="flex flex-row gap-4">
                <input type="search" name="search" id="default-search" class="block w-96 p-2 pl-10 text-sm text-gray-900  border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-sans" value='<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>' placeholder="Search..." required>
                <input type="text" value='<?php if(isset($_GET['category'])){ echo $_GET['category'];}?>' name='category' style='display:none'>
                <button class='bg-red-500 hover:bg-red-800 text-white  py-2 px-4 rounded inline-flex items-center'>search</button>    
            </form>
        </div>
        </div>
        <div class="flex items-center">
            <a href=""><img src="/assets/cart.png" class="w-10 mr-8" alt=""></a>
            <img src="/assets/account.png" id = "account" class="w-8 cursor-pointer" alt="">
                <?php
                if(isset($_COOKIE['email']) && isset($_COOKIE['password']))
                {?>
                    <div id = "form-dialog" style="display: none" class="  sticky z-20"> 
                        <dialog open class="bg-black">
                            <section>
                                <div  class="flex  mb-2">
                                    <i class="fa fa-user-circle mt-1 text-[#B60505]"></i> 

                                    <a href="<?php if($_COOKIE['role_id'] === '1'){echo "/admin";} elseif ($_COOKIE['role_id'] === '2'){echo "/seller";} else{echo "/";} ?>" class="ml-2  hover:text-[#B60505] text-[#f5f5f5] font-sans">
                                         <?= $_COOKIE['username']  ?> </a>
                                </div>
                                <div class="flex ">
                                    <i class="fa fa-sign-in mt-1 text-[#B60505]" aria-hidden="true" ></i> 
                                    <a href="controllers/forms/logout/logout.controller.php" class="ml-3 hover:text-[#B60505] text-[#f5f5f5] font-sans"> Log out </a>
                                </div> 
                            </section>
                        </dialog>
                    </div>                  
                <?php  
                }else
                {?>
                    <div id = "form-dialog" style="display: none" class="  sticky z-20"> 
                        <dialog open class="bg-black">
                            <section>
                                <div class="flex mb-2">
                                    <i class="fa fa-sign-in mt-1 text-[#B60505]" aria-hidden="true" ></i> 
                                    <a href="/login" class="ml-3 hover:text-[#B60505] text-[#f5f5f5] font-sans"> Log in </a>
                                </div> 
                                <div class="flex  mt-2  ">
                                    <i class="fa fa-user-plus mt-1 text-[#B60505]"  aria-hidden="true"></i> 
                                    <a href="/register " class="ml-2 hover:text-[#B60505] text-[#f5f5f5]  font-sans"> Register  </a>
                                </div>  
                            </section>
                        </dialog>
                    </div>
            <?php         
                }?>
            
        </div>
    </div>
    <div class="max-w-screen-xl px-4 py-3 md:px-6 md:-mr-96">
            <ul class="flex flex-row space-x-8 text-sm font-medium ">
                <li>
                    <a href="/" class="text-white  hover:underline font-sans" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="text-white  hover:underline font-sans">About us</a>
                </li>
                <li>
                    <a href="#" class="text-white  hover:underline font-sans">Contect us</a>
                </li>
                <li>
            </ul>
    </div>
</nav>
