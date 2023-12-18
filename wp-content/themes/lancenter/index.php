<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lancer</title>
<!--    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css"/>-->
<!---->
<!--    <link rel="stylesheet" href="./assets/css/style.css">-->
<!--    <link rel="stylesheet" href="./assets/css/meanmenu.css">-->
<!--    <link rel="stylesheet" href="./assets/css/responsive.css">-->
    <?php wp_head();?>
</head>
<body>
<div class="navbar-area ">
    <div class="mobile-responsive-nav">
        <div class="container">

            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="<?= THEME_URI; ?>/images/logo.png" class="main-logo" alt="logo">
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="desktop-nav size">
        <div class="navbar navbar-expand-md">
            <a href="/" class="navbar-brand">
                <img src="<?= THEME_URI; ?>/images/logo.png" alt="logo" class="main-logo">
            </a>
            <div class="collapse navbar-collapse main-menu mean-menu" id="navbarSupportedContent">

                <?php
                wp_nav_menu([
                    'theme_location' => 'menu-header',
                    'menu_id' => 'primary-menu',
                    'menu_class' => 'main-menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s navbar-nav ms-auto">%3$s</ul>',
                ])
                ?>

                <div class="nav-button btn-lp">
                    <a href="#">
                        無料相談・お問い合わせ
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="banner-area text-center position-relative">
    <img src="<?= THEME_URI; ?>/images/01.png" alt="banner">
    <div class="about-arena banner-area-footer position-absolute">
        <div class="header">
            <div class="logo">
                <img src="<?= THEME_URI; ?>/images/logo2.png" alt="logo">
            </div>
            <div class="logo-text">株式会社</div>
        </div>
        <div class="sub-title">
            私たちは、中立な立場でお客様に最適なツールの導入をサポートします
        </div>
        <div class="btn-lp text-center btn-about">
            <a href="">
                無料相談・お問い合わせ
            </a>
        </div>
    </div>
</div>

