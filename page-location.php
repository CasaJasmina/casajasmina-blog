<?php
/**
 * The location page file
 *
 * @package WordPress
 * @subpackage Casa_Jasmina
 * @since Casa Jasmina 1.0
 */

get_header(); ?>

<div id="content" class="page">

		<div class="row">
			<div class="large-8 large columns">
				<div class="row">
					<div class="title hightlighted">
						<strong>
							THE LOCATION
							<br>
							<br>
						</strong>
					</div>
				</div>

				<div class="row">

					<div class="large-12 large columns">
						<img src="<?php echo get_template_directory_uri(); ?>/images/map.png"></img>
					</div>

					<div class="large-12 small-12 columns">
						<br>
						Casa Jasmina will happen in Turin<br>
						Turin, is the capital of the Piedmont region. Located in the north-west area of Italy, it is important as one of the major industrial city in Italy and in Europe.<br>
						The industrial heritage of the city is well reflected in the architecture of the city, characterized by a the presence of many old fascinating factories.<br>
						Casa Jasmina, as a symbol of a new industrial revolution, enabled by digital fabrication and open source technologies, will be located in an old GHIA factory already shared by Officine Arduino, Fablab Torino and Toolbox coworking.
						<br><br>
					</div>
					<div class="large-12 large columns">
						<img src="<?php echo get_template_directory_uri(); ?>/images/via-egeo.jpg"></img>
					</div>



				</div>
			</div>
		</div>

	</div>
<?php get_footer(); ?>