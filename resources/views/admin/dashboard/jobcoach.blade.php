<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Orange and Boosted contributors">
    <title>Administration - Job Coach</title>

    <link rel="canonical" href="https://boosted.orange.com/docs/4.6/examples/administration-main-page/">

    <link rel="preload" href="/docs/4.6/dist/fonts/HelvNeue55_W1G.woff2"
          as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/docs/4.6/dist/fonts/HelvNeue75_W1G.woff2"
          as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin="anonymous">
    <link rel="preconnect" href="https://code.jquery.com" crossorigin="anonymous">


    <!--Tarteaucitron -->
    <link href="/docs/4.6/assets/css/tarteaucitronboosted.css" rel="stylesheet"><!-- Swiper -->
    <link href="/docs/4.6/assets/css/vendor/swiper-bundle.min.css" rel="stylesheet"><!-- Boosted core CSS -->
    <link href="/docs/4.6/dist/css/orangeHelvetica.min.css" rel="stylesheet" integrity="sha384-6rPwIH6o8roADEALG0VtZOLfj0bDJ8KUOX7N+cjS+7NkwAaBQOZwRPOIiKWJa0aL" crossorigin="anonymous">
    <link href="/docs/4.6/dist/css/orangeIcons.min.css" rel="stylesheet" integrity="sha384-XQ+QuxWl/eBTAPcvP8xjhUXg+GB+kArKZpnDyXUz1pLOe6yAfZzxkSygkYxNfKHT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.3.2/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-fyenpx19UpfUhZ+SD9o9IdxeIJKE6upKx0B54OcXy1TqnO660Qw9xw6rOASP+eir" crossorigin="anonymous">


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#000000">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>
<body class="d-flex flex-column h-100">
<header role="banner">
    <nav role="navigation" class="navbar navbar-dark bg-dark navbar-expand-md" aria-label="Main navigation">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/docs/4.6/dist/img/orange_logo.svg" alt="Back to homepage" title="Back to homepage" width="50" height="50" loading="lazy"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#orange-navbar-collapse" aria-controls="orange-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse justify-content-between collapse" id="orange-navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link d-inline-flex align-items-center" href="../administration-edition-page">
                            Edit news
                            <span class="icon icon-Pencil ml-1" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-inline-flex align-items-center" href="#">
                            Preferences
                            <span class="svg-settings ml-1" aria-hidden="true"></span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <button type="button" class="nav-link btn btn-link btn-inverse dropdown-toggle d-flex align-items-center" data-toggle="dropdown">
                            <span class="svg-avatar mr-1" aria-hidden="true"></span>
                            <span>Hello <span class="text-primary">Admin</span></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                            <li><a class="dropdown-item" href="#">Preferences</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>

