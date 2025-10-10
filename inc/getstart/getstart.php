<?php
//about theme info
add_action( 'admin_menu', 'vw_church_gettingstarted' );
function vw_church_gettingstarted() {
	add_theme_page( esc_html__('About VW Church', 'vw-church'), esc_html__('Theme Demo Import', 'vw-church'), 'edit_theme_options', 'vw_church_guide', 'vw_church_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function vw_church_admin_theme_style() {
	wp_enqueue_style('vw-church-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('vw-church-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_church_admin_theme_style');

//guidline for about theme
function vw_church_mostrar_guide() {
	//custom function about theme customizer
	$vw_church_return = add_query_arg( array()) ;
	$vw_church_theme = wp_get_theme( 'vw-church' );
?>


<div class="wrapper-info">  
	<div id="tc-header">
		<div class="tc-container">
			<a class="tc-logo">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/logo.png" alt="" />
			</a>
			<span class="tc-header-action">
			<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customize', 'vw-church'); ?></a>
			<a href="<?php echo esc_url( VW_CHURCH_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-church' ); ?></a>
			<a href="<?php echo esc_url( VW_CHURCH_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Get Premium', 'vw-church' ); ?></a>
			<a href="<?php echo esc_url( VW_CHURCH_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank" class="bundle-btn"> <?php esc_html_e( 'Bundle Of 220+ Themes at $99', 'vw-church' ); ?></a>
			</span>
		</div>
	</div>
	<div class="tc-container">
		<div class="tc-tabs">
			<ul>
				<li class="tablinks home active" onclick="vw_church_openCity(event, 'tc_demo')">
					<a href="#">
						<?php esc_html_e( 'Theme Demo Import', 'vw-church' ); ?>
					</a>
				</li>
				<li class="tablinks" onclick="vw_church_openCity(event, 'tc_index')">
					<a href="#">
						<?php esc_html_e( 'Free Theme Information', 'vw-church' ); ?>
					</a>
				</li>
				<li class="tablinks" onclick="vw_church_openCity(event, 'tc_pro')">
					<a href="#">
						<?php esc_html_e( 'Premium Theme Information', 'vw-church' ); ?>
					</a>
				</li>
				<li class="tablinks" onclick="vw_church_openCity(event, 'tc_create')">
					<a href="#">
						<?php esc_html_e( 'Theme Support', 'vw-church' ); ?>
					</a>
				</li>
			</ul>
		</div><!-- END .tc-tabs -->
	</div>

	<div class="tc-container">
		<div class="tc-section">
			<div  id="tc_demo" class="tabcontent">
				<h2><?php esc_html_e( 'Welcome to VW Church', 'vw-church' ); ?> <span class="version">Version: <?php echo esc_html($vw_church_theme['Version']);?></span></h2>
				<hr>
				<div class="demo">
					<h4><?php esc_html_e( 'Click the "Run Importer" button below to load demo content for VW Church', 'vw-church' ); ?></h4>
					<?php /* Demo Import */ require get_parent_theme_file_path( '/inc/getstart/demo-content.php' );?>
				</div>
			</div><!-- END .tc-section -->
		</div>
	</div>

	<div class="tc-container">
		<div class="tc-section">
			<div  id="tc_index" class="tabcontent">
				<h2><?php esc_html_e( 'Welcome to VW Church Theme', 'vw-church' ); ?> <span class="version">Version: <?php echo esc_html($vw_church_theme['Version']);?></span></h2>
				<hr>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_CHURCH_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-church' ); ?></a>
					<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-church'); ?></a>
					<a class="get-pro" href="<?php echo esc_url( VW_CHURCH_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'vw-church'); ?></a>
				</div>
				<div class="col-tc-6">
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/screenshot.png" alt="" />
				</div>
				<div class="col-tc-6">
					<P><?php esc_html_e( 'VW Church is a vibrant WordPress theme that encapsulates the essence of outdoor adventures and nature exploration synonymous with summer camp experiences. Tailored to capture the excitement of wilderness activities and camping adventures, it serves as a digital hub for showcasing camp traditions and fostering a sense of camaraderie among camp counselors and cabin mates. With its vibrant design and customizable features, the theme brings to life the thrill of bonfire nights, campfire songs, and engaging camp games. It highlights the educational value of summer camps by promoting swimming lessons, water sports such as canoeing, kayaking, VW Church, Kids VW Church, Outdoor VW Church, Adventure VW Church, Day Camp, Overnight Camp, VW Church Activities, Sports Camp, VW Church for Kids, Nature Camp, VW Church Registration, Teen VW Church, Camp Counselor, VW Church Experience, VW Church for Teens, Educational VW Church, VW Church Programs, Family VW Church, VW Church Games, Youth VW Church, VW Church for Boys and Girls, sailing, and fishing, VW Church, Outdoor Activities, Adventure Camp, Kids Camp, Family Retreat, Campground, Youth Programs, Recreational Camps, Wilderness Retreat, Summer Programs, Camp Activities, Camp Management, Family Camping, Outdoor Education, Camp Events and other camp activities that encourage personal growth and skill development. Moreover, the theme’s user-friendly layout and interactive elements make it easy for summer camps to showcase their unique offerings and attract campers and families seeking memorable outdoor experiences. It celebrates the joy of shared meals with customizable options for campsite and campfire cooking experiences, fostering a sense of community and connection among campers. The VW Church WordPress Theme is designed to evoke the spirit of adventure and discovery, promoting summer fun while emphasizing the importance of environmental stewardship and outdoor education. It serves as a digital gateway to the world of summer camps, inspiring campers of all ages to embark on unforgettable wilderness journeys and create lifelong memories in the great outdoors.', 'vw-church' ); ?></P>
				</div>
			</div>
		</div><!-- END .tc-section -->
	</div>

	<div class="tc-container">
		<div class="tc-section">
			<div id="tc_pro" class="tabcontent">
				<h3><?php esc_html_e( 'VW Church Theme Information', 'vw-church' ); ?></h3>
				<hr>
				<div class="info-link-pro">
					<a href="<?php echo esc_url( VW_CHURCH_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Buy Now', 'vw-church' ); ?></a>
					<a href="<?php echo esc_url( VW_CHURCH_LIVE_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Live Demo', 'vw-church' ); ?></a>
					<a href="<?php echo esc_url( VW_CHURCH_PRO_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Pro Documentation', 'vw-church' ); ?></a>
				</div>
				<div class="pro-image">
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/VW-Church-Responsive.png" alt="" />
				</div>
			<div class="col-pro-5">
				<h4><?php esc_html_e( 'VW Church Pro Theme', 'vw-church' ); ?></h4>
				<p><?php esc_html_e( 'The VW Church WordPress Theme epitomizes outdoor adventure with its vibrant design and user-friendly interface. Tailored for summer-themed websites, it offers a range of features to showcase the spirit of outdoor exploration and recreation. From its captivating homepage layout to its customizable sections, this theme provides the perfect platform for highlighting summer activities such as camping, hiking, swimming, and water sports. With its responsive design, the VW Church WordPress Theme ensures seamless viewing across various devices, allowing visitors to engage with the website from desktops, laptops, tablets, and smartphones. Its modern and sleek aesthetic creates an inviting atmosphere, inviting users to immerse themselves in the allure of summer adventures. Moreover, the VW Church WordPress Theme includes various customization options, allowing users to personalize their websites according to their preferences. From changing color schemes and fonts to adding custom widgets and elements, users caan tailor their websites to reflect their unique style and branding. Built-in features such as galleries, sliders, and portfolio sections enable users to showcase images and videos of summer activities, enhancing the visual appeal of the website. Additionally, integration with popular plugins and tools further enhances the functionality of the theme, allowing users to add advanced features such as contact forms, social media integration, and e-commerce capabilities.', 'vw-church' ); ?></P>		
			</div>
			<div class="col-pro-6">				
				<h4><?php esc_html_e( 'Theme Features', 'vw-church' ); ?></h4>
				<ul>
					<li><?php esc_html_e( 'Theme Customization', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Responsive Design', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Logo Upload', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Social Media Links, Title and Tagline Customization', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Banner Settings', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Template Pages', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Home Page Template', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Theme sections', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Contact us Page Template / Support Templates', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Blog Templates & Layout', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Page Templates & Layout', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Color Pallete For Particular Sections', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Global Color Option ', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Section Reordering', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Demo Importer', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Enable Disable Options On All Sections, Logo', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Full Documentation', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Latest WordPress Compatibility', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Support 3rd Party Plugins', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Secure and Optimized Code', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Exclusive Functionalities', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Social Media Feature', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Section Google Font Choices', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Video Gallery', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Simple & Mega Menu Option', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Support to add custom CSS / JS', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Shortcodes', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Custom Background, Colors, Header, Logo & Menu', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Premium Membership', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Budget Friendly Value', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Priority Error Fixing', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Custom Feature Addition', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'All Access Theme Pass', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Seamless Customer Support', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'VW Church', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Detail Services', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'About Business Page', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Team Member Page', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Project Description Page', 'vw-church' ); ?></li>
					<li><?php esc_html_e( 'Support Page', 'vw-church' ); ?></li>
				</ul>				
			</div>	
		</div><!-- END .tc-section -->
	</div>

	<div class="tc-container">
		<div class="tc-section">
			<div id="tc_create" class="tabcontent">
				<div class="tab-cont">
					<h4><?php esc_html_e( 'Need Support?', 'vw-church' ); ?></h4>				
					<div class="info-link-support">
						<P><?php esc_html_e( 'Our team is obliged to help you in every way possible whenever you face any type of difficulties and doubts.', 'vw-church' ); ?></P>
						<a href="<?php echo esc_url( VW_CHURCH_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support Forum', 'vw-church' ); ?></a>
					</div>
				</div>
				<div class="tab-cont">	
					<h4><?php esc_html_e('Reviews', 'vw-church'); ?></h4>				
					<div class="info-link-support">
						<P><?php esc_html_e( 'It is commendable to have such a theme inculcated with amazing features and robust functionalities. I feel grateful to recommend this theme to one and all.', 'vw-church' ); ?></P>
						<a href="<?php echo esc_url( VW_CHURCH_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-church'); ?></a>
					</div>
				</div>

				<div class="tc-section large-section">
					<h2>Let‘s customize your website</h2>
					<p>There are many changes you can make to customize your website. Explore customization options and make it unique.</p>
					<div class="tc-buttons">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>" class="tc-btn primary large-button"><?php esc_html_e('Start Customizing', 'vw-church'); ?></a>
					</div><!-- END .tc-buttons -->
				</div>
			</div>
		</div><!-- END .tc-section -->
	</div>
</div>
<?php } ?>
