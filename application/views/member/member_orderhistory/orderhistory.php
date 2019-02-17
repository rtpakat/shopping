<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<center><h1 style="font-family:Kanit"><span>รายละเอียดการซื้อสินค้า</span></h1></center><br><br>
	<div class="container ">
    
<table id="table_id" class="display" style="font-weight: 500;">
    <thead>
        <tr>
            <th style="font-weight: 500;">รหัสการสั่งซื้อสินค้า</th>
            <th style="font-weight: 500;">ราคาในการซื้อ</th>
            <th style="font-weight: 500;">รายละเอียดอื่นๆ</th>
            <th style="font-weight: 500;">สถานะยืนยันการรับสินค้า</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>HIS01</td>
            <td>500฿</td>
            <td>dsfsdfsssssssssssssdfsdf</td>
            <td>กำลังจัดส่ง</td>
        </tr>
        <tr>
            <td>HIS02</td>
            <td>500฿</td>
            <td>CsdfsdfsdOsdfsdfDEsdfsdfsdfsdf02</td>
            <td>กำลังจัดส่ง</td>
        </tr>
        <tr>
            <td>HIS03</td>
            <td>500฿</td>
            <td>fsdfsdfsdsdfCODfsdfsdE03</td>
            <td>กำลังกำเนินการ</td>
        </tr>
    </tbody>
</table>
</div>
<br><br>

<script>
$(document).ready( function () {
    $('#table_id').DataTable({ "lengthChange": false});
} );

$("#Cart").hide();
</script>