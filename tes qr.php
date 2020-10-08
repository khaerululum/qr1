<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="jquery.min.js"></script>
<script src="instascan.min.js"></script>

<body>
<div class="container">
<div class="row justify-content-center mt-5">
<div class="col-md-5">
<div class="card-header bg transparent mb-0"><h5 class="text-center"><span class="font-weight-bold text-primary">Scan</span></h5></div>
<div class="car-body">

<video id="preview" width="300" height="300"></video>
<div class="form-group">
<input type="text" class="form-control"/>
</div>
</div>
</div>
</div>
</div>
</body>

<script type="text/javascript">

let scanner = new Instascan.Scanner({video: document.getElementById('preview')});
scanner.addListener('scan', function(content){

	alert(content);
});

Instascan.Camera.getCameras().then(function (cameras)){

	if(camera.length > 0){
		scanner.start(cameras[0]);
	}else{
		console.error('No cameras found');
	}
}).catch(function (e){
	console.error(e);
});

</script>