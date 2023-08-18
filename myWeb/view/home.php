<div class="boxcenter">
    <div class="row">

        <div class="row mb">
            <div class="boxtrai mr">
                <?php
                include "boxleft.php";
                ?>
                <script>
                    $(document).ready(function() {
                        $('[data-toggle="tooltip"]').tooltip();
                    });
                </script>
            </div>

            <div class="boxphai">
                <div class="row">
                    <div class="banner">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                            <!-- Full-width images with number and caption text -->
                            <div class="mySlides fade">
                                <!-- <div class="numbertext">1 / 3</div> -->
                                <img src="upload/nam2.jpg" alt="" style="width:100%">
                                <div class="text">Nguyễn Hoài Nam</div>
                            </div>

                            <div class="mySlides fade">
                                <!-- <div class="numbertext">2 / 3</div> -->
                                <img src="upload/nam.jpg" style="width:100%">
                                <div class="text">Nguyễn Hoài Nam</div>
                            </div>

                            <div class="mySlides fade">
                                <!-- <div class="numbertext">3 / 3</div> -->
                                <img src="upload/nam3.jpg" style="width:100%">
                                <div class="text">Nguyễn Hoài Nam</div>
                            </div>

                            <!-- Next and previous buttons -->
                            <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="boxsp '.$mr.'">
                        <div class="row_img">
                            <a href="'.$linksp.'">
                                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/NshiidkTnXI?autoplay=1&mute=1"></iframe>
                                <!-- <img src="https://i.pinimg.com/750x/91/20/28/9120286173e0d7c343e7378c73865f15.jpg" alt=""> -->
                            </a>
                        </div>

                        <a class="row_a-name" data-toggle="tooltip" href="https://youtu.be/NshiidkTnXI"title="Video Báo cáo demo nhỏ kiểm thự tự động">
                            Video Báo cáo demo nhỏ kiểm thử tự động</a>
                        <p class="boxsp-gia">CT244 Bảo trì phần mềm</p>
                        <i class="fa-solid fa-eye"> 22</i>  <i class="fa-solid fa-heart"> 22</i>
                        <br>                    
                        <input type="button" name="addtocart" value="Khám phá ngay">
                          
                    </div>
                    
                    <div class="boxsp '.$mr.'">
                        <div class="row_img">
                            <a href="'.$linksp.'">
                                <iframe width="100%" height="auto" src="https://youtube.com/embed/L_f01lJZEYM?autoplay=1&mute=1"></iframe>
                                <!-- <img src="https://i.pinimg.com/750x/91/20/28/9120286173e0d7c343e7378c73865f15.jpg" alt=""> -->
                            </a>
                        </div>
                        
                        <a class="row_a-name" data-toggle="tooltip" href="https://youtu.be/L_f01lJZEYM" title="Video Báo cáo demo Mô phỏng bệnh sốt xuất huyết">
                            Video Báo cáo demo Mô phỏng bệnh sốt xuất huyết</a>
                        <p class="boxsp-gia">CT189 Nhập môn mô phỏng</p>
                        <i class="fa-solid fa-eye"> 22</i>  <i class="fa-solid fa-heart"> 22</i>
                        <br>
                        <input type="button" name="addtocart" value="Khám phá ngay">
                    </div>
                    
                    <div class="boxsp '.$mr.'">
                        <div class="row_img">
                            <a href="'.$linksp.'">
                                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/jr56DtWCAMQ"></iframe>
                                <!-- <img src="https://i.pinimg.com/750x/91/20/28/9120286173e0d7c343e7378c73865f15.jpg" alt=""> -->
                            </a>
                        </div>
                        
                        <a class="row_a-name" data-toggle="tooltip" href="https://youtu.be/jr56DtWCAMQ" title="Video Báo cáo demo nhỏ tìm và sửa lỗi">
                            Video Báo cáo demo nhỏ tìm và sửa lỗi</a>
                        <p class="boxsp-gia">CT243 Đảm bảo chất lượng và kiểm thử phần mềm</p>
                        <i class="fa-solid fa-eye"> 22</i>  <i class="fa-solid fa-heart"> 22</i>
                        <br>
                        <input type="button" name="addtocart" value="Khám phá ngay">
                    </div>
                                        
                    <div class="boxsp '.$mr.'">
                        <div class="row_img">
                            <a href="'.$linksp.'">
                                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/W0IpdQkrc8M"></iframe>                   
                            </a>
                        </div>
                        
                        <a class="row_a-name" data-toggle="tooltip" href="https://youtu.be/W0IpdQkrc8M" title="Video Báo cáo demo Quản lý quán nước">
                            Video Báo cáo demo Quản lý quán nước - Java</a>
                        <p class="boxsp-gia">CT276 Lập trình Java</p>
                        <i class="fa-solid fa-eye"> 22</i>  <i class="fa-solid fa-heart"> 22</i>
                        <br>
                        <input type="button" name="addtocart" value="Khám phá ngay">
                    </div>
                    


                </div>
                <div class="row btn">
                    <a href='index.php?act=more&num=<?= $i + 4 ?>#loadSPMore'>
                        <!-- <input class="loadSPMore" id="loadSPMore" type="button" value="Thêm"> -->
                    </a>
                </div>


            </div> <!-- end boxphai -->

        </div>

    </div>

</div>