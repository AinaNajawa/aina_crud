<?php include './Components/head.php'; ?>
<?php
if(!isset($_SESSION['ADMIN'])){
    header('Location: ./login.php');
}else if($_SESSION['ADMIN'] != 1){
    header('Location: ./user.php');
}
?>
<div class="flex min-h-full flex-col px-6 py-12 lg:px-8 bg-blue-200 h-screen">
    <div class="flex justify-between align-middle bg-white p-4 shadow rounded-lg">
        <h1 class="text-2xl font-bold">DETAILS</h1>
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
                <tr>
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">Adam</td>
                    <td class="border px-4 py-2">1234567890</td>
                    <td class="border px-4 py-2">2021-01-01</td>
                    <td class="border px-4 py-2">2021-01-01</td>
                    <td class="border px-4 py-2">Picture</td>
                    <td class="border px-4 py-2">Pending</td>
                    <td class="border px-4 py-2">
                        <button class="w-full p-3 bg-blue-200 color-white font-bold">
                            Approve
                        </button>
                        <button class="w-full p-3 bg-red-200 color-white font-bold">
                            Reject
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">2</td>
                    <td class="border px-4 py-2">Eve</td>
                    <td class="border px-4 py-2">1234567890</td>
                    <td class="border px-4 py-2">2021-01-01</td>
                    <td class="border px-4 py-2">2021-01-01</td>
                    <td class="border px-4 py-2">Picture</td>
                    <td class="border px-4 py-2 bg-green-200 color-white font-bold text-center align-middle">
                        Approved</td>
                    <td class="border px-4 py-2">
                        <button class="w-full p-3 bg-blue-200 color-white font-bold">
                            Approve
                        </button>
                        <button class="w-full p-3 bg-red-200 color-white font-bold">
                            Reject
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">3</td>
                    <td class="border px-4 py-2">John</td>
                    <td class="border px-4 py-2">1234567890</td>
                    <td class="border px-4 py-2">2021-01-01</td>
                    <td class="border px-4 py-2">2021-01-01</td>
                    <td class="border px-4 py-2">Picture</td>
                    <td class="border px-4 py-2 bg-red-200 color-white font-bold text-center align-middle">
                        Rejected</td>
                    <td class="border px-4 py-2">
                        <button class="w-full p-3 bg-blue-200 color-white font-bold">
                            Approve
                        </button>
                        <button class="w-full p-3 bg-red-200 color-white font-bold">
                            Reject
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include './Components/foot.php'; ?>