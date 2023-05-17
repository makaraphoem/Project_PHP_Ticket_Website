<?php
require 'views/partials/head.php';
require 'controllers/admin/admin.adduser.validation.php';
$name ="";
$email ="";
$password ="";
$role ="";
$dateOfBirth ="";
if (isset($_GET['showId'])) {
    $id = $_GET['showId'];
    $user = getUserById($id);
    $name = $user["name"];
    $email = $user["email"];
    $password = $user["password"];
    $role = $user["role_id"];
    $dateOfBirth = $user["date_of_birth"];
}
?>
<div class="relative flex flex-col justify-center min-h-screen overflow-hidden w-full ">
        <div
            class="w-full text-black  p-6 m-auto bg-[#f5f5f5] border-t rounded-xl border-[#B60505]  shadow-lg shadow-red-800/50 lg:max-w-md  ">
            <h1 class="text-3xl font-semibold text-center text-[#B60505]">Admin</h1>
            <form action='' class="mt-6" method="post">
                <div class="mt-4">
                    <label for="text" class="block  font-sans ">Username</label>
                    <input type="text" placeholder="username" name='username' value='<?php echo isset($_POST['username']) ? $_POST['username'] : $name; ?>'
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 <?php if ($colorErrorName){ echo "border-[#B60505]";} ?>"> 
                    <small class="text-[#B60505]"> <?php echo $userNameError; ?></small>                      
                </div>
                <div class="mt-4">
                    <label for="email" class="block font-sans ">Email</label>
                    <input type="email" placeholder="email" name='email' value='<?php echo isset($_POST['email']) ? $_POST['email'] : $email; ?>' 
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 <?php if ($colorEmailError){ echo "border-[#B60505]";} ?>"> 
                    <small class="text-[#B60505]"><?php echo $emailError; ?> </small>                      
                </div>
                <div class="mt-4">
                    <label for="password" class="block font-sans "> <?php if(isset($_GET['showId'])){echo 'New Pasword';}else{echo 'Password';}?></label>
                    <input type="password" placeholder="password" name='password' id="myInputPassword"  value='<?php echo isset($_POST['password']) ? $_POST['password'] :''; ?>'
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 <?php if ($colorPasswordError){ echo "border-[#B60505]";} ?>">
                    <input type="checkbox" onclick=" myFunctionInputPassword()"> Show password <br>
                    <small class="text-[#B60505]"> <?php echo $passwordError; ?></small>                      
                </div>              
                <label class="block mt-6">
                    <span class="text-gray-700 focus:border-black">Roles</span><br>                       
                    <select class="form-select mt-1 block w-full px-4 py-2 text-gray-700 border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40  <?php if ($colorRoleError){ echo "border-[#B60505]";} ?>" name= 'role'  value='<?php echo isset($_POST['role']) ? $_POST['role'] :  $role; ?>' >
                        <option >select roles...</option>
                        <option value= '1' <?php if ($role == '1') { ?>selected="true" <?php }; ?>value="admin">admin</option>
                        <option value= '2' <?php if ($role == '2') { ?>selected="true" <?php }; ?>value="seller">seller</option>
                        <option value= '3' <?php if ($role == '3') { ?>selected="true" <?php }; ?>value="customer">customer</option>                                           
                    </select> 
                    <small class="text-[#B60505]"> <?php echo $roleError; ?></small> 
                </label>   
                <div class="mt-4">
                    <label for="date" class="block font-sans ">Date of birth</label>
                    <input type="date" name='date-of-birth'  value='<?php echo isset($_POST['date-of-birth']) ? $_POST['date-of-birth'] : $dateOfBirth; ?>' 
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-black focus:ring-red-300 focus:outline-none focus:ring focus:ring-opacity-40 <?php if ($colorDateError){ echo "border-[#B60505]";} ?>">
                    <small class="text-[#B60505]"> <?php echo $dateError; ?></small>                      
                </div>  
                <div class="mt-6">
                    <button  name="submit"
                        class="w-full px-4 py-2 tracking-wide text-white  font-sans transition-colors duration-200 transform bg-[#B60505] rounded-md hover:bg-[#B60505] focus:outline-none focus:bg-[#B60505]">
                        <?php 
                        if(empty($_GET['showId'])){
                            echo 'Create';
                        }else{
                            echo 'Save';
                        }
                        ?>
                    </button>
                </div>
            </form>   
            <p class="mt-8 text-1xl font-light text-center text-gray-700"><a href="/admin"
            class="font-medium text-[#B60505] hover:underline">Back</a></p>
        </div>
    </div>
<?php
require "views/partials/footer.php";