

<div class="container-fluid">
    <div class="row">
    @for ($i =31 ; $i <=60 ; $i++)
        <div class="col-md-3 col-lg-2" style="
        box-sizing: border-box;
        padding:10px;
        ">
            <div class="card">
                <img class="card-img-top" src="https://picsum.photos/id/{{$i}}/200/200" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>


