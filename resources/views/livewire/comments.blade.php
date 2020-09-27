<div class="d-flex justify-content-center">
    <div class="container w-50 mt-5">
        <h1 class="">Comments</h1>
        <form class="row mt-3" wire:submit.prevent="addComment">
            <div class="col-10">
                <input type="" class="form-control" placeholder="What's in your mind!" wire:model.lazy="newComment">
            </div>
            <div class="col-2">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
        @foreach ($comments as $comment)
        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <h5 class="card-title"><b>{{ $comment['user'] }}</b></h5>
                            <p class="ml-3 text-muted">{{ $comment['created_at'] }}</p>
                        </div>
                        <p class="card-text">{{ $comment['body'] }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
