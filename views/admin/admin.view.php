<?php
require 'views/partials/head.php';
require 'views/partials/nav.php' ;
require "models/admin.model.php";
// DELETR USER-------------
if (isset($_GET['showId']))
{
    deleteUser($_GET['showId']);
}
?>
<button class=' mr-auto ml-11 mt-10 text-white bg-red-500 border-0 py-2 px-4 focus:outline-none hover:bg-red-600 rounded'><a href="/adduser">ADD USER+</a></button>   
    <div class="container w-full flex justify-center items-center mt-10 ">
        <div class="flex flex-col ">
            <div class="w-full">
                <div class="border-b border-gray-200 shadow " >
                    <table class="divide-y divide-gray-300 ">
                        <thead class="text-white ">
                            <tr class="">                              
                                <th class="px-8 py-2 ">
                                    Name
                                </th>
                                <th class="px-8 py-2 ">
                                    Email
                                </th>
                                <th class="px-8 py-2 ">
                                    Password
                                </th>
                                <th class="px-8 py-2 ">
                                    Roles
                                </th>
                                <th class="px-8 py-2 ">
                                    Action
                                </th>                               
                            </tr>
                        </thead>
                        <tbody class="bg-black divide-y ">
                            <?php
                            $datas = getUserData();
                            foreach ($datas as $data){
                            ?>
                                <tr class="whitespace-nowrap">                               
                                    <td class="px-4 py-3 text-sm text-red-500 flex flex-col items-center">
                                        <?php echo $data["name"]?>
                                    </td>
                                    <td class="px-4 py-2 text-sm text-red-500" >
                                        <?php echo $data["email"]?>
                                    </td>
                                    <td class="px-4 py-2 text-sm text-red-500">
                                        <?php echo $data["password"]?>
                                    </td>
                                    <td class="px-4 py-2 text-sm text-red-500 text-center">
                                        <?php $role = getRowById($data["role_id"]) ; echo $role['name'] ?>                 
                                    </td>
                                    <td class="flex px-10 py-5">
                                       <a href="/adduser?showId=<?php echo $data["id"] ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" name="edit">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <a href="/admin?showId=<?php echo $data["id"]  ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-4 text-red-400" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" >
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
                                    </td>                                
                                <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>  
