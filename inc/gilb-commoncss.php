<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
} 
/**
 * @Packge     : GILB
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
 
// enqueue css
function gilb_common_custom_css(){
    
    wp_enqueue_style( 'gilb-common', get_template_directory_uri().'/assets/css/common.css' );

		$themeColor     		  = gilb_opt( 'gilb_theme_color' );
		$themeSecColor     		  = gilb_opt( 'gilb_secondary_theme_color' );

		$buttonHoverBgColor       = gilb_opt( 'gilb_booking_btn_bg_color' ) != '#fe5c24' ? gilb_opt('gilb_booking_btn_bg_color') : $themeSecColor;
		$buttonBorderColor     	  = gilb_opt( 'gilb_button_border_color' );
		$hoverColor     	  	  = gilb_opt( 'gilb_hover_color');

		$headerTop_bg     		  = gilb_opt( 'gilb_top_header_bg_color' );
		$headerTop_col     		  = gilb_opt( 'gilb_top_header_color' );

		$headerTopBg      		  = gilb_opt( 'gilb_top_header_bg_color');
		$headerBg          		  = gilb_opt( 'gilb_header_bg_color') != '#0a0b4d' ? gilb_opt( 'gilb_header_bg_color') : $themeColor;
		$menuColor          	  = gilb_opt( 'gilb_header_menu_color' ) != '#0c3e72' ? gilb_opt('gilb_header_menu_color') : $themeColor;
		$menuHoverColor           = gilb_opt( 'gilb_header_menu_hover_color' ) != '#ea5267' ? gilb_opt('gilb_header_menu_hover_color') : $themeSecColor;
		$menuFixedHoverColor      = gilb_opt( 'gilb_header_menu_fixed_hover_color' );
		$dropMenuBgColor          = gilb_opt( 'gilb_header_drop_menu_bg_color' ) != '#ea5267' ? gilb_opt('gilb_header_drop_menu_bg_color') : $themeSecColor;
		$dropMenuColor            = gilb_opt( 'gilb_header_drop_menu_color' );
		$dropMenuHovColor         = gilb_opt( 'gilb_header_drop_menu_hover_color' );

		$footerwbgColor     	  = gilb_opt('gilb_footer_bg_color') != '#0a0b4d' ? gilb_opt('gilb_footer_bg_color') : '';
		$footerwTextColor   	  = gilb_opt('gilb_footer_widget_text_color');
		$footerwanchorcolor 	  = gilb_opt('gilb_footer_widget_anchor_color') != '#999999' ? gilb_opt('gilb_footer_widget_anchor_color') : '';
		$footerwanchorhovcolor    = gilb_opt('gilb_footer_widget_anchor_hover_color') != '#ea5267' ? gilb_opt('gilb_footer_widget_anchor_hover_color') : $themeSecColor;
		
		$fofbg					  = gilb_opt('gilb_fof_bg_color');
		$foftonecolor			  = gilb_opt('gilb_fof_textone_color');
		$fofttwocolor			  = gilb_opt('gilb_fof_texttwo_color');

		$bannerBtnHeaderSpanColor = $themeColor != '#ff5e13' ? $themeColor : '';
		$footerAncDefColor 		  = $footerwanchorcolor != '#ea5267' ? $footerwanchorcolor : $themeColor;
		$footerAncDefHovColor 	  = $footerwanchorhovcolor != '#ea5267' ? $footerwanchorhovcolor : $themeSecColor;

		$customcss ="			
			.sub_menu
			{
				background-color: {$headerTopBg};
			}
			.hero-banner
			{
				background-color: {$themeColor};
			}
			
			.sub_menu .sub_menu_right_content span, .sub_menu .sub_menu_social_icon a:hover, .sub_menu .sub_menu_social_icon span i, .top_place .single_place .hover_Text .place_review a, .event_part .event_slider_content h5, .event_part .owl-nav button i, .about_us .about_text h5, .main_menu .social_icon i:hover, .about_part .about_text h4, .about_part h4, .section_tittle p, .portfolio_part .btn_2, .service_part .single_service_part .single_service_text .learn_btn, .review_part .section_tittle p, .footer_Part .footer_text span, .philosophy_part .philophy_text h5
			{
				color: {$themeSecColor};
			}
			
			.dropdown .dropdown-menu, .dropdown .dropdown-menu .dropdown-item
			{
				background-color: {$dropMenuBgColor};
			}

			.banner_part .banner_text h1 span
			{
				color: {$bannerBtnHeaderSpanColor} !important;
			}

			.main_menu nav .btn_1:hover, .booking_part .form-row .btn_1
			{
				background: {$buttonHoverBgColor};
			}

			.cta_part .cta_part_iner .cta_part_text p, .about_part .about_text h5, .our_latest_work .single_work_demo h5, .blog_part .single-home-blog .card h5:hover, .review_part .slick_right:hover, .review_part .slick_left:hover, .blog_part .single-home-blog .time, .blog_part .single-home-blog li span, .single_single_service span.fa, section.cta_area a.cta_btn:hover, .sub_menu .sub_menu_right_content i, .banner-breadcrumb .breadcrumb-item a, .banner_part .banner_text h5 span, .service_part .single_service_part i, .our_industries .single_industries h3 a:hover, .portfolio_part .card-columns .portfolio_btn, .see_more_project .btn_1:hover, .post_2 .post_text_1 h3:hover, .post_2 .category_post_img .category_btn, .footer-area .copyright_part_text a, .subscribe_area .subscribe_iner .btn_2:hover, .sl-button span:hover, .blog_right_sidebar .widget_gilb_recent_widget .post_item .media-body h3:hover, .project_details .project_details_widget .single_project_details_widget span, .blog_right_sidebar .widget_gilb_newsletter .btn_1, .gallery_part .single_gallery_item .single_gallery_item_iner .gallery_item_text p, .banner_part .banner_text h1 span, .catagory_post .single_catagory_post:hover h3, nav.navigation.pagination .next span:hover, .single-post-area .navigation-area h4:hover, .about_part .about_part_text ul li span, .our_service .single_service span, .our_service .btn_3:hover, .experiance_part .about_text_iner .about_text_counter h2, .our_project .project_menu_item ul li:hover, .our_project .project_menu_item .active, .our_project .single_our_project .single_offer .hover_text p, .member_counter .single_member_counter span, .review_part .owl-nav button span:hover, .about_part .about_part_text h5, .our_project .section_tittle p, .our_project .more_btn_iner, .footer-area .social_icon a:hover, .footer-area .single-footer-widget ul li a:hover, .sub_menu .sub_menu_right_content a, .sub_menu .sub_menu_social_icon a, .sub_menu .sub_menu_social_icon span, .event_part .event_slider_content h2, .event_part .event_slider_content p span, .hotel_list .single_ihotel_list .hotel_text_iner h3 a, .best_services .single_ihotel_list h3 a, .about_us .about_text h2, .breadcrumb-item, .breadcrumb-item.active, li.breadcrumb-item a, .section_tittle h2, .service_part .single_service_part .single_service_text span, .service_part .single_service_part .single_service_text h2, .blog_right_sidebar .widget_gilb_blog_widget .post_item .media-body h3, .blog_area a h2, .blog_details h2, .philosophy_part .philophy_text h2, .project_details ul li a
			{
				color: {$themeColor}
			}			
			.portfolio_part .card-columns .portfolio_btn path{
				fill: {$themeColor}
			}
			.our_latest_work .single_work_demo .btn_3:hover, .team_member_section .single_team_member .single_team_text h3 a:hover, .team_member_section .single_team_member .team_member_social_icon a:hover, .blog_part .single-home-blog .card .card-body a:hover, .pre_icon a:hover, .next_icon a:hover, .banner-breadcrumb > ol > li.breadcrumb-item > a.bread-link:hover, .banner-breadcrumb .breadcrumb-item a:hover, .blog_details a:hover, .blog_right_sidebar .widget_categories ul li:hover, .blog_right_sidebar .widget_categories ul li:hover a, .blog_right_sidebar .widget_categories ul li a:hover, .post_2 .category_post_img .category_btn:hover, .gallery_part .portfolio-filter .active, .our_service .single_offer_text .btn_1:hover, li.breadcrumb-item a:hover {
				color: {$themeColor}!important;
			}

			.review_part .intro_video_bg .video-play-button, .review_part .owl-prev span:after, .review_part .owl-next span:after, .review_part .intro_video_bg .video-play-button:after, .review_part .intro_video_bg .video-play-button:before, .review_part .intro_video_bg .video-play-button:hover:after, .blog_item_img .blog_item_date, .single_sidebar_widget .tagcloud a:hover, .pre_icon :after, .next_icon :after, section.cta_area, .service_part .single_service_part .line:after, .about_part .about_text .btn_2:hover, .section_tittle h2:after, .our_industries .single_industries h3:after, .faq_part .faq_content .active .accordion-header h2:before, .portfolio_part .card-columns .blockquote h2:after, .see_more_project .btn_1, .contact-section .btn_2:hover, .banner_part .banner_text .btn_1:hover:before, .banner_part .banner_text .btn_1:hover:after, .about_us .about_us_text .btn_2:hover, .our_service .single_offer_text .btn_1:hover:before, .our_service .single_offer_text .btn_1:hover:after, .main_menu nav .btn_1, .our_service .btn_3:hover:after, .blog_part .single-home-blog .card .card-body a:hover:after, .about_part .about_part_text .btn_1, .our_project .more_btn_iner:hover, .cta_part .btn_1, .search-page .backtohome .btn_1, .f0f-content .btn_1, .booking_part .form-row .btn_1:hover, .top_place .single_place:after, .top_place .btn_1:hover, .event_part .btn_1:hover, .client_review, .intro_video_bg .video-play-button:before, .intro_video_bg .video-play-button:after
			{
				background: {$themeColor}
			}

			.about_part .about_part_text .btn_1:hover, .our_service .single_service:hover, .creative .creative_part_text a i, .cta_part:after, .cta_part .btn_1:hover, .search-page .backtohome .btn_1, .contact-section .button-contactForm:hover, .f0f-content .btn_1, .top_place .single_place .hover_Text .place_btn, .top_place .btn_1, .event_part .btn_1, .about_part .about_text .btn_3:hover, .banner_part .banner_text .btn_1, .footer_Part .footer_btn .btn_1, .button:not(.wpcf7-submit), .blog_right_sidebar .single_sidebar_widget.widget_gilb_newsletter .btn, .form-contact .form-group .btn_1, .contact-section .button-contactForm
			{
				background: {$themeSecColor};
			}

			.portfolio_part .btn_2, .blog_area a h2:hover
			{
				border-color: {$themeSecColor};
			}

			.blog_area a h2:hover
			{
				color: {$themeSecColor} !important;
			}

			.btn_4, .our_Professional .single_industries_text:hover, .pricing_part .single_pricing_part .pricing_content .btn_2:hover, .comment-form .comment-respond .btn_2:hover{
				border-color: {$themeColor};
				background-color: {$themeColor};
			}
			.btn_4:hover{
				color: {$themeColor}!important;
			}
			.about_us .about_us_text .btn_2:hover, .blog_right_sidebar .widget_search .btn_2{
				border-color: {$themeColor}!important;
			}

			.service_part .single_service_part:hover .single_service_part_iner span, .banner_part .banner_text .btn_1:hover, .footer_Part .footer_btn .btn_1:hover, .form-contact .form-group .btn_1:hover, .button:not(.wpcf7-submit):hover, .search-page .backtohome .btn_1:hover, .f0f-content .btn_1:hover, .contact-section .button-contactForm:hover
			{
				background: {$themeColor}!important;
			}

			.btn_2:hover,
			.copyright_part .footer-social a:hover
			{
				background: {$hoverColor}!important;
			}

			.blog_part .single-home-blog .card h5:hover
			{
				color: {$hoverColor};
			}

			.about_part .about_img h2:after, .copyright_part .footer-social a, .contact-section .btn_2:hover, .our_project .more_btn_iner, .food_menu .single_food_item, .review_part .center .client_review_text p 
			{
				border-color: {$themeColor}
			}

			.review_part .center .client_review_text p:after
			{
				border-top-color: {$themeColor}
			}
			
			.sub_header{
				background: {$headerTop_bg}
			}
			.sub_header .sub_header_social_icon a,
			.sub_header .sub_header_social_icon .register_icon
			{
				color: {$headerTop_col}
			}

			.main_menu.menu_fixed
			{
				background: {$headerBg};
			}
			.main_menu .main-menu-item ul li .nav-link, .main_menu .main-menu-item ul li.active .nav-link
			{
			   color: {$menuColor} !important;
			}
			.main_menu .main-menu-item ul li .nav-link:not(.dropdown-item):hover
			{
			   color: {$menuHoverColor} !important;
			}
			.main_menu.menu_fixed .main-menu-item ul li .nav-link:not(.dropdown-item):hover
			{
			   color: {$menuFixedHoverColor} !important;
			}
			
			.main_menu .main-menu-item ul.dropdown-menu li .nav-link, .dropdown .dropdown-menu .dropdown-item
			{
			   color: {$dropMenuColor}!important;
			}
			.main_menu .main-menu-item ul.dropdown-menu li .nav-link:hover, .dropdown .dropdown-menu .dropdown-item:hover
			{
			   color: {$dropMenuHovColor}!important;
			}
			.main_menu .main-menu-item ul li .nav-link:not(.dropdown-item):before
			{
				background: {$headerBg};
			}

			.footer-area, .footer_Part, .footer_Part:before, .footer_Part:after {
				background: {$footerwbgColor};
			}

			.footer-area .single-footer-widget p, .footer-area .widget_gilb_newsletter .input-group input, .footer-area .copyright_part_text p, .footer_Part .copyright_part p, .footer-area .footer_2 .social_icon a, .footer_Part .footer_text h2
			{
				color: {$footerwTextColor}
			}
			.footer-area .copyright_part_text {
				border-color: {$footerwTextColor}
			}

			.footer-area .copyright_part_text a, .footer-area .social_icon a, .footer-area .single-footer-widget ul li a, .footer_Part .footer_menu a, .footer_Part .social_icon a
			{
			   color: {$footerwanchorcolor};
			}
			.footer_Part .footer_menu a:hover, .footer_Part .social_icon a:hover
			{
			   color: {$footerwanchorhovcolor};
			}
			.footer-area .copyright_part_text .footer-text > a, .footer_Part .copyright_part p > a
			{
			   color: {$footerAncDefHovColor};
			}
			.footer-area .btn{
				background: {$footerwanchorcolor};
			}
			.footer-area .single-footer-widget .btn
			{
			   background: {$footerAncDefHovColor};
			}
			.footer-area .social_icon a:hover, .footer-area .single-footer-widget ul li a:hover
			{
			   color: {$footerAncDefHovColor}!important;
			}
			.footer-area .copyright_part_text a:hover, .footer-area .footer_2 .social_icon a:hover, .footer-area .single-footer-widget p span
			{
			   color: {$footerAncDefHovColor}!important;
			}

			#f0f {
				background-color: {$fofbg};
			}
			.f0f-content .h1 {
				color: {$foftonecolor};
			}
			.f0f-content p {
				color: {$fofttwocolor};
			}

			.comment_form .btn_1.button:hover, .search-page .button.button-contactForm:hover, .f0f-content .button.button-contactForm:hover{
				background: #fff;
			}

        ";
       
    wp_add_inline_style( 'gilb-common', $customcss );
    
}
add_action( 'wp_enqueue_scripts', 'gilb_common_custom_css', 50 );