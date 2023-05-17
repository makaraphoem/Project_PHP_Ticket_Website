
<?php   
    require 'controllers/forms/register/form.register.controller.validate.php';
?>
<script src="https://cdn.tailwindcss.com"></script>
<body class=" font-sans max-w-full bg-[url('assets/bg-login.png')] bg-contain ">
<div class=" flex flex-col items-center justify-center w-full m-0">
<div class="flex w-full pl-6 pt-6">
    <a href="/" class="text-white " >
        <button class="w-full px-4 py-2  tracking-wide text-white font-sans transition-colors duration-200 transform bg-[#B60505] rounded-md hover:bg-[#B60505] focus:outline-none focus:bg-[#B60505]">
            BACK
        </button>
    </a>
</div>
<div class="relative flex flex-col justify-center min-h-screen overflow-hidden w-96">
    <div class="w-full p-6 m-auto bg-white border-t border-[#B60505] rounded shadow-lg shadow-red-800/50 lg:max-w-md">
    <div class="flex flex-col justify-center items-center">
        <img src="../../assets/logo.png" class="w-16 text-[#B60505]" alt="">
        <h1 class="text-3xl font-semibold text-center text-[#B60505] ">REGISTER</h1>
    </div>
    <form action='' class="mt-6" method="post" >
        <div class="mt-4">
            <label for="text" class="block  font-sans ">Username</label>
            <input type="text" placeholder="username" name='username' value='<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>'
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 <?php if ($colorErrorName){ echo "border-[#B60505]";} ?>">
            <small class="text-[#B60505]"> <?php echo $userNameError; ?></small>
        </div>
        <div class="flex items-center justify-center mt-4">
            <div class="datepicker relative form-floating mb-3 xl:w-96" data-mdb-toggle-button="false">
                <label for="floatingInput" class="block  font-sans">Date of birth</label>
                <input type="date" name="date-of-birth" value='<?php echo isset($_POST['date-of-birth']) ? $_POST['date-of-birth'] : ''; ?>' 
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 <?php if ($colorErrorDateOfBirth){ echo "border-[#B60505]";} ?>" placeholder="Select a date" />
                <small class="text-[#B60505]"> <?php echo $userDateOfBirthError; ?></small>
            </div>
        </div>
        <div class="mt-4">
            <label for="email" class="block font-sans ">Email</label>
            <input type="email" placeholder="email" name='email'  value='<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>'
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 <?php if ($colorErrorEmail){ echo "border-[#B60505]";} ?>">                     
            <small class="text-[#B60505]"> <?php echo $emailError; ?></small>
        </div>
        <div class="mt-4">
            <label for="password" class="block font-sans ">Password</label>
            <input type="password" placeholder="password" name='password' id="myInputPassword"  value='<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>'
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 <?php if ($colorErrorPassword){ echo "border-[#B60505]";} ?>">
            <div class="flex mt-2">
                 <input type="checkbox" onclick=" myFunctionInputPassword()"> <br>
                 <p class="text-xs mt-1 ml-1"> Show password</p>   
            </div>  
            <small class="text-[#B60505]"> <?php echo $passwordError; ?></small>
        </div>
        <div class="mt-4">
            <label for="password" class="block font-sans ">Comfirm password</label>
            <input type="password" placeholder="comfirm password" name='comfirmPassword' id="myInputComfirmPassword"  value='<?php echo isset($_POST['comfirmPassword']) ? $_POST['comfirmPassword'] : ''; ?>'
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 <?php if ($colorErrorComfirm){ echo "border-[#B60505]";} ?>"> 
            <div class="flex mt-2">
                <input type="checkbox" onclick="myFunctionInputComfirmPassword()"> <br>   
                <p class="text-xs mt-1 ml-1"> Show comfirm password</p>   
            </div>   
            <small class="text-[#B60505]"> <?php echo $comfirmPasswordError; ?></small>
        </div>
        <div class="mt-6">
            <button  name="submit" class="w-full px-4 py-2 tracking-wide text-white  font-sans transition-colors duration-200 transform bg-[#B60505] rounded-md hover:bg-[#B60505] focus:outline-none focus:bg-[#B60505]">
                Register
            </button>
        </div>
    </form>
        <p class="mt-8 text-xs font-light text-center text-gray-700"> Have an account? <a href="/login"
         class="font-medium text-[#B60505] hover:underline">Log in</a></p>
    </div>
</div>
<?php
require "views/partials/footer.php";