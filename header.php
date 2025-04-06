<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />


    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
                                        echo ' :';
                                    } ?><?php bloginfo('name'); ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
    <?php if (is_user_logged_in()): ?>
        <style>
            .fixed-top {
                top: 32px;
            }
        </style>
    <?php endif; ?>
    <?php
    $logo = get_field("logo", "options");
    $button_text = get_field("button_text", "options");
    $button_link = get_field("button_link", "options");
    ?>
</head>

<body>
    <!-- Start: Header -->
    <header class="header" id="header" js-header>
        <div class="container">
            <div class="row justify-content-center flex-grow-1">
                <div class="col-xxl-11">
                    <div class="header__container">
                        <div class="header__wrapper">
                            <div class="header__main">
                                <!-- Logo Wrapper -->
                                <div class="header__logo-wrapper">
                                    <div class="header__logo">
                                        <a href="<?php echo home_url() ?>" class="header__logo-link"
                                            title="<?php _e("Paayco Logo", "") ?>">
                                            <?php if (!empty($logo)): ?>
                                                <img src="<?php echo $logo["url"] ?>"
                                                    alt="<?php echo @$logo["alt"] ?>" class="logo-white">
                                            <?php else: ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/header-logo.png" class="logo-white"
                                                    alt="Logo">
                                            <?php endif; ?>

                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/header-logo-primary.png" class="logo-primary"
                                                alt="Logo">
                                        </a>
                                    </div>

                                    <div class="sliding-tabs">
                                        <?php include 'inc/tabs.php'; ?>
                                    </div>
                                </div>
                                <!-- Logo Wrapper -->

                                <!-- Header Nav Wrapper -->
                                <div class="header__nav-wrapper">
                                    <!-- Main Nav Links -->
                                    <nav class="header__nav" role="navigation" aria-label="Main Navigation">
                                        <ul class="header__nav-list header__nav-list--left" id="mainNavList" role="menubar">
                                            <?php
                                            $main_menu = render_menu($menu_type);
                                            if (isset($main_menu)) {
                                                foreach ($main_menu as $menu_item) {
                                                    if (!empty($menu_item['children']) && isset($menu_item['title'])) {
                                                        $menu_children = $menu_item["children"];
                                            ?>
                                                        <li class="header__nav-list-item header__nav-list-item--has-submenu" role="menuitem" js-nav-item>
                                                            <div class="header__nav-list-item-inner">
                                                                <a href="<?php echo esc_url($menu_item['url']); ?>" class="header__nav-list-item-link" title="<?php echo esc_html($menu_item['title']); ?>"> <?php echo esc_html($menu_item['title']); ?> <span></span>
                                                                </a>
                                                            </div>
                                                            <div class="header__nav-list-item-submenu" js-nav-item-submenu>
                                                                <div class="header__nav-list-item-submenu-wrapper">
                                                                    <div class="title"><span><?php echo esc_html($menu_item['title']); ?></span></div>

                                                                    <ul class="header__nav-list-item-submenu-list" role="menu">
                                                                        <?php
                                                                        foreach ($menu_children as $child_item) {
                                                                            $menu_icon = get_field('menu_icon', $child_item['ID']);
                                                                            $menu_text = get_field('menu_text', $child_item['ID']);
                                                                        ?>
                                                                            <li class="header__nav-list-item-submenu-list-item" role="menuitem">
                                                                                <a href="<?php echo esc_html($child_item['url']); ?>" class="header__nav-list-item-submenu-list-item-link" title="<?php echo esc_html($child_item['title']); ?>">
                                                                                    <div class="icon">
                                                                                        <?php if (!empty($menu_icon)) { ?>
                                                                                            <img src="<?php echo $menu_icon["url"] ?>" alt="<?php echo esc_html($child_item['title']); ?>">
                                                                                        <?php } else { ?>
                                                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/send_money.svg" alt="<?php echo esc_html($child_item['title']); ?>">
                                                                                        <?php } ?>
                                                                                    </div>
                                                                                    <div class="text">
                                                                                        <span class="link-text"><?php echo esc_html($child_item['title']); ?></span>
                                                                                        <?php if ($menu_text) { ?>
                                                                                            <span class="link-subtext"><?php echo $menu_text ?></span>
                                                                                        <?php } ?>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    <?php } else { ?>
                                                        <li class="header__nav-list-item" role="menuitem" js-nav-item>
                                                            <div class="header__nav-list-item-inner">
                                                                <a href="<?php echo esc_url($menu_item['url']); ?>" class="header__nav-list-item-link" title="<?php echo esc_html($menu_item['title']); ?>"> <?php echo esc_html($menu_item['title']); ?> </a>
                                                            </div>
                                                        </li>
                                            <?php }
                                                }
                                            } ?>
                                        </ul>
                                        <ul class="header__nav-list header__nav-list--right">
                                            <li class="header__nav-list-item lang-selector--wrapper" role="menuitem">
                                                <div class="flag-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flag/uk.svg" alt="Flag">
                                                </div>
                                                <div>
                                                    <select id="langSelector" class="lang-selector">

                                                        <?php
                                                        $en_selected = "";
                                                        $fr_selected = "";
                                                        if (isset($_GET["lang"])) {
                                                            if ($_GET["lang"] == "en") {
                                                                $en_selected = "selected";
                                                            }
                                                            if ($_GET["lang"] == "fr") {
                                                                $fr_selected = "selected";
                                                            }
                                                        }
                                                        ?>
                                                        <option value="?lang=en" <?php echo $en_selected ?>>EN</option>
                                                        <option value="?lang=fr" <?php echo $fr_selected ?>>FR</option>
                                                    </select>
                                                </div>
                                            </li>

                                            <?php if (!empty($button_text)): ?>
                                                <li class="header__nav-list-item" role="menuitem">
                                                    <a href="<?php echo esc_url($button_link); ?>" class="btn btn-bright-green" title="<?php echo esc_html($button_text); ?>"><?php echo esc_html($button_text); ?></a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </nav>
                                    <!-- Main Nav Links -->
                                </div>
                                <!-- Header Nav Wrapper -->
                            </div>
                            <!-- Hamburger Button -->
                            <div class="header__hamburger-wrapper">
                                <!-- Language Dropdown -->
                                <div class="lang-selector--wrapper">
                                    <div class="flag-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flag/uk.svg" alt="Flag">
                                    </div>
                                    <div>
                                        <select id="langSelector" class="lang-selector">
                                            <?php
                                            $en_selected = "";
                                            $fr_selected = "";
                                            if (isset($_GET["lang"])) {
                                                if ($_GET["lang"] == "en") {
                                                    $en_selected = "selected";
                                                }
                                                if ($_GET["lang"] == "fr") {
                                                    $fr_selected = "selected";
                                                }
                                            }
                                            ?>
                                            <option value="?lang=en" <?php echo $en_selected ?>>EN</option>
                                            <option value="?lang=fr" <?php echo $fr_selected ?>>FR</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Hamburger Icon -->
                                <div>
                                    <button class="header__hamburger" aria-label="Toggle menu" aria-expanded="false"
                                        aria-controls="mobileNav" js-hamburger>
                                        <div class="header__hamburger-inner">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <!-- Hamburger Button -->
                        </div>
                    </div>
                    <!-- Start: Mobile Navigation -->
                    <?php include 'header-mobile.php'; ?>
                    <!-- End: Mobile Navigation -->
                </div>
            </div>
        </div>
    </header>
    <!-- End: Header -->

    <!-- <header class="header">
        <nav class="navbar navbar-expand-xl" data-bs-theme="dark">
            <div class="container">
                <div class="row justify-content-center flex-grow-1">
                    <div class="col-xxl-11">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <a href="<?php echo home_url() ?>" class="navbar-brand">
                                    <?php if (!empty($logo)): ?>
                                        <img src="<?php echo $logo["url"] ?>"
                                            alt="<?php echo @$logo["alt"] ?>">
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-white.svg"
                                            alt="Logo">
                                    <?php endif; ?>
                                </a>

                                <div class="sliding-tabs">
                                    <?php include 'inc/tabs.php'; ?>
                                </div>
                            </div>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#headerNav"
                                aria-controls="headerNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="headerNav">
                                <div class="sliding-tabs">
                                    <?php include 'inc/tabs.php'; ?>
                                </div>

                                <ul class="navbar-nav ms-auto">
                                    <?php
                                    $main_menu = render_menu($menu_type);
                                    if (isset($main_menu)) {
                                        foreach ($main_menu as $menu_item) {
                                            if (!empty($menu_item['children']) && isset($menu_item['title'])) {
                                                $menu_children = $menu_item["children"];
                                    ?>
                                                <li class="nav-item dropdown">
                                                    <a href="<?php echo esc_url($menu_item['url']); ?>" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="<?php echo esc_html($menu_item['title']); ?>"><?php echo esc_html($menu_item['title']); ?></a>
                                                    <div class="dropdown-menu mega-menu">
                                                        <div class="mega-menu--container">
                                                            <div class="mega-menu--col">
                                                                <div class="title"><span><?php echo esc_html($menu_item['title']); ?></span></div>
                                                                <ul class="list-unstyled">
                                                                    <?php
                                                                    foreach ($menu_children as $child_item) {
                                                                        $menu_icon = get_field('menu_icon', $child_item['ID']);
                                                                        $menu_text = get_field('menu_text', $child_item['ID']);
                                                                    ?>
                                                                        <li>
                                                                            <a href="<?php echo esc_html($child_item['url']); ?>" title="<?php echo esc_html($child_item['title']); ?>">
                                                                                <div class="icon">
                                                                                    <?php if (!empty($menu_icon)) { ?>
                                                                                        <img src="<?php echo $menu_icon["url"] ?>" alt="<?php echo esc_html($child_item['title']); ?>">
                                                                                    <?php } else { ?>
                                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/send_money.svg" alt="<?php echo esc_html($child_item['title']); ?>">
                                                                                    <?php } ?>
                                                                                </div>
                                                                                <div class="text">
                                                                                    <span class="link-text"><?php echo esc_html($child_item['title']); ?></span>
                                                                                    <?php if ($menu_text) { ?>
                                                                                        <span class="link-subtext"><?php echo $menu_text ?></span>
                                                                                    <?php } ?>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php } else { ?>
                                                <li class="nav-item">
                                                    <a href="<?php echo esc_url($menu_item['url']); ?>"
                                                        title="<?php echo esc_html($menu_item['title']); ?>"
                                                        class="nav-link"><?php echo esc_html($menu_item['title']); ?></a>
                                                </li>
                                    <?php }
                                        }
                                    } ?>

                                    <li class="nav-item lang-selector--wrapper">
                                        <div class="flag-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flag/uk.svg" alt="Flag">
                                        </div>
                                        <div>
                                            <select id="langSelector" class="lang-selector">

                                                <?php
                                                $en_selected = "";
                                                $fr_selected = "";
                                                if (isset($_GET["lang"])) {
                                                    if ($_GET["lang"] == "en") {
                                                        $en_selected = "selected";
                                                    }
                                                    if ($_GET["lang"] == "fr") {
                                                        $fr_selected = "selected";
                                                    }
                                                }
                                                ?>
                                                <option value="?lang=en" <?php echo $en_selected ?>>EN</option>
                                                <option value="?lang=fr" <?php echo $fr_selected ?>>FR</option>
                                            </select>
                                        </div>
                                    </li>

                                    <?php if (!empty($button_text)): ?>
                                        <li class="nav-item">
                                            <a href="<?php echo esc_url($button_link); ?>" title="<?php echo esc_html($button_text); ?>"
                                                class="btn btn-bright-green"><?php echo esc_html($button_text); ?></a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header> -->
    <main>