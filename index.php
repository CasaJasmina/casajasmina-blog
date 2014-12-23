<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @package WordPress
 * @subpackage Casa_Jasmina
 * @since Casa Jasmina 1.0
 */

get_header(); ?>

	<div id="content">

    <div class="row box">

      <div class="row" id="whatis">
        <div class="title hightlighted">
          <strong>
            WHAT IS 
            <br>
            CASA JASMINA? 
          </strong>
        </div>

      </div>

      <div class="large-6 columns">
        <img src="img/cObjects.png"/>
      </div>



      <div class="large-6 columns">


        <div class="bubble right">
          Casa Jasmina is a <br>two-year pilot project in the space of domestic electronic networking, or, "the Internet of Things in the Home."
        </br>
        <p class="readmore">
          <a href="about.html">
            read more >
          </a>
        </p>
      </div>
    </div>


  </div>


  <div class="row box">
    <div class="row">

      <div class="title hightlighted">
        <strong>
          OPEN SOURCE  
          <br>
          CONNECTED LIVING <br>
        </strong>
      </div>

    </div>

    <div class="large-6 columns" id="components">
      <img src="img/components.png"/ >
    </div>

    <div class="large-6 columns">

      <div class="bubble left">
        The aim is to combine digital fabrication tools and open source electronics for the realization of an open source, connected apartment.
      </div>
    </div>

  </div>


  <div class="row box img big">
    <div class="large-12 columns">
      <img src="img/hack_white_goods.jpg"/  >
    </div>
  </div>



  <div class="row box">
    <div class="large-4 columns ">
      <div class="square">
        <div class="title hightlighted">
          <strong>
            TEST-BED <br>
          </strong>
        </div>

        <div class="content">
          The apartment will serve as test-bed for experiments and research on connected products and open source furnitures.  
        </div>
      </div>
    </div>

    <div class="large-4 columns ">
      <div class="square">
        <div class="title hightlighted">
          <strong>
            EXHIBITION  
            <br>
            SPACE <br>
          </strong>
        </div>

        <div class="content">
          The house will showcase bestpractices and innovative designs, opening up the discussion on the connected home to the public.
        </div>
      </div>
    </div>

    <div class="large-4 columns ">
      <div class="square">
        <div class="title hightlighted">
          <strong>
            GUEST  
            <br>
            HOUSE  <br>
          </strong>
        </div>
        <div class="content">
          Unlikely many showcase apartment, Casa Jasmina will be lived by real people that will rent out the place for short periods of time.
        </div>
      </div>
    </div>
  </div>

  <div class="row box">

    <div class="row">
      <div class="large-8 columns ">
        <div class="title hightlighted superbig" style="margin-top:20px">
          <strong>
            DO YOU WANT TO JOIN?
          </strong>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="large-6 columns ">
        <img src="img/collaborate.png"/ style="margin-top:30px; margin-bottom:30px;" >
      </div>
      <div class="large-6 columns">
        <div class="bubble right">
          We are looking for sponsors, suppliers, and designers willing to give their contribution to our challenging project        
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="large-12 small-12 small-centered columns contacts" >

      <img src="img/mail.png" />
      <div class="light-upper"> CONTACT US</div>
      <div class="light"> 
        <a href="mailto:casajasmina@arduino.cc?Subject=info%20again" target="_top">casajasmina@arduino.cc 
        </a>
      </div>

    </div>
  </div>
</div>
</div>


<?php get_footer(); ?>