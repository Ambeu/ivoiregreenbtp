{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Spartan Multi Image Picker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">

        <div class="card mt-5">
            <div class="card-body">

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Image Gallery</label>
                    <div class="col-sm-10">
                        <div id="multi_image_picker" class="row"></div>
                    </div>
                </div>

            </div>
        </div>

	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="../dist/js/spartan-multi-image-picker.js"></script>

	<script type="text/javascript">
		$(function(){

			$("#multi_image_picker").spartanMultiImagePicker({
				fieldName     : 'fileUpload[]', // this configuration will send your images named "fileUpload" to the server
				directUpload : {
					status: true,
					loaderIcon: `<div class="spinner-border text-primary"></div>`, // spinner class from bootstrap
					url: 'action.php',
					additionalParam : {
						name : 'My Name'
					},
					success : function(data, textStatus, jqXHR){

					},
					error : function(jqXHR, textStatus, errorThrown){

					}
				}
			});
		});
	</script>
</body>
</html> --}}

<section class="content mt-4">
    <div class="container-fluid">
        <div class="row">
                <div class="col-md-3">

                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="{{url('storage/photos_annonce/'. $annonceEdit['image'])}}" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">{{$annonceEdit['titre']}}</h3>
                            {{-- <p class="text-muted text-center">Software Engineer</p> --}}
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                <b>Ville</b> <span class="float-right">{{$annonceEdit['ville']}}</span>
                                </li>
                                <li class="list-group-item">
                                <b>Adresse</b> <span class="float-right">{{$annonceEdit['lieu']}}</span>
                                </li>
                                <li class="list-group-item">
                                <b>Contact</b> <span class="float-right">{{$annonceEdit['contact2']}}</span>
                                </li>
                                <li class="list-group-item">
                                <b>Type</b> <span class="float-right">{{$annonceEdit['type']}}</span>
                                </li>
                            </ul>
                            <a wire:click.prevent="goToAnnonce()" class="btn btn-primary btn-block"><b>Retour sur la liste des annonces</b></a>
                        </div>

                    </div>

                </div>

                <div class="col-md-9">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                            <h4 class="card-title">Gallerie de l'annonce du {{ \Carbon\Carbon::parse($annonceEdit['created_at'])->translatedFormat('d F Y') }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($allVues as $item)
                                    <div class="col-sm-2">
                                        <a href="{{url('storage/additional_photos/'. $item->filename)}}" data-toggle="lightbox" data-title="sample 11 - white" data-gallery="gallery">
                                        <img src="{{url('storage/additional_photos/'. $item->filename)}}" class="img-fluid mb-2" alt="white sample">
                                        </a>
                                    </div>
                                    @endforeach


                                </div>

                            </div>
                        </div>
                    </div>

                </div>


        </div>

    </div>
</section>



