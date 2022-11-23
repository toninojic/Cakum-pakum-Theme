<?php
/**
 * The template for displaying home page
 *
 * @package Cakum_Pakum
 */

get_header();
?>

    <main id="primary" class="site-main">


    <?php 

    $icons_content_array = [
        'icon1' => [
            'icon_class' => 'bi bi-kanban-fill',
            'paragraph_content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit modi velit harum voluptas recusandae adipisci.'
        ],
        'icon2' => [
            'icon_class' => 'bi bi-kanban',
            'paragraph_content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus fugit fugiat id optio non delectus.'
        ],
        'icon3' => [
            'icon_class' => 'bi bi-kanban',
            'paragraph_content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus fugit fugiat id optio non delectus.'
        ]
    ];

    // $icons_content_array = [];

    if( ! empty( $icons_content_array ) ) {
        ?>
        <section id="front-section-icons">
            <div class="front-icons-container">
                <?php

                foreach( $icons_content_array as $icon_single_key => $icon_single_value ) {
                    ?>
                    <div class="front-icons-item">
                        <i class="<?php echo $icon_single_value[ 'icon_class' ]; ?>"></i>
                        <p class="front-icons-item-p"><?php echo $icon_single_value[ 'paragraph_content' ]; ?></p>
                    </div>
                    <?php
                }
                
                ?>
                
            </div>
        </section>
        
        <?php } ?>

        <?php 
            $our_services = [
                [
                    'img'     => '/assets/media/washing-machine.png',
                    'heading' => 'Washing Machine',
                    'desc'    => 'We provide best washing machine'
                ],
                [
                    'img'     => '/assets/media/carpet.png',
                    'heading' => 'Washing Machine',
                    'desc'    => 'We provide best washing machine'
                ],
                [
                    'img'     => '/assets/media/car.png',
                    'heading' => 'Washing Machine',
                    'desc'    => 'We provide best washing machine'
                ]
            ]

        ?>


        <?php if ( ! empty( $our_services ) ) { ?>
        <section id="front-our-services">
            <div class="container">
                <div class="front-our-services-title">
                    <h1>Our Services</h1>
                    <p>After your reservation, we will contact you for the further details and confirmation.</p>
                </div>

                <div class="front-our-services-container">
                    <?php foreach ($our_services as $service) { ?>
                        <div class="front-our-services-single-card">
                            <img src="<?php echo get_stylesheet_directory_uri() . $service['img']; ?>">
                            <h4><?php echo $service['heading']; ?></h4>
                            <p><?php echo $service['desc']; ?></p>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>
        </section>

        <?php } ?>


    </main><!-- #main -->

<?php
get_sidebar();
get_footer();
