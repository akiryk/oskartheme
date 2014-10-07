<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package leaner
 */

get_header(); ?>

<main>
  <div class="hero">
    <div class="hero-image">
      <img src="/wp-content/uploads/2014/10/paris1.jpg" height="486" width="1680" id="paris1"/>
      <img src="/wp-content/uploads/2014/10/mexico2.jpg" height="486" width="1680" id="mexico1"/>
      <img src="/wp-content/uploads/2014/10/china1.jpg" height="486" width="1680" id="china1"/>
      <img src="/wp-content/uploads/2014/10/israel1.jpg" height="486" width="1680" id="israel1"/>
      <img src="/wp-content/uploads/2014/10/germany1.jpg" height="486" width="1680" id="germany1"/>
      <img src="/wp-content/uploads/2014/10/other1.jpg" height="486" width="1680" id="other1"/>
    </div>

    <!--<img src="http://lorempixel.com/1680/486" height="486" width="1680"/>-->
    <div class="search-area">
      <div id="expand-languages" class="main-search-field">
        I'd like to practice speaking <span class="selection"><span class="language" id="selected-language">French</span><span class="icon down-arrow-lg"></span></span>
        <ul id="main-select-language" class="two-column-list language-menu">
          <li id="french" data-id="0">French</li>
          <li id="spanish" data-id="1">Spanish</li>
          <li id="german" data-id="3">German</li>
          <li id="mandarin" data-id="2">Mandarin</li>
          <li id="hebrew" data-id="4">Hebrew</li>
          <li id="other" data-id="5">Other</li>
        </ul>
      </div>
      <a href="#" id="go-phrase" class="main-search-button">Allez-y!</a>
    </div>
  </div>
  <div class="content row">
    <div class="large-4 med-6 columns">
      <h3>Practice & Improve</h3>
      <p class="first">Improve your foreign language skills by having online video conversations with native speakers.
      </p>
      <a href="http://language-up.com/?page_id=15" class="button">More About Learning</a>
    </div>
    <div class="large-4 med-6 columns">
      <h3>Coach</h3>
      <p class="first">What special skills do you need to be a language coach? Just a good attitude and a bit of patience.
      </p>
      <a href="http://language-up.com/?page_id=12" class="button">More About Coaching</a>
    </div>
    <div class="large-4 med-12 columns">
      <h3>It's Free</h3>
      <p class="first">
        We're just getting started, and for a short time we're giving free practice sessions in exchange for your honest feedback.
      </p>
      <a href="http://language-up.com/?page_id=17" class="button">Try For Free</a>
    </div>
   </div>

</main>

<div id="load-view" class="overlay">
  <div class="loading">
    <div class="load-text">Searching for people who speak <span id="load-language"></span></div>
    <img src="/wp-content/uploads/2014/10/talking-anim.gif"/>
  </div>
</div>

<div id="demo-only" class="overlay">
  <div class="callout">
    <h3>Whoops!</h3>
    <p><strong id="reason-text"></strong></p>
    <p>This is only a proof-of-concept, and doesn't actually do more than demonstrate a few ideas about
    how LanguageUp works. </p><p>Try selecting French and clicking on that.</p>
    <button class="inline close-demo-only">Close</button>
  </div>
</div>

<?php get_footer(); ?>