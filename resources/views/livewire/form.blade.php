<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2 p-3" style="border-radius: 6px; font-size: 12px;">
    <h3 class="text-bold">Property binding</h3>

    <form>
        <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <input wire:model.debounce.500ms="nome" type="text" class="form-control form-control-sm" placeholder="Nome">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <select wire:model="fruta" name="fruta" id="select" class="custom-select custom-select-sm">
                    <option value="" selected="false">Selecione uma fruta</option>
                    <option value="laranja">laranja</option>
                    <option value="uva">uva</option>
                    <option value="coco">coco</option>
                </select>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                <div class="row">
                    <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                        <label for="status">Estado civil: </label>
                        <input wire:model="status" type="radio" value="Solteiro">
                        <input wire:model="status" type="radio" value="Casado">
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7">
                        <label for="color">Cor favorita:</label>
                        Vermelha <input wire:model="colors" type="checkbox" value="vermelha">
                        Azul <input wire:model="colors" type="checkbox" value="azul">
                        Verde <input wire:model="colors" type="checkbox" value="verde">
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <textarea class="form-control form-control-sm" wire:model="desc" name="desc" id="desc" placeholder="Descreva texto"></textarea>
            </div>


            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                <button class="btn btn-outline-dark btn-block">Acessar property binding</button>
            </div>
        </div>
    </form>
    
    <hr>
    <div class="mt-2 text-dark text-bold">
        <h6>{{$form}}</h6>
        <p>Nome: {{$nome}}</p>
        <p>Descrição: {{$desc}}</p>
        <p>Estado civil: {{$status}}</p>
        <p>Cor favorita:</p>
        <ul>
            @foreach($colors as $cor)
                <li>{{$cor}}</li>
            @endforeach
        </ul>
        <p>Fruta favorita: {{$fruta}}</p>
    </div>
</div>
