<section class="content">

    <div class="card mt-3">
        <div class="card-header">
            <h3 class="card-title">Mes Annonces</h3>

            <div class="card-tools">
                {{-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button> --}}
                <a class="btn btn-link  mr-4 d-block" wire:click.prevent="goToaddPage()"><i class="fas fa-bullhorn"></i> Nouvelle Annonce</a>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 5%">
                            #
                        </th>
                        <th style="width: 15%">
                        Date de publication
                        </th>
                        <th style="width: 15%">
                        Titre
                        </th>
                        <th style="width: 15%">
                        Adresse
                        </th>
                        <th>
                        Ville
                        </th>
                        <th style="width: 15%" class="text-center">
                        Contact
                        </th>
                        <th style="width: 15%" class="text-center">
                        Prix
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($annonces as $annonce)
                    <tr>
                        <td>
                            @if (!empty($annonce->image))
                                    <img width="100px" src="{{ url('storage/photos_annonce/'. $annonce->image) }}" />
                                @else
                                    No image !
                                @endif
                        </td>
                        <td>
                            <a>
                                {{ \Carbon\Carbon::parse($annonce->created_at)->translatedFormat('d F Y') }}
                            </a>
                        </td>
                        <td>
                            {{$annonce->titre}}
                        </td>
                        <td class="project_progress">

                            {{$annonce->lieu}}
                        </td>
                        <td class="project-state">
                            {{$annonce->ville}}
                        </td>
                        <td class="project-state">
                            {{$annonce->contact2}}
                        </td>
                        <td class="project-state">
                            {{$annonce->prix_annonce}}
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" wire:click.prevent="goToViewImagePage('{{$annonce->id}}')">
                                <i class="fas fa-folder">
                                </i>
                            </a>
                            <a class="btn btn-info btn-sm" wire:click.prevent="goToUpdatePage('{{$annonce->id}}')">
                                <i class="fas fa-pencil-alt">
                                </i>
                            </a>
                            <a class="btn btn-danger btn-sm" wire:click.prevent="confirmDelete('{{$annonce->id}}')">
                                <i class="fas fa-trash">
                                </i>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <div class="card-footer">
            <div class="float-right">
                {{ $annonces->links() }}
            </div>
    </div>

    </div>

</section>

<script>
    window.addEventListener("ShowConfirmMessage", event=>{
    // console.log(event);
    Swal.fire({
        title: event.detail.message.title,
        text: event.detail.message.text,
        icon: event.detail.message.type,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Continuer',
        cancelButtonText: 'Annuler'
        }).then((result) => {
        if (result.isConfirmed) {
            // alert(event.detail.message.data.user_id)
            @this.deleteAnnonce(event.detail.message.data.userId)
        }
        })
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
</script>
