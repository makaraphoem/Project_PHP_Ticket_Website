<?php
require 'controllers/forms/login/form.login.controller.validation.php';
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
                        Log in
                    </h1>
                    <form action="#" method="post">
                        <div>
                            <label class="block text-sm">Email</label>
                            <input type="email"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 <?php if ($colorErrorEmail){ echo "border-[#B60505]";} ?>"
                            name='email'  placeholder="email" value='<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>'>
                            <small class="text-[#B60505]"> <?php echo $emailError; ?></small>
                        </div>
                        <div>
                            <label class="block mt-4 text-sm">Password</label>
                            <input
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 <?php if ($colorErrorPassword){ echo "border-[#B60505]";} ?>"
                            type="password" placeholder="password" id="myInputPassword" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>" >
                            <div class="flex mt-2">
                                <input type="checkbox" onclick=" myFunctionInputPassword()"> <br>
                                <p class="text-xs mt-1 ml-1"> Show password</p>
                            </div>
                            <small class="text-[#B60505]"> <?php echo $passwordError; ?></small>
                        </div>
                        <p class="mt-4">
                            <a class="text-sm  hover:underline cursor-pointer " href = '<?php echo'/forgetpassword'?>'>
                                Forgot your password?
                            </a>
                        </p>
                        <button 
                            class="w-full mt-4 px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-[#B60505] rounded-md hover:bg-[#B60505] focus:outline-none focus:bg-[#B60505]">
                            Log in
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