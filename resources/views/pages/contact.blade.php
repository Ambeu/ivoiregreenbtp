@extends('base.app')

@section('content')

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Nous Contacter</h2>
            </div>
            <div class="col-12">
                <a href="">Accueil</a>
                <a href="">Page Contact</a>
            </div>
        </div>
    </div>
</div>

<livewire:contacts>



@endsection


@push('scripts')
<script>
      document.getElementById('tel').addEventListener('input', function (e) {

            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,2})(\d{0,2})(\d{0,2})(\d{0,2})/);
            e.target.value =  x[1] + '-' + x[2] + '-' + x[3] + '-' + x[4] + '-' + x[5];
        });
</script>
@endpush


