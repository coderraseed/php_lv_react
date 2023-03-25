<?php
$fname = isset( $_POST['first-name'] ) ? $_POST['first-name'] : "Md Rasedul";
$lname = isset( $_POST['last-name'] ) ? $_POST['last-name'] : " Islam";
$email = isset( $_POST['email'] ) ? $_POST['email'] : "coderraseed@gmail.com";
if(isset($_POST[submit])){
    $success= "The form is subnitteed";
}
?>

<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Form with Tailwind CSS</title>
    <!-- Include Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css">
</head>
<body>
    <div class="container mx-auto my-10">
        <form class="max-w-md mx-auto p-4 border rounded-md shadow-lg" method="post" action="" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="first-name" class="block text-gray-700 font-bold mb-2">First Name:</label>
                <input type="text" id="first-name" name="first-name" class="w-full px-3 py-2 border rounded-md text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="last-name" class="block text-gray-700 font-bold mb-2">Last Name:</label>
                <input type="text" id="last-name" name="last-name" class="w-full px-3 py-2 border rounded-md text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email Address:</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div><!--
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password:</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-bold mb-2">Image:</label>
                <input type="file" id="image" name="image" class="w-full px-3 py-2 border rounded-md text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div> -->
            <div class="flex justify-center mt-6">
                <button type="submit" name="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Submit</button>
            </div>
        </form>
        <div class="mb-4">
            <?php 
                if(isset($success)){
                    echo $success;
                }
            
            ?>

            <p> <?php  echo "My first name: {$fname}"; ?></p>
            <p> <?php  echo "My last name: {$lname}" ;?></p>
            <p> <?php  echo "My email address: {$email}"; ?></p>
        </div>
    </div>
</body>
</html>
