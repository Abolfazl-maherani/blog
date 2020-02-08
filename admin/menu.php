<?php include('config/database.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>داشبورد</title>
    <link rel="stylesheet" href="font/fontawesome-free-5.9.0-web/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/responsive.css">
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<div class="clear">
    <aside>
        <div class="box_content">
            <div class="top row item_asd">
                <div class="avatar row">
                    <a href="#"><img class="picture" src="img/avt.png" alt=""></a>
                    <a href="#" class="setting_ico sub_avatar"><i class="fa fa-spin fa-cog ico "></i></a>
                    <a href="" class="sub_avatar filemanager"><i class="fa  fa-folder-o  ico"></i></a>

                </div>
                <div class="add"><a href="#">افزودن نام کاربری</a></d
                    iv>
                </div>
                <div class="middle item_asd row">
                    <a href="index.php" class="stitle item_link "><i class="ico fa fa-credit-card-alt "></i> داشبورد</a>
                    <a href="content.php" class="stitle item_link"><i class="ico fa fa-video-camera"></i> محتوا ها</a>
                    <a href="post.php" class="stitle item_link"><i class="ico fa fa-comment"></i> افزودن پست</a>
                    <a href="category.php" class="stitle item_link"><i class="ico fa fa-send"></i> دسته بندی</a>
                    <a href="comment.php" class="stitle item_link"><i class="ico fa fa-pie-chart"></i> دیدگاه</a>
                    <a href="menu.php" class="stitle item_link active"><i class="ico fa fa-ellipsis-h"></i> منو</a>
                    <a href="#" class="stitle item_link"><i class="ico fa fa-power-off"></i> خروج</a>

                </div>
            </div>
        </div>
    </aside>
</div>
<section>
    <div class="analyse_box row">
        <div class="span-md-3  sec_box an_box">
            <span class="title">0</span>
            <h4 class="title_red">پست های من</h4>
        </div>
        <div class="span-md-3 sec_box  an_box">
            <span class="title">0</span>
            <h4 class="title_red">دسته بندی ها</h4>
        </div>
        <div class="span-md-3  sec_box an_box">
            <span class="title">0</span>
            <h4 class="title_red">تعداد اعضا</h4>
        </div>
        <div class="span-md-3 sec_box  an_box">
            <span class="title">0</span>
            <h4 class="title_red">نظرات</h4>
        </div>

    </div>
    <!--    adminpanel  menubox-->
    <div class="container d_flex">
        <div class="bx_menu span-md-6 ">
            <fieldset class="">
                <legend>ایجاد منو</legend>
                <form action="action/saveMenu.php" method="POST" class="frm_m">
                    <input type="text" placeholder="عنوان " name="title" title="نام منو را وارد کنید">
<!--                    <input type="number" placeholder="ترتیب " name="order" title="ترتیب منو">-->
                    <input type="text" placeholder="ادرس" name="address" title="ادرس">
                    <textarea rows="10" cols="10" type="text" placeholder="توضیحات " name="description"
                              title="توضیحات مربوط به ان را وارد کنید"></textarea>
                    <select name="parent" id="parent">
                        <option value="نام لیست مادر">لیست منو مادر</option>
                    </select>
                    <button type="submit">انتشار</button>
                    <button type="reset">پاک کردن</button>
                </form>
            </fieldset>
        </div>
        <!--        list menu-->
        <div class="bx_menu  span-md-6 ">
            <fieldset class="list_fieldset">
                <legend>لیست منو</legend>
                <div class="box_list">
                    <?php
            $selectQuery=mysqli_query($connection,$squery.'category_tbl');


            while ($row =mysqli_fetch_assoc($selectQuery)){
           ?>
                    <div class="item_list">
                        <div class="list_text">
                            <h5 class="list_title"><?php echo $row['name'] ?> </h5>
                        </div>
                        <div class="list_ico">
                            <a title="edit"><i class="fa fa-edit good_ico"></i></a>
                            <a href="action/deleteaction.php?id=<?php echo $row['id']?>" title="delete"><i class="fa fa-close bad_ico"></i></a>
                        </div>

                    </div>
                    <?php
                    }

                    ?>

                </div>
            </fieldset>
        </div>
    </div>
</section>
</body>
</html>