<div class="department-arena">
    <div class="department-main size">
        <div class="section-header-title department-header">
            部署別課題集
        </div>
        <div class="department-content">
            <nav>
                <div class="nav" id="nav-tab1" role="tablist">
                    <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button"
                       role="tab" aria-controls="nav-1" aria-selected="true">
                        <div class="tab-link">
                            <div class="user-image">
                                <img src="<?= THEME_URI; ?>/images/user1.png" alt="user1">
                            </div>
                            <div class="user-name">経営者・経営企画</div>
                            <div class="tab-line"></div>
                        </div>
                    </a>
                    <a class="nav-link" id="nav-tab2" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab"
                       aria-controls="nav-2" aria-selected="false">
                        <div class="tab-link">
                            <div class="user-image">
                                <img src="<?= THEME_URI; ?>/images/user2.png" alt="user1">
                            </div>
                            <div class="user-name">経理部門</div>
                            <div class="tab-line"></div>
                        </div>
                    </a>
                    <a class="nav-link" id="nav-tab3" data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab"
                       aria-controls="nav-3" aria-selected="false">
                        <div class="tab-link">
                            <div class="user-image">
                                <img src="<?= THEME_URI; ?>/images/user3.png" alt="user1">
                            </div>
                            <div class="user-name">営業部門</div>
                            <div class="tab-line"></div>
                        </div>
                    </a>
                    <a class="nav-link" id="nav-tab4" data-bs-toggle="tab" data-bs-target="#nav-4" type="button" role="tab"
                       aria-controls="nav-4" aria-selected="false">
                        <div class="tab-link">
                            <div class="user-image">
                                <img src="<?= THEME_URI; ?>/images/user4.png" alt="user1">
                            </div>
                            <div class="user-name">購買部・生産部部門</div>
                            <div class="tab-line"></div>
                        </div>
                    </a>
                    <a class="nav-link" id="nav-tab5" data-bs-toggle="tab" data-bs-target="#nav-5" type="button" role="tab"
                       aria-controls="nav-5" aria-selected="false">
                        <div class="tab-link">
                            <div class="user-image">
                                <img src="<?= THEME_URI; ?>/images/user5.png" alt="user1">
                            </div>
                            <div class="user-name">事業責任者・支社長</div>
                            <div class="tab-line"></div>
                        </div>
                    </a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-tab1">
                    <div class="tab-department-content">
                        <div class="department-item">
                            <div class="department-item__header">
                                将来に向けての需要予測から在庫仕入れの予測分析をしたい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department1.png" alt="dep1">
                                </div>
                                <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                部門別での売上管理を一元化して売上の全体管理を行い分析予測や管理がしたい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department2.png" alt="dep2">
                                </div>
                                <div class="department-item__content--text">リアルタイムでデータを取得</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                営業の見込み予測数字を月間や年間で見込み管理がしたい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department3.png" alt="dep3">
                                </div>
                                <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                全体的な部門別での仕入れや原価管理を統合管理し経営を加速したい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department4.png" alt="dep4">
                                </div>
                                <div class="department-item__content--text">発注書や原価マスタの情報から統合管理</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                内部監査と外部監査からの指摘でクラウドかつ監査証跡が残る形の管理ツールを検討したい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department5.png" alt="dep5">
                                </div>
                                <div class="department-item__content--text">99.99%の可用性を実現</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-tab2">
                    <div class="tab-department-content">
                        <div class="department-item">
                            <div class="department-item__header">
                                将来に向けての需要予測から在庫仕入れの予測分析をしたい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department1.png" alt="dep1">
                                </div>
                                <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                部門別での売上管理を一元化して売上の全体管理を行い分析予測や管理がしたい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department2.png" alt="dep2">
                                </div>
                                <div class="department-item__content--text">リアルタイムでデータを取得</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                営業の見込み予測数字を月間や年間で見込み管理がしたい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department3.png" alt="dep3">
                                </div>
                                <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                全体的な部門別での仕入れや原価管理を統合管理し経営を加速したい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department4.png" alt="dep4">
                                </div>
                                <div class="department-item__content--text">発注書や原価マスタの情報から統合管理</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                内部監査と外部監査からの指摘でクラウドかつ監査証跡が残る形の管理ツールを検討したい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department5.png" alt="dep5">
                                </div>
                                <div class="department-item__content--text">99.99%の可用性を実現</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>

                    </div>

                </div>
                <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-tab3">
                    <div class="tab-department-content">
                        <div class="department-item">
                            <div class="department-item__header">
                                将来に向けての需要予測から在庫仕入れの予測分析をしたい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department1.png" alt="dep1">
                                </div>
                                <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                部門別での売上管理を一元化して売上の全体管理を行い分析予測や管理がしたい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department2.png" alt="dep2">
                                </div>
                                <div class="department-item__content--text">リアルタイムでデータを取得</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                営業の見込み予測数字を月間や年間で見込み管理がしたい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department3.png" alt="dep3">
                                </div>
                                <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                全体的な部門別での仕入れや原価管理を統合管理し経営を加速したい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department4.png" alt="dep4">
                                </div>
                                <div class="department-item__content--text">発注書や原価マスタの情報から統合管理</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                内部監査と外部監査からの指摘でクラウドかつ監査証跡が残る形の管理ツールを検討したい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department5.png" alt="dep5">
                                </div>
                                <div class="department-item__content--text">99.99%の可用性を実現</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>

                    </div>

                </div>
                <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-tab4">
                    <div class="tab-department-content">
                        <div class="department-item">
                            <div class="department-item__header">
                                将来に向けての需要予測から在庫仕入れの予測分析をしたい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department1.png" alt="dep1">
                                </div>
                                <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                部門別での売上管理を一元化して売上の全体管理を行い分析予測や管理がしたい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department2.png" alt="dep2">
                                </div>
                                <div class="department-item__content--text">リアルタイムでデータを取得</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                営業の見込み予測数字を月間や年間で見込み管理がしたい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department3.png" alt="dep3">
                                </div>
                                <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                全体的な部門別での仕入れや原価管理を統合管理し経営を加速したい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department4.png" alt="dep4">
                                </div>
                                <div class="department-item__content--text">発注書や原価マスタの情報から統合管理</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                内部監査と外部監査からの指摘でクラウドかつ監査証跡が残る形の管理ツールを検討したい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department5.png" alt="dep5">
                                </div>
                                <div class="department-item__content--text">99.99%の可用性を実現</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>

                    </div>

                </div>
                <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-tab5">
                    <div class="tab-department-content">
                        <div class="department-item">
                            <div class="department-item__header">
                                将来に向けての需要予測から在庫仕入れの予測分析をしたい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department1.png" alt="dep1">
                                </div>
                                <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                部門別での売上管理を一元化して売上の全体管理を行い分析予測や管理がしたい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department2.png" alt="dep2">
                                </div>
                                <div class="department-item__content--text">リアルタイムでデータを取得</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                営業の見込み予測数字を月間や年間で見込み管理がしたい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department3.png" alt="dep3">
                                </div>
                                <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                全体的な部門別での仕入れや原価管理を統合管理し経営を加速したい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department4.png" alt="dep4">
                                </div>
                                <div class="department-item__content--text">発注書や原価マスタの情報から統合管理</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>
                        <div class="department-item">
                            <div class="department-item__header">
                                内部監査と外部監査からの指摘でクラウドかつ監査証跡が残る形の管理ツールを検討したい
                            </div>
                            <div class="department-item__content">
                                <div class="department-item__content--icon">
                                    <img src="<?= THEME_URI; ?>/images/department5.png" alt="dep5">
                                </div>
                                <div class="department-item__content--text">99.99%の可用性を実現</div>
                            </div>
                            <div class="department-item__btn_next">
                                <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="department-content-mb">
            <div class="department-content--item">
                <p class="department-content--item__btn">
                    <a data-bs-toggle="collapse" href="#collapseExampleDepartment" role="button" aria-expanded="false"
                       aria-controls="collapseExampleDepartment">
            <span class="text-btn">
            経営者・経営企画
            </span>
                        <img src="<?= THEME_URI; ?>/images/plus.svg" alt="plus">
                    </a>
                </p>
                <div class="collapse department-content--item__list" id="collapseExampleDepartment">
                    <div class="department-item">
                        <div class="department-item__header">
                            将来に向けての需要予測から在庫仕入れの予測分析をしたい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department1.png" alt="dep1">
                            </div>
                            <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            部門別での売上管理を一元化して売上の全体管理を行い分析予測や管理がしたい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department2.png" alt="dep2">
                            </div>
                            <div class="department-item__content--text">リアルタイムでデータを取得</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            営業の見込み予測数字を月間や年間で見込み管理がしたい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department3.png" alt="dep3">
                            </div>
                            <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            全体的な部門別での仕入れや原価管理を統合管理し経営を加速したい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department4.png" alt="dep4">
                            </div>
                            <div class="department-item__content--text">発注書や原価マスタの情報から統合管理</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            内部監査と外部監査からの指摘でクラウドかつ監査証跡が残る形の管理ツールを検討したい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department5.png" alt="dep5">
                            </div>
                            <div class="department-item__content--text">99.99%の可用性を実現</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                </div>
            </div>
            <div class="department-content--item">
                <p class="department-content--item__btn">
                    <a data-bs-toggle="collapse" href="#collapseExampleDepartment2" role="button" aria-expanded="false"
                       aria-controls="collapseExampleDepartment2">
            <span class="text-btn">
            経営者・経営企画
            </span>
                        <img src="<?= THEME_URI; ?>/images/plus.svg" alt="plus">
                    </a>
                </p>
                <div class="collapse department-content--item__list" id="collapseExampleDepartment2">
                    <div class="department-item">
                        <div class="department-item__header">
                            将来に向けての需要予測から在庫仕入れの予測分析をしたい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department1.png" alt="dep1">
                            </div>
                            <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            部門別での売上管理を一元化して売上の全体管理を行い分析予測や管理がしたい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department2.png" alt="dep2">
                            </div>
                            <div class="department-item__content--text">リアルタイムでデータを取得</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            営業の見込み予測数字を月間や年間で見込み管理がしたい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department3.png" alt="dep3">
                            </div>
                            <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            全体的な部門別での仕入れや原価管理を統合管理し経営を加速したい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department4.png" alt="dep4">
                            </div>
                            <div class="department-item__content--text">発注書や原価マスタの情報から統合管理</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            内部監査と外部監査からの指摘でクラウドかつ監査証跡が残る形の管理ツールを検討したい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department5.png" alt="dep5">
                            </div>
                            <div class="department-item__content--text">99.99%の可用性を実現</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                </div>
            </div>
            <div class="department-content--item">
                <p class="department-content--item__btn">
                    <a data-bs-toggle="collapse" href="#collapseExampleDepartment3" role="button" aria-expanded="false"
                       aria-controls="collapseExampleDepartment3">
            <span class="text-btn">
            経営者・経営企画
            </span>
                        <img src="<?= THEME_URI; ?>/images/plus.svg" alt="plus">
                    </a>
                </p>
                <div class="collapse department-content--item__list" id="collapseExampleDepartment3">
                    <div class="department-item">
                        <div class="department-item__header">
                            将来に向けての需要予測から在庫仕入れの予測分析をしたい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department1.png" alt="dep1">
                            </div>
                            <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            部門別での売上管理を一元化して売上の全体管理を行い分析予測や管理がしたい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department2.png" alt="dep2">
                            </div>
                            <div class="department-item__content--text">リアルタイムでデータを取得</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            営業の見込み予測数字を月間や年間で見込み管理がしたい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department3.png" alt="dep3">
                            </div>
                            <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            全体的な部門別での仕入れや原価管理を統合管理し経営を加速したい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department4.png" alt="dep4">
                            </div>
                            <div class="department-item__content--text">発注書や原価マスタの情報から統合管理</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            内部監査と外部監査からの指摘でクラウドかつ監査証跡が残る形の管理ツールを検討したい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department5.png" alt="dep5">
                            </div>
                            <div class="department-item__content--text">99.99%の可用性を実現</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                </div>
            </div>
            <div class="department-content--item">
                <p class="department-content--item__btn">
                    <a data-bs-toggle="collapse" href="#collapseExampleDepartment4" role="button" aria-expanded="false"
                       aria-controls="collapseExampleDepartment4">
            <span class="text-btn">
            経営者・経営企画
            </span>
                        <img src="<?= THEME_URI; ?>/images/plus.svg" alt="plus">
                    </a>
                </p>
                <div class="collapse department-content--item__list" id="collapseExampleDepartment4">
                    <div class="department-item">
                        <div class="department-item__header">
                            将来に向けての需要予測から在庫仕入れの予測分析をしたい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department1.png" alt="dep1">
                            </div>
                            <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            部門別での売上管理を一元化して売上の全体管理を行い分析予測や管理がしたい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department2.png" alt="dep2">
                            </div>
                            <div class="department-item__content--text">リアルタイムでデータを取得</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            営業の見込み予測数字を月間や年間で見込み管理がしたい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department3.png" alt="dep3">
                            </div>
                            <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            全体的な部門別での仕入れや原価管理を統合管理し経営を加速したい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department4.png" alt="dep4">
                            </div>
                            <div class="department-item__content--text">発注書や原価マスタの情報から統合管理</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            内部監査と外部監査からの指摘でクラウドかつ監査証跡が残る形の管理ツールを検討したい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department5.png" alt="dep5">
                            </div>
                            <div class="department-item__content--text">99.99%の可用性を実現</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                </div>
            </div>
            <div class="department-content--item">
                <p class="department-content--item__btn">
                    <a data-bs-toggle="collapse" href="#collapseExampleDepartment5" role="button" aria-expanded="false"
                       aria-controls="collapseExampleDepartment5">
            <span class="text-btn">
            経営者・経営企画
            </span>
                        <img src="<?= THEME_URI; ?>/images/plus.svg" alt="plus">
                    </a>
                </p>
                <div class="collapse department-content--item__list" id="collapseExampleDepartment5">
                    <div class="department-item">
                        <div class="department-item__header">
                            将来に向けての需要予測から在庫仕入れの予測分析をしたい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department1.png" alt="dep1">
                            </div>
                            <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            部門別での売上管理を一元化して売上の全体管理を行い分析予測や管理がしたい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department2.png" alt="dep2">
                            </div>
                            <div class="department-item__content--text">リアルタイムでデータを取得</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            営業の見込み予測数字を月間や年間で見込み管理がしたい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department3.png" alt="dep3">
                            </div>
                            <div class="department-item__content--text">見込み数字自動当て込みで将来予測</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            全体的な部門別での仕入れや原価管理を統合管理し経営を加速したい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department4.png" alt="dep4">
                            </div>
                            <div class="department-item__content--text">発注書や原価マスタの情報から統合管理</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                    <div class="department-item">
                        <div class="department-item__header">
                            内部監査と外部監査からの指摘でクラウドかつ監査証跡が残る形の管理ツールを検討したい
                        </div>
                        <div class="department-item__content">
                            <div class="department-item__content--icon">
                                <img src="<?= THEME_URI; ?>/images/department5.png" alt="dep5">
                            </div>
                            <div class="department-item__content--text">99.99%の可用性を実現</div>
                        </div>
                        <div class="department-item__btn_next">
                            <img src="<?= THEME_URI; ?>/images/bnt_next.svg" alt="next">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="service-area">
    <div class="service-main size">
        <div class="section-header-title service-header">
            グローバルNo.1クラウドERP

            <div class="service-header-logo text-center">
                <img src="<?= THEME_URI; ?>/images/service-logo.png" alt="service-logo">
            </div>
        </div>


        <div class="service-content">
            <div class="service-item">
                <img src="<?= THEME_URI; ?>/images/service1.png" alt="service1">
            </div>
            <div class="service-item">
                <img src="<?= THEME_URI; ?>/images/service2.png" alt="service2">
            </div>
            <div class="service-item">
                <img src="<?= THEME_URI; ?>/images/service3.png" alt="service3">
            </div>
            <div class="service-item">
                <img src="<?= THEME_URI; ?>/images/service4.png" alt="service4">
            </div>
            <div class="service-item">
                <img src="<?= THEME_URI; ?>/images/service5.png" alt="service5">
            </div>
        </div>
    </div>
