<div class="container text-center">
    <div class="py-4">
        <h1>
            Movies
        </h1>
    </div>

    <div class="row justify-content-center gap-3 py-5">
        @foreach ($movies as $movie)
            <div class="col-2">
                <div class="card-info">
                    <h3 class="title">
                        {{ $movie->title }}
                    </h3>
                    <div class="original-title">
                        {{ $movie->original_title }}
                    </div>
                    <div class="nationality">
                        {{ $movie->nationality }}
                    </div>
                    <div class="date">
                        {{ $movie->date }}
                    </div>
                    <div class="vote">
                        {{ $movie->vote }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

<style>

</style>
