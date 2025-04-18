<!-- Start: Mobile Navigation -->
<div class="header__nav-mobile-wrapper" id="mobileNav">
  <div class="header__nav-mobile-inner">
    <nav class="header__nav-mobile" role="navigation" aria-label="Mobile Navigation">
      <div>
        <div class="sliding-tabs">
          <?php include 'inc/tabs.php'; ?>
        </div>

        <ul class="header__nav-mobile-list" role="menu">
          <?php
          $main_menu = render_menu($menu_type);
          if (isset($main_menu)) {
            foreach ($main_menu as $menu_item) {
              if (!empty($menu_item['children']) && isset($menu_item['title'])) {
                $menu_children = $menu_item["children"];
          ?>
                <li class="header__nav-mobile-list-item has-children" role="menuitem" js-mobile-nav-item>
                  <div class="container">
                    <div class="header__nav-mobile-list-item-inner">
                      <a href="<?php echo esc_url($menu_item['url']); ?>" class="header__nav-mobile-list-item-link" title="<?php echo esc_html($menu_item['title']); ?>"> <?php echo esc_html($menu_item['title']); ?> </a>
                      <button class="header__nav-mobile-list-item-btn" aria-expanded="false" js-mobile-nav-item-btn>
                        <span></span>
                      </button>
                    </div>
                    <div class="header__nav-mobile-list-item-submenu-wrapper" js-mobile-nav-item-submenu>
                      <div class="header__nav-mobile-list-item-submenu">
                        <ul class="header__nav-mobile-list-item-submenu-list" role="menu">
                          <?php
                          foreach ($menu_children as $child_item) {
                            $menu_icon = get_field('menu_icon', $child_item['ID']);
                            $menu_text = get_field('menu_text', $child_item['ID']);
                          ?>
                            <li class="header__nav-mobile-list-item-submenu-list-item" role="menuitem" js-nav-item-submenu-item>
                              <a href="<?php echo esc_html($child_item['url']); ?>" class="header__nav-mobile-list-item-submenu-list-item-link" title="<?php echo esc_html($child_item['title']); ?>"> <?php echo esc_html($child_item['title']); ?> </a>
                            </li>
                          <?php } ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              <?php } else { ?>
                <li class="header__nav-mobile-list-item" role="menuitem" js-mobile-nav-item>
                  <div class="container">
                    <div class="header__nav-mobile-list-item-inner">
                      <a href="<?php echo esc_url($menu_item['url']); ?>" class="header__nav-mobile-list-item-link" title="<?php echo esc_html($menu_item['title']); ?>"> <?php echo esc_html($menu_item['title']); ?> </a>
                    </div>
                  </div>
                </li>
          <?php }
            }
          } ?>
        </ul>
      </div>

      <div class="auth-btns">
        <div class="container">
          <a href="#" class="btn btn-bright-green" title="Sign up">Sign up</a>
          <a href="#" class="btn btn-white" title="Log in">Log in</a>
        </div>
      </div>
    </nav>
  </div>
</div>
<!-- End: Mobile Navigation -->