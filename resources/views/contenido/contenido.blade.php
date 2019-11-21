@extends('principal')
@section('contenido')
    <!-- Administrador -->
    @if (Auth::user()->rol_id == 1)
        <template v-if="menu==0">
            <h1>¡Bienvenido {{Auth::user()->usuario}}!</h1>
        </template>
        <template v-if="menu==1">
            <h1>Administrador / 1</h1>
        </template>
        <template v-if="menu==2">
            <h1>Administrador / 2</h1>
        </template>
        <template v-if="menu==3">
            <h1>Administrador / 3</h1>
        </template>
        <template v-if="menu==4">
            <h1>Administrador / 4</h1>
        </template>
        <template v-if="menu==5">
            <h1>Administrador / 5</h1>
        </template>
        <template v-if="menu==6">
            <h1>Administrador / 6</h1>
        </template>
        <template v-if="menu==7">
            <h1>Administrador / 7</h1>
        </template>
        <template v-if="menu==8">
            <usuario-component></usuario-component>
        </template>
        <template v-if="menu==9">
            <cliente-component></cliente-component>
        </template>
    <!-- Director Proyecto -->
    @elseif(Auth::user()->rol_id == 2)
        <template v-if="menu==0">
            <h1>¡Bienvenido {{Auth::user()->usuario}}!</h1>
        </template>
        <template v-if="menu==1">
            <h1>D_Proyecto / 1</h1>
        </template>
        <template v-if="menu==2">
            <h1>D_Proyecto / 2</h1>
        </template>
        <template v-if="menu==3">
            <h1>D_Proyecto / 3</h1>
        </template>
        <template v-if="menu==4">
            <h1>D_Proyecto / 4</h1>
        </template>
        <template v-if="menu==5">
            <h1>D_Proyecto / 5</h1>
        </template>
        <template v-if="menu==6">
            <h1>D_Proyecto / 6</h1>
        </template>
        <template v-if="menu==7">
            <h1>D_Proyecto / 7</h1>
        </template>
        <template v-if="menu==8">
            <usuario-component></usuario-component>
        </template>
        <template v-if="menu==9">
            <h1>D_Proyecto / 9</h1>
        </template>
    <!-- Programador -->
    @elseif(Auth::user()->rol_id == 3)
        <template v-if="menu==0">
            <h1>¡Bienvenido {{Auth::user()->usuario}}!</h1>
        </template>
        <template v-if="menu==1">
            <h1>Programador / 1</h1>
        </template>
        <template v-if="menu==2">
            <h1>Programador / 2</h1>
        </template>
        <template v-if="menu==3">
            <h1>Programador / 3</h1>
        </template>
        <template v-if="menu==4">
            <h1>Programador / 4</h1>
        </template>
        <template v-if="menu==5">
            <h1>Programador / 5</h1>
        </template>
        <template v-if="menu==6">
            <h1>Programador / 6</h1>
        </template>
        <template v-if="menu==7">
            <h1>Programador / 7</h1>
        </template>
        <template v-if="menu==8">
            <usuario-component></usuario-component>
        </template>
        <template v-if="menu==9">
            <h1>Programador / 9</h1>
        </template>
    <!-- Cliente -->
    @elseif(Auth::user()->rol_id == 4)
        <template v-if="menu==0">
            <h1>¡Bienvenido {{Auth::user()->usuario}}!</h1>
        </template>
        <template v-if="menu==1">
            <h1>Cliente / 1</h1>
        </template>
        <template v-if="menu==2">
            <h1>Cliente / 2</h1>
        </template>
        <template v-if="menu==3">
            <h1>Cliente / 3</h1>
        </template>
        <template v-if="menu==4">
            <h1>Cliente / 4</h1>
        </template>
        <template v-if="menu==5">
            <h1>Cliente / 5</h1>
        </template>
        <template v-if="menu==6">
            <h1>Cliente / 6</h1>
        </template>
        <template v-if="menu==7">
            <h1>Cliente / 7</h1>
        </template>
        <template v-if="menu==8">
            <usuario-component></usuario-component>
        </template>
        <template v-if="menu==9">
            <h1>Cliente / 9</h1>
        </template>
    @endif
@endsection