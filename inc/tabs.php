<div class="tabs">
    <?php
    $current_template = basename(get_page_template());
    $menu_type = display_matching_menu();
    global $post;
    ?>
    <?php if (is_front_page() || $current_template == "frontpage-corporate.php") {
        $menu_type = "corporate_menu";
        ?>
        <input type="radio" class="corporate-tab active" id="corporate-tab" name="tabs"/>
        <label class="tab active" for="corporate-tab">Corporate</label>
    <?php } else {
        ?>
        <input type="radio" id="corporate-tab" name="tabs"/>
        <label class="tab" for="corporate-tab">Corporate</label>
    <?php } ?>
    <?php if ($current_template == "_front-page.php") {
        $menu_type = "main";
        ?>
        <input type="radio" class="business-tab active" id="business-tab" name="tabs" checked/>
        <label class="tab active" for="business-tab">Business</label>
    <?php } else { ?>
        <input type="radio" id="business-tab" name="tabs"/>
        <label class="tab" for="business-tab">Business</label>
    <?php } ?>
    <?php if ($current_template == "frontpage-personal.php") {
        $menu_type = "personal_menu";
        ?>
        <input type="radio" class="personal-tab active" id="personal-tab" name="tabs" checked/>
        <label class="tab active" for="personal-tab">Personal</label>
    <?php } else { ?>
        <input type="radio" id="personal-tab" name="tabs"/>
        <label class="tab" for="personal-tab">Personal</label>
    <?php } ?>
    <span class="glider"></span>
</div>