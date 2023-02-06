<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Message</h3>
                <div class="card-tools">
                    <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
                    <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        
            <div class="card-body p-0">
                <div class="mailbox-read-info">
                    <h5>Mr/Mme {{$messageArr['nom']}}</h5>
                    <h6>Email : {{$messageArr['email']}} <br>
                        Téléphone : {{$messageArr['tel']}}
                    <span class="mailbox-read-time float-right">{{ \Carbon\Carbon::parse($messageArr['created_at'])->translatedFormat('d F Y') }}</span></h6>
                </div>
                
                {{-- <div class="mailbox-controls with-border text-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm" data-container="body" title="Delete">
                            <i class="far fa-trash-alt"></i>
                        </button>
                        <button type="button" class="btn btn-default btn-sm" data-container="body" title="Reply">
                            <i class="fas fa-reply"></i>
                        </button>
                        <button type="button" class="btn btn-default btn-sm" data-container="body" title="Forward">
                            <i class="fas fa-share"></i>
                        </button>
                    </div>
                    
                    <button type="button" class="btn btn-default btn-sm" title="Print">
                        <i class="fas fa-print"></i>
                    </button>
                </div> --}}
                
                    <div class="mailbox-read-message">
                        <p>{{$messageArr['corps']}}</p>
                    </div>
                
                </div>
        
            <div class="card-footer">
                <div class="float-right">
                    <button type="button" class="btn btn-default" wire:click="retourListContact()"><i class="fas fa-reply"></i> Retour</button>
                    {{-- <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Forward</button> --}}
                </div>
                {{-- <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete</button>
                <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button> --}}
            </div>
        
        </div>
        
    </div>
    <div class="col-md-2"></div>
</div>