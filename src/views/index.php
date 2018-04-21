<div id="templatemo_right_column">
    
        <div id="featured_project">
            <div id="slider">
                <ul id="sliderContent">
                    <li class="sliderImage">
                        <a href=""><img src="images/slider/1.jpg" alt="1" /></a>
                        <span class="top"><strong>Project 1</strong><br />Suspendisse turpis arcu, dignissim ac laoreet a, condimentum in massa.</span>
                    </li>
                    <li class="sliderImage">
                        <a href=""><img src="images/slider/2.jpg" alt="2" /></a>
                        <span class="bottom"><strong>Project 2</strong><br />uisque eget elit quis augue pharetra feugiat.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="images/slider/3.jpg" alt="3" />
                        <span class="left"><strong>Project 3</strong><br />Sed et quam vitae ipsum vulputate varius vitae semper nunc.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="images/slider/4.jpg" alt="4" />
                        <span class="right"><strong>Project 4</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </li>
                    <li class="clear sliderImage"></li>
                </ul>
            </div>
        </div>
        
        <div id="templatemo_main">
            
            <?php foreach ($data as $post) { ?>

               <div class="post_section">
            
                <h2><a href="blog_post.html"><?php echo $post['header'] ?></a></h2>
                
    
                <strong>Author: </strong><?php echo $post['author'] ?><strong> Category:</strong> <a href="#"><?php echo $post['category'] ?></a>
                
                <img src="images/templatemo_image_01.jpg" alt="image 1" />
                
                <p><?php echo $post['description'] ?></p>
              
                
            </div>

            <?php }  ?>
            
                
        </div>