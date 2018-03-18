@component('admin.layouts.default')
@slot('title') Laravel 5.4 iniciante @endslot
    <h3>{{ $title }} <small>{{ $description }}</small></h3>

    <div class="panel panel-default">
        <div class="panel-body">
            {{ $slot }}
        </div>
    </div>
@endcomponent