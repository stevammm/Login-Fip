<!DOCTYPE html>
<html>
<head>
        <title>PHP - Multiple Image upload using dropzone.js</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
</head>
<body>


<div class="container">
        <div class="row">
                <div class="col-md-12">
                        <h2>PHP - Multiple Image upload using dropzone.js</h2>
                        <form action="upload.php" enctype="multipart/form-data" class="dropzone" id="image-upload">
                                <div>
                                        <h3>Upload Multiple Image By Click On Box</h3>
                                </div>
                        </form>
                </div>
        </div>
</div>


<script type="text/javascript">
        Dropzone.options.imageUpload = {
        maxFilesize:1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif"
    };
</script>


</body>
</html>