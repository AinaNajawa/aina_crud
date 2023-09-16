<?php include './Components/head.php'; ?>
<!-- CREATE A FUNCTION WHERE LOGIN WWORK-->
<?php
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_assoc($result);
            // is-admin session
            $_SESSION['ADMIN'] = $user['ISADMIN'];
            $_SESSION['ID'] = $user['ID'];
            if($user['IS-ADMIN'] == 1){
                header('Location: ./home.php');
            }else{
                header('Location: ./user.php');
            }
        }else{
            echo "<script>alert('Wrong email or password')</script>";
        }
    }
?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 bg-blue-200 h-screen">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto  w-auto" src="./Assets/companyLogo.png" alt="AM SEEMA WORLDWIDE ICON">
        <h2 class="mt-0 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account
        </h2>
    </div>
    <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="#" method="POST">
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" required
                        class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                        class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Sign in
                </button>
            </div>
        </form>
    </div>
</div>

<?php include './Components/foot.php'; ?>