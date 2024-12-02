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
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Global Payments">Global Payments</a>
                        <div class="dropdown-menu mega-menu">
                            <div class="mega-menu--container">
                                <div class="mega-menu--col">
                                    <div class="title"><span>Global Payments</span></div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#" title="International Payments">
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/send_money.svg" alt="International Payments">
                                                </div>
                                                <div class="text">
                                                    <span class="link-text">International Payments</span>
                                                    <span class="link-subtext">Send money globally</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" title="Pay abroad">
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/receive_money.svg" alt="Pay abroad">
                                                </div>
                                                <div class="text">
                                                    <span class="link-text">Pay abroad</span>
                                                    <span class="link-subtext">Pay suppliers ahead</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" title="Receive Money">
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/account_balance.svg" alt="Receive Money">
                                                </div>
                                                <div class="text">
                                                    <span class="link-text">Receive Money</span>
                                                    <span class="link-subtext">Receive International Payments</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" title="Issue Cards">
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/send_money.svg" alt="Issue Cards">
                                                </div>
                                                <div class="text">
                                                    <span class="link-text">Issue Cards</span>
                                                    <span class="link-subtext">Issue Cards for your team</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" title="Multi currency wallet">
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/send_money.svg" alt="Multi currency wallet">
                                                </div>
                                                <div class="text">
                                                    <span class="link-text">Multi currency wallet</span>
                                                    <span class="link-subtext">Hold funds in multiple currencies</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" title="Local account details">
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/send_money.svg" alt="Local account details">
                                                </div>
                                                <div class="text">
                                                    <span class="link-text">Local account details</span>
                                                    <span class="link-subtext">Receive local account details</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Multi Currency Account">Multi Currency Account</a>
                        <div class="dropdown-menu mega-menu">
                            <div class="mega-menu--container">
                                <div class="mega-menu--col">
                                    <div class="title"><span>Multi Currency Account</span></div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#" title="Send money globally">
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/send_money.svg" alt="Send money globally">
                                                </div>
                                                <div class="text">
                                                    <span class="link-text">Send money globally</span>
                                                    <span class="link-subtext">Send money in over 20+ currencies</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" title="Receive Money">
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/receive_money.svg" alt="Receive Money">
                                                </div>
                                                <div class="text">
                                                    <span class="link-text">Receive Money</span>
                                                    <span class="link-subtext">Receive funds</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" title="Manage your Account">
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/account_balance.svg" alt="Manage your Account">
                                                </div>
                                                <div class="text">
                                                    <span class="link-text">Manage your Account</span>
                                                    <span class="link-subtext">Manage your account in realtime</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" title="PaayCo Card">
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/send_money.svg" alt="PaayCo Card">
                                                </div>
                                                <div class="text">
                                                    <span class="link-text">PaayCo Card</span>
                                                    <span class="link-subtext">Receive a Paayco spend card</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Cards">Cards</a>
                        <div class="dropdown-menu mega-menu">
                            <div class="mega-menu--container">
                                <div class="mega-menu--col">
                                    <div class="title"><span>Cards</span></div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#" title="Issue Cards">
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/send_money.svg" alt="Issue Cards">
                                                </div>
                                                <div class="text">
                                                    <span class="link-text">Issue Cards</span>
                                                    <span class="link-subtext">Issue Cards for your team</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Expense Cards">
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/send_money.svg" alt="Expense Cards">
                                                </div>
                                                <div class="text">
                                                    <span class="link-text">Expense Cards</span>
                                                    <span class="link-subtext">Track company expenses</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" title="Employeee Card">
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/receive_money.svg" alt="Employeee Card">
                                                </div>
                                                <div class="text">
                                                    <span class="link-text">Employeee Card</span>
                                                    <span class="link-subtext">Track Employeee Cards</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

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