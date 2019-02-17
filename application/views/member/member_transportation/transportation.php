<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<center><h1 style="font-family:Kanit"><span>รายละเอียดการจัดส่ง</span></h1></center><br><br>
	<div class="container ">
    
<table id="table_id" class="display" style="font-weight: 500;">
    <thead>
        <tr>
            <th style="font-weight: 500;">รหัสใบสั่งสินค้า</th>
            <th style="font-weight: 500;">ราคาในการขนส่ง</th>
            <th style="font-weight: 500;">รหัส</th>
            <th style="font-weight: 500;">สถานะในการจัดส่ง</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Order01</td>
            <td>500฿</td>
            <td>CODE01</td>
            <td>กำลังจัดส่ง</td>
        </tr>
        <tr>
            <td>Order02</td>
            <td>500฿</td>
            <td>CODE02</td>
            <td>กำลังจัดส่ง</td>
        </tr>
        <tr>
            <td>Order03</td>
            <td>500฿</td>
            <td>CODE03</td>
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