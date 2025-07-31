<x-layout heading="Marketplace">

    <form method="GET" action="{{ route('parts.index') }}">
        <form method="GET" action="{{ route('parts.index') }}">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <select class="form-select" name="series" onchange="this.form.submit()">
                        <option value="">-- Виберіть серію --</option>
                        @foreach ($seriesList as $item)
                            <option value="{{ $item }}" {{ request('series') == $item ? 'selected' : '' }}>{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-auto">
                    @if ($model_code->isNotEmpty())
                        <select class="form-select" name="model_code" onchange="this.form.submit()">
                            <option value="">-- Виберіть модель --</option>
                            @foreach ($model_code as $code)
                                <option value="{{ $code }}" {{ request('model_code') == $code ? 'selected' : '' }}>{{ $code }}</option>
                            @endforeach
                        </select>
                    @endif
                </div>
            </div>
        </form>
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
