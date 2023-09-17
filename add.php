<?php include './Components/head.php'; ?>
<?php
$ID = $_SESSION['ID'];
$query = "SELECT * FROM users WHERE ID='$ID'";
$result = mysqli_query($con, $query);
$user = mysqli_fetch_assoc($result);
if (isset($_POST['fullName']) && isset($_POST['phoneNumber']) && isset($_POST['time']) && isset($_POST['firstDate']) && isset($_POST['lastDate']) && isset($_POST['image'])) {
    $fullName = $_POST['fullName'];
    $phoneNumber = $_POST['phoneNumber'];
    $time = $_POST['time'];
    $firstDate = $_POST['firstDate'];
    $lastDate = $_POST['lastDate'];
    $image = $_POST['image'];
    $query = "INSERT INTO cuti (IDUSER, TIME, FIRSTDATE, LASTDATE, PICTURE, STATUS) VALUES ('$ID', '$time', '$firstDate', '$lastDate', '$image', 0)";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo "<script>alert('Added successfully')</script>";
    } else {
        echo "<script>alert('Failed to add')</script>";
    }
}
?>
<div class="flex min-h-full flex-col px-6 py-12 lg:px-8 bg-blue-200 h-screen">
    <div class="flex justify-between align-middle bg-white p-4 shadow rounded-lg">
        <h1 class="text-2xl font-bold">ADD</h1>
        <a href="./home.php">
            <button class="w-full p-3 bg-blue-200 color-white font-bold">
                Back
            </button>
        </a>
    </div>

    <div class="flex justify-between align-middle bg-white p-4 mt-4 shadow rounded-lg">
        <form class="space-y-6 w-full" action="#" method="POST">
            <div>
                <label for="fullName" class="block text-sm font-medium leading-6 text-gray-900">
                    Full Name
                </label>
                <div class="mt-2">
                    <input id="fullName" name="fullName" type="text" required value="<?php echo $user['NAME']; ?>"
                        class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="phoneNumber" class="block text-sm font-medium leading-6 text-gray-900">Phone
                    Number
                </label>
                <div class="mt-2">
                    <input id="phoneNumber" name="phoneNumber" type="number" required
                        value="<?php echo $user['PHONENUMBER']; ?>"
                        class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="time" class="block text-sm font-medium leading-6 text-gray-900">Time</label>
                <div class="mt-2">
                    <input id="time" name="time" type="time" required value="<?php
                        // get current time of the computer
                        echo date('H:i');
                    ?>"
                        class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="firstDate" class="block text-sm font-medium leading-6 text-gray-900">First Date</label>
                <div class="mt-2">
                    <input id="firstDate" name="firstDate" type="date" required
                        class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="lastDate" class="block text-sm font-medium leading-6 text-gray-900">Last Date</label>
                <div class="mt-2">
                    <input id="lastDate" name="lastDate" type="date" required
                        class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Image</label>
                <div class="mt-2">
                    <input id="image" name="image" type="file" required
                        class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Add
                </button>
            </div>
        </form>
    </div>
</div>

<?php include './Components/foot.php'; ?>