<main role="main" id="content" class="my-5">
    <div class="container-fluid">
        <h1>News administration</h1>
    </div>

    <div id="localContainer" class="o-nav-local navbar-light">
        <nav role="navigation" class="container-fluid" aria-label="News categories navigation">
            <ul class="nav">
{{--                @foreach($academies as $academy)--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">{{$academy->name}}</a>--}}
{{--                </li>--}}
{{--                @endforeach--}}
            </ul>
            <!-- /.navbar-collapse -->
        </nav>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @foreach ($data as $academyName => $cohorts)
                    {{dd($data)}}
                    <h2>{{ $academyName }}</h2>
                    <table class="table">
                        <tr>
                            <th>Cohort</th>
                            <th>Employment Rate</th>
                        </tr>
                        @foreach ($cohorts as $cohortName => $info)
                            <tr>
                                <td>{{ $cohortName }}</td>
                                <td>{{ $info['employment_rate'] }}%</td>
                            </tr>
                        @endforeach
                    </table>
                @endforeach
                <table id="sys1" class="table">
                    <caption>Summary</caption>
                    <thead class="cf">
                    <tr>
                        <th class="header" scope="col">Cohort</th>
                        <th class="header" scope="col">Total</th>
                        <th class="header hide-when-small" scope="col">Internship</th>
                        <th class="header" scope="col">Graduates</th>
                        <th class="header hide-when-small" scope="col">Employment+internship for Employment</th>
                        <th class="header" scope="col">Available </th>
                        <th class="header" scope="col">Employment %</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="alert alert-danger border-0 mb-0"><span class="alert-icon"><span class="sr-only">Failure</span></span></td>
                        <td class="align-middle">08/10/12</td>
                        <td class="align-middle"><a href="#"><span class="sr-only">View system with ID </span>447765896321</a></td>
                        <td class="align-middle">BT</td>
                        <td class="align-middle">0:05:40</td>
                    </tr>
                    <tr>
                        <td class="alert alert-warning border-0 mb-0"><span class="alert-icon"><span class="sr-only">Warning</span></span></td>
                        <td class="align-middle">10/10/12</td>
                        <td class="align-middle"><a href="#"><span class="sr-only">View system with ID </span>447765896322</a></td>
                        <td class="align-middle">MMK</td>
                        <td class="align-middle">0:10:06</td>
                    </tr>
                    <tr>
                        <td class="alert alert-success border-0 mb-0"><span class="alert-icon"><span class="sr-only">Success</span></span></td>
                        <td class="align-middle">11/10/12</td>
                        <td class="align-middle"><a href="#"><span class="sr-only">View system with ID </span>447754233245</a></td>
                        <td class="align-middle">YYI</td>
                        <td class="align-middle">-</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <table id="news-table" class="table tablesorter mb-5">
            <caption>
                News list
                <a href="../administration-edition-page" class="btn btn-sm btn-secondary ml-3">Add news</a>
            </caption>
            <thead class="cf">
            <tr>
                <th scope="col" class="header">ID</th>
                <th scope="col" class="header">Title</th>
                <th scope="col" class="header">Date</th>
                <th scope="col" class="header">Category</th>
                <th scope="col" class="header">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="align-middle">1</td>
                <td class="align-middle">Eat 5 fruits and vegetables a day</td>
                <td class="align-middle">07/07/2014 09:00</td>
                <td class="align-middle">Health</td>
                <td class="align-middle">
                    <a href="../administration-edition-page" class="btn btn-sm btn-primary">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirm-dialog">Delete</button>
                </td>
            </tr>
            <tr>
                <td class="align-middle">9</td>
                <td class="align-middle">Eat potatoes</td>
                <td class="align-middle">09/24/2014 10:00</td>
                <td class="align-middle">Health</td>
                <td class="align-middle">
                    <a href="../administration-edition-page" class="btn btn-sm btn-primary">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirm-dialog">Delete</button>
                </td>
            </tr>
            <tr>
                <td class="align-middle">10</td>
                <td class="align-middle">Chikungunya: protect yourself</td>
                <td class="align-middle">09/06/2014 09:00</td>
                <td class="align-middle">Health</td>
                <td class="align-middle">
                    <a href="../administration-edition-page" class="btn btn-sm btn-primary">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirm-dialog">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="confirm-dialog" role="dialog" aria-labelledby="myModalLabel" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title h4" id="myModalLabel">Confirm deletion</h2>
                        <!-- Boosted mod: using visually hidden text instead of aria-label -->
                        <button type="button" class="close" data-dismiss="modal">
                            <span class="sr-only">Close confirmation modal</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>If you delete this entry, all information will be permanently lost. Are you sure?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin modal -->
        <!-- Nav tabs A-->
        <ul class="nav nav-tabs nav-tabs-light">
            <li class="nav-item">
                <a class="nav-link active" href="#help" data-toggle="tab">Help</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#faq" data-toggle="tab">FAQ</a>
            </li>
        </ul>
        <div class="tab-content border-left-0 border-right-0 border-bottom-0">
            <div class="tab-pane active" id="help">
                <p>From this view, you can edit or delete entry of your web site. You can also add an entry by clicking on "Add news" button.</p>
                <p>You can reorder column by clicking on them.</p>
                <p>Finally, you can search an item by typing his title or his ID in the search field, at the top of the page.</p>
            </div>
            <div class="tab-pane" id="faq">
                <ul>
                    <li><a href="#">I can't delete an entry</a></li>
                    <li><a href="#">I've got an error 500 when i try to edit an entry</a></li>
                    <li><a href="#">Another question</a></li>
                </ul>
            </div>
        </div>
        <!-- fin nav tabs A -->
    </div>
</main>
<!--/.container-->
<footer role="contentinfo" class="o-footer mt-auto">
    <div class="o-footer-bottom">
        <div class="container-fluid">
            <p class="my-2">© Orange 2015-2022</p>
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/boosted.bundle.min.js" integrity="sha384-HkgWGiFvphHyETaofVWXX2SP64Dbtv237puflDWHKGBrQg9mSRWItJIt2JkJrPlL" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/tablesorter@2.31.3/dist/js/jquery.tablesorter.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/boosted@5.3.2/dist/js/boosted.bundle.min.js" integrity="sha384-+lAXqnipqQpjxMdd/9Hp2GOzB4aIouKEYRZ7AE66h68BDob7UlMLpZY7w7SqrC+M" crossorigin="anonymous"></script>

<script src="administration.js"></script>
</body>
</html>
