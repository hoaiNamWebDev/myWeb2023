<div class="boxcenter">
    <div class="row">
        <div class="row mb">
            <div class="boxtrai mr">
                <?php
                    include "boxleft.php";
                ?>
            </div>

            <div class="boxphai ">
                <div class="row mb">

                    <div class="boxtitle"> 
                        <a class= "del_under" href="index.php">TRANG CHỦ</a> > 
                        <a class= "del_under" href="index.php?act=tintuc">TÀI LIỆU</a> >
                        <a class= "del_under" href="index.php?act=tintuc"><?=$tenDoc?></a>
                        
                    </div>
                    <div class="row boxcontent">
                        <?php                                                                            
                            echo '<iframe src="'.$doc.'"
                                width="100%" height="480" allow="autoplay"></iframe>';
                            
                        ?>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>