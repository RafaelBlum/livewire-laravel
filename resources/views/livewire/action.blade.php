<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2 p-3" style="border-radius: 6px; font-size: 12px;">
    <h3 class="text-bold mb-2">Actions</h3>

    <div class="d-flex d-inline mb-3">
        <button type="button" class="btn btn-outline-warning btn-block" wire:click="$set('texto', 'Rafael fernando Goulart Blum')">Magic Actions</button>
    </div>

    <div class="d-flex d-inline mb-3">
        <button type="button" class="btn btn-outline-warning btn-block" wire:click="soma(10, 40)">Action soma</button>
    </div>

    <div class="d-flex d-inline mb-3">
        <button type="button" class="btn btn-outline-warning btn-block" wire:click="parameterAction({{$total}})">Action passando parametros</button>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
        <textarea wire:keydown.enter="displayMasagem($event.target.value)" class="form-control form-control-sm" name="desc" id="desc" placeholder="Action passado por enter [keydown.enter]"></textarea>
    </div>

    <form wire:submit.prevent="getSoma">
        <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-1">
                <input wire:model="n1" type="text" class="form-control form-control-sm" placeholder="N1">
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-1">
                <input wire:model="n2" type="text" class="form-control form-control-sm" placeholder="N2">
            </div>



            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                <button type="submit" class="btn btn-outline-warning btn-block">Action form passando parametros</button>
            </div>
        </div>
    </form>

    <hr>
    <div class="mt-2 text-black-50 text-bold">
        <h6>Resultado</h6>
        <p>Soma: {{$total}}</p>
        <p>Mensagem: {{$texto}}</p>

        <p>Total: {{$total}}</p>
    </div>
</div>
{{--
    AÇÕES PARA ESCUTAR O NAVEGADOR:
    DIRETIVAS DE ESCUTA
    [] WIRE:CLICK="METODO"
    [] WIRE:KEYDOWN.ENTER="METODO"
    [] WIRE:SUBMIT.PREVENT="METODO"
 --}}