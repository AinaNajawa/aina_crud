<?php include './Components/head.php'; ?>
<?php
if(!isset($_SESSION['ADMIN'])){
    header('Location: ./login.php');
}else if($_SESSION['ADMIN'] != 1){
    header('Location: ./user.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cuti_id = isset($_POST['cuti_id']) ? $_POST['cuti_id'] : null;
    $status = isset($_POST['status']) ? $_POST['status'] : null;

    if(isset($_POST['delete'])){
        $query = "DELETE FROM cuti WHERE ID=$cuti_id";
    }else{
        $query = "UPDATE cuti SET STATUS=$status WHERE ID=$cuti_id";
    }
    mysqli_query($con, $query);
}

?>
<div class="flex min-h-full flex-col px-6 py-12 lg:px-8 bg-blue-200 h-screen">
    <div class="flex justify-between align-middle bg-white p-4 shadow rounded-lg">
        <h1 class="text-2xl font-bold">DETAILS</h1>
        <!-- create a button that go to login.php -->
        <a href="./login.php">
        <button type="submit" name="logout" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                Logout
            </button>
        </a>
    </div>

    <div class="flex justify-between align-middle bg-white p-4 mt-4 shadow rounded-lg" style="overflow: auto;">
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Full Name</th>
                    <th class="px-4 py-2">Phone Number</th>
                    <th class="px-4 py-2">First Date</th>
                    <th class="px-4 py-2">Last Date</th>
                    <th class="px-4 py-2">Picture</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $query = "SELECT * FROM cuti";
                $result = mysqli_query($con, $query);
                while($cuti = mysqli_fetch_array($result)){
                    ?>
                <tr>
                    <td class="border px-4 py-2"><?php echo $cuti['ID']; ?></td>
                    <?php
                    $id = $cuti['IDUSER'];
                    $query2 = "SELECT * FROM users WHERE ID='$id'";
                    $result2 = mysqli_query($con, $query2);
                    $user = mysqli_fetch_array($result2);
                    ?>
                    <td class="border px-4 py-2"><?php echo $user['NAME']; ?></td>
                    <td class="border px-4 py-2"><?php echo $user['PHONENUMBER']; ?></td>
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
                    <td class="border px-4 py-2">
                        <form method="post">
                            <input type="hidden" name="cuti_id" value="<?php echo $cuti['ID']; ?>">
                            <input type="hidden" name="status" value="1">
                            <button type="submit" class="w-full p-3 bg-blue-200 color-white font-bold">
                                Approve
                            </button>
                        </form>
                        <form method="post">
                            <input type="hidden" name="cuti_id" value="<?php echo $cuti['ID']; ?>">
                            <input type="hidden" name="status" value="2">
                            <button type="submit" class="w-full p-3 bg-red-200 color-white font-bold">
                                Reject
                            </button>
                        </form>
                        <form method="post">
                            <input type="hidden" name="cuti_id" value="<?php echo $cuti['ID']; ?>">
                            <input type="hidden" name="delete" value="1">
                            <button type="submit" class="w-full p-3 bg-gray-200 color-white font-bold">
                                Delete
                            </button>
                        </form>
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