<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('admin.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Главная
                </a>
                <a class="nav-link" href="{{ route('admin.page_info.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-audio-description"></i></div>
                    Заголовки и описания
                </a>
                <a class="nav-link" href="{{ route('admin.companies.index') }}">
                    <div class="sb-nav-link-icon"><i class="far fa-building"></i></div>
                    Компании
                </a>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Страницы
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="{{ route('admin.services.index') }}">Услуги</a>
                        <a class="nav-link" href="{{ route('admin.gallery.index') }}">Галерея</a>
                        <a class="nav-link" href="{{ route('admin.news.index') }}">Новости</a>
                        <a class="nav-link" href="{{ route('admin.contact.index') }}">Контакты</a>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseCompany" aria-expanded="false" aria-controls="pagesCollapseCompany">
                            Компания
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseCompany" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('admin.tenants.index') }}">Арендаторам</a>
                                <a class="nav-link" href="{{ route('admin.histories.index') }}">История</a>
                                <a class="nav-link" href="{{ route('admin.brands.index') }}">Бренды</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="{{ route('admin.reviews.index') }}">Отзывы</a>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                            Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">401 Page</a>
                                <a class="nav-link" href="404.html">404 Page</a>
                                <a class="nav-link" href="500.html">500 Page</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                <a class="nav-link" href="{{ route('admin.feedbacks.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
                    Обратная связь
                </a>
                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="{{ route('admin.charts') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="{{ route('admin.tables') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
