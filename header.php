<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>


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
<header class="header bg-primary">
    <nav class="navbar fixed-top navbar-expand-xl bg-primary" data-bs-theme="dark">
        <div class="container-xxl">
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
                    <div class="tabs">
                        <?php
                        global $post;
                        $current_slug = $post->post_name;
                        ?>
                        <?php if (is_front_page()) { ?>
                            <input type="radio" id="corporate-tab" name="tabs" checked/>
                            <label class="tab" for="corporate-tab">Corporate</label>
                        <?php } else { ?>
                            <input type="radio" id="corporate-tab" name="tabs"/>
                            <label class="tab" for="corporate-tab">Corporate</label>
                        <?php } ?>
                        <?php if ($current_slug == 'business-landing-page') { ?>
                            <input type="radio" id="business-tab" name="tabs" checked/>
                            <label class="tab" for="business-tab">Business</label>
                        <?php } else { ?>
                            <input type="radio" id="business-tab" name="tabs"/>
                            <label class="tab" for="business-tab">Business</label>
                        <?php } ?>
                        <?php if ($current_slug == 'personal-landing-page') { ?>
                            <input type="radio" id="personal-tab" name="tabs" checked/>
                            <label class="tab" for="personal-tab">Personal</label>
                        <?php } else { ?>
                            <input type="radio" id="personal-tab" name="tabs"/>
                            <label class="tab" for="personal-tab">Personal</label>
                        <?php } ?>
                        <span class="glider"></span>
                    </div>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#headerNav"
                    aria-controls="headerNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="headerNav">
                <ul class="navbar-nav ms-auto">
                    <?php
                    $main_menu = render_menu('main');
                    if (isset($main_menu)):
                        foreach ($main_menu as $menu_item) {
                            if (!empty($menu_item['children']) && isset($menu_item['title'])) {
                                $menu_children = $menu_item["children"];
                                ?>
                                <li class="nav-item dropdown">
                                    <a href="<?php echo esc_url($menu_item['url']); ?>" class="nav-link dropdown-toggle"
                                       role="button" data-bs-toggle="dropdown"
                                       aria-expanded="false" title="<?php echo esc_html($menu_item['title']); ?>">
                                        <?php echo esc_html($menu_item['title']); ?>
                                    </a>
                                    <div class="dropdown-menu mega-menu">
                                        <div class="mega-menu--container">
                                            <?php
                                            foreach ($menu_children as $child_item) {
                                                if (!empty($child_item['children'])) {
                                                    $third_level_children = $child_item["children"];
                                                    $menu_icon = get_field('menu_icon', $child_item['ID']);
                                                    ?>
                                                    <div class="mega-menu--col">
                                                        <div class="title">
                                                            <?php if (!empty($menu_icon)): ?>
                                                                <div class="icon">

                                                                    <img src="<?php echo $menu_icon["url"] ?>"
                                                                         alt="<?php echo @$menu_icon["alt"] ?>">

                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="text"><?php echo esc_html($child_item['title']); ?></div>
                                                        </div>
                                                        <ul class="list-unstyled">
                                                            <?php foreach ($third_level_children as $third_item) { ?>
                                                                <li><a href="<?php echo esc_url($third_item['url']); ?>"
                                                                       title="<?php echo esc_html($third_item['title']); ?>">
                                                                        <?php echo esc_html($third_item['title']); ?>
                                                                    </a>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="mega-menu--col">
                                                        <a href="<?php echo esc_url($child_item['url']); ?>"
                                                           title="<?php echo esc_html($child_item['title']); ?>">
                                                            <?php echo esc_html($child_item['title']); ?>
                                                        </a>
                                                    </div>
                                                <?php }
                                            } ?>
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
                    endif; ?>
                    <li class="nav-item lang-selector--wrapper">
                        <div class="flag-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flag/uk.svg" alt="Flag">
                        </div>
                        <div>
                            <select id="langSelector" class="lang-selector">
                                <option selected="selected" value="#">EN</option>
                                <option value="#/fr/">FR</option>
                            </select>
                        </div>
                    </li>
                    <?php if (!empty($button_text)): ?>
                        <li class="nav-item">
                            <a href="<?php echo esc_url($button_link); ?>" title="<?php echo esc_html($button_text); ?>"
                               class="btn btn-light-green"><?php echo esc_html($button_text); ?></a>
                        </li>
                    <?php endif; ?>
                </ul>

            </div>
        </div>
    </nav>
</header>
<main>