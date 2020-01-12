
<!-- <?php foreach ($descript as $val): ?>
    <h3><?php echo$val['title']; ?></h3>
    <p><?php echo $val['description']; ?></p>
    <hr>
<?php endforeach; ?> -->

<div class="background__middle">
   <div class="container dop">
    <div class="middle__content">
      <div class="middle__title"><h1><?php echo $descript2[0]['title']; ?></h1></div>
      <div class="middle__desc"><?php echo $descript2[0]['description']; ?></div>
        <img class="structure_image" src="/public/images/structure_image.jpg" alt="">

        <?php foreach ($struction as $val): ?>
          <div class="middle__structure"><?php echo $val['desc_struct']; ?></div>
        <?php endforeach; ?>

    </div>
      <img class="middle_img" src="/public/images/centOS_2.jpg" alt="">
   </div> 
  </div>


<div id="anchor">

  <div class="features__background">
    <div class="container"> 
      <div class="features">


        <div class="features__item">
          <img class="features__icon" src="public/images/computer.png" alt="">
          <h4 class="features__title"><?php echo $descript[0]['title']; ?></h4>
          <div class="features__text"><?php echo $descript[0]['description']; ?></div>
        </div>

        <div class="features__item">
          <img class="features__icon" src="public/images/question.png" alt="">
          <h4 class="features__title"><?php echo $descript[1]['title']; ?></h4>
          <div class="features__text"><?php echo $descript[1]['description']; ?></div>
        </div>
        
        <div class="features__item">
          <img class="features__icon" src="public/images/cloud.png" alt="">
          <h4 class="features__title"><?php echo $descript[2]['title']; ?></h4>
          <div class="features__text"> <?php echo $descript[2]['description']; ?></div>
        </div>
        <div class="features__item">
          <img class="features__icon" src="public/images/download.png" alt="">
          <h4 class="features__title"><?php echo $descript[3]['title']; ?></h4>
          <div class="features__text"><?php echo $descript[3]['description']; ?></div>
        </div>
        <div class="features__item">
          <img class="features__icon" src="public/images/globus.png" alt="">
          <h4 class="features__title"><?php echo $descript[4]['title']; ?></h4>
          <div class="features__text"><?php echo $descript[4]['description']; ?></div>
        </div>
        <div class="features__item">
          <img class="features__icon" src="public/images/smartphone.png" alt="">
          <h4 class="features__title"><?php echo $descript[5]['title']; ?></h4>
          <div class="features__text"><?php echo $descript[5]['description']; ?></div>
        </div>

      </div>                 
    </div>
  </div>

</div>


<div class="footer">
  
  
  </div>