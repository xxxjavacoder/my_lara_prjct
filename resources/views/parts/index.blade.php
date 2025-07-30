<x-layout heading="Marketplace">

    <form method="GET" action="{{ route('parts.index') }}">
        <label for="series">Марка авто:</label>
        <select name="series" id="series" onchange="this.form.submit()">
            <option value="">Усі марки</option>
            @foreach($series as $model)
                <option value="{{ $model }}" {{ request('series') == $model ? 'selected' : '' }}>
                    {{ $model }}
                </option>
            @endforeach
        </select>
    </form>

    @foreach($parts as $part)
        <div class="card mx-2 mb-2">
            <div class="card-body">
                <h5 class="card-title">{{ $part->name }}</h5>
                Каталожний номер: <span>{{ $part->article }}</span>
                <p class="card-text">{{ $part->description }}</p>
                <div>
                    <span class="fs-italy">
                        {{ $part->price }}
                    </span>
                    <span class="fw-bold">
                        {{ $part->currency }}
                    </span>
                </div>
                <div>
                    @if($part->count > 0)
                        <span>Залишок на складі: {{ $part->count }}</span>
                    @else
                        <span>Немає в наявності!</span>
                    @endif
                </div>
            </div>
        </div>
    @endforeach

    {{ $parts->links() }}
</x-layout>
