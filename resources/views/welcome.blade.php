<x-layout>
    <div class="container-fluid mt-5">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="display-1">Pippo Nacifra</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12">
                <livewire:table :data="$data"/>
            </div>
        </div>
    </div>
</x-layout>