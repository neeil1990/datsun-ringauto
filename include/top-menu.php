<header id="header-main">
    <img src="<?=SITE_TEMPLATE_PATH?>/images/header.png" alt="" class="header-bg" />
    <div class="header-inner">
        <div class="logo"><a href='/'></a></div>
        <div id="burger">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </div>
        <div class="dealer-logo"><img src="<?=SITE_TEMPLATE_PATH?>/images/dealer-logo@2x.png" alt="" width="181" height="" /></div>

        <nav>

            <?if(SITE_TEMPLATE_ID == 'detail-html'):?>
            <a class="navbar-brand goto" href="#wrap">Datsun on-DO:</a>
            <ul class="nav">
                <li><a href="#pricing-table">Комплектации и цены</a> </li>
                <li><a href="#innovations1">Кредит</a></li>
                <li><a href="#innovations">Экстерьер и интерьер</a></li>
                <li><a href="#bg_line_cars_9_color">Цвета кузова</a></li>
                <li><a href="#techspec">Характеристики</a></li>
                <li><a href="#screenshots">Особенности</a></li>
                <li><a href="#news">Галерея</a></li>
            </ul>
            <ul>
            <?else:?>
            <ul id="horizontal-multilevel-menu">
            <?endif;?>




                <li>
                    <a href="/cars/" class="root-item">Автомобили<img class="img-nav-menu" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.png" alt="" />
                        <img class="img-nav-menu-m" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.png" alt="" />
                    </a>

                    <ul>
                        <li><a href="/on-do/"><img src="http://datsun-spb.ru/upload/medialibrary/d8d/nav_oniDO@2x.png" width="239" height="118" /><br>Datsun on-DO</a></li>
                        <li><a href="/offers/"><img src="<?=SITE_TEMPLATE_PATH?>/images/auto@2x.png" width="239" height="118" /><br>Автомобили в наличии</a></li>
                    </ul>

                </li>
                <li>

                    <a href="/specials/" class="root-item">Спецпредложения<img class="img-nav-menu" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.png" alt="" />
                        <img class="img-nav-menu-m" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.png" alt="" />
                    </a>

                    <ul>
                        <li><a href="/specials/shares/">Акции</a></li>
                        <li><a href="/specials/corp_sales/">Корпоративным клиентам</a></li>
                    </ul>

                </li>

                <li>
                    <a href="/maintenance/" class="root-item">Сервис<img class="img-nav-menu" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.png" alt="" />
                        <img class="img-nav-menu-m" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.png" alt="" />
                    </a>

                    <ul>

                        <li><a href="/maintenance/teh_service/">Техническое обслуживание</a></li>
                        <li><a href="/maintenance/repair/">Ремонт</a></li>
                        <li><a href="/maintenance/warranty/">Гарантия</a></li>
                        <li><a href="/maintenance/accessories/">Запчасти</a></li>
                        <li><a href="/maintenance/aksessuary/">Aксессуары</a></li>
                        <li><a href="/maintenance/o-servise/o-servise.php">О сервисе</a></li>
                    </ul>

                </li>

                <li>
                    <a href="/services/" class="root-item">Услуги<img class="img-nav-menu" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.png" alt="" />
                        <img class="img-nav-menu-m" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.png" alt="" />
                    </a>

                    <ul>

                        <li><a href="/services/credit/">Кредит и Страхование</a></li>
                        <li><a href="/services/trade-in/">TRADE-IN</a></li>
                        <li><a href="/services/assistance/">Datsun Assistance</a></li>
                    </ul>

                </li>

                <li>
                    <a href="/about/" class="root-item">О компании<img class="img-nav-menu" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu.png" alt="" />
                        <img class="img-nav-menu-m" src="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.svg" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/nav-menu-m.png" alt="" />
                    </a>

                    <ul>
                        <li><a href="/about/center/">CTK CENTER</a></li>
                        <li><a href="/about/people/">Наш коллектив</a></li>
                        <li><a href="/about/news/">Новости</a></li>
                        <li><a href="/about/reviews/">Благодарности</a></li>
                        <li><a href="/about/advantages/">О бренде</a></li>
                    </ul>

                </li>

                <li><a href="/contacts/" class="root-item">Контакты</a></li>

            </ul>
        </nav>


    </div>
    <div class="header-submenu"></div>
</header>