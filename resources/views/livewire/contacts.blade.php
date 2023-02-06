<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="contact wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
        <div class="container">
            <div class="section-header text-center">
                {{-- <p></p> --}}
                <h2>Nous sommes a votre disposition</h2>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="flaticon-address"></i>
                            <div class="contact-text">
                                <h2>Adresse</h2>
                                <p>28 BP 437 ABIDJAN 28,
                                    COCODY ANGRE 7è TRANCHE</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="flaticon-call"></i>
                            <div class="contact-text">
                                <h2>Téléphone</h2>
                                <p>(+225) 07 09 61 23 93/07 09 29 50 60</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="flaticon-send-mail"></i>
                            <div class="contact-text">
                                <h2>Email</h2>
                                <p>ivoiregreenbtp20@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm"  wire:submit.prevent="addContact()">
                            <div class="control-group mb-3">
                                <input type="text" class="form-control " id="nom" wire:model="newContact.nom" placeholder="Votre nom complet">
                                @error("newContact.nom")
                                <span class="text-danger">{{$message}}</span>
                                @enderror

                            </div>
                            <div class="control-group mb-3">
                                <input type="text" class="form-control" id="email" wire:model="newContact.email" placeholder="Votre email"  >
                                @error("newContact.email")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="control-group mb-3">
                                <input type="text" class="form-control" id="tel"   wire:model="newContact.tel" placeholder="01-05-40-00-00" >
                                @error("newContact.tel")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="control-group mb-3">
                                <textarea class="form-control" id="corps" placeholder="Message" wire:model="newContact.corps"  ></textarea>
                                @error("newContact.corps")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div>
                                <button class="btn" type="submit" id="sendMessageButton">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
