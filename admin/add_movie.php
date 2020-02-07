<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>داشبورد</title>-->
<!--    <link rel="stylesheet" href="font/fontawesome-free-5.9.0-web/css/font-awesome.min.css">-->
<!--    <link rel="stylesheet" href="style/responsive.css">-->
<!--    <link rel="stylesheet" href="style/normalize.css">-->
<!--    <link rel="stylesheet" href="style/style_up.css">-->

<!--</head>-->
<!--<body>-->
<!--&lt;!&ndash;    <div class="container">&ndash;&gt;-->
<!--&lt;!&ndash;        <div class="box_up">&ndash;&gt;-->
<!--&lt;!&ndash;            <form action="#" method="post" class="frm_comment" id="frm_comment">&ndash;&gt;-->

<!--&lt;!&ndash;                <input id="name_comment" class="news_r" type="text" placeholder="عنوان"   name="name_comment">&ndash;&gt;-->
<!--&lt;!&ndash;                <input class="news_r" placeholder="دسته بندی" type="email" id="email_comment">&ndash;&gt;-->
<!--&lt;!&ndash;                &ndash;&gt;-->
<!--&lt;!&ndash;                <textarea name="comment" aria-required="true" placeholder="نظرات..." class="news_r"&ndash;&gt;-->
<!--&lt;!&ndash;                          id="comment"></textarea>&ndash;&gt;-->
<!--&lt;!&ndash;                <button type="submit" class="news_r" id="btn_comment">ارسال نظر</button>&ndash;&gt;-->
<!--&lt;!&ndash;            </form>&ndash;&gt;-->
<!--&lt;!&ndash;        </div>&ndash;&gt;-->
<!--&lt;!&ndash;    </div>&ndash;&gt;-->

