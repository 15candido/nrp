@foreach($partners as $partner)
<a href="{{ $partner->website }}">
    <img class="max-h-24 m-auto" src="/images/partner/{{ $partner->logo }}" alt="{{ $partner->name }}"  />
</a>
@endforeach