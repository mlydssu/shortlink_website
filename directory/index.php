
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Directory - Link Shortener Everydays For You</title>
    <base href="https://hypetrackurl.me/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="robots" content="noindex">
    <link rel="alternate" href="https://hypetrackurl.me/directory" hreflang="x-default" />
    <link href="https://hypetrackurl.me/themes/altum/assets/css/bootstrap-dark.min.css?v=2410" id="css_theme_style"
        rel="stylesheet" media="screen,print">
    <link href="https://hypetrackurl.me/themes/altum/assets/css/custom.css?v=2410" rel="stylesheet" media="screen,print">
</head>

<body class=" bg-white c_darkmode" data-theme-style="dark">
    <nav id="navbar" class="navbar navbar-main navbar-expand-lg navbar-light mb-6">
        <div class="container">
            <a class="navbar-brand" href="https://hypetrackurl.me/">
                Link Shortener Everydays For You </a>
            <button class="btn navbar-custom-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#main_navbar" aria-controls="main_navbar" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="main_navbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="https://hypetrackurl.me/directory">Directory</a></li>
                    <li class="nav-item d-flex align-items-center">
                        <a class="btn btn-sm btn-outline-primary" href="https://hypetrackurl.me/login"><i
                                class="fa fa-fw fa-sm fa-sign-in-alt"></i> Sign in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="altum-animate altum-animate-fill-none altum-animate-fade-in">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="custom-breadcrumbs small">
                    <li><a href="https://hypetrackurl.me/">Home</a> <i class="fa fa-fw fa-angle-right"></i></li>
                    <li class="active" aria-current="page">Directory</li>
                </ol>
            </nav>
            <div class="row mb-4">
                <div class="col-12 col-lg d-flex align-items-center mb-3 mb-lg-0">
                    <h1 class="h4 m-0">Directory of users</h1>
                    <div class="ml-2">
                        <span data-toggle="tooltip" title="Discover new people with ease.">
                            <i class="fa fa-fw fa-info-circle text-muted"></i>
                        </span>
                    </div>
                </div>
                <div class="col-12 col-lg-auto d-flex">
                    <div>
                        <div class="dropdown">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle-simple"
                                data-toggle="dropdown" data-boundary="viewport" title="Export">
                                <i class="fa fa-fw fa-sm fa-download"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right d-print-none">
                                <a href="https://hypetrackurl.me/directory?&export=csv" target="_blank" class="dropdown-item">
                                    <i class="fa fa-fw fa-sm fa-file-csv mr-1"></i> Export to CSV </a>
                                <a href="https://hypetrackurl.me/directory?&export=json" target="_blank" class="dropdown-item">
                                    <i class="fa fa-fw fa-sm fa-file-code mr-1"></i> Export to JSON </a>
                            </div>
                        </div>
                    </div>
                    <div class="ml-3">
                        <div class="dropdown">
                            <button type="button"
                                class="btn btn-outline-secondary filters-button dropdown-toggle-simple"
                                data-toggle="dropdown" data-boundary="viewport" title="Filters">
                                <i class="fa fa-fw fa-sm fa-filter"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right filters-dropdown">
                                <div class="dropdown-header d-flex justify-content-between">
                                    <span class="h6 m-0">Filters</span>
                                </div>
                                <div class="dropdown-divider"></div>
                                <form action method="get" role="form">
                                    <div class="form-group px-4">
                                        <label for="filters_search" class="small">Search</label>
                                        <input type="search" name="search" id="filters_search"
                                            class="form-control form-control-sm" value />
                                    </div>
                                    <div class="form-group px-4">
                                        <label for="filters_search_by" class="small">Search by</label>
                                        <select name="search_by" id="filters_search_by"
                                            class="form-control form-control-sm">
                                            <option value="url">Short URL</option>
                                        </select>
                                    </div>
                                    <div class="form-group px-4">
                                        <label for="filters_order_by" class="small">Order by</label>
                                        <select name="order_by" id="filters_order_by"
                                            class="form-control form-control-sm">
                                            <option value="clicks" selected="selected">Pageviews</option>
                                            <option value="url">Short URL</option>
                                        </select>
                                    </div>
                                    <div class="form-group px-4">
                                        <label for="filters_order_type" class="small">Order type</label>
                                        <select name="order_type" id="filters_order_type"
                                            class="form-control form-control-sm">
                                            <option value="ASC" selected="selected">Ascending</option>
                                            <option value="DESC">Descending</option>
                                        </select>
                                    </div>
                                    <div class="form-group px-4">
                                        <label for="filters_results_per_page" class="small">Results per page</label>
                                        <select name="results_per_page" id="filters_results_per_page"
                                            class="form-control form-control-sm">
                                            <option value="10" selected="selected">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="250">250</option>
                                            <option value="500">500</option>
                                        </select>
                                    </div>
                                    <div class="form-group px-4 mt-4">
                                        <button type="submit" name="submit"
                                            class="btn btn-sm btn-primary btn-block">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                </div>
                <div class="mt-3">
                    <div class="d-flex flex-column flex-lg-row justify-content-lg-between align-items-lg-center">
                        <div class>
                            <p class="text-muted">
                                Showing - out of 0 results. </p>
                        </div>
                        <div class>
                            <ul class="pagination">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container d-print-none">
            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                <div class="mb-3 mb-lg-0">
                    <a class="h5" href="https://hypetrackurl.me/">
                        <span class="mb-2">Link Shortener Everydays For You</span>
                    </a>
                    <div>Copyright © 2024 Link Shortener Everydays For You.</div>
                </div>
                <div class="d-flex flex-column flex-lg-row">
                    <div class="mb-2 ml-lg-3">
                        <button type="button" id="switch_theme_style" class="btn btn-link text-decoration-none p-0"
                            data-toggle="tooltip" title="Switch to Light Mode"
                            data-title-theme-style-light="Switch to Light Mode"
                            data-title-theme-style-dark="Switch to Dark Mode">
                            <span data-theme-style="light" class="d-none"><i class="fa fa-fw fa-sm fa-sun mr-1"></i>
                                Light</span>
                            <span data-theme-style="dark" class><i class="fa fa-fw fa-sm fa-moon mr-1"></i> Dark</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg mb-3">
                    <ul class="list-style-none d-flex flex-column flex-lg-row flex-wrap m-0">
                        <li class="mb-2 mr-lg-3"><a href="https://altumco.de/66biolinks" target="_blank">Built with
                                66biolinks</a></li>
                        <li class="mb-2 mr-lg-3"><a href="https://altumcode.com/" target="_blank">Software by
                                AltumCode</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-auto">
                    <div class="d-flex flex-wrap">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <input type="hidden" name="global_site_url" value="https://hypetrackurl.me/" />
    <input type="hidden" name="global_url" value="https://hypetrackurl.me/" />
    <input type="hidden" name="global_token" value="e6c3c6c31506204c1fa0d95298acc7f7" />
    <input type="hidden" name="global_number_decimal_point" value="." />
    <input type="hidden" name="global_number_thousands_separator" value="," />
    <script>
        /* Some global variables */
        window.altum = {};
        let global_token = document.querySelector('input[name="global_token"]').value;
        let site_url = document.querySelector('input[name="global_site_url"]').value;
        let url = document.querySelector('input[name="global_url"]').value;
        let decimal_point = document.querySelector('[name="global_number_decimal_point"]').value;
        let thousands_separator = document.querySelector('[name="global_number_thousands_separator"]').value;
    </script>
    <script src="https://hypetrackurl.me/themes/altum/assets/js/libraries/jquery.min.js?v=2410"></script>
    <script src="https://hypetrackurl.me/themes/altum/assets/js/libraries/popper.min.js?v=2410"></script>
    <script src="https://hypetrackurl.me/themes/altum/assets/js/libraries/bootstrap.min.js?v=2410"></script>
    <script src="https://hypetrackurl.me/themes/altum/assets/js/custom.js?v=2410"></script>
    <script src="https://hypetrackurl.me/themes/altum/assets/js/libraries/fontawesome-all.min.js?v=2410"></script>
    <script src="https://hypetrackurl.me/themes/altum/assets/js/libraries/clipboard.min.js"></script>
    <script>
        'use strict';

        let clipboard = new ClipboardJS('[data-clipboard-text]');

        /* Copy full url handler */
        $('[data-clipboard-text]').on('click', event => {
            let copy = event.currentTarget.dataset.copy;
            let copied = event.currentTarget.dataset.copied;

            $(event.currentTarget).attr('data-original-title', copied).tooltip('show');

            setTimeout(() => {
                $(event.currentTarget).attr('data-original-title', copy);
            }, 500);
        });
    </script>
    <script>
        document.querySelector('#switch_theme_style').addEventListener('click', event => {
            let theme_style = document.querySelector('body[data-theme-style]').getAttribute('data-theme-style');
            let new_theme_style = theme_style == 'light' ? 'dark' : 'light';

            /* Set a cookie with the new theme style */
            set_cookie('theme_style', new_theme_style, 30, "\/");

            /* Change the css and button on the page */
            let css = document.querySelector(`#css_theme_style`);

            document.querySelector(`body[data-theme-style]`).setAttribute('data-theme-style', new_theme_style);

            switch (new_theme_style) {
                case 'dark':
                    css.setAttribute('href', "https:\/\/hypetrackurl.me\/themes\/altum\/assets\/css\/bootstrap-dark.min.css?v=2410");
                    document.body.classList.add('c_darkmode');
                    break;

                case 'light':
                    css.setAttribute('href', "https:\/\/hypetrackurl.me\/themes\/altum\/assets\/css\/bootstrap.min.css?v=2410");
                    document.body.classList.remove('c_darkmode');
                    break;
            }

            document.querySelector(`#switch_theme_style`).setAttribute('data-original-title', document.querySelector(`#switch_theme_style`).getAttribute(`data-title-theme-style-${theme_style}`));
            document.querySelector(`#switch_theme_style [data-theme-style="${new_theme_style}"]`).classList.remove('d-none');
            document.querySelector(`#switch_theme_style [data-theme-style="${theme_style}"]`).classList.add('d-none');
            $(`#switch_theme_style`).tooltip('hide').tooltip('show');

            event.preventDefault();
        });
    </script>
</body>

</html>