</div>

<div class="banner-area text-center bg-white size">
    <img src="<?= THEME_URI; ?>/images/03.png" alt="banner">
</div>

<div class="testimonial-area">
    <div class="testimonial-main size">
        <div class="section-header-title testimonial-header">
            コンサルタントのご紹介
        </div>
        <div class="testimonial-content">
            <div class="swiper " id="mySwiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="testimonial-item__image">
                                <img src="<?= THEME_URI; ?>/images/tes1.png" alt="tes1">
                            </div>
                            <div class="testimonial-item__content">
                                <div class="testimonial-item__content--title">代表取締役</div>
                                <div class="testimonial-item__content--name">
                                    竹下祐豪
                                </div>
                                <div class="testimonial-item__content--des">
                                    経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="testimonial-item__image">
                                <img src="<?= THEME_URI; ?>/images/tes1.png" alt="tes1">
                            </div>
                            <div class="testimonial-item__content">
                                <div class="testimonial-item__content--title">代表取締役</div>
                                <div class="testimonial-item__content--name">
                                    竹下祐豪
                                </div>
                                <div class="testimonial-item__content--des">
                                    経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="testimonial-item__image">
                                <img src="<?= THEME_URI; ?>/images/tes1.png" alt="tes1">
                            </div>
                            <div class="testimonial-item__content">
                                <div class="testimonial-item__content--title">代表取締役</div>
                                <div class="testimonial-item__content--name">
                                    竹下祐豪
                                </div>
                                <div class="testimonial-item__content--des">
                                    経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。経歴が入ります。
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-prev">
                    <img src="<?= THEME_URI; ?>/images/tes_pre.svg" alt="test pre">
                </div>
                <div class="swiper-next">
                    <img src="<?= THEME_URI; ?>/images/tes_next.svg" alt="test next">

                </div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>

        </div>
    </div>
