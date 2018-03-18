@component('admin.layouts.elements.body')
    @slot('title') Páginas @endslot
    @slot('description') @endslot

    <a href="{{ route('pages.index') }}" class="btn btn-default btn-xs">voltar</a>
    <a href="{{ route('pages.edit', 1) }}" class="btn btn-default btn-xs">editar</a>
    <a href="{{ route('pages.destroy', 1) }}" class="btn btn-default btn-xs">remover</a>
@endcomponent