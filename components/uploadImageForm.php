<div class="content--section">
                <?php $profile->imageHeading(); ?>
                <div>
                <form action="" method="POST" enctype="multipart/form-data">

                
                <div class="group">
                    <label for="myLabel" class="form--label" id="label"></label>
                    <input type="file" name="image" id="myLabel" class="myImage" onchange="imageName()">
                    <div class="error">
                        <?php if($uploadImages->imageErrors['image']): echo $uploadImages->imageErrors['image']; endif; ?>
                    </div>
                </div>
                <!-- Close group -->
                

                <div class="group">
                    <input type="submit" name="uploadBtn" id="" class="btn btn-sweet" value="Upload Picture">
                </div>
                <!-- Close group -->
        </form>
    </div>
<!-- close content--section -->
</div>