</div>

<div class="section-about text-center">
    <div class="about-arena">
        <div class="header">
            <div class="logo">
                <img src="<?= THEME_URI; ?>/images/logo2.png" alt="logo">
            </div>
            <div class="logo-text">株式会社</div>
        </div>
        <div class="sub-title">
            私たちは、中立な立場でお客様に最適なツールの導入をサポートします
        </div>
        <div class="btn-lp text-center btn-about">
            <a href="">
                無料相談・お問い合わせ
            </a>
        </div>
    </div>
</div>
<div class="banner-area text-center size">
    <img src="<?= THEME_URI; ?>/images/04.png" alt="banner">
</div>

<div class="banner-area text-center size">
    <img src="<?= THEME_URI; ?>/images/05.png" alt="banner">
</div>
<div class="banner-area text-center size">
    <img src="<?= THEME_URI; ?>/images/06.png" alt="banner">
</div>
<div class="banner-area text-center size">
    <img src="<?= THEME_URI; ?>/images/07.png" alt="banner">
</div>

<div class="faq-arena">
    <div class="faq-main size">
        <div class="faq-header text-center section-header-title">
            よくあるご質問
        </div>
        <div class="faq-content faq__list">
            <div class="faq__item">
                <div class="item-main">
                    <div class="item-content">
                        <p class="faq__item--btn">
                            <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                               aria-controls="collapseExample2">
                                <span class="btn-text"><span class="text-q">Q.</span> よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。</span>
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="faq__item--text">
                                <span class="text-a">A.</span> 答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。
                            </div>
                        </div>
                    </div>

                    <div class="item-icon">
                        <a data-bs-toggle="collapse" class="faq-collapse collapsed" href="#collapseExample" role="button"
                           aria-expanded="false"
                           aria-controls="collapseExample">
                            <img src="<?= THEME_URI; ?>/images/plus.svg" alt="plus" class="plus">
                            <img src="<?= THEME_URI; ?>/images/minus.svg" alt="plus" class="minus">
                        </a>
                    </div>
                </div>
            </div>
            <div class="faq__item">
                <div class="item-main">
                    <div class="item-content">
                        <p class="faq__item--btn">
                            <a data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
                               aria-controls="collapseExample2">
                                <span class="btn-text"><span class="text-q">Q.</span> よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。</span>
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample2">
                            <div class="faq__item--text">
                                <span class="text-a">A.</span> 答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。
                            </div>
                        </div>
                    </div>

                    <div class="item-icon">
                        <a data-bs-toggle="collapse" class="faq-collapse collapsed" href="#collapseExample2" role="button"
                           aria-expanded="false"
                           aria-controls="collapseExample2">
                            <img src="<?= THEME_URI; ?>/images/plus.svg" alt="plus" class="plus">
                            <img src="<?= THEME_URI; ?>/images/minus.svg" alt="plus" class="minus">
                        </a>
                    </div>
                </div>

            </div>
            <div class="faq__item">
                <div class="item-main">
                    <div class="item-content">
                        <p class="faq__item--btn">
                            <a data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false"
                               aria-controls="collapseExample3">
                                <span class="btn-text"><span class="text-q">Q.</span> よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。</span>
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample3">
                            <div class="faq__item--text">
                                <span class="text-a">A.</span> 答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。
                            </div>
                        </div>
                    </div>

                    <div class="item-icon">
                        <a data-bs-toggle="collapse" class="faq-collapse collapsed" href="#collapseExample3" role="button"
                           aria-expanded="false"
                           aria-controls="collapseExample3">
                            <img src="<?= THEME_URI; ?>/images/plus.svg" alt="plus" class="plus">
                            <img src="<?= THEME_URI; ?>/images/minus.svg" alt="plus" class="minus">
                        </a>
                    </div>
                </div>

            </div>
            <div class="faq__item">
                <div class="item-main">
                    <div class="item-content">
                        <p class="faq__item--btn">
                            <a data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false"
                               aria-controls="collapseExample4">
                                <span class="btn-text"><span class="text-q">Q.</span> よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。</span>
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample4">
                            <div class="faq__item--text">
                                <span class="text-a">A.</span> 答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。
                            </div>
                        </div>
                    </div>

                    <div class="item-icon">
                        <a data-bs-toggle="collapse" class="faq-collapse collapsed" href="#collapseExample4" role="button"
                           aria-expanded="false"
                           aria-controls="collapseExample4">
                            <img src="<?= THEME_URI; ?>/images/plus.svg" alt="plus" class="plus">
                            <img src="<?= THEME_URI; ?>/images/minus.svg" alt="plus" class="minus">
                        </a>
                    </div>
                </div>

            </div>
            <div class="faq__item">
                <div class="item-main">
                    <div class="item-content">
                        <p class="faq__item--btn">
                            <a data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false"
                               aria-controls="collapseExample5">
                                <span class="btn-text"><span class="text-q">Q.</span> よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。よくある質問が入ります。</span>
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample5">
                            <div class="faq__item--text">
                                <span class="text-a">A.</span> 答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。答えが入ります。
                            </div>
                        </div>
                    </div>

                    <div class="item-icon">
                        <a data-bs-toggle="collapse" class="faq-collapse collapsed" href="#collapseExample5" role="button"
                           aria-expanded="false"
                           aria-controls="collapseExample5">
                            <img src="<?= THEME_URI; ?>/images/plus.svg" alt="plus" class="plus">
                            <img src="<?= THEME_URI; ?>/images/minus.svg" alt="plus" class="minus">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="news-area">
    <div class="news-main size">
        <div class="section-header-title news-header text-center">
            お役立ち情報
        </div>
        <div class="news-content">
            <div class="news-list">
                <div class="single-blog-card">
                    <div class="news-image">
                        <a href="/">
                            <img src="<?= THEME_URI; ?>/images/blog.png" alt="">
                        </a>
                    </div>
                    <div class="news-content">
                        <div class="news-content__header">
                            2023.00.00
                        </div>
                        <a href="" class="news-content__text">
                            ERPとは？基本的な意味を解説
                        </a>
                    </div>
                    <div class="news-badge">
                        用語解説
                    </div>
                </div>
                <div class="single-blog-card">
                    <div class="news-image">
                        <a href="/">
                            <img src="<?= THEME_URI; ?>/images/blog.png" alt="">
                        </a>
                    </div>
                    <div class="news-content">
                        <div class="news-content__header">
                            2023.00.00
                        </div>
                        <a href="" class="news-content__text">
                            ERPとは？基本的な意味を解説
                        </a>
                    </div>
                    <div class="news-badge">
                        用語解説
                    </div>
                </div>
                <div class="single-blog-card">
                    <div class="news-image">
                        <a href="/">
                            <img src="<?= THEME_URI; ?>/images/blog.png" alt="">
                        </a>
                    </div>
                    <div class="news-content">
                        <div class="news-content__header">
                            2023.00.00
                        </div>
                        <a href="" class="news-content__text">
                            ERPとは？基本的な意味を解説
                        </a>
                    </div>
                    <div class="news-badge">
                        用語解説
                    </div>
                </div>
            </div>
            <div class="news-button btn-lp btn-lp-primary text-center">
                <a href="">
                    お役立ち情報一覧
                </a>
            </div>
        </div>
    </div>
