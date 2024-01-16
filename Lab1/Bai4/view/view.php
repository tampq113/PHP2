<div class="table_section padding_infor_info">
    <div class="table-responsive-sm">
        <table class="table">
<tr>
    <th class="font-weight-bold">#</th>
    <th class="font-weight-bold">Tài khoản</th>
    <th class="font-weight-bold">Mật Khẩu</th>
    <th class="font-weight-bold">Địa Chi</th>
    <th class="font-weight-bold">Số Điện Thoại</th>
    <th class="font-weight-bold">Căn Cước</th>
    <th class="font-weight-bold"></th>
</tr>
</tr>
</thead>
<tbody>
<?php

global $user;

foreach($user as $item){
    echo ' <tr>
          <td>'.$item['user_id'].'</td>
      <td>'.$item['user_name'].'</td>
      <td>'.$item['pass'].'</td>
      <td>'.$item['address'].'</td>
      <td>'.$item['phone'].'</td>
      <td>'.$item['idcard'].'</td>
      <td>
      <button type="submit" name="loked" class="btn btn-danger">Sửa</button>
       </td>
      </tr>';
}

?>
</tbody>
        </table>
        </div>
    </div>
