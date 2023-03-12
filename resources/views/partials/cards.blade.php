<h1>Movies</h1>

<div class="">
    @foreach ($movies as $movie)
        <div class="">
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
