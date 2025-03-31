<div class="tabs">
    <?php
    $menu_type = display_matching_menu();
    global $post;
    $current_slug = $post->post_name;
    ?>
    <?php if (is_front_page() || $menu_type == "corporate_menu") {
        $menu_type ="corporate_menu";
        ?>
        <input type="radio" class="corporate-tab active" id="corporate-tab" name="tabs"/>
        <label class="tab active" for="corporate-tab">Corporate</label>
    <?php } else {
        ?>
        <input type="radio" id="corporate-tab" name="tabs"/>
        <label class="tab" for="corporate-tab">Corporate</label>
    <?php } ?>
    <?php if ($current_slug == 'business' || $menu_type == "main") {
        $menu_type ="main";
        ?>
        <input type="radio" class="business-tab active" id="business-tab" name="tabs" checked/>
        <label class="tab active" for="business-tab">Business</label>
    <?php } else { ?>
        <input type="radio" id="business-tab" name="tabs"/>
        <label class="tab" for="business-tab">Business</label>
    <?php } ?>
    <?php if ($current_slug == 'personal' || $menu_type == "personal_menu") {
        $menu_type ="personal_menu";
        ?>
        <input type="radio" class="personal-tab active" id="personal-tab" name="tabs" checked/>
        <label class="tab active" for="personal-tab">Personal</label>
    <?php } else { ?>
        <input type="radio" id="personal-tab" name="tabs"/>
        <label class="tab" for="personal-tab">Personal</label>
    <?php } ?>
    <span class="glider"></span>
</div>