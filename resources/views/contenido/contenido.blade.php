@extends('principal')
@section('contenido')

    <template v-if="menu==1">
        <example-component> </example-component>
    </template>
    <template v-if="menu==9">
        <usuario-component> </usuario-component>
    </template>

@endsection
