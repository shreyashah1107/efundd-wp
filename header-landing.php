<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />


    <title><?php wp_title(''); ?><?php bloginfo('name'); ?></title>

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
</head>

<body>
    <!-- Start: Header -->
    <header class="header-landing" id="header" js-header>
        <div class="container">
            <div class="row justify-content-center flex-grow-1">
                <div class="col-xxl-11">
                    <div class="header-landing__container">
                        <div class="header-landing__wrapper">
                            <div class="header-landing__main">
                                <!-- Logo Wrapper -->
                                <div class="header-landing__logo-wrapper">
                                    <div class="header-landing__logo">
                                        <a href="<?php echo home_url() ?>" class="header-landing__logo-link"
                                            title="<?php _e("Paayco Logo", "") ?>">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/header-logo-primary-new.png"
                                                alt="Logo">
                                        </a>
                                    </div>
                                </div>
                                <!-- Logo Wrapper -->

                                <ul class="header-landing__nav-list header-landing__nav-list--left" id="mainNavList" role="menubar">
                                    <li class="header-landing__nav-list-item header-landing__nav-list-item--has-submenu" role="menuitem" js-nav-item>
                                        <div class="header-landing__nav-list-item-inner">
                                            <a href="#" class="header-landing__nav-list-item-link" title="Corporate"> Corporate <span></span>
                                            </a>
                                        </div>
                                        <div class="header-landing__nav-list-item-submenu" js-nav-item-submenu>
                                            <div class="header-landing__nav-list-item-submenu-wrapper">
                                                <div class="submenu-grid--items">
                                                    <div class="submenu-grid--item">
                                                        <div class="title">
                                                            <span>Global payments</span>
                                                        </div>
                                                        <ul class="header-landing__nav-list-item-submenu-list" role="menu">
                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Pay abroad">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/contract.svg" alt="Pay abroad">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Pay abroad</span>
                                                                        <span class="link-subtext">Pay suppliers abroad</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Receive money">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/send_money.svg" alt="Receive money">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Receive money</span>
                                                                        <span class="link-subtext">Receive international payments</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Multi currency wallet">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/point_of_sale.svg" alt="Multi currency wallet">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Multi currency wallet</span>
                                                                        <span class="link-subtext">Hold funds in multiple currencies</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Local account details">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/leak_add.svg" alt="Local account details">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Local account details</span>
                                                                        <span class="link-subtext">Receive local bank account details</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="submenu-grid--item">
                                                        <div class="title">
                                                            <span>Corporate cards</span>
                                                        </div>
                                                        <ul class="header-landing__nav-list-item-submenu-list" role="menu">
                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Issue Cards">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/credit_card.svg" alt="Issue Cards">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Issue Cards</span>
                                                                        <span class="link-subtext">Issue Cards for your Team</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Expenses Cards">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/contract.svg" alt="Expenses Cards">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Expenses Cards</span>
                                                                        <span class="link-subtext">Track Company Expenses</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Employee Card">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/badge.svg" alt="Employee Card">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Employee Card</span>
                                                                        <span class="link-subtext">Track Employee Cards</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Company Card">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/add_card.svg" alt="Company Card">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Company Card</span>
                                                                        <span class="link-subtext">Issue multi currency company cards</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Card Controls">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/credit_card_gear.svg" alt="Card Controls">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Card Controls</span>
                                                                        <span class="link-subtext">Customise the card controls</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="submenu-grid--item">
                                                        <div class="title">
                                                            <span>Accounting</span>
                                                        </div>
                                                        <ul class="header-landing__nav-list-item-submenu-list" role="menu">
                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Billing">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/billing.svg" alt="Billing">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Billing</span>
                                                                        <span class="link-subtext">Billing Solution</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Invoicing">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/contract.svg" alt="Invoicing">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Invoicing</span>
                                                                        <span class="link-subtext">Invoicing Solution</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Accounting">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/account_balance.svg" alt="Accounting">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Accounting</span>
                                                                        <span class="link-subtext">Accountant access</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="submenu-grid--item">
                                                        <div class="title">
                                                            <span>Plus CRM</span>
                                                        </div>
                                                        <ul class="header-landing__nav-list-item-submenu-list" role="menu">
                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Sales">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/point_of_sale.svg" alt="Sales">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Sales</span>
                                                                        <span class="link-subtext">Invoice management solution</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Expenses">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/contract.svg" alt="Expenses">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Expenses</span>
                                                                        <span class="link-subtext">Accounts payable management</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Contracts">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/contract_edit.svg" alt="Contracts">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Contracts</span>
                                                                        <span class="link-subtext">Manage your contracts</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Projects">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/tactic.svg" alt="Projects">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Projects</span>
                                                                        <span class="link-subtext">Team project management software</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="header-landing__nav-footer">
                                                    <div class="header-landing__nav-footer-left">
                                                        <div class="explore-link">
                                                            <div class="icon">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/explore.svg" alt="Pay abroad">
                                                            </div>
                                                            <a href="#" title="Explore our platform" class="text">
                                                                Explore our platform
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="header-landing__nav-footer-right">
                                                        <a href="#" title="Open Account" class="btn btn-bright-green">Open Account</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class=" header-landing__nav-list-item header-landing__nav-list-item--has-submenu" role="menuitem" js-nav-item>
                                        <div class="header-landing__nav-list-item-inner">
                                            <a href="#" class="header-landing__nav-list-item-link" title="Business"> Business <span></span>
                                            </a>
                                        </div>
                                        <div class="header-landing__nav-list-item-submenu" js-nav-item-submenu>
                                            <div class="header-landing__nav-list-item-submenu-wrapper">
                                                <div class="submenu-grid--items">
                                                    <div class="submenu-grid--item">
                                                        <div class="title">
                                                            <span>In-person payments</span>
                                                        </div>
                                                        <ul class="header-landing__nav-list-item-submenu-list" role="menu">
                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Mini Card Machines">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/minicard.svg" alt="Mini Card Machines">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Mini Card Machines</span>
                                                                        <span class="link-subtext">For payments on the go</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Max Card Machines">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/point_of_sale.svg" alt="Max Card Machines">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Max Card Machines</span>
                                                                        <span class="link-subtext">For In Person Payments</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Shop Card Machines">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/shop_card.svg" alt="Shop Card Machines">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Shop Card Machines</span>
                                                                        <span class="link-subtext">For retail payment</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Unattended Terminals">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/local_atm.svg" alt="Unattended Terminals">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Unattended Terminals</span>
                                                                        <span class="link-subtext">Self serve checkout</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="submenu-grid--item">
                                                        <div class="title">
                                                            <span>Online payments</span>
                                                        </div>
                                                        <ul class="header-landing__nav-list-item-submenu-list" role="menu">
                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Online Payments">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/leak_add.svg" alt="Online Payments">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Online Payments</span>
                                                                        <span class="link-subtext">E-commerce Payments</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Payment Link">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/attach_file.svg" alt="Payment Link">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Payment Link</span>
                                                                        <span class="link-subtext">Allow customer to pay using a link</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Components">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/cards.svg" alt="Components">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Components</span>
                                                                        <span class="link-subtext">Build your own custom UI</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Charity Donation">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/volunteer_activism.svg" alt="Charity Donation">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Charity Donation</span>
                                                                        <span class="link-subtext">Process integrated charity donations</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Recurring Payments">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/cycle.svg" alt="Recurring Payments">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Recurring Payments</span>
                                                                        <span class="link-subtext">Weekly-Monthly Recurring Payments</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Virtual Terminal">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/router.svg" alt="Virtual Terminal">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Virtual Terminal</span>
                                                                        <span class="link-subtext">Process remote payments</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="submenu-grid--item">
                                                        <div class="title">
                                                            <span>Security</span>
                                                        </div>
                                                        <ul class="header-landing__nav-list-item-submenu-list" role="menu">
                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Flag">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/flag.svg" alt="Flag">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Flag</span>
                                                                        <span class="link-subtext">Flags fraudulent payments</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Fraud Detection">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/fraud_detection.svg" alt="Fraud Detection">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Fraud Detection</span>
                                                                        <span class="link-subtext">Machine AI fraud detection</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="header-landing__nav-footer">
                                                    <div class="header-landing__nav-footer-left">
                                                        <div class="explore-link">
                                                            <div class="icon">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/explore.svg" alt="Pay abroad">
                                                            </div>
                                                            <a href="#" title="Explore our platform" class="text">
                                                                Explore our platform
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="header-landing__nav-footer-right">
                                                        <a href="#" title="Open Account" class="btn btn-bright-green">Open Account</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="header-landing__nav-list-item header-landing__nav-list-item--has-submenu" role="menuitem" js-nav-item>
                                        <div class="header-landing__nav-list-item-inner">
                                            <a href="#" class="header-landing__nav-list-item-link" title="Personal"> Personal <span></span>
                                            </a>
                                        </div>
                                        <div class="header-landing__nav-list-item-submenu" js-nav-item-submenu>
                                            <div class="header-landing__nav-list-item-submenu-wrapper">
                                                <div class="submenu-grid--items">
                                                    <div class="submenu-grid--item">
                                                        <div class="title">
                                                            <span>Online payment </span>
                                                        </div>
                                                        <ul class="header-landing__nav-list-item-submenu-list" role="menu">
                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="International Payments">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/globe_uk.svg" alt="International Payments">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">International Payments</span>
                                                                        <span class="link-subtext">Send money globally</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Multi currency wallet">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/account_balance_wallet.svg" alt="Multi currency wallet">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Multi currency wallet</span>
                                                                        <span class="link-subtext">Hold funds in multiple currencies</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Local account details">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/assignment_ind.svg" alt="Local account details">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Local account details</span>
                                                                        <span class="link-subtext">Receive local bank account details</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="submenu-grid--item">
                                                        <div class="title">
                                                            <span>Cards</span>
                                                        </div>
                                                        <ul class="header-landing__nav-list-item-submenu-list" role="menu">
                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Physical Card">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/id_card.svg" alt="Physical Card">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Physical Card</span>
                                                                        <span class="link-subtext">Order Phsyical Card</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Virtual Card">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/toll.svg" alt="Virtual Card">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Virtual Card</span>
                                                                        <span class="link-subtext">Receive instant virtual card</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Cashback">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/point_of_sale.svg" alt="Cashback">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Cashback</span>
                                                                        <span class="link-subtext">Earn cashback on eligible card purchases</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="submenu-grid--item">
                                                        <div class="title">
                                                            <span>Security & Protection</span>
                                                        </div>
                                                        <ul class="header-landing__nav-list-item-submenu-list" role="menu">
                                                            <li class="header-landing__nav-list-item-submenu-list-item" role="menuitem">
                                                                <a href="#" class="header-landing__nav-list-item-submenu-list-item-link" title="Fraud Detection">
                                                                    <div class="icon">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/fraud_detection.svg" alt="Fraud Detection">
                                                                    </div>
                                                                    <div class="text">
                                                                        <span class="link-text">Fraud Detection</span>
                                                                        <span class="link-subtext">Machine AI fraud detection</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="header-landing__nav-footer">
                                                    <div class="header-landing__nav-footer-left">
                                                        <div class="explore-link">
                                                            <div class="icon">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/redesign/menu-icon/explore.svg" alt="Pay abroad">
                                                            </div>
                                                            <a href="#" title="Explore our platform" class="text">
                                                                Explore our platform
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="header-landing__nav-footer-right">
                                                        <a href="#" title="Open Account" class="btn btn-bright-green">Open Account</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="header-landing__nav-list-item" role="menuitem" js-nav-item>
                                        <div class="header-landing__nav-list-item-inner">
                                            <a href="#" class="header-landing__nav-list-item-link" title="Pricing"> Pricing </a>
                                        </div>
                                    </li>
                                </ul>

                                <ul class="header-landing__nav-list header-landing__nav-list--right">
                                    <li class="header-landing__nav-list-item lang-selector--wrapper" role="menuitem">
                                        <?php echo the_language_switcher()
                                        ?>
                                    </li>
                                    <li class="header-landing__nav-list-item" role="menuitem">
                                        <a href="http://app.paayco.com/" class="header-landing__nav-list-item-link" title="Log In">Log In</a>
                                    </li>
                                    <li class="header-landing__nav-list-item" role="menuitem">
                                        <a href="#" title="Open Account" class="btn btn-bright-green">Open Account</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Hamburger Button -->
                            <div class="header-landing__hamburger-wrapper">
                                <!-- Language Dropdown -->
                                <div class="lang-selector--wrapper">
                                    <?php echo the_language_switcher()
                                    ?>
                                </div>
                                <!-- Hamburger Icon -->
                                <div>
                                    <button class="header-landing__hamburger" aria-label="Toggle menu" aria-expanded="false"
                                        aria-controls="mobileNav" js-hamburger>
                                        <div class="header-landing__hamburger-inner">
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
                    <?php include 'header-landing-mobile.php'; ?>
                    <!-- End: Mobile Navigation -->
                </div>
            </div>
        </div>
    </header>
    <main>