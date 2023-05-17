
<?php
  require 'views/partials/head.php';
  require 'controllers/forms/login/form.login.controller.validation.php';
?>
 <div class="flex w-full pl-6 pt-6">
        <a href="/" class="text-white " >
            <button class="w-full px-4 py-2  tracking-wide text-white font-sans transition-colors duration-200 transform bg-[#B60505] rounded-md hover:bg-[#B60505] focus:outline-none focus:bg-[#B60505]">
                BACK
            </button>
        </a>
    </div>
<div class="flex items-center min-h-screen ">
    <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-2xl backdrop-invert-0">
        <div class="flex flex-col md:flex-row border border-black">
            <div class="h-32 md:h-auto md:w-1/2 ">
                <img class="object-cover w-full h-full" src="https://blog.shahednasser.com/static/9157dd8c027b9e029d85863e32ac6e36/d5c54/glenn-carstens-peters-npxXWgQ33ZQ-unsplash-2.jpg"alt="img" />
            </div>
            <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                <div class="w-full">
                    <img src="../../assets/logo.png" class="w-16 ml-36 text-[#B60505]" alt="">
                    <h1 class="mb-4 text-2xl font-bold text-center text-gray-700">
                        Reset Password
                    </h1>
                    <form action="" method="post">
                        <div>
                            <label class="block text-sm">Email</label>
                            <input type="email"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 <?php if ($colorErrorEmail){ echo "border-[#B60505]";} ?>"
                            name='email'  placeholder="email" value=''>
                            <small class="text-[#B60505]"> <?php echo $emailError; ?></small>
                        </div>
                        <button 
                            class="w-full mt-4 px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-[#B60505] rounded-md hover:bg-[#B60505] focus:outline-none focus:bg-[#B60505]">
                            Submit
                        </button>
                    </form>
                    <p class="mt-8 text-xs font-light text-center text-gray-700"> Don't have an account? 
                        <a href="/register" class="font-medium text-[#B60505] hover:underline">Sign up</a>
                     </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require "views/partials/footer.php";