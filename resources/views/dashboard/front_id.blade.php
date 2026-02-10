<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/jpg" href="https://Affordableinvprogram.net/assets/images/fav.png"/>
<!-- Required meta tags -->    
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,shrink-to-fit=no, user-scalable=0"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Swiftinvt Pro is a registered trading company. With Swiftinvt Pro, you can discover a better trading experience using our awesome trading platform which is available on desktop, web and mobile.">
<!-- Schema.org for Google -->
<meta itemprop="name" content="Swiftinvt Pro">
<meta itemprop="description" content="Swiftinvt Pro is a registered trading company. With Swiftinvt Pro, you can discover a better trading experience using our awesome trading platform which is available on desktop, web and mobile.">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Swiftinvt Pro">
<meta name="twitter:description" content="Swiftinvt Pro is a registered trading company. With Swiftinvt Pro, you can discover a better trading experience using our awesome trading platform which is available on desktop, web and mobile. ">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta name="og:description" content="Swiftinvt Pro is a registered trading company. With Swiftinvt Pro, you can discover a better trading experience using our awesome trading platform which is available on desktop, web and mobile. ">
<meta name="og:title" content="Swiftinvt Pro">
<meta name="og:site_name" content="Swiftinvt Pro">
<meta name="og:locale" content="en_US">
<meta name="og:type" content="website">
<!-- Image to display -->
<meta property="og:image" content="assets/images/logo.png">
<meta property="og:image:type" content="image/jpeg">
<!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
<meta property="og:image:width" content="300">
<meta property="og:image:height" content="300">
<!-- Website to visit when clicked in fb or WhatsApp-->
<meta property="og:url" content="https://Affordableinvprogram.net">
<!-- MS Tile - for Microsoft apps-->
<meta name="msapplication-TileImage" content="https://Affordableinvprogram.net/assets/images/logo.png">    
<!-- fb & Whatsapp -->
<!-- Site Name, Title, and Description to be displayed -->
<meta property="og:site_name" content="Swiftinvt Pro">
<meta property="og:title" content="Create wealth by discovering the potentials of earning in an enhanced cryptocurrency system.">
<meta property="og:description" content="Swiftinvt Pro is a registered trading company. With Swiftinvt Pro, you can discover a better trading experience using our awesome trading platform which is available on desktop, web and mobile. ">
<!-- end import -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./assets/css/style.css?v=21290">
<link rel="stylesheet" href="./assets/css/icons.css">
<link rel="stylesheet" href="./assets/css/ui.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">    <title>Upload Verification -Swiftinvt Pro</title>

    <link rel="stylesheet" type="text/css" href="../js/cute-alert-master/style.css">

    <style>
        .upload-container {
            /*margin: 0 auto;*/
            width: 100%;
            margin-bottom: 10px;
        }

        .upload-area {
            /*width: 100%;*/
            /*margin: 0 auto;*/
            /*margin-top: 100px;*/
            height: 200px;
            border: 2px dashed #eb6a61;
            border-radius: 3px;
            text-align: center;
            overflow: auto;
            background-color: white;
        }

        .upload-area:hover {
            cursor: pointer;
        }

        .upload-area h1 {
            /*font-family: sans-serif;*/
            /*line-height: 50px;*/
            text-align: center;
            font-weight: normal;
            color: darkslategray;
            font-size: 18px;
            padding: 20px;
        }

        #file {
            display: none;
        }

    </style>

</head>
<body class="crypt-dark">
<header>
</header>
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="cryptorio-forms cryptorio-forms-dark text-center pt-5 pb-5">
                <div class="logo">
                    <img width="80%" src="images/logo.png" alt="logo-image">
                </div>
                <h3 class="p-4">Upload Any Government Issued ID Card For Verification</h3>

                <h4 class="p-0">
                    (
                    <span id="uploadCount">0</span> of
                    <span id="totalCount">0</span> Uploaded
                    )
                </h4>

                
                
                <div class="cryptorio-main-form">
                <form action="{{route('front-id')}}" method ="POST" enctype="multipart/form-data">
									{{ csrf_field()}}                                    
                        <label for="email" class="text-lg text-warning" style="font-size: 20px"> Upload<span>ID Card Front</span> </label>

                        <div class="upload-container">
                            <input type="file" name="image" id="file">

                            <!-- Drag and Drop container-->
                            <div class="upload-area" id="uploadfile">
                                <h1>Drag and Drop file here<br/>Or<br/>Click to select file</h1>
                                <img id="imageThumbnail" src="https://capitalelitepro.com/account/assets/images/uploadimage.png" alt="your image"
                                     width="0%"/>
                                <span id="sizeThumbnail" class="d-block"></span>
                            </div>
                        </div>


                        <input type="submit"  value="Upload" class="crypt-button-red-full"
                               style="cursor:pointer;">
                    </form>
                    <p class="float-left"><a href="{{('/')}}">Goto Home Page</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

	<footer>
		
	</footer>
    <script src="https://s3.tradingview.com/tv.js"></script>
    <script src="./assets/js/bundle.js"></script>

