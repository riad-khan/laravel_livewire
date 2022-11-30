<div>
<livewire:head title="BMI" />

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>BMI Calculator</h2>

                <form wire:submit.prevent="bmi">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Height</label>
                        <input type="text" wire:model.lazy="height" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Unit</label>
                       <select class="form-control"  wire:model.lazy="heightUnit">
                           <option value="inch">Inch</option>
                           <option value="Foot">Foot</option>

                       </select>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>




