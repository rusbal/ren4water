<li class="{{ ($item->active)?' active':'' }}">
    <a href="{{ $item->url }}" class="{{ ($item->url == '/join')?'btn-no-margin btn-primary orange':'' }}">{{ $item->name }}</a>
</li>
