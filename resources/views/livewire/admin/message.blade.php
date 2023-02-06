<div class="row p-4 m-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title"><i class="fas fa-users fa-2x"></i> Liste des Messages</h3>
                <div class="card-tools d-flex align-items-center ">
                    {{-- <a class="btn btn-link text-white mr-4 d-block" wire:click.prevent="goToAddUser()"><i class="fas fa-user-plus"></i> Nouvel utilisateur</a> --}}
                      <div class="input-group input-group-md" style="width: 250px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0 table-striped" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th style="width:25%;">Nom Complet</th>
                            <th style="width:20%;" >Email</th>
                            <th style="width:20%;" >Contact</th>
                            {{-- <th style="width:20%;" >Message</th> --}}
                            <th style="width:20%;" class="text-center">Effectué le</th>
                            <th style="width:30%;" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            <tr>
                               
                                <td>{{$message->nom}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->tel}}</td>
                                {{-- <td>{{$message->corps}}</td> --}}
                                <td class="text-center"><span class="tag tag-success">{{$message->created_at->diffForHumans()}}</span></td>
                                <td class="text-center">
                                    <a class="btn btn-link" wire:click.prevent="detailMessage('{{$message->id}}')"> <i class="far fa-eye"></i> </a>
                                </td>
                            </tr>

                        @endforeach


                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                <div class="float-right">
                    {{ $messages->links() }}
                </div>
        </div>


            </div>

        </div>
</div> 