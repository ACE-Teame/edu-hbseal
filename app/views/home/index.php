<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>北京大学汇丰商学院</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/main.css" media="all">
    <script type="text/javascript" src="css/jquery.min.js"></script>
    <?php echo css('main.css') ?>
</head>

<body>
    <div class="container">
        <div class="home">
            <div class="img"><img src="<?php echo image('p_01.jpg') ?>" alt=""></div>
            <div class="img"><img src="<?php echo image('p_02.jpg') ?>" alt=""></div>
            <div class="form">
                <div class="title">
                    <p>春季班预约</p>
                    <p>研修项目官方报名入口</p>
                </div>
                <div class="content">
                    <form id="form_contenct">
                        <div class="entry clear">
                            <label>姓名<span>*</span></label>
                            <input type="text" id="username" name="username" placeholder="">
                        </div>
                        <div class="entry clear">
                            <label>电话<span>*</span></label>
                            <input type="text" id="phone" name="phone" placeholder="">
                        </div>
                        <div class="entry clear">
                            <label>公司<span>*</span></label>
                            <input type="text" id="company" name="company" placeholder="">
                        </div>
                        <div class="entry clear">
                            <label>职务<span>*</span></label>
                            <input type="text" id="job" name="job" placeholder="">
                        </div>
                        <input type="hidden" name="c" value="<?php echo $c ?>">
                    </form>
                    <a class="btn" href="javascript:;" id="submit_contect" onclick="submit_contect()">提交</a>
                </div>
            </div>
            <div class="img"><img src="<?php echo image('p_04.jpg') ?>" alt=""></div>
            <div class="img"><img src="<?php echo image('p_05.jpg') ?>" alt=""></div>
            <div class="img"><img src="<?php echo image('p_06.jpg') ?>" alt=""></div>
            <div class="img"><img src="<?php echo image('p_07.jpg') ?>" alt=""></div>
            <div class="img"><img src="<?php echo image('p_08.jpg') ?>" alt=""></div>
            <!-- <div class="img"><img src="<?php echo image('p_09.jpg') ?>" alt=""></div> -->

            <div class="bottom">
                <div class="img"><img src="<?php echo image('p_10.jpg') ?>" alt=""></div>
                <div class="content">
                    <div class="tilte">联系我们</div>
                    <p>认真 创新 追求卓越</p>
                    <p><a href="tel:400-772-0111">400 - 772 - 0111</a></p>
                    <p style="font-size: 14px;">深圳市南山区西丽大学城北京大学汇丰商学院116-2室</p>
                </div>
            </div>
            <!-- <footer>
                <p></p>
            </footer> -->
        </div>
    </div>
    <?php echo js('jquery.min.js') ?>
	<script>
		function submit_contect() {
            $.ajax({
                url: '<?php echo base_url('index/submitContect') ?>',
                type: 'POST',
                dataType: 'json',
                data: $('#form_contenct').serialize(),
                success:function(data) {
                    if(data.status == 200) {
                        alert('申请成功');
                        location.reload();
                    }else {
                        alert(data.msg);
                    }
                }
            })
		}
    </script>
</body>
</html>