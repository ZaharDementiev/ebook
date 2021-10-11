<!DOCTYPE html>
<html>
<head>
    <title>Pedggie</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="/testdata/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml-full.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body id="top">

<style>
    .teacher-only-input {
        display: none;
    }
</style>

<div class="wrapper row0">
    <div id="topbar" class="hoc clear">
        <div class="fl_left">
            <ul class="nospace inline pushright">
                <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
                <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
            </ul>
        </div>
        <div class="fl_right">
            <ul class="faico clear">
                <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="wrapper row1">
    <header id="header" class="hoc clear">
        <div id="logo" class="fl_left">
            <h1><a href="index.html">Pedggie</a></h1>
        </div>
        <div id="quickinfo" class="fl_right">
            <ul class="nospace inline">
                <li><strong>Faucibus:</strong><br>
                    +00 (123) 456 7890</li>
                <li><strong>Vehicula:</strong><br>
                    +00 (123) 456 7890</li>
            </ul>
        </div>
    </header>
</div>
<div class="wrapper row2">
    <nav id="mainav" class="hoc clear">
        <ul class="clear">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a class="drop" href="#">Pages</a>
                <ul>
                    <li><a href="pages/gallery.html">Gallery</a></li>
                    <li><a href="pages/full-width.html">Full Width</a></li>
                    <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
                    <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
                    <li><a href="pages/basic-grid.html">Basic Grid</a></li>
                </ul>
            </li>
            <li><a class="drop" href="#">Dropdown</a>
                <ul>
                    <li><a href="#">Level 2</a></li>
                    <li><a class="drop" href="#">Level 2 + Drop</a>
                        <ul>
                            <li><a href="#">Level 3</a></li>
                            <li><a href="#">Level 3</a></li>
                            <li><a href="#">Level 3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Level 2</a></li>
                </ul>
            </li>
            <li><a href="#">Link Text</a></li>
            <li><a href="#">Link Text</a></li>
            <li><a href="#">Link Text</a></li>
            <li><a href="#">Long Link Text</a></li>
        </ul>
    </nav>
</div>


<div class="wrapper bgded overlay"  style="background-color: yellow;">
    <div id="edit-math" class="hoc clear">
        @php echo $text; @endphp
    </div>
</div>

<div class="wrapper row4">
    <footer id="footer" class="hoc clear">
        <div class="one_third first">
            <h6 class="title">Ultricies turpis libero</h6>
            <ul class="nospace linklist contact">
                <li><i class="fa fa-map-marker"></i>
                    <address>
                        Street Name &amp; Number, Town, Postcode/Zip
                    </address>
                </li>
                <li><i class="fa fa-phone"></i> +00 (123) 456 7890<br>
                    +00 (123) 456 7890</li>
                <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
                <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
            </ul>
        </div>
        <div class="one_third">
            <h6 class="title">Egestas risus sed</h6>
            <ul class="nospace linklist">
                <li><a href="#">class aptent taciti sociosqu ad litora</a></li>
                <li><a href="#">per conubia nostra inceptos himenaeos</a></li>
                <li><a href="#">donec elit metus malesuada quis</a></li>
                <li><a href="#">molestie convallis cursus eros donec</a></li>
                <li><a href="#">elit turpis ornare auctor mattis feugiat</a></li>
            </ul>
        </div>
        <div class="one_third">
            <h6 class="title">Ultricies eros libero</h6>
            <p class="btmspace-30">Vitae lectus mauris dui ipsum rhoncus vitae semper quis ultrices in nibh.</p>
            <form method="post" action="#">
                <fieldset>
                    <legend>Newsletter:</legend>
                    <label>
                        <input class="btmspace-15" type="text" value="" placeholder="Name">
                    </label>
                    <input class="btmspace-15" type="text" value="" placeholder="Email">
                    <button type="submit" value="submit">Submit</button>
                </fieldset>
            </form>
        </div>
    </footer>
</div>
<div class="wrapper row5">
    <div id="copyright" class="hoc clear">
        <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">Domain Name</a></p>
        <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<script src="/testdata/layout/scripts/jquery.min.js"></script>
<script src="/testdata/layout/scripts/jquery.backtotop.js"></script>
<script src="/testdata/layout/scripts/jquery.mobilemenu.js"></script>
<script src="/testdata/layout/scripts/jquery.placeholder.min.js"></script>
<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function addSample(i)
    {
        var input = $('.input-' + i);
        var btn = $('.btn-' + i);
        input.show();
        $('<button onclick="cancelSample(' + i + ')" class="w3-btn w3-teal cancel-input-'+ i +'" style="color:black;"> Отмена </button>').insertAfter(btn);

        input.each(function (iter, obj) {
            $('<button onclick="saveSample(' + i + ', ' + (iter + 1) + ')" class="w3-btn w3-teal save-input" style="color:black;"> Подтвердить </button>').insertAfter(obj);
        });

        btn.hide();
    }

    function saveSample(number, subNumber)
    {
        storeAnswer(number, subNumber);
    }

    function cancelSample(i)
    {
        $('.input-' + i).hide();
        $('.save-input').remove();
        $('.cancel-input-' + i).remove();
        $('.btn-' + i).show();
    }

    function storeAnswer(number, subNumber)
    {
        $.ajax({
            type: "POST",
            url: "{{route('answer.store')}}",
            data: {
                answer: $('.answer-' + number + '-' + subNumber).val(),
                book_id: {!! json_encode($book->id) !!},
                number: number,
                sub_number: subNumber
            },
        })
    }
</script>
</body>
</html>
