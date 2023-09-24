<?php include './Components/head.php'; ?>
<?php
if(!isset($_SESSION['ADMIN'])){
    header('Location: ./login.php');
}else if($_SESSION['ADMIN'] != 0){
    header('Location: ./home.php');
}
$id = $_SESSION['ID'];

if(isset($_POST['logout'])){
    session_destroy();
    header('Location: ./login.php');
}
?>
<div class="flex min-h-full flex-col px-6 py-12 lg:px-8 bg-blue-200 h-screen">
    <div class="flex justify-between align-middle bg-white p-4 shadow rounded-lg">
        <h1 class="text-2xl font-bold">DETAILS</h1>
        <div class="flex">
        <a href="./add.php">
            <button class="w-full py-2 px-4  bg-blue-200 color-white font-bold">
                Add
            </button>
        </a>
        <form method="post">
            <button type="submit" name="logout" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                Logout
            </button>
        </form>
        </div>
    </div>

    <div class="flex justify-between align-middle bg-white p-4 mt-4 shadow rounded-lg" style="overflow: auto;">
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">First Date</th>
                    <th class="px-4 py-2">Last Date</th>
                    <th class="px-4 py-2">Picture</th>
                    <th class="px-4 py-2">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM cuti WHERE IDUSER='$id'";
                $result = mysqli_query($con, $query);
                while($cuti = mysqli_fetch_array($result)){
                    ?>
                <tr>
                    <td class="border px-4 py-2"><?php echo $cuti['ID']; ?></td>
                    <td class="border px-4 py-2"><?php echo $cuti['FIRSTDATE']; ?></td>
                    <td class="border px-4 py-2"><?php echo $cuti['LASTDATE']; ?></td>
                    <td class="border px-4 py-2">
                        <img class="hover:scale-105 transition ease-in-out delay-150 object-cover  drop-shadow-2xl w-full h-32"
                            src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode(
                            $cuti['PICTURE']
                        ); ?>" />
                    </td>
                    <td class="border px-4 py-2 color-white 
                    <?php
                    if($cuti['STATUS'] == 0){
                        echo "bg-none";
                    }else if($cuti['STATUS'] == 1){
                        echo "bg-green-200";
                    }else if($cuti['STATUS'] == 2){
                        echo "bg-red-200";
                    }
                    ?>
                    font-bold text-center align-middle">
                        <?php
                        if($cuti['STATUS'] == 0){
                            echo "Pending";
                        }else if($cuti['STATUS'] == 1){
                            echo "Approved";
                        }else if($cuti['STATUS'] == 2){
                            echo "Rejected";
                        }
                        ?>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include './Components/foot.php'; ?>