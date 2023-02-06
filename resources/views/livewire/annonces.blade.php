@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
@endpush
<div>
    {{-- The whole world belongs to you. --}}


    @if ($currentPage == PAGEANNONCE)
        @include('livewire.admin.annonce')
    @endif

    @if ($currentPage == PAGEADDANNONCE)
        @include('livewire.admin.add-annonce')
    @endif

    @if ($currentPage == PAGEVIEWANNONCE)
        @include('livewire.admin.allimage')
    @endif

    @if ($currentPage == PAGEUPDATEANNONCE)
        @include('livewire.admin.update-annonce')
    @endif
</div>

@push('scrpts')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="http://127.0.0.1:8000/dist/js/spartan-multi-image-picker.js"></script>
<script type="text/javascript">
    $(function(){

        $("#multi_image_picker").spartanMultiImagePicker({
            fieldName     : 'fileUpload[]', // this configuration will send your images named "fileUpload" to the server
            maxCount : 6,
            allowedExt:'png|jpg|jpeg|gif',
            onExtensionErr : function(index, file){
			console.log(index, file,  'extension err');
			alert("Le format selectionner est n'est pas correct !")
		},

        });
    });


</script>
@endpush
