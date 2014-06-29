<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=us-ascii"/>
    <meta http-equiv="Content-Script-Type" content="text/javascript"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>
    <meta http-equiv="Keywords" content=
    "acedemic, livia kohn, pines, three pines press, three, daoist, daosim, reprints, books, taoist, taoism, publishing"/>
    <meta http-equiv="Description" content=
    "Three Pines Press is an independent academic publishing company specializing in Daoist Studies."/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type=
    "text/javascript"></script>
    <title>Three Pines Press - {{ $page->title }}</title>
    <link href="{{ URL::to('/css/style.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-17717596-3']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
</head>

<body>
<div id="center">
    <div id="header">
        <h1>
            <a href="emails" target="mainframe" onclick="dslide();">Three Pines Press</a>
        </h1>
        <a href="emails"><img id="logo" src="{{ URL::to('/img/logo.gif') }}" alt="logo" border="0" name="logo"/></a>
    </div>

    <div id="menu">
        <ul class="tabs">
            <li><a href="{{ route('home') }}"><span>Home</span></a></li>
            @foreach ($navigation as $c)
                <li>
                    <a href="{{ route('category', ['category' => $c->slug]) }}"><span>{{ $c->name }}</span></a>
                    @if (count($c->pages) > 1)
                        <ul class='dropdown'>
                            @foreach ($c->pages as $p)
                                <li><a href="{{ route('page', ['category' => $c->slug, 'page' => $p->slug]) }}">{{ $p->title }}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>

    <div id="content">
        <div id="leftside">
            @if ($page->cover)
            <img src="{{ URL::to('/uploads/' . $page->cover->location) }}" alt="{{ $page->title }}" class="side-image">
            @endif
            <div id="search">
                <span>Book Search</span>

                <form action="{{ route('search') }}" method="POST">
                    <input type="text" name="query"><br>
                    <input type="submit" value="Search">
                </form>
            </div>

            <div id="callbox">
                <div>
                    Any Questions/Comments?
                </div>

                <div>
                    Contact the publishes or webmaster on the "Contact" page.
                </div>
            </div>
        </div>
        <div id="centerarea">
            <h5>{{ $page->title }}</h5>
            {{ $page->content }}
        </div>
        <div id="rightside">
            <h5>Latest Books</h5>
            @foreach ($latest as $p)
                <a href="{{ route('page', ['category' => 'p', 'page' => $p->slug]) }}">{{ $p->title }}</a><br><br>
            @endforeach
        </div>
        <div id="footer">
            &copy; 2000-{{ date('Y') }} Three Pines Press.
        </div>
    </div>
    <script type="text/javascript" src="{{ URL::to('/js/fancydropdown.js') }}"></script>
</body>
</html>