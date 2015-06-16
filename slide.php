<!-- liteAccordion is Homepage Only -->
<link rel="stylesheet" href="css/liteaccordion.css" type="text/css" />

<div id="featured_slide"> 
    <ol>
      <li>
        <h2><span>Slide 1</span></h2>
        <div><img src="images/demo/featured-slide/720x360.gif" alt="" /></div>
      </li>
      <li>
        <h2><span>Slide 2</span></h2>
        <div><img src="images/demo/featured-slide/720x360.gif" alt="" /></div>
      </li>
      <li>
        <h2><span>Slide 3</span></h2>
        <div><img src="images/demo/featured-slide/720x360.gif" alt="" /></div>
      </li>
      <li>
        <h2><span>Slide 4</span></h2>
        <div><img src="images/demo/featured-slide/720x360.gif" alt="" /></div>
      </li>
      <li>
        <h2><span>Slide 5</span></h2>
        <div><img src="images/demo/featured-slide/720x360.gif" alt="" /></div>
      </li>
    </ol>
  </div>

  <!-- liteAccordion is Homepage Only --> 
<script type="text/javascript" src="js/liteaccordion.jquery.min.js"></script> 
<script type="text/javascript">
$("#featured_slide").liteAccordion({
    theme: "os-tpl",
    containerWidth: 960, // fixed (px)
    containerHeight: 360, // fixed (px) - overall height of the slider
    headerWidth: 48, // fixed (px) - slide spine title
    firstSlide: 1, // displays slide (n) on page load
  activateOn: "click", // click or mouseover
    autoPlay: false, // automatically cycle through slides
    pauseOnHover: true, // pause slides on hover
    rounded: false, // square or rounded corners
    enumerateSlides: true, // put numbers on slides
    slideSpeed: 800, // slide animation speed
    cycleSpeed: 6000, // time between slide cycles
});
</script>