</div>

<div class="program-area">
    <div class="program-main size">
        <div class="section-header-title program-header text-center">
            Netsuite資料
        </div>
        <div class="program-content">
            <div class="program-list">
                <div class="single-program-card">
                    <div class="program-image">
                        <a href="/">
                            <img src="<?= THEME_URI; ?>/images/blog.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="single-program-card">
                    <div class="program-image">
                        <a href="/">
                            <img src="<?= THEME_URI; ?>/images/blog.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="single-program-card">
                    <div class="program-image">
                        <a href="/">
                            <img src="<?= THEME_URI; ?>/images/blog.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-area">
    <div class="contact-main size">
        <div class="section-header-title contact-header text-center">
            お問い合わせ
        </div>
        <div class="contact-content">
            <div class="contact-item">
                <div class="item-line">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <div class="item-main">
                    <div class="contact-label">
                        会社名 <span class="required">※必須</span>
                    </div>
                    <div class="contact-input">
                        <input type="text" placeholder="山田株式会社" name="company_name">
                    </div>
                </div>
                <div class="item-line">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
            </div>
            <div class="contact-item">
                <div class="item-main">
                    <div class="contact-label">
                        ご担当者名 <span class="required">※必須</span>
                    </div>
                    <div class="contact-input">
                        <input type="text" placeholder="山田　太郎" name="user_name">
                    </div>
                </div>
                <div class="item-line">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
            </div>
            <div class="contact-item">
                <div class="item-main">
                    <div class="contact-label">
                        ふりがな <span class="required">※必須</span>
                    </div>
                    <div class="contact-input">
                        <input type="text" placeholder="やまだ　たろう" name="furigana">
                    </div>
                </div>
                <div class="item-line">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
            </div>
            <div class="contact-item">
                <div class="item-main">
                    <div class="contact-label">
                        メールアドレス <span class="required">※必須</span>
                    </div>
                    <div class="contact-input">
                        <input type="text" placeholder="example@gmail.co.jp" name="email">
                    </div>
                </div>
                <div class="item-line">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
            </div>
            <div class="contact-item">
                <div class="item-main">
                    <div class="contact-label">
                        お電話番号 <span class="required">※必須</span>
                    </div>
                    <div class="contact-input">
                        <input type="text" placeholder="090-0000-0000" name="phone">
                    </div>
                </div>
                <div class="item-line">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
            </div>
            <div class="contact-item">
                <div class="item-main">
                    <div class="contact-label">
                        連絡希望手段 <span class="required">※必須</span>
                    </div>
                    <div class="contact-input">
                        <div class="contact-checkbox">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio"> Option 1
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio"> Option 1
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio"> Option 1
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optradio"> Option 1
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-line">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
            </div>
            <div class="contact-item">
                <div class="item-main">
                    <div class="contact-label">
                        当社を知ったきっかけ <span class="required">※必須</span>
                    </div>
                    <div class="contact-input">
                        <input type="text" placeholder="選択してください" name="why">
                    </div>
                </div>
                <div class="item-line">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
            </div>
            <div class="contact-item">
                <div class="item-main">
                    <div class="contact-label">
                        当社を知ったきっかけ <span class="required">※必須</span>
                    </div>
                    <div class="contact-input">
                        <select name="">
                            <option value="">選択してください</option>
                            <option value="">選択してください</option>
                            <option value="">選択してください</option>
                        </select>
                    </div>
                </div>
                <div class="item-line">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
            </div>
            <div class="contact-item">
                <div class="item-main">
                    <div class="contact-label">
                        お問い合わせ種別 <span class="required">※必須</span>
                    </div>
                    <div class="contact-input">
                        <select name="">
                            <option value="">選択してください</option>
                            <option value="">選択してください</option>
                            <option value="">選択してください</option>
                        </select>
                    </div>
                </div>
                <div class="item-line">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
            </div>
            <div class="contact-item">
                <div class="item-main align-items-md-start">
                    <div class="contact-label">
                        お問い合わせ内容 <span class="required">※必須</span>
                    </div>
                    <div class="contact-input">
            <textarea>
            </textarea>
                    </div>
                </div>
                <div class="item-line">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
            </div>
            <div class="contact-item text-center contact-confirm">
                <label for="confirm" class="form-check-label">
                    <input type="checkbox" name="confirm" class="form-check-input"
                           id="confirm">
                    弊社プライバシーポリシーに同意する
                </label>
            </div>

            <div class="contact-item text-center">
                <div class="contact-btn btn-lp">
                    <a href="">お問い合わせ</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer-area ">
    <div class="main-footer size">
        <div class="footer-logo">
            <img src="<?= THEME_URI; ?>/images/logo-footer.png" alt="logo-footer">
        </div>
        <div class="sub-title-footer">
            お役立ち情報では、ネットワーク・ITソリューションに関わる全ての方のためのサイトです。安心・安全な環境を実現したい経営者様・担当者様、確かなシステムを提案されたいインテグレータ様に向けて、DXに関する施策や経営の加速の方法などをお届けしていきます。
        </div>
        <div class="menu-footer">
            <ul class="list-item">
                <li class="menu-item">
                    <a href="/">お問い合わせ</a>
                </li>
                <li class="menu-item">
                    <a href="/">資料請求</a>
                </li>
                <li class="menu-item">
                    <a href="/">プライバシーポリシー</a>
                </li>
                <li class="menu-item">
                    <a href="/">利用規約</a>
                </li>
                <li class="menu-item">
                    <a href="/">コーポレートサイト</a>
                </li>
            </ul>
        </div>
        <div class="copyright">
            <p>Copyright (C) Lancetier inc., All Rights Reserved.</p>
        </div>
    </div>
</div>

<div class="modal fade" id="modelDepartment">
    <div class="modal-dialog modal-lg modal-dialog-centered" >
        <img src="<?= THEME_URI; ?>/images/modal.png" alt="">

    </div>
</div>

</body>
<?php wp_footer()?>
<!--<script src="<?= THEME_URI; ?>/js/jquery.min.js"></script>-->
<!--<script src="<?= THEME_URI; ?>/js/bootstrap.bundle.min.js"></script>-->
<!--<script src="<?= THEME_URI; ?>/js/jquery.meanmenu.js"></script>-->
<!--<script src="<?= THEME_URI; ?>/js/swiper-bundle.min.js"></script>-->
<!--<script src="<?= THEME_URI; ?>/js/custom.js"></script>-->
</html>

