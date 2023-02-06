<div class="contact-form">
    <form role="form" wire:submit.prevent="save()" enctype="multipart/form-data">
        @csrf
    <div class="row mt-3 ">
        <div class="col-md-6 card">
            <div class="card-body">
                <div class="form-group">
                    <label for="inputName">Titre de l'annonce</label>
                    <input type="text" id="inputName" wire:model="titre" class="form-control">
                    @error("titre")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputDescription"> Description de l'annonce</label>
                    <textarea id="inputDescription" wire:model="description" class="form-control" rows="4"></textarea>
                    @error("description")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputClientCompany">Ville</label>
                    <input type="text" id="inputClientCompany" wire:model="ville" class="form-control">
                    @error("ville")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputName">Adresse de l'annonce</label>
                    <input type="text" id="inputName" wire:model="lieu" class="form-control">
                    @error("lieu")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputProjectLeader">Montant</label>
                    <input type="number" id="inputProjectLeader" wire:model="prix_annonce" class="form-control">
                    @error("prix_annonce")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputStatus">Type d'annonce</label>
                    <select id="inputStatus" class="form-control custom-select" wire:model="type">
                        <option selected="" >Select ...</option>
                        <option value="Vente Terrain" >Vente Terrain</option>
                        <option value="Vente Immobilière" >Vente Immobilière</option>
                    </select>
                    @error("type")
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-6 card">


            <div class="card-body">
                <div class="form-group">
                    <label for="inputProjectLeader">Proprietaire</label>
                    <input type="text" id="inputProjectLeader" class="form-control" wire:model="proprietaire">
                    @error("proprietaire")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputProjectLeader">Contact</label>
                    <input type="text" id="contact2" class="form-control" wire:model="contact2">
                    @error("contact2")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="inputProjectLeader">Image Principale</label>
                    <input type="file" id="inputProjectLeader" class="form-control" wire:model="imageAnnonce">
                    @error("imageAnnonce")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                {{-- <div class="form-group">
                    <label for="inputProjectLeader">Selectionner plusieurs images</label>
                    <input type="file" id="inputProjectLeader" class="form-control" wire:model="fileUpload" multiple />
                </div> --}}
                <div class="container">

                    <div class="card mt-5">
                        <div class="card-body">
                            <label class="col-sm-12 col-form-label">Selectionner plusieurs images</label>
                            <div class="row mb-3">

                                <div class="col-sm-10">
                                    {{-- <div id="multi_image_picker" class="row"></div> --}}
                                    <input type="file" id="inputProjectLeader" class="form-control" wire:model="fileUpload" multiple />
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="button" wire:click="goToAnnonce()"  class="btn btn-danger">Retouner à la liste des annonces </button>
            </div>


            </div>


    </div>

    </div>
    </form>
</div>



<script>
document.getElementById('contact2').addEventListener('input', function (e) {

var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,2})(\d{0,2})(\d{0,2})(\d{0,2})/);
e.target.value =  x[1] + '-' + x[2] + '-' + x[3] + '-' + x[4] + '-' + x[5];
});

window.addEventListener("ShowSuccesMessage", event=>{
    // console.log(event);
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        toast: true,
        title: event.detail.message,
        showConfirmButton: false,
        timer: 3500
    })
});

// $(function(){

// $("#multi_image_picker").spartanMultiImagePicker({
//     fieldName     : 'fileUpload[]', // this configuration will send your images named "fileUpload" to the server
//     directUpload : {
//         status: true,
//         loaderIcon: `<div class="spinner-border text-primary"></div>`, // spinner class from bootstrap
//         url: 'action.php',
//         additionalParam : {
//             name : 'My Name'
//         },
//         success : function(data, textStatus, jqXHR){

//         },
//         error : function(jqXHR, textStatus, errorThrown){

//         }
//     }
// });
// });


</script>
















