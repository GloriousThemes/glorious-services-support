<?php
if (! defined('ABSPATH')) die;
function glorious_services_view_products() {
?>
<style>
.grid {
   display: flex;
     flex-wrap: wrap;
}
.box {
   width: 300px;
   margin: 10px;
   background: white;
   border-radius: 7px;
   overflow: hidden;
   box-shadow: 2px 5px 5px 5px #ececec;
}
.box .info {
   padding: 0px 15px 15px 15px;
}
</style>


  <?php 

  /* Using array and Foreach */
  $serviceArray = array(
     array(
          'img'  => 'siteground-review.jpg',
          'name' => 'SiteGround',
          'desc' => 'Managed high-performance cloud hosting platform. 5 popular cloud providers with unlimited sites.',
          'link' => 'https://gloriousthemes.com/siteground',
        ),
        array(
          'img'  => 'wp-rocket.png',
          'name' => 'WP Rocket',
          'desc' => '#1 cache plugin to speed WordPress. Get a faster website in a few clicks.',
          'link' => 'https://gloriousthemes.com/wp-rocket',
        ),
        array(
          'img'  => 'bunnycdn.png',
          'name' => 'BunnyCDN',
          'desc' => '37+ pops which provide <30ms latency worldwide. Cheap as ~$1/month.',
          'link' => 'https://gloriousthemes.com/bunnycdn',
        )
  );


  foreach ($serviceArray as $values => $key) {
    ?>

<div class="rsssl-item small">
  <div class="item-container">
      <div class="rsssl-grid-item-header">
        <h3><?php echo $key['name']; ?></h3>
      </div>
      <div class="rsssl-grid-item-content">
        <div class="rsssl-tips-tricks">
            <div class="tips-tricks-content">
              <div class="tips-tricks-top">
                  <div class="rsssl-tips-tricks-element">
                  <img
                    src="<?php echo  GLORIOUS_PLUGIN.'assets/img/'.$key['img']; ?>"
                    width="100%"
                    height="170px"
                  />
                  </div>
                  <?php echo $key['desc']; ?>
              </div>
            </div>
        </div>
      </div>
      <div class="rsssl-grid-item-footer">
        <a href="<?php echo $key['link']; ?>" target="_blank" class="button button-rsssl-secondary" style="float: inherit;width: 93%;text-align: center;">View More Information</a>
      </div>
  </div>
</div>
    <?php
  }


  /* PHP END */
  ?>



<?php
}