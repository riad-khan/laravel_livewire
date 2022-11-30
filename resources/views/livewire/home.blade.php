<div>
    <livewire:head title="Home" />
    <div class="container mt-5">
        <div class="row">

            @foreach($data as $item)

                <div class="col-md-4 mt-2">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://admin.riadhossain.me/{{$item['image']}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ substr_replace($item['title'], "...", 50) }}</h5>

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Details</a>

                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</div>