<!--</body>-->
<!--</html>-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="Web based File Manager in PHP, Manage your files efficiently and easily with Tiny File Manager">
    <meta name="author" content="CCP Programmers">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <link rel="icon" href="<?php echo fm_enc($favicon_path) ?>" type="image/png">
    <title><?php echo fm_enc(APP_TITLE) ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"/>
    <?php if (FM_USE_HIGHLIGHTJS): ?>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/styles/<?php echo FM_HIGHLIGHTJS_STYLE ?>.min.css">
    <?php endif; ?>
    <style>
        body {
            font-size: 14px;
            color: #222;
            background: #F7F7F7;
        }

        body.navbar-fixed {
            margin-top: 55px;
        }

        a:hover, a:visited, a:focus {
            text-decoration: none !important;
        }

        * {
            -webkit-border-radius: 0 !important;
            -moz-border-radius: 0 !important;
            border-radius: 0 !important;
        }

        .filename, td, th {
            white-space: nowrap
        }

        .navbar-brand {
            font-weight: bold;
        }

        .nav-item.avatar a {
            cursor: pointer;
            text-transform: capitalize;
        }

        .nav-item.avatar a > i {
            font-size: 15px;
        }

        .nav-item.avatar .dropdown-menu a {
            font-size: 13px;
        }

        #search-addon {
            font-size: 12px;
            border-right-width: 0;
        }

        #search-addon2 {
            background: transparent;
            border-left: 0;
        }

        .bread-crumb {
            color: #cccccc;
            font-style: normal;
        }

        #main-table .filename a {
            color: #222222;
        }

        .table td, .table th {
            vertical-align: middle !important;
        }

        .table .custom-checkbox-td .custom-control.custom-checkbox, .table .custom-checkbox-header .custom-control.custom-checkbox {
            min-width: 18px;
        }

        .table-sm td, .table-sm th {
            padding: .4rem;
        }

        .table-bordered td, .table-bordered th {
            border: 1px solid #f1f1f1;
        }

        .hidden {
            display: none
        }

        pre.with-hljs {
            padding: 0
        }

        pre.with-hljs code {
            margin: 0;
            border: 0;
            overflow: visible
        }

        code.maxheight, pre.maxheight {
            max-height: 512px
        }

        .fa.fa-caret-right {
            font-size: 1.2em;
            margin: 0 4px;
            vertical-align: middle;
            color: #ececec
        }

        .fa.fa-home {
            font-size: 1.3em;
            vertical-align: bottom
        }

        .path {
            margin-bottom: 10px
        }

        form.dropzone {
            min-height: 200px;
            border: 2px dashed #007bff;
            line-height: 6rem;
        }

        .right {
            text-align: right
        }

        .center, .close, .login-form {
            text-align: center
        }

        .message {
            padding: 4px 7px;
            border: 1px solid #ddd;
            background-color: #fff
        }

        .message.ok {
            border-color: green;
            color: green
        }

        .message.error {
            border-color: red;
            color: red
        }

        .message.alert {
            border-color: orange;
            color: orange
        }

        .preview-img {
            max-width: 100%;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAKklEQVR42mL5//8/Azbw+PFjrOJMDCSCUQ3EABZc4S0rKzsaSvTTABBgAMyfCMsY4B9iAAAAAElFTkSuQmCC)
        }

        .inline-actions > a > i {
            font-size: 1em;
            margin-left: 5px;
            background: #3785c1;
            color: #fff;
            padding: 3px;
            border-radius: 3px
        }

        .preview-video {
            position: relative;
            max-width: 100%;
            height: 0;
            padding-bottom: 62.5%;
            margin-bottom: 10px
        }

        .preview-video video {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background: #000
        }

        .compact-table {
            border: 0;
            width: auto
        }

        .compact-table td, .compact-table th {
            width: 100px;
            border: 0;
            text-align: center
        }

        .compact-table tr:hover td {
            background-color: #fff
        }

        .filename {
            max-width: 420px;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .break-word {
            word-wrap: break-word;
            margin-left: 30px
        }

        .break-word.float-left a {
            color: #7d7d7d
        }

        .break-word + .float-right {
            padding-right: 30px;
            position: relative
        }

        .break-word + .float-right > a {
            color: #7d7d7d;
            font-size: 1.2em;
            margin-right: 4px
        }

        #editor {
            position: absolute;
            right: 15px;
            top: 100px;
            bottom: 15px;
            left: 15px
        }

        @media (max-width: 481px) {
            #editor {
                top: 150px;
            }
        }

        #normal-editor {
            border-radius: 3px;
            border-width: 2px;
            padding: 10px;
            outline: none;
        }

        .btn-2 {
            border-radius: 0;
            padding: 3px 6px;
            font-size: small;
        }

        li.file:before, li.folder:before {
            font: normal normal normal 14px/1 FontAwesome;
            content: "\f016";
            margin-right: 5px
        }

        li.folder:before {
            content: "\f114"
        }

        i.fa.fa-folder-o {
            color: #0157b3
        }

        i.fa.fa-picture-o {
            color: #26b99a
        }

        i.fa.fa-file-archive-o {
            color: #da7d7d
        }

        .btn-2 i.fa.fa-file-archive-o {
            color: inherit
        }

        i.fa.fa-css3 {
            color: #f36fa0
        }

        i.fa.fa-file-code-o {
            color: #007bff
        }

        i.fa.fa-code {
            color: #cc4b4c
        }

        i.fa.fa-file-text-o {
            color: #0096e6
        }

        i.fa.fa-html5 {
            color: #d75e72
        }

        i.fa.fa-file-excel-o {
            color: #09c55d
        }

        i.fa.fa-file-powerpoint-o {
            color: #f6712e
        }

        i.go-back {
            font-size: 1.2em;
            color: #007bff;
        }

        .main-nav {
            padding: 0.2rem 1rem;
            box-shadow: 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12), 0 2px 4px -1px rgba(0, 0, 0, .2)
        }

        .dataTables_filter {
            display: none;
        }

        table.dataTable thead .sorting {
            cursor: pointer;
            background-repeat: no-repeat;
            background-position: center right;
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAQAAADYWf5HAAAAkElEQVQoz7XQMQ5AQBCF4dWQSJxC5wwax1Cq1e7BAdxD5SL+Tq/QCM1oNiJidwox0355mXnG/DrEtIQ6azioNZQxI0ykPhTQIwhCR+BmBYtlK7kLJYwWCcJA9M4qdrZrd8pPjZWPtOqdRQy320YSV17OatFC4euts6z39GYMKRPCTKY9UnPQ6P+GtMRfGtPnBCiqhAeJPmkqAAAAAElFTkSuQmCC');
        }

        table.dataTable thead .sorting_asc {
            cursor: pointer;
            background-repeat: no-repeat;
            background-position: center right;
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAZ0lEQVQ4y2NgGLKgquEuFxBPAGI2ahhWCsS/gDibUoO0gPgxEP8H4ttArEyuQYxAPBdqEAxPBImTY5gjEL9DM+wTENuQahAvEO9DMwiGdwAxOymGJQLxTyD+jgWDxCMZRsEoGAVoAADeemwtPcZI2wAAAABJRU5ErkJggg==');
        }

        table.dataTable thead .sorting_desc {
            cursor: pointer;
            background-repeat: no-repeat;
            background-position: center right;
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAZUlEQVQ4y2NgGAWjYBSggaqGu5FA/BOIv2PBIPFEUgxjB+IdQPwfC94HxLykus4GiD+hGfQOiB3J8SojEE9EM2wuSJzcsFMG4ttQgx4DsRalkZENxL+AuJQaMcsGxBOAmGvopk8AVz1sLZgg0bsAAAAASUVORK5CYII=');
        }

        table.dataTable thead tr:first-child th.custom-checkbox-header:first-child {
            background-image: none;
        }

        .footer-action li {
            margin-bottom: 10px;
        }

        .app-v-title {
            font-size: 24px;
            font-weight: 300;
            letter-spacing: -.5px;
            text-transform: uppercase;
        }

        hr.custom-hr {
            border-top: 1px dashed #8c8b8b;
            border-bottom: 1px dashed #fff;
        }

        .ekko-lightbox .modal-dialog {
            max-width: 98%;
        }

        .ekko-lightbox-item.fade.in.show .row {
            background: #fff;
        }

        .ekko-lightbox-nav-overlay {
            display: flex !important;
            opacity: 1 !important;
            height: auto !important;
            top: 50%;
        }

        .ekko-lightbox-nav-overlay a {
            opacity: 1 !important;
            width: auto !important;
            text-shadow: none !important;
            color: #3B3B3B;
        }

        .ekko-lightbox-nav-overlay a:hover {
            color: #20507D;
        }

        #snackbar {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
        }

        #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }
            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }
            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }
            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }
            to {
                bottom: 0;
                opacity: 0;
            }
        }

        #main-table span.badge {
            border-bottom: 2px solid #f8f9fa
        }

        #main-table span.badge:nth-child(1) {
            border-color: #df4227
        }

        #main-table span.badge:nth-child(2) {
            border-color: #f8b600
        }

        #main-table span.badge:nth-child(3) {
            border-color: #00bd60
        }

        #main-table span.badge:nth-child(4) {
            border-color: #4581ff
        }

        #main-table span.badge:nth-child(5) {
            border-color: #ac68fc
        }

        #main-table span.badge:nth-child(6) {
            border-color: #45c3d2
        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 2) {
            .navbar-collapse .col-xs-6.text-right {
                padding: 0;
            }
        }

        .btn.active.focus, .btn.active:focus, .btn.focus, .btn.focus:active, .btn:active:focus, .btn:focus {
            outline: 0 !important;
            outline-offset: 0 !important;
            background-image: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important
        }

        .lds-facebook {
            display: none;
            position: relative;
            width: 64px;
            height: 64px
        }

        .lds-facebook div, .lds-facebook.show-me {
            display: inline-block
        }

        .lds-facebook div {
            position: absolute;
            left: 6px;
            width: 13px;
            background: #007bff;
            animation: lds-facebook 1.2s cubic-bezier(0, .5, .5, 1) infinite
        }

        .lds-facebook div:nth-child(1) {
            left: 6px;
            animation-delay: -.24s
        }

        .lds-facebook div:nth-child(2) {
            left: 26px;
            animation-delay: -.12s
        }

        .lds-facebook div:nth-child(3) {
            left: 45px;
            animation-delay: 0
        }

        @keyframes lds-facebook {
            0% {
                top: 6px;
                height: 51px
            }
            100%, 50% {
                top: 19px;
                height: 26px
            }
        }

        ul#search-wrapper {
            padding-left: 0;
            border: 1px solid #ecececcc;
        }

        ul#search-wrapper li {
            list-style: none;
            padding: 5px;
            border-bottom: 1px solid #ecececcc;
        }

        ul#search-wrapper li:nth-child(odd) {
            background: #f9f9f9cc;
        }

        .c-preview-img {
            max-width: 300px;
        }
    </style>
