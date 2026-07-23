<header id="header">
    <div class="header-container">
        <div class="row">
            <div class="col-md-2 col-sm-2 header-logo">
                <div id="logo">
                    <a href="https://www.chefonline.com/epos/"><img
                            src="{{ asset('assets/image/catalog/logo-black.png') }}" title="ChefOnline EPoS"
                            alt="ChefOnline EPoS" class="img-responsive" /></a>
                </div>
            </div>

            <nav class="col-md-8 col-sm-8 nav-container" role="navigation">
                <div class="nav-inner">
                    <div class="container">
                        <!-- ======= Menu Code START ========= -->
                        <!-- Opencart 3 level Category Menu-->
                        <div id="menu" class="main-menu">
                            <ul class="nav navbar-nav">
                                <li class="top_level">
                                    <a href="https://www.chefonline.com/epos/">Home</a>
                                </li>

                                <li class="top_level">
                                    <a href="https://www.chefonline.com/epos/package">ChefOnline EPoS Packages</a>
                                </li>

                                <li class="top_level">
                                    <a href="https://www.chefonline.com/epos/addon">Add ons</a>
                                </li>

                                <li class="top_level">
                                    <a href="https://www.chefonline.com/epos/about">About Us</a>
                                </li>

                                <li class="top_level">
                                    <a href="https://www.chefonline.com/epos/contact">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Opencart 3 level Category Menu-->
                        <div id="res-menu" class="main-menu nav-container1">
                            <!-- <div class="nav-responsive"><span>Menu</span><div class="expandable"></div></div> -->
                            <ul class="main-navigation">
                                <li>
                                    <a href="https://www.chefonline.com/epos/package">ChefOnline EPoS Packages</a>
                                </li>
                                <li>
                                    <a href="https://www.chefonline.com/epos/addon">Add ons</a>
                                </li>
                                <li>
                                    <a href="https://www.chefonline.com/epos/about">About Us</a>
                                </li>
                                <li>
                                    <a href="https://www.chefonline.com/epos/terms">Terms and
                                        Conditions</a>
                                </li>
                                <li>
                                    <a href="https://www.chefonline.com/epos/contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- ======= Menu Code END ========= -->
                    <div class="nav-responsive">
                        <span>Menu</span>
                        <div class="expandable"></div>
                    </div>
                </div>
            </nav>
            <div class="header-search">
                <div class="search">
                    <div id="search" class="input-group">
                        <div onclick="focusMethod()" class="search_button">Search</div>
                        <div class="searchbox">
                            <div class="searchinner">
                                <input id="focus-input" type="text" name="search" value=""
                                    placeholder="Search" class="form-control input-lg search-autocomplete" autofocus />
                                <button type="button" class="btn btn-default btn-lg"></button>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        $("input[name=search]").focus();
                        focusMethod = function getFocus() {
                            $("input[name=search]").focus();
                        };
                        /* Search */
                        $("#search input[name='search']")
                            .parent()
                            .find("button")
                            .on("click", function() {
                                url =
                                    $("base").attr("href") + "index.php?route=product/search";

                                var search = $(".header-search input[name='search']").val();

                                if (search) {
                                    url += "&search=" + encodeURIComponent(search);
                                }

                                var search = $(".header-search input[name='search']").prop(
                                    "value"
                                );

                                var category_id = $(
                                    ".header-search select[name='category_id']"
                                ).prop("value");

                                if (category_id > 0) {
                                    url += "&category_id=" + encodeURIComponent(category_id);
                                }

                                location = url;
                            });

                        $("#search input[name='search']").on("keydown", function(e) {
                            if (e.keyCode == 13) {
                                $(".header-search input[name='search']")
                                    .parent()
                                    .find("button")
                                    .trigger("click");
                            }
                        });

                        $("select[name='category_id']").on("change", function() {
                            if (this.value == "0") {
                                $("input[name='sub_category']").prop("disabled", true);
                            } else {
                                $("input[name='sub_category']").prop("disabled", false);
                            }
                        });

                        $("select[name='category_id']").trigger("change");
                    </script>
                </div>
            </div>
        </div>
    </div>
</header>
