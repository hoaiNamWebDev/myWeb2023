<div class="boxcenter">
    <div class="row mb">
        <div class="boxtrai mr">
            <?php include "../view/boxleft.php"; ?>
        </div>
        <div class="boxphai">
            <div class="row mb">
                <div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>
                <div class="row boxcontent cart">
                    <table>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Ngày đặt</th>
                            <th>Số lượng đặt hàng</th>
                            <th>Tổng giá trị đơn hàng</th>
                            <th>Tình trạng đơn hàng</th>
                        </tr>

                        <?php
                            if(is_array($listbill)){
                                foreach($listbill as $bill){
                                    extract($bill);
                                    $ttdh=get_ttdh($bill['bill_status']);
                                    $countsp=loadall_cart_count($bill['id']);
                                    echo '<tr>
                                            <td>DH-'.$bill['id'].'</td>
                                            <td>'.$bill['ngaydathang'].'</td>
                                            <td>'.$countsp.'</td>
                                            <td>'.$bill['total'].'</td>
                                            <td>'.$ttdh.'</td>
                                        </tr>';
                                }
                            }
                        ?>
                        
                    </table>
                </div>
            </div>
        </div>
</div>