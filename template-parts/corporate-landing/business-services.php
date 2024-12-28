<?php
$business_payment_services_section = get_field('business_payment_services_section');
if ($business_payment_services_section):
    $services = $business_payment_services_section["services"];
    ?>
    <section class="business-services">
        <div class="container">
            <div class="title-row text-center">
                <h3 class="section-title section-title--lg"><?php echo $business_payment_services_section["title"] ?></h3>
                <p>No monthly or subscription fees. Only pay for what you use.</p>
            </div>
            <?php if (!empty($services)): ?>
                <div class="business-services--grid">
                    <?php foreach ($services as $service):
                        $service_image = $service["image"];
                        ?>
                        <div class="card-business-services">
                            <?php if (!empty($service_image)): ?>
                                <div class="icon">
                                    <img src="<?php echo $service_image["url"] ?>" alt="<?php echo @$service_image["alt"] ?>">
                                </div>
                            <?php endif; ?>
                            <div class="statistics"><?php echo $service["title"] ?></div>
                            <div class="text"><?php echo $service["text"] ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>