<link rel="stylesheet" type="text/css" href="../js/cute-alert-master/style.css">
<script type="text/javascript" src="../js/cute-alert-master/cute-alert.js"></script>
<script type="text/javascript" src="../js/Toast-Loading-Indicator-Plugin/jquery.toast.js"></script>

<script src="assets/js/jquery3-5-1.js"></script>
<script>
    let uploadingFile = null;
    let allInitialList = null;
    let remainingList = null;
    let currentUploading = null;

    $(function () {

        setInitial();

        // preventing page from redirecting
        $("html").on("dragover", function (e) {
            e.preventDefault();
            e.stopPropagation();
            setText("Drag here");
        });

        $("html").on("drop", function (e) {
            e.preventDefault();
            e.stopPropagation();
        });

        // Drag enter
        $('.upload-area').on('dragenter', function (e) {
            e.stopPropagation();
            e.preventDefault();
            setText("Drop");

        });

        // Drag over
        $('.upload-area').on('dragover', function (e) {
            e.stopPropagation();
            e.preventDefault();
            setText("Drop");
        });

        // Drop
        $('.upload-area').on('drop', function (e) {
            e.stopPropagation();
            e.preventDefault();
            setText("File Selected");

            var files = e.originalEvent.dataTransfer.files;
            addFile(files);

        });

        // Open file selector on div click
        $("#uploadfile").click(function () {
            $("#file").click();
        });

        // file selected
        $("#file").change(function () {
            setText("Selected");

            let files = $('#file')[0].files;
            addFile(files);
        });

        $('#btnUpload').click(function (e) {
            e.stopPropagation();
            e.preventDefault();

            createFormAndUploadFile();
        })


    });

    function setInitial(){
        let obj = [{"title":"ID Card Front","status":false},{"title":"ID Card Back","status":false},{"title":"A Selfie of You Holding ID Card","status":false}];
        let remaining = [];

        $("#totalCount").text(obj.length);

        let counter = 0;
        for (let i = 0; i < obj.length; i++) {
            if (obj[i]['status'] === true){
                counter++;
                //obj.splice(obj[i], 1);
            }else{
                remaining.push(obj[i]);
            }
        }
        allInitialList = obj;
        currentUploading = remaining[0];
        remainingList = remaining;

        $("#uploadCount").text(counter);

        if (currentUploading){
            $("#currentUploadTitle").text(currentUploading['title']);
        }

        if (!currentUploading && !remaining.length){
            window.location = "";
        }

    }

    function addFile(files) {
        let valid = validateFile(files);

        if (valid.status === true) {
            showThumbnail(files);
            setUploadedFile(files);
        } else {
            reset();
            showInvalidFileWarning(valid.message);
        }
    }

    function showInvalidFileWarning(message) {
        cuteAlert({
            type: "error",
            title: message ?? "Invalid file type or size",
            message: "",
            buttonText: "Okay"
        });
    }

    function setText(text) {
        $("h1").text(text);
    }

    function showThumbnail(files) {
        $('#sizeThumbnail').text("");
        if (files) {

            $('#imageThumbnail')
                .attr('src', URL.createObjectURL(files[0]))
                .width(100)
                .height(100);
            let size = convertSize(files[0].size);
            $('#sizeThumbnail').text(size);
        }
    }

    function setUploadedFile(files) {
        if (files) {
            uploadingFile = files[0];
        }
    }

    function createFormAndUploadFile() {
        let fileToUpload = uploadingFile;

        if (fileToUpload) {
            let formUploadData = new FormData();
            formUploadData.append('file', fileToUpload);
            formUploadData.set("user_id", "356");
            formUploadData.set("current_upload", currentUploading['title']);
            uploadData(formUploadData);
        } else {
            cuteAlert({
                type: "error",
                title: "You have not selected any image. <br> Drag and drop or Select an image",
                message: "",
                buttonText: "Okay"
            });
        }

    }

    function uploadData(formData) {
        setText("Uploading ...");
        $.ajax({
            url: 'upload_action.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response){
                console.log(response);
                if (response['status'] === true){
                    window.location = "";
                }
            }
        });
    }

    function convertSize(size) {
        var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
        if (size == 0) return '0 Byte';
        var i = parseInt(Math.floor(Math.log(size) / Math.log(1024)));
        return Math.round(size / Math.pow(1024, i), 2) + ' ' + sizes[i];
    }

    function validateFile(files) {
        if (files) {
            let file = files[0];
            let size = file.size / 1024 /1024;
            let type = file.type;

            if (size > 5 ) {
                return {status: false, message: 'File it too large! <br> Max Size should be 5MB'};
            }

            let type_reg = /^image\/(jpg|png|jpeg|bmp|gif|ico)$/;

            if (!type_reg.test(type)) {
                return {status: false, message: 'File type is not supported <br> Only image files are allowed'};
            }

            return {status: true, message: 'Valid'};
        }
        return {status: false, message: 'Select an image file'};
    }

    function reset(){
        uploadingFile = null;
        setText("");
        $("h1").html("Drag and Drop file here<br/>Or<br/>Click to select file");
        $("#file").empty();
        $('#sizeThumbnail').text("");
        $('#imageThumbnail').width(0).height(0);
    }

</script>
</body>
</html>