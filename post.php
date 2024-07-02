<?php require ('actions/securityaction.php');
require('actions/post/showpostaction.php'); 
 require('actions/post/respondaction.php'); 
 require('actions/post/showrespond.php'); 
 require('actions/user/showuseraction.php'); 

?>
<!DOCTYPE html>
<html lang="en">
<?php include'includes/head.php' ?>
<body class="blog-author bg-gray-200" >
 <?php include'includes/navbar.php' ?>
 

<header>
    <div class="page-header min-height-400" style="background-image: url('assets/img/city-profile.jpg');" loading="lazy">
      <span class="mask bg-gradient-dark opacity-8"></span>
    </div>
  </header>
 
  <div class="card card-body blur shadow-blur mx-3 mx-md-5 mt-n6 ">
    <section class="py-sm-7 py-1 position-relative ">
 
      <div class="container">
        <div class="row">
          <div class="col-11 mx-auto">
    <div class="row align-items-center">
    <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">

            <div class="card-body text-center" style="background-image: url('https://thumbs.dreamstime.com/b/abstract-digital-web-site-header-banner-background-technology-73179037.jpg')">
                    <!-- Profile picture image-->
                    <img class="img-fluid rounded-circle mb-2" src="uploads/<?php echo $userphoto;?>" alt="">
                    <!-- Profile picture help block-->
                    <h3 class="text-uppercase" ><?php echo  $username; ?> <?php echo  $userlast; ?> </h3>           
                    <h5><?= "Tél: ". $userphone ?></h5>
                    <h5><?= "Location: ". $postlocation ?></h5>

                             <!-- Profile picture upload button-->
                    <a class="btn btn-primary" href="tel:<?php echo $userphone ?>" type="button">Call</a>
                </div>
            </div>
        </div>
         <div class="col-xl-8">
            <div class="card mb-4" style="background-color: #f0f2f5;">
              <!-- author -->
              <div class="d-flex justify-content-between">
                <!-- avatar -->
                <div class="d-flex mt-4 ms-3">
              
                  <div>
                    <h3 class="m-0 fw-bold"><?= $postsubject ?> </h3>
                    <span class="text-muted fs-7"><?= $postdate ?> </span>
                    <span class="text-gradient text-warning  font-weight-bold my-2"><?php echo $postprice." DT"; ?></span>
                  </div>
                </div>
              </div>
              <!-- post content -->
              <div class="mt-3 ms-4">
                <!-- content -->
                <div >
                  <p>
                    <?php echo $postmessage; ?>
                  </p>
                  <div class="card-body text-center" >  <img
                    src="uploads/<?php echo $postphoto; ?>"
                    alt="post image"
                    class="img-fluid rounded "
                  /></div>
                
                </div>
                <!-- likes & comments -->
                <div class="post__comment mt-3 position-relative">
                  <!-- likes -->
                  <div
                    class="
                      d-flex
                      align-items-center
                      top-0
                      start-0
                      position-absolute
                    "
                    style="height: 50px; z-index: 5"
                  >
              
                  </div>
                  <!-- comments start-->
                 
                      <hr />
                      <!-- comment & like bar -->
                      <div class="d-flex justify-content-around">
                        <div
                          class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                          "
                        >
                          <form method="POST"><button name ="like"class="btn btn-primary"><i class="fas fa-thumbs-up me-3"></i><?php echo $likescount?>  Like</button><input name="id" type="hidden" value="<?php echo $postid?>"></form>
                          
                        </div>
                        <div
                          class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                          "
                          data-bs-toggle="collapse"
                          data-bs-target="#collapsePost1"
                          aria-expanded="false"
                          aria-controls="collapsePost1"
                        >
                          <i class="fas fa-comment-alt me-3"></i>
                          <p class="m-0">Comment</p>
                        </div>
                      </div>
                      <!-- comment expand -->
                      <div
                        id="collapsePost1"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample"
                      >
                        <hr />
                        <div class="accordion-body">
<div class="overflow-auto mt-3 " style="height: 150px">
                          <?php while($post=$getallresponse->fetch()){ ?>

                   
                          <!-- comment 2 -->
                          <div class="d-flex align-items-center my-1">
                            <!-- avatar -->
                            <img
                              src="https://source.unsplash.com/random/<?php echo $post['id']; ?>"
                              alt="avatar"
                              class="rounded-circle me-2"
                              style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              "
                            />
                            <!-- comment text -->
                            <div class="p-3 rounded comment__input w-100">
                              <p class="fw-bold m-0"><?php echo $post['author_name']; ?></p>
                              <p class="m-0 fs-7 bg-gray p-2 rounded">
                                <?php echo $post['content']; ?>
                              </p>
                            </div>
                          </div>
                          <?php } ?>
</div>
                          <!-- create comment -->
                          <form class="d-flex my-1 " method="Post">
                            <!-- avatar -->
                            <div>
                              <img
                                src="https://source.unsplash.com/collection/happy-people"
                                alt="avatar"
                                class="rounded-circle me-2"
                                style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                "
                              />
                            </div>
                            <!-- input -->
                            <input
                              type="text"
                              class="form-control border-0 rounded-pill bg-gray"
                              placeholder="Write a comment" name="content"
                            />
    <button type="submit" name="valide"class="btn bg-gradient-info  position-relative btn-sm me-2">repondre</button>
                          </form>
                  
                  <!-- end -->
                </div>
              </div>
            </div>
            </div>
        </div>
      
    </div>
  </div>
</section>
<div class=" px-6 mt-n4 ">
          <div class="card-body card bg-gradient-dark">
          <img class="img-fluid " src="assets/img/laa.png" alt="">
                          </div>
                          </div>

</div>


<?php include'includes/footer.php' ?>
</body>
</html>