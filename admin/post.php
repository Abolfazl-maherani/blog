<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>پست</title>
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
                <div class="add"><a href="#">افزودن نام کاربری</a></d                                                                                                                                                                                                                                                                           iv>
                </div>
                <div class="middle item_asd row">
                    <a href="index.php" class="stitle item_link "><i class="ico fa fa-credit-card-alt "></i> داشبورد</a>

                    <a href="content.php" class="stitle item_link"><i class="ico fa fa-video-camera"></i> محتوا ها</a>
                    <a href="post.php" class="stitle item_link active "><i class="ico fa fa-comment"></i> افزودن پست</a>
                    <a href="category.php" class="stitle item_link"><i class="ico fa fa-send"></i> دسته بندی</a>
                    <a href="comment.php" class="stitle item_link"><i class="ico fa fa-pie-chart"></i> دیدگاه</a>
                    <a href="menu.php" class="stitle item_link"><i class="ico fa fa-ellipsis-h"></i> منو</a>
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
    <div class="container">
    <div class="bx_menu span-md-12 ">
        <fieldset class="">
            <legend>انتشار پست</legend>
            <form action="#" method="post" class="frm_m">
                <input type="text" placeholder="عنوان پست" name="title" title="نام عنوان را وارد کنید">
                <textarea rows="10" cols="10" type="text" placeholder="توضیحات " name="description" title="توضیحات مربوط به ان را وارد کنید"></textarea>
                <input type="file" name="upload" accept="image/*">
                <select name="parent" id="parent">
                    <option value="نام لیست مادر">دسته بندی</option>
                </select>
                <input type="text" placeholder="برچسب ها" name="hashtag" title="برچسب را وارد کنید">
                <button type="submit">انتشار</button>
                <button type="reset">پاک کردن</button>
            </form>
        </fieldset>
    </div>
    </div>
</section>

</body>
</html>