</head>
<body class="<?php echo $isStickyNavBar; ?>">
<div id="wrapper" class="container-fluid">

    <!-- New Item creation -->
    <div class="modal fade" id="createNewItem" tabindex="-1" role="dialog" aria-label="newItemModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newItemModalLabel"><i
                            class="fa fa-plus-square fa-fw"></i><?php echo lng('CreateNewItem') ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><label for="newfile"><?php echo lng('ItemType') ?> </label></p>

                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="newfile" value="file"
                               class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1"><?php echo lng('File') ?></label>
                    </div>

                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="newfile" value="folder"
                               class="custom-control-input" checked="">
                        <label class="custom-control-label" for="customRadioInline2"><?php echo lng('Folder') ?></label>
                    </div>

                    <p class="mt-3"><label for="newfilename"><?php echo lng('ItemName') ?> </label></p>
                    <input type="text" name="newfilename" id="newfilename" value="" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal"><i
                            class="fa fa-times-circle"></i> <?php echo lng('Cancel') ?></button>
                    <button type="button" class="btn btn-success"
                            onclick="newfolder('<?php echo fm_enc(FM_PATH) ?>');return false;"><i
                            class="fa fa-check-circle"></i> <?php echo lng('CreateNow') ?></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-10" id="searchModalLabel">
                        <div class="input-group input-group">
                            <input type="text" class="form-control" placeholder="<?php echo lng('Search') ?> a files"
                                   aria-label="<?php echo lng('Search') ?>" aria-describedby="search-addon3"
                                   id="advanced-search" autofocus required>
                            <div class="input-group-append">
                                <span class="input-group-text" id="search-addon3"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="lds-facebook">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <ul id="search-wrapper">
                            <p class="m-2">Search file in folder and subfolders...</p>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/html" id="js-tpl-modal">
        <div class="modal fade" id="js-ModalCenter-<%this.id%>" tabindex="-1" role="dialog"
             aria-labelledby="ModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalCenterTitle"><%this.title%></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <%this.content%>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal"><i
                                class="fa fa-times-circle"></i> <?php echo lng('Cancel') ?></button>
                        <%if(this.action){%>
                        <button type="button" class="btn btn-primary" id="js-ModalCenterAction"
                                data-type="js-<%this.action%>"><%this.action%>
                        </button>
                        <%}%>
                    </div>
                </div>
            </div>
        </div>
    </script>
</div>
</body>
</html>